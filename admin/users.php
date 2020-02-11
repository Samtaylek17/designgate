<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/handyman/admin/core/init.php';
    if(!is_logged_in()){
        login_error_redirect();
    }
    if(!has_permission()){
        permission_error_redirect('index.php');
    }
    include "includes/header.php"; 
    if(isset($_GET['delete'])){
        $delete_id = sanitize($_GET['delete']);
        $db->query("DELETE FROM users WHERE id = '$delete_id'");
        $_SESSION['success_flash'] = 'User has been deleted!';
        header('Location: users.php');
    }

    if(isset($_GET['add'])){
        $name = ((isset($_POST['name']))?sanitize($_POST['name']): '');
        $email = ((isset($_POST['email']))?sanitize($_POST['email']): '');
        $password = ((isset($_POST['password']))?sanitize($_POST['password']): '');
        $confirm = ((isset($_POST['confirm']))?sanitize($_POST['confirm']): '');
        $permissions = ((isset($_POST['permissions']))?sanitize($_POST['permissions']): '');
        $errors = array();
        if($_POST) {
                $emailQuery = $db->query("SELECT * FROM users WHERE email = '$email'");
                $emailCount = mysqli_num_rows($emailQuery);

            if($emailCount != 0){
                $errors[] = 'That email already exist in our database';
            }

            $required = array('name', 'email', 'password', 'confirm', 'permissions');
            foreach($required as $f){
                if(empty($_POST[$f])){
                    $errors[] = 'You must fill out all fields';
                break;
                }
            }

            if(strlen($password) < 6){
                $errors[] = 'Your password must be at least 6 characters';
            }

            if($password != $confirm){
                $errors[] = 'Your passwords do not match';
            }

            if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                $errors[] = 'You must enter a valid email';
            }

            if(!empty($errors)){
                echo display_errors($errors);
            }else{
                $hashed = password_hash($password, PASSWORD_DEFAULT);
                $db->query("INSERT INTO users (full_name, email, password, permissions) VALUES ('$name','$email','$hashed','$permissions')");
                $_SESSION['success_flash'] = 'User has been added!';
                header('Location: users.php');
            }
        }
?>
<div id="page-wrapper">
    <h2 class="text-center">Add A New User</h2><hr>
    <form action="users.php?add=1" method="post">
        <div class="form-group">
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name" class="form-control" value="<?=$name; ?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="<?=$email; ?>">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control" value="<?=$password; ?>">
        </div>
        <div class="form-group">
            <label for="confirm">Confirm Password:</label>
            <input type="password" name="confirm" id="confirm" class="form-control" value="<?=$confirm; ?>">
        </div>
        <div class="form-group">
            <label for="name">Permissions:</label>
            <select class="form-control" name="permissions">
               <option value=""<?= (($permissions == '')?' selected': '') ?>></option>
               <option value="editor"<?= (($permissions == 'editor')?' selected': '') ?>>Editor</option>
               <option value="admin,editor"<?= (($permissions == 'admin,editor')?' selected': '') ?>>Admin</option>
            </select>
        </div>
        <div class="form-group">
            <a href="users.php" class="btn btn-default">Cancel</a>
            <input type="submit" value="Add User" class="btn btn-primary">
        </div>
    </form>
</div>
    <?php
    } else{
    $result = $db->query("SELECT * FROM users ORDER BY full_name");
?>

<div id="page-wrapper">
            <div class="row">
                <h2>Users</h2>
                <a href="users.php?add=1" class="btn btn-success btn-sm">Add New User</a>
                <table class="table">
                    <tr>
                        <th></th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Join Date</th>
                        <th>Last Login</th>
                        <th>Permissions</th>
                    </tr>
    <?php while($user = $result->fetch_assoc()): ?>
        <tr>
            <td>
                <?php if($user['id'] != $user_data['id']): ?>
                    <a href="users.php?delete=<?=$user['id']; ?>" class="btn btn-primary btn-xs">
                        <i class="far fa-trash-alt"></i>
                    </a>
                <?php endif; ?>
            </td>
            <td><?=$user['full_name'] ?></td>
            <td><?=$user['email'] ?></td>
            <td><?=pretty_date($user['join_date']); ?></td>
            <td><?=(($user['last_login'] == '0000-00-00 00:00:00')? 'Never':pretty_date($user['last_login'])); ?></td>
            <td><?=$user['permissions'] ?></td>
        </tr>
    <?php endwhile; ?>
        </table>
    </div>
</div>

          <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
   <?php } ?>
</body>
</html>
<?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/handyman/admin/core/init.php';
            if(!is_logged_in()){
                login_error_redirect();
            }
            include "includes/header.php";
            
            $name = '';
            $role = '';
            $picture = '';
            $update = false;
            $id = 0;
            // $imageName = $_POST['imageName'];
            if(isset($_POST['submit'])) {
                $name = ((isset($_POST['name']))?sanitize($_POST['name']):'');
                $name = trim($name);
                // $banner = $_POST['banner'];
                $role = ((isset($_POST['role']))?sanitize($_POST['role']):'');
                $role = trim($role);
                $picture = ((isset($_POST['picture']))?sanitize($_POST['picture']):'');
                $picture = trim($picture);
                $db->query("INSERT INTO team (name, role, picture) VALUES ('$name', '$role', '$picture')");
                $_SESSION['message'] = "Record has been saved!";
                $_SESSION['msg_type'] = "success";
                header('Location: team.php');
            }
            $result = $db->query("SELECT * FROM team ORDER BY 'id'");
            
            if(isset($_GET['delete'])){
                $id = $_GET['delete'];
                $db->query("DELETE FROM team WHERE id=$id");

                $_SESSION["message"] = "Record has been deleted!";
                $_SESSION["msg_type"] = "danger";
                header('Location: team.php');
            }

            if(isset($_GET['edit'])) {
                $id = $_GET['edit'];
                $update = true;
                $result = $db->query("SELECT * FROM team WHERE id=$id");
                $record = mysqli_fetch_array($result);
                $name = $record['name'];
                $role = $record['role'];
                $picture = $record['picture'];
            }

            if(isset($_POST['update'])) {
                $id = $_POST['id'];
                $name = ((isset($_POST['name']))?sanitize($_POST['name']):'');
                $name = trim($name);
                // $banner = $_POST['banner'];
                $role = ((isset($_POST['role']))?sanitize($_POST['role']):'');
                $role = trim($role);
                $picture = ((isset($_POST['picture']))?sanitize($_POST['picture']):'');
                $picture = trim($picture);

                $db->query("UPDATE team SET name='$name', role='$role', picture='$picture' WHERE id=$id");
                $_SESSION['message'] = 'Record has been updated';
                $_SESSION['msg_type'] = "warning";
                header('Location: team.php');
            }
            ?>

		<div id="page-wrapper">
            <form action="team.php" method="post">
                <input type="hidden" name="id" value="<?= $id; ?>">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" class="form-control" value="<?= $name ?>" />
                <div>
                <div class="form-group">
                <label for="role">Role</label>
                    <input type="text" class="form-control" name="role" value="<?= $role ?>" />
                </div>
                <div class="form-group">
                <label for="picture">Picture</label>
                    <input type="file" class="form-control" name="picture" value="<?= $picture ?>" />
                </div>
            </form>
            <div class="form-group">
            <?php 
                if($update == true):
            ?>
                <button type="submit" name="update" class="btn btn-info">Update</button>
            <?php else: ?>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <?php endif; ?>
            </div>
            <div class="row">
                <table class="table table-condensed table-striped table-bordered table-responsive">
                    <tr>
                        <th>id</th>
                        <th>Full Name</th>
                        <th>Role</th>
                        <th>Picture</th>
                        <th>Action</th>
                    </tr>
                    <?php while($team = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $team['id'] ?></td>
                        <td><?= $team['name'] ?></td>
                        <td><?= $team['role'] ?></td>
                        <td><img src="../images/<?= $team['picture'] ?>" style="height: 45px; width:45px; border-radius: 50%;" /></td>
                        <td>
                            <a href="team.php?edit=<?= $team['id']; ?>" class="btn btn-xs btn-info">Edit</a>
                            <a href="team.php?delete=<?= $team['id']; ?>" class="btn btn-xs btn-danger">Delete</a>
                        </td>
                    </tr>
                    <?php endwhile ?>
                </table>
            </div>
            <?php if(isset($_SESSION['message'])): ?>
            
            <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                <?php 
                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                ?>
            </div>
            <?php endif ?>
        </div>
        

        <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>

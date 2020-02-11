<?php
    require_once $_SERVER['DOCUMENT_ROOT'].'/handyman/admin/core/init.php';
    if(!is_logged_in()){
        header('Location: login.php');
    }
    include "includes/header.php";
    $result = $db->query("SELECT * FROM users");
?>

		<div id="page-wrapper">
            <div class="row">
                <h2>Users</h2>
    
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Profile Picture</th>
                    </tr>
    <?php while($user = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?=$user['id'] ?></td>
                        <td><?=$user['full_name'] ?></td>
                        <td><?=$user['email'] ?></td>
                        <td><?=$user['join_date'] ?></td>
                        <td><?=$user['last_login'] ?></td>
                        <td>
                            <img src="../<?=$user['profilePic'] ?>" style="height: 45px; width: 45px; border-radius: 50%;"/>
                        </td>
                    </tr>
    <?php endwhile; ?>
                </table>
            </div>
        </div>
        

        <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>

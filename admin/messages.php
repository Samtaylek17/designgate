        <?php
            
            require_once $_SERVER['DOCUMENT_ROOT'].'/handyman/admin/core/init.php';
            if(!is_logged_in()){
                login_error_redirect();
            }
            include "includes/header.php";
            $result = $db->query("SELECT * FROM contact");
        ?>

		<div id="page-wrapper">
        <h3 class="mb-3">Messages</h3>
            <div class="row">
                <table class="table table-condensed table-striped table-bordered table-responsive">
                    <tr>
                        <th>id</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Message</th>
                    </tr>
                    <?php while($message = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $message['id'] ?></td>
                        <td><?= $message['firstname'] ?></td>
                        <td><?= $message['lastname'] ?></td>
                        <td><?= $message['email'] ?></td>
                        <td><?= $message['message'] ?></td>
                    </tr>
                    <?php endwhile ?>
                </table>
            </div>
        </div>
        

        <!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.js"> </script>
</body>
</html>

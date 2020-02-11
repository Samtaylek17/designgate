        <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/handyman/admin/core/init.php';
            if(!is_logged_in()){
                login_error_redirect();
            }
            include "includes/header.php";
            
            $title = '';
            $description = '';
            $icon = '';
            $update = false;
            $id = 0;
            // $imageName = $_POST['imageName'];
            if(isset($_POST['submit'])) {
                $title = ((isset($_POST['title']))?sanitize($_POST['title']):'');
                $title = trim($title);
                // $banner = $_POST['banner'];
                $description = ((isset($_POST['description']))?sanitize($_POST['description']):'');
                $description = trim($description);
                $icon = ((isset($_POST['icon']))?sanitize($_POST['icon']):'');
                $icon = trim($icon);
                $db->query("INSERT INTO services (title, description, icon) VALUES ('$title', '$description', '$icon')");
                $_SESSION['message'] = "Record has been saved!";
                $_SESSION['msg_type'] = "success";
                header('Location: services.php');
            }
            $result = $db->query("SELECT * FROM services ORDER BY 'id'");
            
            if(isset($_GET['delete'])){
                $id = $_GET['delete'];
                $db->query("DELETE FROM services WHERE id=$id");

                $_SESSION["message"] = "Record has been deleted!";
                $_SESSION["msg_type"] = "danger";
                header('Location: services.php');
            }

            if(isset($_GET['edit'])) {
                $id = $_GET['edit'];
                $update = true;
                $result = $db->query("SELECT * FROM services WHERE id=$id");
                $record = mysqli_fetch_array($result);
                $title = $record['title'];
                $description = $record['description'];
                $icon = $record['icon'];
            }

            if(isset($_POST['update'])) {
                $id = $_POST['id'];
                $title = ((isset($_POST['title']))?sanitize($_POST['title']):'');
                $title = trim($title);
                // $banner = $_POST['banner'];
                $description = ((isset($_POST['description']))?sanitize($_POST['description']):'');
                $description = trim($description);
                $icon = ((isset($_POST['icon']))?sanitize($_POST['icon']):'');
                $icon = trim($icon);

                $db->query("UPDATE services SET title='$title', description='$description', icon='$icon' WHERE id=$id");
                $_SESSION['message'] = 'Record has been updated';
                $_SESSION['msg_type'] = "warning";
                header('Location: services.php');
            }
            ?>

		<div id="page-wrapper">
            <form action="process.php" method="post">
                <input type="hidden" name="id" value="<?= $id; ?>">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="<?= $title ?>" />
                <div>
                <div class="form-group">
                <label for="description">Description</label>
                    <input type="text" class="form-control" name="description" value="<?= $description ?>" />
                </div>
                <div class="form-group">
                <label for="icon">Description</label>
                    <input type="file" class="form-control" name="icon" value="<?= $icon ?>" />
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
                        <th>Image Path</th>
                        <th>Image Name</th>
                        <th>Icon</th>
                        <th>Action</th>
                    </tr>
                    <?php while($service = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $service['id'] ?></td>
                        <td><?= $service['title'] ?></td>
                        <td><?= $service['description'] ?></td>
                        <td><?= $service['icon'] ?></td>
                        <td>
                            <a href="services.php?edit=<?= $service['id']; ?>" class="btn btn-xs btn-info">Edit</a>
                            <a href="process.php?delete=<?= $service['id']; ?>" class="btn btn-xs btn-danger">Delete</a>
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

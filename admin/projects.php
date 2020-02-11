        <?php
            require_once $_SERVER['DOCUMENT_ROOT'].'/handyman/admin/core/init.php';
            if(!is_logged_in()){
                login_error_redirect();
            }
            include "includes/header.php";
            $title = '';
            $description = '';
            $image = '';
            $update = false;
            $id = 0;
            // $imageName = $_POST['imageName'];
            if(isset($_POST['submit'])) {
                $title = ((isset($_POST['title']))?sanitize($_POST['title']):'');
                $title = trim($title);
                // $banner = $_POST['banner'];
                $description = ((isset($_POST['description']))?sanitize($_POST['description']):'');
                $description = trim($description);
                $image = ((isset($_POST['image']))?sanitize($_POST['image']):'');
                $image = trim($image);
                $db->query("INSERT INTO projects (title, description, image) VALUES ('$title', '$description', '$image')");
                $_SESSION['message'] = "Record has been saved!";
                $_SESSION['msg_type'] = "success";
                header('location: projects.php');
            }
            $result = $db->query("SELECT * FROM projects ORDER BY 'id'");
            
            if(isset($_GET['delete'])){
                $id = $_GET['delete'];
                $db->query("DELETE FROM projects WHERE id=$id");
    
                $_SESSION["message"] = "Record has been deleted!";
                $_SESSION["msg_type"] = "danger";
                header('location: projects.php');
            }
    
            if(isset($_GET['edit'])) {
                $id = $_GET['edit'];
                $update = true;
                $result = $con->query("SELECT * FROM projects WHERE id=$id");
                $record = mysqli_fetch_array($result);
                $title = $record['title'];
                $description = $record['description'];
                $image = $record['image'];
            }
    
            if(isset($_POST['update'])) {
                $id = $_POST['id'];
                $title = ((isset($_POST['title']))?sanitize($_POST['title']):'');
                $title = trim($title);
                // $banner = $_POST['banner'];
                $description = ((isset($_POST['description']))?sanitize($_POST['description']):'');
                $description = trim($description);
                $image = ((isset($_POST['image']))?sanitize($_POST['image']):'');
                $image = trim($image);
    
                $db->query("UPDATE projects SET title='$title', description='$description', image='$image' WHERE id=$id");
                $_SESSION['message'] = 'Record has been updated';
                $_SESSION['msg_type'] = "warning";
                header('location: projects.php');
            }

        ?>

		<div id="page-wrapper">
            <form action="projects.php" method="post">
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
                <label for="image">image</label>
                    <input type="file" class="form-control" name="image" value="<?= $image ?>" />
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
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    <?php while($project = $result->fetch_assoc()) : ?>
                    <tr>
                        <td><?= $project['id'] ?></td>
                        <td><?= $project['title'] ?></td>
                        <td><?= $project['description'] ?></td>
                        <td><?= $project['image'] ?></td>
                        <td>
                            <a href="projects.php?edit=<?= $project['id']; ?>" class="btn btn-xs btn-info">Edit</a>
                            <a href="projects.php?delete=<?= $project['id']; ?>" class="btn btn-xs btn-danger">Delete</a>
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

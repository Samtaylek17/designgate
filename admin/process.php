<?php
        session_start();
        require_once("includes/config.php");
        $title = '';
        $description = '';
        $icon = '';
        $update = false;
        $id = 0;
        function sanitize($dirty){
            return htmlentities($dirty, ENT_QUOTES, "UTF-8");
        }
        // $imageName = $_POST['imageName'];
        if(isset($_POST['submit'])) {
            $title = ((isset($_POST['title']))?sanitize($_POST['title']):'');
            $title = trim($title);
            // $banner = $_POST['banner'];
            $description = ((isset($_POST['description']))?sanitize($_POST['description']):'');
            $description = trim($description);
            $icon = ((isset($_POST['icon']))?sanitize($_POST['icon']):'');
            $icon = trim($icon);
            $con->query("INSERT INTO services (title, description, icon) VALUES ('$title', '$description', '$icon')");
            $_SESSION['message'] = "Record has been saved!";
            $_SESSION['msg_type'] = "success";
            header('Location: services.php');
        }
        $result = $con->query("SELECT * FROM services ORDER BY 'id'");
        
        if(isset($_GET['delete'])){
            $id = $_GET['delete'];
            $con->query("DELETE FROM services WHERE id=$id");

            $_SESSION["message"] = "Record has been deleted!";
            $_SESSION["msg_type"] = "danger";
            header('Location: services.php');
        }

        if(isset($_GET['edit'])) {
            $id = $_GET['edit'];
            $update = true;
            $result = $con->query("SELECT * FROM services WHERE id=$id");
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

            $con->query("UPDATE services SET title='$title', description='$description', icon='$icon' WHERE id=$id");
            $_SESSION['message'] = 'Record has been updated';
            $_SESSION['msg_type'] = "warning";
            header('Location: services.php');
        }

    ?>
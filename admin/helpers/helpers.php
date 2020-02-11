<?php
function display_errors($errors){
    $display = '<div class="alert alert-danger">';
    foreach($errors as $error){
        $display .= '<li><strong>'.$error.'</strong></li>';
    }
    $display .= '</div>';
    return $display;
}
function display_success($success){
    $displays = '<div class="alert alert-success" style="border-radius: 10px;">';
    foreach($success as $successe){
        $displays .= $successe;
    }
    $displays .= '</div>';
    return $displays;
}
function sanitize($dirty){
    return htmlentities($dirty, ENT_QUOTES, "UTF-8");
}

function signin_redirect($url = 'products.php'){
    $_SESSION['success_flash'] = 'You have successfully signed in';
    header('Location: '.$url);
}

function login($user_id){
    $_SESSION['SBUser'] = $user_id;
    global $db;
    $date = date("Y-m-d H:i:s");
    $db->query("UPDATE users SET last_login = '$date' WHERE id = '$user_id'");
    $_SESSION['success_flash'] = 'You are now logged in!';
    header('Location: index.php');
}

function is_logged_in(){
    if(isset($_SESSION['SBUser']) && $_SESSION['SBUser'] > 0){
        return true;
    }
    return false;
}

function login_error_redirect($url = 'login.php'){
    $_SESSION['error_flash'] = 'You must be logged in to access that page';
    header('Location: '.$url);
}

function permission_error_redirect($url = 'login.php'){
    $_SESSION['error_flash'] = 'You do not have permission to access that page';
    header('Location: '.$url);
}

function has_permission($permission = 'admin'){
    global $user_data;
    $permissions = explode(',', $user_data['permissions']);
    if(in_array($permission,$permissions,true)){
        return true;
    }
    return false;
}

function pretty_date($date){
    return date("M d, Y h:i: A",strtotime($date));
}
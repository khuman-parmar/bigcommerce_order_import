<?php

/**
 * Admin side Login file
 * 
 * 
 * @author Khuman Parmar <kp67869@gmail.com >
 * @version 1.0
 * @package CodeTaxi 
 * 
 */
if ($_REQUEST['doLogin']) {
    User::doLogin('admin@admin.com', '123456');
    User::setSession();
    json_die("success");
}

if ($_REQUEST['username'] && !isset($_SESSION['user'])) {
    $user_name = _escape($_REQUEST['username']);
    $password = _escape($_REQUEST['password']);

    if (User::doLogin($user_name, $password)) {
        User::setSession($user_name);
        _R(lr('home'));
    } else {
        $error = "Invalid Login";
    }
}

if (isset($_SESSION['user'])) {
    _R(lr('home'));
}
$no_visible_elements = true;
$jsInclude = "login.js.php";
$tpl_file = "index_login.tpl.php";
_cg("page_title", "Login");
?>
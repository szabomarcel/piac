<?php

switch ($menu) {
    case 'idex.php':
        require_once './login/home.php';
        break;
    case 'zoldtsegUser':
        require_once './login/zoldtsegUser.php';
        break;
    case 'logout':
        require_once './login/logout.php';
        break;
    case 'zoldtsegGuest':
        require_once './login/zoldtsegGuest.php';
        break;
    case 'login':
        require_once './login/login.php';
        break;
    case 'register':
        require_once './login/regisztracio.php';
        break;
    case 'rolunk':
        require_once './login/piacrol.php';
        break;
    default:
        require_once './login/home.php';
        break;
}
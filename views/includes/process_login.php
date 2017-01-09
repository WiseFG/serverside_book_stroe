<?php

/*
 * Copyright (C) 2013 peredur.net
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

include_once 'db_connect.php';
include_once 'functions.php';

sec_session_start(); // Our custom secure way of starting a PHP session.

if (isset($_POST['login_user'], $_POST['login_pass']) /*&& !empty($_POST['login_user'])*/) {

    $user = filter_input(INPUT_POST, 'login_user', FILTER_SANITIZE_EMAIL);
    $password = $_POST['login_pass']; // The hashed password.

    if (login($user, $password, $mysqli) == true) {
        // Login success 
       // header("Location: ../protected_page.php");
        header("Location: ../home");
        exit();
    } else {

        // Login failed 
        header('Location: ../error?err=1');
        exit();
    }
} 
else {
    // The correct POST variables were not sent to this page. 
       header('Location: ../error?err=Could not login');
    exit();
}
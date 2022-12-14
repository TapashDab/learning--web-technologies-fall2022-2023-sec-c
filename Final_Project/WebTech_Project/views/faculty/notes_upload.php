<?php
session_start();
require_once('../../models/db.php');


if (isset($_POST['submit'])) {
    require('../../models/Faculty_model.php');
   
}
$error = false;
$status = false;

$src = $_FILES['image']['tmp_name'];
$dst = "notes/" . $_FILES['image']['name'];

if (move_uploaded_file($src, $dst)) {
    echo " ";
} else {
    echo "Error";
}

if ($error == false) {
    $user = ['', 'dst' => $dst];
    $status = notes_upload($user);
    if ($status) {
     echo "successful";
        
    } else {
        echo "DB insert error!";
    }
}


?>
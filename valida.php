<?php
$username = $_POST['username'];
$password = $_POST['password'];
$falso = 1;

if ($username == 'ikeda' && $password == '123'){

    $falso =0;
    header('location:home.php?');

}
else {

    $falso = 1;
    header('location:index.php?falso='. $falso);

}


exit;
?>

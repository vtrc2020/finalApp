<?php

$n = $_POST['name'];
$e = $_POST['email'];
$p = $_POST['password'];
$u = $_POST['username'];
$l = $_POST['location'];


$d = file_get_contents('ppl.json');
$d = json_decode($d, true);

$i = count($d);
++$i;

$a = [
    "id" => $i,
    "name" => $n,
    "email" => $e,
    "password" => $p,
    "username" => $u,
    "location" => $l
];

$_SESSION = $a;

print_r($a);

array_unshift($d, $a);

$d = json_encode($d);
file_put_contents('ppl.json', $d);

$t = $_FILES['photo']['tmp_name'];
$f = "img/$i.jpg";
move_uploaded_file($t, $f);

//Redirects the user back to the index page after filling out the form

header('location:profiles.php?'.$i);




?>
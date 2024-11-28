<?php

$link = mysqli_connect("localhost", "root", "", "baziq");

$jeden = $_POST['title'];
$dwa = $_POST['year'];
$trzy = $_POST['ocena'];
$cztery = $_POST['gatunki'];
$piec = $_POST['director'];

$tur = "INSERT INTO `filmy`(`gatunki_id`, `rezyserzy_id`, `tytul`, `rok`, `ocena`) VALUES ($cztery, $piec, '$jeden', $dwa, $trzy)";

mysqli_query($link, $tur);
header("location: index.php");
<?php
include('../header.php');

include("../../classes/Database.php");

$db = new Database;
$d = $db->displayData("album", $_GET['delete']);

foreach($d as $d){
    
    unlink("../../photos/" . $d['img_name'] . $d['img_ext']);
}
$db->deleteData("CRUD", $db->escapeString($_GET['delete']));
$db->deleteData("album", $db->escapeString($_GET['delete']));



	header("Location: $base_url");
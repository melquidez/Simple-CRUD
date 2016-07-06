<?php 
include('../header.php');

include("../../classes/Database.php");

$db = new Database;

$ar = array(
    'c_firstname'		=> $db->escapeString($_POST['fname']),
    'c_lastname'		=> $db->escapeString($_POST['lname']),
    'c_email'			=> $db->escapeString($_POST['email']),
    'c_age'				=> $db->escapeString($_POST['age']),
    'c_job_title'		=> $db->escapeString($_POST['JobTitle']),
    'c_date_submited'	=> $_POST['DateSubmited']
);



$s = $db->updateData("crud", $_GET['update'], $ar);

if($s){
	header("Location: $base_url");
}

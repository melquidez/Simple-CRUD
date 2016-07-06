<?php 
include('../header.php');
include('../../classes/Database.php');

$db = new Database;


function checkType($type){
    switch ($type) {
        case 'image/png':
            return '.png';
            break;

        case 'image/jpeg':
            return '.jpg';
            break;

        case 'image/gif':
            return '.gif';
            break;

        case 'image/bmp':
            return '.bmp';
            break;

        default:
            return '.noEXT';
            break;
    }
}


$ar = array(
    'c_firstname'		=> $db->escapeString($_POST['fname']),
    'c_lastname'		=> $db->escapeString($_POST['lname']),
    'c_email'			=> $db->escapeString($_POST['email']),
    'c_age'				=> $db->escapeString($_POST['age']),
    'c_job_title'		=> $db->escapeString($_POST['JobTitle']),
    'c_date_submited'	=> $_POST['DateSubmited']
);



    $s = $db->addData('CRUD', $ar);

    if($db->escapeString(isset($_FILES['album_img']['name'])) && !empty($_FILES['album_img']['name'])){
        
        
          
            
            
            $fileName = $_FILES['album_img']['name'];
            $type = $_FILES['album_img']['type'];
            $type = checkType($type);
                
            //$fileName = base64_encode(str_ireplace($type, '', $fileName));
            $fileName = base64_encode($fileName);
            $path = "../../photos/" . $fileName . $type;
               $tmp = $_FILES['album_img']['tmp_name'];
                
            move_uploaded_file($tmp, $path);
                
            $ar = array(
                    'img_name'  => $fileName,
                       'img_ext'   => $type,
                    'c_id'      => $db->lastInsert()
            );
            $db->addData("album", $ar);
        
    }


	
        header("Location: $base_url");

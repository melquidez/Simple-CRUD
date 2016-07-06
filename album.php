<?php
include("include/header.php");

include("classes/Database.php");

$db = new Database;

$data = $db->displayData("album", $_GET['album']);
?>


    <div class="container">
        <div class="row">
            <?php foreach($data as $data): ?>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo $base_url . 'photos/' . $data['img_name'] . $data['img_ext'] ?>" alt=""/>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>




<?php include("include/footer.php");?>

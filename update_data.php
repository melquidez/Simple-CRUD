<?php include('include/header.php');
//include('include/nav.php');
include('classes/Database.php');

$db = new Database;

$data = $db->displayData("crud", $_GET['update']);

?>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h5>Add Info</h5>
                            <a href="index.php" title="Back"><i class="glyphicon glyphicon-arrow-left"></i></a>
                        </div>
                    </div>
                    <div class="panel panel-body">
                        <?php foreach($data as $data):?>

                        <form class="form-horizontal" action="./include/process/update_data.php?update=<?php echo $data['c_id'] ?>" method="post">

                            <div class="form-group">
                                <label class="form-label col-md-2" for="fname">First Name:</label>
                                <div class="col-md-10">
                                    <input type="text" name="fname" class="form-control" placeholder="First Name" value="<?php echo $data['c_firstname'] ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label col-md-2" for="lname">Last Name:</label>
                                <div class="col-md-10">
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name" value="<?php echo $data['c_lastname'] ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label col-md-2" for="email">Email:</label>
                                <div class="col-md-10">
                                    <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $data['c_email'] ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label col-md-2" for="age">Age:</label>
                                <div class="col-md-10">
                                    <input type="number" name="age" class="form-control" placeholder="Age" value="<?php echo $data['c_age'] ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label col-md-2" for="JobTitle">Job Title:</label>
                                <div class="col-md-10">
                                    <input type="text" name="JobTitle" class="form-control" placeholder="Job Title" value="<?php echo $data['c_job_title'] ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label col-md-2" for="DateSubmited">Date Submited:</label>
                                <div class="col-md-10">
                                    <input type="date" name="DateSubmited" class="form-control" placeholder="Date Submited" value="<?php echo $data['c_date_submited'] ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> Update</button>
                                </div>
                            </div>
                        </form>
                        <?php endforeach;?>

                     </div>
                 </div>
             </div>
         </div>
     </div>

<?php include('include/footer.php');?>
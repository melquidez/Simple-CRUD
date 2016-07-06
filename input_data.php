<?php include('include/header.php');
//include('include/nav.php');
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
                        <form class="form-horizontal" action="include/process/add_data.php" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="form-label col-md-2" for="fname">First Name:</label>
                                <div class="col-md-10">
                                    <input type="text" name="fname" class="form-control" placeholder="First Name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label col-md-2" for="lname">Last Name:</label>
                                <div class="col-md-10">
                                    <input type="text" name="lname" class="form-control" placeholder="Last Name"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label col-md-2" for="email">Email:</label>
                                <div class="col-md-10">
                                    <input type="email" name="email" class="form-control" placeholder="Email"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label col-md-2" for="age">Age:</label>
                                <div class="col-md-10">
                                    <input type="number" name="age" class="form-control" placeholder="Age"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label col-md-2" for="JobTitle">Job Title:</label>
                                <div class="col-md-10">
                                    <input type="text" name="JobTitle" class="form-control" placeholder="Job Title"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label col-md-2" for="DateSubmited">Date Submited:</label>
                                <div class="col-md-10">
                                    <input type="date" name="DateSubmited" class="form-control" placeholder="Date Submited"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="img" class="form-label col-md-2">Upload an Album:</label>
                                <div class="col-md-10">
                                    <input type="file" name="album_img" class="form-control" multiple=""/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-send"></i> Submit</button>
                                </div>
                            </div>
                        </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>
<?php include('include/footer.php');?>
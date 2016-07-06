		
<?php include('include/header.php');
//include('include/nav.php');
include('classes/Database.php');


$db = new Database;

$data = $db->displayData('CRUD');
?>

	<div class="container-fluid">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-2">
									<h5>Data</h5>
				    <!--<a href="#myModal" role="button" data-toggle="modal" class="btn btn-sm"> <i class="glyphicon glyphicon-plus"></i></a>-->
									<a href="<?php echo $base_url ?>input_data.php" role="button" data-toggle="modal" class="btn btn-sm"> <i class="glyphicon glyphicon-plus"></i></a>              
								</div>
								<div class="col-md-8">
									<form class="form-horizontal" method="GET" action="<?php echo $base_url ?>include/process/search_data.php">
										<input type="search" name="search" class="form-control" placeholder="Search..."/>
									</form>
								</div>
			 				</div>
						</div>
					</div>
				</div>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>
								Action
							</th>
                            <th>
                                Album
                            </th>
							<th>
								Firstname
							</th>
							<th>
								Lastname
							</th>
							<th>
								Email
							</th>
							<th>
								Age
							</th>
							<th>
								Job title
							</th>
							<th>
								Date Submitted
							</th>
							
						</tr>
					</thead>
					<tbody>
                        <?php foreach($data as $data):?>
						<tr>
							<td>
								<a href="<?php echo $base_url ?>update_data.php?update=<?php echo $data['c_id'] ?>" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
								<a href="<?php echo $base_url ?>include/process/delete_data.php?delete=<?php echo $data['c_id'] ?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-trash"></i></a>
							</td>
                            <td>
                                <a href="<?php echo $base_url . 'album.php?album=' . $data['c_id'] ?>" title="Show Album">Album</a>
                            </td>
							<td>
									<p><?php echo ucfirst($data['c_firstname']) ?></p>
							</td>
							<td>
									<p><?php echo ucfirst($data['c_lastname']) ?></p>
							</td>
							<td>
									<p><?php echo $data['c_email'] ?></p>
							</td>
							<td>
									<p><?php echo $data['c_age']?></p>
							</td>
							<td>
									<p><?php echo ucfirst($data['c_job_title']) ?></p>
							</td>
							<td>
									<p><?php echo $data['c_date_submited'] ?></p>
							</td>
						</tr>
                        <?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
		
		
		
	<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">�</button>
					<h3 id="myModalLabel">Modal header</h3>
				</div>
				<div class="modal-body">
					<p>Form</p>
				</div>
				<div class="modal-footer">
					<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
					<button class="btn btn-primary">Add Data</button>
				</div>
			</div>
		</div>
	</div>
<?php include('include/footer.php');?>
<?php
//Manage Members Page(Add, Edit, Delete)
	session_start();
	if(isset($_SESSION['username'])){
		$pageTitle = 'Members';
		include 'init.php';
		$action = isset($_GET['action']) ? $_GET['action'] : 'Manage';
		if ($action == 'Manage') { //Manage Page
			echo "Start Manage";
		}elseif ($action == 'Edit') { //Edit Page ?>
			<div class="container">
				<div class="row">
					<div class="col-md-2"></div>
                    <div class="col-md-8 col-sm-12">
						<div class="card mt-4">
							<div class="card-header">Edit Member</div>
							<div class="card-body">
								<form class="form-horizontal">
									<div class="form-group form-group-lg">
										<label class="control-label">Username :</label>
										<input type="text" name="username" class="form-control" autocomplete="off">
									</div>
									<div class="form-group form-group-lg">
										<label class="control-label">Password :</label>
										<input type="Password" name="Password" class="form-control" autocomplete="new-password">
										<!-- new-password make browser don't remember the password -->
									</div>
									<div class="form-group form-group-lg">
										<label class="control-label">Email :</label>
										<input type="email" name="email" class="form-control">
									</div>
									<div class="form-group form-group-lg">
										<label class="control-label">Full Name :</label>
										<input type="text" name="fullName" class="form-control">
									</div>
									<div class="form-group d-flex justify-content-around">
										<input type="submit" value="Save" class="btn btn-primary btn-lg">
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }else{
			echo "Error !";
		}
		include $tpl . 'footer.php';
	}else{
		header('location: index.php');
	}
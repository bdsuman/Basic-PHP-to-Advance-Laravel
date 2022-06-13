<!DOCTYPE html>
<html lang="en">
<?php require 'include/head.php'; ?>
<body>

	<!-- Main navbar -->
	<?php require 'include/navigation.php'; ?>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<?php require 'include/sideber.php'; ?>
			<!-- /main sidebar -->


			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Page header -->
				<div class="page-header">

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.php"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="banarUpdate.php">Banar</a></li>
							<li class="active">Update</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Banar Update</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<form class="form-horizontal" action="#">
								<fieldset class="content-group mt-10">
									<!--<legend class="text-bold">Basic inputs</legend>-->

									<div class="form-group">
										<label class="control-label col-lg-2">Default text input</label>
										<div class="col-lg-10">
											<input type="text" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Password</label>
										<div class="col-lg-10">
											<input type="password" class="form-control">
										</div>
									</div>
			                        <div class="form-group">
			                        	<label class="control-label col-lg-2">Default select</label>
			                        	<div class="col-lg-10">
				                            <select name="select" class="form-control">
				                                <option value="opt1">Usual select box</option>
				                                <option value="opt2">Option 2</option>
				                                <option value="opt3">Option 3</option>
				                                <option value="opt4">Option 4</option>
				                                <option value="opt5">Option 5</option>
				                                <option value="opt6">Option 6</option>
				                                <option value="opt7">Option 7</option>
				                                <option value="opt8">Option 8</option>
				                            </select>
			                            </div>
			                        </div>

									<div class="form-group">
										<label class="control-label col-lg-2">Textarea</label>
										<div class="col-lg-10">
											<textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
										</div>
									</div>
								</fieldset>
								<div class="text-right">
									<button type="submit" class="btn btn-primary">Update <i class="icon-arrow-right14 position-right"></i></button>
									<a href="banar.php" class="btn btn-default">Back to List <i class="icon-arrow-left13 position-right"></i></a>
								</div>
							</form>
						</div>
					</div>
					<!-- /form horizontal -->

					
                    <!-- Footer -->
                        <?php require 'include/footer.php'; ?>
					<!-- /footer -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	<?php require 'include/script.php'; ?>											
</body>
</html>

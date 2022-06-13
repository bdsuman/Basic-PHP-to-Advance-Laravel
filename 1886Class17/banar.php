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
							<li><a href="banar.php">Banar</a></li>
							<li class="active">List</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Basic datatable -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Banar List</h5>
							<div class="heading-elements">
								<ul class="icons-list" style="margin-top: 0px">
									<li style="margin-right: 10px;"><a href="banarCreate.php" class="btn btn-primary add-new">Add New</a></li>
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<table class="table datatable-basic table-bordered">
								<thead>
									<tr>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Job Title</th>
										<th>DOB</th>
										<th>Status</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Marth</td>
										<td><a href="#">Enright</a></td>
										<td>Traffic Court Referee</td>
										<td>22 Jun 1972</td>
										<td><span class="label label-success">Active</span></td>
										<td class="text-center">
											<a href="banarUpdate.php"><i class="icon-pencil5"></i></a>
											&nbsp;
											<a href="#"><i class="icon-trash"></i></a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>

						
					</div>
					<!-- /basic datatable -->

					
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

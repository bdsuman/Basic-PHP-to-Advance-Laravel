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
					<div class="page-header-content">
						<div class="page-title">
							<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Forms</span> - Basic Inputs</h4>
						</div>

						<div class="heading-elements">
							<div class="heading-btn-group">
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
								<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
							</div>
						</div>
					</div>

					<div class="breadcrumb-line">
						<ul class="breadcrumb">
							<li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
							<li><a href="form_inputs_basic.html">Forms</a></li>
							<li class="active">Basic inputs</li>
						</ul>

						<ul class="breadcrumb-elements">
							<li><a href="#"><i class="icon-comment-discussion position-left"></i> Support</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-gear position-left"></i>
									Settings
									<span class="caret"></span>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-user-lock"></i> Account security</a></li>
									<li><a href="#"><i class="icon-statistics"></i> Analytics</a></li>
									<li><a href="#"><i class="icon-accessibility"></i> Accessibility</a></li>
									<li class="divider"></li>
									<li><a href="#"><i class="icon-gear"></i> All settings</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">

					<!-- Form horizontal -->
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Basic form inputs</h5>
							<div class="heading-elements">
								<ul class="icons-list">
			                		<li><a data-action="collapse"></a></li>
			                		<li><a data-action="reload"></a></li>
			                		<li><a data-action="close"></a></li>
			                	</ul>
		                	</div>
						</div>

						<div class="panel-body">
							<p class="content-group-lg">Examples of standard form controls supported in an example form layout. Individual form controls automatically receive some global styling. All textual <code>&lt;input></code>, <code>&lt;textarea></code>, and <code>&lt;select></code> elements with <code>.form-control</code> are set to <code>width: 100%;</code> by default. Wrap labels and controls in <code>.form-group</code> for optimum spacing. Labels in horizontal form require <code>.control-label</code> class.</p>

							<form class="form-horizontal" action="#">
								<fieldset class="content-group">
									<legend class="text-bold">Basic inputs</legend>

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
										<label class="control-label col-lg-2">Input with placeholder</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder="Enter your username...">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Read only field</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" readonly="readonly" value="read only">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Disabled field</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" disabled="disabled" value="disabled">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Predefined value</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" value="http://">
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
										<label class="control-label col-lg-2">Disabled autocomplete</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder="Autocomplete is off" autocomplete="off">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Maximum value</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" maxlength="4" placeholder="Maximum 4 characters">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2 cursor-pointer" for="clickable-label">Focus on label click</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" id="clickable-label" placeholder="Field focus on label click">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Static text</label>
										<div class="col-lg-10">
											<div class="form-control-static">This is a static text</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Textarea</label>
										<div class="col-lg-10">
											<textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
										</div>
									</div>
								</fieldset>

								<fieldset class="content-group">
									<legend class="text-bold">Basic selects</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">Single select</label>
										<div class="col-lg-10">
											<select name="select" class="form-control">
			                                    <option value="opt1">Default select height</option>
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
										<label class="control-label col-lg-2">Multiple select</label>
										<div class="col-lg-10">
				                            <select multiple="multiple" class="form-control">
				                                <option selected="selected">Amsterdam</option>      
				                                <option selected="selected">Atlanta</option>
				                                <option>Baltimore</option>
				                                <option>Boston</option>
				                                <option>Buenos Aires</option>
				                                <option>Calgary</option>
				                                <option selected="selected">Chicago</option>
				                                <option>Denver</option>
				                                <option>Dubai</option>
				                                <option>Frankfurt</option>
				                                <option>Hong Kong</option>
				                                <option>Honolulu</option>
				                                <option>Houston</option>
				                                <option>Kuala Lumpur</option>
				                                <option>London</option>
				                                <option>Los Angeles</option>
				                                <option>Melbourne</option>
				                                <option>Mexico City</option>
				                                <option>Miami</option>
				                                <option>Minneapolis</option>
				                            </select>
										</div>
									</div>
								</fieldset>

								<fieldset class="content-group">
									<legend class="text-bold">Basic file inputs</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">Default file input</label>
										<div class="col-lg-10">
											<input type="file" class="form-control">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Styled file input</label>
										<div class="col-lg-10">
											<input type="file" class="file-styled">
										</div>
									</div>
								</fieldset>

								<fieldset class="content-group">
									<legend class="text-bold">Form helpers</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">Text form helpers</label>
										<div class="col-lg-10">
											<div class="row">
												<div class="col-md-4">
													<input type="text" class="form-control">
													<span class="help-block">Left aligned helper</span>
												</div>

												<div class="col-md-4">
													<input type="text" class="form-control">
													<span class="help-block text-center">Centered helper</span>
												</div>

												<div class="col-md-4">
													<input type="text" class="form-control">
													<span class="help-block text-right">Right aligned helper</span>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Full width label helpers</label>
										<div class="col-lg-10">
											<div class="row">
												<div class="col-md-4">
													<input type="text" class="form-control">
													<span class="label label-block label-primary text-left">Left aligned label</span>
												</div>

												<div class="col-md-4">
													<input type="text" class="form-control">
													<span class="label label-block label-danger">Centered label</span>
												</div>

												<div class="col-md-4">
													<input type="text" class="form-control">
													<span class="label label-block label-info text-right">Right aligned label</span>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Block label helpers</label>
										<div class="col-lg-10">
											<div class="row">
												<div class="col-md-4">
													<input type="text" class="form-control">
													<div class="label-block">
														<span class="label label-primary">Left aligned label</span>
													</div>
												</div>

												<div class="col-md-4">
													<input type="text" class="form-control">
													<div class="label-block text-center">
														<span class="label label-danger">Centered label</span>
													</div>
												</div>

												<div class="col-md-4">
													<input type="text" class="form-control">
													<div class="label-block text-right">
														<span class="label label-info text-right">Right aligned label</span>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Inline text helper</label>
										<div class="col-lg-6">
											<input type="text" class="form-control">
										</div>
										<span class="help-inline">Inline text helper</span>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Inline label helper</label>
										<div class="col-lg-6">
											<input type="text" class="form-control">
										</div>
										<span class="label bg-teal help-inline">Inline label helper</span>
									</div>
								</fieldset>

								<fieldset class="content-group">
									<legend class="text-bold">Input icons</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">Input with icons</label>
										<div class="col-lg-10">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group has-feedback has-feedback-left">
														<input type="text" class="form-control input-lg" placeholder="Left icon, input large">
														<div class="form-control-feedback">
															<i class="icon-make-group"></i>
														</div>
													</div>

													<div class="form-group has-feedback has-feedback-left">
														<input type="text" class="form-control" placeholder="Left icon, input default">
														<div class="form-control-feedback">
															<i class="icon-droplets"></i>
														</div>
													</div>

													<div class="form-group has-feedback has-feedback-left">
														<input type="text" class="form-control input-sm" placeholder="Left icon, input small">
														<div class="form-control-feedback">
															<i class="icon-pin-alt"></i>
														</div>
													</div>

													<div class="form-group has-feedback has-feedback-left">
														<input type="text" class="form-control input-xs" placeholder="Left icon, input mini">
														<div class="form-control-feedback">
															<i class="icon-help"></i>
														</div>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group has-feedback">
														<input type="text" class="form-control input-lg" placeholder="Right icon, input large">
														<div class="form-control-feedback">
															<i class="icon-make-group"></i>
														</div>
													</div>

													<div class="form-group has-feedback">
														<input type="text" class="form-control" placeholder="Right icon, input default">
														<div class="form-control-feedback">
															<i class="icon-droplets"></i>
														</div>
													</div>

													<div class="form-group has-feedback">
														<input type="text" class="form-control input-sm" placeholder="Right icon, input small">
														<div class="form-control-feedback">
															<i class="icon-pin-alt"></i>
														</div>
													</div>

													<div class="form-group has-feedback">
														<input type="text" class="form-control input-xs" placeholder="Left icon, input mini">
														<div class="form-control-feedback">
															<i class="icon-help"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Input with spinners</label>
										<div class="col-lg-10">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group has-feedback has-feedback-left">
														<input type="text" class="form-control" placeholder="Left spinner">
														<div class="form-control-feedback">
															<i class="icon-spinner2 spinner"></i>
														</div>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group has-feedback">
														<input type="text" class="form-control" placeholder="Right spinner">
														<div class="form-control-feedback">
															<i class="icon-spinner2 spinner"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Input with smaller icons</label>
										<div class="col-lg-10">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group has-feedback has-feedback-left">
														<input type="text" class="form-control" placeholder="Left smaller icon">
														<div class="form-control-feedback">
															<i class="icon-search4 text-size-base"></i>
														</div>
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group has-feedback">
														<input type="text" class="form-control" placeholder="Right smaller icon">
														<div class="form-control-feedback">
															<i class="icon-search4 text-size-base"></i>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</fieldset>

								<fieldset class="content-group">
									<legend class="text-bold">Validation states</legend>

									<div class="form-group has-warning has-feedback">
										<label class="control-label col-lg-2 text-semibold">Warning with icon</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder=".has-warning">
											<div class="form-control-feedback">
												<i class="icon-notification2"></i>
											</div>
											<span class="help-block">Warning input helper</span>
										</div>
									</div>

									<div class="form-group has-success has-feedback">
										<label class="control-label col-lg-2 text-semibold">Success with icon</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder=".has-success">
											<div class="form-control-feedback">
												<i class="icon-checkmark-circle"></i>
											</div>
											<span class="help-block">Success input helper</span>
										</div>
									</div>

									<div class="form-group has-error has-feedback">
										<label class="control-label col-lg-2 text-semibold">Error with icon</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder=".has-error">
											<div class="form-control-feedback">
												<i class="icon-cancel-circle2"></i>
											</div>
											<span class="help-block">Error input helper</span>
										</div>
									</div>
								</fieldset>

								<fieldset class="content-group">
									<legend class="text-bold">Text options</legend>

									<div class="form-group">
										<label class="control-label col-md-2">Light text</label>
										<div class="col-md-10">
											<input type="text" class="form-control text-light" placeholder="Input with light text">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Semibold text</label>
										<div class="col-md-10">
											<input type="text" class="form-control text-semibold" placeholder="Input with semibold text">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Bold text</label>
										<div class="col-md-10">
											<input type="text" class="form-control text-bold" placeholder="Input with bold text">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Capitalized text</label>
										<div class="col-md-10">
											<input type="text" class="form-control text-capitalize" placeholder="Input with capitalized text">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Centered text</label>
										<div class="col-md-10">
											<input type="text" class="form-control text-center" placeholder="Input with centered text">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Right aligned text</label>
										<div class="col-md-10">
											<input type="text" class="form-control text-right" placeholder="Input with right aligned text">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Uppercase text</label>
										<div class="col-md-10">
											<div class="form-group">
												<input type="text" class="form-control text-uppercase" placeholder="Input with uppercase text">
											</div>

											<div class="form-group">
												<input type="text" class="form-control text-uppercase text-size-small" placeholder="Input with uppercase text">
											</div>
											
											<div class="form-group">
												<input type="text" class="form-control text-uppercase text-semibold text-size-mini" placeholder="Input with uppercase text">
												<span class="help-block">Other text options work as well</span>
											</div>
										</div>
									</div>
								</fieldset>

								<fieldset class="content-group">
									<legend class="text-bold">Field options</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">Tooltip on focus</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" data-popup="tooltip" data-trigger="focus" title="Tooltip on focus" placeholder="Click on input">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Tooltip on hover</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" data-popup="tooltip" title="Tooltip on hover" placeholder="Hover on input">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Rounded input</label>
										<div class="col-md-10">
											<input type="text" class="form-control input-rounded" placeholder="Rounded input">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Roundless input</label>
										<div class="col-md-10">
											<input type="text" class="form-control input-roundless" placeholder="Roundless input">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Fixed input sizing</label>
										<div class="col-lg-10">
											<div class="row">
												<div class="col-xs-3">
													<input type="text" class="form-control" placeholder=".col-xs-3">
												</div>

												<div class="col-xs-4">
													<input type="text" class="form-control" placeholder=".col-xs-4">
												</div>

												<div class="col-xs-5">
													<input type="text" class="form-control" placeholder=".col-xs-5">
												</div>
											</div>
											<span class="help-block">Available in 12 columns sizes since it's based on 12 columns grid</span>
										</div>
									</div>
								</fieldset>

								<fieldset class="content-group">
									<legend class="text-bold">Sizing options</legend>

									<div class="form-group form-group-xlg">
										<label class="control-label col-lg-2">XLarge form group</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder=".form-group-xlg">
										</div>
									</div>

									<div class="form-group form-group-lg">
										<label class="control-label col-lg-2">Large form group</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder=".form-group-lg">
										</div>
									</div>

									<div class="form-group form-group-sm">
										<label class="control-label col-lg-2">Small form group</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder=".form-group-sm">
										</div>
									</div>

									<div class="form-group form-group-xs">
										<label class="control-label col-lg-2">Mini form group</label>
										<div class="col-lg-10">
											<input type="text" class="form-control" placeholder=".form-group-xs">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Inputs only</label>
										<div class="col-lg-10">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<input class="form-control input-xlg" type="text" placeholder="XLarge input height">
													</div>

													<div class="form-group">
														<input class="form-control input-lg" type="text" placeholder="Large input height">
													</div>

													<div class="form-group">
														<input class="form-control" type="text" placeholder="Default input height">
													</div>

													<div class="form-group">
														<input class="form-control input-sm" type="text" placeholder="Small input height">
													</div>

													<div class="form-group">
														<input class="form-control input-xs" type="text" placeholder="Mini input height">
													</div>
												</div>

												<div class="col-md-6">
													<div class="form-group">
														<select name="select" class="form-control input-xlg">
						                                    <option value="opt1">XLarge select height</option>
						                                    <option value="opt2">Option 2</option>
						                                    <option value="opt3">Option 3</option>
						                                    <option value="opt4">Option 4</option>
						                                    <option value="opt5">Option 5</option>
						                                    <option value="opt6">Option 6</option>
						                                    <option value="opt7">Option 7</option>
						                                    <option value="opt8">Option 8</option>
						                                </select>
													</div>

													<div class="form-group">
														<select name="select" class="form-control input-lg">
						                                    <option value="opt1">Large select height</option>
						                                    <option value="opt2">Option 2</option>
						                                    <option value="opt3">Option 3</option>
						                                    <option value="opt4">Option 4</option>
						                                    <option value="opt5">Option 5</option>
						                                    <option value="opt6">Option 6</option>
						                                    <option value="opt7">Option 7</option>
						                                    <option value="opt8">Option 8</option>
						                                </select>
													</div>

													<div class="form-group">
														<select name="select" class="form-control">
						                                    <option value="opt1">Default select height</option>
						                                    <option value="opt2">Option 2</option>
						                                    <option value="opt3">Option 3</option>
						                                    <option value="opt4">Option 4</option>
						                                    <option value="opt5">Option 5</option>
						                                    <option value="opt6">Option 6</option>
						                                    <option value="opt7">Option 7</option>
						                                    <option value="opt8">Option 8</option>
						                                </select>
													</div>

													<div class="form-group">
														<select name="select" class="form-control input-sm">
						                                    <option value="opt1">Small select height</option>
						                                    <option value="opt2">Option 2</option>
						                                    <option value="opt3">Option 3</option>
						                                    <option value="opt4">Option 4</option>
						                                    <option value="opt5">Option 5</option>
						                                    <option value="opt6">Option 6</option>
						                                    <option value="opt7">Option 7</option>
						                                    <option value="opt8">Option 8</option>
						                                </select>
													</div>

													<div class="form-group">
														<select name="select" class="form-control input-xs">
						                                    <option value="opt1">Mini select height</option>
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
											</div>
										</div>
									</div>
								</fieldset>

								<fieldset class="content-group">
									<legend class="text-bold">Color options</legend>

									<div class="form-group">
										<label class="control-label col-lg-2">Text color</label>
										<div class="col-lg-10">
											<input type="text" class="form-control text-violet" value="Violet text color">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Border color</label>
										<div class="col-lg-10">
											<input type="text" class="form-control border-teal border-lg text-teal" placeholder="Teal border color">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Background color</label>
										<div class="col-lg-10">
											<input type="text" class="form-control bg-danger" placeholder="Danger background color">
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-lg-2">Select color</label>
										<div class="col-lg-10">
											<select name="select" class="form-control bg-indigo-400">
			                                    <option value="opt1">Indigo select color</option>
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
										<label class="control-label col-lg-2">File input color</label>
										<div class="col-lg-10">
											<input type="file" class="file-styled-primary">
										</div>
									</div>
								</fieldset>

								<fieldset class="content-group">
									<legend class="text-bold">Type options</legend>

									<div class="form-group">
										<label class="control-label col-md-2">Datetime</label>
										<div class="col-md-10">
											<input class="form-control" type="datetime" name="datetime">
											<span class="help-block">Using <code>input type="datetime"</code></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Date</label>
										<div class="col-md-10">
											<input class="form-control" type="date" name="date">
											<span class="help-block">Using <code>input type="date"</code></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Month</label>
										<div class="col-md-10">
											<input class="form-control" type="month" name="month">
											<span class="help-block">Using <code>input type="month"</code></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Time</label>
										<div class="col-md-10">
											<input class="form-control" type="time" name="time">
											<span class="help-block">Using <code>input type="time"</code></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Week</label>
										<div class="col-md-10">
											<input class="form-control" type="week" name="week">
											<span class="help-block">Using <code>input type="week"</code></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Number</label>
										<div class="col-md-10">
											<input class="form-control" type="number" name="number">
											<span class="help-block">Using <code>input type="number"</code></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Email</label>
										<div class="col-md-10">
											<input class="form-control" type="email" name="email">
											<span class="help-block">Using <code>input type="email"</code></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">URL</label>
										<div class="col-md-10">
											<input class="form-control" type="url" name="url">
											<span class="help-block">Using <code>input type="url"</code></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Search</label>
										<div class="col-md-10">
											<input class="form-control" type="search" name="search">
											<span class="help-block">Using <code>input type="search"</code></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Tel</label>
										<div class="col-md-10">
											<input class="form-control" type="tel" name="tel">
											<span class="help-block">Using <code>input type="tel"</code></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Color</label>
										<div class="col-md-10">
											<input class="form-control" type="color" name="color">
											<span class="help-block">Using <code>input type="color"</code></span>
										</div>
									</div>

									<div class="form-group">
										<label class="control-label col-md-2">Range</label>
										<div class="col-md-10">
											<input class="form-control" type="range" name="range" min="0" max="10">
											<span class="help-block">Using <code>input type="range"</code></span>
										</div>
									</div>
								</fieldset>

								<div class="text-right">
									<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right14 position-right"></i></button>
								</div>
							</form>
						</div>
					</div>
					<!-- /form horizontal -->

					
					<!-- Footer -->
					<div class="footer text-muted">
						&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
					</div>
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

<link rel="stylesheet" href="pages/profil/style.css" >
<link rel="stylesheet" href="components/tab-profil/style.css" >
<link rel="stylesheet" href="components/exam-result/style.css" >

<style type="text/css">
	@media (max-width: 767.98px) {
		._wrapper-header-profil{
			margin-bottom: 0px;
			display: none !important;
		}
	}
	@media (min-width: 768px) {
		._wrapper-header-profil{
			margin-bottom: -90px;
		}
	}
</style>
<section class="p-0 ">
	<div class="container ">
		<?php IncludePage(["header-profil"])?>
		<div class="row">
			<div class="col-md-4 col-12 ">

				<?php

					$pages = [
						"sidebar-profil",		
					];
					IncludePage($pages)
				?>
			</div>
			<div class="col-md-8 col-12">
				
				<section>
					<div class="container z-depth-3">
						<div class="section-body">
							<div class="row">
						<div class="col-md-2">
							<p class=" d-flex justify-content-center align-items-center">
								<i class=" big-icon fas fa-info-circle " style="color:#2980b9;"></i>
							</p>
						</div>
						<div class="col-md-10 d-flex justify-content-center align-items-center ">
							<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. 
							</p>
						</div>
					</div>
						</div>
					</div>
				</section>
				<div class="container border border-light z-depth-1 mr-md-auto" style="margin: 20px 0 20px 0;">
					<ul class="nav nav-tabs" style="margin: 20px 0 0 0;">
					    <a class="nav-link active-tab" href="#"><i class="fab fa-react"></i> React Native</a>
					  </li>
					  <li class="nav-item ">
					    <a class="nav-link inactive-tab" href="#" ><i class="fab fa-python"></i> Python</a>
					  </li>
					</ul>
					
					<section>
						<div class="container ">
							<div class="section-header">
								<div class="section-title">
									<h4> 1. Portfolio </h4>
								</div>
							</div>
							<div class="section-body">
							<div class="row">
								<div class="col-md-4">
									<!-- card dwapp -->
								<section>
									<div class="container">
										<div class="section-body">
													
													<div class="card bg-grey item-left">
														<div class="card-body">
															<h4 class="card-title text-bold">Dumbways App</h4>
															<p class="card-subtitle text-note">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
															</p>
															<a href="#" class="card-link">
																<i class="fab fa-github card-icon-link"></i>
															</a>
														</div>
													<div>
										</div>
									</div>
								</section>

								</div>
								<div class="col-md-4">
									<!-- card dwapp -->
								<section>
									<div class="container">
										<div class="section-body">
													
													<div class="card bg-grey item-left">
														<div class="card-body">
															<h4 class="card-title text-bold">Dumbways App</h4>
															<p class="card-subtitle text-note">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
															</p>
															<a href="#" class="card-link">
																<i class="fab fa-github card-icon-link"></i>
															</a>
														</div>
													<div>
										</div>
									</div>
								</section>

								</div>
								<div class="col-md-4">
									<!-- card dwapp -->
								<section>
									<div class="container">
										<div class="section-body">
													
													<div class="card bg-grey item-left">
														<div class="card-body">
															<h4 class="card-title text-bold">Dumbways App</h4>
															<p class="card-subtitle text-note">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
															</p>
															<a href="#" class="card-link">
																<i class="fab fa-github card-icon-link"></i>
															</a>
														</div>
													<div>
										</div>
									</div>
								</section>

								</div>
							</div>

							
							</div>
						</div>
					</section>	

					<div class="row">
							<div class="col-md-4"></div>
							<div class="col-md-8"></div>
					</div>

					<section>
						<div class="container" style="margin:0;padding:10px;">
							<div class="section-header">
								<div class="section-title">
									<h4>2. Exam Result</h4>
								</div>
							</div>
							<div class="section-body">
								<div class="row">
									<div class="col-md-7" style="margin:0;padding:0;">
										<!-- detail kiri -->
											<div class="container">
												<!-- overall score -->
												<div class="row">
													<div class="col-md-12">
														
														<section class="px-0 py-0">
									<div class="container">
										<div class="section-body">

											<div class="card">
												<div class="card-body container">
													<div class="row">
														<div class="col-md-12">
															<p class="card-title text-grey">Overall Score by <span class="text-bold">DumbWays</span></p>
														</div>
													</div>
													<div class="row">
														<div class="col-md-4 text-center ">
															<div class=" position-relative">
															<i class="big-icon text-danger fas fa-star"></i>
															<span class="d-flex  justify-content-center align-items-center  text-bold text-white position-absolute" style="left:0;right: 0;top: 0;bottom: 0;padding-top: 10px; font-size: 1.3rem">4,7</span>
															</div>
															<div class="container"><p>Of 5 Stars</p></div>
															
														</div>
														<div class="col-md-8">
															<div class="container">
																<div class="d-flex">
																	<div class="mr-auto">
																		<p>UI</p>
																	</div>
																	<div class="ml-auto">
																		<i class="text-primary fas fa-star"></i>
																		<i class="text-primary fas fa-star"></i>
																		<i class="text-primary fas fa-star"></i>
																		<i class="text-primary fas fa-star"></i>
																		<i class="text-primary fas fa-star"></i>
																	</div>
																</div>
																<div class="d-flex">
																	<div class="mr-auto">
																		<p>UX</p>
																	</div>
																	<div class="ml-auto">
																		<i class="text-primary fas fa-star"></i>
																		<i class="text-primary fas fa-star"></i>
																		<i class="text-primary fas fa-star"></i>
																		<i class="text-primary fas fa-star"></i>
																		<i class="text-dark fas fa-star"></i>
																	</div>
																</div>
																<div class="d-flex">
																	<div class="mr-auto">
																		<p>Func</p>
																	</div>
																	<div class="ml-auto">
																		<i class="text-primary fas fa-star"></i>
																		<i class="text-primary fas fa-star"></i>
																		<i class="text-dark fas fa-star"></i>
																		<i class="text-dark fas fa-star"></i>
																		<i class="text-dark fas fa-star"></i>
																	</div>
																</div>
																<div class="d-flex">
																	<div class="mr-auto">
																		<p>Code</p>
																	</div>
																	<div class="ml-auto">
																		<i class="text-primary fas fa-star"></i>
																		<i class="text-dark fas fa-star"></i>
																		<i class="text-dark fas fa-star"></i>
																		<i class="text-dark fas fa-star"></i>
																		<i class="text-dark fas fa-star"></i>
																	</div>
																</div>
																
															</div>

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</section>

													</div>
												</div>
												<!-- end overall score -->

												<!-- exam video skill -->
												<div class="row">
													<div class="col-md-12">
														
														<section class="px-0 py-0">
																			<div class="container">
																				<div class="section-body">

																					<div class="card">
																						<div class="card-body">
																							<p class="text-bold card-title">Exam Video Result</p>
																							<iframe class="w-100 h-100" src="https://www.youtube.com/embed/8XVATypXio0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
																						</div>
																						<div class="card-body">
																							<p class="text-bold card-title">Exam Interview Result</p>
																							<iframe class="w-100 h-100" src="https://www.youtube.com/embed/8XVATypXio0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
																						</div>
																					</div>

																				</div>
																			</div>
																		</section>

													</div>
												</div>
												<!-- end exam video skill -->
												<!-- link github -->
												<section class="py-0">
													<div class="container">
														<div class="section-body">
															<div class="row text-center">
																	<div class="col-md-12">
																		<div class="card">
																			<div class="card-body">
																				<h5 class="card-title text-bold">
																					Exam Repo URL <i class=" text-primary med-icon fab fa-github"></i>
																				</h5>
																			</div>
																		</div>

																	</div>
																</div>
														</div>
													</div>
												</section>
												<!-- end link github -->
											</div>
										<!-- end detail kiri -->
									</div>
									<div class="col-md-5" style="margin:0;padding:0;">
										<!-- detail kanan -->
										<div class="container">
											<div class="row">
												<!-- detail skill -->
												<div class="col-md-12" style="margin:0;padding:0;">
													
													<section class="px-0 pt-0">
														<div class="container" style="margin:0;padding:0;">
															<div class="section-body">
															<div class="card">
																<div class="card-body">
																	<h4 class="card-title">React Native Detailed Skills</h4>
																	<div class="container">
																		<div class="row">
																			<div class="col-md-12">
																				
																				
																				<div class="container" style="margin:0;padding:0;">
																					<div class="d-flex">
																						<div class="mr-auto">
																							<p>Component</p>
																						</div>
																						<div class="ml-auto">
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-primary fas fa-star"></i>
																						</div>
																					</div>
																					<div class="d-flex">
																						<div class="mr-auto">
																							<p>Props</p>
																						</div>
																						<div class="ml-auto">
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																						</div>
																					</div>
																					<div class="d-flex">
																						<div class="mr-auto">
																							<p>State</p>
																						</div>
																						<div class="ml-auto">
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																						</div>
																					</div>
																					<div class="d-flex">
																						<div class="mr-auto">
																							<p>Styling</p>
																						</div>
																						<div class="ml-auto">
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																						</div>
																					</div>
																					<div class="d-flex">
																						<div class="mr-auto">
																							<p>React Navigation</p>
																						</div>
																						<div class="ml-auto">
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																						</div>
																					</div>
																					<div class="d-flex">
																						<div class="mr-auto">
																							<p>Nativebase</p>
																						</div>
																						<div class="ml-auto">
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																						</div>
																					</div>
																					<div class="d-flex">
																						<div class="mr-auto">
																							<p>Redux</p>
																						</div>
																						<div class="ml-auto">
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																						</div>
																					</div>
																					<div class="d-flex">
																						<div class="mr-auto">
																							<p>REST API</p>
																						</div>
																						<div class="ml-auto">
																							<i class="text-primary fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																							<i class="text-dark fas fa-star"></i>
																						</div>
																					</div>
																					
																				</div>										
																		</div>
																	</div>
																</div>
															</div>
															</div>
														</div>
													</section>
												</div>
												<!-- end detail skill -->
											</div>
										</div>
										<!-- end detail kanan -->
									</div>
								</div>
							</div>
						</div>
					</section>

					<section>
						<div class="container">
							<div class="section-header">
								<div class="section-title">
									<h3>3. Articles</h3>
								</div>
							</div>
							<div class="section-body">
								<div class="row">
									<div class="col-md-4 ">
										<section>
											<div class="container">
												<div class="section-body">
													<div class="card z-depth-1">
														<img class="card-img-top" src="https://fm.cnbc.com/applications/cnbc.com/resources/img/editorial/2015/01/14/102337799-robert-shiller.530x298.jpg">
														<div class="card-body">
															<p class="text-bold card-title">Article 1</p>
															<p class="card-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
															</p>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="col-md-4">
										<section>
											<div class="container">
												<div class="section-body">
													<div class="card z-depth-1">
														<img class="card-img-top" src="https://fm.cnbc.com/applications/cnbc.com/resources/img/editorial/2015/01/14/102337799-robert-shiller.530x298.jpg">
														<div class="card-body">
															<p class="text-bold card-title">Article 1</p>
															<p class="card-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
															</p>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
									<div class="col-md-4">
										<section>
											<div class="container">
												<div class="section-body">
													<div class="card z-depth-1">
														<img class="card-img-top" src="https://fm.cnbc.com/applications/cnbc.com/resources/img/editorial/2015/01/14/102337799-robert-shiller.530x298.jpg">
														<div class="card-body">
															<p class="text-bold card-title">Article 1</p>
															<p class="card-text">
																Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
															</p>
														</div>
													</div>
												</div>
											</div>
										</section>
									</div>
								</div>
							</div>
						</div>
					</section>
					
					<section>
						<div class="container">
							<div class="section-header">
								<div class="section-title">
									<h4>4. Certificate</h4>
								</div>
							</div>
							<div class="section-body">
								<div class="row">
									<div class="col-md-4">
										<img src="https://omextemplates.content.office.net/support/templates/en-us/lt04027254.png " class="img-fluid">
									</div>
									<div class="col-md-4">
										<img src="https://omextemplates.content.office.net/support/templates/en-us/lt04027254.png" class="img-fluid">
									</div>
								</div>
							</div>
						</div>
					</section>
					
					</div>
				</div>
			</div>
		</div>
</section>

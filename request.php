<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Market Plus-Request</title>
  <link rel="shortcut icon" href="assets/img/logos/mp.png" />
  <link rel="stylesheet" href="assets/css/backend-plugin.min.css">
  <link rel="stylesheet" href="assets/css/backende209.css?v=1.0.0">
    <style>
      .table-responsive #DataTables_Table_1_filter label {
      padding-right: 20px;
      }
    </style>
</head>

<body class="">
  <!-- loader Start -->
  <div id="loading">
    <div id="loading-center">
      <img src="assets/img/loader.svg" class="spinner">
    </div>
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">
    <?php include 'sidebar.php';?>
    <?php include 'navbar.php';?>
    <div class="content-page">
      <div class="container-fluid">
				<div class="row">
					<div class="col-md-12 mb-4 mt-1">
						<h4 class="font-weight-bold">Request</h4>
						<div class="row" style="padding:10px 0">
							<div class="d-inline-block w-100">
								<button type="button" class="btn btn-outline-primary mt-2" onclick="showpending()">Pending</button>
								<button type="button" class="btn btn-outline-primary mt-2" onclick="showresponded()">Responded</button>
							</div>
						</div>
						<div class="row" id="pending">
							<div class="col-lg-12">
								<div class="card card-block card-stretch">
									<div class="card-body p-0">
										<div class="d-flex justify-content-between align-items-center p-3">
											<h5 class="font-weight-bold">Pending</h5>
											<button class="btn btn-secondary btn-sm">
												<a href="add-pending-verifications.php" style="color:white">
													<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
													</svg>
													Add
												</a>
											</button>
										</div>
										<div class="table-responsive">
											<table class="table data-table mb-0 table-bordered table-striped ">
												<thead class="table-color-heading">
													<tr class="">
														<th scope="col">
															S_No.
														</th>
														<th scope="col">
															Name
														</th>
														<th scope="col">
															Contact
														</th>
														<th scope="col">
															Email
														</th>
														<th scope="col">
															Message
														</th>
														<th scope="col">
															Action
														</th>
													</tr>
												</thead>
												<tbody>
													<tr class="white-space-no-wrap">
														<td class="pr-0 ">
															1
														</td>
														<td class="">
															<div class="active-project-1 d-flex align-items-center mt-0 ">
																<div class="h-avatar is-medium">
																	<img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
																</div>
																<div class="data-content">
																	<div>
																		<span class="font-weight-bold">Vari tech</span>
																	</div>
																	<p class="m-0 text-secondary small">
																		Christian Bale
																	</p>
																</div>
															</div>
														</td>
														<td>
															+91 9876543210
														</td>
														<td>
															abcd@email.com
														</td>
														<td>
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Et!
														</td>
														<td>
															<div class="d-flex justify-content-end align-items-center">
																<button type="button" class="btn btn-primary btn-sm mr-1">Mark As Reponded</button>
															</div>
														</td>
													</tr>
													<tr class="white-space-no-wrap">
														<td class="pr-0 ">
															1
														</td>
														<td class="">
															<div class="active-project-1 d-flex align-items-center mt-0 ">
																<div class="h-avatar is-medium">
																	<img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
																</div>
																<div class="data-content">
																	<div>
																		<span class="font-weight-bold">Vari tech</span>
																	</div>
																	<p class="m-0 text-secondary small">
																		Christian Bale
																	</p>
																</div>
															</div>
														</td>
														<td>
															+91 9876543210
														</td>
														<td>
															abcd@email.com
														</td>
														<td>
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Et!
														</td>
														<td>
															<div class="d-flex justify-content-end align-items-center">
																<button type="button" class="btn btn-primary btn-sm mr-1">Mark As Reponded</button>
															</div>
														</td>
													</tr>
													<tr class="white-space-no-wrap">
														<td class="pr-0 ">
															1
														</td>
														<td class="">
															<div class="active-project-1 d-flex align-items-center mt-0 ">
																<div class="h-avatar is-medium">
																	<img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
																</div>
																<div class="data-content">
																	<div>
																		<span class="font-weight-bold">Vari tech</span>
																	</div>
																	<p class="m-0 text-secondary small">
																		Christian Bale
																	</p>
																</div>
															</div>
														</td>
														<td>
															+91 9876543210
														</td>
														<td>
															abcd@email.com
														</td>
														<td>
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Et!
														</td>
														<td>
															<div class="d-flex justify-content-end align-items-center">
																<button type="button" class="btn btn-primary btn-sm mr-1">Mark As Reponded</button>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row" id="responded">
							<div class="col-lg-12">
								<div class="card card-block card-stretch">
									<div class="card-body p-0">
										<div class="d-flex justify-content-between align-items-center p-3">
											<h5 class="font-weight-bold">Responded</h5>
											<button class="btn btn-secondary btn-sm">
												<a href="add-pending-verifications.php" style="color:white">
													<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17">
														<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
													</svg>
													Add
												</a>
											</button>
										</div>
										<div class="table-responsive">
											<table class="table data-table mb-0 table-bordered table-striped ">
												<thead class="table-color-heading">
													<tr class="">
														<th scope="col">
															S_No.
														</th>
														<th scope="col">
															Name
														</th>
														<th scope="col">
															Contact
														</th>
														<th scope="col">
															Email
														</th>
														<th scope="col">
															Message
														</th>
														<th scope="col">
															Action
														</th>
													</tr>
												</thead>
												<tbody>
													<tr class="white-space-no-wrap">
														<td class="pr-0 ">
															1
														</td>
														<td class="">
															<div class="active-project-1 d-flex align-items-center mt-0 ">
																<div class="h-avatar is-medium">
																	<img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
																</div>
																<div class="data-content">
																	<div>
																		<span class="font-weight-bold">Vari tech</span>
																	</div>
																	<p class="m-0 text-secondary small">
																		Christian Bale
																	</p>
																</div>
															</div>
														</td>
														<td>
															+91 9876543210
														</td>
														<td>
															abcd@email.com
														</td>
														<td>
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Et!
														</td>
														<td>
															<div class="d-flex justify-content-end align-items-center">
																<button type="button" class="btn btn-primary btn-sm mr-1">Mark As Reponded</button>
															</div>
														</td>
													</tr>
													<tr class="white-space-no-wrap">
														<td class="pr-0 ">
															1
														</td>
														<td class="">
															<div class="active-project-1 d-flex align-items-center mt-0 ">
																<div class="h-avatar is-medium">
																	<img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
																</div>
																<div class="data-content">
																	<div>
																		<span class="font-weight-bold">Vari tech</span>
																	</div>
																	<p class="m-0 text-secondary small">
																		Christian Bale
																	</p>
																</div>
															</div>
														</td>
														<td>
															+91 9876543210
														</td>
														<td>
															abcd@email.com
														</td>
														<td>
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Et!
														</td>
														<td>
															<div class="d-flex justify-content-end align-items-center">
																<button type="button" class="btn btn-primary btn-sm mr-1">Mark As Reponded</button>
															</div>
														</td>
													</tr>
													<tr class="white-space-no-wrap">
														<td class="pr-0 ">
															1
														</td>
														<td class="">
															<div class="active-project-1 d-flex align-items-center mt-0 ">
																<div class="h-avatar is-medium">
																	<img class="avatar rounded-circle" alt="user-icon" src="assets/images/user/1.jpg">
																</div>
																<div class="data-content">
																	<div>
																		<span class="font-weight-bold">Vari tech</span>
																	</div>
																	<p class="m-0 text-secondary small">
																		Christian Bale
																	</p>
																</div>
															</div>
														</td>
														<td>
															+91 9876543210
														</td>
														<td>
															abcd@email.com
														</td>
														<td>
															Lorem ipsum dolor sit amet consectetur adipisicing elit. Et!
														</td>
														<td>
															<div class="d-flex justify-content-end align-items-center">
																<button type="button" class="btn btn-primary btn-sm mr-1">Mark As Reponded</button>
															</div>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
      </div>
    </div>
  </div>
  <!-- Page end  -->
  <!-- Wrapper End-->
  <?php include 'footer.php'; ?>
  <script src="assets/js/backend-bundle.min.js"></script>
  <script src="assets/js/customizer.js"></script>
  <script src="assets/js/sidebar.js"></script>
  <script src="assets/js/flex-tree.min.js"></script>
  <script src="assets/js/tree.js"></script>
  <script src="assets/js/table-treeview.js"></script>
  <script src="assets/js/sweetalert.js"></script>
  <script src="assets/js/vector-map-custom.js"></script>
  <script src="assets/js/chart-custom.js"></script>
  <script src="assets/js/charts/01.js"></script>
  <script src="assets/js/charts/02.js"></script>
  <script src="assets/js/slider.js"></script>
  <script src="assets/vendor/emoji-picker-element/index.js" type="module"></script>
  <script src="assets/js/app.js"></script>
    <script>
      $(document).ready(function() {
      $('#responded').hide();
      })
      function showpending()
      {
      	$('#pending').show();
      	$('#responded').hide();
      }
      function showresponded()
      {
      	$('#pending').hide();
      	$('#responded').show();
      }
    </script>
</body>

</html>

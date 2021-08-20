<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Market Plus-Vendors</title>
  <link rel="shortcut icon" href="assets/img/logos/mp.png" />
  <link rel="stylesheet" href="assets/css/backend-plugin.min.css">
  <link rel="stylesheet" href="assets/css/backende209.css?v=1.0.0">
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
    <?php include "sidebar.php"; ?>
    <?php include "navbar.php"; ?>
    <div class="content-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mb-4 mt-1">
            <h4 class="font-weight-bold">View Service</h4>
            <div class="row" style="padding:10px 0">
              <div class="d-inline-block w-100">
                <button type="button" class="btn btn-outline-primary mt-2 active">Feeds</button>
                <button type="button" class="btn btn-outline-primary mt-2">Services</button>
                <button type="button" class="btn btn-outline-primary mt-2">Offers</button>
                <button type="button" class="btn btn-outline-primary mt-2">Package</button>
                <button type="button" class="btn btn-outline-primary mt-2">Profiles</button>
                <button type="button" class="btn btn-outline-primary mt-2">
									<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="20" height="20" padding-right="10">
										<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
									</svg>Add
								</button>
              </div>
            </div>
						<div class="container-fluid">
							<div class="row" style="padding:5px 0" id="feeds">
								<div class="col-sm-12 col-md-3 col-lg-3"></div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="card" style="padding:10px">
										<h4 class="card-title">Vari Tech</h4>
										<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, ea.</p>
										<img src="assets/images/page-img/card.jpg" class="card-img-top" alt="#" style="height:100%;">
										<div class="card-body">
											<a href="#" class="btn btn-success float-left btn-sm" style="margin:5px">Likes 
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:5px;">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
												</svg> : 40
											</a>
											<a href="comments.php" class="btn btn-primary float-left btn-sm" style="margin:5px">Comments
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:3px;">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
												</svg>
											</a>
											<a href="#" class="btn btn-danger float-right btn-sm" style="margin:5px" onclick="return confirm('Are you sure you want to Block this feed?')">Block
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:3px;">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
												</svg>
											</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-3 col-lg-3"></div>
							</div>
							<div class="list-group" style="margin:10px;">
								<a class="list-group-item list-group-item-action" style="border-bottom:1px dotted #eeeeee">
									<div class="d-flex w-100 justify-content-between">
											<h5 class="mb-1 text-white">List group item heading</h5>
											<small>3 days ago</small>
									</div>
									<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									<small>Donec id elit non mi porta.</small>
								</a>
								<a class="list-group-item list-group-item-action" style="border-bottom:1px dotted #eeeeee">
									<div class="d-flex w-100 justify-content-between">
											<h5 class="mb-1 text-white">List group item heading</h5>
											<small>3 days ago</small>
									</div>
									<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									<small>Donec id elit non mi porta.</small>
								</a>
							</div>
							<div class="row" style="padding:5px 0" id="feeds">
								<div class="col-sm-12 col-md-3 col-lg-3"></div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="card" style="padding:10px">
										<h4 class="card-title">Vari Tech</h4>
										<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, ea.</p>
										<img src="assets/images/page-img/card.jpg" class="card-img-top" alt="#" style="height:100%;">
										<div class="card-body">
											<a href="#" class="btn btn-success float-left btn-sm" style="margin:5px">Likes 
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:5px;">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
												</svg> : 40
											</a>
											<a href="comments.php" class="btn btn-primary float-left btn-sm" style="margin:5px">Comments
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:3px;">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
												</svg>
											</a>
											<a href="#" class="btn btn-danger float-right btn-sm" style="margin:5px" onclick="return confirm('Are you sure you want to Block this feed?')">Block
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:3px;">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
												</svg>
											</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-3 col-lg-3"></div>
							</div>
							<div class="list-group" style="margin:10px;">
								<a class="list-group-item list-group-item-action" style="border-bottom:1px dotted #eeeeee">
									<div class="d-flex w-100 justify-content-between">
											<h5 class="mb-1 text-white">List group item heading</h5>
											<small>3 days ago</small>
									</div>
									<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									<small>Donec id elit non mi porta.</small>
								</a>
								<a class="list-group-item list-group-item-action" style="border-bottom:1px dotted #eeeeee">
									<div class="d-flex w-100 justify-content-between">
											<h5 class="mb-1 text-white">List group item heading</h5>
											<small>3 days ago</small>
									</div>
									<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									<small>Donec id elit non mi porta.</small>
								</a>
							</div>
							<div class="row" style="padding:5px 0" id="feeds">
								<div class="col-sm-12 col-md-3 col-lg-3"></div>
								<div class="col-sm-12 col-md-6 col-lg-6">
									<div class="card" style="padding:10px">
										<h4 class="card-title">Vari Tech</h4>
										<p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Illum, ea.</p>
										<img src="assets/images/page-img/card.jpg" class="card-img-top" alt="#" style="height:100%;">
										<div class="card-body">
											<a href="#" class="btn btn-success float-left btn-sm" style="margin:5px">Likes 
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:5px;">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5" />
												</svg> : 40
											</a>
											<a href="comments.php" class="btn btn-primary float-left btn-sm" style="margin:5px">Comments
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:3px;">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
												</svg>
											</a>
											<a href="#" class="btn btn-danger float-right btn-sm" style="margin:5px" onclick="return confirm('Are you sure you want to Block this feed?')">Block
												<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" height="20" width="20" style="margin-bottom:3px;">
													<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
												</svg>
											</a>
										</div>
									</div>
								</div>
								<div class="col-sm-12 col-md-3 col-lg-3"></div>
							</div>
							<div class="list-group" style="margin:10px;">
								<a class="list-group-item list-group-item-action" style="border-bottom:1px dotted #eeeeee">
									<div class="d-flex w-100 justify-content-between">
											<h5 class="mb-1 text-white">List group item heading</h5>
											<small>3 days ago</small>
									</div>
									<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									<small>Donec id elit non mi porta.</small>
								</a>
								<a class="list-group-item list-group-item-action" style="border-bottom:1px dotted #eeeeee">
									<div class="d-flex w-100 justify-content-between">
											<h5 class="mb-1 text-white">List group item heading</h5>
											<small>3 days ago</small>
									</div>
									<p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
									<small>Donec id elit non mi porta.</small>
								</a>
							</div>
						</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Page end  -->
  <!-- Wrapper End-->
  <?php include "footer.php"; ?>
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
</body>

</html>
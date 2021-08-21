<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Market Plus-Add Setup</title>
    <link rel="shortcut icon" href="assets/img/logos/mp.png" />
    <link rel="stylesheet" href="assets/css/backend-plugin.min.css">
    <link rel="stylesheet" href="assets/css/backende209.css?v=1.0.0">
    <style>
      .table-responsive #DataTables_Table_1_filter label {
      padding-right: 20px;
      }
      .table-responsive #DataTables_Table_2_filter label {
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
							<h4 class="font-weight-bold">Add Setup</h4>
							<div class="row" style="padding:10px 0">
								<div class="d-inline-block w-100">
									<button type="button" class="btn btn-outline-primary mt-2" onclick="showslider()">Slider</button>
									<button type="button" class="btn btn-outline-primary mt-2" onclick="showsponsorposition()">Sponsor Position</button>
									<button type="button" class="btn btn-outline-primary mt-2" onclick="showcategorybanner()">Category Banner</button>
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
  </body>
</html>
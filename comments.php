<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Market Plus-Comments</title>
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
    <?php include 'sidebar.php';?>
    <?php include 'navbar.php';?>
    <div class="content-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 mb-4 mt-1">
            <h4 class="font-weight-bold">Comments</h4>
						<div class="container-fluid">
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
		$('#table').hide();
	  })
	  function showfeeds()
		{
			$('#feeds').show();
			$('#table').hide();
		}
	  function showtable()
		{
			$('#feeds').hide();
			$('#table').show();
		}
  </script>
</body>

</html>
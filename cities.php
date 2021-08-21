<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Market Plus-Cities</title>
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
            <div class="col-lg-12">
              <div class="card card-block card-stretch">
                <div class="card-body p-0">
                  <div class="d-flex justify-content-between align-items-center p-3">
                    <h5 class="font-weight-bold">Cities</h5>
                    <button class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#addmodal">
											<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" width="17" style="padding-bottom:4px;">
												<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
											</svg>
											Add
                    </button>
                  </div>
                  <div class="table-responsive">
                    <table id="datatable-1" class="table data-table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>S No.</th>
                          <th>State</th>
                          <th>City</th>
                          <th class="text-right">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Uttarakhand</td>
                          <td>Dehradun</td>
                          <td class="text-right">
                            <button type="button" class="btn btn-info btn-sm mr-1" data-toggle="modal" data-target="#editmodal">Edit</button>
                            <button type="button" class="btn btn-danger btn-sm mr-1" onclick="return confirm ('Are You sure you want to delete?')">Delete</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!--Add Modal -->
            <div class="modal fade" id="addmodal" tabindex="-1" role="dialog" aria-labelledby="addmodalTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="addmodalTitle">Add a City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
										<!-- state -->
										<div class="header-title">
											<h6 class="card-title">Select State</h6>
										</div>
										<select class="form-control choicesjs" id="state" name="state">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
										<!-- city -->
										<div class="header-title">
											<h6 class="card-title">Select City</h6>
										</div>
										<select class="form-control choicesjs" id="city" name="city">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
            <!--Edit Modal -->
            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="editmodalTitle" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="editmodalTitle">Edit a City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
										<!-- state -->
										<div class="header-title">
											<h6 class="card-title">Select State</h6>
										</div>
										<select class="form-control choicesjs" id="state" name="state">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
										<!-- city -->
										<div class="header-title">
											<h6 class="card-title">Select City</h6>
										</div>
										<select class="form-control choicesjs" id="city" name="city">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
										</select>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary btn-sm">Save changes</button>
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
  </body>
</html>
<?php include ('header_dt.php');?>
<?php include('session.php'); ?>
<?$id = $_GET['id'];?> 
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="home.php" class="site_title">&nbsp<img src="up-logo.png" width="45" height="45"> <span>AQSoftware,Inc.</span></a>
            </div>

            <div class="clearfix"></div>
            <?php include ('sidebar.php');?>
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        
    <?php include ('navbar.php');?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Target Implementation</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                  <a data-toggle="modal" href="#modal_superusers" id="delete"  class="btn btn-info" name=""><i class="fa fa-plus"></i> Add Target</a><br><br>
                  <?php include('modal_target.php') ?> <br> 
                    <!-- content -->
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th width="50">ID</th>
                          <th>Target</th>
                        </tr>
                      </thead>


                      <tbody>
                          <?php
                          $query = $conn->query("select * from targetimplem") or die(mysql_error());
                          while ($row = $query->fetch()) {
                          ?>
                      <tr>
                      <td><?php $id = $row['id']?><?php echo $row['id']; ?>
                      <td><?php echo $row['target']; ?>
                      </td>
                      <?php };?> 
                      </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

                    <!-- /content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php include ('footer_dt.php');?>

        
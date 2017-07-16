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
                    <h2>Oppurtunity</h2>
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
                   <p class="text-muted font-13 m-b-30">
                     Click company name for <code>$().more details();</code>
                    </p>
                    <!-- content -->
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Ticket #</th>
                          <th>Date</th>
                          <th>Company Name</th>
                          <th>Assigned</th>
                          <th>Point Person</th>
                          <th>Position</th>
                          <th>Status Percentage</th>
                        </tr>
                      </thead>


                      <tbody>
                          <?php
                          $query = $conn->query("select * from newoppurtunity where statuspercentage='10%' order by id desc") or die(mysql_error());
                          while ($row = $query->fetch()) {
                          ?>
                      <tr>
                      <td><?php $id = $row['id']?><?php echo $row['id']; ?></td>
                      <td><?php echo $row['date']; ?></td>
                      <td><a href="oppurtunitydata.php<?php echo '?id='.$id; ?>"><?php echo $row['companyname']; ?></td> 
                      <td><?php echo $row['assigned']; ?></td> 
                      <td><?php echo $row['pointperson']; ?></td> 
                      <td><?php echo $row['position']; ?></td> 
                       <?php
                        if ($row['statuspercentage'] == 'Win') {
                          echo "<td><span class='label label-info'>".$row['statuspercentage']."</span></td>";
                        } elseif ($row['statuspercentage'] == '90%') {
                          echo "<td><span class='label label-success'>".$row['statuspercentage']."</span></td>";
                        } elseif ($row['statuspercentage'] == '50%') {
                          echo "<td><span class='label label-primary'>".$row['statuspercentage']."</span></td>";
                        } elseif ($row['statuspercentage'] == '10%') {
                          echo "<td><span class='label label-warning'>".$row['statuspercentage']."</span></td>";
                        } else {
                          echo "<td><span class='label label-danger'>".$row['statuspercentage']."</span></td>";
                        }
                      ?>
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

        \
<!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <?php include('profile_picture.php'); ?>
                <img src="<?php echo $row['image']; ?>" width="60" height="60" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2><?php echo $name?></h2>
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />
<!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="home.php"><i class="fa fa-home"></i> Home</span></a>
                  </li>
                   <ul class="nav side-menu">
                  <li><a href="newoppurtunity.php"><i class="fa fa-edit"></i> New Opportunity</a></li>
                  </ul>
                    <ul class="nav side-menu">
                  <li><a href="oppurtunity.php"><i class="fa fa-table"></i> Opportunity</a></li>
                  </ul>
                    <ul class="nav side-menu">
                <li><a><i class="fa fa-bar-chart"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="reports_win.php">Win</a></li>
                      <li><a href="reports_lost.php">Lost</a></li>
                      <li><a href="reports_90.php">90%</a></li>
                      <li><a href="reports_50.php">50%</a></li>
                      <li><a href="reports_10.php">10%</a></li>
                    </ul>
                  </ul>
                   <ul class="nav side-menu">
                  <li><a href="partnersinfo.php"><i class="fa fa-user"></i> Partners Information</a></li>
                  </ul>
              </div>

            </div>
             <!-- /sidebar menu -->
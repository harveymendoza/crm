<?php include ('header.php');?>
<?php include('session.php'); ?>
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
                    <h2>Opportunity</h2>
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
                  <?php
                          $id = md5($_GET['id']);
                          $query = $conn->query("select * from newoppurtunity where id = '$id'") or die(mysql_error());
                          while ($row = $query->fetch()) {
                          ?>
                      <form data-parsley-validate class="form-horizontal form-label-left" method="POST">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Date <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input  name="date" value="<?php echo $row['date']; ?>" class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Assigned <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="assigned" value="<?php echo $row['assigned']; ?>" id="assigned" name="last-name"  class="form-control col-md-7 col-xs-12" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Company Name <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="companyname" value="<?php echo $row['companyname']; ?>" class="form-control col-md-7 col-xs-12" type="text" required="required" readonly>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Point Person <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="pointperson" value="<?php echo $row['pointperson']; ?>" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Position <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input name="position" value="<?php echo $row['position']; ?>" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Contact Number <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input name="contactnumber" value="<?php echo $row['contactnumber']; ?>" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Email Address <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input name="emailadd" value="<?php echo $row['emailadd']; ?>" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Meeting Date <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input name="meetingdate" value="<?php echo $row['meetingdate']; ?>" class="date-picker form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Recurring Meeting Date <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input name="reccuringdate" type="date" value="<?php echo $row['reccuringdate']; ?>" class="date-picker form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-4 col-xs-12">Status Percentage <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="statuspercentage" class="form-control" required>
                            <option value="<?php echo $row['statuspercentage']; ?>"><?php echo $row['statuspercentage']; ?></option>
                            <option value="10%">10%</option>
                            <option value="50%">50%</option>
                            <option value="90%">90%</option>
                            <option value="Win">WIN</option>
                            <option value="Lost">LOST</option>

                         </select>
                        </div>
                       </div>
                       <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Remarks <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <textarea name="remarks" class="form-control col-md-7 col-xs-12" type="text" required="required"><?php echo $row['remarks']; ?></textarea>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Factors :<span class="required"></span>
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Special Request <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input value="<?php echo $row['specialrequest']; ?>" name="specialrequest" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Budget <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input value="<?php echo $row['budget']; ?>" name="budget" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Number of Users <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <input value="<?php echo $row['numuser']; ?>" name="numuser" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Target Implementation <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <select name="targetimplementation" class="form-control" required>
                            <option value="<?php echo $row['targetimplementation']; ?>"><?php echo $row['targetimplementation']; ?></option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>

                         </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Device <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <select name="device" class="form-control" required>
                            <option value="<?php echo $row['device']; ?>"><?php echo $row['device']; ?></option>
                            <option value="IOS">IOS</option>
                            <option value="ANDROID">ANDOID</option>
                         </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Telco <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                          <select name="telco" class="form-control" required>
                            <option value="<?php echo $row['telco']; ?>"><?php echo $row['telco']; ?></option>
                            <option value="ALL">ALL</option>
                            <option value="SMART">SMART</option>
                            <option value="GLOBE">GLOBE</option>
                            <option value="SUN">SUN</option>
                         </select>
                        </div>
                      </div>
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Competitors (if necessary) :<span class="required"></span>
                        </label>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Competitors Name <span class="required">*</span>
                        </label>
                        <div class="col-md-5 col-sm-5 col-xs-12">
                           <input value="<?php echo $row['comname']; ?>" name="comname" class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Signed 
                        Date<span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input name="signeddate" type="date" value="<?php echo $row['signeddate']; ?>"  class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4 col-xs-12">Expiration Date <span class="required">*</span>
                        </label>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                          <input name="exdate" type="date" value="<?php echo $row['exdate']; ?>"  class="date-picker form-control col-md-7 col-xs-12" type="text">
                        </div>
                      </div>


                          <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <input type="button" onclick="location.href='oppurtunity.php';" value="Cancel" class="btn btn-primary"/>
                          <button type="submit" name="submit" class="btn btn-success">Submit</button>

                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        </div>
                      </div>
                                      <?php 
                      if (isset($_POST['submit'])){ 
                      $id = $_GET['id'];
                      $date = $_POST['date'];
                      $assigned = $_POST['assigned'];
                      $companyname = $_POST['companyname'];
                      $pointperson = $_POST['pointperson'];
                      $position = $_POST['position'];
                      $contactnumber = $_POST['contactnumber'];
                      $emailadd = $_POST['emailadd'];
                      $meetingdate = $_POST['meetingdate'];
                      $reccuringdate = $_POST['reccuringdate'];
                      $statuspercentage = $_POST['statuspercentage'];
                      $remarks = $_POST['remarks'];
                      $specialrequest = $_POST['specialrequest'];
                      $budget = $_POST['budget'];
                      $numuser = $_POST['numuser'];
                      $targetimplementation = $_POST['targetimplementation'];
                      $device = $_POST['device'];
                      $telco = $_POST['telco'];
                      $comname = $_POST['comname'];
                      $signeddate = $_POST['signeddate'];
                      $exdate = $_POST['exdate'];
                      
                      $conn = new PDO('mysql:host=localhost;dbname=aqsi_crm', 'root','rootharvey'); 
                      $conn->query("UPDATE `newoppurtunity` SET `date` = '$date', `assigned` = '$assigned', `companyname` = '$companyname', `pointperson` = '$pointperson', `position` = '$position', `contactnumber` = '$contactnumber', `emailadd` = '$emailadd', `meetingdate` = '$meetingdate', `reccuringdate` = '$reccuringdate', `statuspercentage` = '$statuspercentage', `remarks` = '$remarks', `specialrequest` = '$specialrequest', `budget` = '$budget', `numuser` = '$numuser', `targetimplementation` = '$targetimplementation', `device` = '$device', `telco` = '$telco', `comname` = '$comname', `signeddate` = '$signeddate', `exdate` = '$exdate' WHERE `newoppurtunity`.`id` = '$id';");


                       
                      ?>
                      <?php include('dbcon.php'); ?>
                      <?php
                      session_start();
                      date_default_timezone_set('Etc/GMT+8');
                      $username = $_SESSION['id'];
                      $time = date("Y-m-d h:i:A");
                      $companyname = $_POST['companyname'];
                      $conn->query("INSERT INTO `activity_log` (`id`, `username`, `time`, `activity`, `company`) VALUES (NULL, '$username', '$time', 'edit', '$companyname');");
                      ?> 
                      <script type="text/javascript"> 
                      alert('You are Successfully saved the information. Thank You'); 
                      window.location="oppurtunity.php"; 
                      </script> 
                   
                      <?php 
                      } 
                      ?>
                    </form>
                    <?php };?> 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
        <?php include ('footer.php');?>

        

   

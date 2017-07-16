            <form role="form" class="login_form1" method="POST" action="login.php">
              <h1>Sales Funnel</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
              <button type="submit" class="btn btn-default submit"><i class="fa fa-check-square-o">
              </i> Login</button>

                <a class="reset_pass" href="admin">ADMINISTRATOR?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="up-logo.png" height="35" width="35"><br>  AQSoftware Inc.</h1>
                  
                </div>
              </div>
            </form>
            <script>
                        jQuery(document).ready(function(){
                        jQuery(".login_form1").submit(function(e){
                            e.preventDefault();
                            var formData = jQuery(this).serialize();
                            $.ajax({
                              type: "POST",
                             url: "login.php",
                              data: formData,
                              success: function(html){
                              if(html=='true'){
                              window.location = 'home.php'
                              }else if(html == 'false')
                              {
                                $.jGrowl("Please Check Your Username and Password", { header: 'Login  Failed' });
                              }
                              }
                            });
                            return false;
                          });
                  });
                  </script>

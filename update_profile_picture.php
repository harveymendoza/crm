 <?php
 include('dbcon.php');
 include('session.php');
 
 
                       
                               

                                $image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
                                $image_name = addslashes($_FILES['image']['name']);
                                $image_size = getimagesize($_FILES['image']['tmp_name']);

                                move_uploaded_file($_FILES["image"]["tmp_name"], "uploads/" . $_FILES["image"]["name"]);
                                $location = "uploads/" . $_FILES["image"]["name"];
								
								$conn->query("update  addmember set image = '$location' where user_id  = '$session_id' ");
								
								?>
 
								<script>
								window.location = "home.php";  
								</script>

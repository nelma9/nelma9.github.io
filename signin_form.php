					
<?php
require("includes/database.php");
 

						if(isset($_POST['submit']))
						{
							$email=$_POST['email'];
							$password=$_POST['password'];
						 
$result = mysqli_query($connect,"SELECT * FROM user WHERE email ='$email' and password='$password'");
						 
							
							$row = mysqli_fetch_array($result);
							$count = mysqli_num_rows($result);				
								if ($count == 0) 
									{ ?>
									 <script>alert('Vérifier vos informations'); window.location='signin.php'</script>
									 <?php
									} 
								else if ($count > 0)
									{
										session_start();
										$_SESSION['id'] = $row['user_id'];
										header("location:home.php");
									}
						 				
						}
?>
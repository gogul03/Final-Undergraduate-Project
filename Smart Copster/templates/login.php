<?php
include "connect.php";
?>


<!DOCTYPE html>
<html lang="en">
	

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<style>
.avatar {
  vertical-align: right;
  width: 400px;
  height: 400px;
  border-radius: 50%;
}
</style>
<?php 
	$result = $db->prepare("SELECT * FROM site_settings WHERE id=1");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
		<title><?php echo $row['site_name']; ?></title>
		<!-- Meta tags -->
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Donuts Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design"
	/>
	<?php }?>

		
		
		<link href="home.css" rel='stylesheet' type='text/css' media="all">
			
		
				
				</head>
	
				
<body>

			


						 <header>
        <h1>Smart Copster</h1>
		
		
    </header>
    <main>
	<img src="assets/images/login.jpg" alt="Avatar" class="avatar">
        <form id="login_form" class="form_class" action="login2.php" method="post">
             <div class="form_div">
                <label><b>Login:</label>
                <input class="field_class" name="username" type="text" placeholder="Type your username" autofocus>
                <label><b>Password:</label>
                <input id="pass" class="field_class" name="pass" type="password" placeholder="Type your password">
                <button class="submit_class" type="submit" form="login_form" onclick="return validarLogin()">Login</button>
				<ul class="nav navbar-nav navbar-left">
                       
					   <li>
						   <a href="logout.php">
							   <p>Back</p>
						   </a>
					   </li>
            </div>
            
        </form>
    </main>
    <footer>
        <p> Web Application&trade</p>
    
                 </div>
								<div class="copy">
								<?php 
	$result = $db->prepare("SELECT * FROM site_settings WHERE id=1");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
									<p>&copy;2022 <?php echo $row['site_name']; ?> 
									</p>
	<?php } ?>
								</div>
							</body>
						

</html>
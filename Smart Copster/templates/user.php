<?php include "sidebar.php"; ?>
<style>
.avatar {
  vertical-align: left;
  width: 400px;
  height: 400px;
  border-radius: 50%;
}
</style>
   <div class="content">
            <div class="container-fluid">
                <div class="row">
                <img src="assets/images/profile.jpg" alt="Avatar" class="avatar">
                    <div class="col-md-8">
                        
                            <div class="header">
                                <h4 class="title"><b>Edit Profile</h4>
                            </div>
							<?php if(get("success")):?>
                                            <div>
                                               <?=App::message("success", "Your information was updated Successfully!")?>
                                            </div>
                                            <?php endif;?>
                            <div class="content">
							<?php 
							  $user=$_SESSION['SESS_MEMBER_ID'];
	$result = $db->prepare("SELECT id,username,pass,email,name,address FROM user WHERE id='$user'");
	$result->execute();
	for($i=0; $row = $result->fetch(); $i++){
?>
							 <form action="update-user.php" method="post">
                                    <div class="row">
                                       <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $row['username']; ?>" disabled>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputPassword">Change Password</label>
                                                <input type="password" name="pass"  class="form-control" placeholder="Password">
                                            </div>
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $row['email']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" name="name" class="form-control" placeholder="Company" value="<?php echo $row['name']; ?>">
                                            </div>
                                        </div>
                                      
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" name="address" class="form-control" placeholder="Home Address" value="<?php echo $row['address']; ?>">
                                            </div>
                                        </div>
                                    </div>

                                   
         <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button>
                                    <div class="clearfix"></div>
                                </form>
	<?php }?>
                            </div>
                        </div>
                    </div>
                       

                </div>
            </div>
        </div>


        <?php include"footer.php"; ?>
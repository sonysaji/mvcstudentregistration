	<!------------------superuser adds admin----------------------->

<?php include('../view/superuserbase.php')?>




<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" onsubmit="return form()">
				<span class="contact100-form-title">
					ADD ADMINISTRATORS
				</span>
                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<label class="label-input100" for="name">Full name</label>
					<input id="name"  required class="input100" type="text" name="name" placeholder="Enter name...">
					<span class="focus-input100"></span>
				</div>



				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<label class="label-input100" for="email">username</label>
					<input id="email" class="input100" type="text" required name="username" placeholder="Enter username...">
					<span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<label class="label-input100" for="email">password</label>
					<input id="password" class="input100" type="text" name="password" required placeholder="Enter password...">
					<span class="focus-input100"></span>
				</div>



				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						submit
					</button>
				</div>

				<div class="contact100-form-social flex-c-m">
					<a href="#" class="contact100-form-social-item flex-c-m bg1 m-r-5">
						<i class="fa fa-facebook-f" aria-hidden="true"></i>
					</a>

					<a href="#" class="contact100-form-social-item flex-c-m bg2 m-r-5">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</a>

					<a href="#" class="contact100-form-social-item flex-c-m bg3">
						<i class="fa fa-youtube-play" aria-hidden="true"></i>
					</a>
				</div>
			</form>

			<div class="contact100-more flex-col-c-m" style="background-image: url('../img/background.jpg');">
			</div>
		</div>
    </div>
    <?php 
if (isset($_POST['submit']))
 {
     $name=$_POST['name'];
     $user=$_POST['username']; 
     $pass=$_POST['password']; 
     include_once('../controller/mycontroller.php');
     $var=new mycontroller();
     $var->adminreg($name,$user,$pass);
   
 }?>
  <!-- Password validation -->

<script>

function form()
{
  

  var str = document.getElementById('password').value;
  
  if (str.length < 6) {
        alert("too_short");
        return ("too_short");
    } 
}
</script>

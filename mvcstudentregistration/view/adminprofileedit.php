	<!------------------admin edits his profile----------------------->

<?php
session_start();

include('../view/base.php');
require_once '../config/connection.php';
require_once '../model/mymodel.php';


$result=mysqli_query($conn,"SELECT * from admin WHERE admin_id='".$_SESSION["key"]."'");
while($row=mysqli_fetch_assoc($result))
            {?>    



<!------------session start---------------->
<section>
							<h3 class="text-primary head"><i class="fas fa-user fa-2x" ></i>MY PROFILE</h3>
							
						
                <form class="contact100-form validate-form" action="" method="post" onsubmit="return form()">					
						<table class="border table table-striped bg-table">
							

                            <tr>
							<td class="font-weight-bolder">Admin id</td>
							<td><input  class="bg-dark text-white form-control input-sm" type="text" name="id" required value="<?php  echo  $row['admin_id'] ?>" readonly></td>
							</tr>
							
							
							<tr>
							<td class="font-weight-bolder">Name</td>
							<td><input required class="bg-dark text-white form-control input-sm" type="text" name="name" required value="<?php  echo  $row['name'] ?>"></td>
							</tr>
							
							
							<tr>
							<td class="font-weight-bolder">Username</td>
							<td><input  class="bg-dark text-white form-control input-sm" type="text" name="username" required value="<?php  echo  $row['username'] ?>"></td>
							</tr>
                            
							<tr>
							<td class="font-weight-bolder">Password</td>
							<td><input required id="password" class="bg-dark text-white form-control input-sm" type="password" name="password" required value="<?php  echo  $row['password'] ?>"></td>
							</tr>
                            </table>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" name="submit">
						submit
					</button>
				</div>
							
					    </form>		
					</div>
				</div>
			</section>
		
        <?php	}?>
        <?php 
if (isset($_POST['submit']))
 {
     $id=$_POST['id'];
     $name=$_POST['name'];
     $user=$_POST['username']; 
     $pass=$_POST['password']; 
     include_once('../controller/mycontroller.php');
     $var=new mycontroller();
     $var->adminupdate($id,$name,$user,$pass);
   
 }?>
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
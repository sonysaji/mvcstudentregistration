	<!------------------edit student profile ----------------------->

<?php
session_start();

include('../view/studentbase.php');
require_once '../config/connection.php';
require_once '../model/mymodel.php';


$result=mysqli_query($conn,"SELECT * from student WHERE id='".$_SESSION["id"]."'");
while($row=mysqli_fetch_assoc($result))
            {?>    



<!------------session start---------------->
<section>
							<h3 class="text-primary head"><i class="fas fa-user fa-2x" ></i>MY PROFILE</h3>
							
						
                <form class="contact100-form validate-form" action="" method="post" onsubmit="return form()">					
						<table class="border table table-striped bg-table">
							

                            <tr>
							<td class="font-weight-bolder">Student id</td>
							<td><input  class="bg-dark text-white form-control input-sm" type="text" name="id" required value="<?php  echo  $row['id'] ?>" readonly></td>
							</tr>
							
							
							<tr>
							<td class="font-weight-bolder">Name</td>
							<td><input  class="bg-dark text-white form-control input-sm" type="text" name="name" required value="<?php  echo  $row['name'] ?>"></td>
							</tr>
							
                            <tr>
							<td class="font-weight-bolder">Reg.no</td>
							<td><input  class="bg-dark text-white form-control input-sm" type="text" name="regno" required value="<?php  echo  $row['regno'] ?>"></td>
							</tr>
							
  

                            <tr>
							<td class="font-weight-bolder">DEPARTMENT</td>
							<td><div class="wrap-input100">
                            <div class="label-input100 bg-dark text-white">DEPARTMENT</div>
                            <div>
                                <select class="js-select2 bg-dark text-white" name="dept">
                                    <option >MECHANICAL</option>
                                    <option>ELECTRICAL</option>
                                    <option>ElECTRONICS</option>
                                    <option>COMPUTER</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <span class="focus-input100"></span>
                           </div>
                          </td>
							</tr>

                            <tr>
							<td class="font-weight-bolder">ACADEMIC YEAR</td>
							<td><div class="wrap-input100">
                            <div class="label-input100 bg-dark text-white">YEAR</div>
                            <div>
                                <select class="js-select2 bg-dark text-white" name="year">
                                <option>1st year</option>
                                <option>2nd year</option>
                                <option>3rd year</option>
                                <option>4th year</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <span class="focus-input100"></span>
                           </div>
                          </td>
							</tr>
                            <tr>
							<td class="font-weight-bolder">Course</td>
							<td><input  class="bg-dark text-white form-control input-sm" type="text" name="course" required value="<?php  echo  $row['course'] ?>"></td>
							</tr>
                            <tr>
							<td class="font-weight-bolder">Email</td>
							<td><input  class="bg-dark text-white form-control input-sm" type="text" name="email" required value="<?php  echo  $row['email'] ?>"></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Username</td>
							<td><input  class="bg-dark text-white form-control input-sm" type="text" name="username" required value="<?php  echo  $row['username'] ?>"></td>
							</tr>
                            
							<tr>
							<td class="font-weight-bolder">Password</td>
							<td><input id="password" class="bg-dark text-white form-control input-sm" type="password" name="password" required value="<?php  echo  $row['password'] ?>"></td>
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
     $regno=$_POST['regno'];
	 $dept=$_POST['dept'];
	 $year=$_POST['year'];
     $course=$_POST['course'];
     $email=$_POST['email'];
     $user=$_POST['username']; 
     $pass=$_POST['password']; 
     include_once('../controller/mycontroller.php');
     $var=new mycontroller();
     $var->studentupdate($id,$name,$regno,$dept,$year,$course,$email,$user,$pass);
   
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
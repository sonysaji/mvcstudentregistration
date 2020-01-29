	<!------------------select subject by student----------------------->

<?php 
session_start();


include('../view/studentbase.php');
require_once '../config/connection.php';
require_once '../model/mymodel.php';


$result=mysqli_query($conn,"SELECT * from student WHERE id='".$_SESSION["id"]."'");

while($row=mysqli_fetch_assoc($result))
        {?>
		




<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post">
				<span class="contact100-form-title">
					SELECT SUBJECTS HERE
				</span>
				<div class="wrap-input100">
					<div class="label-input100">STUDENT ID</div>
					<div>
						<select class="js-select2" name="id">
							<option><?php echo $row["id"]?></option> 
						</select>
				<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div> 
				<div class="wrap-input100">
					<div class="label-input100">STUDENT NAME</div>
					<div>
						<select class="js-select2" name="name">
							<option><?php echo $row["name"]?></option> 
						</select>
				<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100">
					<div class="label-input100">STREAM</div>
					<div>
						<select class="js-select2" name="stream">
							<option><?php echo $row["dept"]?></option> 
						</select>
				<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100">
					<div class="label-input100">YEAR</div>
					<div>
						<select class="js-select2" name="year">
							<option><?php echo $row["year"]?></option>
							<?php
						$var=$row['year'];
						$var1=$row['dept'];
						}?>
							
						</select>
				<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div>
                
                <div class="wrap-input100">
					<div class="label-input100">SEMESTER</div>
					<div>
						<select class="js-select2" name="semester">
							<option>1st</option>
							<option>2nd</option>
							<option>3rd</option>
							<option>4th</option>
                            <option>5th</option>
                            <option>6th</option>


						</select>
						<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div>



				
				<div class="wrap-input100">
					<div class="label-input100">SUBJECTS</div>
					<div>


						<select class="js-select2" name="subject">
						<?php $result1=mysqli_query($conn,"SELECT * from subjects WHERE year='".$var."'") ;

						while($row=mysqli_fetch_assoc($result1))
        {?>

							<option><?php echo $row["subject"]?></option>
							
							<?php 
		}?>
		
						</select>
		
						<div class="dropDownSelect2"></div>
					</div>
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
	 $id=$_POST['id'];
	 $name=$_POST['name'];
     $stream=$_POST['stream'];
	 $year=$_POST['year'];
     $semester=$_POST['semester']; 
     $subject=$_POST['subject'];
     include_once('../controller/mycontroller.php');
     $var=new mycontroller();
     $var->studentsubject( $id,$name,$stream,$year,$semester,$subject);
   
 }?>
 
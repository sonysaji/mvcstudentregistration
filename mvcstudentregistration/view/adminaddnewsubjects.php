	<!------------------admin adds new subjects----------------------->

<?php include('../view/base.php')?>
<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post">
				<span class="contact100-form-title">
					ADD SUBJECTS
				</span>
                <div class="wrap-input100">
					<div class="label-input100">STREAM</div>
					<div>
						<select class="js-select2" name="stream">
						    <option>MECHANICAL</option>
							<option>ELECTRICAL</option>
							<option>ElECTRONICS</option>
							<option>COMPUTER</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100">
					<div class="label-input100">ACADEMIC YEAR</div>
					<div>
						<select class="js-select2" name="year">
							<option>1st year</option>
							<option>2nd year</option>
							<option>3rd year</option>
							<option>4th year</option>
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



				
				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<label class="label-input100" for="email">SUBJECT</label>
					<input id="subject" required class="input100" type="text" name="subject" placeholder="Enter subject...">
					<span class="focus-input100"></span>
                </div>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<label class="label-input100" for="email">NUMBER OF CREDITS</label>
					<input id="credit"  required class="input100" type="number" name="credit" placeholder="Enter credits...">
					<span class="focus-input100"></span>
				</div>
                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<label class="label-input100" for="email">SUBJECT COORDINATOR</label>
					<input id="coordinator" required class="input100" type="text" name="coordinator" placeholder="Enter name...">
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
     $stream=$_POST['stream'];
     $year=$_POST['year'];
     $semester=$_POST['semester']; 
     $subject=$_POST['subject'];
     $credit=$_POST['credit'];
     $coordinator=$_POST['coordinator'];
     include_once('../controller/mycontroller.php');
     $var=new mycontroller();
     $var->addsubject($stream,$year,$semester,$subject,$credit,$coordinator);
   
 }?>
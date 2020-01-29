	<!------------------timetable publish by admin----------------------->

<?php include('../view/base.php');?>

<form class="contact100-form validate-form" action="" method="post">

        <table class="table table-dark table-bordered">
                <tr>
				<td class="">  
                <div class="wrap-input100">
					<div class="label-input100"> STREAM</div>
					<div>
						<select class="js-select2 bg-dark text-white" name="stream">
							<option>MECHANICAL</option>
							<option>ELECTRICAL</option>
							<option>ElECTRONICS</option>
							<option>COMPUTER</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div>
                </td>
                <td class="">  
                <div class="wrap-input100">
					<div class="label-input100">ACADEMIC YEAR</div>
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
                <td class="">  
                <div class="wrap-input100">
                <div class="wrap-input100">
					<div class="label-input100 ">SEMESTER</div>
					<div>
						<select class="js-select2 bg-dark text-white" name="semester">
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
                </td>
                <td>__________</td>
                <td>__________</td>
                <td>__________</td>
                <td>__________</td>
                <td>__________</td>
                </tr>
				
<th>WEEK</th>
<th>HOUR 1</th>
<th>HOUR 2</th>
<th>HOUR 3</th>
<th>HOUR 4</th>
<th>HOUR 5</th>
<th>HOUR 6</th>
<th></th>



					 
 

                    <tr>
					<td class=""> 
                 <div class="wrap-input100">
					<div class="label-input100">week</div>
					<div>
						<select class="selectpicker bg-dark text-white" data-style="btn-primary" name="week">
							<option>Monday</option>
							<option>Tuesday</option>
							<option>Wednesday</option>
							<option>Thursday</option>
                            <option>Friday</option>


						</select>
						<div class="dropDownSelect2"></div>
					</div>
					<span class="focus-input100"></span>
				</div></td>
					<td class=""><input  class="bg-dark text-white form-control input-sm" type="text" name="hour1" required></td>
                    <td class=""><input  class="bg-dark text-white form-control input-sm" type="text" name="hour2" required></td>
                    <td class=""><input  class="bg-dark text-white form-control input-sm" type="text" name="hour3" required></td>
                    <td class=""><input  class="bg-dark text-white form-control input-sm" type="text" name="hour4" required></td>
                    <td class=""><input  class="bg-dark text-white form-control input-sm" type="text" name="hour5" required></td>
                    <td class=""><input  class="bg-dark text-white form-control input-sm" type="text" name="hour6" required></td>
                    <td class=""><button type="submit" class="btn-primary  btn btn-block " name="submit" value="submit">submit</button></td>
                    </tr>

                  </form>
                    
                
                

                 	
				
					
		
						</table>



            <?php 
if (isset($_POST['submit']))
 {
     $stream=$_POST['stream'];
     $year=$_POST['year'];
     $semester=$_POST['semester']; 
     
     $week=$_POST['week'];
     $hour1=$_POST['hour1']; 
     $hour2=$_POST['hour2']; 
     $hour3=$_POST['hour3']; 
     $hour4=$_POST['hour4']; 
     $hour5=$_POST['hour5']; 
     $hour6=$_POST['hour6'];
     include_once('../controller/mycontroller.php');
     $var=new mycontroller();
     $var->addtimetable($stream,$year,$semester,$week,$hour1,$hour2,$hour3,$hour4,$hour5,$hour6);
   
 }?>
	<!------------------admin removes added subjects----------------------->

<?php include_once('../controller/mycontroller.php');
include('../view/base.php');
$var2=new mycontroller();
$result=$var2->subjectview();?>

<table class="table table-dark table-bordered">
<th>SUBJECT ID</th>
<th>STREAM</th>
<th>YEAR</th>
<th>SEMESTER</th>
<th>SUBJECT</th>
<th>CREDIT</th>
<th>COORDINATOR</th>


					 
 
					<?php while($row=mysqli_fetch_assoc($result))
					{?>
					
                    <tr>
					<form class="form-control" method="post">							
					<td class=""><input class="bg-dark text-white form-control input-sm" type="text" name="id" value="<?php echo $row["id"]; ?>" readonly></td>

					<td class=""><input  class="bg-dark text-white" type="text" name="name" value="<?php echo $row["stream"]; ?>" readonly></td>
					<td class=""><input  class="bg-dark text-white form-control input-sm" type="text" name="username" value="<?php echo $row["year"]; ?>" readonly></td>
                    <td class=""><input  class="bg-dark text-white form-control input-sm" type="text" name="username" value="<?php echo $row["semester"]; ?>" readonly></td>
                    <td class=""><input  class="bg-dark text-white form-control input-lg" type="text" name="username" value="<?php echo $row["subject"]; ?>" readonly></td>
                    <td class=""><input  class="bg-dark text-white form-control input-sm" type="text" name="username" value="<?php echo $row["credit"]; ?>" readonly></td>
                    <td class=""><input  class="bg-dark text-white" type="text" name="username" value="<?php echo $row["coordinator"]; ?>" readonly></td>




					<td class=""><button type="submit" class="btn-danger  btn btn-block " name="submit" value="delete">
						delete	
							</button></td>
							
							</form>
                  </tr>
                    
                
                

                 	
				
					<?php } 
					?>
		
						</table>
					</div>
				</div>

			</div>
		</div>
	</div>
	<?php 
if (isset($_POST['submit']))
 {
     $id=$_POST['id']; 
     include_once('../controller/mycontroller.php');
     $var=new mycontroller();
     $var->deletesubject($id);
   
 }?>
	
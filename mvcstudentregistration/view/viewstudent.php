	<!------------------view student by admin----------------------->

<?php include_once('../controller/mycontroller.php');
include('../view/base.php');
$var2=new mycontroller();
$result=$var2->studentview();?>

<table class="table table-dark table-bordered">
<th>STUDENT ID</th>
<th>NAME</th>
<th>REGNO</th>
<th>DEPT</th>
<th>COURSE</th>
<th>EMAIL</th>


					 
 
					<?php while($row=mysqli_fetch_assoc($result))
					{?>
					
                    <tr>
					<form class="form-control" method="post">							
					<td class=""><input class="bg-dark text-white form-control input-sm" type="text" name="id" value="<?php echo $row["id"]; ?>" readonly></td>

					<td class=""><input  class="bg-dark text-white" type="text" name="name" value="<?php echo $row["name"]; ?>" readonly></td>
					<td class=""><input  class="bg-dark text-white form-control input-sm" type="text" name="username" value="<?php echo $row["regno"]; ?>" readonly></td>
                    <td class=""><input  class="bg-dark text-white form-control input-sm" type="text" name="username" value="<?php echo $row["dept"]; ?>" readonly></td>
                    <td class=""><input  class="bg-dark text-white form-control input-lg" type="text" name="username" value="<?php echo $row["course"]; ?>" readonly></td>
                    <td class=""><input  class="bg-dark text-white form-control input-sm" type="text" name="username" value="<?php echo $row["email"]; ?>" readonly></td>




					
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

	<!------------------remove admin by superuser----------------------->

<?php include_once('../controller/mycontroller.php');
include('../view/superuserbase.php');
$var2=new mycontroller();
$result=$var2->adminview();?>

<table class="table table-dark table-bordered">
<th>Admin id </th>
<th>Name</th>
<th>username</th>

					 
 
					<?php while($row=mysqli_fetch_assoc($result))
					{?>
					
                    <tr>
					<form class="form-control" method="post">							
					<td class=""><input class="bg-dark text-white" type="text" name="id" value="<?php echo $row["admin_id"]; ?>" readonly></td>

					<td class=""><input  class="bg-dark text-white" type="text" name="name" value="<?php echo $row["name"]; ?>" readonly></td>
					<td class=""><input  class="bg-dark text-white" type="text" name="username" value="<?php echo $row["username"]; ?>" readonly></td>
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
     $var->deleteadmin($id);
   
 }?>
	
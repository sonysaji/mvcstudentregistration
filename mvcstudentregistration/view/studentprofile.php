	<!------------------student profile page----------------------->

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
				<div class="container">
					<div class="row border ">
						<div class="col-md-6">
							<h3 class="text-primary head"><i class="fas fa-user fa-2x" ></i>MY PROFILE</h3>
							<div class="d-flex">
							
							</div>
						</div>
						
						
					
					<div class="col-md-12">
						<table class="border table table-striped bg-table">
							<tr>
							<th></th>
							<th class="text-right"><a href="../view/studentprofileedit.php"><button   class="btn btn-primary text-white px-4">Edit<i class="fas  fa-edit"></i></button></a>
							</th>
							</tr>
							
							
							<tr>
							<td class="font-weight-bolder">Name</td>
							<td><?php  echo  $row['name'] ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Reg.no</td>
							<td><?php  echo  $row['regno'] ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Dept</td>
							<td><?php  echo  $row['dept'] ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Course</td>
							<td><?php  echo  $row['course'] ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">email</td>
							<td><?php  echo  $row['email'] ?></td>
							</tr>
							
							<tr>
							<td class="font-weight-bolder">Username</td>
							<td><?php  echo  $row['username'] ?></td>
							</tr>
							
							
						</table>
					</div>
				</div>
			</section>
		
        <?php	}?>
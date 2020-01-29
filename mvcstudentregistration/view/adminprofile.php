	<!------------------profile page of admin----------------------->

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
							<th class="text-right"><a href="adminprofileedit.php"><button   class="btn btn-primary text-white px-4">Edit<i class="fas  fa-edit"></i></button></a>
							</th>
							</tr>

                            <tr>
							<td class="font-weight-bolder">Admin id</td>
							<td><?php  echo  $row['admin_id'] ?></td>
							</tr>
							
							
							<tr>
							<td class="font-weight-bolder">Name</td>
							<td><?php  echo  $row['name'] ?></td>
							</tr>
							
							
							<tr>
							<td class="font-weight-bolder">Username</td>
							<td><?php  echo  $row['username'] ?></td>
							</tr>
                            
							<tr>
							<td class="font-weight-bolder">Password</td>
							<td><?php  echo  $row['password'] ?></td>
							</tr>
							
							
							
						</table>
					</div>
				</div>
			</section>
		
        <?php	}?>
	<!------------------view timetable byadmin----------------------->

<?php 
session_start();
include('../view/studentbase.php');
require_once '../config/connection.php';
require_once '../model/mymodel.php';
$result=mysqli_query($conn,"SELECT * from student WHERE id='".$_SESSION["id"]."'");
while($row=mysqli_fetch_assoc($result))
        {
            $var=$row['year'];
            $var1=$row['dept'];
            }?>
<table class="table table-dark table-bordered">
<th>WEEK</th>
<th>HOUR 1</th>
<th>HOUR 2</th>
<th>HOUR 3</th>
<th>HOUR 4</th>
<th>HOUR 5</th>
<th>HOUR 6</th>
<?php $result1=mysqli_query($conn,"SELECT * from addtimetable1 WHERE year='".$var."'");
while($row=mysqli_fetch_assoc($result1))
{?>

 

                    <tr>
		            <td class=""><?php echo $row["week"]?></td>
                    <td class=""><?php echo $row["hour1"]?></td>
                    <td class=""><?php echo $row["hour2"]?></td>
                    <td class=""><?php echo $row["hour3"]?></td>
                    <td class=""><?php echo $row["hour4"]?></td>
                    <td class=""><?php echo $row["hour5"]?></td>
                    <td class=""><?php echo $row["hour6"]?></td>
                    </tr>
                    <?php }?>
             </table>							
		
						
 
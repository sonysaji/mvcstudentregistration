<?php
class mymodel
{
    function adminauthentication($user,$pass)
    {
        include('../config/connection.php');

        $result=mysqli_query($conn,"SELECT * from admin WHERE username='".$user."' and password='".$pass."'");
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
            session_start();
            $_SESSION["key"]=$row["admin_id"];
            header("location:../view/adminhome.php");
            }
        }
        else
        {
            echo "invalid";
        }
    }
    function superuserauthentication($user,$pass)
    {
        include('../config/connection.php');

        $result=mysqli_query($conn,"SELECT * from superuser WHERE username='".$user."' and password='".$pass."'");
        $count=mysqli_num_rows($result);
        if($count>0)
        {
            header("location:../view/superuserhome.php");
        }
        else
        {
            echo "invalid";
        }
    }
    function adminregistration($name,$user,$pass)
    {
        include('../config/connection.php');
        $sq="INSERT INTO admin(name,username,password) VALUES ('".$name."','".$user."','".$pass."')";
        if(!$result=$conn->query($sq))
        {
            die('Error['.$conn->error.']');
        }
        else
        {
          echo "successfull";     
        }
    }
    function viewadmin()
    {
    include('../config/connection.php');
    include_once('../controller/mycontroller.php');
    $sql="SELECT * FROM admin";
    $result=mysqli_query($conn,$sql);

    return $result;
    }
    function admindelete($id)
       
    {
        include('../config/connection.php');
        $sq="DELETE FROM admin where admin_id=$id" ;

        if(!$result=$conn->query($sq))
        {
            die('Error['.$conn->error.']');
        }
        else
        {
          echo "successfull";     
        }
    }
    function subjectadd($stream,$year,$semester,$subject,$credit,$coordinator)
    {
        include('../config/connection.php');
        $sq="INSERT INTO subjects(stream,year,semester,subject,credit,coordinator) VALUES ('".$stream."','".$year."','".$semester."','".$subject."','".$credit."','".$coordinator."')";
        if(!$result=$conn->query($sq))
        {
            die('Error['.$conn->error.']');
        }
        else
        {
          echo "successfull";     
        }
    }
    function viewsubject()
    {
    include('../config/connection.php');
    include_once('../controller/mycontroller.php');
    $sql="SELECT * FROM subjects";
    $result=mysqli_query($conn,$sql);

    return $result;
    }
    function subjectdelete($id)
    {
        include('../config/connection.php');
        $sq="DELETE FROM subjects where id=$id" ;

        if(!$result=$conn->query($sq))
        {
            die('Error['.$conn->error.']');
        }
        else
        {
          echo "successfull";     
        }
    }
    function timetableadd($stream,$year,$semester,$week,$hour1,$hour2,$hour3,$hour4,$hour5,$hour6)
    {
        include('../config/connection.php');
        $sq="INSERT INTO addtimetable1(stream,year,semester,week,hour1,hour2,hour3,hour4,hour5,hour6) VALUES ('".$stream."','".$year."','".$semester."','".$week."','".$hour1."','".$hour2."','".$hour3."','".$hour4."','".$hour5."','".$hour6."')";
        if(!$result=$conn->query($sq))
        {
            die('Error['.$conn->error.']');
        }
        else
        {
           // include_once("../controller/mycontroller.php");
            return "true";

        }
    }
    function studentregistration($name,$regno,$dept,$year,$course,$email,$user,$pass)
    {
        include('../config/connection.php');
        $sq="INSERT INTO student(name,regno,dept,year,course,email,username,password) VALUES ('".$name."','".$regno."','".$dept."','".$year."','".$course."','".$email."','".$user."','".$pass."')";
        if(!$result=$conn->query($sq))
        {
            die('Error['.$conn->error.']');
        }
        else
        {
          echo "successfull";     
        }
    }
    function viewstudent()
    {
    include('../config/connection.php');
    $sql="SELECT * FROM student";
    $result=mysqli_query($conn,$sql);

    return $result;
    }
    function studentdelete($id)
    {
        include('../config/connection.php');
        $sq="DELETE FROM student where id=$id" ;

        if(!$result=$conn->query($sq))
        {
            die('Error['.$conn->error.']');
        }
        else
        {
          echo "";     
        }
    }

function studentauthentication($user,$pass)
{
    include('../config/connection.php');

    $result=mysqli_query($conn,"SELECT * from student WHERE username='".$user."' and password='".$pass."'");
    $count=mysqli_num_rows($result);
    if($count>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
        session_start();
        $_SESSION["id"]=$row["id"];
        header("location:../view/studenthome.php");
        }
    }
    else
    {
        echo "invalid";
    }
}
function subjectstudent($id,$name,$stream,$year,$semester,$subject)
{
    include('../config/connection.php');
    $sq="INSERT INTO subject_select(s_id,name,stream,year,semester,subject) VALUES ('".$id."','".$name."','".$stream."','".$year."','".$semester."','".$subject."')";
    if(!$result=$conn->query($sq))
    {
        die('Error['.$conn->error.']');
    }
    else
    {
      echo "successfull";     
    }   
}
function updateadmin($id,$name,$user,$pass)
{
    include('../config/connection.php');
    $sq="UPDATE admin set name='".$name."',username='".$user."',password='".$pass."' where admin_id='".$id."'";
    if(!$result=$conn->query($sq))
    {
        die('Error['.$conn->error.']');
    }
    else
    {
      echo "successfull";     
    }
}
function updatestudent($id,$name,$regno,$dept,$year,$course,$email,$user,$pass)
{
    include('../config/connection.php');
    $sq="UPDATE student set name='".$name."',regno='".$regno."',dept='".$dept."',year='".$year."',course='".$course."',course='".$email."',username='".$user."',password='".$pass."' where id='".$id."'";
    if(!$result=$conn->query($sq))
    {
        die('Error['.$conn->error.']');
    }
    else
    {
      echo "successfull";     
    }
}
}
   

?>
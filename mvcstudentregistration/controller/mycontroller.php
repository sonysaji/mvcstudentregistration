	<!------------------controller----------------------->

<?php
class mycontroller
{
    function loadfirst()
    {
        header("location:view/home1.php");
    }
    function adminlogin($user,$pass)
    {   
        echo $user;
        include('../model/mymodel.php');
        $var=new mymodel();
        $var->adminauthentication($user,$pass);
       
    }
    function superuserlogin($user,$pass)
    {   
        echo $user;
        include('../model/mymodel.php');
        $var=new mymodel();
        $var->superuserauthentication($user,$pass);
       
    }
    function adminreg($name,$user,$pass)
    {   
        include('../model/mymodel.php');
        $var=new mymodel();
        $var->adminregistration($name,$user,$pass);

       
    }
    function adminview()
    {   
        include('../model/mymodel.php');
        
        $var=new mymodel();
        $result1=$var->viewadmin();
        return $result1;  
       
    }
   function deleteadmin($id)
   {
    include_once('../model/mymodel.php');
    $var=new mymodel();
    $var->admindelete($id); 
   }
   function addsubject($stream,$year,$semester,$subject,$credit,$coordinator)
   {
    include_once('../model/mymodel.php');
    $var=new mymodel();
    $var->subjectadd($stream,$year,$semester,$subject,$credit,$coordinator); 
   }
   function deletesubject($id)
   {
    include_once('../model/mymodel.php');
    $var=new mymodel();
    $var->subjectdelete($id); 
   }
   function subjectview()
    {   
        include('../model/mymodel.php');
        
        $var=new mymodel();
        $result1=$var->viewsubject();
        return $result1;  
       
    }
    function addtimetable($stream,$year,$semester,$week,$hour1,$hour2,$hour3,$hour4,$hour5,$hour6)
   
    {
        include_once('../model/mymodel.php');
        $var=new mymodel();
        $var1=$var->timetableadd($stream,$year,$semester,$week,$hour1,$hour2,$hour3,$hour4,$hour5,$hour6);
   
        if($var1=="true")
        {
          echo "success";
        }

         
    }
    function stureg($name,$regno,$dept,$year,$course,$email,$user,$pass)
    {   
        include('../model/mymodel.php');
        $var=new mymodel();
        $var->studentregistration($name,$regno,$dept,$year,$course,$email,$user,$pass);
       
    }
    function studentview()
    {   
        include('../model/mymodel.php');
        
        $var=new mymodel();
        $result1=$var->viewstudent();
        return $result1;  
       
    }
    function deletestudent($id)
    {
        include_once('../model/mymodel.php');
        $var=new mymodel();
        $var->studentdelete($id); 
    }
    function studentlogin($user,$pass)
    {   
        echo $user;
        include('../model/mymodel.php');
        $var=new mymodel();
        $var->studentauthentication($user,$pass);
       
    }
    function studentsubject($id,$name,$stream,$year,$semester,$subject)
    {
        $var=new mymodel();
        $var->subjectstudent($id,$name,$stream,$year,$semester,$subject);  
    }
    function adminupdate($id,$name,$user,$pass)
    {
        include_once('../model/mymodel.php');
        $var=new mymodel();
        $var->updateadmin($id,$name,$user,$pass);
    }
    function studentupdate($id,$name,$regno,$dept,$year,$course,$email,$user,$pass)
    {
        
        include_once('../model/mymodel.php');
        $var=new mymodel();
        $var->updatestudent($id,$name,$regno,$dept,$year,$course,$email,$user,$pass);
    }
}  
?>
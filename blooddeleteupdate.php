


<html>
<head>
 <link rel="stylesheet" type="text/css" href="CSS/cs.css" />
  <link rel="stylesheet" type="text/css" href="CSS/cs2.css" />
</head>
<body>
<div id="all">

                                                           <div id="header" ><?php include("Inventorypage.php");?></div>
                                                             <div id="main_container">
																									 <div id="left_content">
																									<?php
																									session_start();
             $id=$_POST['paw'];
            $pno=$_POST['pno'];
			$bgrp=$_POST['bgrp'];						
			
if(isset($_POST['update']))	{	
include('Db_Cconnection.php');
$sql="update abld set Reg_id='$id',pack_number='$pno',blood_group='$bgrp' where Reg_id ='$id';";
   $res=mysqli_query($con,$sql) or die("query error".mysqli_error());
   echo"you have update successfully";
}
   else
{
include('Db_Cconnection.php');
$sql="delete from abld
 where Reg_id ='$id';";
$res=mysqli_query($con,$sql) or die("query error".mysqli_error());
echo "successfully deleted";
}
mysqli_close($con);
?>
</div></div>

</div>
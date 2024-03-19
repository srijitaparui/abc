<?php
session_start();

$con=new mysqli('localhost','root','','Emp');

if($_SERVER['REQUEST_METHOD']=='POST')
{
    $empid=$_REQUEST['Employee_Id'];
    $name=$_REQUEST['Employee_name'];
    $designation=$_REQUEST['Designation'];
    $address=$_REQUEST['Address'];
    $phoneno=$_REQUEST['Phone_number'];
    $emailid=$_REQUEST['Email_id'];
        $sql="insert into employee values('".$empid."','".$name."','".$designation."','".$address."',".$phoneno.",'".$emailid."')";
        
        $b=mysqli_query($con,$sql);

       
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Employee Details</title>

</head>
<body>
    <center>
       
        <div id="main1">
        <h1>Employee's Form</h1>

        <form action="" method="post" onsubmit="myFun()">
            <label class="frm">Employee_Id</label><br>
            <input type="text" id="empid" name="Employee_Id" class="frm" pattern="E.+[0-9]" required placeholder="Employee_Id must be start with E" >
            <label>Employee_name</label>
            <input type="text" id="empname" name="Employee_name" class="frm"><br>
            <label>Designation</label>
            <input type="text" id="designation" name="Designation" class="frm"><br>
            <label>Address</label>
            <input type="text" id="address" name="Address" class="frm"><br>
            <label>Phone_number</label>
            <input type="text" id="phoneno" name="Phone_number" class="frm" pattern="[0-9]{10}" placeholder="please enter 10 digit mobile number"><br>
            <label>Email_Id</label>
            <input type="email" id="emailid" name="Email_id" class="frm" required ><br>
            <div id="main">
            <div class="btn" id="b1"><button id="button1">Save 
            </button>
        
        </div>
           <div class="btn" id="b2"> <button type="reset" id="button2">Clear</button></div>
            <a href="view.php"><div class="btn" id="b3">view<div></a></div>
           
</form>

</div>

    </center>
<script>
    function myFun(){
    
    alert("Your data is successfully saved");
}
</script>

</body>
</html>

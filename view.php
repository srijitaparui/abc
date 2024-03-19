<?php
session_start();

$con=new mysqli('localhost','root','','Emp');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <center>
        <div id="main2">
        <h1>Employee Details</h1>
<form action="search.php" method="post">
            <input type="text" name="search" placeholder="Search by Employee Id" required>
    <input type="submit" value="Search" >
    
</form>
<br><br>
<table cellspacing="0" cellpadding="10" border="2px">
    <tr>
        <td>Employee_Id</td>
        <td>Employee_name</td>
        <td>Designation</td>
        <td>Address</td>
        <td>Phone_number</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>

<?php
$sql="select * from employee";
$rs=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($rs))
{
?>

    <tr>
       <td><?php echo $row['Employee_Id']; ?></td>
        <td><?php echo $row['Employee_name'];?> </td>
       <td><?php echo $row['Designation'];?>  </td>
       <td><?php echo $row['Address'];?> </td>
       <td><?php echo $row['Phone_number'];?> </td>
      
       <td> <a href="edit.php? Employee_Id=<?php echo $row['Employee_Id'];?>" id="e">Edit</a></td>
       <td> <a href="delete.php ?Employee_Id=<?php echo $row['Employee_Id'];?>" id="d">Delete</a></td>
       
        </tr>  

        <?php 

}
?>
</table>
<br>
<a href="index.php"><div class="btn" id="b3">Back<div></a></div>
</div>
</center>
</body>
</html>

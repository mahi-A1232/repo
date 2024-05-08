<?php
$dbserverName="localhost";
$dbuserName="root";
$dbpassword="";
$dbName="phplessons";

$conn=mysqli_connect($dbserverName,$dbuserName,$dbpassword,$dbName);
$name=$_POST['name'];
$bloodgroup=$_POST['bloodgroup'];
$phno=$_POST['phno'];

echo $name."<br>";
echo $bloodgroup."<br>";
echo $phno ;
$sql="INSERT INTO detail(name,bloodgroup,phno) VALUE('$name','$bloodgroup',$phno);";
$result=mysqli_query($conn,$sql);
    
?>


<?php 
include("dbselect.php");
$name=$_REQUEST['nem'];
$year=$_REQUEST['yer'];

if($name != ""){
    $ins="INSERT INTO order(name) VALUES('$name')";
$a=mysqli_query($conn,$ins);


}

if($year!=""){
    $inss="INSERT INTO order(year) VALUES('$year')";
    $run=mysqli_query($conn,$inss);
}

?>
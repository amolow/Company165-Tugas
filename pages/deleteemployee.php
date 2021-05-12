<?php
require_once('./class/class.Employee.php');
if(isset($_GET['ssn'])){
$objEmployee = new Employee();
$objEmployee->ssn = $_GET['ssn'];
$objEmployee->DeleteEmployee();
echo "<script> alert('$objEmployee->message'); </script>";
echo "<script>window.location = 'index.php?p=employeelist'</scri
pt>";
}
else{
echo '<script>window.history.back()</script>';
}
?> 
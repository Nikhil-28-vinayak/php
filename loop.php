<?php
echo"<h2>XYZ Pvt Ltd - Salary Slip Generator</h2>";
echo "<hr>";
$basicSalary = 50000;
$hra = 10000;
$bonus = 5000;
for($empID = 1001; $empID<=1010;$empID++){
   $totalSalary = $basicSalary + $hra + $bonus;
    echo"<b>Employee ID :</b> EMP".$empID."<br>";
     echo"Basic Salary: $".$basicSalary."<br>";
     echo"HRA: $".$hra."<br>";
     echo"Bonus: $".$bonus."<br>";
     echo"Total Salary: $".$totalSalary."<br>";
}
?>
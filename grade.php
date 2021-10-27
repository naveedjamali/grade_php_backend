<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFTP Grades Calculator </title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
<div class="header">
    <div class="logo">
        <img src="./images/nftp-logo.png" alt="NFTP LOGO" width=80 height=80>
    </div>
    <h1 class="heading">Welcome to NFTP grade calculator</h1>
    </div>
<?php 

$percentage = $_GET['percentage'];
if($percentage == NULL){
    echo '<div class="card">
    <a class="back-button" href="./index.php">Click here to enter your grades</a>
    </div>';
}
elseif($percentage<0 || $percentage>100){
    echo '<div class="alert "> 
    <h3 class="error-msg">
    Invalid input:
    </h3>
    <p>
    Percentage cannot be less than <span class="bold">0</span> or greater than <span class="bold">100</span>
    </p>
    <a class="back-button" href="./index.php">Click here to re-enter percentage</a>
    </div>';
}
else{
    $grade = calculateGrade($percentage);
    echo "<div class=\"result\"><div class=\"grade-label\"> Your Grade is</div>
    <div class=\"grade-result\">$grade</div>
    <a class=\"back-button\" href=\"./index.php\">Calculate Again</a>
    </div>";


}

function calculateGrade($percentage){
    $grade = null;
    if($percentage>=90 && $percentage<=100)
    {
        $grade = "A+";
    }
    elseif($percentage>=80 && $percentage<=89.99)
    {
        $grade = "A";
    }
    elseif($percentage>=70 && $percentage<=79.99)
    {
        $grade = "B+";
    }
    elseif($percentage>=60 && $percentage<=69.99)
    {
        $grade = "B";
    }
    elseif($percentage>=50 && $percentage<=59.99)
    {
        $grade = "C+";
    }
    elseif($percentage>=45 && $percentage<=49.99)
    {
        $grade = "C";
    }
    elseif($percentage>=40 && $percentage<=44.99)
    {
        $grade = "D+";
    }
    elseif($percentage>=35 && $percentage<=39.99)
    {
        $grade = "D";
    }
    elseif($percentage>=33 && $percentage<=34.99)
    {
        $grade = "E";
    }
    elseif($percentage>=0 && $percentage<=32.99)
    {
        $grade = "F";
    }

    return $grade;
}

?>
</div>
</body>
</html>
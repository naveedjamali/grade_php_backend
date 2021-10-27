<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFTP Grade Calculator</title>
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
    
    <h3 class="heading form_label">Enter your percetage to calculate grade for you</h3>
    <div class="form">
        <form action="grade.php" method="GET">
            <label class="label" for="percentage">Enter your percentage below</label>
            <input type="number" name="percentage" id="percentage" class="input field" placeholder="Your percentage" required/>
            <input type="submit" class="button" value="Check Grade">
        </form>
    </div>
    </div>
</body>
</html>
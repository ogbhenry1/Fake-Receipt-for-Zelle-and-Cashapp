<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <title>Screenshoter | ZelleSS</title>
</head>
<body>
    <div class="zellehead">
        <center>
            <h1>Zelle</h1>
            <h2>Screenshot</h2>
        </center>
    </div>
    <div class="form">
        <form action="zellesend.php" method="post">
            <input type="text" name="f_name" style="float: left;width: 35%;margin-left: 25px;" placeholder="First Name">
            <input type="text" name="l_name" style="float: left;width: 35%;margin-left:15px;margin-bottom: 20px;" placeholder="Last Name">
            <input type="email" name="email" placeholder="Email Address"><br>
            <input type="number" name="amount" placeholder="Amount"><br>
            <input type="text" name="item" placeholder="Item"><br><br>
            <center>
               
                <button class="btn"> PROCEED </button><br><br>
            </center>
        </form>
    </div>
</body>
</html>
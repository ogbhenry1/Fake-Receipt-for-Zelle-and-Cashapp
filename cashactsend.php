<?php 
$name= $_POST['name'];
$pend = $_POST['pend'];
$email= $_POST['email'];
$amount = $_POST['amount'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Checker</title>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.3.4/html2canvas.min.js"></script>
    <script>
    function capture () {
      html2canvas(document.getElementById('photo')).then((canvas) => {
        let a = document.createElement("a");
        a.download = "activity.png";
        a.href = canvas.toDataURL("image/png");
        a.click(); 
      });
    }
    </script>
    <style>
        body{
            background: url(../img/bg.jpg);
            width:100%;
            height:100%;
            font-weight: bold;
            font-family: arial, sans-serif;


        }
        
		.form{
		
                margin-left:30%;
				width:30%;
                background: #fff;
				height:100vh;
                height: 100%;
				}
        .btn{
            width: 88%;
            height: 50px;
            background: #fff;
            border-radius: 5px;
            text-align: center;
            border: none;
            font-weight: bold;
            color: #0272b6;
            font-size: 20px;
            margin-top: 20%;
        }
    
        @media only screen and (max-width:680px)  {
		.form{
                margin-left:0%;
				width:100%;
                background: #fff;
				height:100vh;
				}
        }
        .btn{
            width: 88%;
            height: 50px;
            background: #fff;
            border-radius: 5px;
            text-align: center;
            border: none;
            font-weight: bold;
            color: #0272b6;
            font-size: 20px;
        }
    
    </style>
   
</head>
<body >
     <button class="btn2" value="Capture" onclick="capture()">
        Take Screenshot
    </button>
   <div class="form" id="photo"> 
   <div style="width:100%;height:50px;background-color:#fff;color: #274493;border-bottom: 1px solid ;">
           <br>Done 
       </div>
       <div style="width:100%;height:50px;background-color:#fff;color: #000;">
        <br><center>Activity</center>
        </div>
        <div style="width:100%;height:50px;background-color:#fff;color: #274493;">
            <br><span style="border-bottom: 2px solid ;padding-left: 15%;padding-right: 15%;padding-bottom: 2%;"> Payment</span>
            
            <span style="padding-left: 15%;padding-right: 10%;"> Request</span>
        </div>


        <div style="width:100%;height:30px;background-color:#f2f2f2;color: #000;">
            <span >Pending(<?php echo $pend ?>)</span><br><br>
            
        <div>
            <center>
                <img src="gg.png" style="height:40px;"><br>
                <span >You have (<?php echo $pend ?>
                    ) Pending transactions now</span><br><br>
            </center>
            <div style="width:100%;height:50px;background-color:#f2f2f2;color: #000;">
              <br>  <span >History Completed(1)</span>
                
            <div>

        </div>
        <div style="width:100%;height:50px;background-color:#fff;color: #274493;">
            <br><span><img src="yg.png" style="height:50px;"></span>
            <p style="margin-top: -41px;padding-left: 15%;"><?php echo $name ?> <span style="padding-left: 40%;">($<?php echo $amount ?>)</span><br> 
            <span style="padding-left: %;"></span>Payment delivered</span></p>
        </div>
	</div>	
</body>
</html>
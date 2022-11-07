<?php 
$l_name= $_POST['l_name'];
$f_name = $_POST['f_name'];
$email= $_POST['email'];
$amount = $_POST['amount'];
$item= $_POST['item'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Checker</title>
    <style>
        body{
            background: #fff;
            width:100%;
            height:100vh;
            font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            color: #808080;
            
        }
        
		.form{
		
                margin-left:30%;
				width:30%;
                background: #f2f2f2;
				height:100vh;
                height: 100%;
                
		}
        
    
        @media only screen and (max-width:680px)  {
		.form{
                margin-left:-10px;
                margin-top:-10px ;
                margin-right:-10px;
				width:100%;
                background: #fff;
				height:100vh;
				
				}
        }
        .sent{
            font-size: 25px;
        }
        .circle{
            width: 100px;
            height:100px;
            border-radius:50%;
            background-color:#808080;
            color:#000;
            
        }
        span{
            text-transform: uppercase;
        }
        .text{
            PADDING-bottom: 130px;
        }
        .btn{
            width:85%;
            height:45px;
            border-radius: 5px;
            border: none;
            background-color: #0272b6;
            color: #fff;
            font-size: 15px;
            font-weight: bold;
        }
        .div {
            width: 30px;
            height: 3px;
            background-color: white;
            margin: 6px 0;
            }
       
    </style>
   
</head>
<body >
   <div class="form"> 
   
       <div style="width:100%;height:70px;background-color:#0272b6;color: #fff;">
           <center>
               <div style="padding: 35px;">
                <span style="float: left;margin-top: -8px;">
                    <div class="div"></div>
                    <div class="div"></div>
                    <div class="div"></div>
                </span>
                <b>PAYMENT SENT</b>
                </div>
            </center>
       </div>
       <center>
           <div>
               <p class="sent">Sent $<?php echo $amount ?>.00</p>
           </div>
            <div class="circle">
                <p style="font-size:200%;padding-top: 30px;margin-top: -10px;font-weight: 100px;"><?php echo $f_name[0];?><?php echo $l_name[0];?></p>
            </div>
            <br>
            <div style="padding: 20px;">
                to <span><?php echo $f_name ?> <?php echo $l_name ?></span><br><i><?php echo $email ?></i>
            </div>
            <br>
            <div class="text">
                <p>The money will be available in <?php echo $f_name ?>'s Account shortly, typically in minutes</p>
            </div>
            <div>
                <p>Memo: For <?php echo $item ?> </p>
                <div>Confirmation:USAA23z34AE3</div>
                <br>
                <button class="btn">ALL DONE</button>
            </div>


       </center>
	</div>


</body>
</html>



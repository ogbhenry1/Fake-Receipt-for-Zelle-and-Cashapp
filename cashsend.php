<?php 
$s_name= $_POST['s_name'];
$name = $_POST['name'];
$tag= $_POST['tag'];
$amount = $_POST['amount'];

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
            background: url(../img/bg.jpg);
            width:100%;
            height:100vh;
            color:rgb(56, 56, 56);
            font-family: arial, sans-serif;


        }
        
		.form{
		
                margin-left:30%;
				width:30%;
                background: #fff;
				height:100vh;
                height: 100%;
				}
      
    
        @media only screen and (max-width:680px)  {
		.form{
                margin-left:0px;
				width:100%;
                background: #fff;
				height:100vh;
				}
        }
        .btn{
            width: 88%;
            height: 50px;
            background: #BE20F6;
            border-radius: 25px;
            text-align: center;
            border: none;
            color: white;
            font-size: 20px;
        }
        .btn2{
            width: 88%;
            height: 50px;
            background: #fff;
            border-radius: 25px;
            text-align: center;
            border: #808080 solid 1px;
            color: rgb(32, 31, 31);
            font-size: 20px;
        }
        .circle{
            width: 100px;
            height:100px;
            border-radius:50%;
            background-color:#BE20F6;
            color:#fff;
            
        }

    
    </style>
   
</head>
<body >
   <div class="form" id="photo"> 
  <br /> 
		  <center>
            <br>
            <div class="circle">
                <p style="font-size:200%;padding-top: 30px;margin-top: -10px;font-weight: 100px;"><?php echo $name[0];?></p>
            </div>
                  <br />



                <h3><?php echo $name;?></h3>
                <div style="color: #808080;">Payment to $<?php echo $tag;?></div>
                 <br><br>
                 <h1 style="font-size:410%;">$<?php echo $amount;?>.00</h1>
                 <p style="margin-top: -40px;color: #808080;">From <?php echo $s_name;?></p>
                 <p style="color: #808080;"> <?php date_default_timezone_set('EST');
                 echo date("D, d M Y H:i a");?></p>
                   
                           
                
       <br /> <br><br><br><br><br>
       <button class="btn">Completed</button><br><br>
       <button class="btn2">Web Receipt</button>
    </center></div>
    </div>
      </form>
	</div>	
</body>
</html>
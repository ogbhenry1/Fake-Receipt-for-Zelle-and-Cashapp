<?php 
$name= $_POST['name'];
$amount = $_POST['amount'];
$balance= $_POST['balance'];
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
            background: #fff;
            width:100%;
            margin-right:-400px;
            height:auto;
            font-family:Arial, Helvetica, sans-serif;
            color: rgb(32, 31, 31);
            
        }
        
		.form{
		
                margin-left:30%;
				width:30%;
                background: #f2f2f2;
                height:auto;                
		}
        
    
        @media only screen and (max-width:680px)  {
		.form{
                margin-left:-10px;
                margin-top:-10px ;
                margin-right:-20px;
				width:100%;
                background: #dddcdc;
                height:auto;				
				}
        }
        
      
        .div {
            width: 30px;
            height: 3px;
            background-color: white;
            margin: 6px 0;
            }
        .acc{
            margin: auto;
            width: 90%;
            height: 35px;
            background-color: #fff;
            border-radius: 10px;
            padding-top: 15px;

           
        }
        .transact{
            margin: auto;
            width: 90%;
            height: auto;
            background-color: #fff;
            border-radius: 10px;
            padding-top: 15px; 
        }
        .complete{
            margin: 30px;
            font-size: 15px;
        }
        .status{
            font-size: 12px;
            color: #808080;
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
                     <b>ACTIVITY</b>
                </div>
            </center>
       </div>
       <div>
           <center>
               <p style="font-size: 200%;"><b>$<?php echo $balance ?>.00</b></p>
               <p style="font-size: 15px;margin-top: -25px;color: #808080;">Available balance</p>
           </center>
       </div>
       <br>
       <div class="acc">
        <span style="margin: 30px;color: #353333;">Account & Routing #</span>
       </div>
       <br><br>
       <div class="transact">
           <br>
        <span style="margin: 30px;color: #808080;font-size: 15px;">RECENT TRANSCATIONS</span>
        <div class="complete">
            <span class="status">Completed</span><br>
            <div>
            <span style="float: left; width: 60%;">Zelle Transfer to <?php echo $name ?></span>
            <span style="float:right;">$<?php echo $amount ?></span>
           </div>
           <br>
    
        </div>
         <div style="width: 84%;height: 2px;background-color: #808080;margin: auto;"></div>
         <div class="complete">
            <span class="status">Completed</span><br>
            <div>
            <span style="float: left; width: 60%;">Zelle Transfer to <?php echo $name ?></span>
            <span style="float:right;">$<?php echo $amount ?></span>
           </div>
           <br>
    
        </div>
         <div style="width: 84%;height: 2px;background-color: #808080;margin: auto;"></div>
         <div class="complete">
            <span class="status">Completed</span><br>
            <div>
            <span style="float: left; width: 60%;"> Transfer to Pablo Cabrera</span>
            <span style="float:right;">$700</span>
            <br><br><br>
           </div>
           <br>
    
        </div>
         
       </div><br> <br><br>
	</div>




</body>
</html>



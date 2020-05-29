<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

     <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

     <!-----bootstrap link below-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!---end bootstrap link----->

       <!------font awesome link-->
       <script src="https://kit.fontawesome.com/6c3c091f37.js" crossorigin="anonymous"></script>
    <!------end font awesome link-->
     
    
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Compounded Data</title>
</head>
<body>


<div align="center" class="bottom_Buttons pt-5 pb-5">

       <button class="btn btn-default btn-success" type="button" onclick="printJS('investment_table', 'html')">Print Table</button>
       <button class="btn btn-default btn-success" onClick="previousPage();">Enter New Data</button>
</div>




<?php

$principal = htmlspecialchars($_POST['principal'], ENT_QUOTES, 'UTF-8');

$display_Principal = $principal; //use this one for display and the main one for math maniplulation 

$rate = htmlspecialchars($_POST['rate'] / 100, ENT_QUOTES, 'UTF-8');

$term = htmlspecialchars($_POST['term'], ENT_QUOTES, 'UTF-8');

$months = $term * 12; //converts raw term to months

$monthly_Balance = $principal;

$monthly_Interest = 0;

$rate_Converted_Decimal = $rate;

$monthly_Interest_Rate = $rate_Converted_Decimal / 12;



?>








<div class="col-sm-12 px-sm-5">

<table class="table table-striped" border="1" id="investment_table" align="center">
    
     <tr>
        <th>Investment Earnings Overview</th>
         <th>Creator: Arthur Holmes</th>
         <th bgcolor="#000000"></th>
    </tr>
    
    <tr>
    <td>Principal Amount:</td>
    <td  colspan="2"><?php echo "$" . $display_Principal ?></td>
    
    </tr>
    
    
    
    <tr>
        
    <td>Term:</td>
    <td colspan="2"><?php echo (round($months)); echo(" (In Months)"); ?></td>   
        
    </tr>
    
    
    <tr>
        
    <td>Annual Interest Rate:</td>
    <td colspan="2"><?php echo($rate . "%"); echo(" (As Decimal)"); ?></td>   
        
    </tr>
    
    
    
    
    
    <tr>
        
    <td colspan="3"><strong>Earnings History</strong></td>
    
    </tr>
    
    <tr>
        
        <td><i>Month</i></td>
        <td><i>Monthly Interest Earned</i></td>
        <td><i>Current Balance</i></td>
        
        
    </tr>
 
         
         
         <?php
         
           
         $display_Months = 1;
       
         
         for($i = 0; $i < floor($months); $i++){
            
         $monthly_Interest = ($monthly_Balance * $monthly_Interest_Rate);
    
         $monthly_Balance = $monthly_Balance +  $monthly_Interest;
    
         echo("<tr>");
            
        
         echo("<td>$display_Months</td>");
         printf("<td>%0.2f</td>", $monthly_Interest );
         printf("<td>%0.2f</td>", $monthly_Balance);
         
    
    
    
    
    
    
    
    
            
         ++$display_Months;  
         }
    
         echo("</tr>");
         
         ?>
         
         
         
         
         
         
         
         
         
         
         
    <tr>
        
        <td><strong>Investment's Value At End of Term</strong></td>
        <td bgcolor="#000000"></td>
        <td bgcolor="#000000"></td>
                      
                      
                      
    </tr> 
         
    <tr>
        
      <?php
     
    printf("<td>%0.2f</td>", $monthly_Balance);
    
    ?>
    </tr>
         
         
  
         
         
</table>

</div>



<div align="center" class="bottom_Buttons pb-5 pt-5">

       <button class="btn btn-default btn-success" type="button" onclick="printJS('investment_table', 'html')">Print Table</button>
       <button class="btn btn-default btn-success" onClick="previousPage();">Enter New Data</button>


</div>










<!-----full jquery-->
<!------source: http://code.jquery.com/-->

<script
  src="http://code.jquery.com/jquery-3.4.1.min.js"
  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
  crossorigin="anonymous"></script>

    <!----end-->



<!-----------popper.js and bootstrap.js cdns-->
<!-------source: https://getbootstrap.com/docs/4.4/getting-started/introduction/ -->



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


<script src="sanitize.js"></script>

<!------end js libaries-->


</body>
</html>
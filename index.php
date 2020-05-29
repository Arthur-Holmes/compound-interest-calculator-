<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!------font awesome link-->
    <script src="https://kit.fontawesome.com/6c3c091f37.js" crossorigin="anonymous"></script>
    <!------end font awesome link-->

    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
    <!----------js to allow user to prink interest break down-->


    <!-----bootstrap link below-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <!---end bootstrap link----->

    <title>Interest Calc</title>
</head>
<body>
<div class="container pb-5">
<div id="spacer" class="row"></div> <!-----pushes the content down the page by 75px---->


<div class="row">
<div class="col-sm-2 bg"><p></p></div> <!----far left div--->

<!------------------body of app------------------------>


<div class="col-sm-8"> <!------------body--->


<div class="d-flex flex-column">


<div><!----explaination of app----->

<h1>Compound Interest Calculator</h1>

<p>Determine how much your money can grow using the power of compound interest. Compound interest is the interest you earn on interest. This can be illustrated by using basic math: if you have $100 and it earns 5% interest each year, you'll have $105 at the end of the first year.</p>
    
<p>At the end of the second year, you'll have $110.25. Not only did you earn $5 on the initial $100 deposit, you also earned $0.25 on the $5 in interest. While 25 cents may not sound like much at first, it adds up over time. Even if you never add another dime to that account, in 10 years you'll have more than $162 thanks to the power of compound interest, and in 25 years you'll have almost $340</p>

<h6 class="font-weight-bold"><span style="color:red ">*</span> DENOTES A REQUIRED FIELD</h6>
</div> <!------end explaination------>



<div class="steps_bg"><h5 class="steps">Step 1: Initial Investment</h5></div><!----title--------->

<div class="field_bg"> <!----makes the background a color for step 1------>
<div class="row"> <!----------starts the initial investment row----->
<form action="data_table.php" method="post" onSubmit="return verifyFields();">





<div class="form-group">

<div class="col">
<div><p class="field_text">Principal Investment<span style="color:red "> *</span><p class="field_text">Amount of money that you have available to invest initially.</p></div>
</div>

<div class="col">

<div class="input-group"> <!--------->


<div class="input-group-prepend">

<span class="input-group-text">$</span>

</div>

<input type="text" class="form-control" placeholder="Example: 10000.36" id="principal" name="principal" onclick="resetWarning();"> <!-------initial investment field---->


 


</div>

<div id="error_text_principal"></div> 
<div id="error_text_principal2"></div> 

</div>



</div> <!-----ends step 1 section--->




</div> <!-----end color bg for step 1---->
</div> <!----------end first form group---->


</div><!-------------dont know what this ends--->





<!------------row 2---------------------------------------------------------------------------------->



<div class="steps_bg"><h5 class="steps">Step 2 : Interest Rate</h5></div> <!----title------->

<div class="field_bg"> <!----makes the background a color for step 1------>
<div class="row">

<div class="form-group">

<div class="col"><p class="field_text">Estimated Interest Rate<span style="color:red "> *</span><p class="field_text">Your estimated annual interest rate.</p></div>


<div class="col">
    
<div class="input-group"> <!--------->







<input class="form-control" type="text" placeholder="Example: 5.6 (Percent)" id="rate" name="rate" onclick="resetWarning();"><div class="input-group-append">

<span class="input-group-text">%</span>






</div><!-------initial investment field---->



</div>

<div id="error_text_rate"></div> 
<div id="error_text_rate2"></div> 

</div>




</div>

</div>


</div> <!-----end color bg for step 1---->









<!------------row 3----------------------------------------------------------------------------------->



<div class="steps_bg"><h5 class="steps">Step 3 : Length of Time in Years or Months</h5></div> <!----title------->

<div class="field_bg"> <!----makes the background a color for step 1------>
<div class="row">

<div class="form-group">

<div class="col"><p class="field_text">Investment Lifetime<span style="color:red "> *</span><p class="field_text">Length of time, in years or months, that you plan to invest. </p></div>


<div class="col">
    

<select class="form-control" id="term" name="term">
  
  <option value="0.092333">1 Month</option>
  <option value="0.184666">2 Months</option>
  <option value="0.2555">3 Months</option>
  <option value="0.333999">4 Months</option>
  <option value="0.426332">5 Months</option>
  <option value="0.5">6 Months</option>
  <option value="0.592333">7 Months</option>
  <option value="0.684666">8 Months</option>
  <option value="0.7555">9 Months</option>
  <option value="0.852664">10 Months</option>
  <option value="0.944997">11 Months</option>
  <option value="1.0">1 Year</option>
  <option value="2.0">2 Years</option>
  <option value="3.0">3 Years</option>
  <option value="4.0">4 Years</option>
  <option value="5.0">5 Years</option>
  <option value="6.0">6 Years</option>
  <option value="7.0">7 Years</option>
  <option value="8.0">8 Years</option>
  <option value="9.0">9 Years</option>
  <option value="10.0" selected>10 Years</option>
  <option value="11.0">11 Years</option>
  <option value="12.0">12 Years</option>
  <option value="13.0">13 Years</option>
  <option value="14.0">14 Years</option>
  <option value="15.0">15 Years</option>
  <option value="16.0">16 Years</option>
  <option value="17.0">17 Years</option>
  <option value="18.0">18 Years</option>
  <option value="19.0">19 Years</option>
  <option value="20.0">20 Years</option>
  <option value="21.0">21 Years</option>
  <option value="22.0">22 Years</option>
  <option value="23.0">23 Years</option>
  <option value="24.0">24 Years</option>
  <option value="25.0">25 Years</option>
  <option value="26.0">26 Years</option>
  <option value="27.0">27 Years</option>
  <option value="28.0">28 Years</option>
  <option value="29.0">29 Years</option>
  <option value="30.0">30 Years</option>

</select> 




</div> <!-------initial investment field---->

</div>

</div>


</div> <!-----end color bg for step 1---->





<!------------row 4----------------------------------------------------------------------------------->



<div class="steps_bg">


<div class="d-flex flex-row-reverse pb-5">
<p id="warn" style="color:red;"></p> 
  <div class="p-2"><input class="btn btn-default btn-success" type="Submit" value="Calculate Data"></div>


  <div class="p-2"><button class="btn btn-default btn-danger" id="clearForm" onClick="resetMe();">Reset Form</button></div>

</div>



</div> <!----title------->












</form>

</div> <!----end middle body---->



<!-----end body of app---------------------------------->

<div class="col-sm-2"><p></p></div> <!----far right div--->
</div>
</div>

<p align="center">Arthur Holmes | info@arthurholmes.com
</p>

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
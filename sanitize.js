
  


var fieldDefault1 = document.getElementById("principal");
  
var fieldDefault2 = fieldDefault1.defaultValue;  
 
var clearButton = document.getElementById("clearForm");


  
  
  
function warning(){
  
  document.getElementById("error_text_rate").innerHTML = "<p style='color: red; font-weight: 700'>Numbers and 1 decimal only! Example 12.67 (Rate Must be Below 100%</p><p style='color: red; font-weight: 700'>No Special Charcaters Allowed (, $ ! @ # % ^)</p>";
  

  document.getElementById("error_text_principal").innerHTML = "<p style='color: red; font-weight: 700'>Numbers and 1 decimal only! Example 55000.00</p><p style='color: red; font-weight: 700'>No Special Charcaters Allowed (, $ ! @ # % ^)</p>";
}



function blank_warning(){

  document.getElementById("error_text_rate2").innerHTML = "<p style='color: red; font-weight: 700'>Field Cannot Be Left Blank</p>";

  document.getElementById("error_text_principal2").innerHTML = "<p style='color: red; font-weight: 700'>Field Cannot Be Left Blank</p>";



}





function verifyFields() {
  
   
var rate = document.getElementById("rate").value;  
  
var term = document.getElementById("term").value;

var principal = document.getElementById("principal").value;
  
var searchPattern1 = /[^0-9.]/g; //looks for everything but numbers between 0 and 9 and the period. Used to specify a nonmatching list where you are trying to match any character except for the ones in the list.
  
var searchPattern2 = /\s/g;  //looks for spaces
  
  
//-------------------------------->
  
var checkPrincipal1 = principal.search(searchPattern1); //checks for illegal variables 
  
var checkPrincipal2 = principal.search(searchPattern2); //checks for whitespaces  
  
//-------------------------------->  
  
var checkRate1 = rate.search(searchPattern1);
  
var checkRate2 = rate.search(searchPattern2);
  
//-------------------------------->  
  
var checkTerm1 = term.search(searchPattern1);  
  
var checkTerm2 = term.search(searchPattern2);

//------------------------------------>

//code below counts the numer of times a decimal was found in each field, non should be higher than 1

var principal_deci_count = principal.match(/[.]/g);

var rate_deci_count = rate.match(/[.]/g);

var numbOfDecimals; //stores the number of periods (decimals) should only be 1 per field and none for length of time



/* ------note-------


The search() method searches a string for a specified value, and returns the position of the match.

The search value can be string or a regular expression.

This method returns -1 if no match is found.*/

  
  
 //the expression below may seem confusing but it looks for any chaacter that is NOT 0 - 9 or a period.  
  
if(checkPrincipal1 !== -1 || checkPrincipal2 !== -1){

  warning();
 
  return false;}  
  
  
  
  
if(checkRate1 !== -1 || checkRate2 !== -1){
  
  warning();
  
  return false;}
  

  
  
if(checkTerm1 !== -1 || checkTerm2 !== -1){
  
  warning();
  
  return false;}

  

if (rate > 99.9){


  warning();
  
  return false;}

  



if (principal === "") {

  blank_warning();
    
  return false;}




if (rate === "") {

  blank_warning();  
  return false;}


if (principal_deci_count.length > 1 ||  rate_deci_count.length > 1) {

  warning();
  
  return false;}

}



  

function resetMe() {
 
document.getElementById("error_text_principal").innerHTML = "";

document.getElementById("error_text_principal2").innerHTML = "";
  
document.getElementById("principal").value = fieldDefault2;
  
document.getElementById("rate").value = fieldDefault2;
  
//document.getElementById("term").value = fieldDefault2;

document.getElementById("error_text_rate").innerHTML = "";

document.getElementById("error_text_rate2").innerHTML = "";
  
document.getElementById("warn").innerHTML = "";



  
}
  
  

  
function resetWarning() {

document.getElementById("warn").innerHTML = "";

document.getElementById("error_text_principal2").innerHTML = "";

document.getElementById("error_text_rate2").innerHTML = "";
  
}

  

function previousPage(){


        
    window.location = "index.php";


    
}



  
  
  
  
  
  
  
  
  
  
  
  
  
  

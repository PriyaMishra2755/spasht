<html>
<head>
<title>House Finder</title>
<script type="text/javascript">
function validateNumber(value){
if(!isNumber(value))
alert("Please enter a number.");
}
function validateZIPCode(value){
if(!isZIPCode(value))
alert("Please enter a ZIPCode in the form XXXXX.")
}
function calcprice(){
var maxprice=document.getElementById("income").value *4;
alert("You can afford a house that costs up to $" + maxprice +".");
}
function findhouse(form){
var bedrooms=document.getElementById("bedrooms").value;
var zipcode=document.getElementById("zip").value;
form.submit();
}
</script>
</head>
<body>
<div id="frame">
<div id="header">Ready to find a new house?</div>
<div id="left">
<img src="4.png" alt="House" />
</div>
<form name="orderform" action="" method="POST">
<div class="field">Enter your annual income:
<input id="income" type="text" size="12" onblur="validateNumber(this.value)"/></div>
<div class="field">Enter the number of bedrooms:
<input id="bedrooms" type="text" size="6" onblur="validateNumber(this.value)"/></div>
<div class="field">Enter your zip code:
<input id="zip" type="text" size="10" onblur="validateZIPCode(this.value)"/></div>
<input type="button" value="Calculate price" onclick="calcprice();"/>
<input type="button" value="Shop for Houses" onclick="findhouse(this.form);"/>
</form>
</div>
</body>
</html>
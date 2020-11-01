<html>
<body>
<title>Marwari College Ranchi</title>
<form>

<style type="text/css">
.heading{
height:100px;
width:650px;
margin-left:0px;
position:relative;
}
.hname1{
margin-left:154px;
position:absolute;
top:00px;
bottom:20px;
left:110px;
color:blue
}
.hname2{
position:absolute;
top:30;
left:200px;
color:green;
}          	
.address{
height:100px;
width:700px;
position:absolute;
left:800px;
top:0px
}
.last{
background-color:yellow
}
</style>

<section class="heading">
<img src="m1.jpg"height="100px"width="150px">
<h2 class="hname1">Marwari college Ranchi</h2>
<h5 class="hname2">(NAAC Accredited Autonomous College With Potential For Excellence Under Ranchi University)</h5>
</section>

<section class="address">
<h1>website:www.marwaricollegeranchi.com</h1>
<h1>email:marwaricollegeranchi@gmail.com</h1>
</section>

<section class="last">
<marquee><h2>Last date of submission is 30th march 2020</h2></marquee> 
</section>
<form>

<?php
if(isset($_REQUEST["xx"]))
{
$a1=$_REQUEST["p1"];
$a2=$_REQUEST["p2"];
$a3=$_REQUEST["p3"];
$a4=$_REQUEST["p4"];
$a5=$_REQUEST["p5"];
$a6=$_REQUEST["p6"];
$a7=$_REQUEST["p7"];
$a8=$_REQUEST["p8"];
$a9=$_REQUEST["p9"];
$a10=$_REQUEST["p10"];
$conn=mysqli_connect("127.0.0.1","root","");
mysqli_select_db($conn,"mydb");

mysqli_query($conn,"insert into info3 values('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')");

echo"You Are Registered";
}
?>


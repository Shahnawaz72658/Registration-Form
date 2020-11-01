<html>
<body>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


<title>Marwari College Ranchi</title>

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
color:Blue
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

ul{
list-style:none;
}
li{
float:left;
padding-left:200px
}
.imageslider{
width:40%;
position:absolute;
left:0px;
top:200px;
}

.news{
height:200px;
width:40%;
position:absolute;
right:00px;
top:250px;
overflow-y:scroll;
overflow-x:hidden;
}

.news::-webkit-scrollbar{
display:none;
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
<center><h2>Welcome</h2></center> 
</section>


<?php
$conn=mysql_connect("127.0.0.1","root","");
mysql_select_db("project",$conn);
$a1=$_REQUEST["p1"];
$a2=$_REQUEST["p2"];
$res=mysql_query("select * from info where name='$a1' and dob='$a2'");
if(($rows=mysql_fetch_array($res)))
{
echo"Welcome:".$rows[0]."<br>";
?>
<img src='<?php echo$rows[5]; ?>' height="120" width="100"><br>
<?php
echo$rows[1]."<br>";
echo$rows[2]."<br>";
echo$rows[3]."<br>";
echo$rows[4]."<br>";
echo$rows[6]."<br>";
echo$rows[7]."<br>";
echo$rows[8]."<br>";
echo$rows[9]."<br>";


}
else
echo"Invalid Login!!!";
?>
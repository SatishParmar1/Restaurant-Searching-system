<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "";
$database = "citys";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
   // echo "Connection was successful<br>";
}

?>
 <html>
<head>
<title> Option for Jaipur</title>
</head>
<body>
<style>
.hea{
background-color: #557A95;
height : 7% ;
border-radius: 5px;
margin-left:1%;
margin-right :1%;
}

.img1{
height: 90%;
float:left;
margin-top: 0.2%;
margin-left:5%;
width:50px;
}
.name:hover{

}
.name{
font-family: 'Lucida Console', 'Courier New', monospace;
float: left;
background-color :white;
border: 1px solid gray;
height :90%;
width: 20%;
margin-top:0.2%;
margin-left:3%;
border-radius:40px;
text-align: center;
line-height: 0%;
cursor:pointer;
overflow:hidden;
}
.search:hover{
background:#D9DDDC;
border:2px solid white;
font-size:110%;
}
.search{
width: 15%;
height: 30px;
background-color: white;
border-radius: 5px;
border: 1px solid gray;
text-align: center;
line-height: 0px;
cursor:pointer;
float : right;
margin-right: 5%;
margin-top:10px;
}

.box1:hover{
background:#7395AE;
color:black;
}
.box1{
background-color: #557A95;
border: 1px white;
height: 40%;
width: 48%;
margin-top: 2%;
margin-left: 1%;
border-radius: 5px;
float :left;
border-color:green;
}

.box2:hover{
background:#7395AE;
color:black;
}
.box2{
background-color: #557A95;
border: 1px white;
height: 40%;
width: 48%;
margin-top: 2%;
margin-right: 1%;
border-radius: 5px;
float :right;
}
.inbox1{
position :block;
background-color: white;
border: 1px white;
height: 75%;
width: 82%;
margin-top:5%;
margin-left:8%;
padding-left: 1%;
padding-right: 1%;
padding-bottom: 1%;
border-radius: 5px;
float :left;
border-color:white;
}
.inbox2{
position :block;
background-color: white;
border: 1px white;
height: 75%;
width: 82%;
margin-top:5%;
margin-left:8%;
padding-left: 1%;
padding-right: 1%;
padding-bottom: 1%;
border-radius: 5px;
float :left;
}
a{
text-decoration:none;
}
.map:hover{
background:#B1A296;
color:black;
}
.map {
position :absolute;
float :right;
height : 10%;
width: 5%;
margin-top: 2.5%;
margin-left: 33.5%;
background-color: #557A95;
border: 1px white;
border-radius: 5px;
font-size : 20;
cursor: pointer;
}


.last{
background-color: #1D1D1D;
border: 1px white;
height: 10%;
width:98%;
margin-top: 1%;
margin-left: 1%;
margin-bottop: 1%;
margin-right: 1%;
border-radius: 5px;
float :left;
color:white;
}

@media screen and (max-width: 900px) {
 .name{
  font-size:50%;
height:70%;
margin-top:1.5%;
}
@media screen and (max-width: 900px) {
 .search{
  font-size:100%;
  margin-top:2%;
width: 20%;
}
@media screen and (max-width: 900px) {
 .name{
font-size:60%;
}
@media screen and (max-width: 900px) {
 .box1{
width:100%;
margin-left:0%;
overflow:hidden;
}
@media screen and (max-width: 900px) {
 .box2{
width:100%;
margin-right:0%;
overflow:hidden;
}

@media screen and (max-width: 900px) {
 .map{
font-size:80%;
margin-top:5%;
margin-left:68%;
width:10%;
}
@media screen and (max-width: 900px) {
 .inbox1 {
margin-top:6.5%;
overflow:hidden;
}
@media screen and (max-width: 900px) {
 .inbox2 {
overflow:hidden;
}


@media screen and (max-width: 900px) {
 .inbox1 font{
font-size:130%;

}
@media screen and (max-width: 900px) {
 .inbox2 font{
font-size:130%;
}


</style>
</body>


<body>
<div  class= 'hea'  >
<img  class='img1' src ='all/logo.jpg' alt='RMS logo'> 
<button class='name'> <i><b><h2><a href='file:///C:/Users/satish%20parmar/Desktop/nsp%20-%20Copy/home.html'> RMSystem </a></h2> </b></i> </button> 
<button class='search'  ><a href= 'https://www.google.com/maps'>  Search </a></button>
</div>

<?php
$sql = "SELECT * FROM `jaipur1`";
$result = mysqli_query($conn, $sql);

$num = mysqli_num_rows($result);

if($num>0){
  while($row = mysqli_fetch_assoc($result)){ 

?>

<div class='box1'>
<div class='inbox1'><center>

<font size ='6'color ' black'> <b> <?php echo $row['name'] ; ?> </b></font><br><br>
<font size ='4' color ='black'> <b><?php echo $row['address'] ; ?><b></font></center> <br>
<button class ='map' type = 'submit '> <a href =' <?php echo $row['google'] ;?>'>  Visit</a> <hr>
<a href =' <?php echo $row['zometo'];?> '>  Order</a> 
</button>
<font size ='5' color ='red' ><?php echo $row['time'] ;?></font><br>
<font size ='5' color ='black'> &#9743 : <?php echo $row['number'] ;?></font> <br>
<font size ='5' color=' black'> Rating : </font>
<font size ='5' color=' orange'> &#9733 &#9733 &#9733 &#9733 &#9734</font>
<font size ='4' color=' black'> ( <?php echo$row['rating'] ;?> )</font>


</div>

</div>
<?php  
}
}
?>

<div class='last' align= 'center'>
<font size='4' > About us -  </font>
<font size='5' >  RMSystem.inc </font> <br>
<font size='4' > Help Line Number -  </font> <font size ='3'> 9785470525 </font><br>
<font size ='4'> Email Id - </font> <font  size ='3'> RMSystem@gmail.com</font>   
</div>

</body>
</html


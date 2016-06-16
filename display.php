<?php
session_start();

if($_SESSION['user_id'] == "")
{	
	header("Location:admin.php");
}

$per_page = 20; //per page result 
if(!isset($_GET['page']))
{
	$page = 1;  //current page 
}
else
{
	$page = $_GET['page'];
}

if($page<=1)
$start = 0; // staring row
else
$start = $page * $per_page - $per_page;


$con=mysql_connect("localhost","root","root");

if(!$con) {
	die("could not connect" .mysql_error());
}
mysql_select_db("t-shirt",$con);

$searchq = '';
$whereClause = '';

$query = '';

if(isset($_POST['search']))
{
	$searchq = $_POST['search'];
	
	
}
$sqli= "select * from customer  LIMIT $start , $per_page " . $query1  ;
$query = "SELECT * FROM customer" ;
$query1 = "SELECT * FROM customer WHERE customer_id LIKE '%" . $searchq . "%' OR first_name LIKE '%" . $searchq . "%' " ;
 
  
  $num_row = mysql_num_rows(mysql_query($query)); //25
  $num_page = ceil($num_row/$per_page); //total number of pages  9

$result = mysql_query ($sqli);

?>
<html>
<head>
<title>Admin Control Panel</title>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="css/images/favicon.ico" />
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="css/form.css" type="text/css"/>
	<script src="js/jquery-1.6.2.min.js" type="text/javascript" charset="utf-8"></script>
	<!--[if IE 6]>
		<script src="js/DD_belatedPNG-min.js" type="text/javascript" charset="utf-8"></script>
	<![endif]-->
	<script src="js/jquery.jcarousel.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/functions.js" type="text/javascript" charset="utf-8"></script>
<script language="javascript">
			

			function hightlight(obj) {
				obj.setAttribute("style", "height:22px; text-decoration:underline; cursor: pointer; color:blue;");
			}
			
			function unhightlight(obj) {
				obj.setAttribute("style", "height:22px; text-decoration:none; color : black;");
			}
		</script>
</head>
<body>
<div id="header">
				<div class="header-inner">
					<div class="shell">
						<h1 id="logo"><a class="notext" href="index.php">Mandala</a></h1>
						<div id="account">
							<a class="view-account" title="View Account" href="order.php">Your Shopping Cart</a>
							<span>Articles: 0</span><span>Cost: <strong>Rs.00.0</strong></span>
							<div class="cl">&nbsp;</div>
						</div>
						
						<div id="navigation">
							<ul>
								<li><a href="logout.php" title="Admin page"><span>Logout</span></a></li>
							</ul>
							<div class="cl">&nbsp;</div>
						</div>
						<!-- End Navigation -->
						<div class="cl">&nbsp;</div>
					</div>
					<!-- End Shell -->
				</div>
			</div>
<div id="body">
	<div  class="display">
		<center><h3><b></b> Customer T-shirt order Table</h3></b></center>
		<table border='1' cellspacing="0" cellpadding="0" style="margin-top: 10px;">

				<tr>
					<th>Customer No</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Street Address</th>
					<th>City</th>
					<th>House No</th>
					<th>Telephone No</th>
					<th>Mobile No</th>
					<th>Email Address</th>
					<th>T-shirt Code</th>
					<th>T-shirt Size</th>
					<th>T-shirt Color</th>
					<th>No of T-shirt</th>
					<th>Date and Time</th>
				</tr>
<?php
if (mysql_num_rows($result) > 0) {
	while($row = mysql_fetch_array($result))
	{
		echo "<tr id='".$row['user_id']."' onClick='javascript: showDetails(".$row['user_id'].");' onMouseOver='javascript: hightlight(this);' onMouseOut='javascript: unhightlight(this);' style='background-color : white;'>";
		echo "<td>" .$row['customer_id']."</td>";
				echo "<td>" .$row['first_name']."</td>";
				echo "<td>" .$row['last_name']."</td>";
				echo "<td>" .$row['street_address']."</td>";
				echo "<td>" .$row['city']."</td>";
				echo "<td>" .$row['house_no']."</td>";
				echo "<td>" .$row['tel_no']."</td>";
				echo "<td>" .$row['mob_no']."</td>";
				echo "<td>" .$row['email']."</td>";
				echo "<td>" .$row['tshirt_code']."</td>";
				echo "<td>" .$row['tshirt_size']."</td>";
				echo "<td>" .$row['tshirt_color']."</td>";
				echo "<td>" .$row['no_of_tshirt']."</td>";
				echo "<td>" .$row['date']."</td>";
				echo"</tr>";
	}
}
else {
	echo "<tr><td colspan='11'>No records found</td></tr>";
}
echo"</table>";

$prev = $page - 1;
$next = $page + 1;
echo "<hr>";
if($prev >0)
	echo "<a href='?page=$prev'> Prev</a>";

$number=1;
for($number; $number<=$num_page ; $number=$number+1)
{
	if($page == $number)
	{
		echo "<b>[$number]</b>";
	}
	else
	{
		echo "<a href='?page=$number'>$number </a>";
	}
}

if($next <  $num_page + 1)
	echo "<a href='?page=$next'> Next </a>";

?>
</table>
 </div>
</body>
</html>
<?php mysql_close($con); ?>
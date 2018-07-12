

<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$db = 'keyservices';
$conn = new mysqli( $dbhost, $dbuser, $dbpass, $db );
/* if($conn){
	  echo "Success";
  }
 else {
	 
	 echo "Failed";
 }   */

$sql = "SELECT * FROM sales";
$result = $conn->query($sql);
?>
<!doctype html>
<html>
<head>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Affordable and best sales prices">
	  <meta name="keywords" content="sales content, Keyservices, Green at its best">
  	<meta name="author" content="Saneha Dyal">
    <title>Remarkit | Services</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<header>
      <div class="container">
        <div id="branding">
          <h1><span class="highlight">"Green at its Best"</span></h1>
        </div>
        <nav>
          <ul>
           
            <li class="current"><a href="sales.php">Commissioning and Warehouse Price</a></li>
            <li><a href="decomissioning.php">Decommissioning</a></li>
			 <li><a href="mobileprice.php">Mobile</a></li>
			 <li><a href="company.php">Back</a></li>
          </ul>
        </nav>
      </div>
    </header>

<h1 align="center">Commissioning and Warehouse Price of Remarkit</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>Serial no.</th>
<th>Keyservice</th>
<th>Description</th>
<th>Measurement</th>
<th>1-9 units price</th>
<th>10-199+ units price</th>
<th>200+ units price</th>

</tr>
<?php
//Fetch Data form database
if($result->num_rows > 0){
while($row = $result->fetch_assoc()){
?>
<tr>
<td><?php echo $row['serialno']; ?></td>
<td><?php echo $row['keyservices']; ?></td>
<td><?php echo $row['description']; ?></td>
<td><?php echo $row['measurement']; ?></td>
<td><?php echo $row['1-9 unitsprice']; ?></td>
<td><?php echo $row['10-199+ unitsprice']; ?></td>
<td><?php echo $row['200+ unitsprice']; ?></td>

</tr>
<?php
}
}
else
{
?>
<tr>
<th colspan="2">There's No data found!!!</th>
</tr>
<?php
}
?>
</table>
<footer>
      <p>RemarkIT Solutions Ltd © 2016 - Wellington, New Zealand
| Privacy Statement | Admin | Website by Firstfruits Copyright &copy; 2017</p>
    </footer>

</body>
</html>
<?php
	session_start();
	if($_SESSION['cusid'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['status'] != "2")
	{
		echo "This page for customer only!";
		exit();
	}

require_once 'config.php';



	$strSQL = "SELECT * FROM cus WHERE cusid = '".$_SESSION['cusid']."' ";
	$objQuery = mysqli_query($link,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
</head>
<body>
  Welcome to cus Page! <br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;Username</td>
        <td width="197"><?php echo $objResult["cusid"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;Name</td>
        <td><?php echo $objResult["cusname"];?></td>
      </tr>
      <tr>
        <td> &nbsp;status</td>
        <td><?php echo $objResult["status"];?></td>
      </tr>
    </tbody>
  </table>
  <br>
  <a href="edit_profile.php">Edit</a><br>
  <br>
  <a href="logout.php">Logout</a>
</body>
</html>
<?php
	mysqli_close($link);
?>

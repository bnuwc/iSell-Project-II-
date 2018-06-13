<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}

	if($_SESSION['Status'] != "1")
	{
		echo "This page for Admin only!";
		exit();
	}

require_once 'config.php';



	$strSQL = "SELECT * FROM userid WHERE UserID = '".$_SESSION['UserID']."' ";
	$objQuery = mysqli_query($link,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
?>
<html>
<head>
<title>ThaiCreate.Com Tutorials</title>
</head>
<body>
  Welcome to Admin Page! <br>
  <table border="1" style="width: 300px">
    <tbody>
      <tr>
        <td width="87"> &nbsp;Userid</td>
        <td width="197"><?php echo $objResult["UserID"];?>
        </td>
      </tr>
      <tr>
        <td> &nbsp;userName</td>
        <td><?php echo $objResult["Username"];?></td>
      </tr>
      <tr>
        <td> &nbsp;Status</td>
        <td><?php echo $objResult["Status"];?></td>
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

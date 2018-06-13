<?php
	session_start();
	if($_SESSION['UserID'] == "")
	{
		echo "Please Login!";
		exit();
	}
	require_once 'config.php';


	if($_POST["txtPassword"] != $_POST["txtConPassword"])
	{
		//echo "Password not Match!";
    ?>
    <script type="text/javascript">
    alert("Password Not Match");
    window.location.href = "edit_profile.php";
    </script>

    <?php


		exit();
	}
	$strSQL = "UPDATE userid SET Password = '".trim($_POST['txtPassword'])."'
	,Username = '".trim($_POST['txtName'])."' WHERE UserID = '".$_SESSION["UserID"]."' ";
	$objQuery = mysqli_query($link,$strSQL);

	//echo "Save Completed!<br>";

	if($_SESSION["Status"] == "1")
	{
	//	echo "<br> Go to <a href='admin_page.php'>Admin page</a>";

//$usepost=$_POST['txtName'];
	//echo "$usepost";
  ?>
  <script type="text/javascript">
  alert("Save Completed!");
  window.location.href = "admin_page.php";
  </script>

  <?php
	}
	else
	{
		//echo "<br> Go to <a href='customer_page.php'>User page</a>";
    ?>
    <script type="text/javascript">
    alert("Save Completed!");
    window.location.href = "customer_page.php";
    </script>

    <?php
	}

	mysqli_close($link);
?>

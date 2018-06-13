<html>

<?php
	session_start();
require_once 'config.php';



	$strSQL = "SELECT * FROM userid WHERE Username = '".mysqli_real_escape_string($link,$_POST['txtUsername'])."'
	and Password = '".mysqli_real_escape_string($link,$_POST['txtPassword'])."'";
	$objQuery = mysqli_query($link,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{

?>
<script type="text/javascript">
alert("User ID หรือ Password ผิด");
window.location.href = "input.html";
</script>

<?php
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();

			if($objResult["Status"] == "1")
			{
				//header("location:admin_page.php");
        ?>
        <script type="text/javascript">
        alert("ยินดีต้อนรับ");
        window.location.href = "admin_page.php";
        </script>

        <?php
			}
			else
			{
				//header("location:customer_page.php");
        ?>
        <script type="text/javascript">
        alert("ยินดีต้อนรับ");
        window.location.href = "customer_page.php";
        </script>

        <?php
			}
	}
	mysqli_close($link);
?>


</html>

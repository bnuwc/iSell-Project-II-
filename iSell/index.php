<!DOCTYPE html>
<html>
    <?php
    include 'component/header.php';
    ?>
    <body>
      <form action="verify_login.php" method="post">
        UserName:<input type="text" name="user" >
        Password:<input type="password" name="pass"  >
          <input type="submit"  value="Login" >
      </form>
        <!--Footer-->
        <?php
        include 'component/footer.php';
        ?>

    </body>
</html>

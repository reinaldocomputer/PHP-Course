
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php
        if(isset($_POST['submit'])){
            $username = $_POST["username"];
            $password = $_POST["password"];
            echo "User: " . $username . "<br>";
            echo "Password: " . $password . "<br>";

        }
        
	
    ?>

 <form action="6.php" method="post">
     <input type="text" placeholder="Username" name="username">
     <input type="password" placeholder="Password" name="password">
     <input type="submit" name="submit">
 </form>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
<?php 
//include("inc/connection.php");
//include("inc/formjs.php");
$pageTitle = "Candidate Quiz"; 

include("views/header.php"); 
?>

<div align="center" class="">
	<h1>Welcome to the Trim Agency Apprentice Quiz</h1>
</div>


<?php 
		// Check database for $name match
		// $sth = $pdo->prepare(
		// 	"SELECT * 
		// 	FROM users 
		// 	WHERE name = ?"
		// );
		// $sth->execute([$name]);
		// $result = $sth->fetch();
		//$result = $sth->fetchAll();

//******some SQL code for sample
//		var_export($result);
//	echo "<br />\n"."Name not in database"; /////******   make Registration form.
?>

<div class="section page">      <!-- class="section page">   -->
	<div>  <!-- // class ="wrapper">  -->
		<h3 align="center">Please take following quiz.</h3>	
		
		<?php 
			//****** Form included here located in views folder **********
			include("views/form.php"); 
		?>

	</div>
</div>


<?php include("views/footer.php");?>

<?php
	include "header.php";
	include "../db/dbconnect.php";
?> 
<style type="text/css">
/*	input[type="text"]
	{
		width: 30%;
	}*/
	div
	{
		width: 30%;
		text-align: center;
		margin: 0 auto;
	}
</style>

<?php
	// initialize error variable
	$errorMsg = "";




?>


<div>
	<span>  <?php  print $errorMsg  ?>  </span>
	<label>Select a type of survey: </label>
	<form action="PreSurveyLanding.php" method="post" name="PreSurveyChoice">
		<button name="btnPreSurvey">PreSurvey</button>
	</form>
	<form action="PostSurveyLanding.php" method="post" name="PostSurveyChoice">
		<button name="btnPostSurvey">Create Class</button>
	</form>

</div>



<?php
	include "footer.php";
?>
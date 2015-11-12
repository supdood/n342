<?php
	include "surveyHeader.php";
	include "../db/dbconnect.php";
	include "utils/authenticationIncludes.php";
?> 
<style type="text/css">
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


<div class="row">
	<span>  <?php  print $errorMsg  ?>  </span>
	<label style="margin:2">Select a type of survey: </label>
	<form action="PreSurveyLanding.php" method="post" name="PreSurveyChoice">
		<button name="btnPreSurvey">PreSurvey</button>
	</form>
	<br>
	<form action="PostSurveyLanding.php" method="post" name="PostSurveyChoice">
		<button name="btnPostSurvey">PostSurvey</button>
	</form>

</div>



<?php
	include "surveyFooter.php";
?>
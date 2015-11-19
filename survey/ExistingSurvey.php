<?php
	include "surveyHeader.php";
	include "../db/dbconnect.php";
	include "utils/authenticationIncludes.php";
?> 
<style type="text/css">
	.table{
		width: auto;
		text-align: center;
		border: 1px solid black;
	}
	div
	{
		width: 50%;
		text-align: center;
		margin: 0 auto;
	}
</style>


<?php
	// string to generate table
	// $testTable = "<table class='table'><th>SurveyID</th><th>ClassID</th><th>LastQuestionAnswered</th>";
	// string to generate dropDown to select survey
	$dropDown = "<select name='existingSurvey' id='existingSurvey'>";
	// print $_SESSION["incompleteSurveys"];
	$countOfIncompletes = count($_SESSION["incompleteSurveys"]);
	// print $countOfIncompletes . "<br>";
	for ($i = 0; $i < $countOfIncompletes; $i++) 
	{
		// $testTable .= "<tr>";
		$val = $_SESSION["incompleteSurveys"][$i];
		// print $val[$i];
		// print count($val);
		
		// populate the dropdown box options
		// $val[0] is SurveyID
		// $val[1] is ClassID
		$dropDown .= "<option id='".$val[0]."'value='".$val[1]."'>". $val[4] . " - ".$val[3]. "</option>";

		// print "SurveyID:  " . $val[0] . "<br>";
		// print "ClassID:  " . $val[1]. "<br>";
		// print "Class Name:  "  .  $val[3] . "<br>";
		// print "SurveyType  " . $val[4] . "<br>";

		// for($j = 0; $j < count($val); $j++)
		// {	
			// $testTable .= "<td>".$val[$j]."</td>";
		// }
		// $testTable .= "</tr>";
	}
	// $testTable .= "</table>";

?>

<script>
function getDropdownValue(classID)
{
	// alert("ClasID: "+classID);
	var dropDownBox = document.getElementById("existingSurvey");
	// alert(dropDownBox.name);
	var surveyID = dropDownBox.options[dropDownBox.selectedIndex].id;
	// alert("ClassID: "+classID + "  --  SurveyID:  "+ surveyID);
	var link = "ExistingSurveyLanding.php?surSelect="+surveyID+"&classID="+classID;
	window.location.assign(link);


}
</script>



<div>
	<!-- <form action="ExistingSurveyLanding.php" method="post"> -->
	<table>
		<tr>
			<td>Select ClassID from your incomplete surveys: </td>
			<td>  <?php  print $dropDown  ?>  </td>
			<!-- <td id="selectedSurvey" /> -->
			<td>  <button name="btnExistingSurvey" onclick="getDropdownValue(existingSurvey.value)">Continue Survey</button>  </td>
		</tr>
	</table>
	<!-- </form> -->
	

</div>





<?php
	include "surveyFooter.php";
?>
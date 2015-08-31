<html>
<head/>
<body>
	<?
	$error = false;
	echo $_POST["inputLName"].'<br/>';  
	echo $_POST["inputFName"].'<br/>';  	
	echo $_POST["inputMInitialName"].'<br/>';  
	echo $_POST["inputSufix"].'<br/>';  
	echo $_POST["inputDegree1"].'<br/>';  
	echo $_POST["inputDegree2"].'<br/>';  
	echo $_POST["inputDegree3"].'<br/>';  
	echo $_POST["inputBadgeName"].'<br/>';  
	echo $_POST["inputBadgeCity"].'<br/>';  
	echo $_POST["inputBadgeState"].'<br/>';  
	echo $_POST["inputJobTitle"].'<br/>';  
	echo $_POST["inputOrganization"].'<br/>';  
	echo $_POST["inputAddress"].'<br/>';  
	echo $_POST["inputAddress2"].'<br/>';  
	echo $_POST["inputCity"].'<br/>';  
	echo $_POST["inputState"].'<br/>';  
	echo $_POST["inputPostalCode"].'<br/>';  
	echo $_POST["inputCountry"].'<br/>';  
	echo $_POST["inputTelephone"].'<br/>';  
	echo $_POST["inputTelephoneMobile"].'<br/>'; 
	echo '<h1>Nao esquece da foto</h1><br/>';  
	echo $_POST["inputEmail"].'<br/>';  
	echo $_POST["inputConfirmEmail"].'<br/>';  
	echo $_POST["inputPassword"].'<br/>';  
	echo $_POST["inputPasswordCanonical"].'<br/>';  
	echo $_POST["puplicProfile"].'<br/>';  
	echo $_POST["ageRange"].'<br/>'; 
	echo $_POST["currentSex"].'<br/>'; 
	echo $_POST["currentSexOther"].'<br/>';  
	echo $_POST["assignedSex"].'<br/>';  
	if (isset($_POST['raceEthnicity'])) {
	    $optionArray = $_POST['raceEthnicity'];
	    for ($i=0; $i<count($optionArray); $i++) {
	        echo $optionArray[$i]."<br />";
	    }
	}
	echo $_POST["hivStatus"].'<br/>';  
	echo $_POST["geoLocation"].'<br/>';  
	echo $_POST["geoType"].'<br/>';  
	echo $_POST["attendedSummit"].'<br/>';  
	echo $_POST["raceEthnicityOther"].'<br/>';
	if (isset($_POST['attendedSummitEdition'])) {
	    $optionArray = $_POST['attendedSummitEdition'];
	    for ($i=0; $i<count($optionArray); $i++) {
	        echo $optionArray[$i]."<br />";
	    }
	}  
	if (isset($_POST['organizationType'])) {
	    $optionArray = $_POST['organizationType'];
	    for ($i=0; $i<count($optionArray); $i++) {
	        echo $optionArray[$i]."<br />";
	    }
	}
	if (isset($_POST['organizationTypeOther'])) {
	    $optionArray = $_POST['organizationTypeOther'];
	    for ($i=0; $i<count($optionArray); $i++) {
	        echo $optionArray[$i]."<br />";
	    }
	}  
	echo $_POST["naesm"].'<br/>';
	echo $_POST["focusGroup"].'<br/>';
	echo $_POST["focusGroupEmail"].'<br/>';
?>	
</body>
</html>	





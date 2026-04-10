<?php include("form.html"); ?>

<?php
$nName = $_POST["nName"];
$nGender = $_POST["nGender"];

echo "Your Name is:".$nName."<br/>";

if($nGender == "m"){
	echo "Your Gedner is 男生<br/>";
}

foreach($array as $item){
	switch(nInstitute[]){
		case "nuk":
			echo "高雄大學";
			break;
		case "nukst":
			echo "高雄科大";
			break;
		case "nsysu":
			echo "中山大學";
			break;
	}
}
?>
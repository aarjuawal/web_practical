<?php
	$student = array(
			array("sid","Name","Address","Phone"),
	        array("1","Ram","Kapan","4812367"),
	        array("2","Shyam","paknajol","55679801"),
	         array("3","Sita","Boudha","44867890"));
	echo "<table border='1'>";
	foreach($student as $key=>$value){
		echo "<tr>";
		

		foreach ($value as $values) {
			echo "<td>$values</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
?>





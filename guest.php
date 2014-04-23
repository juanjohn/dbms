<?php

session_start();

include 'connect.inc.php';

/*$query="SELECT `id`, `degree`, `department`, `year`, `subject` FROM `courses` WHERE `department`='$department' ORDER BY `subject`";
$query_exec=mysql_query($query);
$innerHTML="";
while($res=mysql_fetch_assoc($query_exec))
{
	$subjects=$res["subject"];
	$innerHTML.="<option>$subjects</option>";
}

if(isset($_POST["subject_drop"]) && !empty($_POST["subject_drop"]))
$_SESSION["subject_entered"]=$_POST["subject_drop"];
$subject_entered=$_SESSION["subject_entered"];
$innerHTML_main.="";
if(isset($_SESSION["subject_entered"]) && !empty($_SESSION["subject_entered"])){
	$innerHTML_main.="<p>You are entering marks for $subject_entered</p><br/> ";
	$innerHTML_main.="<form method=\"post\" action=\"./index.php\"><input type=\"text\" name=\"year\" placeholder=\"1, 2, 3, 4\" /><input type=\"text\" name=\"rollnumber\" placeholder=\"Roll Number\"/><br/><input type=\"text\" name=\"name\" placeholder=\"Name of Student\"/><input type=\"text\" name=\"marks\" placeholder=\"marks\"/> <input type=\"submit\" value=\"Update Marks\"/></form>";
}

if(isset($_POST["rollnumber"]) && !empty($_POST["rollnumber"]) && isset($_POST["marks"]) && !empty($_POST["marks"]) && isset($_POST["name"]) && !empty($_POST["name"])){
$rollnumber=$_POST["rollnumber"];
$marks=$_POST["marks"];
$name=$_POST["name"];
$year=$_POST["year"];
$queryEnterMarks="INSERT INTO `marks`(`id`, `university`, `department`, `year`, `course`, `name`, `roll_no`, `marks`) VALUES ('','$university','$department','$year','$subject_entered','$name','$rollnumber','$marks')";
$query_exec=mysql_query($queryEnterMarks);


$queryRankList="SELECT `id`, `name`, `rollno`, `department`, `year`, `average_marks`, `number_of_subjects`, `pass` FROM `ranklist` WHERE `department`='$department' AND `year`='$year' AND `rollno`='$rollnumber'";
$query_exec=mysql_query($queryRankList);
$average=mysql_result($query_exec,0,"average_marks");
$numOfSub=mysql_result($query_exec,0,"number_of_subjects");
if($average==NULL && $numOfSub==NULL){
$average=0;
}
$numOfSub=$numOfSub+1;
if($numOfSub<=6)
$newAverage=(($average*($numOfSub-1))+$marks)/$numOfSub;
if($numOfSub==6){
	$pass="P";
}else
	$pass="F";

$queryRankListInsert="UPDATE `ranklist` SET `name`='$name',`rollno`='$rollnumber',`department`='$department',`year`='$year',`average_marks`='$newAverage',`number_of_subjects`='$numOfSub',`pass`='$pass' WHERE `department`='$department' AND `year`='$year' AND `rollno`='$rollnumber'";

if($numOfSub==1)
$queryRankListInsert="INSERT INTO `ranklist`(`id`,`university`, `name`, `rollno`, `department`, `year`, `average_marks`, `number_of_subjects`, `pass`) VALUES ('','$university','$name','$rollnumber','$department','$year','$newAverage','$numOfSub','$pass')";
$query_execInsert=mysql_query($queryRankListInsert);

}*/

if(isset($_POST["year_2"]) && !empty($_POST["year_2"]) && !empty($_POST["department"]) && !empty($_POST["university"])){
$year=$_POST["year_2"];
$university=$_POST["university"];
$department=$_POST["department"];
$query="SELECT `id`,`university`, `name`, `rollno`, `department`, `year`, `average_marks`, `number_of_subjects`, `pass` FROM `ranklist` WHERE `department`='$department' AND `year`='$year' AND `university`='$university' ORDER BY `average_marks` DESC";
$query_exec=mysql_query($query);
$innerHTML_results="<br/><hr/><br/><p>You are viewing results for <b>$university</b><p><br/>";
$innerHTML_results.="<table border=\"1px solid black\">"; 
$innerHTML_results.="<tr><th>Sl no:</th><th>Position</th><th>Department</th><th>Year</th><th>Roll number</th><th>Name</th><th>Pass/Fail</th></tr>";
$i=1;
while($ranks=mysql_fetch_assoc($query_exec)){
$rollnumber=$ranks["rollno"];
$name=$ranks["name"];
$pass=$ranks["pass"];
	$innerHTML_results.="<tr id=\"$i\"><td>$i</td><td>$i</td><td>$department</td><td>$year</td><td>$rollnumber</td><td>$name</td><td>$pass</td></tr>";	
$i++;

}
$innerHTML_results.="</table>";
}

if(isset($_POST["year_2_o"]) && !empty($_POST["year_2_o"]) && !empty($_POST["department_o"])){
$year=$_POST["year_2_o"];
$department=$_POST["department_o"];
$query="SELECT `id`,`university`, `name`, `rollno`, `department`, `year`, `average_marks`, `number_of_subjects`, `pass` FROM `ranklist` WHERE `department`='$department' AND `year`='$year' ORDER BY `average_marks` DESC";
$query_exec=mysql_query($query);
$innerHTML_results_o="<br/><hr/><br/><p>Overall Results</b><p><br/>";
$innerHTML_results_o.="<table border=\"1px solid black\">";
$innerHTML_results_o.="<tr><th>Sl no:</th><th>Position</th><th>University</th><th>Department</th><th>Year</th><th>Roll number</th><th>Name</th><th>Pass/Fail</th></tr>";
$i=1;
while($ranks=mysql_fetch_assoc($query_exec)){
$rollnumber=$ranks["rollno"];
$name=$ranks["name"];
$pass=$ranks["pass"];
$university=$ranks["university"];
        $innerHTML_results_o.="<tr id=\"$i\"><td>$i</td><td>$i</td><td>$university</td><td>$department</td><td>$year</td><td>$rollnumber</td><td>$name</td><td>$pass</td></tr>";
$i++;

}
$innerHTML_results_o.="</table>";
}

echo "

<!DOCTYPE html PUBLIC>
<html>
<head>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"profile.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"footer.css\" />
        <title>University Ranking System</title>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"styling.css\" />
        <script type=\"text/javascript\">

	function populate(){
		document.getElementById('divresults').innerHTML+='$innerHTML_results'; 
		document.getElementById('divallresults').innerHTML+='$innerHTML_results_o';
	}
        </script>    
</head>
<body onload='populate()'>

        <header id=\"header_main\">
        </header>
        <nav id=\"navigation\" style=\"postion:relative;opacity:1;\">
	<ul><a href=\"index.php\"><li><p>Home</p></li></a>
	</ul>
        </nav>
        <div id=\"big_wrapper\">



        <section>
	<p>Welcome Guest User. <br/>You are welcome to view the ranklist.Please choose the preferences. </p>
	<br/>
	<div>
	<br/>
	<div id='main'>

	</div>
	<div id='resultsDiv'><br/>
	<p>View results of the university :</p>
	<form method='post' action='./guest.php'>
	<input type='text' name='university' placeholder='Enter university'/>
        <input type='text' name='department' placeholder='Enter Department'/>
	<input type='text' name='year_2' placeholder='Enter Year'/>
	<input type='submit' value='view'/>
	</form>
	</div>

	<div id='resultsAllDiv'><br/>
        <p>View Overall results:</p>
        <form method='post' action='./guest.php'>
	<input type='text' name='department_o' placeholder='Enter Department'/>
        <input type='text' name='year_2_o' placeholder='Enter Year'/>
        <input type='submit' value='view'/>
        </form>
        </div>

	<div id='divallresults'>

	</div>
	<div id='divresults'>


	</div>
	</section>

        <footer id=\"footer\">
                <p>Copyrights &copy; MKN</p>
                <p>University Ranking system</p>
        </footer>
        </div>


</body>

</html>
";
?>


<?php

session_start();

include '../connect.inc.php';
$id=$_SESSION["user_id"];
$query="SELECT * FROM `faculty_details` WHERE `id`='$id'";
$query_exec=mysql_query($query);

if($result=mysql_fetch_assoc($query_exec))
{
	$username=$result["username"];
}
$department=$result["department"];

$query="SELECT `id`, `degree`, `department`, `year`, `subject` FROM `courses` WHERE `department`='$department' ORDER BY `subject`";
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
$queryEnterMarks="INSERT INTO `marks`(`id`, `department`, `year`, `course`, `name`, `roll_no`, `marks`) VALUES ('','$department','$year','$subject_entered','$name','$rollnumber','$marks')";
$query_exec=mysql_query($queryEnterMarks);
}

if(isset($_POST["year_2"]) && !empty($_POST["year_2"])){
$year=$_POST["year_2"];
echo $year;
echo $department;
$query="SELECT `id`, `department`, `year`, `course`, `name`, `roll_no`, `marks` FROM `marks` WHERE `department`='$department' AND `year`='$year' ORDER BY `roll_no`";
$query_exec=mysql_query($query);
$innerHTML_results="";
while($ranks=mysql_fetch_assoc($query_exec)){
	
}
}


echo "

<!DOCTYPE html PUBLIC>
<html>
<head>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../profile.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../footer.css\" />
        <title>University Ranking System</title>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"../styling.css\" />
        <script type=\"text/javascript\">

	function populate(){
		document.getElementById('subject_drop').innerHTML+='$innerHTML';
		document.getElementById('main').innerHTML+='$innerHTML_main';
	}
        </script>    
</head>
<body onload='populate()'>

        <header id=\"header_main\">
        </header>
        <nav id=\"navigation\">

        </nav>
        <div id=\"big_wrapper\">



        <section>
	<p>Welcome ".$username."</p>
	<br/>
	<div>
	Choose the subject you wish to enter marks in:
	<form method='post' action='./index.php'>
	<select id='subject_drop' name='subject_drop'>
	<option>-------</option>
	</select>
	<input type='submit' value='Enter Marks'/>
	</form>
	<div>
	<br/>
	<div id='main'>

	</div>
	<div id='resultsDiv'><br/>
	<p>View results:</p>
	<form method='post' action='./index.php'>
	<input type='text' name='year_2'/>
	<input type='submit' value='view'/>
	</form>
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


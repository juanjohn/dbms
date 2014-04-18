<?php

session_start();

include '../connect.inc.php';
$id=$_SESSION["user_id"];
$query="SELECT * FROM `student_details` WHERE `id`='$id'";
$query_exec=mysql_query($query);

if($result=mysql_fetch_assoc($query_exec))
{
	$username=$result["username"];
}


$innerHTML="";
if(isset($_POST["department"]) && isset($_POST["degree"]) && !empty($_POST["department"])){
$degree=$_POST["degree"];
$_SESSION["degree"]=$degree;
$department=$_POST["department"];
$_SESSION["department"]=$department;
$year=$_POST["year"];
$_SESSION["year"]=$year;
$query="SELECT * FROM `courses` WHERE `degree`='$degree' AND `department`='$department' AND `year`='$year'";
$query_exec=mysql_query($query);
$innerHTML="<table border=\"1px solid black\">";
$i=0;
while($arr=mysql_fetch_assoc($query_exec))
{
        $degree=$arr["degree"];
        $department=$arr["department"];
        $year=$arr["year"];
        $i++;
	$subject=$arr["subject"];
	$innerHTML.="<tr id=\"$i\"><td>$i</td><td>$degree</td><td>$department</td><td>$subject</td><td><div></div></td></tr>";
}
$innerHTML.="</table>";
$innerHTML.="<form method=\"post\" action=\"./index.php\"><input type=\"hidden\" value=\"done\" id=\"registered\" name=\"registered\"/><input type=\"submit\"/></form>";
}

if(isset($_POST["registered"])){
$degree=$_SESSION["degree"];
$department=$_SESSION["department"];
$year=$_SESSION["year"];
$query1="SELECT * FROM `courses` WHERE `degree`='$degree' AND `department`='$department' AND `year`='$year'";
$query_exec1=mysql_query($query1);
$subj=array("asa","sd");
$i=0;
while($arr=mysql_fetch_assoc($query_exec1))
{
        $subj[$i++]=$arr["subject"];
}
for($i;$i<6;$i++){
$subj[$i]="";
}
$query2="INSERT INTO `subjects_registered`(`id`, `username`, `degree` ,`year`, `department`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`) VALUES ('','$username','$degree','$year','$department','$subj[0]','$subj[1]','$subj[2]','$subj[3]','$subj[4]','$subj[5]')";
$query_exec2=mysql_query($query2);
	$innerHTML="You have successfully registered!";
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
	document.getElementById(\"main\").innerHTML='".$innerHTML."';
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
	<form method='post' action='./index.php'>
	<input type='text' name='degree' placeholder='degree'/>
	<input type='text' name='department' placeholder='department'/>
	<input type='text' name='year' placeholder='year'/>
	<br/>
	<input type='submit' value='Apply'/>
	<div id='main'>

	</div>
	</form>
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


<?php

include '../connect.inc.php';
$id=$_SESSION["user_id"];
$query="SELECT * FROM `student_details` WHERE `id`='$id'";
$query_exec=mysql_query($query);

if($result=mysql_fetch_assoc($query_exec))
{
        $username=$result["username"];
}

$degree=$_POST["degree"];
$department=$_POST["department"];
$year=$_POST["year"];
$query="SELECT * FROM `courses` WHERE `degree`='$degree' AND `department`='$department' AND `year`='$year'";
$query_exec=mysql_query($query);

$innerHTML="<table border=\"1\">";
$i=0;
while($arr=mysql_fetch_assoc($query_exec))
{
        $degree=$arr["degree"];
        $department=$arr["department"];
        $year=$arr["year"];
        $i++;
	$subject=$arr["subject"];
	//$innerHTML="sdsdsd";
        $innerHTML.="<tr id=\"$i\"><td>$i</td><td>$degree</td><td>$department</td><td>$subject</td><td><div></div></td></tr>";
}
$innerHTML.="</table>";

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
<body onload='populate()' >

        <header id=\"header_main\">
        </header>
        <nav id=\"navigation\">

        </nav>
        <div id=\"big_wrapper\">



        <section>
	<div id='main'>
	
	</div>
        <form method='post' action='./register_courses.php'>
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


?>

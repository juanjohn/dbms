<?php

include "../connect.inc.php";

$name=$_POST["name"];
$username=$_POST["username"];
$password=$_POST["password"];
$repassword=$_POST["repassword"];
$DOB=$_POST["DOB"];
$YoP=$_POST["YoP"];
$degree=$_POST["degree"];
$department=$_POST["department"];

$select_department_f=$_POST["select_department_f"];
if(isset($_POST["name"]) && isset($_POST["DOB"]) && !empty($_POST["DOB"]) && !empty($_POST["name"])) 
{
	$query="INSERT INTO `student_details`(`id`, `name`, `username`, `password`, `DOB`, `YoP`, `degree`, `department`) VALUES ('','$name','$username','$password','$DOB','$YoP','$degree','$department')";
	$query_exec=mysql_query($query);

}

if(isset($_POST["select_department_f"]) && !empty($_POST["select_department_f"])){
        $query="INSERT INTO `faculty_details`(`id`, `name`, `username`, `password`, `department`) VALUES ('','$name','$username','$password','$select_department_f')";
	$query_exec=mysql_query($query);
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
	function first(){
		document.getElementById('student_portal').style.display='none';
		document.getElementById('admin_portal').style.display='none';
		document.getElementById('dept_msc').style.display='none';
		document.getElementById('dept_btech').style.display='none';
		document.getElementById('dept_mtech').style.display='none';
		document.getElementById('dept_bsc').style.display='none';

	}
	function optgroup(){
		if(document.getElementById('user_type').value=='Student'){
			document.getElementById('student_portal').style.display='inline';
			document.getElementById('admin_portal').style.display='none';
		}
		else if(document.getElementById('user_type').value=='Admin'){
			document.getElementById('admin_portal').style.display='inline';
			document.getElementById('student_portal').style.display='none';
		}

	}
	function select_department(){
		var course=document.getElementById('degree').value;
		if(course=='B tech')
			document.getElementById('dept_btech').style.display='inline';
		if(course=='M tech')
			document.getElementById('dept_mtech').style.display='inline';
		if(course=='B Sc')
			document.getElementById('dept_bsc').style.display='inline';
		if(course=='M Sc')
			document.getElementById('dept_msc').style.display='inline';
	}
        </script>    
</head>
<body onload='first()'>

        <header id=\"header_main\">
        </header>
        <nav id=\"navigation\">

        </nav>
        <div id=\"big_wrapper\">



        <section>
	<p>
	<select id='user_type' onchange='optgroup()' name='user_type'>
	<optgroup label='Choose user type'>
	<option>-------</option>
	<option>Student</option>
	<option>Admin</option>
	<optgroup>
	</select>
	</p>
	
	<div id='student_portal'>
        <form method='post' action='./signup.php'>
        <div>
        <p>
        Name:
        <input type='text' id='name' name='name' placeholde='Name'/>
        </p>
        <br/>
        <p>
        Enter Username:
        <input type='text' id='username' name='username' placeholder='username'/>
        </p>
        <br/>
        <p>
        Enter the password:
        <input type='password' id='password' name='password'/>
        </p>
        <br/>
        <p>
        Reenter Password:
        <input type='password' id='repassword' name='repassword'/>
        </p>
	<br/>
 	<p>
        DOB:
	<input type='text' name='DOB' id='DOB'/>
	</p>
	<br/>
	<p>
	YoP:
	<input type='text' name='YoP' id='YoP'/>
	</p>
	<br/>
	<p>
	Choose degree:
	<select id='degree' name='degree' onchange='select_department()' >
	<option>-------</option>
	<option>B tech</option>
	<option>M tech</option>
	<option>B Sc</option>
	<option>M Sc</option>
	</select>
	</p>
	<p>

	<div id='dept_btech' style='display:none;'>
	Choose Department:
	<select id='department' name='department'>
	<option>Computer Science</option>
	<option>Electrical</option>
	<option>Electronics and Communication</option>
	<option>Instrumentation and Control</option>
	<option>Mechanical </option>
	<option>Metallurgy</option>
	<option>Production</option>
	<option>Chemical</option>
	<option>Civil</option>

	</select>
	</div>
	
	<div id='dept_mtech'>
	Choose Department:
	<select id='department' name='department'>
	<option>Fire and Safety</option>
	<option>Electrical</option>
	<option>Chemical</option>
	<option>Aerospace</option>

	</select>
	</div>

	<div id='dept_bsc'>
	Choose Department:
	<select id='department' name='department'>
	<option>Physics</option>
	<option>Chemistry</option>
	<option>Maths</option>

	</select>
	</div>

	<div id='dept_msc'>
	Choose Department:
	<select id='department' name='department'>
	<option>Pysics</option>
	<option>Chemistry</option>
	<option>Botany</option>
	<option></option>

	</select>
	</div>

	</p>
        </div>
        <br/>
        <input type='submit' value='Register'/>
	<p>
	
	</p>
        </form>

	</div>
	<div id='admin_portal'>
	<form method='post' action='./signup.php'>
        <p>
        Name:
        <input type='text' id='name' name='name' placeholder='Name'/>
        </p>
        <br/>
        <p>
        Enter Username:
        <input type='text' id='username' name='username' placeholder='username'/>
        </p>
        <br/>
        <p>
        Enter the password:
        <input type='password' id='password' name='password'/>
        </p>
        <br/>
        <p>
        Reenter Password:
        <input type='password' id='repassword' name='repassword'/>
        </p>
	<div>
	<br/>
	Choose department:
	<select name='select_department_f' id='select_department_f'>
	<option>-------</option>
	<option>Computer Science</option>
	<option>Electrical</option>
	<option>Electronics and Communication</option>
	<option>Instrumentation and Control</option>
	<option>Mechanical </option>
	<option>Metallurgy</option>
	<option>Production</option>
	<option>Chemical</option>
	<option>Civil</option>
	<option>Fire and Safety</option>
	<option>Electrical</option>
	<option>Chemical</option>
	<option>Aerospace</option>
	<option>Physics</option>
	<option>Chemistry</option>
	<option>Maths</option>
	<option>Botany</option>
	</select>
	</div>	

	<input type='submit' value='register'/>
	</form>

	<div>


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

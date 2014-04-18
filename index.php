<?php

session_start();


//if(isset($_SESSION["user_id"]))

echo "

<!DOCTYPE html PUBLIC>
<html>
<head>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"profile.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"footer.css\" />
    	<title>University Ranking System</title>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"styling.css\" />
    	<script type=\"text/javascript\">

    	</script>    
</head>
<body >

        <header id=\"header_main\">
        </header>
        <nav id=\"navigation\">

        </nav>
	<div id=\"big_wrapper\">



        <section>
	<div id='section_left'>
	<p>Student Login:</p><hr/><br/>
	<form method='POST' action='signin.php'>
	<p>Username</p>
	<input type='text' name='username'/>
	<p>Password</p>
	<input type='password' name='password' id='password'/>
	<br/>
	<input type='submit' value='Signin'/>
	</form>
	<div id='signup'>
	<form method='post' action='signup/signup.php'/>
	<input type='submit' value='Register'/>
	</form>
	</div>
	</div>

	<div id='section_right'>
	<div>
	<p>Faculty Login:</p><hr/><br/>
	<form method='POST' action='signin_f.php'>
        <p>Username</p>
        <input type='text' name='username'/>
        <p>Password</p>
        <input type='password' name='password' id='password'/>
        <br/>
        <input type='submit' value='Login'/>
        </form>

	</div>
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


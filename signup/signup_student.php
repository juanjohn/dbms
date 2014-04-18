<?php

echo "

<!DOCTYPE html PUBLIC>
<html>
<head>
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../profile.css\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"../footer.css\" />
        <title>University Ranking System</title>
        <link type=\"text/css\" rel=\"stylesheet\" href=\"../styling.css\" />
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
	<input type='text' id='password' name='password'/>
	</p>
	<br/>
	<p>
	Reenter Password:
	<input type='text' id='repassword' name='repassword'/>
	</p>
	</div>
	<br/>
	<input type='submit' value='Register'/>
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

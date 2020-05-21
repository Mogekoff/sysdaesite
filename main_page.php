<!DOCTYPE html>
<html>
<head>
	<title>SYSTEM DAEMON</title>
	<link id="favicon" rel="icon" href="img/favicon.gif">
	<link rel="stylesheet" type="text/css" href="main_page.css">
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta name="description" content="Main page">
	<meta name="keywords"content="hack,c++,virus">
	<meta name="author" content="systemdaemon">
	<?php 
		require_once("php/db.php"); 
		require_once("php/funcs.php"); 
	?>

</head>
<body>

	<header>
		<a href="main_page.php"><img width=75px height=75px src="img/logo.png"></a>
		
		<h1>System Daemon</h1>
		
	</header>
	
	<section>
		<nav>
		    <ul>
		    	<li><a href="main_page.php">main page</a></li>
		    	<li><a href="forum.html">forum</a></li>		    	
		    	<li><a href="gallery.html">gallery</a></li>
		    	<li><a href="downloads.html">downloads</a></li>
		    	<li><a href="about.html">about</a></li>
			</ul>
		</nav>  
	  
	  	<article>
	    	<h1>Зло Пожаловать</h1>
	    	<?php 
	    		
				$result = GetPosts();

				
				echo "<table>\n";
				while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
				    echo "\t<tr>\n";
				    foreach ($line as $col_value) {
				        echo "\t\t<td>$col_value</td>\n";
				    }
				    echo "\t</tr>\n";
				}
				echo "</table>\n";
	    	?>
	  	</article>

	</section>

	
	<footer>
		<address>
			<p>
				e-mail: 
				<a href="mailto:admin@systemdaemon.tk">admin@systemdaemon.tk</a>
				| telegram:
				<a href="tg:@sysdae">@sysdae</a>
			</p>

		</address>
	  	
	</footer>



</body>
</html>
<!DOCTYPE html>
<html>
	<head>
		<title>PHP Test</title>
	</head>
	<body>
		<?php
		$webadmins_info = array("Sal", "Calgary Cowboy", "Alberta", "Web Admin, programming hobbiest, and math tutor.");
		?>
		<!-- Info From Array --> 
		<ul>
			<li><?php echo $webadmins_info[0];?></li>
			<li><?php echo $webadmins_info[1];?></li>
			<li><?php echo $webadmins_info[3];?></li>
			<li><?php echo $webadmins_info[2];?></li>
		</ul>
		<?php
			//echo $webadmins_info[0];
			//print("<br>");
			//echo $webadmins_info[6];
			//print("<br>");
			
			/* 
			   When using the date() method php has to be given the time zone.
			   The following method takes a string that locates th server.
			   A list of supported time zones can be found at
			   http://php.net/manual/en/timezones.php
			*/
			date_default_timezone_set('Canada/Mountain');
			
			/* You can get todays date by using the date() method as follows:
			   The format specifiers and place holders for the date() method can be found at
			   http://php.net/manual/en/function.date.php
			   j = Day of the month without leading zeros - 1 to 31
			   F = A full textual representation of a month, such as January or March - January through December
			   D = A textual representation of a day, three letters	- Mon through Sun
			   Y = A full numeric representation of a year, 4 digits - Examples: 1999 or 2003
			*/
			$today = date('D F j, Y'); //Grabbing and formatting the date
			$current_year = date('Y');

			/* Formatting the time 
			   a = Lowercase Ante meridiem and Post meridiem - am or pm
			   g = 12-hour format of an hour without leading zeros - 1 through 12
			   i = Minutes with leading zeros - 00 to 59
			*/
			$time  = date('g:i:s a');
		 	
			define("TITLE", "Hello Everyone, Meet the WebAdmin:<br>"); // Defining a constant
			
			$my_name = "Sal";
			$birth_year = 1960;
			// Calculations
			$my_age = ($current_year - $birth_year);

			echo TITLE;
		?>
		<img src="../images/thumbs/OldDwayne.jpg" alt="Characature of Sal" style="float: left, top" />
		<?php
			//print('This year, '); 
			//echo $current_year;
			//print(', ');
			echo $my_name;
		?>
		<br>
		<?php
			//echo $my_age;
			//print(' years old.<br><br>');
			print('Current time is ');
			echo $today;
			print(' ');
			echo $time;
		?>
		<br>
		<small>&copy;<?php echo $current_year;?>-<?php echo $my_name; ?></small>
	</body>
</html>

<?php
$newTime = "";
$errors = [ ];

if (! empty ( $_POST )) {
	
	$year = isset ( $_POST ['year'] ) ? $_POST ['year'] : '';
	$month = isset ( $_POST ['month'] ) ? $_POST ['month'] : '';
	$day = isset ( $_POST ['day'] ) ? $_POST ['day'] : '';
	$hour = isset ( $_POST ['hour'] ) ? $_POST ['hour'] : '';
	$minute = isset ( $_POST ['minute'] ) ? $_POST ['minute'] : '';
	$seconds = isset ( $_POST ['seconds'] ) ? $_POST ['seconds'] : '';
	
	$errors = [ ];
	if (empty ( $year ) || empty ( $day ) || empty ( $month ) || empty ( $hour ) || empty ( $seconds ) || empty ( $minute )) {
		$errors [] = 'Fields are mandatory';
	}
	if (! is_numeric ( $year )) {
		$errors [] = 'Year must be numeric';
	}
	
	if (! is_numeric ( $month ) || $month > 12 || $month < 0) {
		$errors [] = 'Month must be numeric with value between 1 and 12';
	}
	
	if (! is_numeric ( $day ) || $day > 31 || $day < 0) {
		$errors [] = 'Day must be numeric with value between 1 and 31';
	}
	
	if (! is_numeric ( $hour ) || $hour > 24 || $hour < 0) {
		$errors [] = 'Hour must be numeric with value between 0 and 24';
	}
	
	if (! is_numeric ( $minute ) || $minute > 60 || $minute < 0) {
		$errors [] = 'Minutes must be numeric with value between 0 and 60';
	}
	
	if (! is_numeric ( $seconds ) || $seconds > 60 || $seconds < 0) {
		$errors [] = 'Seconds must be numeric with value between 0 and 60';
	}
	
	$yearIncr = isset ( $_POST ['yearIncr'] ) ? $_POST ['yearIncr'] : 0;
	$monthIncr = isset ( $_POST ['monthIncr'] ) ? $_POST ['monthIncr'] : 0;
	$dayIncr = isset ( $_POST ['dayIncr'] ) ? $_POST ['dayIncr'] : 0;
	$hourIncr = isset ( $_POST ['hourIncr'] ) ? $_POST ['hourIncr'] : 0;
	$minuteIncr = isset ( $_POST ['minuteIncr'] ) ? $_POST ['minuteIncr'] : 0;
	$secondsIncr = isset ( $_POST ['secondsIncr'] ) ? $_POST ['secondsIncr'] : 0;
	
	if (! is_numeric ( $yearIncr ) || ! is_numeric ( $monthIncr ) || ! is_numeric ( $dayIncr ) || ! is_numeric ( $hourIncr ) || ! is_numeric ( $minuteIncr ) || ! is_numeric ( $secondsIncr )) {
		$errors [] = "You can add numbers only";
	}
	
	if (empty ( $errors )) {
		$newTs = mktime ( $hour + $hourIncr, $minute + $minuteIncr, $seconds + $secondsIncr, $month + $monthIncr, $day + $dayIncr, $year + $yearIncr );
		
		$ts = time ();
		
		$newTime = date ( 'Y-m-d H:i:s', $newTs );
	}
}

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>

</head>
<style>
#firstSection {
	width: 40%;
	float: left;
	margin-left: 8em;
}

#secondSection {
	width: 40%;
	float: left;
}

#button {
	margin-left: 21.5em;
}

#container {
	border: 3px solid grey;
	width: 50em;
	height: 25em;
	padding: 3em;
}

#resultFormat {
	width: 40%;
	float: left;
	padding: 1em;
	border: 1px solid grey;
}

#resultData {
	width: 40%;
	float: left;
	padding: 1em;
	border: 1px solid grey;
}

#result {
	margin-left: 2.5em;
}
</style>

<body>


<?php foreach ($errors as $error):?>

			<h3 style="color: red;"><?= $error?> </h3>
			
		<?php endforeach;?>



<form action="" method="POST">
		<div id="container">

			<div id="firstSection">
				<h1>Input data</h1>
				<div id="year">
					<input type="text" name="year" placeholder="Enter year" />
				</div>
				<br>

				<div id="month">
					<input type="text" name="month" placeholder="Enter month" />
				</div>
				<br>

				<div id="day">
					<input type="text" name="day" placeholder="Enter day" />
				</div>
				<br>

				<div id="hour">
					<input type="text" name="hour" placeholder="Enter hour" />
				</div>
				<br>

				<div id="minute">
					<input type="text" name="minute" placeholder="Enter minute" />
				</div>
				<br>

				<div id="seconds">
					<input type="text" name="seconds" placeholder="Enter seconds" />
				</div>
				<br>

			</div>

			<div id="secondSection">
				<h1>Data for increase</h1>
				<div id="yearIncr">
					<input type="text" name="yearIncr" placeholder="Enter year" />
				</div>
				<br>

				<div id="monthIncr">
					<input type="text" name="monthIncr" placeholder="Enter month" />
				</div>
				<br>

				<div id="dayIncr">
					<input type="text" name="dayIncr" placeholder="Enter day" />
				</div>
				<br>

				<div id="hourIncr">
					<input type="text" name="hourIncr" placeholder="Enter hour" />
				</div>
				<br>

				<div id="minuteIncr">
					<input type="text" name="minuteIncr" placeholder="Enter minute" />
				</div>
				<br>

				<div id="secondsIncr">
					<input type="text" name="secondsIncr" placeholder="Enter seconds" />
				</div>
				<br>


			</div>

			<div id="button">
				<input type="submit" value="Calculate" />
			</div>

			<div id="result">
				<h3 id="resultFormat">Data format:YYYY-MM-DD H:i:S</h3>

				<h3 id="resultData">New date:<?=$newTime ?></h3>
			</div>

		</div>
	</form>



</body>
</html>
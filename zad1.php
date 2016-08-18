
<?php
$message = '';
$errors = [ ];

if (! empty ( $_POST )) {
	
	$year = isset ( $_POST ['year'] ) ? $_POST ['year'] : '';
	$month = isset ( $_POST ['month'] ) ? $_POST ['month'] : '';
	$day = isset ( $_POST ['day'] ) ? $_POST ['day'] : '';
	
	$errors = [ ];
	
	if (empty ( $year ) || empty ( $day ) || empty ( $month )) {
		$errors [] = 'Fields are empty!';
	}
	if (! is_numeric ( $year )) {
		$errors [] = 'Invalid year!';
	}
	
	if (! is_numeric ( $month ) || $month > 12 || $month < 0) {
		$errors [] = 'Invalid month!';
	}
	
	if (! is_numeric ( $day ) || $day > 31 || $day < 0) {
		$errors [] = 'Invalid day!';
	}
	
	if (empty ( $errors )) {
		
		$isValid = checkdate ( $month, $day, $year );
		
		if ($isValid) {
			$message = "Data is valid!";
		} 

		else {
			$message = "Date is invalid!";
		}
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
#container {
	border: 2px solid grey;
	width: 11em;
	height: 9em;
	padding: 2em;
	margin-left: 30em;
	margin-top: 3em;
}

#button {
	margin-left: 3.5em;
	margin-top: 1em;
}

#error {
	color: red;
	margin-left: 15.5em;
}

#message {
	color: green;
	margin-left: 15.5em;
}
</style>
<body>

<?php foreach ($errors as $error):?>

			<h1 id="error"><?= $error?> </h1>
			
		<?php endforeach;?>
		
			<h1 id="message"><?= $message?></h1>

	<div id="container">
		<form action="" method="POST">

			<div id="year">
				<input type="text" placeholder="Enter year" name="year" />
			</div>
			<br>

			<div id="month">
				<input type="text" placeholder="Enter month" name="month" />
			</div>
			<br>

			<div id="day">
				<input type="text" placeholder="Enter day" name="day" />
			</div>
			<br>

			<div id="button">
				<input type="submit" value="Check" />
			</div>

		</form>
	</div>

</body>
</html>
\ No newline at end of file
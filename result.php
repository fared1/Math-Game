<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Math Game</title>
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>   
</head>
<body>
	
</body>
</html>

<?php

    $hasil = $_SESSION['hasil'];
    $jawaban = $_POST['jawaban'];

        if($jawaban == $hasil){
            $_SESSION['Scores'] = $_SESSION['Scores'] + 10;
?>
		<div style="text-align: -webkit-center;">
			<div class="container pt-4">
				<h1>[ Hello <?php echo $_SESSION['Nama']; ?>, Selamat jawaban anda benar!!! ]</h1>
				<h1>|| Lives : <?php echo $_SESSION['lives']; ?> || Skor : <?php echo $_SESSION['Scores'] ?> ||</h1>
				<a href="game.php" class="btn btn-danger">Next</a>
			</div>
		</div>
<?php
	}else{
			$_SESSION['Scores'] = $_SESSION['Scores'] - 2;
            $_SESSION['lives'] = $_SESSION['lives'] - 1;
?>
		<div style="text-align: -webkit-center;">	
			<div class="container pt-4">
				<h1>[ Hello <?php echo $_SESSION['Nama']; ?>,Sayang jawaban anda salah, Tetap semangat!!! ]</h1>
				<h1>|| Lives : <?php echo $_SESSION['lives']; ?> || Skor : <?php echo $_SESSION['Scores'] ?> ||</h1>
				<a href="game.php" class="btn btn-danger">Next</a>
			</div>
		</div>
<?php

        }
?>

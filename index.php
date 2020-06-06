<?php
    session_start();
    $_SESSION['Scores'] = 0;
    $_SESSION['lives'] = 5;   
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
<?php
	if (isset($_SESSION["Email"])) {
?>
<div style="text-align: -webkit-center;">
    <div class="container pt-4">
        Hallo <?php echo $_SESSION["Nama"]; ?>, Selamat datang kembali di permainan ini!!! <br><br>
        <center><a href="game.php" class = "btn btn-danger">Start Game</a><center> <br> <br>
        <a href="reset.php" class = " btn btn-warning">CLICK HERE</a> BUKAN ANDA ?
    </div>
</div>

<?php

	} else {

?>
    <div style="text-align: -webkit-left;">
        <div class="container pt-4">
            <form action="game.php" method="post">
                <h4>Masukkan Nama :</h4>
                    <table>
                        <tr>
                        <td>Nama : </td>
                        <td><input type="text" placeholder="Masukkan Nama anda" name="Nama"required></td>
                        </tr>	
                        <tr>
                        <td>Email : </td>
                        <td><input type="email" placeholder="Masukkan Email anda" name="Email"required></td>
                        </tr>					
                    </table>  
            <input type="submit" name="mulai" value="Mulai"/>   
            </form>
        </div>
    </div>
<?php
    }
?>
</body>
</html>

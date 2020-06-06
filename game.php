<?php
    session_start();

    
    if(isset($_SESSION['Nama'])){
    } else {
        $_SESSION['Nama'] = $_POST['Nama'];
        $_SESSION['Email'] = $_POST['Email'];

    }

    $lives = $_SESSION['lives'];
    $Scores = $_SESSION['Scores'];

    if($lives == 0){
        header('Location: gameover.php');

    } else {
        $a1 = rand(1,20);
        $a2 = rand(1,20);
        
        $_SESSION['hasil'] = $a1 + $a2;
    }
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
<div style="text-align: -webkit-left;">
    <form action="result.php" method="post">
        <div class="container pt-4">
            <h1>[ Hi !<?php echo $_SESSION['nama']; ?>, Semangat You Can Do The Best!!! ]</h1>
            <h1>|| Lives : <?php echo $_SESSION['lives']; ?> || Skor : <?php echo $_SESSION['Scores']; ?> || </h1> 
            <h2>Berapakah </h2>
            <h2 class="display-4"><?php echo $a1; echo '+'; echo $a2 ?> = ... ?</h2>
            <input type="number" name="jawaban" class="form-control mb-3" placeholder="Masukkan jawaban anda" autocomplete="off" required>
            <center><button type="submit" class="btn btn-danger" name="btnJawab">Jawab</button><center>
        </div>
    </form>
</div>
</body>
</html>
<?php
include 'koneksi.php';
$db = new crud();
    session_start();

    $Nama = $_SESSION['Nama'];
    $lives = $_SESSION['lives'];
    $Scores = $_SESSION['Scores'];
    $Email = $_SESSION['Email'];
    $db->insertdata($Nama, $Email, $Scores);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Math Game</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src=" https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container pt-4">
        <center><h1>Wahh <?php echo $_SESSION['nama'] ?>, Permainan sudah selesai</h1><center>
        <h1>Skor Anda : <?php echo $_SESSION['Scores'] ?></h1>
        <a href="index.php" class="btn btn-success">Main Lagi ?</a>
        <hr>
        <h2><center>Hall of Fame<center></h2>
        <table class='table'>
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Skor</td>
                </tr>
            </thead>
            <tbody>
                <?php
                $q = mysqli_query($db->con, "select * from hasil order by Scores desc limit 10");
                $no = 0;
                while($dt = mysqli_fetch_array($q)){
                    $no += 1;
                    echo "<tr>";
                    echo "<td>$no</td>";
                    echo "<td>".$dt['Nama']."</td>";
                    echo "<td>".$dt['Scores']."</td>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>

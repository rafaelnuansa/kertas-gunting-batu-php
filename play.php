<?php
session_start();

if(isset($_GET['exit']) == 1){
session_destroy();
header('Location: play.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kertas Gunting Batu</title>
    <?php include('assets/css.php');?>
</head>
       
<body>
    <div class="container">
        <div class="col-lg-8 mx-auto p-3 py-md-5">
            <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <span class="fs-4">Kelompok 2 Algoritma Pemrograman</span>
                </a>
            </header>

            <main>
                <?php 
                $playerName = $_POST['playerName'];?>
                <h1>Hallo, <?php echo $playerName;?></h1>
                <p class="fs-5 col-md-8">Pilih 📝Kertas, ✂️Gunting, atau 🗿Batu?</p>

                <form class="row g-3" action="result.php" method="POST">
                 <div class="col-md-10">
                <input type="hidden" name="playerName" value="<?php echo $playerName;?>">
                 <select name="playerturn" class="form-select form-select-lg mb-3"
                        aria-label=".form-select-lg example">
                        <option selected>Pilihan</option>
                        <option value="📝Kertas">📝Kertas</option>
                        <option value="✂️Gunting">✂️Gunting</option>
                        <option value="🗿Batu">🗿Batu</option>
                    </select>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-primary" style="font-size:22px;font-weight:bold">Play!</button>
                    </div>
                </form>
            </main>
            
            <a href="index.php?exit=1" class="btn btn-danger"> Keluar ah!</a>
            <footer class="pt-5 my-5 text-muted border-top">
                Algoritma dan Pemrograman (Ma’shum Abdul Jabbar, S.Kom, M.T.I)<br>
                Created for Alpro Universitas Djuanda 2022
            </footer>
        </div>
    </div>

    <?php include('assets/js.php');?>
</body>

</html>
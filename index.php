<?php
session_start();

if(isset($_GET['exit']) == 1){
session_destroy();
header('Location: index.php');
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

<?php
    if (isset($_POST['Submit'])) {
        $_SESSION['username'] = $_POST['username'];

        // Use the following code to print out the variables.
        echo 'Session: '.$_SESSION['username'];
        echo '<br>';
        echo 'POST: '.$_POST['playerName'];
    }
?> 
    <div class="container">
        <div class="col-lg-8 mx-auto p-3 py-md-5">
            <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
                <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                    <span class="fs-4">Kelompok 2 Algoritma Pemrograman</span>
                </a>
            </header>

            <main>
                <h1>Kertas Gunting Batu</h1>
                <p class="fs-5 col-md-8">Mari Bermain Kertas Gunting Batu</p>
                <p>
                    <ul>
                        <li>Rafael Nuansa Ramadhon</li>
                        <li>M Fajar Hikmatullah</li>
                        <li>Ari Permana Agung</li>
                        <li>Mip Saripudin</li>
                        <li>Jihan Fachrani</li>
                    </ul>
                </p>
                <form class="row g-3" action="play.php" method="POST">

                    <div class="col-auto">
                        <label for="PlayerName" class="visually-hidden">Player Name</label>
                        <input name="playerName" type="text" class="form-control" id="PlayerName" placeholder="Player">
                    </div>
                    <div class="col-auto">
                        <button type="submit" name="submit" class="btn btn-primary mb-3">Gas!!</button>
                    </div>
                </form>

                
                <hr class="col-3 col-md-2 mb-5">

            </main>

            <footer class="pt-5 my-5 text-muted border-top">
                Algoritma dan Pemrograman (Ma’shum Abdul Jabbar, S.Kom, M.T.I)<br>
                Created for Alpro Universitas Djuanda 2022
            </footer>
        </div>
    </div>

    <?php include('assets/js.php');?>
</body>

</html>
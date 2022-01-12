<?php
// Start the session
session_start();
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
                <p class="fs-5 col-md-8">Pilih 📝Kertas, ✂️Gunting, atau 🗿Batu?</p>
                <?php $playerName = $_POST['playerName'];?>
                <?php
if(empty($_SESSION['your_win'])  &&
    empty($_SESSION['cpu_win'])  &&  
   empty($_SESSION['draw'])     ){
    $_SESSION['your_win'] = 0;
    $_SESSION['cpu_win'] = 0;
    $_SESSION['draw'] = 0;
    //Printing the initiation of session variables for your reference
    // echo $_SESSION['your_win']; 
    // echo $_SESSION['cpu_win'];
    // echo $_SESSION['draw'] ;
}
    $playerturn = $_POST['playerturn'];
    $rpc= array('🗿Batu', '📝Kertas', '✂️Gunting');
    $rndm= rand(0,2);
    $Computer=$rpc[$rndm];

    echo '<h2>'.$playerName.' Memilih: '.$playerturn.'</h2>';
    echo '<br />';
    echo '<h2>Komputer Memilih : '. $Computer .'</h2>';
  echo '<br />';  
    if ($playerturn == $Computer){
        $_SESSION['draw']+=1;
        echo "Skor ".$playerName." :".$_SESSION['your_win']."<br>";
        echo "Skor Komputer:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo '<h1>Ciee Samaan jadi draw!</h1>';
    }
    else if($playerturn == '🗿Batu' && $Computer == '✂️Gunting'){
        $_SESSION['your_win']+=1;
        echo "Skor ".$playerName." :".$_SESSION['your_win']."<br>";
        echo "Skor Komputer:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo '<h1>'.$playerName.' Menang!</h1>';
}
    else if($playerturn == '🗿Batu' && $Computer == '📝Kertas'){
        $_SESSION['cpu_win']+=1;
        echo "Skor ".$playerName." :".$_SESSION['your_win']."<br>";
        echo "Skor Komputer:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo  '<h1>'.$playerName.'kalah</h1>';
}
    else if($playerturn == '✂️Gunting' && $Computer == '🗿Batu'){
        $_SESSION['cpu_win']+=1;
        echo "Skor ".$playerName." :".$_SESSION['your_win']."<br>";
        echo "Skor Komputer:".$_SESSION['cpu_win']."<br>" ; 
        echo "DRAW:".$_SESSION['draw']."<br>"; 
        echo '<h1>'.$playerName.' Kalah!</h1>' ;
}
    else if($playerturn == '✂️Gunting' && $Computer == '📝Kertas'){
        $_SESSION['your_win']+=1;
        echo "Skor ".$playerName." :".$_SESSION['your_win']."<br>";
        echo "Skor Komputer:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";   
        echo '<h1>'.$playerName.' Menang!</h1>' ;
}
    else if($playerturn == '📝Kertas' && $Computer == '🗿Batu'){
        $_SESSION['your_win']+=1;
        echo "Skor ".$playerName." :".$_SESSION['your_win']."<br>";
        echo "Skor Komputer:".$_SESSION['cpu_win']."<br>" ;
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo '<h1>'.$playerName.' Menang!</h1>' ;
}
    else if($playerturn == '📝Kertas' && $Computer == '✂️Gunting'){
        $_SESSION['cpu_win']+=1;
        echo "Skor ".$playerName." :".$_SESSION['your_win']."<br>";
        echo "Skor Komputer:".$_SESSION['cpu_win']."<br>" ; 
        echo "DRAW:".$_SESSION['draw']."<br>";
        echo '<h1>'.$playerName.' Kalah!</h1>' ;
}
?>

            </main>
            <hr>
            <br>
            <form class="row g-3" action="play.php" method="POST">
                <input type="hidden" name="playerName" value="<?php echo $playerName;?>">
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary"
                        style="font-size:22px;font-weight:bold">Ulangi!</button>
                </div>
            </form>
            <br>
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
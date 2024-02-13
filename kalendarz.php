<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mój kalendarz</title>
    <link href="styl5.css" rel="stylesheet">
</head>
<body>
    <div class="baner1">
        <img src="logo1.png" alt="Mój organizer">
    </div>
    <div class="baner2">
        <h1>KALENDARZ</h1>
        <?php
        $lacz = mysqli_connect('localhost','root','','egzamin6');
        $pyt = "SELECT `miesiac`,`rok` FROM `zadania` WHERE `dataZadania` ='2020-07-13';";
        $wyn = mysqli_query($lacz, $pyt);
        while($row = mysqli_fetch_array($wyn)){
            echo "<h3>miesiąc: ".$row[0].", rok: ".$row[1]."</h3>";
        }
        mysqli_close($lacz);
        ?>
    </div>
    <div class="główny">
        <?php
        $lacz = mysqli_connect('localhost','root','','egzamin6');
        $pyt = "SELECT `dataZadania`,`wpis` FROM `zadania` WHERE `miesiac` = 'lipiec';";
        $wyn = mysqli_query($lacz, $pyt);
        while($row = mysqli_fetch_array($wyn)){
            echo '<div class="dane">';
            echo "<h5>".$row[0]."</h5>";
            echo "<p>".$row[1]."</p>";
            echo "</div>";
        }
        mysqli_close($lacz);
        ?>
    </div>
    <div class="stopka">
    <form action="kalendarz.php" method="post">
            Dodaj wpis: <input type="text" name="txt">
            <input type="submit" value="DODAJ">
        </form>
        <p>Stronę wykonał: Martyna Borowska</p>
    </div>
</body>
</html>
<?php
        $txt = $_POST['txt'];
        $lacz = mysqli_connect('localhost','root','','egzamin6');
        $pyt = "UPDATE `zadania` SET `wpis`='$txt' WHERE `dataZadania` = '2020-07-13';";
        $wyn = mysqli_query($lacz, $pyt);
        mysqli_close($lacz);
        ?>
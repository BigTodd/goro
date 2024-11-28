<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filmoteka</title>
    <link rel="shortcut icon" href="klaps.png" type="image/x-icon">
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <main>
        <header>
            <img src="klaps.png" alt="klaps">
            <h1>FILMOTEKA</h1>
        </header>
        <article>
            <h3>Wybrane filmy: </h3>
            <?php

            ?>
            <hr>
        </article>
    </main>
    <aside>
        <form action="" class="nav">
            <div class="row1">
                <button class="button" id="horror"><h2>Horror</h2></button>
                <button class="button" id="dramat"><h2>Dramat</h2></button>
            </div>
            <div class="row2">
                <button class="button" id="scifi"><h2>Sci-Fi</h2></button>
                <button class="button" id="komedie"><h2>Komedie</h2></button>
            </div>
        </form>
        <form action="wyk.php" class="form" method="POST">
            <input type="text" name="title" placeholder="Tytuł">
            <input type="number" name="year" placeholder="Rok premiery">
            <input type="number" name="ocena" placeholder="Ocena">
            <label for="gatunki">Gatunek</label>
            <select name="gatunki">
                <?php
                    $con = mysqli_connect("localhost", "root", "", "baziq");
                    $skl = "SELECT id, nazwa FROM gatunki";
                    $res = mysqli_query($con, $skl);
                    while($wyn = mysqli_fetch_assoc($res)){
                        echo "<option value={$wyn['id']}>{$wyn['nazwa']}</option>";
                    }
                ?>
            </select>
            <label for="director">Reżyser</label>
            <select name="director">
                <?php
                    $con = mysqli_connect("localhost", "root", "", "baziq");
                    $skl = "SELECT id, imie, nazwisko FROM rezyserzy";
                    $res = mysqli_query($con, $skl);
                    while($wyn = mysqli_fetch_assoc($res)){
                        echo "<option value={$wyn['id']}>{$wyn['imie']} {$wyn['nazwisko']}</option>";
                    }
                ?>
            </select>
            <button class="but2">ZATWIERDŹ</button>
        </form>
        <footer>
            <p>Autor: Yours truly</p>
        </footer>
    </aside>
</body>
</html>
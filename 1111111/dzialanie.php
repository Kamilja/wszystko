<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sprawdzian Kamil Kapustka</title>
    <link rel="stylesheet" href="styl3.css">
</head>
<body>
    <section class="baner">
        <h1>Sprawdzian Aplikacje Desktopowe i Mobilne</h1>
        <h2>Dane</h2>
        <ol>
            <li>Bazy danych</li>
            <li>HTML</li>
            <li>CSS</li>
            <li>PHP</li>
            <li>JavaScript</li>
        </ol>
    </section>
    <section class="lewy">
       <?php
       $polaczenie=mysqli_connect('localhost','root','','egzamin');
       if ($polaczenie){
       }
       if($_SERVER["REQUEST_METHOD"]=="POST"){
        $maisto=$_POST['miasto'];
        $zapytanie="select nazwa, ulica from kwiaciarnie where miasto like $miasto";
        
       mysqli_close($polaczenie);
       ?>
    </section>
    <section class="prawy">
        <ul>
            <li><!--cos--></li>
        </ul>
    </section>
    <section class="wpisy">
        <!--cos-->
    </section>
    <section class="stopka">
        Strone przygotował Kamil Kapustka
    </section>
</body>
</html>
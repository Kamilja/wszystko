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
        <h2>Strona dla miłośników kwiatów</h2>
        <form action="dzialanie.php" method="post">
            <label for="miasto" id="miasto">Podaj nazwe miasta</label>
            <input type="text" id="miasto"><br>
            <input type="submit" value="Sprawdź">
        </form>
    </section>
    <section class="prawy">
        <button><a href="dzialanie.php">Dzialanie</a></button>
    </section>
    <section class="wpisy">
        <h2>Nasze zdjęcia</h2>
        <!--cos-->
        <h2>Matematycy</h2>
        <form action="dzialanie.php" method="get">
            <label for="imie" id="imie">Imie</label>
            <input type="text" id="imie"><br>
            <label for="nazwisko" id="nazwisko">Nazwisko</label>
            <input type="text" id="nazwisko"><br>
            <label for="rok" id="rok">Rok urodzenia</label>
            <input type="number" id="rok"><br>
            <label for="liczba" id="liczba">Liczba publikacji</label>
            <input type="number" id="liczba"><br>
            <input type="submit" value="Zapisz">
        </form>
    </section>
    <section class="stopka">
        Strone przygotował Kamil Kapustka
    </section>
</body>
</html>
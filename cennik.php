<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Cennik</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <img src="galeria_samochody/logo.jpg " width="930" height="112" alt="blad">
            </div>
        </div>
        </br>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <center>
                    <a href="index.php"><font color="gray"><h4>Home</h4></font></a>
                </center>
            </div>
            <div class="col-md-2">
                <center>
                    <a href="cennik.php"><font color="gray"><h4>Cennik</h4></font></a>
                    <center>
            </div>
            <div class="col-md-2">
                <center>
                    <a href="galeria.php"><font color="gray"><h4>Menu</h4></font></a>
                </center>
            </div>
            <div class="col-md-2">
                <center>
                    <a href="opinia.php"><font color="gray"><h4>Opinie</h4></font></a>
                </center>
            </div>
            <div class="col-md-2">
                <center>
                    <a href="kontakt.php"><font color="gray"><h4>Kontakt</h4></font></a>
                </center>
            </div>
            <div class="col-md-1"></div>
        </div>
    </br></br>
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <center><h2>SAMOCHODY W NASZEJ OFERCIE</h2></center>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8  offset-md-2">
                <?php
                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "samochody";

                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT klucz, marka, model, moc, 1_przejazd, 3_przejazdy, 1_godzina FROM samochody";
                    $result = $conn->query($sql);
                    echo "<table class=\"table table-dark\"><thead>";


                    if ($result->num_rows > 0) {
                        echo "<tr></tr><th scope=\"col\">#</th></th><th scope=\"col\">Marka</th><th scope=\"col\">Model</th><th scope=\"col\">Moc</th><th scope=\"col\">1 przejazd</th><th scope=\"col\">3 przejazdy</th><th scope=\"col\">1 godzina</th></tr>";
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>" . $row["klucz"]. "</td><td>" . $row["marka"]. "</td><td>" . $row["model"]. "</td><td>" . $row["moc"]. "</td><td>". $row["1_przejazd"]. "</td><td>". $row["3_przejazdy"]. "</td><td>". $row["1_godzina"]. "</td></tr>";
                        }
                        echo "   </tbody></table>";
                    } else {
                        echo "0 results";
}
                        $conn->close();
                        ?>
            </div>
        </div>
        </br></br>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                Czym jest Lorem Ipsum?
                Lorem Ipsum jest tekstem stosowanym jako przykładowy wypełniacz
                w przemyśle poligraficznym. Został po raz pierwszy użyty w XV w.
                przez nieznanego drukarza do wypełnienia tekstem próbnej książki.
                Pięć wieków później zaczął być używany przemyśle elektronicznym,
                pozostając praktycznie niezmienionym. Spopularyzował się w latach 60.
                XX w. wraz z publikacją arkuszy Letrasetu, zawierających fragmenty Lorem Ipsum,
                a ostatnio z zawierającym różne wersje Lorem Ipsum oprogramowaniem przeznaczonym do
                realizacji druków na komputerach osobistych, jak Aldus PageMaker.</br></br>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12"><center>2018 Auto wypożyczalnia adres@email.com</center></div>
        </div>
    </div>
        </div>
</body>
</html>

<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="pl" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Opinie</title>
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
                <div class="col-md-6 offset-md-3">
                    <?php

                    $add = '';

                    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbname = "opinie";


                    $conn = new mysqli($servername, $username, $password, $dbname);
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT imie, opinia FROM opinie";
                    $result = $conn->query($sql);
                    echo "<table class=\"table table-dark\"><thead>";


                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<div class="alert alert-dark" role="alert">';
                            echo $row["imie"].'</br>';
                            echo $row["opinia"].'</br>';
                            echo "</div>";
                        }
                    } else {
                        echo "0 results";
                    }
                    $conn->close();

                    echo $add;
                    ?>

                </div>
            </div>
        <div class="row">
            <div class="col-md-10 offset-1">
                <center>  Opinie mogą dodawać tylko te osoby które nas odwiedziły, podając w pola poniżej imie i nazwisko z rezerwacji.</center>
                </br>
            </div>
        </div>
        </br>
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div>
                        <p>Byłeś u nas podziel sie wrażeniami!!!</p>
                        <form role="form" action="new_opinion.php" method="post">
                                <input type="text" name="imie" placeholder="Imie">
                                <input type="text" name="nazwisko" placeholder="Nazwisko">
                            </br></br>
                                <textarea name="opinia" rows="4" cols="55" placeholder="Twoja opinia"></textarea>
                            </br>
                                <input type="radio" name="sprawdzenie" value="true">Nie jestem robotem
                            </br>
                                <input class="btn btn-inverse" type="submit" value="Dodaj opinie" >
                            </br></br></br>
                        </form>
                    </div>
                </div>
            </div>
        <div class="row">

            <div class="col-md-12"><center>2018 Auto wypożyczalnia adres@email.com</center></div>
        </div>
    </div>
</body>
</html>



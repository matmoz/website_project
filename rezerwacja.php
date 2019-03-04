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
    <div class="col-md-4 offset-4">
        <center>
<?php




if(empty($_POST['imie']) || empty($_POST['data']) || empty($_POST['opcja']) || empty($_POST['nazwisko']) || empty($_POST['e_mail']) || empty($_POST['godzina'])) {
        echo "podaj wszystkie dane";
}else {

    switch ($_POST['produkt']) {
        case 1:
            $produkt = "Aston Martin DB9";
            break;
        case 2:
            $produkt = 'Audi R8';
            break;
        case 3:
            $produkt = 'BMW i8';
            break;
        case 4:
            $produkt = 'Bugatti Veyron';
            break;
        case 5:
            $produkt = 'Chevrolet Camaro V8';
            break;
        case 6:
            $produkt = 'Ferrari 488 GTB';
            break;
        case 7:
            $produkt = 'Lamborghini Aventador';
            break;
        case 8:
            $produkt = 'Maserati Ghibli';
            break;
        case 9:
            $produkt = 'Ford GT';
            break;
    }
    echo "Imie i nazwisko  " . $_POST['imie'];
    echo " " . $_POST['nazwisko'];
    echo '</br>';
    echo $_POST['e_mail'];
    echo '</br>';
    echo "Nr. telefonu " . $_POST['nr_tele'];
    echo '</br>';
    echo $_POST['opcja']." ";
    echo $produkt;
    echo '</br>';
    echo $_POST['data'];
    echo " ".$_POST['godzina'];
    echo '</br></br>';



    $data = $_POST['data'];
    $godzina = $_POST['godzina'];
    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $nr_tele = $_POST['nr_tele'];
    $e_mail = $_POST['e_mail'];
    $opcja = $_POST['opcja'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zamowienia";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT data_c, godzina FROM customer WHERE data_c ='$data' AND godzina = '$godzina'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<font color="red">Istnieje juz rezerwacja na ta godzine!!!</br>Wybierz inna godzine lub date.</font></br></br>';
    } else {
        $sql = "INSERT INTO customer VALUES ('$data', '$godzina', '$imie', '$nazwisko','$nr_tele', '$e_mail', '$produkt', '$opcja', '')";

        if (mysqli_query($conn, $sql)) {
            echo "Zamówienie złożone";
            echo '</br></br>';
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}
?>
        </center>
    </div>
</div>
    <div class="row">

        <div class="col-md-12"><center>2018 Auto wypożyczalnia adres@email.com</center></div>
    </div>
</div>
</body>
</html>



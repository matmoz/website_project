
<?php




if ((!empty($_POST['imie'])) || (!empty($_POST['nazwisko'])) || (!empty($_POST['opinia'])) || (!empty($_POST['sprawdzenie']))) {

    $imie = $_POST['imie'];
    $nazwisko = $_POST['nazwisko'];
    $opia = $_POST['opinia'];


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "zamowienia";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "SELECT imie, nazwisko FROM customer WHERE imie ='$imie' AND nazwisko = '$nazwisko'";
    $result = $conn->query($sql);



    if ($result->num_rows > 0) {

        $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "opinie";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $sql = "SELECT imie, opinia FROM opinie WHERE imie ='$imie' AND opinia = '$opia'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {

            } else {
                $quarry = "INSERT INTO opinie (imie, opinia) VALUES ('$imie', '$opia')";
                mysqli_query($conn, $quarry);
                $add = '<center>Dodano opinię!</center></br>';
            }
     }

    }
include_once 'opinia.php';

?>

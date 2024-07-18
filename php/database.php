<?php
    $conn = mysqli_connect('localhost','root','','cihbank');
    if ($conn->connect_error) {
        die ("connection_failed:" . $conn->connect_error);
    }

    if (isset($_POST["submit"]))

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $FullName = isset($_POST["nom_et_prenom"]) ? $_POST["nom_et_prenom"] :"";
    $Email = isset($_POST["adresse_email"]) ? $_POST["adresse_email"] :"";
    $PhoneNumber = isset($_POST["telephone"]) ? $_POST["telephone"] :"";
    $Age = isset($_POST["age"]) ? $_POST["age"] :"";

    $sql ="INSERT INTO userinfo (nom_et_prenom, adresse_email, telephone, age) values ('$FullName','$Email','$PhoneNumber','$Age')";

    if ($conn->query($sql) === TRUE); {
        header("location: Index.php");
    }

    }
?>
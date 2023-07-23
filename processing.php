// processing.php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') 
{
    require_once 'db_config.php';

    $client_name        = $_POST['detail1'];
    $ages               = $_POST['detail2'];
    $about_me           = $_POST['detail3'];
    $ClientDesired      = $_POST['detail4'];
    $ClientImpairment   = $_POST['detail5'];
    $ClientPersonal     = $_POST['detail6'];
    $ClientContinence   = $_POST['detail7'];
    $ClientMobility     = $_POST['detail8'];
    $ClientRequirements = $_POST['detail9'];
    $ClientMedication   = $_POST['detail10'];
    $ClientAdvance      = $_POST['detail11'];


    $client_name        = mysqli_real_escape_string($conn, $client_name);
    $ages               = mysqli_real_escape_string($conn, $ages);
    $about_me           = mysqli_real_escape_string($conn, $about_me);
    $ClientDesired      = mysqli_real_escape_string($conn, $ClientDesired);
    $ClientImpairment   = mysqli_real_escape_string($conn, $ClientImpairment);
    $ClientPersonal     = mysqli_real_escape_string($conn, $ClientPersonal);
    $ClientContinence   = mysqli_real_escape_string($conn, $ClientContinence);
    $ClientMobility     = mysqli_real_escape_string($conn, $ClientMobility);
    $ClientRequirements = mysqli_real_escape_string($conn, $ClientRequirements);
    $ClientMedication   = mysqli_real_escape_string($conn, $ClientMedication);
    $ClientAdvance      = mysqli_real_escape_string($conn, $ClientAdvance);

    $query = "INSERT INTO `clients`(`FullName`, `Age`, `AboutMe`, `ClientDesired`, `ClientImpairment`, `ClientPersonal`, `ClientContinence`, `ClientMobility`, `ClientRequirements`, `ClientMedication`, `ClientAdvance`) 
    VALUES 
    ('$client_name','$ages','$about_me','$ClientDesired','$ClientImpairment','$ClientPersonal','$ClientContinence','$ClientMobility','$ClientRequirements','$ClientMedication','$ClientAdvance')";

    if ($conn->query($query) === TRUE) {
        echo 'Data inserted successfully!';
        header("location:index.php");
    } else {
        echo 'Error: ' . $conn->error;
    }

    $conn->close();
}
?>

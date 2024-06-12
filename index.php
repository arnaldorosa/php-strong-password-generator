<?php 
    include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Password Generator</title>
</head>

<body>

<div class="bg-warning">
    <div class="container py-5">
    <div class="row text-center text-white">
        <div class="col-12">
            <h1>
                Password Generator
            </h1>
            <h2>
                Genera una password casuale
            </h2>
    </div>

    <div class="col-12">
        <form action="" method="GET" class="py-3">
            <label for="length">Lunghezza Password:</label>
            <input type="number" name="length" min="8" max="16">
            <input type="submit" value="Genera Password">
        </form>
    </div>
</div>

</div>

<?php 


$length = $_GET['length'];


if(isset($length)) {
    $password = generate_password($length);
    $message = "La tua password casuale di numeri" . $length . " è: " . $password;
    
    ?>

    <p class="fs-5 ms-5 text-white"> <?php echo $message ?></p>
    <?php
}

?>

</div>

</body>
</html>
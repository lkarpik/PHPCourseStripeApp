<?php
if (!empty($_GET['tid']) && !empty($_GET['product'])) {
    $_GET=filter_var_array($_GET, FILTER_SANITIZE_STRING);

    $tid = $_GET['tid'];
    $product = $_GET['product'];
} else {
    header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Zakup zakończony</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
    <h2>Thak you for purchasing "<?php echo $product; ?>" </h2>
    <hr>
    <p> Transaction ID is: <?php echo $tid ?> </p>
    <p>Check you eamil with info </p>
    <a href="index.php" class="btn btn-light mt-2"> Back to main page</a> 
</div>
    
</body>
</html>
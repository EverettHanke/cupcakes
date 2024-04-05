<?php
$name = $_POST['name'];
$total = 0.00;
$flavors = $_POST['flavor'];
$error = 0;
foreach($flavors as $flavor)
{
    $total = $total+3.50;
}
if (empty($name))
{
    $error++;
}
if (empty($flavors))
{
    $error++;
}
if ($error == 0)
{
    echo "<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Cupcake Receipt</title>
    <link rel='stylesheet' href='styles.css?v=1'>
</head>
<body>
<img src='images/cutecupcake.png' width='100px' height='100px' alt='cupcake logo'>
<div class='formDiv'>
    <section class='centerContent'> 
        <h1>Thank you for your order $name!</h1>
              <h3>Order Summary: </h3>
                <ul>";
    foreach($flavors as $flavor)
    {
        echo "<li>$flavor</li>";
    }
    echo "          
            
        </ul>
                <h4>Order Total: $$total </h4>

    </section>
</div>



</body>
</html>";
}
else
{
    echo "<!doctype html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport'
          content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
    <meta http-equiv='X-UA-Compatible' content='ie=edge'>
    <title>Cupcake Receipt</title>
    <link rel='stylesheet' href='styles.css?v=1'>
</head>
<body>
<img src='images/cutecupcake.png' width='100px' height='100px' alt='cupcake logo'>
<div class='formDiv'>
    <section class='centerContent'> 
        <h1>ERROR PLACING ORDER</h1>
              <h3>No Order Made </h3>
    </section>
</div>



</body>
</html>";
}



<?php
if (!empty($_POST['number1']) && !empty($_POST['number2'])) {

    if (!empty($_POST['addition'])) {
        $result = intval($_POST['number1']) + intval($_POST['number2']);
    } elseif (!empty($_POST['substraction'])) {
        $result = intval($_POST['number1']) - intval($_POST['number2']);
    } elseif (!empty($_POST['multiplication'])) {
        $result = intval($_POST['number1']) * intval($_POST['number2']);
    } elseif (!empty($_POST['division'])) {
        $result = intval($_POST['number1']) / intval($_POST['number2']);
    } else {
        $result = NULL;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
        <title>Calculatrice</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center bg-dark text-white">
                <div class="col-md-12">
                    <h1>Une calculatrice en PHP</h1>
                    <form action="index.php" method="post">
                        <input type="text" name="number1" value="0" />
                        <input type="text" name="number2" value="0" />
                        <input type="submit" name="addition" value="+" />
                        <input type="submit" name="substraction" value="-" />
                        <input type="submit" name="multiplication" value="*" />
                        <input type="submit" name="division" value="/" />
                        <input type="submit" name="reboot" value="C" />
                    </form>
                    <p>Résultat : <?= !empty($result) ? $result : NULL ?></p>
                </div>
            </div>
        </div>
    </body>
</html>
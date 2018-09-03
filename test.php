<html>
    <head>
        <meta charset="UTF-8" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
        <title>title</title>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-center bg-dark text-white">
                <div class="col-md-12">
                    <?php
                        
                    ?>
                    <form action="test.php" method="POST">
                        <fieldset>
                            <legend>Inscription</legend>
                        </fieldset>
                        <div class="form-group">
                            <label for="nom">Nom : </label><input type="text" name="nom" value="" />
                        </div>
                        <div class="form-group">
                            <label for="prénom">Prénom : </label><input type="text" name="prenom" value="" />
                        </div>
                        <div class="form-group">
                            <input class="btn btn-secondary" type="submit" name="submit" value="Valider" />
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>

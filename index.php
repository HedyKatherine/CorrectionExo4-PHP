
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Exo4</title>
    </head>
    <body>
            <?php
            if (empty($_POST['firstName']) && empty($_POST['lastName'])) {
                ?>
            <form method="post" action="index.php">
                <select name="civilite">
                    <option>Mr</option>
                    <option>Mme</option>
                </select>
                <label>Nom</label>
                <input type="text" name="lastName" placeholder="Votre nom" required>
                <label>Prénom</label>
                <input type="text" name="firstName" placeholder="Votre prénom" required>
                <input type="submit" name="valider" value="Valider"/>
            </form>
            <?php
        } else {
            if (isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['civilite'])) {
                echo strip_tags('Bonjour ' . ' '. $_POST['civilite']. ' ' . $_POST['firstName'] . ' ' . $_POST['lastName'] . ' !');
            }
        }
        ?> 
</body>
</html>
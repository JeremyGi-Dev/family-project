<?php
require "Layout/layout.php";
?>

<form action="login.php" method="post" class="form-horizontal" style="text-align: center; width: 130%; padding-top: 10%;">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <label>Pseudo <input type="text" name="pseudo" id="pseudo" value="
            <?php if(isset($_COOKIE['pseudo'])) {
                echo htmlspecialchars($_COOKIE['pseudo']);
            } else {
                echo "";
            } ?>
            " class="form-control" /></label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <label>Mot de passe <input type="password" name="password" id="password" class="form-control" /></label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <a class="btn btn-danger" href="index.php" >Retour</a>
        </div>
    </div>
</form>
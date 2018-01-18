<?php

/**
 * Start the session.
 */
session_start();

/**
 * Include our MySQL connection.
 */
require 'Config/connect.php';

/**
 * include layout
 */
require "Layout/layout.php";


    if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['mail']) &&
        isset($_POST['address']) && isset($_POST['birthday']) && isset($_POST['username']) && isset($_POST['password'])
    ) {
        $lastname = !empty($_POST['lastname']) ? trim($_POST['lastname']) : null;
        $firstname = !empty($_POST['firstname']) ? trim($_POST['firstname']) : null;
        $mail = !empty($_POST['mail']) ? trim($_POST['mail']) : null;
        $address = !empty($_POST['address']) ? trim($_POST['address']) : null;
        $birthday = !empty($_POST['birthday']) ? trim($_POST['birthday']) : null;
        $username = !empty($_POST['username']) ? trim($_POST['username']) : null;
        $password = !empty($_POST['password']) ? trim($_POST['password']) : null;

        $passwordHash = password_hash($password, PASSWORD_BCRYPT, array("cost" => 12));

        $sql = "INSERT INTO users ( firstname, lastname, address, email, date_birth, username, password) VALUES ( :firstname, :lastname, :address, :email, :date_birth, :username, :password)";

        $query = $pdo->prepare($sql);
        $query->execute(array(':firstname' => $firstname, ':lastname' => $lastname, ':address' => $address, ':email' => $mail, ':date_birth' => $birthday, ':username' => $username, ':password' => $passwordHash));

        if($query){

            header('index.php');
        }
    }
?>

<form action="register.php" method="post" class="form-horizontal" style="text-align: center; width: 130%; padding-top: 10%;">
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <label>Nom <input type="text" name="lastname" id="lastname" class="form-control" /></label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <label>Prenom <input type="text" name="firstname" id="firstname" class="form-control" /></label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <label>E-mail<input type="text" name="mail" id="mail" class="form-control" /></label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <label>Adresse <input type="text" name="address" id="address" class="form-control" /></label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <label>Date de naissance <input type="text" name="birthday" id="birthday" class="form-control" /></label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-6">
            <label>Pseudo <input type="text" name="username" id="username" class="form-control" /></label>
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
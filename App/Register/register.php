<form action='register.php' method='post'
      accept-charset='UTF-8'>
    <fieldset >
        <legend>Register</legend>
        <label for='lastname' >Nom : </label>
        <input type='text' name='lastname' id='lastname' maxlength="50" />

        <label for='firstname' >Prenom : </label>
        <input type='text' name='firstname' id='firstname' maxlength="50" />

        <label for='email' >Adresse Mail :</label>
        <input type='text' name='email' id='email' maxlength="50" />

        <label for='username' >Pseudo :</label>
        <input type='text' name='username' id='username' maxlength="50" />

        <label for='password' >Mot de passe :</label>
        <input type='password' name='password' id='password' maxlength="50" />

        <input type='submit' name='Submit' value='Submit' />
    </fieldset>
</form>

<div class="content">
    <h1>Accueil</h1>
    <form action="#" method="POST" action="">
        <fieldset>
            <legend>Se connecter</legend>
            <p>
                {$error}
            </p>
            <p>
                <label for="nom">Login : </label>
                <input name="nom" id="nom" type="text" placeholder="Votre pseudo"/>
            </p>
            <p>
                <label for="password">Mot de passe : </label>
                <input name="password" id="password" type="password" placeholder="Mot de passe"/>
            </p>
            <p>
                <button type="submit" name="connexion">Se connecter</button>
                <button type="submit" name="inscription">S'inscrire</button>
            </p>

        </fieldset>
    </form>
</div>
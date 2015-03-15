<div class="content">
    <h1>Gestion du profile</h1>
    {if isset($user)}
        <p class="errorLogin">{$error}</p>
        <p class="succesLogin">{$succes}</p>
        <form id="form-profile" method="POST" action="" >
            <p>
                <label for="nom">Nom : </label>
                <input id="nom" name ="nom" type="text" placeholder="" value="{$user}">
            </p>
            <p>
                <label for="mdp">Mot de passe : </label>
                <input id="mdp" name="mdp" type="password" placeholder="Ancien mot de passe">
            </p>
            <p>
                <label for="mdpNew">Nouveau mdp : </label>
                <input id="mdpNew" name="mdpNew" type="password" placeholder="Nouveau mot de passe">
            </p>
            <p>
                <label for="mdpCheck">Ressaisir mdp : </label>
                <input id="mdpCheck" name="mdpCheck" type="password" placeholder="Contrôle du nouveau mot de passe">
            </p>
            <input name="saveProfile"  type="submit" value="Sauvegarder">
            <div class="warning">
                <h2>Suppression du profile</h2>
                <p>
                    Attention, en supprimant votre profile vous perdez l'accès à certaines fonctionnalitées du site.<br>
                </p>
                <input name="deleteProfile" type="submit" value="Supprimer mon profil">
            </div>
        </form>
    {else}
        <p>Il faut vous connecter pour gérer votre compte</p>
    {/if}
</div>
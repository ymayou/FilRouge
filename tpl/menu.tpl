<nav>
    <ul>
        <li>
            <a href="/index.php">Accueil</a>
        </li>
        <li>
            <a href="/profile">Profile</a>
        </li>
        <li>
            <a href="/pathologie">Pathologie</a>
        </li>
        {if isset($user)}
        <li>
            <a href="/recherche">Recherche</a>
        </li>
        {/if}
        <li>
            <a href="/infos">A propos</a>
        </li>
        <li>
            <a href="/generateXml">XML</a>
        </li>
        {if isset($user)}
        <li>
            <a href="/deco">Déconnexion</a>
        </li>
        {/if}
    </ul>
</nav>

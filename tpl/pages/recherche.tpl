<div class="content">
    <h1>Recherche de pathologies par mot-clé</h1>
    <form id="form-recherche" method="POST" action="">
        <p>
            <label for="recherche" class="singleLabel">Mot-clé : </label>
            <input type="text" id="recherche" name ="recherche" placeholder="">
            <input type="submit" name="validRecherche" value="Rechercher">
        </p>
    </form>
    {if isset($resultat)}
        <div class="listePathos">
            <ul class="manyLinks">
            {foreach from=$resultat item=pathologie}
                <li>
                    <a href="/patho/{$pathologie['idP']}">{$pathologie['desc']}</a>
                </li>
            {/foreach}
            </ul>
        </div>
    {/if}
</div>
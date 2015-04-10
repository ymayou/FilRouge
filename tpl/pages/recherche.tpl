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
            {foreach from=$resultat item=pathologie}
                <a href="/patho/{$pathologie['idP']}" class="linkPatho">{$pathologie['desc']}</a>
            {/foreach}
        </div>
    {/if}
</div>
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
    <table class="table-green" title="Categorie maladie">
        <thead>
        <tr>
            <th>Méridien</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
        {foreach from=$resultat item=pathologie}
            <tr>
                <td>{$pathologie['mer']}</td>
                <td>{$pathologie['type']}</td>
                <td>{$pathologie['desc']}</td>
            </tr>

        {/foreach}
        </tbody>
    </table>
    {/if}
</div>
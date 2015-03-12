<div class="content">
    <h1>Liste des pathologies</h1>
    <form action="#" method="POST"><fieldset>
            <legend>Filtre</legend>

            <p>
                <label for="choix_meridien">Méridien : </label>
                <input list="meridien" type="text" id="choix_meridien">
                <datalist id="meridien">
                    {foreach from=$listeNomMeridien item=nomM}
                        <option>{$nomM['nom']}</option>
                    {/foreach}
                </datalist>
            </p>
            <p>
                <label for="categorie">Catégorie : </label>
                <select id="categorie">
                    <option>interne</option>
                    <option>externe</option>
                    <option>Mayou le magnifique</option>
                </select>
            </p>
            <p>
                <label for="caracteristique">Caractéristique : </label>
                <select id="caracteristique">
                    {foreach from=$listeCarac item=carac}
                        <option>{$carac['element']}</option>
                    {/foreach}
                </select>
            <p>
                <button type="submit">Filtrer !</button>
            </p>

        </fieldset></form>
    <table class="table-green" title="Categorie maladie">
        <thead>
        <tr>
            <th>Méridien</th>
            <th>Type</th>
            <th>Description</th>
        </tr>
        </thead>
        <tbody>
            {foreach from=$listePatho item=pathologie}
                <tr>
                    <td>{$pathologie['mer']}</td>
                    <td>{$pathologie['type']}</td>
                    <td>{$pathologie['desc']}</td>
                </tr>
               
            {/foreach}
        </tbody>
    </table>
</div>

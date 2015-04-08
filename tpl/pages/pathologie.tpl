<div class="content">
    <h1>Liste des pathologies</h1>
    <form action="?page=pathologie" method="POST"><fieldset>
            <legend>Filtre</legend>
            {if isset($user)}
                <label for="recherche">Rechercher : </label>
                <input type="text" id="recherche" name="recherche">
            {/if}
            <p>
                <label for="choix_meridien">Méridien : </label>
                <input list="meridien" type="text" id="choix_meridien" name="nomMeridien" value="{$nomCourant}">
                <datalist id="meridien">
                    {foreach from=$listeNomMeridien item=nomM}
                        <option>{$nomM['nom']}</option>
                    {/foreach}
                </datalist>
            </p>
            <p>
                <label for="categorie">Type : </label>
                <select id="categorie" name="categorie">
                    <option value=""></option>
                    <option value="m" {if $typeCourant == "m"} selected="" {/if}>Méridien</option>
                    <option value="tf" {if $typeCourant == "tf"} selected="" {/if}>Organe/Viscère</option>
                    <option value="l" {if $typeCourant == "l"} selected="" {/if}>Luo</option>
                    <option value="l2" {if $typeCourant == "l2"} selected="" {/if}>Merveilleux</option>
                    <option value="v" {if $typeCourant == "v"} selected="" {/if}>Vaisseaux</option>
                    <option value="j" {if $typeCourant == "j"} selected="" {/if}>Jing Jin</option>
                </select>
            </p>
            <p>
                <label for="caracteristique">Caractéristique : </label>
                <select id="caracteristique" name="caracteristique">
                    <option value=""></option>
                    <option value="p" {if $caracCourant == "p"} selected="" {/if}>Plein</option>
                    <option value="c" {if $caracCourant == "c"} selected="" {/if}>Chaud</option>
                    <option value="v" {if $caracCourant == "v"} selected="" {/if}>Vide</option>
                    <option value="f" {if $caracCourant == "f"} selected="" {/if}>Froid</option>
                    <option value="i" {if $caracCourant == "i"} selected="" {/if}>Interne</option>
                    <option value="e" {if $caracCourant == "e"} selected="" {/if}>Externe</option>
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

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Acupuncture</title>

    <link rel="stylesheet" type="text/css" href="../includes/css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <?php
        include_once("menu.php");
    ?>
    <div class="content">
            <fieldset>
                <legend>Filtre</legend>
                <form action="#" method="POST">
                    <p>
                        <label for="choix_meridien">Méridien : </label>
                        <input list="meridien" type="text" id="choix_meridien">
                        <datalist id="meridien">
                            <option value="Je">
                            <option value="suis">
                            <option value="Mayou">
                            <option value="Le">
                            <option value="Magnifique">
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
                            <option>chaud</option>
                            <option>froid</option>
                            <option>Mayou le magnifique</option>
                        </select>
                    <p>
                        <button type="submit">Filtrer !</button>
                    </p>
                </form>
            </fieldset>
            <table>
                <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th>Caractéristique</th>
                        <th>Exemples</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>A</td>
                        <td>A</td>
                        <td>A</td>
                    </tr>
                    <tr>
                        <td>B</td>
                        <td>B</td>
                        <td>B</td>
                    </tr>
                    <tr>
                        <td>C</td>
                        <td>C</td>
                        <td>C</td>
                    </tr>
                </tbody>
            </table>
            
        </div>
</body>
</html>


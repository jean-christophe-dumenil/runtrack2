<?php
    // connexion à la base de donnée
    $mysqli = new mysqli('localhost', 'root', '', 'jour09');

    // requête
    $request = $mysqli -> query("SELECT `salles`.`nom`, `etage`.`nom` from salles inner join `etage` on `salles`.`id_etages` = `etage`.`id`");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
        table,
        th,
        td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
    <title>job13</title>
</head>

<body>
    <h1>SQL + PHP</h1>
    <h3>job13</h3>
    <table>
        <thead>
            <tr>
                <th>Nom de la salle</th>
                <th>Nom de l'étage</th>
            </tr>
        </thead>
        <tbody>            
            <?php
                while(($result = $request -> fetch_array()) != null){
                    echo "<tr>";
                    echo "<td>".$result[0]."</td>";
                    echo "<td>".$result[1]."</td>";
                    echo "</tr>";
                }
            ?>            
        </tbody>
    </table>
</body>
</html>
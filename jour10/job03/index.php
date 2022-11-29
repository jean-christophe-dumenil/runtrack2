<?php
    
    // connexion à la base de donnée
    $mysqli = new mysqli("localhost", "root", "", "jour09");

    // requête
    $request = $mysqli -> query("select prenom, nom, naissance from etudiants where `sexe` = 'Femme'");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>job03</title>
       <style>
        table,
        th,
        td {
            padding: 10px;
            border: 1px solid black;
            border-collapse: collapse;
        }
        </style>
</head>

<body>
    <h1>SQL + PHP</h1>
    <h3>job03</h3>

    <table>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Naissance</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while(($result = $request -> fetch_array()) != null){
                    echo "<tr>";
                    echo "<td>".$result['prenom']."</td>";
                    echo "<td>".$result['nom']."</td>";
                    echo "<td>".$result['naissance']."</td>";
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>
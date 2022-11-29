<?php
    // connexion à la base de donnée
    $mysqli = new mysqli('localhost', 'root', '', 'jour09');

    // requête
    $request = $mysqli -> query("SELECT * from salles order by capacite desc");

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
    <title>job09</title>
</head>

<body>
    <h1>SQL + PHP</h1>
    <h3>job09</h3>
    <table>
        <thead>
            <tr>
                <th>nom</th>
                <th>id_etage</th>
                <th>capacite</th>
            </tr>
        </thead>
        <tbody>            
            <?php
                while(($result = $request -> fetch_array()) != null){
                    echo "<tr>";
                    echo "<td>".$result['nom']."</td>";
                    echo "<td>".$result['id_etages']."</td>";
                    echo "<td>".$result['capacite']."</td>";
                    echo "</tr>";
                }
            ?>            
        </tbody>
    </table>
</body>
</html>
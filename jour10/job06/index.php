<?php
    
    // connexion à la base de donnée
    $mysqli = new mysqli("localhost", "root", "", "jour09");

    // requête
    $request = $mysqli -> query("select count(*) from etudiants");

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>job06</title>
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
    <h3>job06</h3>

    <table>
        <thead>
            <tr>
                <th>Nombre d'étudiants</th>
            </tr>
        </thead>
        <tbody>
            <?php
                while(($result = $request -> fetch_array()) != null){
                    echo "<tr>";
                    echo "<td>".$result['count(*)']."</td>";
                    echo "</tr>";
                }
            ?>
    </table>
</body>
</html>
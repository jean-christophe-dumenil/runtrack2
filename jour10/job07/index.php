<?php
    // connexion à la base de donnée
    $mysqli = new mysqli('localhost', 'root', '', 'jour09');

    // requête
    $request = $mysqli -> query("SELECT sum(`superfici`) from etage");

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
    <title>job07</title>
</head>

<body>
    <h1>SQL + PHP</h1>
    <h3>job07</h3>
    <table>
        <thead>
            <tr>
                <th>Superficie_totale</th>
            </tr>
        </thead>
        <tbody>            
            <?php
                while(($result = $request -> fetch_array()) != null){
                    echo "<tr>";
                    echo "<td>".$result['sum(`superfici`)']."</td>";
                    echo "</tr>";
                }
            ?>    
        </tbody>        
    </table>
</body>
</html>
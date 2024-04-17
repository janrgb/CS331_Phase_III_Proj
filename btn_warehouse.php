<?php
    /* Querying for table. */
    include('connection_two.php');
    $query = "SELECT * FROM WAREHOUSE_LOC";
    $stmt = $dbh->prepare($query);
    $stmt->execute();

    /* Fetch as associative... */
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Warehouse Locations</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles_table.css">
    </head>
    <body>
        <h1>WAREHOUSES</h1>
        <table>
            <tr>
                <?php
                    $firstRow = reset($rows);
                    foreach ($firstRow as $attribute => $value)
                    {
                        echo "<th>$attribute</th>";
                    }
                ?>
            </tr>
            <?php
            foreach ($rows as $row)
            {
                echo "<tr>";
                foreach ($row as $value)
                {
                    echo "<td>$value</td>";
                }
                echo "</tr>";
            }
            ?>
        </table>
    </body>
</html>
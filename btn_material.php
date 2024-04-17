<?php
    /* Querying for table. */
    include('connection_two.php');
    $query = "SELECT * FROM MATERIAL";
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
        <div id="main-wrapper">
            <h1 id="main-title">MATERIALS</h1>
            <table id="main-table">
                <tr>
                    <?php
                        $firstRow = reset($rows);
                        foreach ($firstRow as $attribute => $value)
                        {
                            echo "<th scope='col'>$attribute</th>";
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
        </div>
    </body>
</html>
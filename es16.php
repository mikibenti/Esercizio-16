<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function stampaTabella($m, $n) {
            $table = "<table border='1' style='border-collapse:collapse'>";
            for($i = 0; $i < $m; $i++) {
                $table = $table . "<tr>";
                for($j = 0; $j < $n; $j++) {
                    $table = $table . "<td style = 'padding-inline: 10px 10px;'>$i,$j</td>";
                }
                $table = $table . "</tr>";
            }
            echo "$table </table>";
        }
        stampaTabella(3,3);
    ?>
</body>
</html>
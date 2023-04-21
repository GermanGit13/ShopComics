<!DOCTYPE html>
<html lang="es">
<head>
    <title>Tienda de Comics</title>
</head>
<body>
<h1>Comics en nuestra tienda</h1>
<table border="1">
    <tr>

        <th>TITULO</th>
        <th>REFERENCIA</th>
    </tr>
    <?php foreach ($comics as $comic): ?>
        <tr>
            <td> <?php echo $comic['title'] ?></td>
            <td> <?php echo $comic['reference']?></td>
        </tr>
    <?php endforeach; ?>

<?php //    foreach ($comics as $comic) {
//    echo "<tr>";
//        echo '<td>' . $comic['title'] . '</td>';
//        echo '<td>' . $comic['reference'] . '</td>';
//        echo "</tr>";
//    } ?>

</table>
</body>
</html>
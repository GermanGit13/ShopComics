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
            <td> <?php echo $comics['titulo'] ?></td>
            <td> <?php echo $comic['referencia']?>) ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
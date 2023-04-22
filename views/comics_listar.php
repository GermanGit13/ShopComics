<?php
include 'views/header.php'; //se lo pasamos a la vista especifica
?>
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
</table>
</body>
</html>

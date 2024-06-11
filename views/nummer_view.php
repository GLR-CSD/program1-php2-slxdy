<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nummerlijst</title>
    <link rel="stylesheet" href="public/css/simple.css">
</head>
<body>
<h1>Nummerlijst</h1>
<table>
    <tr>
        <th>ID</th>
        <th>AlbumID</th>
        <th>Titel</th>
        <th>Duur</th>
        <th>URL</th>
    </tr>
    <?php foreach ($nummers as $nummer): ?>
        <tr>
            <td><?= $nummer->getID() ?></td>
            <td><?= $nummer->getAlbumID() ?></td>
            <td><?= $nummer->getTitel() ?></td>
            <td><?= $nummer->getDuur() ?></td>
            <td><?= $nummer->getURL() ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>

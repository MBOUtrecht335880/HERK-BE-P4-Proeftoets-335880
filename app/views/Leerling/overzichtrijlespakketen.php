<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <title>Overzicht</title>
</head>

<body>
    <u><?= $data['title']; ?></u>

    <table>
        <thead>
            <th>Naam</th>
            <th>Mobiel</th>
            <th>Pakketnaam</th>
            <th>Aantal Lessen</th>
            <th>Prijs</th>
            <th>Start Datum</th>
            <th>Datum Rijbewijs Behaald</th>
        </thead>
        <tbody>
            <?= $data['rows']; ?>
        </tbody>
    </table>

</body>

</html>
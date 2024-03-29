<!-- Array Hotel -->

<?php
$hotels = [
    [
        'name' => 'Hotel Belvedere',
        'description' => 'Elegante e affacciato sul mare',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Abbina il confort ed il lusso di un ampio resort hotel',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => ' Accogliente e di piccole dimensioni, avvolto da una atmosfera informale ',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Nel centro di Roma con servizi di lusso',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Recentemente ristrutturato, è situato nel cuore della città',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],
];
?>

<!-- /Array Hotel -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CDN link/script -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <!-- /Bootstrap CDN link -->

    <title>PHP Hotel</title>
</head>

<body>
    <div class="container">
        <table class="table table-info table-striped table-borderless">
            <thead>

                <tr>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>PARKING</th>
                    <th>VOTE</th>
                    <th>DISTANCE TO CENTER</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($hotels as $hotel) { ?>
                    <tr>
                        <td scope="row"><?= $hotel['name'] ?></td>
                        <td scope="row"><?= $hotel['description'] ?></td>
                        <td scope="row"><?= $hotel['parking'] ? 'Yes' : 'No'; ?></td>
                        <td scope="row"><?= $hotel['vote'] ?></td>
                        <td scope="row"><?= $hotel['distance_to_center'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>

</body>

</html>
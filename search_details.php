<?php 

    require_once 'connect.php';

    if (isset($_POST['submit'])) {
        $id_card = $_POST['search'];

        $sql = "SELECT * FROM test WHERE id_card = :id_card";
        $stmt = $conn->prepare($sql);
        $stmt->execute(['id_card' => $id_card]);
        $row = $stmt->fetch();
    } else {
        header("location: search_index.php");
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row mt-5">
            <div class="col-5 mx-auto">
                <div class="card shadow text-center">
                    <div class="card-header">
                        <h1><?= $row['id_card'] ?></h1>
                    </div>
                    <div class="card-body">
                        <h3>fristname : <?= $row['first_name'] ?></h3>
                        <h3>lastname : <?= $row['last_name'] ?></h3>
                        <h3>date : <?= $row['date_start'] ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>
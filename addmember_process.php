<?php include 'connect.php'; ?>

<?php
    $id_card = $_POST['id_card'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $address = $_POST['address'];
    $team = $_POST['team'];
    $company = $_POST['company'];
    $date = $_POST['date'];

    $sql = "INSERT INTO test (id_card, first_name ,last_name ,address ,date_start ,comp_id) 
    VALUES ('$id_card' ,'$first_name' ,'$last_name' ,'$address' ,'$date' ,'$company')";

    $query = mysqli_query($connect,$sql);

    if ($query) {
        echo "new member added";
    }
    else{
        echo"Error : input";
    }
    
?> 

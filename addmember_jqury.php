<?php
include 'connect.php';
if(isset($_POST['function']) && $_POST['function']=='team'){
    $id = $_POST['id'];
    $sql = "SELECT * FROM company WHERE team_id ='$id'";
    $query = mysqli_query($connect , $sql);
    echo'<option selected disabled>-กรุณาเลือก-</option>';
    foreach($query as $value){
    echo '<option value = "'.$value['comp_id'].'">'.$value['comp_name'].'</option>'; 
    }
    exit();
}

?>

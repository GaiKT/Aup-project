<?php  
 // เรียกใช้ php connect เพื่อใช้คำสั่ง SQL
    require ('connect.php');
    $sql = 'SELECT * FROM team;';
    $query = mysqli_query($connect,$sql);
?>     

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" >
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>AUP Website</title>
</head>
<body class="bg-info"> 
    
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8 mx-auto bg-light rounded p-4">
                <h2 class="text-center font-weight-bold"> ADD Member AUP!! </h2>
                <hr class="my-1">
                <h5 class="text-center text-secondary">write any ID Card in the search box.</h5>
                <form action="addmember_process.php" method="post" class = "row gy-2 gx-3 align-items-center">
                    <label class = "font-weight-bold"> ID Card Number </label>
                    <input type="text" name="id_card" class = ""><br>
                    <label class = "font-weight-bold"> Firstname </label>
                    <input type="text" name="first_name"><br>
                    <label class = "font-weight-bold"> Lastname </label>
                    <input type="text" name="last_name"><br>
                    <label class = "font-weight-bold"> Address </label>
                    <input type="text" name="address"><br>
                    <label class = "font-weight-bold"> Date </label>
                    <input type="date" name="date"><br>
                    <label class = "font-weight-bold"> Team </label>      
                        <select name = "team" id = "team" require >
                            <option selected disabled>-กรุณาเลือก-</option>
                            <?php
                            foreach ($query as $value) { ?>
                            <option class = "dropdown-item" value = "<?=$value ['team_id'] ?>"> <?=$value ["team_name"]?> </option>
                            <?php } ?>
                        </select><br>
                    <label class = "font-weight-bold"> Company </label>
                        <select name="company" id="company"> 
                            <option class = "dropdown-item" selected disabled>-กรุณาเลือก-</option>
                        </select><br>  
                    <input type="submit" value="Add Member" class="btn btn-info btn-lg rounded-0">
                </form>
            </div>
        </div>
    </div>





    
   
    <script src="main.js"></script>

    
</body>
</html>
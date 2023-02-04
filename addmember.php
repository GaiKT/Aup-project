<?php  
 // เรียกใช้ php connect เพื่อใช้คำสั่ง SQL
    require ('connect.php');
    $sql = 'SELECT * FROM team;';
    $query = mysqli_query($connect,$sql);
?>     

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <title>AUP Website</title>

    <style>
        label {
            display: inline-block;
            width: 100px;
            margin-bottom: 10px ;
        }
    </style>
</head>
<body> 
    <h1> ADD Member AUP!! </h1>
    <form action="addmember_process.php" method="post">
        <label> ID Card Number </label>
        <input type="text" name="id_card"><br>
        <label> Firstname </label>
        <input type="text" name="first_name"><br>
        <label> Lastname </label>
        <input type="text" name="last_name"><br>
        <label> Address </label>
        <input type="text" name="address"><br>
        <label> Date </label>
        <input type="date" name="date"><br>
        
        <label> Team </label>      
            <select name = "team" id = "team" require >
                <option selected disabled>-กรุณาเลือก-</option>
                <?php
                foreach ($query as $value) { ?>
                <option value = "<?=$value ['team_id'] ?>"> <?=$value ["team_name"]?> </option>
                <?php } ?>
            </select><br>
        <label> Company </label>
            <select name="company" id="company"> </select><br>  

            <script type = "text/javascript" >
                $('#team').change(function(){
                    var id_team = $(this).val();
                    $.ajax({
                        type: "post",
                        url: "addmember_jqury.php",
                        data:{id:id_team,function:'team'},
                        success : function(data) {
                            console.log(data)
                            $('#company').html(data)
                        }
                    })
                });
                $('#company').change(function(){
                    console.log($(this))  
                });

            </script>

        <input type="submit" value="Add Member">
    </form>

    
</body>
</html>
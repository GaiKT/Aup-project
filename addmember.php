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
                <?php  
                // เรียกใช้ php connect เพื่อใช้คำสั่ง SQL
                    require ('connect.php');
                    $sql = 'SELECT team_id , team_name FROM team;';
                    $objquery = mysqli_query($connect , $sql);
                ?>        
            <select name = "team" id = "team" require >
                <option value = '' selected disabled>-กรุณาเลือก-</option>
                <?php
                // Loop เพื่อนำค่าจาก SQL มาแทนลงไปใน Value ของ option เมื่อค่าใน DATA BASE เปลี่ยนแปลงตรงนี้จะเปลี่ยนแปลงด้วย
                    while ($obResult = mysqli_fetch_array($objquery)) {
                ?>
                    <option value = <?php echo $obResult ["team_id"];?>> <?php echo $obResult ["team_name"]; ?> </option>
                    <?php
                    }
                ?>
            </select><br>
        <label> Company </label>
            <select name="company" id="company" require></select>   
            <?php
                // Loop เพื่อนำค่าจาก SQL มาแทนลงไปใน Value ของ option เมื่อค่าใน DATA BASE เปลี่ยนแปลงตรงนี้จะเปลี่ยนแปลงด้วย
                    while ($obResult = mysqli_fetch_array($objquery)) {
                ?>     
                    
                    <?php
                    }
                ?>             
            <script type = "text/javascript" >
                $('#team').change(function(){
                    let id = $(this).val();
                    $.ajax({
                        type: "post",
                        url: "addmember_process.php"
                        data:{id:id_team,function:'team'},
                        success : function(data) {
                            $('#company').html(data)
                        }
                    })
                });

            </script>

        <input type="submit" value="Add Member">
    </form>

    
</body>
</html>
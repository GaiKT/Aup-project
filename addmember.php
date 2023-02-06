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
                <h2 class="text-center font-weight-bold"> แบบฟอร์มการสมัคร AUP </h2>
                <hr class="my-1">
                <h5 class="text-center text-secondary">กรุณากรอกข้อมูลทั้งหมดในช่องว่าง</h5>
                <form action="addmember_process.php" method="post">
                    <div class="mt-3 mb-3">
                        <label class = "h4 form-label font-weight-bold"> เลขบัตรประชาชน 13 หลัก</label>
                        <input type="number" name="id_card" class = "form-control"placeholder="กรุณากรอกเลขที่บัตรประชาชน 13 หลัก">
                    </div>
                    <div class="mb-3">
                        <label class = "h4 form-label font-weight-bold"> ชื่อจริง </label>
                        <input type="text" name="first_name"class = "form-control"placeholder="กรุณากรอกชื่อจริง">                
                    </div>
                    <div class="mb-3">
                        <label class = "h4 form-label font-weight-bold"> นามสกุล </label>
                        <input type="text" name="last_name"class = "form-control"placeholder="กรุณากรอกนามสกุล">
                    </div>
                    <div class="mb-3">
                        <label class = "h4 form-label font-weight-bold"> ที่อยู่ </label>
                        <textarea type="text" name="address" cols="15" rows="2" class = "form-control" placeholder="กรุณากรอกที่อยู่..."></textarea>
                    </div>
                    <div class="mb-4">
                        <label class = "h4 form-label font-weight-bold">วันที่กรอกเอกสาร </label>
                        <input type="date" name="date"class = "form-control">
                    </div>
                    <div class="mb-3">
                        <label class = "h4 form-label font-weight-bold"> ทีมที่เข้าดำเนินการ </label>      
                        <select class = "form-select" name = "team" id = "team" require >
                            <option selected disabled>กรุณาเลือก.....</option>
                            <?php foreach ($query as $value) { ?>
                            <option value = "<?=$value ['team_id'] ?>"> <?=$value ["team_name"]?> </option>
                                <?php } ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class = "h4 form-label font-weight-bold"> บริษัทที่เข้าดำเนินการ </label>
                        <select class = "form-select" name="company" id="company"> 
                            <option class = "form-control" selected disabled>กรุณาเลือก.....</option>
                        </select>
                    </div>
                    <div class="text-center">
                        <input type="submit" value="ยืนยัน" class="btn btn-success mt-3 md-3">
                        <a class="btn btn-secondary mt-3" href="search_index.php" role="button">ยกเลิก</a>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script src="main.js"></script>

    
</body>
</html>
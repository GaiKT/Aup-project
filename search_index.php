<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AUP Search System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="bg-info">
    
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-8 mx-auto bg-light rounded p-4">
                <h2 class="text-center font-weight-bold">AUP Search System</h2>
                <hr class="my-1">
                <h6 class="text-center text-secondary">โปรแกรมค้นหาข้อมูล Custumer , partner , Vendor ที่เข้าดำเนินการในศูนย์ข้อมูลคอมพิวเตอร์ ตามมาตรฐาน ISO</h6>
                <form action="search_details.php" method="POST" class="p-3" style="position: relative;">
                    <div class="input-group">
                        <input type="text" name="search" id="search" class="form-control form-control-lg border-info rounded-0" placeholder="กรอกเลขประจำตัวประชาชนที่ต้องการค้นหา..." autocomplete="off" required>
                        <div class="input-group-append">
                            <input type="submit" name="submit" value="ค้นหา" class="btn btn-info btn-lg rounded-0">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="list-group" style="position: absolute; width: 400px;" id="show-list"></div>
                    </div>
                    <a href="addmember.php" class="btn btn-success mt-4"> + เพิ่มสมาชิกใหม่</a>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" 
            src="main.js">
    </script>
</body>
</html>
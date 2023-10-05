<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hệ thống quản lý bài hát</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <div class="d-flex">
    <a class="h1 " href="../home/index.php"><i class="bi bi-house"></i></a>
    <h1 class="text-success mx-3 mb-5">Thêm mới</h1>
    </div>
    <form action="../../services/SongService.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Tên bài hát</label>
            <input type="text" name="tenBaiHat" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ca Sĩ</label>
            <input type="text" name="caSi" class="form-control" id="exampleInputEmail1">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Thể loại</label>
            <input type="text" name="idTheLoai" class="form-control" id="exampleInputEmail1">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
</div>
</body>
</html>
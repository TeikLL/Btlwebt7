
<link href="quantri/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="quantri/css/sb-admin-2.min.css" rel="stylesheet">
    <?php
include './authMiddlware.php'; 
// Kiểm tra quyền truy cập,1 là tài khoản quản lý, 0 là tài khoản người dùng
if (!checkLoginAndPermission(1)) {
    echo "<script>alert('Bạn không có quyền truy cập vào trang này.'); windown.location.back();</script>";
    exit();
}
?>
<?php include "headerquantri.php";
include "function_nhomsanpham.php";
$nhomsanpham = new nhomsanpham();
if(isset($_POST['tbOk'])){
    $nhomsanpham->id=isset($_POST['id']) ? $_POST['id'] : '';
    $nhomsanpham->tennhom=isset($_POST['tennhom']) ? $_POST['tennhom'] : '';
    $nhomsanpham->ghichu=isset($_POST['ghichu']) ? $_POST['ghichu'] : '';
   
    $nhomsanpham->insert();

   
}
?>

<div class="container" >
    <h2>Thêm Các Hãng Quần Áo</h2>
    <form action="" method="post">
        <div class="form-group">
            <label for="tensp">Mã Hãng:</label>
            <input type="text" class="form-control" id="id" name="id" required>
        </div>
        <div class="form-group">
            <label for="tensp">Tên Hãng:</label>
            <input type="text" class="form-control"  name="tennhom" required>
        </div>
        <div class="form-group">
            <label for="soluong">Ghi Chú:</label>
            <input type="text" class="form-control" name="ghichu" >
        </div>
       
<button type="submit" class="btn btn-primary" name="tbOk">Chấp nhận</button>
    </form>
</div>
</body>
</html> 

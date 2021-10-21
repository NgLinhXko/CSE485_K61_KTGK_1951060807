<!doctype html>
<?php include('partials/header.php'); ?>
<!--layout-->
<main class="mt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-info">Thêm Người Hiến Máu</h2>
                <?php
                ob_start();
                if (isset($_SESSION['add-member'])) {
                    echo $_SESSION['add-member'];
                    unset($_SESSION['add-member']);
                }

                ?>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="col-mb-3">
                        <label for="txtHoTen" class="col-sm-2 col-form-label">Tên NHM</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtHoTen" name="txtHoTen">
                        </div>
                    </div>
                    <div class="col-mb-3">
                        <label for="txtGT" class="col-sm-2 col-form-label">Giới Tính</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtGT" name="txtGT">
                        </div>
                    </div>
                    <div class="col-mb-3">
                        <label for="txtTuoi" class="col-sm-2 col-form-label">Tuổi</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtTuoi" name="txtTuoi">
                        </div>
                    </div>
                    <div class="col-mb-3">
                        <label for="txtNhomMau" class="col-sm-2 col-form-label">Nhóm Máu</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtNhomMau" name="txtNhomMau">
                        </div>
                    </div>
                    <div class="col-mb-3">
                        <label for="txtMobile" class="col-sm-2 col-form-label">Số Điện Thoại</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtMobile" name="txtMobile">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4" name="btnSave">Lưu</button>
                    <div>
                        <br>
                        <br>
                        <br><br><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
<?php include('partials/footer.php'); ?>
<?php
ob_start();
if (isset($_POST['btnSave'])) {
    //lay gia tri tren form luu vao cac bien
    $ten = $_POST['txtHoTen'];
    $gt = $_POST['txtGT'];
    $tuoi = $_POST['txtTuoi'];
    $nm = $_POST['txtNhomMau'];
    $sdt = $_POST['txtMobile'];
    $sql = "insert into blood_dornor ( bd_name, bd_sex, bd_age, bd_bgroup,bd_phno)
          values ('$ten','$gt','$tuoi','$nm','$sdt')";
    $res = mysqli_query($conn, $sql) or die(mysqli_connect_error());
    if ($res == TRUE) {
        $_SESSION['add-member'] = "<div class='success'>Member Added Successfully.</div>";
        header("location:" . 'http://localhost:8080/CSE485_K61_KTGH_1951060807/CSE485_K61_KTGK_1951060807/manage-member.php');
        die();
    } else {
        $_SESSION['error'] = "<div class='error'>Failed to Add Member.</div>";
        header("location:" . 'http://localhost:8080/CSE485_K61_KTGH_1951060807/CSE485_K61_KTGK_1951060807/error.php');
    }
}
ob_end_flush();
?>

</html>
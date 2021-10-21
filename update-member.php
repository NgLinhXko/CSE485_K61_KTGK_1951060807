<?php include('partials/header.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1 class="text-info">Sửa Thông Tin</h1>
        <br><br>
        <?php
        $id = $_GET['bd_id'];
        $sql = "SELECT * FROM blood_dornor where bd_id=$id";
        $res = mysqli_query($conn, $sql);
        if ($res == true) {
            $count = mysqli_num_rows($res);
            //Check whether we have admin data or not
            if ($count == 1) {
                $rows = mysqli_fetch_assoc($res);
                $ten = $rows['bd_name'];
                $gt = $rows['bd_sex'];
                $tuoi = $rows['bd_age'];
                $nm = $rows['bd_bgroup'];
                $sdt = $rows['bd_phno'];
            } else {
                header('location:' . "http://localhost:8080/CSE485_K61_KTGH_1951060807/CSE485_K61_KTGK_1951060807/manage-member.php");
            }
        }
        ?>
        <form action="" method="POST">
            <div class="col-mb-3">
                <label for="txtHoTen" class="col-sm-2 col-form-label">Tên NHM</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" value="<?php echo $ten ?>">
                </div>
            </div>
            <div class="col-mb-3">
                <label for="txtGT" class="col-sm-2 col-form-label">Giới Tính</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtGT" name="txtGT" value="<?php echo $gt ?>">
                </div>
            </div>
            <div class="col-mb-3">
                <label for="txtTuoi" class="col-sm-2 col-form-label">Tuổi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtTuoi" name="txtTuoi" value="<?php echo $tuoi ?>">
                </div>
            </div>
            <div class="col-mb-3">
                <label for="txtNhomMau" class="col-sm-2 col-form-label">Nhóm Máu</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtNhomMau" name="txtNhomMau" value="<?php echo $nm ?>">
                </div>
            </div>
            <div class="col-mb-3">
                <label for="txtMobile" class="col-sm-2 col-form-label">Số Điện Thoại</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="txtMobile" name="txtMobile" value="<?php echo $sdt ?>">
                </div>
            </div>
            <input class="btn btn-primary" type="hidden" name="bd_id" value="<?php echo $id; ?>">
            <button type="submit" class="btn btn-primary" name="btnSave">Lưu</button>
            <div>
                <br>
                <br>
                <br><br><br>
            </div>
        </form>
    </div>
</div>
<?php
if (isset($_POST['btnSave'])) {
    $id = $_POST['bd_id'];
    $ten = $_POST['txtHoTen'];
    $gt = $_POST['txtGT'];
    $tuoi = $_POST['txtTuoi'];
    $nm = $_POST['txtNhomMau'];
    $sdt = $_POST['txtMobile'];
    $sql = "UPDATE blood_dornor SET
                bd_id='$id',
                bd_name='$ten',
                bd_sex='$gt',
                bd_age='$tuoi',
                bd_bgroup='$nm',
                bd_phno = '$sdt'
            WHERE bd_id='$id'
            ";
    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        $_SESSION['update'] = "<div class='success'>User Updated Successfully.</div>";
        header("location:" . 'http://localhost:8080/CSE485_K61_KTGH_1951060807/CSE485_K61_KTGK_1951060807/manage-member.php');
    } else {
        $_SESSION['update'] = "<div class='error'>Failed to Update User.</div>";
        header("location:" . 'http://localhost:8080/CSE485_K61_KTGH_1951060807/CSE485_K61_KTGK_1951060807/error.php');
    }
}
?>
<?php include('partials/footer.php'); ?>
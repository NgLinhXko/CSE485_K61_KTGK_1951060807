<?php include('partials/header.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h2 class="text-info">Thông Tin Chi Tiết</h2>
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
                $id1 = $rows['bd_id'];
                $ten = $rows['bd_name'];
                $gt = $rows['bd_sex'];
                $tuoi = $rows['bd_age'];
                $time = $rows['bd_reg_date'];
                $nm = $rows['bd_bgroup'];
                $sdt = $rows['bd_phno'];
            } else {
                header('location:' . URL . 'admin2/manage-member.php');
            }
        }
        ?>
        <form action="" method="POST">
            <div class="col-mb-3">
                <label for="txtid" class="col-sm-2 col-form-label">Mã NHM</label>
                <div class="col-sm-10">
                    <span class="d-block p-2 bg-danger text-white"><?php echo $id1 ?></span>
                </div>
            </div>
            <div class="col-mb-3">
                <label for="txtHoTen" class="col-sm-2 col-form-label">Tên NHM</label>
                <div class="col-sm-10">
                    <span class="d-block p-2 bg-danger text-white"><?php echo $ten ?></span>
                </div>
            </div>
            <div class="col-mb-3">
                <label for="txtGT" class="col-sm-2 col-form-label">Giới Tính</label>
                <div class="col-sm-10">
                    <span class="d-block p-2 bg-danger text-white"><?php echo $gt ?></span>
                </div>
            </div>
            <div class="col-mb-3">
                <label for="txtTuoi" class="col-sm-2 col-form-label">Tuổi</label>
                <div class="col-sm-10">
                    <span class="d-block p-2 bg-danger text-white"><?php echo $tuoi ?></span>
                </div>
            </div>
            <div class="col-mb-3">
                <label for="txtNhomMau" class="col-sm-2 col-form-label">Ngày Hiến Máu</label>
                <div class="col-sm-10">
                    <span class="d-block p-2 bg-danger text-white"><?php echo $time ?></span>
                </div>
            </div>
            <div class="col-mb-3">
                <label for="txtNhomMau" class="col-sm-2 col-form-label">Nhóm Máu</label>
                <div class="col-sm-10">
                    <span class="d-block p-2 bg-danger text-white"><?php echo $nm ?></span>
                </div>
            </div>
            <div class="col-mb-3">
                <label for="txtMobile" class="col-sm-2 col-form-label">Số Điện Thoại</label>
                <div class="col-sm-10">
                    <span class="d-block p-2 bg-danger text-white"><?php echo $sdt ?></span>
                </div>
                <br>
                <br>
                <br><br><br>
            </div>
        </form>
    </div>
</div>
<?php include('partials/footer.php'); ?>
<?php include('partials/header.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1 class="text-info">Danh Bạ Người Hiến Máu</h1>
        <?php
        if (isset($_SESSION['add-member'])) {
            echo $_SESSION['add-member'];
            unset($_SESSION['add-member']);
        }
        if (isset($_SESSION['delete'])) {
            echo $_SESSION['delete'];
            unset($_SESSION['delete']);
        }
        if (isset($_SESSION['update'])) {
            echo $_SESSION['update'];
            unset($_SESSION['update']);
        }
        ?>
        <br>
        <br>
        <br>
        <a href="add-member.php" class="btn-primary">Thêm Người Hiến Máu</a>
        <br /><br /><br />
        <table class="tbl-full">
            <tr>
                <th>Mã</th>
                <th>Họ Và Tên</th>
                <th>Giới Tính</th>
                <th>Tuổi</th>
                <th>Nhóm Máu</th>
                <th>Ngày Đăng Kí</th>
                <th>Số Điện Thoại</th>
                <th>Thao Tác Khác</th>
            </tr>
            <?php
            $sql = "select * from blood_dornor";
            $res = mysqli_query($conn, $sql);
            if ($res == TRUE) {
                $count = mysqli_num_rows($res);
                if ($count > 0) {
                    while ($rows = mysqli_fetch_assoc($res)) {
                        $id = $rows['bd_id'];
                        $ten = $rows['bd_name'];
                        $gt = $rows['bd_sex'];
                        $tuoi = $rows['bd_age'];
                        $nm = $rows['bd_bgroup'];
                        $ngay = $rows['bd_reg_date'];
                        $sdt = $rows['bd_phno'];
            ?>
                        <tr>
                            <td><?php echo $id ?></td>
                            <td><?php echo $ten ?></td>
                            <td><?php echo $gt ?></td>
                            <td><?php echo $tuoi ?></td>
                            <td><?php echo $nm ?></td>
                            <td><?php echo $ngay ?></td>
                            <td><?php echo $sdt ?></td>
                            <td>
                                <a href="http://localhost:8080/CSE485_K61_KTGH_1951060807/CSE485_K61_KTGK_1951060807/details.php?bd_id=<?php echo $id; ?>" class="btn-secondary">Chi Tiết</a>
                                <a href="http://localhost:8080/CSE485_K61_KTGH_1951060807/CSE485_K61_KTGK_1951060807/update-member.php?bd_id=<?php echo $id; ?>" class="btn-secondary">Sửa</a>
                                <a href="http://localhost:8080/CSE485_K61_KTGH_1951060807/CSE485_K61_KTGK_1951060807/delete-member.php?bd_id=<?php echo $id; ?>" class="btn-danger">Xóa</a>
                            </td>
                        </tr>
            <?php
                    }
                } else {
                    echo "<tr> <td colspan='7' class='error'> Member not Added Yet. </td> </tr>";
                }
            }
            ?>
        </table>
    </div>
</div>
<?php include('partials/footer.php'); ?>
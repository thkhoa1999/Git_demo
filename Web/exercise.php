<?php
include('header.php');
?>

<div class="row container">
    <div class="col-4" style="margin-left:0px ;">
        <p>
            Bài tập tuần 1-FORM<br>
            <a href="?Chuong=BTTuan1_Form&Bai=hinhchunhat">Bài hình chữ nhật</a><br>
            <a href="?Chuong=BTTuan1_Form&Bai=hinhtron">Bài chữ tròn</a><br>  
            <a href="?Chuong=BTTuan1_Form&Bai=MayTinh">Bài máy tính</a><br>  
            <a href="?Chuong=BTTuan1_Form&Bai=tinhtiendien">Bài tính tiền điện</a><br>  
            <a href="?Chuong=BTTuan1_Form&Bai=karaoke">Bài tính tiền karaoke</a><br> 
            <a href="?Chuong=BTTuan1_Form&Bai=ketquathidaihoc">Bài tính điểm thi<a><br>
            <a href="BTTuan1_Form/Bai7.html">Bài nhập thông tin cá nhân<a><br>
        </p>
        <p>Bài tập tuần 2- Mảng và chuỗi<br>
            <a href="?Chuong=BTTuan2_MangvaChuoi&Bai=Bai1">Bài tạo chuỗi</a><br>
            <a href="?Chuong=BTTuan2_MangvaChuoi&Bai=NamNhuan">Bài tính năm nhuận</a><br>  
            <a href="?Chuong=BTTuan2_MangvaChuoi&Bai=BT_TH3">Bài tính năm âm lịch</a><br>  
            <a href="?Chuong=BTTuan2_MangvaChuoi&Bai=BT_TH4">Bài tập dãy số</a><br>  
            <a href="?Chuong=BTTuan2_MangvaChuoi&Bai=BT_TH5">Bài tập phát sinh mảng và tính toán</a><br> 
            <a href="?Chuong=BTTuan2_MangvaChuoi&Bai=BT_TH6">Bài tìm kiếm số trong mảng<a><br>
            <a href="?Chuong=BTTuan2_MangvaChuoi&Bai=BT_TH7">Bài thay thế số trong mảng<a><br>
            <a href="?Chuong=BTTuan2_MangvaChuoi&Bai=BT_TH8">Bài sắp xếp mảng<a><br>
            <a href="?Chuong=BTTuan2_MangvaChuoi&Bai=BT_TH9">Bài mảng tổng hợp<a><br>
            <a href="?Chuong=BTTuan2_MangvaChuoi&Bai=BT_TH10">Bài mảng tổng hợp<a><br>
        </p>
        <p>Bài tập tuần 1<br>
            <a href="BT_HuongDoiTuong/Bai1_QLNV.php">Bài QLNV</a><br>
            <a href="BT_HuongDoiTuong/PhanSo.php">Bài phân số</a><br>  
        </p>
           
    </div>
    <div class="col-8">
        <?php 
            if(isset($_GET['Chuong']) && isset($_GET['Bai'])) {
                include($_GET['Chuong']."/".$_GET['Bai'].".php");
            }
        ?>
    </div>
</div>

<?php
include('footer.php');
?>
<div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="">
                        <a href="index.php"><i class="fas fa-home"></i> Trang chủ</a>
                    </li>

                    <li>
                        <a href="index.php?page=list-tables&method=list"><i class="far fa-edit"></i> Gọi món</a>
                    </li>
<?php 
    if(isset($_SESSION['stt']) && $_SESSION['stt']==1){
        ?>
             <li>
                        <a href="index.php?page=list-foods&method=list"><i class="far fa-edit"></i> Quản lý thực đơn</a> 
                    </li>
                    <li>
                        <a href="index.php?page=add-foods&method=add"><i class="far fa-edit"></i> Thêm món ăn</a> 
                    </li>
                    <li>
                        <a href="index.php?page=add-tables&method=add"><i class="far fa-edit"></i> Thêm bàn ăn</a> 
                    </li>
                    <li>
                        <a href="index.php?page=list-tables&method=bills"><i class="far fa-edit"></i> Doanh thu theo ngày</a> 
                    </li>
                    <li>
                        <a href="index.php?page=list-tables&method=total-bill"><i class="far fa-edit"></i> Quản lý hóa đơn</a> 
                    </li>
        <?php
    }
 ?>

                </ul>
            </div>
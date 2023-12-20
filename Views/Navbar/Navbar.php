<?php
require_once "../Templates/Button/ButtonNavbar.php";
require_once "../Templates/Search/SearchNavbar.php";
require_once "../Templates/Cart/CartNavbar.php";
require_once "../Templates/Profile/ProfileNavbar.php";


?>
<div id="main-container" class="container-fluid">
    <div class="row">
        <div class="col">
            <nav class="navbar p-0">
                <span id="brand" class="h1">
                    <b>DDA-Comectic</b>
                </span>
            </nav>
        </div>
    </div>

    <div class="row">
        <div class="col-7">
            <?php  echo ButtonNavbar("BEST SELLERS", "#1", 120) ?>
            <?php echo ButtonNavbar("NEW", "#2", 120) ?>
            <?php echo ButtonNavbar("SKINCARE", "#3", 120) ?>
            <?php echo ButtonNavbar("GIFTS & SETS", "#4", 120) ?>
            <?php echo ButtonNavbar("WOMEN & MEN", "#1", 150) ?>
        </div>

        <div class="col-5 ">
            <div class="row">
                <div class="col-5">
                    <?php echo SearchNavbar() ?>

                </div>
                <div class="col-3">
                    <?php echo CartNavbar() ?>
                </div>
                <!-- Check Login để quyết định hiển thị -->

                <!-- <div class="col-4">
                    <?php echo ProfileNavbar() ?>
                     
                </div> -->

                <div class="col-4">
                    <?php echo ProfileNavbarLogin() ?>
                     
                </div>
                <!-- ..................... -->
            </div>
        </div>

    </div><br>



</div>
<?php 
    require_once "../Templates/cardProduct/cardProduct.php";
    require_once "../Templates/Border/HrCard.php";
?>

<?php generateDiscountHeader("50% OFF SELECT BEST SELLERS");?>
<?php $b = [1452, 1, 2, 3, 4, 5, 6, 7, 8, 2, 1, 35, 115, 53, 53, 4, 15, 53, 43, 46, 135, 12, 642, 864, 462, 12, 24, 43, 86, 26] ?>

<div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="9000">
    <div class="carousel-inner">

        <?php
        $totalItemsB = count($b);
        $slidesB = ceil($totalItemsB / 4);

        for ($i = 0; $i < $slidesB; $i++) {
            echo '<div class="carousel-item ' . ($i === 0 ? 'active' : '') . '">
                    <div class="card-wrapper container-sm d-flex justify-content-around">';

            // Lặp qua 4 phần tử mỗi lần
            for ($j = $i * 4; $j < min(($i + 1) * 4, $totalItemsB); $j++) {
                generateProductCard($b[$j]);
            }

            echo '</div></div>';
        }
        ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<?php generateDiscountHeader("ULTRA FACIAL FAVORITES");?>
<?php $a = [1452, 1, 2, 3, 4, 5, 6, 7, 8, 2, 1, 35, 115, 53, 53, 4, 15, 53, 43, 46, 135, 12, 642, 864, 462, 12, 24, 43, 86, 26] ?>

<div id="carouselExampleControls1" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="9000">
    <div class="carousel-inner">

        <?php
        $totalItems = count($a);
        $slides = ceil($totalItems / 4);

        for ($i = 0; $i < $slides; $i++) {
            echo '<div class="carousel-item ' . ($i === 0 ? 'active' : '') . '">
                    <div class="card-wrapper container-sm d-flex justify-content-around">';

            // Lặp qua 4 phần tử mỗi lần
            for ($j = $i * 4; $j < min(($i + 1) * 4, $totalItems); $j++) {
                favoritesProductCard($a[$j]);
            }

            echo '</div></div>';
        }
        ?>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php generateDiscountHeader("OUR SERVICES");?>
<style>
    #ImgService{
        margin-bottom: 100px;
    }
</style>
<div class="container-fluid ">
 
    <div class="row">
        <div class="col-1 ">
           
        </div>
        <div class="col-5 " style="">
            <div class="row">
                <div class="col ">
                GET REWARDED FORTREATING YOUR SKIN!
                </div>
            </div>
            <div class="row">
                <div class="col">
                Join My DDA Rewards to start earning points, rewards, and exclusive perks! Earn 1 point for every $1 spent (100 points=$10 OFF!)
                </div>
            </div>
        </div>
        <div class="col-5 ">
            <img id="ImgService" src="https://res.cloudinary.com/duas1juqs/image/upload/v1703078914/Web%20DDA%20COMECTIC/bqj9oialnhxwdqbuibdt.png" alt="">
        </div>
        <div class="col-1 ">
            
        </div>
    </div>
</div>
<?php generateDiscountHeader("CHOSEN FOR YOU");?>

<?php ?>
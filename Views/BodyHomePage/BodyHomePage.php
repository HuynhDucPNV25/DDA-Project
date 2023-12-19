<?php 
    require_once "../Templates/cardProduct/cardProduct.php";
?>
<div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card-wrapper container-sm d-flex  justify-content-around">
                <?php generateProductCard(1452); ?>
                <?php generateProductCard(1412); ?>
                <?php generateProductCard(1580); ?>
                <?php generateProductCard(1580); ?>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card-wrapper container-sm d-flex   justify-content-around">
                <?php generateProductCard(1452); ?>
                <?php generateProductCard(1580); ?>
                <?php generateProductCard(1412); ?>
                <?php generateProductCard(1580); ?>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card-wrapper container-sm d-flex  justify-content-around">
                <?php generateProductCard(1580); ?>
                <?php generateProductCard(1452); ?>
                <?php generateProductCard(1412); ?>
                <?php generateProductCard(1580); ?>
            </div>
        </div>
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
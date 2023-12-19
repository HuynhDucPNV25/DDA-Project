<?php
function generateProductCard($totalVotes) {
    echo '
            <div class="card mr-3">
                <div class="circle-container">
                    <span>Bests Seller</span>
                </div>
                <img class="img"
                    src="https://giadinh.mediacdn.vn/296230595582509056/2022/2/17/27212817110061775266623491256080737665900375n-16450863187391857196552.jpg"
                    alt="a">
                <div class="title">G9-Skin White In Creamy Pack Whitening Cream</div>
                <div class="rating">
                    <input value="5" name="rate" id="star5" type="radio">
                    <label title="text" for="star5"></label>
                    <input value="4" name="rate" id="star4" type="radio">
                    <label title="text" for="star4"></label>
                    <input value="3" name="rate" id="star3" type="radio" checked="">
                    <label title="text" for="star3"></label>
                    <input value="2" name="rate" id="star2" type="radio">
                    <label title="text" for="star2"></label>
                    <input value="1" name="rate" id="star1" type="radio">
                    <label title="text" for="star1"></label>
                    <span class="ratingTotal">(' . $totalVotes . ')</span>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="oldPrice">
                            $50.00
                            <hr class="removePrice">
                        </div>
                    </div>
                    <div class="col"></div>
                    <div class="col ">
                        <span class="newPrice">$30.00</span>
                    </div>
                    <div class="col"></div>
                </div>
            </div>
        ';
}

?>

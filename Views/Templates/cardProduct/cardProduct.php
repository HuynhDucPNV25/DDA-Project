<style>
    
.card {
  position: relative;
  width: 273px;
  height: auto;
  box-shadow: 0px 1px 13px rgba(0, 0, 0, 0.1);
  cursor: pointer;
  transition: all 120ms;
  display: flex;
  align-items: center;
  justify-content: center;
}

.circle-container {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 78px;
  /* Đường kính = bán kính * 2 = 39 * 2 = 78px */
  height: 78px;
  border-radius: 50%;
  /* Tạo thành hình tròn */
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #F3A9C6;
}

.circle-container1 {
  position: absolute;
  top: 0px;
  left: 0px;
  width: 78px;
  /* Đường kính = bán kính * 2 = 39 * 2 = 78px */
  height: 78px;
  border-radius: 50%;
  /* Tạo thành hình tròn */
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: #388F70;
}

.circle-container1 span {
  text-align: center;
  color: #FAF2F2;
  font-family: Noto Serif;
  font-size: 20px;
  font-style: normal;
  font-weight: 700;
  line-height: normal;
  letter-spacing: 0.7px;
  text-transform: capitalize;
}

.circle-container span {
  width: 60px;
  text-align: center;
  color: #000;
  font-family: Noto Serif;
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  letter-spacing: 0.49px;
  text-transform: capitalize;
}
.img {
  margin-top: 40px;
  background: white;
  width: 204px;
  height: 234px;
  flex-shrink: 0;
  display: grid;
  place-items: center;
}

.title {
  margin-top: 10px;
  width: 80%;
}

.rating {
  position: relative;
  margin-left: -60px;
}

.rating:not(:checked)>input {
  position: absolute;
  appearance: none;
}

.rating:not(:checked)>label {
  float: right;
  cursor: pointer;
  font-size: 30px;
  color: #666;
}

.rating:not(:checked)>label:before {
  content: '★';
  color: #ff9e0b;

}

.ratingTotal {
  position: absolute;
  bottom: 20px;
  right: -43px;
  color: #000;
  font-family: Noto Serif;
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  line-height: normal;
  letter-spacing: 0.49px;
  text-transform: capitalize;
}

.oldPrice {
    color:black;
}

.newPrice {
  color: #F40707;
}

.removePrice {
  position: absolute;
  top: -4px;
  width: 50px;
  border: 1px solid black;

}
</style>
<?php
function generateProductCard($totalVotes) {
    echo '
            <div class="card mr-3 mb-3">
                <div class="circle-container1">
                    <span>50 % OFF</span>
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
                    <div class="col">
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                    <button class="btn mb-3" id="buynowBtn">Buy Now</button>
                    </div>
                </div>
            </div>
        ';
} 


function favoritesProductCard($totalVotes) {
    echo '
            <div class="card mr-3 mb-3">
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
                <button class="btn mb-3" id="buynowBtn">Buy Now</button>
            </div>
        ';
}
?>

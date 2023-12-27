<style>
#buynowBtn {
    width: 180px;
    height: auto;
    border-radius: 15px;
    border: 1px solid #000;
    background: #F3A9C6;
    color: #FFF;
    font-family: Noto Sans;
    font-size: 19px;
    font-style: normal;
    font-weight: 900;
    line-height: normal;
    letter-spacing: 5.7px;
    text-transform: uppercase;
}

#buynowBtn:hover {
    background: #f70063;
    color: #FFF;
}
</style>

<?php
function ButtonBuyNow(){
    echo '<button class="btn mr-5" id="buynowBtn">Buy Now</button>';
}
?>
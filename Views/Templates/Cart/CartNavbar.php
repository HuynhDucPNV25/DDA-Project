<style>
    #CartNavbar {
        position: relative;
    }

    #iconCart {
        position: absolute;
        left: 40px;
        top: 20px;
        text-align: center;
        transform: translateY(-50%);
        font-size: 20px;
        font-family: Noto Sans;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 4.20px;
        word-wrap: break-word;
        color: black;
        right: 30px;
        width: 110px;
    }

    #iconCart:hover,
    #cartIcon:hover {
        color: pink;
    }

    a:hover {
        text-decoration: none;
    }

    #cartIcon {
        position: absolute;
        color: azure;
        font-size: 35px;
    }
</style>
<?php
function CartNavbar()
{
    echo '
   
        <form class="form-inline" id="CartNavbar">
            <a href="#" id="cartLink" id="cartIconNav">
                <i class="fa-solid fa-cart-shopping"  id="cartIcon"></i>
                <label id="iconCart" style="">
                
                My Bag</label>
            </a>
        </form>
    ';
}
?>
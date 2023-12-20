<?php
function generateDiscountHeader($text) {
    echo '
<div class="container-fluid" id="borderHr">
    <div class="row d-flex text-center">
            <div class="col ml-2"><hr id="hr"></div>
            <div class="col">
                <h2>' . $text . '</h2>
            </div>
            <div class="col mr-2"><hr id="hr"></div>
          </div>
</div>
';
}
?>
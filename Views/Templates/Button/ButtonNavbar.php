<style>
    #ButtonNavbar {
        border: 2px solid #DC85A7 ;
        border-radius: 8px;
        background-color:azure;
        margin-right: 15px;
        color: #DC85A7; 
    }
    #text1{
        color: #DC85A7;
        text-align: center;
        font-family: Noto Sans;
        font-size: 14px;
       
    }
    a:hover {
        text-decoration: none;
    }
    #ButtonNavbar:focus {
        color: #DC85A7;
        background-color:darkcyan;
    }
    #text1:hover{
        color: pink;
    }

        
       
</style>


<?php
function ButtonNavbar($text, $link,$width) {
    echo '
        <a href="' . $link . '">
        <button class="custom-button" id="ButtonNavbar" style="width: ' . $width . 'px;">
               <b> <span id="text1">'. $text .'</span> </b>
            </button>
        </a>';
}
?>

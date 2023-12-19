<style>

    #SearchNavbar {
        position: relative;
    }
    #iconSearch{
        position: absolute;
        left: 160px;
        color:darkgray;
    }

</style>

<?php
function SearchNavbar() {
    return '
        <form class="form-inline" id="SearchNavbar">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Tìm kiếm">
            <i id="iconSearch" class="fa-solid fa-magnifying-glass"></i>
        </form>
    ';
}

?>

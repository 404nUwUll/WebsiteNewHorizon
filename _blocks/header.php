<div class="d-flex flex-row p-3 bg-white shadow justify-content-between position-fixed top-0 w-100" style="z-index: 999;">
    <div class="d-flex">
        <img src="./imgs/logo.png" alt="" class="object-fit-contain" width="200">
    </div>

    <div class="d-flex position-absolute w-100 justify-content-center">
        <?php
            require_once "pill_navbar.php";
        ?>
    </div>

    <div>
        <?php
            require_once "profile.php";
            ?>
    </div>
</div>
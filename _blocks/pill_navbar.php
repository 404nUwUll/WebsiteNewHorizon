<div class="d-none d-md-flex flex-row rounded mt-3 p-2 bg-white shadow position-absolute" style="transform: translateY(50%);">
    <?php
        foreach ($_SESSION['navbar_links'] as $link => $text){
    ?>
        <a href="<?php echo $link ?>" class="btn text-decoration-none text-dark mx-2">
            <?php echo $text ?>
        </a>
    <?php
        }
    ?>
</div>
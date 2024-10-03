<footer class="position-relative py-3 bg-dark w-100 d-flex flex-column bottom-0">
    <ul class="nav justify-content-center border-bottom pb-3 mb-3">
        <?php
            foreach ($_SESSION['navbar_links'] as $link => $text){
        ?>
            <li class="nav-item"><a href="#" class="nav-link px-2 text-white"><?php echo $text ?></a></li>
        <?php
            }
        ?>
    </ul>
    <p class="text-center text-white">© 2024 Company, Inc</p>
</footer>
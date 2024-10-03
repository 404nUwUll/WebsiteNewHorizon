<div class="d-block d-md-flex w-100 overflow-hidden" style="max-width: 100vw; min-height: 100vh;">
    <div class="d-flex flex-column w-100 align-items-center cabout">
        <h1 class="display-4 mt-5">About our Product</h1>
        <p class="d-flex lead m-5" style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam at sem venenatis, ultrices mi et, porta eros. Etiam erat mauris, consequat iaculis malesuada vitae, volutpat eget purus. Praesent tincidunt urna et semper blandit. Ut est nibh, porta non purus nec, accumsan consequat nisi. Integer euismod tincidunt justo sed pellentesque. Etiam bibendum massa non velit sodales commodo. Nam vel leo a ante dignissim congue. Donec tempus est nec vestibulum mattis. Curabitur elementum neque sed porta tempus. Sed vulputate urna libero, vitae elementum dui sagittis eu. Aliquam ipsum ipsum, convallis ac volutpat in, tristique suscipit dui. Praesent in nibh dictum nunc consequat congue. Sed porta congue felis eget suscipit. Nulla interdum ipsum eu nulla dapibus, quis ornare urna condimentum. Ut augue dolor, sodales gravida ultrices sit amet, blandit ac nisl.</p>
        <p class="blockquote-footer w-100 p-5 text-end" style="font-size: 1.5rem;">FULANO, Anônimo.</p>
        <a href="#" class="btn btn-secondary btn-lg rounded-pill text-white w-50 py-3 m-4">Saiba mais</a>
    </div>
    <div class="d-flex flex-column w-100 justify-content-center align-items-center cabout" style="height: 100vh;">
        <div class="d-flex overflow-hidden justify-content-center align-items-center text-center cimgrow" style="width: 24rem; height:40rem;" onmouseover="artificialhover(this)" onmouseout="artificialhout(this)">
            <img src="./imgs/pic0.jpg" alt="" class="h-100" style="object-fit: contain;">
        </div>
    </div>
</div>
<script>
    function verificarScroll() {
        const elementos = document.querySelectorAll(".cabout");
        elementos.forEach(elemento => {
            const rect = elemento.getBoundingClientRect();
            const windowHeight = window.innerHeight;

            // Verifica se o elemento está no centro da tela
            if (rect.top >= (windowHeight / 2)) {
                elemento.style.opacity = 0
                elemento.style.transform = 'translateX(100px)'
            } else {
                elemento.style.opacity = 1
                elemento.style.transform = 'translateX(0)'
            }
        })
    }
    window.addEventListener('scroll', verificarScroll)
    verificarScroll()


    function artificialhover(element){
        element.style.width="36rem";
        element.style.height="60rem";
    }

    function artificialhout(element){
        element.style.width="24rem";
        element.style.height="40rem";
    }
</script>
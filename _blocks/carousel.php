<div id="carousel" class="position-relative w-100 justify-content-center d-flex" style="height: 76vh; background-color: grey;">
    <div class="position-absolute bottom-0 mx-auto d-none d-md-flex flex-row my-2 rounded" style="background-color: rgba(0, 0, 0, 0.7);">
        <a href="#" class="cdot m-3"></a>
        <a href="#" class="cdot m-3"></a>
        <a href="#" class="cdot m-3"></a>
    </div>
</div>
<script>
    document.addEventListener("DOMContentLoaded", function() {
    const carousel = document.getElementById("carousel");
    const navegadores = document.getElementsByClassName("cdot");
    const imagens = [`wallpaper0.jpg`, `wallpaper1.jpg`, `wallpaper2.png`];
    const code_pieces = [
        `<h1 class="display-1 text-white">Break Free</h1>
         <p class="lead text-white">Your dreams will lead you everywhere.</p>`,
        `<h1 class="display-1 text-white">New Horizons</h1>
         <p class="lead text-white">Are waiting for you.</p>`,
        `<h1 class="display-1 text-white">Carpe Diem</h1>
         <p class="lead text-white">Have a good time, your time is precious.</p>`
    ];

    // Define o conteúdo inicial
    let currentIndex = 0;
    carousel.style.backgroundImage = `url("./imgs/_carousel_imgs/${imagens[currentIndex]}")`;

    // Adiciona os containers de texto
    carousel.innerHTML += `
        <div class="d-none d-md-flex flex-column position-absolute text-white p-3" style="top: 8rem; left: 5rem; background-color: rgba(0, 0, 0, 0.7);" id="text-container-desktop">
            ${code_pieces[0]}
        </div>
        <div class="d-flex d-md-none flex-column position-absolute text-white p-3" style="bottom: 8rem; background-color: rgba(0, 0, 0, 0.7);" id="text-container-mobile">
            ${code_pieces[0]}
        </div>
    `;

    let timer; // Para armazenar o temporizador

    function changeImage() {
        currentIndex = (currentIndex + 1) % imagens.length; // Atualiza o índice da imagem

        // Atualiza a imagem e o texto
        carousel.style.backgroundImage = `url("./imgs/_carousel_imgs/${imagens[currentIndex]}")`;

        // Atualiza o texto em ambos os containers
        const textContainerDesktop = document.getElementById("text-container-desktop");
        const textContainerMobile = document.getElementById("text-container-mobile");
        textContainerDesktop.innerHTML = code_pieces[currentIndex];
        textContainerMobile.innerHTML = code_pieces[currentIndex];

        resetTimer(); // Reinicia o temporizador
    }

    function resetTimer() {
        clearTimeout(timer); // Limpa o temporizador anterior
        timer = setTimeout(changeImage, 5000); // Define um novo temporizador de 3 segundos
    }

    Array.from(navegadores).forEach((element, index) => {
        element.addEventListener("click", function() {
            currentIndex = index; // Atualiza o índice atual

            // Atualiza a imagem e o texto
            carousel.style.backgroundImage = `url("./imgs/_carousel_imgs/${imagens[index]}")`;

            const textContainerDesktop = document.getElementById("text-container-desktop");
            const textContainerMobile = document.getElementById("text-container-mobile");
            textContainerDesktop.innerHTML = code_pieces[index];
            textContainerMobile.innerHTML = code_pieces[index];

            resetTimer(); // Reinicia o temporizador ao clicar
        });
    });

    resetTimer(); // Inicia o temporizador ao carregar a página
});
</script>
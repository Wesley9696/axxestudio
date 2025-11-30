<?php
// includes/footer.php
?>
    </main>

    <footer id="whatsapp" class="main-footer">
        <div class="container footer-content">
            <div class="footer-logo">
                <img src="img/logoapeex.png" alt="Axxe Estúdio Logo">
            </div>
            <nav class="footer-links" aria-label="Links do rodapé">
                <a href="#inicio">Início</a>
                <a href="#nosso-estudio">Nosso Estúdio</a>
                <a href="#nosso-estudio">Sobre</a> 
                <a href="https://wa.me/5541984141500?text=Ol%C3%A1%2C+gostaria+de+saber+mais+sobre+grava%C3%A7%C3%B5es+na+AXXEEST%C3%9ADIO."
                    target="_blank">WhatsApp</a>
                <a href="tel:+5541984141500">+55 (41) 98414-1500</a>
            </nav>
            <div class="social-media">
                <a href="#" aria-label="Spotify" target="_blank" rel="noopener noreferrer">
                    <img src="img/spotify.svg" alt="Spotify">
                </a>
                <a href="https://www.youtube.com/@imovelcwbpodcast/videos" aria-label="YouTube" target="_blank"
                    rel="noopener noreferrer">
                    <img src="img/youtube.svg" alt="YouTube">
                </a>
                <a href="https://www.instagram.com/axxeestudio/" aria-label="Instagram" target="_blank"
                    rel="noopener noreferrer">
                    <img src="img/instagram.svg" alt="Instagram">
                </a>
                <a href="#" aria-label="TikTok" target="_blank" rel="noopener noreferrer">
                    <img src="img/tiktok.svg" alt="TikTok">
                </a>
            </div>
        </div>
        <div class="container copyright">
            <p>&copy; 2025 Axxe Estúdio. Todos os direitos reservados.</p>
        </div>
    </footer>

    <div id="lightbox-modal" class="lightbox-modal">
        <button class="lightbox-close" aria-label="Fechar imagem">&times;</button>
        <div class="lightbox-content">
            <img src="" alt="" id="lightbox-image">
            <div class="lightbox-caption"></div>
        </div>
    </div>

    <script>
        // Mobile Menu Toggle
        document.addEventListener('DOMContentLoaded', function () {
            const menuToggle = document.querySelector('.menu-toggle');
            const mainNav = document.querySelector('.main-nav');

            if (menuToggle && mainNav) {
                menuToggle.addEventListener('click', function () {
                    const isOpen = mainNav.classList.contains('open');

                    menuToggle.classList.toggle('active');
                    mainNav.classList.toggle('open');
                    document.body.classList.toggle('menu-open');

                    menuToggle.setAttribute('aria-expanded', !isOpen);
                });

                const navLinks = mainNav.querySelectorAll('a');
                navLinks.forEach(link => {
                    link.addEventListener('click', function () {
                        menuToggle.classList.remove('active');
                        mainNav.classList.remove('open');
                        document.body.classList.remove('menu-open');
                        menuToggle.setAttribute('aria-expanded', 'false');
                    });
                });
            }
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                const href = this.getAttribute('href');
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }
                }
            });
        });

        // Lightbox functionality
        const galleryItems = document.querySelectorAll('.gallery-item');
        const lightboxModal = document.getElementById('lightbox-modal');
        const lightboxImage = document.getElementById('lightbox-image');
        const lightboxCaption = document.querySelector('.lightbox-caption');
        const lightboxClose = document.querySelector('.lightbox-close');

        galleryItems.forEach(item => {
            item.addEventListener('click', function (e) {
                e.preventDefault();

                // Pega a URL da imagem do estilo de fundo do elemento
                const bgImage = window.getComputedStyle(this).backgroundImage;
                const imageUrl = bgImage.slice(5, -2).replace(/"/g, ''); // Remove 'url("' e '")', e aspas extras se houver
                const title = this.querySelector('h3').textContent;

                lightboxImage.src = imageUrl;
                lightboxImage.alt = title;
                lightboxCaption.textContent = title;

                lightboxModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            });
        });

        // CORREÇÃO MANTIDA: 'click' em vez de 'cl9ick' (já estava corrigido no HTML original)
        lightboxClose.addEventListener('click', closeLightbox);

        lightboxModal.addEventListener('click', function (e) {
            if (e.target === lightboxModal) {
                closeLightbox();
            }
        });

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && lightboxModal.classList.contains('active')) {
                closeLightbox();
            }
        });

        function closeLightbox() {
            lightboxModal.classList.remove('active');
            document.body.style.overflow = '';
        }
    </script>
</body>

</html>
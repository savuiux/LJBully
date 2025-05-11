document.addEventListener('DOMContentLoaded', () => {
    window.addEventListener('load', () => {
        const preloader = document.querySelector('.preloader');
        if (preloader) {
            preloader.classList.add('hidden');
            setTimeout(() => preloader.remove(), 600);
        }
        animateOnScroll();
        animateNavbar();
    });

    const navbar = document.querySelector('.navbar');
    const backToTop = document.querySelector('.back-to-top');
    function animateNavbar() {
        if (navbar && backToTop) {
            navbar.classList.toggle('scrolled', window.scrollY > 50);
            backToTop.classList.toggle('visible', window.scrollY > 300);
            const logo = document.querySelector('.logo');
            if (logo) logo.classList.add('visible');
            document.querySelectorAll('.nav-links a').forEach(link => link.classList.add('visible'));
        }
    }

    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', () => {
            const navLinks = document.querySelector('.nav-links');
            const authButtons = document.querySelector('.auth-buttons');
            if (navLinks && authButtons) {
                navLinks.classList.toggle('active');
                authButtons.classList.toggle('active');
                mobileMenuButton.textContent = navLinks.classList.contains('active') ? '✕' : '☰';
            }
        });
    }

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', (e) => {
            const href = anchor.getAttribute('href');
            if (href === '#') return;
            e.preventDefault();
            const targetId = href.substring(1);
            const targetElement = document.getElementById(targetId);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    if (backToTop) {
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    function animateOnScroll() {
        const elements = document.querySelectorAll('.card, .hero-content, .footer-links, .footer-logo, .footer-text');
        if (elements.length > 0) {
            elements.forEach(element => {
                const { top } = element.getBoundingClientRect();
                const triggerPoint = window.innerHeight * 1;
                if (top < triggerPoint) {
                    element.classList.add('visible');
                }
            });
        }
    }

    const images = document.querySelectorAll('img[loading="lazy"]');
    if (images.length > 0) {
        const imageObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    imageObserver.unobserve(img);
                }
            });
        });
        images.forEach(img => imageObserver.observe(img));
    }

    document.querySelectorAll('a, button, .hero .btn, .auth-buttons a').forEach(element => {
        element.addEventListener('mousedown', () => {
            element.style.outline = 'none';
        });
        element.addEventListener('mouseup', () => {
            element.style.outline = '';
        });
    });

    window.addEventListener('scroll', () => {
        animateOnScroll();
        animateNavbar();
    });

    window.addEventListener('resize', animateOnScroll);
});
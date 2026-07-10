/**
 * Custom JavaScript Script for Verdant Consulting Group
 * Vanilla ES6 JavaScript Implementation
 */

document.addEventListener('DOMContentLoaded', () => {
    // 1. Navbar Scrolled State Toggle
    const navbar = document.querySelector('.navbar-custom');
    const toggleScrolledState = () => {
        if (window.scrollY > 20) {
            navbar?.classList.add('scrolled');
        } else {
            navbar?.classList.remove('scrolled');
        }
    };
    window.addEventListener('scroll', toggleScrolledState);
    toggleScrolledState(); // Initial check

    // 2. Scroll to Top Button Action
    const scrollToTopBtn = document.querySelector('.scroll-to-top-btn');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 300) {
            scrollToTopBtn?.classList.add('visible');
        } else {
            scrollToTopBtn?.classList.remove('visible');
        }
    });

    scrollToTopBtn?.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // 3. Incrementing Statistics Counter
    const statsSection = document.getElementById('statistics');
    const statCounters = document.querySelectorAll('.stat-number');
    let countersInitiated = false;

    const runCounters = () => {
        statCounters.forEach(counter => {
            const targetVal = parseInt(counter.getAttribute('data-target') || '0', 10);
            let currentVal = 0;
            const duration = 1500; // 1.5s
            const intervalTime = 30;
            const step = Math.ceil((targetVal / duration) * intervalTime);

            const timer = setInterval(() => {
                currentVal += step;
                if (currentVal >= targetVal) {
                    counter.textContent = targetVal.toString();
                    clearInterval(timer);
                } else {
                    counter.textContent = currentVal.toString();
                }
            }, intervalTime);
        });
    };

    if (statsSection && statCounters.length > 0) {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && !countersInitiated) {
                    countersInitiated = true;
                    runCounters();
                }
            });
        }, { threshold: 0.3 });
        observer.observe(statsSection);
    }

    // 4. Testimonials Rotator State
    const testimonials = document.querySelectorAll('.testimonial-slide');
    const dots = document.querySelectorAll('.testimonial-dot');
    const prevBtn = document.querySelector('.testimonial-prev');
    const nextBtn = document.querySelector('.testimonial-next');
    let activeIndex = 0;

    const showTestimonial = (index) => {
        if (testimonials.length === 0) return;
        testimonials.forEach((slide, idx) => {
            slide.classList.add('d-none');
            dots[idx]?.classList.remove('active');
            if (dots[idx]) {
                dots[idx].style.width = '6px';
                dots[idx].style.backgroundColor = 'rgba(40, 90, 72, 0.3)';
            }
        });

        testimonials[index].classList.remove('d-none');
        dots[index]?.classList.add('active');
        if (dots[index]) {
            dots[index].style.width = '24px';
            dots[index].style.backgroundColor = '#408A71';
        }
        activeIndex = index;
    };

    if (testimonials.length > 0) {
        showTestimonial(0);

        prevBtn?.addEventListener('click', () => {
            let nextIndex = activeIndex - 1;
            if (nextIndex < 0) nextIndex = testimonials.length - 1;
            showTestimonial(nextIndex);
        });

        nextBtn?.addEventListener('click', () => {
            let nextIndex = (activeIndex + 1) % testimonials.length;
            showTestimonial(nextIndex);
        });

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                showTestimonial(index);
            });
        });

        // Auto rotation
        setInterval(() => {
            let nextIndex = (activeIndex + 1) % testimonials.length;
            showTestimonial(nextIndex);
        }, 8000);
    }

    // 5. General FAQ Accordion Collapsible Logic
    const faqButtons = document.querySelectorAll('.faq-btn');
    faqButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            const collapseId = btn.getAttribute('data-target');
            const collapseElement = document.getElementById(collapseId || '');
            const icon = btn.querySelector('.faq-icon');

            if (collapseElement) {
                const isOpen = !collapseElement.classList.contains('d-none');
                if (isOpen) {
                    collapseElement.classList.add('d-none');
                    if (icon) icon.style.transform = 'rotate(0deg)';
                } else {
                    collapseElement.classList.remove('d-none');
                    if (icon) icon.style.transform = 'rotate(180deg)';
                }
            }
        });
    });

    // 6. Contact Form
    const contactForm = document.getElementById('advisory-contact-form');

    contactForm?.addEventListener('submit', () => {

        const submitBtn = contactForm.querySelector('button[type="submit"]');

        submitBtn.innerHTML = `
            <span class="spinner-border spinner-border-sm me-2"></span>
            Sending...
        `;

        submitBtn.disabled = true;

    });

    // Footer Review Form
    const reviewForm = document.getElementById('footer-review-form');

    reviewForm?.addEventListener('submit', () => {

        const submitBtn = reviewForm.querySelector('button[type="submit"]');

        submitBtn.innerHTML = `
            <span class="spinner-border spinner-border-sm me-2"></span>
            Submitting...
        `;

        submitBtn.disabled = true;

    });


    // 7. Footer Experience Form Star Rating
    const stars = document.querySelectorAll('#footer-star-rating .star');
    const ratingInput = document.getElementById('footer-rating-input');

    function updateStars(rating){

        stars.forEach((star,index)=>{

            if(index<rating){

                star.classList.add('active');

            }else{

                star.classList.remove('active');

            }

        });

    }

    updateStars(5);

    stars.forEach(star=>{

        star.addEventListener('click',()=>{

            const rating=parseInt(star.dataset.value);

            ratingInput.value=rating;

            updateStars(rating);

        });

    });
});

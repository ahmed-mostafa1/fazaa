document.addEventListener('DOMContentLoaded', () => {
            
            // --- Mobile Menu Toggle ---
            const mobileMenuBtn = document.getElementById('mobileMenuBtn');
            const navLinks = document.getElementById('navLinks');
            const navItems = document.querySelectorAll('.nav-links a');
            const header = document.getElementById('header');

            mobileMenuBtn.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                const icon = mobileMenuBtn.querySelector('i');
                if (navLinks.classList.contains('active')) {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                } else {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                }
            });

            navItems.forEach(item => {
                item.addEventListener('click', () => {
                    navLinks.classList.remove('active');
                    const icon = mobileMenuBtn.querySelector('i');
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                });
            });

            // --- Sticky Header ---
            window.addEventListener('scroll', () => {
                if (window.scrollY > 50) {
                    header.style.boxShadow = '0 5px 20px rgba(0,0,0,0.1)';
                    header.style.padding = '10px 0';
                } else {
                    header.style.boxShadow = 'none';
                    header.style.padding = '15px 0';
                }
            });

            // --- Scroll Reveal Animation ---
            const revealElements = document.querySelectorAll('.fade-in');
            
            const revealCallback = (entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('visible');
                        observer.unobserve(entry.target);
                    }
                });
            };

            const revealOptions = {
                threshold: 0.1,
                rootMargin: "0px 0px -50px 0px"
            };

            const observer = new IntersectionObserver(revealCallback, revealOptions);
            
            revealElements.forEach(el => {
                observer.observe(el);
            });

            // --- Form Handling ---
            const contactForm = document.getElementById('contactForm');
            const toast = document.getElementById('toast');

            contactForm.addEventListener('submit', (e) => {
                e.preventDefault();
                
                const btn = contactForm.querySelector('button');
                const originalText = btn.innerText;
                btn.innerText = 'جاري الإرسال...';
                btn.disabled = true;
                btn.style.opacity = '0.7';

                const fullName = contactForm.elements.fullName.value.trim();
                const phone = contactForm.elements.phone.value.trim();
                const serviceType = contactForm.elements.serviceType.value.trim();
                const details = contactForm.elements.details.value.trim();

                const message = [
                    `الاسم الكامل: ${fullName}`,
                    `رقم الجوال: ${phone}`,
                    `نوع الخدمة: ${serviceType}`,
                    `تفاصيل الطلب: ${details}`
                ].join('\n');

                const whatsappUrl = `https://wa.me/966534018865?text=${encodeURIComponent(message)}`;

                // Try opening in a new tab; fallback to current tab if blocked
                const opened = window.open(whatsappUrl, '_blank');
                if (!opened) {
                    window.location.href = whatsappUrl;
                }

                contactForm.reset();
                btn.innerText = originalText;
                btn.disabled = false;
                btn.style.opacity = '1';

                // Show Toast
                toast.classList.add('show');

                setTimeout(() => {
                    toast.classList.remove('show');
                }, 4000);
            });
        });

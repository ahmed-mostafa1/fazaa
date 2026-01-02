<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مكتب فزعة للخدمات الحكومية</title>
    
    <!-- Google Fonts: Cairo -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400;600;700;900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">

</head>
<body>
@php
    use App\Models\Setting;
    use App\Support\HomepageDefaults;

    $hero = Setting::getValue('hero', HomepageDefaults::hero());
    $about = Setting::getValue('about', HomepageDefaults::about());
    $stepsData = Setting::getValue('steps', HomepageDefaults::steps());
    $services = Setting::getValue('services', HomepageDefaults::services());
    $contact = Setting::getValue('contact', HomepageDefaults::contact());
    $showPhone = $contact['show_phone'] ?? true;
    $showWhatsapp = $contact['show_whatsapp'] ?? true;
    $showAddress = $contact['show_address'] ?? true;
    $showHours = $contact['show_hours'] ?? true;
    $whatsNumber = preg_replace('/\D+/', '', $contact['whatsapp_display'] ?? '966534018865');
    $whatsappLink = $whatsNumber ? "https://wa.me/{$whatsNumber}" : 'https://wa.me/966534018865';
@endphp

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    فزعة <span>للخدمات</span>
                </a>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#about-us" class="active">من نحن</a></li>
                    <li><a href="#steps">كيف نعمل</a></li>
                    <li><a href="#services">خدماتنا</a></li>
                    <li><a href="#about">لماذا نحن</a></li>
                    <li><a href="#contact">تواصل معنا</a></li>
                </ul>
                <div class="mobile-menu-btn" id="mobileMenuBtn">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text fade-in">
                    <h1>{{ $hero['title'] ?? '' }} <br> بـ <span>{{ $hero['highlight'] ?? '' }}</span></h1>
                    <p>{{ $hero['description'] ?? '' }}</p>
                    <div class="cta-group">
                        @if (!empty($hero['cta_primary_text']))
                            <a href="{{ $hero['cta_primary_link'] ?? '#contact' }}" class="btn btn-primary">{{ $hero['cta_primary_text'] }}</a>
                        @endif
                        @if (!empty($hero['cta_secondary_text']))
                            <a href="{{ $hero['cta_secondary_link'] ?? '#services' }}" class="btn btn-primary">{{ $hero['cta_secondary_text'] }}</a>
                        @endif
                    </div>
                </div>
                <div class="hero-visual fade-in delay-200">
                    <!-- Modern Government Card Animation -->
                    <div class="glass-card">
                        <div class="card-header">
                            <span style="font-weight: bold; color: var(--accent-color);">حالة الطلب</span>
                            <i class="fa-solid fa-wifi" style="opacity: 0.7;"></i>
                        </div>
                        <div class="doc-placeholder">
                            <img src="{{ asset('img/id-card.png') }}" alt="Document Preview">
                            <div style="position: absolute; bottom: 10px; right: 15px; background: #fff; padding: 5px 10px; border-radius: 5px; font-size: 0.8rem; font-weight: bold; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                                طلب رقم: #99201
                            </div>
                        </div>
                        <div style="text-align: right; margin-bottom: 10px;">
                            <h4 style="margin:0; font-size: 1.1rem;">تجديد الهوية الوطنية</h4>
                            <p style="font-size: 0.8rem; opacity: 0.8; margin:0;">وزارة الداخلية - أبشر</p>
                        </div>
                        <div class="status-line"></div>
                        <div style="display: flex; justify-content: space-between; font-size: 0.8rem; margin-top: 10px;">
                            <span>جاري المعالجة...</span>
                            <span style="color: var(--accent-color);">75%</span>
                        </div>
                        
                        <div class="stamp">
                            معتمد
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about-us" class="section-padding">
        <div class="container">
            <div class="section-header fade-in">
                <h2>من نحن</h2>
                <p>{{ $about['intro'] ?? '' }}</p>
            </div>

            <div class="about-cards fade-in delay-100">
                <div class="about-card">
                    <div class="about-card-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3>{{ $about['vision_title'] ?? '' }}</h3>
                    <p>{{ $about['vision_text'] ?? '' }}</p>
                </div>

                <div class="about-card">
                    <div class="about-card-icon">
                        <i class="fa-solid fa-gift"></i>
                    </div>
                    <h3>{{ $about['mission_title'] ?? '' }}</h3>
                    <p>{{ $about['mission_text'] ?? '' }}</p>
                </div>

                <div class="about-card">
                    <div class="about-card-icon">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h3>{{ $about['values_title'] ?? '' }}</h3>
                    <ul class="about-list">
                        @foreach ($about['values_list'] ?? [] as $value)
                            <li><i class="fa-regular fa-circle-check"></i> {{ $value }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- How It Works -->
    <section id="steps" class="section-padding">
        <div class="container">
            <div class="section-header fade-in">
                <h2 style="color: var(--white); border-color: var(--accent-color);">{{ $stepsData['title'] ?? '' }}</h2>
                <p style="color: rgba(255,255,255,0.7);">{{ $stepsData['subtitle'] ?? '' }}</p>
            </div>

            <div class="steps-container fade-in">
                @foreach ($stepsData['steps'] ?? [] as $step)
                    <div class="step-item">
                        <div class="step-number">{{ $step['number'] ?? '' }}</div>
                        <p>{{ $step['text'] ?? '' }}</p>
                    </div>
                @endforeach
            </div>
            <div class="notes">
                <div class="note fade-in delay-100" style="color: yellow; font-size: 20px; text-align: center; margin-top: 60px;">
                    <span style="color:yellow">{{ $stepsData['note_title'] ?? '' }}</span>
                    <p>{{ $stepsData['note_text'] ?? '' }}</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Services Section -->
    <section id="services" class="section-padding">
        <div class="container">
            <div class="section-header fade-in">
                <h2>خدماتنا المميزة</h2>
                <p>نغطي كافة احتياجاتك من الخدمات الحكومية الإلكترونية والورقية</p>
            </div>
            
            <div class="tabs">
                <div class="tab-buttons">
                    @foreach ($services['tabs'] ?? [] as $index => $tab)
                        <button class="btn tab-button {{ $index === 0 ? 'active' : '' }}" data-tab="{{ $tab['id'] }}">{{ $tab['title'] ?? '' }}</button>
                    @endforeach
                </div>
                <div class="tab-content">
                    @foreach ($services['tabs'] ?? [] as $index => $tab)
                        <div class="tab-pane {{ $index === 0 ? 'active' : '' }}" id="{{ $tab['id'] }}">
                            <div class="services-grid">
                                @forelse ($tab['cards'] ?? [] as $cardIndex => $card)
                                    <div class="service-card fade-in delay-{{ 100 + ($cardIndex * 50) }}">
                                        @if (!empty($card['icon']))
                                            <div class="service-icon">
                                                <img src="{{ asset($card['icon']) }}" class="service-icon" alt="{{ $card['title'] ?? 'service' }}">
                                            </div>
                                        @endif
                                        @if (!empty($card['title']))
                                            <h3>{{ $card['title'] }}</h3>
                                        @endif
                                        @if (!empty($card['description']))
                                            <p>{{ $card['description'] }}</p>
                                        @endif
                                        @if (!empty($card['items']))
                                            <ul class="service-list">
                                                @foreach ($card['items'] as $item)
                                                    <li>{{ $item }}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        <a href="#contact" class="btn btn-primary">ابدأ معاملتك الآن</a>
                                    </div>
                                @empty
                                    <div class="service-card fade-in delay-100">
                                        <h3>لا توجد خدمات لهذا التبويب حالياً</h3>
                                        <a href="#contact" class="btn btn-primary">للإستفسار اضغط هنا</a>
                                    </div>
                                @endforelse
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    <!-- About / Features Section -->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="about-wrapper">
                <div class="about-features fade-in">
                    <div class="section-header" style="text-align: right;">
                        <h2>لماذا تختار خدماتنا؟</h2>
                    </div>
                    
                    @foreach ($about['features'] ?? [] as $feature)
                        <div class="feature-box">
                            @if (!empty($feature['icon']))
                                <div class="feature-icon">
                                    <i class="{{ $feature['icon'] }}"></i>
                                </div>
                            @endif
                            <div class="feature-text">
                                @if (!empty($feature['title']))
                                    <h4>{{ $feature['title'] }}</h4>
                                @endif
                                @if (!empty($feature['text']))
                                    <p>{{ $feature['text'] }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach

                    <a href="#contact" class="btn btn-primary" style="margin-top: 20px; text-align:center;">تواصل معنا الآن</a>
                </div>
                <div class="about-img fade-in delay-200">
                    <img src="https://picsum.photos/seed/officeKsa/600/500" alt="Modern Office">
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section-padding">
        <div class="container">
            <div class="section-header fade-in">
                <h2>ابدأ معاملتك</h2>
                <p>املأ النموذج وسنتواصل معك لإنهاء إجراءاتك</p>
            </div>

            <div class="contact-wrapper fade-in delay-100">
                <div class="contact-info">
                    <h3 style="color: var(--white); margin-bottom: 30px;">بيانات التواصل</h3>
                    
                    @if ($showPhone)
                    <div class="info-item">
                        <i class="fa-solid fa-phone-volume"></i>
                        <div>
                            <h4 style="color: var(--white); margin:0;">رقم الجوال</h4>
                            <p style="opacity: 0.9; font-size: 0.9rem;">{{ $contact['phone_display'] ?? '' }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($showWhatsapp)
                    <div class="info-item">
                        <i class="fa-brands fa-whatsapp"></i>
                        <div>
                            <h4 style="color: var(--white); margin:0;">واتساب</h4>
                            <p style="opacity: 0.9; font-size: 0.9rem;">{{ $contact['whatsapp_display'] ?? '' }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($showAddress)
                    <div class="info-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <div>
                            <h4 style="color: var(--white); margin:0;">العنوان</h4>
                            <p style="opacity: 0.9; font-size: 0.9rem;">{{ $contact['address'] ?? '' }}</p>
                        </div>
                    </div>
                    @endif

                    @if ($showHours)
                    <div style="margin-top: 50px;">
                        <p style="opacity: 0.8; font-size: 0.9rem;">ساعات العمل:</p>
                        <p style="color: var(--white); font-weight: bold;">{{ $contact['hours'] ?? '' }}</p>
                    </div>
                    @endif
                </div>

                <div class="contact-form-box">
                    <form id="contactForm">
                        <div class="form-group">
                            <label style="font-weight: 600;">الاسم الكامل</label>
                            <input type="text" name="fullName" id="fullName" class="form-control" placeholder="أدخل اسمك" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600;">رقم الجوال</label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="05xxxxxxxx" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600;">نوع الخدمة</label>
                            <select name="serviceType" id="serviceType" class="form-control" required>
                                <option value="" selected disabled>اختر نوع الخدمة...</option>
                                @foreach ($services['tabs'] ?? [] as $tab)
                                    <option>{{ $tab['title'] ?? '' }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600;">تفاصيل الطلب</label>
                            <textarea name="details" id="details" class="form-control" rows="4" placeholder="اشرح لنا طلبك باختصار..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; font-family:Cairo, Sans;">إرسال الطلب</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div>
                    <a href="#" class="footer-logo">
                        فزعة <span>للخدمات</span>
                    </a>
                    <p>خدمات حكومية متخصصة نهدف لتبسيط الإجراءات وتوفير الوقت والمجهود على عملائنا الكرام.</p>
                </div>
                <div>
                    <h4 style="color: var(--white); margin-bottom: 20px;">روابط سريعة</h4>
                    <ul class="footer-links">
                        <li><a href="#services">خدماتنا</a></li>
                        <li><a href="#about">من نحن</a></li>
                        <li><a href="#steps">كيف نعمل</a></li>
                        <li><a href="#contact">اتصل بنا</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="color: var(--white); margin-bottom: 20px;">تابعنا</h4>
                    <div class="social-links" style="display: flex; gap: 15px;">
                        <a href="#" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; border-radius: 5px; color: var(--white);">
                            <i class="fa-brands fa-twitter"></i>
                        </a>
                        <a href="#" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; border-radius: 5px; color: var(--white);">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); display: flex; align-items: center; justify-content: center; border-radius: 5px; color: var(--white);">
                            <i class="fa-brands fa-snapchat"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <p>جميع الحقوق محفوظة &copy; 2023 مكتب فزعة للخدمات الحكومية</p>
                <p>تطوير وتنفيذ <a href="https://wa.me/201097155272" style="color:#fff">نظام سوفت</a></p>
            </div>
        </div>
    </footer>

    <!-- Toast Notification -->
    <div class="toast" id="toast">
        <i class="fa-solid fa-circle-check"></i>
        <span>{{ $contact['toast'] ?? 'تم استلام طلبك بنجاح! سنتواصل معك قريباً.' }}</span>
    </div>

    <!-- Floating WhatsApp -->
    <a
        href="{{ $whatsappLink }}"
        class="whatsapp-float"
        id="whatsappFloat"
        target="_blank"
        rel="noopener"
        aria-label="تواصل معنا عبر واتساب"
        title="واتساب"
    >
        <i class="fa-brands fa-whatsapp"></i>
    </a>

    <style>
        .whatsapp-float {
            position: fixed;
            left: 50px;
            bottom: 50px;
            width: 70px;
            height: 70px;
            border-radius: 999px;
            display: grid;
            place-items: center;
            text-decoration: none;
            z-index: 9999;

            background: #25d366;
            color: #fff;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.25);
            transition: transform 180ms ease, box-shadow 180ms ease;
        }

        .whatsapp-float i {
            font-size: 28px;
            line-height: 1;
        }

        .whatsapp-float:hover {
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.28);
        }

        .whatsapp-float.is-clicked {
            animation: whatsapp-pop 520ms ease-out;
        }

        .whatsapp-float::before {
            content: "";
            position: absolute;
            z-index: -1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: #25d366;
            border-radius: 50%;
            opacity: 0.7;
            animation: whatsapp-pulse-ring 2s infinite;
        }

        @keyframes whatsapp-pulse-ring {
            0% {
                transform: scale(1);
                opacity: 0.7;
            }
            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        @keyframes whatsapp-pop {
            0% { transform: scale(1); }
            35% { transform: scale(1.12); }
            100% { transform: scale(1); }
        }

        .tabs {
            width: 100%;
        }

        .tab-buttons {
            display: flex;
            justify-content: center;
            margin-bottom: 30px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .tab-pane {
            display: none;
        }

        .tab-pane.active {
            display: block;
        }
    </style>

    <script src="{{ asset('assets/js/index.js') }}" defer></script>
    <script>
        (function () {
            const button = document.getElementById('whatsappFloat');
            if (!button) return;

            button.addEventListener('click', function () {
                button.classList.remove('is-clicked');
                // reflow so the animation can replay on every click
                void button.offsetWidth;
                button.classList.add('is-clicked');
            });
        })();

        // Tab switching functionality
        document.addEventListener('DOMContentLoaded', function() {
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabPanes = document.querySelectorAll('.tab-pane');

            tabButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove active class from all buttons and panes
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    tabPanes.forEach(pane => pane.classList.remove('active'));

                    // Add active class to clicked button and corresponding pane
                    button.classList.add('active');
                    const tabId = button.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });
        });
    </script>

</body>
</html>


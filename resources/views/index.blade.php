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

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    <i class="fa-solid fa-file-shield"></i>
                    فزعة <span>للخدمات</span>
                </a>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#about-us" class="active">من نحن</a></li>
                    <li><a href="#services">خدماتنا</a></li>
                    <li><a href="#steps">كيف نعمل</a></li>
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
                    <h1>إنهاء معاملاتك الحكومية <br> بـ <span>سهولة وسرعة</span></h1>
                    <p>خدمات متكاملة لإنهاء الأوراق الثبوتية، التصديقات، والتراخيص. فريقنا متخصص في التخليص الإداري لتوفير وقتك وجهدك.</p>
                    <div class="cta-group">
                        <a href="#contact" class="btn btn-primary">ابدأ معاملتك الآن</a>
                        <a href="#services" class="btn btn-primary">استكشف الخدمات</a>
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
                <p>فزعة للخدمات الإلكترونية مكتب مستقل مرخّص، متخصص في تقديم الخدمات الحكومية والإلكترونية عن بُعد للأفراد وأصحاب المحلات، بشكل رسمي ومعتمد عبر التفويض الإلكتروني.</p>
            </div>

            <div class="about-cards fade-in delay-100">
                <div class="about-card">
                    <div class="about-card-icon">
                        <i class="fa-solid fa-bullseye"></i>
                    </div>
                    <h3>الرؤية</h3>
                    <p>أن نكون الوجهة الموثوقة التي يطمئن لها الأفراد وأصحاب الأعمال في إنهاء معاملاتهم الحكومية، عبر خدمات دقيقة وموثوقة ترتكز على الاحترافية والجودة.</p>
                </div>

                <div class="about-card">
                    <div class="about-card-icon">
                        <i class="fa-solid fa-gift"></i>
                    </div>
                    <h3>الرسالة</h3>
                    <p>التزامنا بخدمتكم هو أساس عملنا. نسعى لتقديم نتائج ملموسة وسريعة من خلال فهم احتياجاتكم، وتقديم حلول واستشارات قانونية وإجرائية تدعم رؤاكم وتحقق أهدافكم.</p>
                </div>

                <div class="about-card">
                    <div class="about-card-icon">
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <h3>قيمنا</h3>
                    <ul class="about-list">
                        <li><i class="fa-regular fa-circle-check"></i> الخصوصية والأمان</li>
                        <li><i class="fa-regular fa-circle-check"></i> العلاقات طويلة الأمد</li>
                        <li><i class="fa-regular fa-circle-check"></i> المهنية والاحترافية</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <!-- How It Works -->
    <section id="steps" class="section-padding">
        <div class="container">
            <div class="section-header fade-in">
                <h2 style="color: var(--white); border-color: var(--accent-color);">كيف نعمل؟</h2>
                <p style="color: rgba(255,255,255,0.7);">أربع خطوات بسيطة بينك وبين إنهاء معاملتك</p>
            </div>

            <div class="steps-container fade-in">
                <div class="step-item">
                    <div class="step-number">01</div>
                    <p>تواصل معنا وحدد الخدمة المطلوبة.</p>
                </div>

                <div class="step-item">
                    <div class="step-number">02</div>
                    <p>نوضح لك التفاصيل والتكلفة.</p>
                </div>

                <div class="step-item">
                    <div class="step-number">03</div>
                    <p>يتم التفويض الإلكتروني بشكل رسمي..</p>
                </div>

                <div class="step-item">
                    <div class="step-number">04</div>
                    <p>ننجز الخدمة ونرسل لك إثبات التنفيذ.</p>
                </div>
            </div>
            <div class="notes">
                <div class="note fade-in delay-100" style="color: yellow; text-align: center; margin-top: 20px;">
                    <span style="color:yellow">ملحوظة هامة</span>
                    <p>جميع خدماتنا تتم عن بُعد وبشكل رسمي عبر التفويض الإلكتروني،
 مع التزام تام بسرية البيانات وخصوصية العملاء.
</p>
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
                    <button class="btn tab-button active" data-tab="tab1">خدمات التجار</button>
                    <button class="btn tab-button" data-tab="tab2">المتاجر الإلكترونية</button>
                    <button class="btn tab-button" data-tab="tab3">خدمات اﻷفراد</button>
                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab1">
                        <div class="services-grid">
                            <!-- Commerce -->
                            <div class="service-card fade-in delay-100">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/commerce.png') }}" class="service-icon" alt="commerce">
                                </div>
                                <ul class="service-list">
                                    <li>إصدار سجل تجاري رئيسي</li>
                                    <li>إصدار سجل تجاري فرعي</li>
                                    <li>توثيق علامة تجارية</li>
                                    <li>تعديل بيانات السجل</li>
                                    <li>شطب السجل</li>
                                    <li>إضافة اسم تجاري</li>
                                </ul>
                                <a href="#contact" class="btn btn-primary">ابدأ معاملتك الآن</a>
                            </div>
                            
                            <!-- Qiwa -->
                            <div class="service-card fade-in delay-200">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/qiwa.png') }}" class="service-icon" alt="qiwa">
                                </div>
                                <ul class="service-list">
                                    <li>خدمة إصدار التأشيرات</li>
                                    <li>تعديل المهن للعمالة</li>
                                    <li>التبليغ عن العمالة</li>
                                    <li>إصدار شهادة السعودة</li>
                                    <li>نقل خدمات العمالة</li>
                                    <li>إصدار رخصة عمل</li>
                                    <li>فتح حساب وتفعيل منصة قوى</li>
                                </ul>
                                <a href="#contact" class="btn btn-primary">ابدأ معاملتك الآن</a>
                            </div>
                            
                            <!-- Zakat -->
                            <div class="service-card fade-in delay-300">
                                <div class="service-icon">
                                    <img src="{{ asset('assets/img/zakat.png') }}" class="service-icon" alt="zakat">
                                </div>
                                <ul class="service-list">
                                    <li>تسجيل المنشأة في زاتكا</li>
                                    <li>رفع دعوى على لجنة المخالفات الضريبية</li>
                                    <li>تقديم الإقرارات الضريبية</li>
                                    <li>التسجيل في ضريبة القيمة المضافة</li>
                                </ul>
                                <a href="#contact" class="btn btn-primary">ابدأ معاملتك الآن</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <div class="services-grid">
                            <div class="service-card fade-in delay-100">
                                <div class="service-icon">
                                    <i class="fa-solid fa-file-contract"></i>
                                </div>
                                <h3>التراخيص التجارية</h3>
                                <p>استخراج السجل التجاري، تجديد الرخص البلدية، وفروع الشركات عبر منصات البلديات.</p>
                                <a href="#contact" class="btn btn-primary">ابدأ معاملتك الآن</a>
                            </div>
                            <div class="service-card fade-in delay-200">
                                <div class="service-icon">
                                    <i class="fa-solid fa-car-side"></i>
                                </div>
                                <h3>خدمات المرور</h3>
                                <p>نقل الملكية، تجديد رخص القيادة، وفحص المركبات وتخليص المخالفات المرورية.</p>
                                <a href="#contact" class="btn btn-primary">ابدأ معاملتك الآن</a>
                            </div>
                            <div class="service-card fade-in delay-300">
                                <div class="service-icon">
                                    <i class="fa-solid fa-users-line"></i>
                                </div>
                                <h3>استقدام العمالة</h3>
                                <p>إجراءات استقدام العمالة المنزلية والمهنية عبر منصات مساند وقضية.</p>
                                <a href="#contact" class="btn btn-primary">ابدأ معاملتك الآن</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab3">
                        <div class="services-grid">
                            <div class="service-card fade-in delay-100">
                                <div class="service-icon">
                                    <i class="fa-solid fa-file-contract"></i>
                                </div>
                                <h3>التراخيص التجارية</h3>
                                <p>استخراج السجل التجاري، تجديد الرخص البلدية، وفروع الشركات عبر منصات البلديات.</p>
                                <a href="#contact" class="btn btn-primary">ابدأ معاملتك الآن</a>
                            </div>
                            <div class="service-card fade-in delay-200">
                                <div class="service-icon">
                                    <i class="fa-solid fa-car-side"></i>
                                </div>
                                <h3>خدمات المرور</h3>
                                <p>نقل الملكية، تجديد رخص القيادة، وفحص المركبات وتخليص المخالفات المرورية.</p>
                                <a href="#contact" class="btn btn-primary">ابدأ معاملتك الآن</a>
                            </div>
                            <div class="service-card fade-in delay-300">
                                <div class="service-icon">
                                    <i class="fa-solid fa-users-line"></i>
                                </div>
                                <h3>استقدام العمالة</h3>
                                <p>إجراءات استقدام العمالة المنزلية والمهنية عبر منصات مساند وقضية.</p>
                                <a href="#contact" class="btn btn-primary">ابدأ معاملتك الآن</a>
                            </div>
                        </div>
                    </div>
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
                    
                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fa-solid fa-bolt"></i>
                        </div>
                        <div class="feature-text">
                            <h4>سرعة في الإنجاز</h4>
                            <p>لا داعي للانتظار في الطوابير، ننهي المعاملات بأقصى سرعة ممكنة.</p>
                        </div>
                    </div>

                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fa-solid fa-user-shield"></i>
                        </div>
                        <div class="feature-text">
                            <h4>خصوصية وأمان</h4>
                            <p>نضمن سرية بياناتك ومستنداتك وعدم مشاركتها مع أي طرف ثالث.</p>
                        </div>
                    </div>

                    <div class="feature-box">
                        <div class="feature-icon">
                            <i class="fa-solid fa-hand-holding-dollar"></i>
                        </div>
                        <div class="feature-text">
                            <h4>أسعار تنافسية</h4>
                            <p>رسوم شفافة وواضحة مقدماً بدون أي مصاريف خفية.</p>
                        </div>
                    </div>

                    <a href="#contact" class="btn btn-primary" style="margin-top: 20px;">تواصل معنا الآن</a>
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
                    
                    <div class="info-item">
                        <i class="fa-solid fa-phone-volume"></i>
                        <div>
                            <h4 style="color: var(--white); margin:0;">رقم الجوال</h4>
                            <p style="opacity: 0.9; font-size: 0.9rem;">+966 50 123 4567</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fa-brands fa-whatsapp"></i>
                        <div>
                            <h4 style="color: var(--white); margin:0;">واتساب</h4>
                            <p style="opacity: 0.9; font-size: 0.9rem;">+966 50 123 4567</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <div>
                            <h4 style="color: var(--white); margin:0;">العنوان</h4>
                            <p style="opacity: 0.9; font-size: 0.9rem;">الرياض، حي العليا، شارع التحلية</p>
                        </div>
                    </div>

                    <div style="margin-top: 50px;">
                        <p style="opacity: 0.8; font-size: 0.9rem;">ساعات العمل:</p>
                        <p style="color: var(--white); font-weight: bold;">السبت - الخميس: 9 ص - 9 م</p>
                    </div>
                </div>

                <div class="contact-form-box">
                    <form id="contactForm">
                        <div class="form-group">
                            <label style="font-weight: 600;">الاسم الكامل</label>
                            <input type="text" class="form-control" placeholder="أدخل اسمك" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600;">رقم الجوال</label>
                            <input type="tel" class="form-control" placeholder="05xxxxxxxx" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600;">نوع الخدمة</label>
                            <select class="form-control">
                                <option>اختر نوع الخدمة...</option>
                                <option>جواز سفر / إقامة</option>
                                <option>تصديقات</option>
                                <option>سجل تجاري / بلدية</option>
                                <option>مرور / مخالفات</option>
                                <option>خدمة أخرى</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600;">تفاصيل الطلب</label>
                            <textarea class="form-control" rows="4" placeholder="اشرح لنا طلبك باختصار..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%;">إرسال الطلب</button>
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
                        <i class="fa-solid fa-file-shield"></i> فزعة
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
            </div>
        </div>
    </footer>

    <!-- Toast Notification -->
    <div class="toast" id="toast">
        <i class="fa-solid fa-circle-check"></i>
        <span>تم استلام طلبك بنجاح! سنتواصل معك قريباً.</span>
    </div>

    <!-- Floating WhatsApp -->
    <a
        href="https://wa.me/966534018865"
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

        .tab-button {
            background: none;
            border: none;
            padding: 15px 25px;
            margin: 0 10px;
            cursor: pointer;
            font-family: 'Cairo', sans-serif;
            font-size: 1.1rem;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.7);
            border-bottom: 3px solid transparent;
            transition: all 0.3s ease;
            position: relative;
        }

        .tab-button:hover {
            color: var(--white);
        }

        .tab-button.active {
            color: var(--accent-color);
            border-bottom-color: var(--accent-color);
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

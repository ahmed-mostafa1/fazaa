<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>┘à┘â╪¬╪¿ ┘ü╪▓╪╣╪⌐ ┘ä┘ä╪«╪»┘à╪º╪¬ ╪º┘ä╪¡┘â┘ê┘à┘è╪⌐</title>
    
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
    $whatsNumber = preg_replace('/\D+/', '', $contact['whatsapp_display'] ?? '966534018865');
    $whatsappLink = $whatsNumber ? "https://wa.me/{$whatsNumber}" : 'https://wa.me/966534018865';
@endphp

    <!-- Header -->
    <header id="header">
        <div class="container">
            <nav>
                <a href="#" class="logo">
                    ┘ü╪▓╪╣╪⌐ <span>┘ä┘ä╪«╪»┘à╪º╪¬</span>
                </a>
                <ul class="nav-links" id="navLinks">
                    <li><a href="#about-us" class="active">┘à┘å ┘å╪¡┘å</a></li>
                    <li><a href="#steps">┘â┘è┘ü ┘å╪╣┘à┘ä</a></li>
                    <li><a href="#services">╪«╪»┘à╪º╪¬┘å╪º</a></li>
                    <li><a href="#about">┘ä┘à╪º╪░╪º ┘å╪¡┘å</a></li>
                    <li><a href="#contact">╪¬┘ê╪º╪╡┘ä ┘à╪╣┘å╪º</a></li>
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
                    <h1>{{ $hero['title'] ?? '' }} <br> ╪¿┘Ç <span>{{ $hero['highlight'] ?? '' }}</span></h1>
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
                            <span style="font-weight: bold; color: var(--accent-color);">╪¡╪º┘ä╪⌐ ╪º┘ä╪╖┘ä╪¿</span>
                            <i class="fa-solid fa-wifi" style="opacity: 0.7;"></i>
                        </div>
                        <div class="doc-placeholder">
                            <img src="{{ asset('img/id-card.png') }}" alt="Document Preview">
                            <div style="position: absolute; bottom: 10px; right: 15px; background: #fff; padding: 5px 10px; border-radius: 5px; font-size: 0.8rem; font-weight: bold; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
                                ╪╖┘ä╪¿ ╪▒┘é┘à: #99201
                            </div>
                        </div>
                        <div style="text-align: right; margin-bottom: 10px;">
                            <h4 style="margin:0; font-size: 1.1rem;">╪¬╪¼╪»┘è╪» ╪º┘ä┘ç┘ê┘è╪⌐ ╪º┘ä┘ê╪╖┘å┘è╪⌐</h4>
                            <p style="font-size: 0.8rem; opacity: 0.8; margin:0;">┘ê╪▓╪º╪▒╪⌐ ╪º┘ä╪»╪º╪«┘ä┘è╪⌐ - ╪ú╪¿╪┤╪▒</p>
                        </div>
                        <div class="status-line"></div>
                        <div style="display: flex; justify-content: space-between; font-size: 0.8rem; margin-top: 10px;">
                            <span>╪¼╪º╪▒┘è ╪º┘ä┘à╪╣╪º┘ä╪¼╪⌐...</span>
                            <span style="color: var(--accent-color);">75%</span>
                        </div>
                        
                        <div class="stamp">
                            ┘à╪╣╪¬┘à╪»
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
                <h2>┘à┘å ┘å╪¡┘å</h2>
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
                <h2>╪«╪»┘à╪º╪¬┘å╪º ╪º┘ä┘à┘à┘è╪▓╪⌐</h2>
                <p>┘å╪║╪╖┘è ┘â╪º┘ü╪⌐ ╪º╪¡╪¬┘è╪º╪¼╪º╪¬┘â ┘à┘å ╪º┘ä╪«╪»┘à╪º╪¬ ╪º┘ä╪¡┘â┘ê┘à┘è╪⌐ ╪º┘ä╪Ñ┘ä┘â╪¬╪▒┘ê┘å┘è╪⌐ ┘ê╪º┘ä┘ê╪▒┘é┘è╪⌐</p>
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
                                        <a href="#contact" class="btn btn-primary">╪º╪¿╪»╪ú ┘à╪╣╪º┘à┘ä╪¬┘â ╪º┘ä╪ó┘å</a>
                                    </div>
                                @empty
                                    <div class="service-card fade-in delay-100">
                                        <h3>┘ä╪º ╪¬┘ê╪¼╪» ╪«╪»┘à╪º╪¬ ┘ä┘ç╪░╪º ╪º┘ä╪¬╪¿┘ê┘è╪¿ ╪¡╪º┘ä┘è╪º┘ï</h3>
                                        <a href="#contact" class="btn btn-primary">┘ä┘ä╪Ñ╪│╪¬┘ü╪│╪º╪▒ ╪º╪╢╪║╪╖ ┘ç┘å╪º</a>
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
                        <h2>┘ä┘à╪º╪░╪º ╪¬╪«╪¬╪º╪▒ ╪«╪»┘à╪º╪¬┘å╪º╪ƒ</h2>
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
                <h2>╪º╪¿╪»╪ú ┘à╪╣╪º┘à┘ä╪¬┘â</h2>
                <p>╪º┘à┘ä╪ú ╪º┘ä┘å┘à┘ê╪░╪¼ ┘ê╪│┘å╪¬┘ê╪º╪╡┘ä ┘à╪╣┘â ┘ä╪Ñ┘å┘ç╪º╪í ╪Ñ╪¼╪▒╪º╪í╪º╪¬┘â</p>
            </div>

            <div class="contact-wrapper fade-in delay-100">
                <div class="contact-info">
                    <h3 style="color: var(--white); margin-bottom: 30px;">╪¿┘è╪º┘å╪º╪¬ ╪º┘ä╪¬┘ê╪º╪╡┘ä</h3>
                    
                    <div class="info-item">
                        <i class="fa-solid fa-phone-volume"></i>
                        <div>
                            <h4 style="color: var(--white); margin:0;">╪▒┘é┘à ╪º┘ä╪¼┘ê╪º┘ä</h4>
                            <p style="opacity: 0.9; font-size: 0.9rem;">{{ $contact['phone_display'] ?? '' }}</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fa-brands fa-whatsapp"></i>
                        <div>
                            <h4 style="color: var(--white); margin:0;">┘ê╪º╪¬╪│╪º╪¿</h4>
                            <p style="opacity: 0.9; font-size: 0.9rem;">{{ $contact['whatsapp_display'] ?? '' }}</p>
                        </div>
                    </div>

                    <div class="info-item">
                        <i class="fa-solid fa-location-dot"></i>
                        <div>
                            <h4 style="color: var(--white); margin:0;">╪º┘ä╪╣┘å┘ê╪º┘å</h4>
                            <p style="opacity: 0.9; font-size: 0.9rem;">{{ $contact['address'] ?? '' }}</p>
                        </div>
                    </div>

                    <div style="margin-top: 50px;">
                        <p style="opacity: 0.8; font-size: 0.9rem;">╪│╪º╪╣╪º╪¬ ╪º┘ä╪╣┘à┘ä:</p>
                        <p style="color: var(--white); font-weight: bold;">{{ $contact['hours'] ?? '' }}</p>
                    </div>
                </div>

                <div class="contact-form-box">
                    <form id="contactForm">
                        <div class="form-group">
                            <label style="font-weight: 600;">╪º┘ä╪º╪│┘à ╪º┘ä┘â╪º┘à┘ä</label>
                            <input type="text" name="fullName" id="fullName" class="form-control" placeholder="╪ú╪»╪«┘ä ╪º╪│┘à┘â" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600;">╪▒┘é┘à ╪º┘ä╪¼┘ê╪º┘ä</label>
                            <input type="tel" name="phone" id="phone" class="form-control" placeholder="05xxxxxxxx" required>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600;">┘å┘ê╪╣ ╪º┘ä╪«╪»┘à╪⌐</label>
                            <select name="serviceType" id="serviceType" class="form-control" required>
                                <option value="" selected disabled>╪º╪«╪¬╪▒ ┘å┘ê╪╣ ╪º┘ä╪«╪»┘à╪⌐...</option>
                                @foreach ($services['tabs'] ?? [] as $tab)
                                    <option>{{ $tab['title'] ?? '' }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label style="font-weight: 600;">╪¬┘ü╪º╪╡┘è┘ä ╪º┘ä╪╖┘ä╪¿</label>
                            <textarea name="details" id="details" class="form-control" rows="4" placeholder="╪º╪┤╪▒╪¡ ┘ä┘å╪º ╪╖┘ä╪¿┘â ╪¿╪º╪«╪¬╪╡╪º╪▒..." required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary" style="width: 100%; font-family:Cairo, Sans;">╪Ñ╪▒╪│╪º┘ä ╪º┘ä╪╖┘ä╪¿</button>
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
                        ┘ü╪▓╪╣╪⌐ <span>┘ä┘ä╪«╪»┘à╪º╪¬</span>
                    </a>
                    <p>╪«╪»┘à╪º╪¬ ╪¡┘â┘ê┘à┘è╪⌐ ┘à╪¬╪«╪╡╪╡╪⌐ ┘å┘ç╪»┘ü ┘ä╪¬╪¿╪│┘è╪╖ ╪º┘ä╪Ñ╪¼╪▒╪º╪í╪º╪¬ ┘ê╪¬┘ê┘ü┘è╪▒ ╪º┘ä┘ê┘é╪¬ ┘ê╪º┘ä┘à╪¼┘ç┘ê╪» ╪╣┘ä┘ë ╪╣┘à┘ä╪º╪ª┘å╪º ╪º┘ä┘â╪▒╪º┘à.</p>
                </div>
                <div>
                    <h4 style="color: var(--white); margin-bottom: 20px;">╪▒┘ê╪º╪¿╪╖ ╪│╪▒┘è╪╣╪⌐</h4>
                    <ul class="footer-links">
                        <li><a href="#services">╪«╪»┘à╪º╪¬┘å╪º</a></li>
                        <li><a href="#about">┘à┘å ┘å╪¡┘å</a></li>
                        <li><a href="#steps">┘â┘è┘ü ┘å╪╣┘à┘ä</a></li>
                        <li><a href="#contact">╪º╪¬╪╡┘ä ╪¿┘å╪º</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="color: var(--white); margin-bottom: 20px;">╪¬╪º╪¿╪╣┘å╪º</h4>
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
                <p>╪¼┘à┘è╪╣ ╪º┘ä╪¡┘é┘ê┘é ┘à╪¡┘ü┘ê╪╕╪⌐ &copy; 2023 ┘à┘â╪¬╪¿ ┘ü╪▓╪╣╪⌐ ┘ä┘ä╪«╪»┘à╪º╪¬ ╪º┘ä╪¡┘â┘ê┘à┘è╪⌐</p>
                <p>╪¬╪╖┘ê┘è╪▒ ┘ê╪¬┘å┘ü┘è╪░ <a href="https://wa.me/201097155272" style="color:#fff">┘å╪╕╪º┘à ╪│┘ê┘ü╪¬</a></p>
            </div>
        </div>
    </footer>

    <!-- Toast Notification -->
    <div class="toast" id="toast">
        <i class="fa-solid fa-circle-check"></i>
        <span>{{ $contact['toast'] ?? '╪¬┘à ╪º╪│╪¬┘ä╪º┘à ╪╖┘ä╪¿┘â ╪¿┘å╪¼╪º╪¡! ╪│┘å╪¬┘ê╪º╪╡┘ä ┘à╪╣┘â ┘é╪▒┘è╪¿╪º┘ï.' }}</span>
    </div>

    <!-- Floating WhatsApp -->
    <a
        href="{{ $whatsappLink }}"
        class="whatsapp-float"
        id="whatsappFloat"
        target="_blank"
        rel="noopener"
        aria-label="╪¬┘ê╪º╪╡┘ä ┘à╪╣┘å╪º ╪╣╪¿╪▒ ┘ê╪º╪¬╪│╪º╪¿"
        title="┘ê╪º╪¬╪│╪º╪¿"
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

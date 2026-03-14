<x-layouts.app>

    <!-- ── HERO ── -->
    <section class="hero">
        <div class="hero-content">
            <span class="hero-tag">IT Solutions & Services</span>
            <h1 class="hero-h1">
                Innovative<br />technology for<br /><em>modern business</em>
            </h1>
            <p class="hero-sub">
                We are a forward-thinking technology company delivering innovative
                solutions that power modern businesses — from robust POS Systems and
                Attendance Systems to email work tools that keep you connected,
                productive, and ahead of the competition.
            </p>
            <div class="hero-actions">
                <a href="#contact" class="btn-fill">Schedule a Demo</a>
                <a href="#services" class="btn-ghost">Our services <span class="arrow">→</span></a>
            </div>
        </div>

        <div class="hero-image">
            <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?w=1400&q=85&auto=format&fit=crop"
                alt="Modern corporate office" loading="eager" />

            {{-- This section --}}
            <div class="hero-card">
                <div class="hero-stat">
                    <div class="hero-stat-n">2<sup>+</sup></div>
                    <div class="hero-stat-l">Companies served</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-n">99<sup>.9%</sup></div>
                    <div class="hero-stat-l">Uptime guarantee</div>
                </div>
                <div class="hero-stat">
                    <div class="hero-stat-n">24<sup>/7</sup></div>
                    <div class="hero-stat-l">Support coverage</div>
                </div>
            </div>
        </div>

        <div class="hero-bar">
            <div class="hero-bar-item">Google Workspace Partner</div>
            <div class="hero-bar-item">Microsoft 365 Certified</div>
            <div class="hero-bar-item">ISO 27001 Compliant</div>
        </div>
    </section>

    <!-- ── LOGO BAR ── -->
    <div class="logo-bar">
        <span class="logo-bar-label">Trusted by</span>
        <div class="logo-bar-divider"></div>
        <div class="logo-bar-track">
            <div class="logo-bar-inner">
                <span class="logo-item">Safety Insurance Brokers</span>
                <span class="logo-item">Vanguard Assurance</span>
                {{-- <span class="logo-item">Nissi SMS</span>
                <span class="logo-item">Nissi ClockIn</span>
                <span class="logo-item">Nissi POS</span> --}}
                <span class="logo-item">E-Claim Platform</span>
                <span class="logo-item">Afroasia Reinsurance Brokers Ghana</span>
                <span class="logo-item">Unique Bazzar</span>
                <!-- duplicate for loop -->
                <span class="logo-item">Safety Insurance Brokers</span>
                <span class="logo-item">Vanguard Assurance</span>
                {{-- <span class="logo-item">Nissi SMS</span>
                <span class="logo-item">Nissi ClockIn</span>
                <span class="logo-item">Nissi POS</span> --}}
                <span class="logo-item">E-Claim Platform</span>
                <span class="logo-item">Afroasia Reinsurance Brokers Ghana</span>
                <span class="logo-item">Unique Bazzar</span>
            </div>
        </div>
    </div>

    <!-- ── ABOUT ── -->
    <section class="about" id="about">
        <div>
            <div class="chip reveal">Who we are</div>
            <h2 class="about-heading reveal r1">
                Technology that <em>works</em> as hard as you do
            </h2>

            <div class="about-actions">
                <a href="{{ route('about') }}" class="btn-fill">Find out More</a>
            </div>
        </div>

        <div>
            <p class="about-body reveal r1">
                Nissi Technologies is a forward-thinking IT company built around one
                belief: technology should <strong>simplify your business</strong>, not
                complicate it. We deliver everything from secure email infrastructure
                and custom software to cloud systems and network solutions — all
                engineered to keep your team
                <strong>connected, protected, and productive</strong>.
            </p>
            <div class="metric-grid reveal r2">
                <div class="metric">
                    <div class="metric-n">2<sup>+</sup></div>
                    <div class="metric-l">Companies served</div>
                </div>
                <div class="metric">
                    <div class="metric-n">99<sup>.9%</sup></div>
                    <div class="metric-l">Uptime SLA</div>
                </div>
                <div class="metric">
                    <div class="metric-n">6<sup>+</sup></div>
                    <div class="metric-l">Years of expertise</div>
                </div>
                <div class="metric">
                    <div class="metric-n">24<sup>/7</sup></div>
                    <div class="metric-l">Support & monitoring</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── SERVICES ── -->
    <section class="services" id="services">
        <div class="section-header reveal">
            <h2 class="section-title">Our <em>services</em></h2>
            <span class="section-meta">06 core offerings</span>
        </div>
        <div class="service-grid">
            <div class="service-card reveal">
                <div class="blue-line"></div>
                <div class="svc-num">01</div>
                <svg class="svc-icon" viewBox="0 0 40 40" fill="none">
                    <rect x="4" y="10" width="32" height="22" rx="2" stroke="rgba(37,99,235,0.6)"
                        stroke-width="1.5" />
                    <line x1="4" y1="16" x2="36" y2="16" stroke="rgba(37,99,235,0.3)"
                        stroke-width="1" />
                    <path d="M12 24 L18 20 L24 24 L30 19" stroke="rgba(37,99,235,0.5)" stroke-width="1.5"
                        fill="none" />
                </svg>
                <h3 class="svc-name">Email Services</h3>
                <p class="svc-desc">
                    Professional corporate email setup for Google Workspace, Microsoft
                    365, and Zoho Mail. Secure, reliable, and fully customised to keep
                    your business connected and professional.
                </p>
                <a href="#contact" class="svc-link">Learn more →</a>
            </div>

            <div class="service-card reveal r1">
                <div class="blue-line"></div>
                <div class="svc-num">02</div>
                <svg class="svc-icon" viewBox="0 0 40 40" fill="none">
                    <rect x="6" y="6" width="12" height="12" stroke="rgba(37,99,235,0.6)"
                        stroke-width="1.5" />
                    <rect x="22" y="6" width="12" height="12" stroke="rgba(107,122,153,0.4)"
                        stroke-width="1.5" />
                    <rect x="6" y="22" width="12" height="12" stroke="rgba(107,122,153,0.4)"
                        stroke-width="1.5" />
                    <rect x="22" y="22" width="12" height="12" stroke="rgba(37,99,235,0.35)"
                        stroke-width="1.5" />
                </svg>
                <h3 class="svc-name">Software Development</h3>
                <p class="svc-desc">
                    Powerful solutions including POS Platforms, Clock-In systems,
                    Work-From-Home tools, and Workflow Management platforms — designed
                    to streamline operations and adapt to your business needs.
                </p>
                <a href="#contact" class="svc-link">Learn more →</a>
            </div>

            <div class="service-card reveal r2">
                <div class="blue-line"></div>
                <div class="svc-num">03</div>
                <svg class="svc-icon" viewBox="0 0 40 40" fill="none">
                    <rect x="4" y="8" width="32" height="22" rx="2" stroke="rgba(107,122,153,0.4)"
                        stroke-width="1.5" />
                    <line x1="14" y1="30" x2="12" y2="36" stroke="rgba(37,99,235,0.5)"
                        stroke-width="1.5" />
                    <line x1="26" y1="30" x2="28" y2="36" stroke="rgba(37,99,235,0.5)"
                        stroke-width="1.5" />
                    <line x1="10" y1="36" x2="30" y2="36" stroke="rgba(37,99,235,0.4)"
                        stroke-width="1.5" />
                    <circle cx="20" cy="19" r="4" stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                </svg>
                <h3 class="svc-name">Website Development</h3>
                <p class="svc-desc">
                    Modern, responsive websites that showcase your brand and drive
                    results. From sleek corporate sites to dynamic e-commerce platforms,
                    we create online experiences that engage and convert.
                </p>
                <a href="#contact" class="svc-link">Learn more →</a>
            </div>

            <div class="service-card reveal">
                <div class="blue-line"></div>
                <div class="svc-num">04</div>
                <svg class="svc-icon" viewBox="0 0 40 40" fill="none">
                    <path d="M20 6 C10 6 6 12 6 18 C6 26 12 32 20 34 C28 32 34 26 34 18 C34 12 30 6 20 6Z"
                        stroke="rgba(107,122,153,0.4)" stroke-width="1.5" fill="none" />
                    <path d="M20 12 L20 20 L26 24" stroke="rgba(37,99,235,0.6)" stroke-width="1.5"
                        stroke-linecap="round" />
                </svg>
                <h3 class="svc-name">Disaster Recovery</h3>
                <p class="svc-desc">
                    Cloud disaster recovery solutions that protect your business by
                    securely backing up critical data and enabling rapid restoration
                    after any disruption. Stay resilient and minimise downtime.
                </p>
                <a href="#contact" class="svc-link">Learn more →</a>
            </div>

            <div class="service-card reveal r1">
                <div class="blue-line"></div>
                <div class="svc-num">05</div>
                <svg class="svc-icon" viewBox="0 0 40 40" fill="none">
                    <circle cx="8" cy="20" r="4" stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                    <circle cx="32" cy="20" r="4" stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                    <circle cx="20" cy="8" r="4" stroke="rgba(107,122,153,0.4)" stroke-width="1.5" />
                    <circle cx="20" cy="32" r="4" stroke="rgba(107,122,153,0.4)" stroke-width="1.5" />
                    <line x1="12" y1="20" x2="28" y2="20" stroke="rgba(37,99,235,0.3)"
                        stroke-width="1" />
                    <line x1="20" y1="12" x2="20" y2="28" stroke="rgba(37,99,235,0.3)"
                        stroke-width="1" />
                </svg>
                <h3 class="svc-name">Network Solutions</h3>
                <p class="svc-desc">
                    Reliable network solutions that keep your business connected,
                    secure, and running at peak performance. From design and setup to
                    monitoring and support, built for speed, stability, and scalability.
                </p>
                <a href="#contact" class="svc-link">Learn more →</a>
            </div>

            <div class="service-card reveal r2">
                <div class="blue-line"></div>
                <div class="svc-num">06</div>
                <svg class="svc-icon" viewBox="0 0 40 40" fill="none">
                    <path d="M8 32 L8 16 L20 8 L32 16 L32 32 Z" stroke="rgba(107,122,153,0.4)" stroke-width="1.5"
                        fill="none" />
                    <path d="M14 32 L14 22 L26 22 L26 32" stroke="rgba(37,99,235,0.5)" stroke-width="1.5"
                        fill="none" />
                    <circle cx="20" cy="17" r="3" stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                </svg>
                <h3 class="svc-name">IT Consulting</h3>
                <p class="svc-desc">
                    Expert IT consulting to help you plan, implement, and optimise
                    technology that drives your business forward. From strategy to
                    execution, we deliver solutions tailored to your goals and growth.
                </p>
                <a href="#contact" class="svc-link">Learn more →</a>
            </div>
        </div>
    </section>

    <!-- ── PRODUCTS ── -->
    <section class="products" id="products">

        <div class="products-header reveal">
            <div>
                <div class="chip">Built by Nissi</div>
                <h2 class="section-title" style="margin-top: 20px;">Our <em>products</em></h2>
            </div>
            <p class="products-intro">
                Beyond services, we build. These are the proprietary platforms we've engineered
                in-house — tools that solve real operational problems for modern businesses.
            </p>
        </div>

        <div class="products-grid">

            <!-- NISSI POS -->
            <div class="product-card reveal">
                <div class="product-card-inner">
                    <div class="product-top">
                        <div class="product-badge">01</div>
                        <div class="product-tag">Point of Sale</div>
                    </div>
                    <div class="product-icon-wrap">
                        <svg viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="10" width="40" height="28" rx="3"
                                stroke="rgba(37,99,235,0.7)" stroke-width="1.5" />
                            <rect x="14" y="16" width="28" height="16" rx="1"
                                stroke="rgba(37,99,235,0.35)" stroke-width="1" />
                            <line x1="8" y1="38" x2="48" y2="38"
                                stroke="rgba(37,99,235,0.25)" stroke-width="1" />
                            <path d="M22 44 L34 44" stroke="rgba(37,99,235,0.6)" stroke-width="1.5"
                                stroke-linecap="round" />
                            <path d="M18 22 L22 26 L30 18" stroke="rgba(37,99,235,0.8)" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="product-name">Nissi <span>POS</span></h3>
                    <p class="product-desc">
                        An all-in-one Point of Sale system designed to streamline your operations, boost sales, and
                        build lasting customer relationships — all from one powerful platform built for retail and
                        service-based businesses.
                    </p>
                    <ul class="product-features">
                        <li>Real-time inventory sync</li>
                        <li>Multi-branch management</li>
                        <li>Sales & revenue reporting</li>
                        <li>Receipt printing & digital billing</li>
                    </ul>
                    <a href="{{ route('products') }}" class="product-link">
                        <span>Learn more</span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- NISSI CLOCKIN -->
            <div class="product-card product-card--featured reveal r1">
                <div class="product-card-inner">
                    <div class="product-top">
                        <div class="product-badge">02</div>
                        <div class="product-tag product-tag--featured">Featured</div>
                    </div>
                    <div class="product-icon-wrap">
                        <svg viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="28" cy="28" r="18" stroke="rgba(37,99,235,0.5)"
                                stroke-width="1.5" />
                            <circle cx="28" cy="28" r="11" stroke="rgba(37,99,235,0.25)"
                                stroke-width="1" />
                            <path d="M28 18 L28 28 L35 33" stroke="rgba(37,99,235,0.9)" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <circle cx="28" cy="28" r="2" fill="rgba(37,99,235,0.8)" />
                            <path d="M20 10 L18 7 M36 10 L38 7" stroke="rgba(37,99,235,0.4)" stroke-width="1.5"
                                stroke-linecap="round" />
                        </svg>
                    </div>
                    <h3 class="product-name">Nissi <span>ClockIn</span></h3>
                    <p class="product-desc">
                        A modern, efficient solution designed to simplify attendance management. Whether you're a small
                        business or large enterprise, track staff timekeeping with precision — biometric-ready and
                        GPS-enabled.
                    </p>
                    <ul class="product-features">
                        <li>Biometric & PIN clock-in</li>
                        <li>GPS location verification</li>
                        <li>Automated timesheets</li>
                        <li>Payroll-ready exports</li>
                    </ul>
                    <a href="{{ route('products') }}" class="product-link">
                        <span>Learn more</span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>

            <!-- NISSI SMS -->
            <div class="product-card reveal r2">
                <div class="product-card-inner">
                    <div class="product-top">
                        <div class="product-badge">03</div>
                        <div class="product-tag">Messaging</div>
                    </div>
                    <div class="product-icon-wrap">
                        <svg viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="8" y="12" width="34" height="24" rx="4"
                                stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                            <path d="M8 32 L4 40 L16 36" stroke="rgba(37,99,235,0.5)" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                            <line x1="15" y1="20" x2="35" y2="20"
                                stroke="rgba(37,99,235,0.35)" stroke-width="1" stroke-linecap="round" />
                            <line x1="15" y1="25" x2="30" y2="25"
                                stroke="rgba(37,99,235,0.25)" stroke-width="1" stroke-linecap="round" />
                            <circle cx="44" cy="16" r="8" fill="rgba(37,99,235,0.1)"
                                stroke="rgba(37,99,235,0.5)" stroke-width="1.5" />
                            <path d="M41 16 L43 18 L47 13" stroke="rgba(37,99,235,0.8)" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </div>
                    <h3 class="product-name">Nissi <span>SMS</span></h3>
                    <p class="product-desc">
                        Connect with your customers in real-time through fast, reliable, and affordable Bulk SMS —
                        powered by trusted partners Arkesel and Npontu. Your messages are delivered instantly, securely,
                        and tracked end-to-end.
                    </p>
                    <ul class="product-features">
                        <li>Bulk SMS broadcasting</li>
                        <li>Scheduled & automated sends</li>
                        <li>Delivery & open analytics</li>
                        <li>API integration ready</li>
                    </ul>
                    <a href="{{ route('products') }}" class="product-link">
                        <span>Learn more</span>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path d="M3 8H13M13 8L9 4M13 8L9 12" stroke="currentColor" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- VIEW ALL BUTTON -->
        <div class="products-footer reveal">
            <div class="products-footer-rule"></div>
            <a href="{{ route('products') }}" class="products-view-all">
                <span>View all products</span>
                <svg width="18" height="18" viewBox="0 0 18 18" fill="none">
                    <path d="M3 9H15M15 9L10 4M15 9L10 14" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </a>
            <div class="products-footer-rule"></div>
        </div>
    </section>

    <!-- ── CLIENTS ── -->
    <section class="cases" id="clients">
        <div class="cases-header reveal">
            <h2 class="cases-title">Trusted by <em>innovators</em></h2>
            <a href="#contact" class="view-all">Work with us →</a>
        </div>
        <div>
            <a href="#" class="case-row reveal">
                <span class="cr-num">001</span>
                <span class="cr-name">Safety Insurance Brokers — Email Infrastructure</span>
                <span class="cr-tag">Email Services</span>
                <span class="cr-year">2024</span>
                <span class="cr-arr">→</span>
            </a>
            <a href="#" class="case-row reveal r1">
                <span class="cr-num">002</span>
                <span class="cr-name">Vanguard Assurance — Claim Platform</span>
                <span class="cr-tag">Web Dev</span>
                <span class="cr-year">2026</span>
                <span class="cr-arr">→</span>
            </a>
            <a href="#" class="case-row reveal r2">
                <span class="cr-num">003</span>
                <span class="cr-name">Afroasia Reinsurance Brokers — Corporate Mail System</span>
                <span class="cr-tag">Email Services</span>
                <span class="cr-year">2025</span>
                <span class="cr-arr">→</span>
            </a>
            <a href="#" class="case-row reveal r3">
                <span class="cr-num">004</span>
                <span class="cr-name">Uniq Bazzar — Nissi POS</span>
                <span class="cr-tag">Web Dev</span>
                <span class="cr-year">2025</span>
                <span class="cr-arr">→</span>
            </a>
        </div>
    </section>

    <!-- ── APPROACH / WHY US ── -->
    <section class="approach" id="approach">
        <div class="approach-left reveal">
            <div class="chip">Why Nissi</div>
            <h2 class="approach-title">How we <em>work</em></h2>
            <p class="approach-copy">
                A proven engagement model that delivers results from first
                consultation to long-term support — built around how real businesses
                operate.
            </p>
        </div>
        <div>
            <div class="step-row reveal">
                <div class="step-num-col">
                    <div class="step-n">01</div>
                </div>
                <div>
                    <h3 class="step-title">Consultation & Discovery</h3>
                    <p class="step-desc">
                        We start with a free consultation to understand your business, map
                        your current technology landscape, and identify where we can
                        deliver the most immediate impact.
                    </p>
                </div>
            </div>
            <div class="step-row reveal r1">
                <div class="step-num-col">
                    <div class="step-n">02</div>
                </div>
                <div>
                    <h3 class="step-title">Strategy & Planning</h3>
                    <p class="step-desc">
                        We design a tailored technology roadmap — not a generic package —
                        built around your specific goals, budget, and the speed your
                        business needs to move at.
                    </p>
                </div>
            </div>
            <div class="step-row reveal r2">
                <div class="step-num-col">
                    <div class="step-n">03</div>
                </div>
                <div>
                    <h3 class="step-title">Implementation</h3>
                    <p class="step-desc">
                        Our team executes with precision, minimising disruption to your
                        operations. Every deployment is tested, documented, and handed
                        over with full training for your people.
                    </p>
                </div>
            </div>
            <div class="step-row reveal r3">
                <div class="step-num-col">
                    <div class="step-n">04</div>
                </div>
                <div>
                    <h3 class="step-title">Ongoing Support</h3>
                    <p class="step-desc">
                        We don't disappear after go-live. Nissi provides 24/7 monitoring,
                        proactive maintenance, and a dedicated support team who treats
                        your uptime as seriously as our own reputation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ── TESTIMONIAL ── -->
    <section class="testimonial">
        <div>
            <div class="testi-label reveal">Client perspective</div>
            <blockquote class="testi-quote reveal r1">
                Nissi Technologies email setup was fast, seamless, and perfectly
                tailored to our business needs. We're now running smoothly with
                reliable, professional email services we can count on.
            </blockquote>
            <div class="testi-attr reveal r2">
                <div class="testi-avatar">
                    <img src="{{ asset('images/coffie.png') }}" alt="Emmanuel Coffie" />
                </div>
                <div>
                    <div class="testi-name">Emmanuel Coffie</div>
                    <div class="testi-role">Head of IT, Safety Insurance Brokers</div>
                </div>
            </div>
        </div>
        <div class="testi-right reveal r1">
            <div class="testi-box">
                <div class="testi-box-n">2<sup>+</sup></div>
                <div class="testi-box-l">Companies transformed</div>
            </div>
            <div class="testi-box">
                <div class="testi-box-n">6<sup>yr</sup></div>
                <div class="testi-box-l">Industry experience</div>
            </div>
            <div class="testi-box">
                <div class="testi-box-n">99<sup>.9%</sup></div>
                <div class="testi-box-l">Uptime delivered</div>
            </div>
            <div class="testi-box">
                <div class="testi-box-n">24<sup>/7</sup></div>
                <div class="testi-box-l">Always on support</div>
            </div>
        </div>
    </section>

    <!-- ── CTA ── -->
    <section class="cta" id="contact">
        <div class="cta-bg"></div>
        <div class="cta-bg-grid"></div>
        <div class="cta-chip reveal">Ready to get started?</div>
        <h2 class="cta-h2 reveal r1">Let's make<br />something <em>great</em></h2>
        <p class="cta-p reveal r2">
            Whether you're modernizing legacy infrastructure or launching something
            entirely new, we want to hear about it.
        </p>
        <div class="cta-btns reveal r3">
            <a href="mailto:info@nissitechnologies.com" class="btn-fill">Schedule a Demo</a>
            <a href="tel:0505811511" class="btn-ghost">Start a conversation <span class="arrow">→</span></a>
        </div>
    </section>
</x-layouts.app>

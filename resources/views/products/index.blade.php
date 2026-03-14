<x-layouts.app>
    <!-- ── HERO ── -->
    <section class="hero">
        <div class="hero-content">
            {{-- <a href="{{ route('home') }}" class="page-breadcrumb">
                ← <span class="sep">/</span> Nissi Technologies <span class="sep">/</span> <span
                    class="current">Products</span>
            </a> --}}
            <h1 class="hero-h1">
                Our <em>products</em><br>in full
            </h1>
            <p class="hero-sub">
                Nissi Technologies is a technology company focused on building practical
                digital solutions that help businesses operate more efficiently. Our team
                combines innovation, reliability, and modern design to create systems that
                simplify operations, improve productivity, and support business growth.
            </p>
            <div class="hero-actions">
                <a href="#contact" class="btn-fill">Schedule a Demo</a>
                {{-- <a href="#services" class="btn-ghost">Our services <span class="arrow">→</span></a> --}}
            </div>
        </div>

        <div class="hero-image">
            <img src="{{ asset('images/products.jpg') }}" alt="Modern corporate office" loading="eager" />
            <div class="hero-card">
                <div class="hero-stat">
                    <div class="hero-stat-n">5<sup>+</sup></div>
                    <div class="hero-stat-l">Live Software Solutions</div>
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

        {{-- <div class="hero-bar">
            <div class="hero-bar-item">Google Workspace Partner</div>
            <div class="hero-bar-item">Microsoft 365 Certified</div>
            <div class="hero-bar-item">ISO 27001 Compliant</div>
        </div> --}}
    </section>

    <!-- ── FILTER BAR ── -->
    <div class="filter-bar" id="filterBar">
        <button class="filter-btn active" data-filter="all">All Products</button>
        <button class="filter-btn" data-filter="operations">Operations</button>
        <button class="filter-btn" data-filter="communication">Communication</button>
        <button class="filter-btn" data-filter="workforce">Workforce</button>
    </div>


    {{-- FEATURED: NISSI POS  (dark panel) --}}
    <div class="product-featured dark" id="pos" data-category="operations">
        <div class="pf-content">
            <div class="pf-tag">Point of Sale · Operations</div>
            <h2 class="pf-name">Nissi <span>POS</span></h2>
            <p class="pf-tagline">All-in-One Point of Sale System for Modern Businesses</p>
            <p class="pf-desc">Streamline your operations, boost sales, and build lasting customer relationships — all
                from one powerful platform. Our next-generation POS system is designed to help retail and service-based
                businesses thrive in today's competitive landscape.</p>
            <ul class="pf-features">
                <li>Real-time inventory tracking & sync</li>
                <li>Multi-location & multi-branch support</li>
                <li>Sales analytics & revenue reporting</li>
                <li>Receipt printing & digital billing</li>
                <li>Customer relationship management</li>
            </ul>
            <div class="pf-actions">
                <a href="#contact" class="btn-pf-primary">Request a Demo</a>
                <a href="#contact" class="btn-pf-ghost">Learn more →</a>
            </div>
        </div>
        <div class="pf-visual">
            <div class="pf-visual-inner">
                <div class="pf-visual-ring"></div>
                <div class="pf-visual-ring"></div>
                <div class="pf-visual-ring"></div>
                <div class="pf-icon-center">
                    <svg viewBox="0 0 40 40" fill="none">
                        <rect x="4" y="8" width="32" height="22" rx="2" stroke="rgba(37,99,235,0.8)"
                            stroke-width="1.5" />
                        <rect x="9" y="13" width="22" height="12" rx="1" stroke="rgba(37,99,235,0.4)"
                            stroke-width="1" />
                        <line x1="4" y1="30" x2="36" y2="30" stroke="rgba(37,99,235,0.3)"
                            stroke-width="1" />
                        <path d="M15" y1="36" x2="25" y2="36" stroke="rgba(37,99,235,0.5)"
                            stroke-width="1.5" stroke-linecap="round" />
                        <path d="M13 19 L17 23 L25 15" stroke="rgba(37,99,235,0.9)" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
            </div>
            <div class="pf-product-num">01</div>
        </div>
    </div>

    {{-- FEATURED: NISSI CLOCKIN  (light panel) --}}
    <div class="product-featured light" id="clockin" data-category="workforce">
        <div class="pf-visual" style="order:-1;">
            <div class="pf-visual-inner">
                <div class="pf-visual-ring"></div>
                <div class="pf-visual-ring"></div>
                <div class="pf-visual-ring"></div>
                <div class="pf-icon-center">
                    <svg viewBox="0 0 40 40" fill="none">
                        <circle cx="20" cy="20" r="14" stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                        <circle cx="20" cy="20" r="8" stroke="rgba(37,99,235,0.25)"
                            stroke-width="1" />
                        <path d="M20 12 L20 20 L26 24" stroke="rgba(37,99,235,0.9)" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <circle cx="20" cy="20" r="1.5" fill="rgba(37,99,235,0.8)" />
                    </svg>
                </div>
            </div>
            <div class="pf-product-num">02</div>
        </div>
        <div class="pf-content">
            <div class="pf-tag">Attendance · Workforce</div>
            <h2 class="pf-name">Nissi <span>ClockIn</span></h2>
            <p class="pf-tagline">Simplify Attendance. Empower Your Workforce.</p>
            <p class="pf-desc">Our Smart Clock-In System is a modern, efficient, and user-friendly solution designed to
                streamline employee attendance management. Whether you're a small business or a large enterprise, our
                system helps you keep track of staff timekeeping with precision and ease.</p>
            <ul class="pf-features">
                <li>Biometric & PIN-based clock-in</li>
                <li>GPS location verification</li>
                <li>Automated timesheets & reports</li>
                <li>Payroll-ready data exports</li>
                <li>Real-time attendance dashboard</li>
            </ul>
            <div class="pf-actions">
                <a href="#contact" class="btn-pf-primary">Request a Demo</a>
                <a href="#contact" class="btn-pf-ghost">Learn more →</a>
            </div>
        </div>
    </div>

    {{-- FEATURED: NISSI VLOG  (dark panel) --}}
    <div class="product-featured dark" id="vlog" data-category="operations">
        <div class="pf-content">
            <div class="pf-tag">Visitor Management · Operations</div>
            <h2 class="pf-name">Nissi <span>Vlog</span></h2>
            <p class="pf-tagline">Seamless Check-In. Safer Premises.</p>
            <p class="pf-desc">Welcome your visitors with a smooth, secure, and professional check-in experience. Our
                Smart Visitor Log System is designed to enhance your front desk operations, increase security, and
                maintain a complete digital log of all guest activity — without the paperwork.</p>
            <ul class="pf-features">
                <li>Digital visitor registration & badge printing</li>
                <li>Pre-registration & host notification</li>
                <li>Full visitor history & audit trail</li>
                <li>NDA & document signing at check-in</li>
                <li>Emergency evacuation roll call</li>
            </ul>
            <div class="pf-actions">
                <a href="#contact" class="btn-pf-primary">Request a Demo</a>
                <a href="#contact" class="btn-pf-ghost">Learn more →</a>
            </div>
        </div>
        <div class="pf-visual">
            <div class="pf-visual-inner">
                <div class="pf-visual-ring"></div>
                <div class="pf-visual-ring"></div>
                <div class="pf-visual-ring"></div>
                <div class="pf-icon-center">
                    <svg viewBox="0 0 40 40" fill="none">
                        <path d="M8 36 L8 18 L20 8 L32 18 L32 36 Z" stroke="rgba(37,99,235,0.6)" stroke-width="1.5"
                            fill="none" />
                        <rect x="14" y="24" width="12" height="12" stroke="rgba(37,99,235,0.9)"
                            stroke-width="1.5" fill="none" />
                        <circle cx="20" cy="18" r="3" stroke="rgba(37,99,235,0.5)"
                            stroke-width="1.5" />
                        <path d="M17 30 L17 28 M23 30 L23 28" stroke="rgba(37,99,235,0.4)" stroke-width="1"
                            stroke-linecap="round" />
                    </svg>
                </div>
            </div>
            <div class="pf-product-num">03</div>
        </div>
    </div>

    {{-- COMPACT GRID — remaining 4 products --}}
    <section class="products-compact">
        <div class="compact-header reveal">
            <h2 class="compact-title">More <em>platforms</em></h2>
            <span class="compact-meta">04 additional products</span>
        </div>
        <div class="compact-grid">

            <!-- NissiFlow -->
            <a href="#contact" class="compact-card reveal" id="flow" data-category="operations">
                <div class="cc-top">
                    <div class="cc-num">04</div>
                    <div class="cc-status live">Live</div>
                </div>
                <div class="cc-icon">
                    <svg viewBox="0 0 40 40" fill="none">
                        <rect x="4" y="16" width="10" height="10" rx="1" stroke="rgba(37,99,235,0.7)"
                            stroke-width="1.5" />
                        <rect x="26" y="6" width="10" height="10" rx="1" stroke="rgba(37,99,235,0.5)"
                            stroke-width="1.5" />
                        <rect x="26" y="26" width="10" height="10" rx="1"
                            stroke="rgba(37,99,235,0.5)" stroke-width="1.5" />
                        <path d="M14 21 L20 21 M20 21 L20 11 L26 11 M20 21 L20 31 L26 31" stroke="rgba(37,99,235,0.4)"
                            stroke-width="1" stroke-linecap="round" />
                    </svg>
                </div>
                <h3 class="cc-name">Nissi <span>Flow</span></h3>
                <p class="cc-tagline">Go fully paperless with digital work requests.</p>
                <p class="cc-desc">NissiFlow allows you to set up all your work requests digitally, eliminating paper
                    completely from your organisation. Route, approve, and track every request in one clean workflow.
                </p>
                <span class="cc-link">Request a demo →</span>
            </a>

            <!-- NissiVwork -->
            <a href="#contact" class="compact-card reveal r1" id="vwork" data-category="workforce">
                <div class="cc-top">
                    <div class="cc-num">05</div>
                    <div class="cc-status live">Live</div>
                </div>
                <div class="cc-icon">
                    <svg viewBox="0 0 40 40" fill="none">
                        <rect x="4" y="10" width="32" height="22" rx="2" stroke="rgba(37,99,235,0.5)"
                            stroke-width="1.5" />
                        <rect x="10" y="15" width="20" height="12" rx="1"
                            stroke="rgba(37,99,235,0.35)" stroke-width="1" />
                        <circle cx="32" cy="10" r="6" fill="rgba(37,99,235,0.1)"
                            stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                        <path d="M29 10 L31 12 L35 8" stroke="rgba(37,99,235,0.9)" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="cc-name">Nissi <span>Vwork</span></h3>
                <p class="cc-tagline">Remote work, managed and monitored automatically.</p>
                <p class="cc-desc">Developed to ensure remote employees can work effectively while remaining
                    accountable. The system takes controlled access of the user's device, granting access only to
                    approved work applications and auto-evaluating output by close of day.</p>
                <span class="cc-link">Request a demo →</span>
            </a>

            <!-- NissiSMS -->
            <a href="#contact" class="compact-card reveal r2" id="sms" data-category="communication">
                <div class="cc-top">
                    <div class="cc-num">06</div>
                    <div class="cc-status live">Live</div>
                </div>
                <div class="cc-icon">
                    <svg viewBox="0 0 40 40" fill="none">
                        <rect x="4" y="10" width="28" height="20" rx="3" stroke="rgba(37,99,235,0.6)"
                            stroke-width="1.5" />
                        <path d="M4 26 L2 34 L12 30" stroke="rgba(37,99,235,0.5)" stroke-width="1.5"
                            stroke-linecap="round" stroke-linejoin="round" />
                        <line x1="10" y1="17" x2="26" y2="17"
                            stroke="rgba(37,99,235,0.3)" stroke-width="1" stroke-linecap="round" />
                        <line x1="10" y1="22" x2="21" y2="22"
                            stroke="rgba(37,99,235,0.2)" stroke-width="1" stroke-linecap="round" />
                        <circle cx="34" cy="13" r="5" fill="rgba(37,99,235,0.1)"
                            stroke="rgba(37,99,235,0.5)" stroke-width="1.5" />
                        <path d="M32 13 L33.5 14.5 L36 11.5" stroke="rgba(37,99,235,0.8)" stroke-width="1.2"
                            stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>
                <h3 class="cc-name">Nissi <span>SMS</span></h3>
                <p class="cc-tagline">Reach Thousands Instantly. Engage Effectively.</p>
                <p class="cc-desc">Connect with your customers in real-time through fast, reliable, and affordable Bulk
                    SMS. Powered by trusted partners Arkesel and Npontu — your messages are delivered instantly and
                    securely, with full analytics.</p>
                <span class="cc-link">Request a demo →</span>
            </a>

            <!-- NissiEmails -->
            <a href="#contact" class="compact-card reveal r3" id="emails" data-category="communication"
                style="grid-column: span 3; border-top: 1px solid var(--rule);">
                <div style="display:grid; grid-template-columns: auto 1fr auto; gap: 48px; align-items: center;">
                    <div>
                        <div class="cc-top" style="margin-bottom:16px;">
                            <div class="cc-num">07</div>
                            <div class="cc-status live" style="margin-left:16px;">Live</div>
                        </div>
                        <div class="cc-icon">
                            <svg viewBox="0 0 40 40" fill="none">
                                <rect x="4" y="10" width="32" height="22" rx="2"
                                    stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                                <path d="M4 13 L20 22 L36 13" stroke="rgba(37,99,235,0.5)" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                                <line x1="4" y1="22" x2="12" y2="22"
                                    stroke="rgba(37,99,235,0.2)" stroke-width="1" stroke-linecap="round" />
                                <line x1="4" y1="26" x2="10" y2="26"
                                    stroke="rgba(37,99,235,0.2)" stroke-width="1" stroke-linecap="round" />
                            </svg>
                        </div>
                        <h3 class="cc-name">Nissi <span>Emails</span></h3>
                    </div>
                    <div>
                        <p class="cc-tagline">Bulk email communication at enterprise scale.</p>
                        <p class="cc-desc" style="margin-bottom:0;">A bulk messaging and business communication
                            platform that lets you reach customers at scale. Send transactional alerts, promotional
                            campaigns, and automated notifications — all tracked with full delivery analytics and
                            open-rate reporting.</p>
                    </div>
                    <div>
                        <span class="cc-link">Request a demo →</span>
                    </div>
                </div>
            </a>

        </div>
    </section>

    {{-- COMPARISON TABLE --}}
    <section class="comparison reveal">
        <div class="comparison-header">
            <div class="chip"
                style="display:inline-flex; align-items:center; gap:10px; font-family:var(--ff-mono); font-size:10px; letter-spacing:0.22em; text-transform:uppercase; color:var(--blue-bright);">
                <span style="display:block;width:24px;height:1px;background:var(--blue-bright);"></span>At a glance
            </div>
            <h2 class="comparison-title">Product <em>overview</em></h2>
        </div>
        <table class="comp-table">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Best for</th>
                    <th>Deployment</th>
                    <th>API Access</th>
                    <th>Analytics</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nissi POS</td>
                    <td>Operations</td>
                    <td>Retail & hospitality</td>
                    <td>Cloud + On-premise</td>
                    <td><span class="comp-check"><svg viewBox="0 0 10 10" fill="none">
                                <path d="M2 5L4 7L8 3" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span></td>
                    <td><span class="comp-check"><svg viewBox="0 0 10 10" fill="none">
                                <path d="M2 5L4 7L8 3" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span></td>
                </tr>
                <tr>
                    <td>Nissi ClockIn</td>
                    <td>Workforce</td>
                    <td>All business sizes</td>
                    <td>Cloud</td>
                    <td><span class="comp-check"><svg viewBox="0 0 10 10" fill="none">
                                <path d="M2 5L4 7L8 3" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span></td>
                    <td><span class="comp-check"><svg viewBox="0 0 10 10" fill="none">
                                <path d="M2 5L4 7L8 3" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span></td>
                </tr>
                <tr>
                    <td>Nissi Vlog</td>
                    <td>Operations</td>
                    <td>Corporate offices</td>
                    <td>Cloud + Kiosk</td>
                    <td><span class="comp-check"><svg viewBox="0 0 10 10" fill="none">
                                <path d="M2 5L4 7L8 3" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span></td>
                    <td><span class="comp-check"><svg viewBox="0 0 10 10" fill="none">
                                <path d="M2 5L4 7L8 3" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span></td>
                </tr>
                <tr>
                    <td>Nissi Flow</td>
                    <td>Operations</td>
                    <td>Any organisation</td>
                    <td>Cloud</td>
                    <td><span class="comp-dash">—</span></td>
                    <td><span class="comp-check"><svg viewBox="0 0 10 10" fill="none">
                                <path d="M2 5L4 7L8 3" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span></td>
                </tr>
                <tr>
                    <td>Nissi Vwork</td>
                    <td>Workforce</td>
                    <td>Remote-first teams</td>
                    <td>Cloud</td>
                    <td><span class="comp-dash">—</span></td>
                    <td><span class="comp-check"><svg viewBox="0 0 10 10" fill="none">
                                <path d="M2 5L4 7L8 3" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span></td>
                </tr>
                <tr>
                    <td>Nissi SMS</td>
                    <td>Communication</td>
                    <td>Marketing & alerts</td>
                    <td>Cloud (SaaS)</td>
                    <td><span class="comp-check"><svg viewBox="0 0 10 10" fill="none">
                                <path d="M2 5L4 7L8 3" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span></td>
                    <td><span class="comp-check"><svg viewBox="0 0 10 10" fill="none">
                                <path d="M2 5L4 7L8 3" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span></td>
                </tr>
                <tr>
                    <td>Nissi Emails</td>
                    <td>Communication</td>
                    <td>Email campaigns</td>
                    <td>Cloud (SaaS)</td>
                    <td><span class="comp-check"><svg viewBox="0 0 10 10" fill="none">
                                <path d="M2 5L4 7L8 3" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span></td>
                    <td><span class="comp-check"><svg viewBox="0 0 10 10" fill="none">
                                <path d="M2 5L4 7L8 3" stroke="#2563EB" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg></span></td>
                </tr>
            </tbody>
        </table>
    </section>

    {{-- CTA --}}
    <section class="products-cta" id="contact">
        <div>
            <div class="pcta-label reveal">Ready to get started?</div>
            <h2 class="pcta-title reveal r1">Not sure which<br><em>product fits?</em></h2>
        </div>
        <div class="pcta-right reveal r2">
            <p class="pcta-desc">Talk to our team and we'll help you identify exactly which Nissi platform — or
                combination of platforms — makes the most sense for your operations, team size, and budget.</p>
            <div class="pcta-btns">
                <a href="mailto:info@nissitechnologies.com" class="btn-fill">Book a Free Consultation</a>
                <a href="{{ route('home') }}" class="btn-outline-light">Back to Home</a>
            </div>
        </div>
    </section>
</x-layouts.app>

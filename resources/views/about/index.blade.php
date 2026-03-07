<x-layouts.app>
    {{-- PAGE HERO --}}
    <section class="hero">
        <div class="hero-content">
            {{-- <span class="hero-tag">IT Solutions & Services</span> --}}
            <h1 class="hero-h1">
                Technology with<br />purpose.<br /><em>People first.</em>
            </h1>
            <p class="hero-sub">
                We're a team of builders, problem-solvers, and technologists united by
                a single belief — that the right technology, properly implemented,
                changes how businesses operate forever.
            </p>
            <div class="ah-stats">
                <div class="ah-stat">
                    <div class="ah-stat-n">6<sup>+</sup></div>
                    <div class="ah-stat-l">Years in business</div>
                </div>
                <div class="ah-stat">
                    <div class="ah-stat-n">500<sup>+</sup></div>
                    <div class="ah-stat-l">Clients served</div>
                </div>
                <div class="ah-stat">
                    <div class="ah-stat-n">7</div>
                    <div class="ah-stat-l">Proprietary products</div>
                </div>
            </div>
        </div>

        <div class="ah-visual">
            <img class="ah-img-main" src="{{ asset('images/tech_lady.jpg') }}" alt="Nissi Technologies team" />
            <div class="ah-year-badge">
                <div class="ah-year-badge-n">2025</div>
                <div class="ah-year-badge-l">Year founded</div>
            </div>
        </div>

        <div class="ah-bar">
            <div class="ah-bar-item">Accra, Ghana</div>
            <div class="ah-bar-item">Google Workspace Partner</div>
            <div class="ah-bar-item">ISO 27001 Compliant</div>
        </div>
    </section>

    {{-- MISSION & VISION --}}
    <section class="mission" id="mission">
        <div class="mission-left">
            <div class="chip reveal">What drives us</div>
            <h2 class="mission-heading reveal r1">
                Built on a<br /><em>clear purpose</em>
            </h2>
            <p class="mission-body reveal r2">
                Nissi Technologies was founded on the conviction that
                <strong>technology should work for businesses</strong>, not against
                them. Too many companies struggle with systems that are complex,
                unreliable, or simply not built for the realities of modern
                operations. We set out to fix that.
            </p>
        </div>

        <div class="mv-stack reveal r1">
            <div class="mv-card">
                <div class="mv-card-label">Our Mission</div>
                <h3 class="mv-card-title">Simplify. Empower. Deliver.</h3>
                <p class="mv-card-body">
                    Our mission is to deliver innovative, reliable, and accessible
                    technology solutions that empower businesses to operate smarter,
                    grow faster, and compete with confidence — regardless of size or
                    sector. We build tools that remove complexity, not add to it.
                </p>
            </div>
            <div class="mv-card">
                <div class="mv-card-label">Our Vision</div>
                <h3 class="mv-card-title">The most trusted IT partner in Africa.</h3>
                <p class="mv-card-body">
                    We envision a future where every business — from the corner store to
                    the enterprise — has access to world-class technology
                    infrastructure. Nissi exists to close that gap: building platforms
                    and partnerships that make sophisticated IT accessible, practical,
                    and transformative.
                </p>
            </div>
            <div class="mv-card">
                <div class="mv-card-label">Our Promise</div>
                <h3 class="mv-card-title">We stay in your stack.</h3>
                <p class="mv-card-body">
                    We're not a vendor you call when things break. We're a partner
                    embedded in your operations — proactively monitoring, continuously
                    improving, and available around the clock. When your business grows,
                    we grow with it.
                </p>
            </div>
        </div>
    </section>

    {{-- CORE VALUES --}}
    <section class="values" id="values">
        <div class="values-header reveal">
            <h2 class="values-title">Our core <em>values</em></h2>
            <span class="values-meta">06 guiding principles</span>
        </div>
        <div class="values-grid">
            <div class="value-card reveal">
                <div class="value-num">01</div>
                <svg class="value-icon" viewBox="0 0 44 44" fill="none">
                    <circle cx="22" cy="22" r="16" stroke="rgba(37,99,235,0.5)" stroke-width="1.5" />
                    <path d="M14 22 L19 27 L30 16" stroke="rgba(37,99,235,0.8)" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <h3 class="value-name">Reliability</h3>
                <p class="value-desc">
                    We build systems designed to stay up. Our clients trust us with
                    their most critical infrastructure, and we treat that trust as our
                    most important deliverable.
                </p>
            </div>

            <div class="value-card reveal r1">
                <div class="value-num">02</div>
                <svg class="value-icon" viewBox="0 0 44 44" fill="none">
                    <path d="M22 6 L28 16 L40 18 L31 27 L33 39 L22 33 L11 39 L13 27 L4 18 L16 16 Z"
                        stroke="rgba(37,99,235,0.6)" stroke-width="1.5" fill="none" />
                    <path d="M22 12 L26 20 L35 21 L28 28 L30 37 L22 33 L14 37 L16 28 L9 21 L18 20 Z"
                        stroke="rgba(37,99,235,0.25)" stroke-width="1" fill="none" />
                </svg>
                <h3 class="value-name">Excellence</h3>
                <p class="value-desc">
                    Good enough is never enough. Every product we build, every system we
                    deploy, and every support call we take is an opportunity to exceed
                    expectations.
                </p>
            </div>

            <div class="value-card reveal r2">
                <div class="value-num">03</div>
                <svg class="value-icon" viewBox="0 0 44 44" fill="none">
                    <rect x="6" y="6" width="14" height="14" stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                    <rect x="24" y="6" width="14" height="14" stroke="rgba(37,99,235,0.3)" stroke-width="1.5" />
                    <rect x="6" y="24" width="14" height="14" stroke="rgba(37,99,235,0.3)" stroke-width="1.5" />
                    <rect x="24" y="24" width="14" height="14" stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                </svg>
                <h3 class="value-name">Innovation</h3>
                <p class="value-desc">
                    We don't just implement technology — we build it. Our in-house
                    products exist because we saw gaps in the market and decided to fill
                    them ourselves.
                </p>
            </div>

            <div class="value-card reveal">
                <div class="value-num">04</div>
                <svg class="value-icon" viewBox="0 0 44 44" fill="none">
                    <circle cx="14" cy="22" r="6" stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                    <circle cx="30" cy="22" r="6" stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                    <path d="M20 22 L24 22" stroke="rgba(37,99,235,0.4)" stroke-width="1.5" stroke-linecap="round" />
                    <circle cx="22" cy="10" r="4" stroke="rgba(37,99,235,0.3)" stroke-width="1.5" />
                    <circle cx="22" cy="34" r="4" stroke="rgba(37,99,235,0.3)" stroke-width="1.5" />
                </svg>
                <h3 class="value-name">Partnership</h3>
                <p class="value-desc">
                    We think in long-term relationships, not short-term transactions.
                    The success of our clients is the metric we measure ourselves
                    against.
                </p>
            </div>

            <div class="value-card reveal r1">
                <div class="value-num">05</div>
                <svg class="value-icon" viewBox="0 0 44 44" fill="none">
                    <rect x="8" y="14" width="28" height="18" rx="2" stroke="rgba(37,99,235,0.5)"
                        stroke-width="1.5" />
                    <path d="M8 20 L36 20" stroke="rgba(37,99,235,0.25)" stroke-width="1" />
                    <circle cx="14" cy="28" r="2" stroke="rgba(37,99,235,0.6)" stroke-width="1.5" />
                    <line x1="20" y1="28" x2="30" y2="28" stroke="rgba(37,99,235,0.3)"
                        stroke-width="1" stroke-linecap="round" />
                </svg>
                <h3 class="value-name">Transparency</h3>
                <p class="value-desc">
                    No hidden fees, no vague roadmaps. We communicate clearly at every
                    stage — from project scoping through to post-deployment reporting.
                </p>
            </div>

            <div class="value-card reveal r2">
                <div class="value-num">06</div>
                <svg class="value-icon" viewBox="0 0 44 44" fill="none">
                    <path d="M22 8 C12 8 8 14 8 20 C8 30 16 36 22 38 C28 36 36 30 36 20 C36 14 32 8 22 8Z"
                        stroke="rgba(37,99,235,0.5)" stroke-width="1.5" fill="none" />
                    <path d="M22 8 C22 8 28 14 28 22 C28 30 22 38 22 38 C22 38 16 30 16 22 C16 14 22 8 22 8Z"
                        stroke="rgba(37,99,235,0.25)" stroke-width="1" fill="none" />
                    <line x1="8" y1="22" x2="36" y2="22" stroke="rgba(37,99,235,0.2)"
                        stroke-width="1" />
                </svg>
                <h3 class="value-name">Accessibility</h3>
                <p class="value-desc">
                    Enterprise-grade technology shouldn't be a privilege of large
                    corporations. We're on a mission to make world-class IT solutions
                    available to every business.
                </p>
            </div>
        </div>
    </section>

    {{-- NUMBERS STRIP --}}
    {{-- <div class="numbers">
        <div class="number-cell reveal">
            <div class="nc-n">500<sup>+</sup></div>
            <div class="nc-l">Companies served</div>
        </div>
        <div class="number-cell reveal r1">
            <div class="nc-n">7</div>
            <div class="nc-l">Proprietary products</div>
        </div>
        <div class="number-cell reveal r2">
            <div class="nc-n">99<sup>.9%</sup></div>
            <div class="nc-l">Uptime SLA</div>
        </div>
        <div class="number-cell reveal r3">
            <div class="nc-n">24<sup>/7</sup></div>
            <div class="nc-l">Support coverage</div>
        </div>
    </div> --}}

    {{-- TEAM --}}
    <section class="team" id="team">
        <div class="team-header reveal">
            <h2 class="team-title">The <em>people</em> behind it</h2>
            <p class="team-intro">
                A small, focused team of technologists committed to building things
                that actually work.
            </p>
        </div>

        <div class="team-grid">
            <div class="team-card reveal">
                <div class="tc-photo">
                    <div class="tc-initials"><span>CEO</span></div>
                </div>
                <div class="tc-info">
                    <div class="tc-name">Chief Executive</div>
                    <div class="tc-role">Founder & CEO</div>
                    <p class="tc-bio">
                        The vision behind Nissi — setting strategy, forging partnerships,
                        and ensuring every product we ship meets the standard our clients
                        expect.
                    </p>
                </div>
            </div>

            <div class="team-card reveal r1">
                <div class="tc-photo">
                    <div class="tc-initials"><span>CTO</span></div>
                </div>
                <div class="tc-info">
                    <div class="tc-name">Chief Technology</div>
                    <div class="tc-role">Co-Founder & CTO</div>
                    <p class="tc-bio">
                        Architects the technical foundation of every Nissi product. From
                        infrastructure design to code review, nothing ships without their
                        seal of approval.
                    </p>
                </div>
            </div>

            <div class="team-card reveal r2">
                <div class="tc-photo">
                    <div class="tc-initials"><span>ENG</span></div>
                </div>
                <div class="tc-info">
                    <div class="tc-name">Lead Engineer</div>
                    <div class="tc-role">Head of Engineering</div>
                    <p class="tc-bio">
                        Leads the development team across all proprietary platforms —
                        translating complex business requirements into elegant, scalable
                        software.
                    </p>
                </div>
            </div>

            <div class="team-card reveal r3">
                <div class="tc-photo">
                    <div class="tc-initials"><span>OPS</span></div>
                </div>
                <div class="tc-info">
                    <div class="tc-name">Operations Lead</div>
                    <div class="tc-role">Head of Client Operations</div>
                    <p class="tc-bio">
                        The person our clients call when it matters. Manages
                        implementations, support escalations, and ensures every engagement
                        runs smoothly from day one.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- WHY NISSI --}}
    <section class="why" id="why">
        <div class="why-left reveal">
            <div class="chip">Why choose us</div>
            <h2 class="why-title">What sets<br />Nissi <em>apart</em></h2>
            <p class="why-copy">
                There are many IT companies. Here's why hundreds of businesses have
                chosen — and stayed with — Nissi.
            </p>
        </div>

        <div class="why-list">
            <div class="why-row reveal">
                <div class="why-num">01</div>
                <div>
                    <h3 class="why-item-title">We build what we recommend</h3>
                    <p class="why-item-body">
                        Unlike consultancies that resell third-party tools, Nissi has
                        engineered its own suite of 7 proprietary platforms — POS,
                        attendance, visitor management, workflow, remote work, SMS, and
                        email. We use them ourselves, so we know exactly how they perform.
                    </p>
                </div>
            </div>
            <div class="why-row reveal r1">
                <div class="why-num">02</div>
                <div>
                    <h3 class="why-item-title">End-to-end accountability</h3>
                    <p class="why-item-body">
                        From the first scoping call to year-three support renewals, one
                        team owns your account. No handoffs to third parties, no
                        finger-pointing when issues arise. We are the single point of
                        accountability for your technology.
                    </p>
                </div>
            </div>
            <div class="why-row reveal r2">
                <div class="why-num">03</div>
                <div>
                    <h3 class="why-item-title">Built for the African market</h3>
                    <p class="why-item-body">
                        Our products and services are designed with the realities of
                        operating in Africa in mind — intermittent connectivity,
                        mixed-device environments, local compliance requirements, and the
                        pace at which businesses here actually move.
                    </p>
                </div>
            </div>
            <div class="why-row reveal r3">
                <div class="why-num">04</div>
                <div>
                    <h3 class="why-item-title">Speed without compromise</h3>
                    <p class="why-item-body">
                        We don't run 12-month discovery projects. We move fast —
                        delivering working systems in weeks, not quarters — without
                        cutting corners on architecture, security, or documentation.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="about-cta">
        <div>
            <div class="chip reveal" style="margin-bottom: 28px">Work with us</div>
            <h2 class="acta-title reveal r1">
                Ready to work<br />with a team that<br /><em>delivers?</em>
            </h2>
        </div>
        <div class="acta-right reveal r2">
            <p class="acta-body">
                Whether you need to modernise your infrastructure, roll out a new
                platform, or simply find a technology partner you can rely on — we'd
                love to hear from you. No hard sell, just an honest conversation.
            </p>
            <div class="acta-btns">
                <a href="mailto:info@nissitechnologies.com" class="btn-fill">Book a free consultation</a>
                <a href="{{ route('products') }}" class="btn-ghost-dark">See our products →</a>
            </div>
        </div>
    </section>
</x-layouts.app>

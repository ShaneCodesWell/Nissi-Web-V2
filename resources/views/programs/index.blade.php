<x-layouts.app>
    <!-- ===== REDESIGNED HERO SECTION – TRAINING PROGRAMS ===== -->
    <!-- two-column layout with interactive program preview + quick comparison -->
    <section class="relative pt-40 pb-28 overflow-hidden bg-linear-to-br from-indigo-50/90 via-white to-slate-50">
        <div class="absolute inset-0 grid-pattern opacity-50"></div>
        <div class="absolute top-20 right-20 w-125 h-125 bg-blue-300/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-100 h-100 bg-purple-300/20 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-8 items-center">
                <!-- LEFT COLUMN – headline, description, key differentiators -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="flex items-center gap-3 animate-slide-up">
                        <span class="relative flex h-3 w-3">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-600"></span>
                        </span>
                        <span class="text-blue-700 font-semibold tracking-wide text-sm uppercase">ELITE TECH TRAINING ·
                            CAREER ACCELERATION</span>
                    </div>

                    <h1
                        class="font-display text-5xl md:text-6xl lg:text-7xl text-gray-900 leading-[1.1] tracking-tight animate-slide-up delay-100">
                        From <span class="gradient-text">code</span> to career in 16 weeks
                    </h1>

                    <p class="text-lg md:text-xl text-gray-600 max-w-xl leading-relaxed animate-slide-up delay-200">
                        Cloud engineering, AI research, cybersecurity — programs designed
                        by the engineers who built at scale. Direct placement, real
                        projects, zero risk.
                    </p>

                    <!-- quick stats / trust badges -->
                    <div class="flex flex-wrap items-center gap-6 pt-2 animate-slide-up delay-300">
                        <div class="flex -space-x-2">
                            <img class="w-8 h-8 rounded-full border-2 border-white"
                                src="https://randomuser.me/api/portraits/women/68.jpg" alt="grad" />
                            <img class="w-8 h-8 rounded-full border-2 border-white"
                                src="https://randomuser.me/api/portraits/men/32.jpg" alt="grad" />
                            <img class="w-8 h-8 rounded-full border-2 border-white"
                                src="https://randomuser.me/api/portraits/women/45.jpg" alt="grad" />
                            <img class="w-8 h-8 rounded-full border-2 border-white"
                                src="https://randomuser.me/api/portraits/men/75.jpg" alt="grad" />
                        </div>
                        <span class="text-sm text-gray-600 font-medium"><span
                                class="text-gray-900 font-bold">500+</span> placed in
                            2025</span>
                        <span class="w-px h-6 bg-gray-300 hidden sm:block"></span>
                        <span class="text-sm bg-white/70 px-4 py-2 rounded-full shadow-sm border border-gray-200"><i
                                class="fas fa-gem text-blue-500 mr-1"></i> 85% placement
                            rate</span>
                    </div>

                    <!-- CTA buttons -->
                    <div class="flex flex-wrap gap-4 pt-4">
                        <a href="#programs"
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-4 rounded-xl shadow-xl shadow-blue-600/30 inline-flex items-center gap-2 transition-all group">
                            Compare programs
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
                        </a>
                        <a href="#apply"
                            class="text-gray-700 font-medium px-6 py-4 inline-flex items-center gap-2 hover:text-blue-600 transition bg-white/80 backdrop-blur-sm rounded-xl border border-gray-200">
                            <i class="fas fa-calendar-check text-blue-500"></i> Info session
                        </a>
                    </div>
                </div>

                <!-- RIGHT COLUMN – interactive program preview cards (quick comparison) -->
                <div class="lg:col-span-5 relative animate-slide-up delay-200">
                    <div class="relative">
                        <div
                            class="absolute -inset-4 bg-linear-to-tr from-blue-400/20 via-purple-400/20 to-cyan-400/20 rounded-3xl blur-2xl">
                        </div>

                        <div
                            class="relative glass-card rounded-3xl shadow-2xl p-6 border border-white/40 overflow-hidden">
                            <div class="absolute inset-0 opacity-10"
                                style="
                                        background-image: radial-gradient(
                                        #0066ff 0.8px,
                                        transparent 0.8px
                                        );
                                        background-size: 16px 16px;
                                    ">
                            </div>
                            <div class="relative space-y-4">
                                <!-- header -->
                                <div class="flex justify-between items-center">
                                    <span
                                        class="bg-linear-to-r from-blue-600 to-purple-600 text-white text-xs px-4 py-2 rounded-full font-semibold flex items-center gap-1"><i
                                            class="fas fa-bolt"></i> QUICK COMPARE</span>
                                    <span class="text-xs bg-white/80 px-3 py-1.5 rounded-full shadow-sm">next cohort:
                                        June 1</span>
                                </div>

                                <!-- mini cards for each program -->
                                <div class="space-y-3">
                                    <!-- Developer Academy -->
                                    <div
                                        class="bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-gray-100 flex items-center gap-4 group hover:border-blue-400 transition cursor-pointer">
                                        <div
                                            class="w-12 h-12 bg-linear-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center text-white shadow-md">
                                            <i class="fas fa-code"></i>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <div class="flex justify-between items-center">
                                                <span class="font-bold text-gray-900">Cloud Developer</span>
                                                <span
                                                    class="text-xs bg-blue-100 text-blue-700 px-2 py-0.5 rounded-full">16
                                                    wks</span>
                                            </div>
                                            <div class="flex items-center gap-2 mt-1 text-xs text-gray-600">
                                                <span>K8s · AWS</span>
                                                <span class="w-1 h-1 bg-gray-400 rounded-full"></span>
                                                <span class="font-semibold text-green-600">$12k</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-chevron-right text-blue-400 text-xs"></i>
                                    </div>

                                    <!-- AI Fellowship -->
                                    <div
                                        class="bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-gray-100 flex items-center gap-4 group hover:border-purple-400 transition cursor-pointer">
                                        <div
                                            class="w-12 h-12 bg-linear-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center text-white shadow-md">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <div class="flex justify-between items-center">
                                                <span class="font-bold text-gray-900">AI Research</span>
                                                <span
                                                    class="text-xs bg-purple-100 text-purple-700 px-2 py-0.5 rounded-full">12
                                                    mo</span>
                                            </div>
                                            <div class="flex items-center gap-2 mt-1 text-xs text-gray-600">
                                                <span>LLMs · stipend</span>
                                                <span class="w-1 h-1 bg-gray-400 rounded-full"></span>
                                                <span class="font-semibold text-green-600">free + $50k</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-chevron-right text-purple-400 text-xs"></i>
                                    </div>

                                    <!-- Security Track -->
                                    <div
                                        class="bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-gray-100 flex items-center gap-4 group hover:border-emerald-400 transition cursor-pointer">
                                        <div
                                            class="w-12 h-12 bg-linear-to-br from-emerald-500 to-teal-500 rounded-xl flex items-center justify-center text-white shadow-md">
                                            <i class="fas fa-shield-halved"></i>
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            <div class="flex justify-between items-center">
                                                <span class="font-bold text-gray-900">Security Track</span>
                                                <span
                                                    class="text-xs bg-emerald-100 text-emerald-700 px-2 py-0.5 rounded-full">20
                                                    wks</span>
                                            </div>
                                            <div class="flex items-center gap-2 mt-1 text-xs text-gray-600">
                                                <span>OSCP · CTFs</span>
                                                <span class="w-1 h-1 bg-gray-400 rounded-full"></span>
                                                <span class="font-semibold text-green-600">$8.5k</span>
                                            </div>
                                        </div>
                                        <i class="fas fa-chevron-right text-emerald-400 text-xs"></i>
                                    </div>
                                </div>

                                <!-- footer: placement highlight -->
                                <div class="flex items-center justify-between border-t border-gray-200/60 pt-4 text-xs">
                                    <span class="text-gray-500"><i class="fas fa-trophy text-amber-500 mr-1"></i> 90%
                                        placement within 3 months</span>
                                    <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full font-medium">🔍 compare
                                        all →</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- floating badge – financing -->
                    <div
                        class="absolute -bottom-3 -right-4 bg-white rounded-full shadow-xl py-2 px-5 border border-gray-200 flex items-center gap-2 text-sm">
                        <i class="fas fa-hand-holding-usd text-blue-500"></i>
                        <span class="font-medium text-gray-800">ISAs · payment plans</span>
                    </div>
                </div>
            </div>

            <!-- scroll hint -->
            <div class="hidden lg:flex justify-start mt-16 gap-1 text-sm text-gray-400 items-center">
                <i class="fas fa-chevron-down"></i>
                <span>explore programs & compare</span>
            </div>
        </div>
    </section>
    <!-- END REDESIGNED HERO -->

    <!-- Programs Section (unchanged – keep exactly as provided) -->
    <section id="programs" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <!-- Program 1: Developer Academy -->
            <div class="mb-32 reveal">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-16 h-16 bg-linear-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-code text-white text-2xl"></i>
                            </div>
                            <span
                                class="px-4 py-1.5 bg-green-100 text-green-700 rounded-full text-xs font-bold border-2 border-green-200">
                                ENROLLING NOW
                            </span>
                        </div>

                        <h2 class="font-display text-4xl text-gray-900 mb-4">
                            Cloud-Native Developer Academy
                        </h2>

                        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                            A 16-week intensive bootcamp where you'll build production-grade
                            applications using microservices, Docker, Kubernetes, and
                            serverless architectures. Graduate with a portfolio of deployed
                            projects and direct access to our hiring network.
                        </p>

                        <div class="space-y-5 mb-8">
                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <div
                                    class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-clock text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-gray-900 font-bold mb-1">Duration</h4>
                                    <p class="text-gray-600 text-sm">
                                        16 weeks • Part-time or Full-time tracks
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <div
                                    class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-laptop-code text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-gray-900 font-bold mb-1">Tech Stack</h4>
                                    <p class="text-gray-600 text-sm">
                                        React, Node.js, Python, AWS, Kubernetes, PostgreSQL
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <div
                                    class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-certificate text-blue-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-gray-900 font-bold mb-1">Certification</h4>
                                    <p class="text-gray-600 text-sm">
                                        Nissi Certified Cloud Developer + AWS Solutions Architect
                                        prep
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4">
                            <a href="#apply"
                                class="px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold transition inline-flex items-center gap-2">
                                View Curriculum
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="#apply"
                                class="px-8 py-4 bg-white hover:bg-gray-50 text-gray-900 rounded-xl font-semibold transition border-2 border-gray-300">
                                Apply Now
                            </a>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="bg-white rounded-3xl p-8 shadow-2xl border-2 border-gray-200 card-hover">
                            <div class="space-y-6">
                                <div class="flex items-center justify-between pb-6 border-b-2 border-gray-100">
                                    <div class="flex items-center gap-3">
                                        <div
                                            class="w-12 h-12 bg-linear-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center">
                                            <i class="fas fa-terminal text-white"></i>
                                        </div>
                                        <div>
                                            <div class="text-gray-900 font-bold">
                                                Terminal Session
                                            </div>
                                            <div class="text-gray-500 text-xs">
                                                student@nissi:~$
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-2">
                                        <div class="w-3 h-3 bg-red-400 rounded-full"></div>
                                        <div class="w-3 h-3 bg-yellow-400 rounded-full"></div>
                                        <div class="w-3 h-3 bg-green-400 rounded-full"></div>
                                    </div>
                                </div>

                                <div
                                    class="font-mono text-sm text-gray-700 space-y-3 bg-gray-50 rounded-xl p-6 border border-gray-200">
                                    <p>
                                        <span class="text-green-600">→</span> kubectl apply -f
                                        deployment.yaml
                                    </p>
                                    <p class="text-gray-500">
                                        deployment.apps/nissi-app created
                                    </p>
                                    <p>
                                        <span class="text-green-600">→</span> kubectl get pods
                                    </p>
                                    <p class="text-gray-600">NAME STATUS RESTARTS</p>
                                    <p class="text-green-600">nissi-app-7d8f Running 0</p>
                                    <p>
                                        <span class="text-green-600">→</span>
                                        <span class="animate-pulse">|</span>
                                    </p>
                                </div>

                                <div class="flex gap-2">
                                    <div class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg text-xs font-semibold">
                                        Kubernetes
                                    </div>
                                    <div class="px-4 py-2 bg-cyan-100 text-cyan-700 rounded-lg text-xs font-semibold">
                                        DevOps
                                    </div>
                                    <div
                                        class="px-4 py-2 bg-purple-100 text-purple-700 rounded-lg text-xs font-semibold">
                                        Cloud
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program 2: AI Fellowship -->
            <div class="mb-32 reveal">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div class="order-2 lg:order-1 relative">
                        <div class="bg-white rounded-3xl p-8 shadow-2xl border-2 border-gray-200 card-hover">
                            <div class="space-y-6">
                                <div class="flex items-center justify-between">
                                    <div class="text-2xl font-bold text-gray-900">
                                        AI Model Training
                                    </div>
                                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-brain text-purple-600 text-xl"></i>
                                    </div>
                                </div>

                                <div class="space-y-4">
                                    <div class="flex justify-between items-center">
                                        <span class="text-gray-600 text-sm font-medium">Epoch 47/50</span>
                                        <span class="text-purple-600 font-bold">94%</span>
                                    </div>
                                    <div class="w-full bg-gray-200 rounded-full h-3 overflow-hidden">
                                        <div class="bg-linear-to-r from-purple-500 to-blue-500 h-3 rounded-full transition-all duration-1000"
                                            style="width: 94%"></div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-4 pt-4">
                                        <div
                                            class="bg-linear-to-br from-green-50 to-emerald-50 rounded-xl p-4 border-2 border-green-200">
                                            <div class="text-gray-600 text-xs mb-1 font-medium">
                                                Accuracy
                                            </div>
                                            <div class="text-gray-900 font-bold text-2xl">
                                                96.8%
                                            </div>
                                        </div>
                                        <div
                                            class="bg-linear-to-br from-blue-50 to-cyan-50 rounded-xl p-4 border-2 border-blue-200">
                                            <div class="text-gray-600 text-xs mb-1 font-medium">
                                                Loss
                                            </div>
                                            <div class="text-gray-900 font-bold text-2xl">
                                                0.032
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex gap-2 pt-2">
                                        <div
                                            class="px-4 py-2 bg-purple-100 text-purple-700 rounded-lg text-xs font-semibold">
                                            Neural Networks
                                        </div>
                                        <div
                                            class="px-4 py-2 bg-pink-100 text-pink-700 rounded-lg text-xs font-semibold">
                                            Deep Learning
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="order-1 lg:order-2">
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-16 h-16 bg-linear-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-brain text-white text-2xl"></i>
                            </div>
                            <span
                                class="px-4 py-1.5 bg-amber-100 text-amber-700 rounded-full text-xs font-bold border-2 border-amber-200">
                                COMPETITIVE
                            </span>
                        </div>

                        <h2 class="font-display text-4xl text-gray-900 mb-4">
                            AI Research Fellowship
                        </h2>

                        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                            An advanced 12-month program for aspiring AI researchers and
                            machine learning engineers. Work alongside our research team on
                            cutting-edge projects in NLP, computer vision, and reinforcement
                            learning. Publish papers and contribute to open-source AI
                            frameworks.
                        </p>

                        <div class="space-y-5 mb-8">
                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <div
                                    class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-users text-purple-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-gray-900 font-bold mb-1">Cohort Size</h4>
                                    <p class="text-gray-600 text-sm">
                                        Limited to 20 fellows per year • Highly selective
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <div
                                    class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-flask text-purple-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-gray-900 font-bold mb-1">Research Areas</h4>
                                    <p class="text-gray-600 text-sm">
                                        Generative AI, LLM fine-tuning, Neural architecture search
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <div
                                    class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-dollar-sign text-purple-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-gray-900 font-bold mb-1">Stipend</h4>
                                    <p class="text-gray-600 text-sm">
                                        $50,000 annual stipend + compute credits
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4">
                            <a href="#apply"
                                class="px-8 py-4 bg-purple-600 hover:bg-purple-700 text-white rounded-xl font-semibold transition inline-flex items-center gap-2">
                                Program Details
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="#apply"
                                class="px-8 py-4 bg-white hover:bg-gray-50 text-gray-900 rounded-xl font-semibold transition border-2 border-gray-300">
                                Application Process
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Program 3: Security Track -->
            <div class="reveal">
                <div class="grid lg:grid-cols-2 gap-16 items-center">
                    <div>
                        <div class="flex items-center gap-3 mb-6">
                            <div
                                class="w-16 h-16 bg-linear-to-br from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center">
                                <i class="fas fa-shield-halved text-white text-2xl"></i>
                            </div>
                            <span
                                class="px-4 py-1.5 bg-red-100 text-red-700 rounded-full text-xs font-bold border-2 border-red-200">
                                NEW FOR 2025
                            </span>
                        </div>

                        <h2 class="font-display text-4xl text-gray-900 mb-4">
                            Cybersecurity Certification Track
                        </h2>

                        <p class="text-lg text-gray-600 mb-8 leading-relaxed">
                            Master offensive and defensive security through hands-on labs in
                            penetration testing, incident response, and threat hunting.
                            Prepare for OSCP, CEH, and CISSP certifications while working on
                            real-world security audits.
                        </p>

                        <div class="space-y-5 mb-8">
                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <div
                                    class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-gamepad text-emerald-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-gray-900 font-bold mb-1">Hands-On Labs</h4>
                                    <p class="text-gray-600 text-sm">
                                        300+ CTF challenges • Private pentesting range
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <div
                                    class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-bug text-emerald-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-gray-900 font-bold mb-1">
                                        Specializations
                                    </h4>
                                    <p class="text-gray-600 text-sm">
                                        Web App Security, Network Defense, Cloud Security, Malware
                                        Analysis
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4 p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <div
                                    class="w-12 h-12 bg-emerald-100 rounded-xl flex items-center justify-center shrink-0">
                                    <i class="fas fa-briefcase text-emerald-600"></i>
                                </div>
                                <div>
                                    <h4 class="text-gray-900 font-bold mb-1">Career Path</h4>
                                    <p class="text-gray-600 text-sm">
                                        Direct placement in SOC analyst & pentester roles
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-4">
                            <a href="#apply"
                                class="px-8 py-4 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl font-semibold transition inline-flex items-center gap-2">
                                Explore Modules
                                <i class="fas fa-arrow-right"></i>
                            </a>
                            <a href="#apply"
                                class="px-8 py-4 bg-white hover:bg-gray-50 text-gray-900 rounded-xl font-semibold transition border-2 border-gray-300">
                                Enroll Now
                            </a>
                        </div>
                    </div>

                    <div class="relative">
                        <div class="bg-white rounded-3xl p-8 shadow-2xl border-2 border-gray-200 card-hover">
                            <div class="space-y-6">
                                <div class="flex items-center justify-between pb-6 border-b-2 border-gray-100">
                                    <div class="text-gray-900 font-bold">
                                        Security Dashboard
                                    </div>
                                    <div class="flex items-center gap-2">
                                        <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                                        <span class="text-green-600 text-xs font-semibold">ACTIVE</span>
                                    </div>
                                </div>

                                <div class="space-y-3">
                                    <div class="bg-red-50 border-l-4 border-red-500 rounded-lg p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-red-700 font-bold text-sm">Critical Vulnerability</span>
                                            <span class="text-gray-500 text-xs">2 min ago</span>
                                        </div>
                                        <p class="text-gray-700 text-sm">
                                            SQL Injection detected on /api/users
                                        </p>
                                    </div>

                                    <div class="bg-amber-50 border-l-4 border-amber-500 rounded-lg p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-amber-700 font-bold text-sm">Suspicious Activity</span>
                                            <span class="text-gray-500 text-xs">5 min ago</span>
                                        </div>
                                        <p class="text-gray-700 text-sm">
                                            Multiple failed login attempts from 192.168.1.45
                                        </p>
                                    </div>

                                    <div class="bg-green-50 border-l-4 border-green-500 rounded-lg p-4">
                                        <div class="flex items-center justify-between mb-2">
                                            <span class="text-green-700 font-bold text-sm">Patch Applied</span>
                                            <span class="text-gray-500 text-xs">1 hour ago</span>
                                        </div>
                                        <p class="text-gray-700 text-sm">
                                            Security update deployed successfully
                                        </p>
                                    </div>
                                </div>

                                <div class="flex gap-3 pt-2">
                                    <button
                                        class="flex-1 py-3 bg-emerald-600 hover:bg-emerald-700 text-white rounded-lg text-sm font-semibold transition">
                                        Investigate
                                    </button>
                                    <button
                                        class="flex-1 py-3 bg-white hover:bg-gray-50 text-gray-900 rounded-lg text-sm font-semibold border-2 border-gray-300 transition">
                                        View All
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comparison Table (enhanced with better visual hierarchy) -->
    <section class="py-32 bg-gray-50 border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display text-4xl text-gray-900 mb-4">
                    Compare Programs
                </h2>
                <p class="text-gray-600 text-lg">
                    Find the perfect program that aligns with your career goals
                </p>
            </div>

            <div class="bg-white rounded-3xl shadow-xl border-2 border-gray-200 overflow-hidden reveal">
                <div class="overflow-x-auto">
                    <table class="w-full">
                        <thead class="bg-linear-to-r from-blue-50 to-cyan-50 border-b-2 border-gray-200">
                            <tr>
                                <th
                                    class="py-6 px-6 text-left text-gray-700 font-bold text-sm uppercase tracking-wider">
                                    Feature
                                </th>
                                <th class="py-6 px-6 text-center">
                                    <div class="text-gray-900 font-bold">Developer Academy</div>
                                    <div class="text-blue-600 text-xs mt-1">Most Popular</div>
                                </th>
                                <th class="py-6 px-6 text-center">
                                    <div class="text-gray-900 font-bold">AI Fellowship</div>
                                    <div class="text-purple-600 text-xs mt-1">
                                        Most Selective
                                    </div>
                                </th>
                                <th class="py-6 px-6 text-center">
                                    <div class="text-gray-900 font-bold">Security Track</div>
                                    <div class="text-emerald-600 text-xs mt-1">Newest</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                <td class="py-5 px-6 font-semibold">Time Commitment</td>
                                <td class="py-5 px-6 text-center">20-40 hrs/week</td>
                                <td class="py-5 px-6 text-center">Full-time</td>
                                <td class="py-5 px-6 text-center">15-30 hrs/week</td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                <td class="py-5 px-6 font-semibold">Prerequisites</td>
                                <td class="py-5 px-6 text-center">Basic coding</td>
                                <td class="py-5 px-6 text-center">CS degree + ML exp</td>
                                <td class="py-5 px-6 text-center">Network fundamentals</td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                <td class="py-5 px-6 font-semibold">Cost</td>
                                <td class="py-5 px-6 text-center font-bold text-gray-900">
                                    $12,000
                                </td>
                                <td class="py-5 px-6 text-center font-bold text-green-600">
                                    Free + Stipend
                                </td>
                                <td class="py-5 px-6 text-center font-bold text-gray-900">
                                    $8,500
                                </td>
                            </tr>
                            <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                                <td class="py-5 px-6 font-semibold">Certification</td>
                                <td class="py-5 px-6 text-center">
                                    <i class="fas fa-check-circle text-blue-600 text-xl"></i>
                                </td>
                                <td class="py-5 px-6 text-center">
                                    <i class="fas fa-check-circle text-purple-600 text-xl"></i>
                                </td>
                                <td class="py-5 px-6 text-center">
                                    <i class="fas fa-check-circle text-emerald-600 text-xl"></i>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="py-5 px-6 font-semibold">Job Placement</td>
                                <td class="py-5 px-6 text-center">85% within 3 mo</td>
                                <td class="py-5 px-6 text-center font-bold text-green-600">
                                    100% guaranteed
                                </td>
                                <td class="py-5 px-6 text-center">90% within 2 mo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- END COMPARISON TABLE (enhanced) -->

    <!-- Success Stories (unchanged) -->
    <section id="success" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display text-4xl text-gray-900 mb-4">
                    Success Stories
                </h2>
                <p class="text-gray-600 text-lg">
                    Hear from graduates who transformed their careers with Nissi
                    Technologies
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Story 1 -->
                <div class="bg-white border-2 border-gray-200 rounded-3xl p-8 card-hover reveal">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?q=80&w=2787&auto=format&fit=crop"
                            alt="Sarah Martinez"
                            class="w-16 h-16 rounded-full object-cover border-4 border-blue-100" />
                        <div>
                            <h4 class="text-gray-900 font-bold">Sarah Martinez</h4>
                            <p class="text-gray-600 text-sm">Developer Academy '24</p>
                        </div>
                    </div>
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        "From marketing manager to senior cloud engineer in 6 months. The
                        hands-on projects and mentorship at Nissi Technologies gave me the
                        confidence to make the leap into tech."
                    </p>
                    <div class="flex items-center gap-2 text-sm pt-4 border-t-2 border-gray-100">
                        <span class="text-gray-600">Now at:</span>
                        <span class="text-blue-600 font-bold">AWS</span>
                    </div>
                </div>

                <!-- Story 2 -->
                <div class="bg-white border-2 border-gray-200 rounded-3xl p-8 card-hover reveal delay-100">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?q=80&w=2787&auto=format&fit=crop"
                            alt="James Chen" class="w-16 h-16 rounded-full object-cover border-4 border-purple-100" />
                        <div>
                            <h4 class="text-gray-900 font-bold">James Chen</h4>
                            <p class="text-gray-600 text-sm">AI Fellowship '23</p>
                        </div>
                    </div>
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        "Published two papers on transformer architectures and landed my
                        dream job. The research experience was invaluable and the network
                        opened so many doors."
                    </p>
                    <div class="flex items-center gap-2 text-sm pt-4 border-t-2 border-gray-100">
                        <span class="text-gray-600">Now at:</span>
                        <span class="text-purple-600 font-bold">DeepMind</span>
                    </div>
                </div>

                <!-- Story 3 -->
                <div class="bg-white border-2 border-gray-200 rounded-3xl p-8 card-hover reveal delay-200">
                    <div class="flex items-center gap-4 mb-6">
                        <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?q=80&w=2787&auto=format&fit=crop"
                            alt="Aisha Patel"
                            class="w-16 h-16 rounded-full object-cover border-4 border-emerald-100" />
                        <div>
                            <h4 class="text-gray-900 font-bold">Aisha Patel</h4>
                            <p class="text-gray-600 text-sm">Security Track '24</p>
                        </div>
                    </div>
                    <div class="flex gap-1 text-yellow-400 mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="text-gray-700 leading-relaxed mb-6">
                        "Passed OSCP on my first try! The CTF challenges and real
                        pentesting labs prepared me better than any other program. Now I'm
                        securing Fortune 500 companies."
                    </p>
                    <div class="flex items-center gap-2 text-sm pt-4 border-t-2 border-gray-100">
                        <span class="text-gray-600">Now at:</span>
                        <span class="text-emerald-600 font-bold">CrowdStrike</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section (unchanged) -->
    <section id="faq" class="py-32 bg-gray-50 border-y border-gray-200">
        <div class="max-w-4xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display text-4xl text-gray-900 mb-4">
                    Frequently Asked Questions
                </h2>
                <p class="text-gray-600 text-lg">
                    Everything you need to know about our programs
                </p>
            </div>

            <div class="space-y-4">
                <!-- FAQ 1 -->
                <div class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden reveal">
                    <button
                        class="faq-button w-full flex justify-between items-center text-left p-6 hover:bg-gray-50 transition-colors"
                        onclick="toggleFAQ(this)">
                        <h4 class="text-gray-900 font-bold text-lg pr-4">
                            Do I need prior experience to apply?
                        </h4>
                        <i class="fas fa-chevron-down text-blue-600 text-xl transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            It depends on the program. The Developer Academy requires basic
                            coding knowledge (HTML, CSS, JavaScript fundamentals). The AI
                            Fellowship requires a CS degree and ML experience. The Security
                            Track requires understanding of networking fundamentals. We
                            provide free assessment tests to help you determine if you're
                            ready.
                        </p>
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden reveal">
                    <button
                        class="faq-button w-full flex justify-between items-center text-left p-6 hover:bg-gray-50 transition-colors"
                        onclick="toggleFAQ(this)">
                        <h4 class="text-gray-900 font-bold text-lg pr-4">
                            Are there financing options available?
                        </h4>
                        <i class="fas fa-chevron-down text-blue-600 text-xl transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            Yes! We offer Income Share Agreements (ISAs) where you pay
                            nothing until you're earning $50,000+/year in a tech role. We
                            also have monthly payment plans and partnerships with lending
                            platforms. The AI Fellowship is completely free with a stipend
                            for accepted fellows.
                        </p>
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden reveal">
                    <button
                        class="faq-button w-full flex justify-between items-center text-left p-6 hover:bg-gray-50 transition-colors"
                        onclick="toggleFAQ(this)">
                        <h4 class="text-gray-900 font-bold text-lg pr-4">
                            Can I work while attending the program?
                        </h4>
                        <i class="fas fa-chevron-down text-blue-600 text-xl transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            The Developer Academy and Security Track offer both part-time
                            and full-time options. Part-time students typically dedicate
                            15-20 hours per week and complete the program over a longer
                            period. The AI Fellowship is full-time only due to the research
                            intensity.
                        </p>
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden reveal">
                    <button
                        class="faq-button w-full flex justify-between items-center text-left p-6 hover:bg-gray-50 transition-colors"
                        onclick="toggleFAQ(this)">
                        <h4 class="text-gray-900 font-bold text-lg pr-4">
                            What's the application process like?
                        </h4>
                        <i class="fas fa-chevron-down text-blue-600 text-xl transition-transform duration-300"></i>
                    </button>
                    <div class="faq-content px-6 pb-6">
                        <p class="text-gray-600 leading-relaxed">
                            Applications include a written submission, technical assessment,
                            and interview. For the Developer Academy and Security Track, the
                            process takes 1-2 weeks. The AI Fellowship is highly competitive
                            with a multi-stage process including code reviews, a research
                            proposal, and technical interviews that can take 4-6 weeks.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section (unchanged) -->
    <section id="apply" class="py-32 bg-white">
        <div class="max-w-5xl mx-auto px-6">
            <div
                class="bg-linear-to-br from-blue-600 via-blue-700 to-cyan-600 rounded-3xl p-12 md:p-16 text-center shadow-2xl relative overflow-hidden reveal">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-0 left-1/4 w-96 h-96 bg-white rounded-full blur-3xl"></div>
                    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-cyan-300 rounded-full blur-3xl"></div>
                </div>

                <div class="relative z-10">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 bg-white/20 backdrop-blur rounded-full text-white font-semibold text-sm mb-8">
                        <i class="fas fa-clock"></i>
                        Applications close in 14 days
                    </div>

                    <h2 class="font-display text-4xl md:text-5xl text-white mb-6">
                        Ready to Transform Your Career?
                    </h2>
                    <p class="text-xl text-blue-100 mb-12 max-w-2xl mx-auto leading-relaxed">
                        Applications for our next cohort are open. Join thousands of
                        graduates who've accelerated their tech careers with Nissi
                        Technologies' elite programs.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="#"
                            class="px-10 py-5 bg-white text-blue-600 rounded-xl font-bold text-lg hover:shadow-2xl transition-all hover:-translate-y-1">
                            Apply Now
                        </a>
                        <a href="#"
                            class="px-10 py-5 bg-transparent border-2 border-white text-white rounded-xl font-bold text-lg hover:bg-white/10 transition-all">
                            Schedule a Call
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
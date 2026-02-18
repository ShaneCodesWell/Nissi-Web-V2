<x-layouts.app>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 min-h-screen flex items-center overflow-hidden">
        <!-- Animated Background Elements -->
        <div class="absolute inset-0 grid-pattern"></div>
        <div class="absolute top-20 right-10 w-72 h-72 bg-blue-400/20 blob"></div>
        <div class="absolute bottom-20 left-10 w-96 h-96 bg-cyan-400/15 blob" style="animation-delay: -3s"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div class="space-y-8">
                    <div
                        class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full border border-blue-200 animate-slide-up">
                        <span class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></span>
                        <span class="text-blue-700 font-medium text-sm">Trusted by 500+ enterprises worldwide</span>
                    </div>

                    <h1
                        class="font-display text-6xl lg:text-7xl text-gray-900 leading-tight animate-slide-up delay-100">
                        Building the
                        <span class="gradient-text block">Digital Future</span>
                        You Deserve
                    </h1>

                    <p class="text-xl text-gray-600 leading-relaxed max-w-xl animate-slide-up delay-200">
                        We transform businesses with cutting-edge cloud
                        infrastructure, intelligent AI solutions, and
                        enterprise-grade security that scales with your
                        ambitions.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-4 animate-slide-up delay-300">
                        <a href="#contact"
                            class="group px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold text-lg transition flex items-center justify-center gap-2 shadow-lg shadow-blue-600/25">
                            Start Your Journey
                            <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
                        </a>
                        <a href="#solutions"
                            class="px-8 py-4 bg-white hover:bg-gray-50 text-gray-900 rounded-xl font-semibold text-lg transition border-2 border-gray-200 flex items-center justify-center gap-2">
                            <i class="fas fa-play-circle text-blue-600"></i>
                            Watch Demo
                        </a>
                    </div>

                    <!-- Quick Stats -->
                    <div class="flex gap-8 pt-8 animate-slide-up delay-400">
                        <div>
                            <div class="text-3xl font-bold text-gray-900 stat-number">
                                99.99%
                            </div>
                            <div class="text-sm text-gray-600 font-medium">
                                Uptime SLA
                            </div>
                        </div>
                        <div class="border-l-2 border-gray-200 pl-8">
                            <div class="text-3xl font-bold text-gray-900 stat-number">
                                24/7
                            </div>
                            <div class="text-sm text-gray-600 font-medium">
                                Support
                            </div>
                        </div>
                        <div class="border-l-2 border-gray-200 pl-8">
                            <div class="text-3xl font-bold text-gray-900 stat-number">
                                10M+
                            </div>
                            <div class="text-sm text-gray-600 font-medium">
                                Users Secured
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Visual - Modern Illustration -->
                <div class="relative animate-scale-in delay-200">
                    <div class="relative">
                        <!-- Main Card -->
                        <div class="glass rounded-3xl p-8 shadow-2xl border-2 border-white">
                            <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=2070&auto=format&fit=crop"
                                alt="Dashboard Analytics" class="rounded-2xl w-full" />

                            <!-- Floating Cards -->
                            <div class="absolute -top-6 -right-6 glass rounded-2xl p-4 shadow-xl animate-float">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-12 h-12 bg-linear-to-br from-green-400 to-emerald-500 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-chart-line text-white"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs text-gray-600 font-medium">
                                            Performance
                                        </div>
                                        <div class="text-lg font-bold text-gray-900">
                                            +47%
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="absolute -bottom-6 -left-6 glass rounded-2xl p-4 shadow-xl animate-float"
                                style="animation-delay: -2s">
                                <div class="flex items-center gap-3">
                                    <div
                                        class="w-12 h-12 bg-linear-to-br from-blue-400 to-cyan-500 rounded-xl flex items-center justify-center">
                                        <i class="fas fa-shield-alt text-white"></i>
                                    </div>
                                    <div>
                                        <div class="text-xs text-gray-600 font-medium">
                                            Security Score
                                        </div>
                                        <div class="text-lg font-bold text-gray-900">
                                            98/100
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Trusted By Section -->
    <section id="clients" class="py-16 border-y border-gray-200 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <p class="text-center text-sm text-gray-500 font-semibold mb-12 uppercase tracking-wider">
                Powering Innovation at Leading Companies
            </p>
            <div
                class="flex flex-wrap justify-center items-center gap-12 opacity-40 hover:opacity-70 transition-opacity duration-500">
                <div class="flex items-center gap-3 text-2xl font-bold text-gray-800">
                    <i class="fa-brands fa-aws text-4xl"></i>
                    <span>AWS</span>
                </div>
                <div class="flex items-center gap-3 text-2xl font-bold text-gray-800">
                    <i class="fa-brands fa-google text-4xl"></i>
                    <span>Google</span>
                </div>
                <div class="flex items-center gap-3 text-2xl font-bold text-gray-800">
                    <i class="fa-brands fa-microsoft text-4xl"></i>
                    <span>Microsoft</span>
                </div>
                <div class="flex items-center gap-3 text-2xl font-bold text-gray-800">
                    <i class="fa-brands fa-stripe text-4xl"></i>
                    <span>Stripe</span>
                </div>
                <div class="flex items-center gap-3 text-2xl font-bold text-gray-800">
                    <i class="fa-brands fa-slack text-4xl"></i>
                    <span>Slack</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section - Asymmetric Layout -->
    <section id="solutions" class="py-32 bg-white relative overflow-hidden">
        <div class="absolute top-0 right-0 w-1/3 h-full bg-linear-to-l from-blue-50/50 to-transparent"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="max-w-2xl mb-20 reveal">
                <div class="inline-block px-4 py-2 bg-blue-50 text-blue-700 rounded-full font-semibold text-sm mb-6">
                    Our Solutions
                </div>
                <h2 class="font-display text-5xl lg:text-6xl text-gray-900 mb-6 leading-tight">
                    Technology That
                    <span class="gradient-text">Transforms</span>
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Comprehensive solutions designed to accelerate your
                    digital transformation journey.
                </p>
            </div>

            <!-- Solution Cards - Alternating Layout -->
            <div class="space-y-24">
                <!-- Cloud Infrastructure -->
                <div class="grid lg:grid-cols-2 gap-12 items-center reveal">
                    <div class="order-2 lg:order-1">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border-2 border-gray-100">
                            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop"
                                alt="Cloud Infrastructure" class="w-full h-full object-cover parallax-img" />
                            <!-- Overlay Badge -->
                            <div
                                class="absolute top-6 left-6 px-4 py-2 bg-white/90 backdrop-blur rounded-full text-sm font-semibold text-blue-600 flex items-center gap-2">
                                <span class="w-2 h-2 bg-blue-600 rounded-full animate-pulse"></span>
                                Live Monitoring
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2 space-y-6">
                        <div class="inline-flex items-center gap-3 px-4 py-2 bg-blue-100 rounded-xl">
                            <i class="fas fa-cloud text-2xl text-blue-600"></i>
                            <span class="font-semibold text-blue-900">Cloud Infrastructure</span>
                        </div>
                        <h3 class="font-display text-4xl text-gray-900 leading-tight">
                            Scalable Cloud Architecture Built for Growth
                        </h3>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Enterprise-grade cloud solutions that
                            automatically scale with your business needs.
                            Our infrastructure handles millions of requests
                            per second with 99.99% uptime guaranteed.
                        </p>
                        <ul class="space-y-4">
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 bg-blue-100 rounded-lg flex items-center justify-center shrink-0 mt-1">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">
                                        Auto-scaling Infrastructure
                                    </div>
                                    <div class="text-gray-600 text-sm">
                                        Automatically adjust resources based
                                        on demand
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 bg-blue-100 rounded-lg flex items-center justify-center shrink-0 mt-1">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">
                                        Global CDN Network
                                    </div>
                                    <div class="text-gray-600 text-sm">
                                        Lightning-fast content delivery
                                        worldwide
                                    </div>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div
                                    class="w-6 h-6 bg-blue-100 rounded-lg flex items-center justify-center shrink-0 mt-1">
                                    <i class="fas fa-check text-blue-600 text-sm"></i>
                                </div>
                                <div>
                                    <div class="font-semibold text-gray-900">
                                        Cost Optimization
                                    </div>
                                    <div class="text-gray-600 text-sm">
                                        Reduce infrastructure costs by up to
                                        60%
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <a href="#contact"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold transition-all hover:gap-3">
                            Explore Cloud Solutions
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <!-- AI & Machine Learning -->
                <div class="grid lg:grid-cols-2 gap-12 items-center reveal">
                    <div class="space-y-6">
                        <div class="inline-flex items-center gap-3 px-4 py-2 bg-purple-100 rounded-xl">
                            <i class="fas fa-brain text-2xl text-purple-600"></i>
                            <span class="font-semibold text-purple-900">Artificial Intelligence</span>
                        </div>
                        <h3 class="font-display text-4xl text-gray-900 leading-tight">
                            Intelligent AI Solutions That Learn and Adapt
                        </h3>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Harness the power of machine learning and
                            generative AI to automate complex workflows,
                            predict outcomes, and unlock insights hidden in
                            your data.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <div class="text-3xl font-bold text-gray-900 mb-1">
                                    10x
                                </div>
                                <div class="text-sm text-gray-600">
                                    Faster Processing
                                </div>
                            </div>
                            <div class="p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <div class="text-3xl font-bold text-gray-900 mb-1">
                                    95%
                                </div>
                                <div class="text-sm text-gray-600">
                                    Accuracy Rate
                                </div>
                            </div>
                        </div>
                        <a href="#contact"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-xl font-semibold transition-all hover:gap-3">
                            Discover AI Capabilities
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border-2 border-gray-100">
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?q=80&w=2070&auto=format&fit=crop"
                            alt="AI Technology" class="w-full h-full object-cover parallax-img" />
                        <!-- Overlay Stats -->
                        <div class="absolute bottom-6 left-6 right-6 glass rounded-2xl p-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-sm text-gray-600 font-medium">
                                        AI Models Trained
                                    </div>
                                    <div class="text-2xl font-bold text-gray-900">
                                        1,247
                                    </div>
                                </div>
                                <div
                                    class="w-12 h-12 bg-linear-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center">
                                    <i class="fas fa-robot text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cybersecurity -->
                <div class="grid lg:grid-cols-2 gap-12 items-center reveal">
                    <div class="order-2 lg:order-1">
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl border-2 border-gray-100">
                            <img src="https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?q=80&w=2068&auto=format&fit=crop"
                                alt="Cybersecurity" class="w-full h-full object-cover parallax-img" />
                            <!-- Security Badge -->
                            <div
                                class="absolute top-6 right-6 px-4 py-2 bg-emerald-500 rounded-full text-sm font-semibold text-white flex items-center gap-2">
                                <i class="fas fa-shield-alt"></i>
                                Protected 24/7
                            </div>
                        </div>
                    </div>
                    <div class="order-1 lg:order-2 space-y-6">
                        <div class="inline-flex items-center gap-3 px-4 py-2 bg-emerald-100 rounded-xl">
                            <i class="fas fa-shield-halved text-2xl text-emerald-600"></i>
                            <span class="font-semibold text-emerald-900">Cybersecurity</span>
                        </div>
                        <h3 class="font-display text-4xl text-gray-900 leading-tight">
                            Enterprise Security That Never Sleeps
                        </h3>
                        <p class="text-lg text-gray-600 leading-relaxed">
                            Zero-trust architecture with real-time threat
                            detection and automated response. We protect
                            over 10 million users with military-grade
                            encryption and compliance frameworks.
                        </p>
                        <div class="space-y-3">
                            <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <i class="fas fa-check-circle text-emerald-600 text-xl"></i>
                                <span class="font-semibold text-gray-900">SOC 2 & ISO 27001 Certified</span>
                            </div>
                            <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <i class="fas fa-check-circle text-emerald-600 text-xl"></i>
                                <span class="font-semibold text-gray-900">Real-time Threat Intelligence</span>
                            </div>
                            <div class="flex items-center gap-3 p-4 bg-gray-50 rounded-xl border border-gray-200">
                                <i class="fas fa-check-circle text-emerald-600 text-xl"></i>
                                <span class="font-semibold text-gray-900">24/7 Security Operations Center</span>
                            </div>
                        </div>
                        <a href="#contact"
                            class="inline-flex items-center gap-2 px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl font-semibold transition-all hover:gap-3">
                            Secure Your Infrastructure
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats & Social Proof -->
    <section class="py-24 bg-gray-50 border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display text-4xl text-gray-900 mb-4">
                    Trusted by Innovators Worldwide
                </h2>
                <p class="text-gray-600 text-lg">
                    Join thousands of companies transforming their
                    businesses with Nissi
                </p>
            </div>

            <div class="grid md:grid-cols-4 gap-8 mb-16">
                <div class="text-center reveal">
                    <div class="text-5xl font-bold text-blue-600 mb-2 stat-number counter" data-target="500">
                        0
                    </div>
                    <div class="text-gray-600 font-medium">
                        Enterprise Clients
                    </div>
                </div>
                <div class="text-center reveal delay-100">
                    <div class="text-5xl font-bold text-blue-600 mb-2 flex items-center justify-center gap-1">
                        <span class="stat-number counter" data-target="99">0</span>.99%
                    </div>
                    <div class="text-gray-600 font-medium">
                        Uptime Guarantee
                    </div>
                </div>
                <div class="text-center reveal delay-200">
                    <div class="text-5xl font-bold text-blue-600 mb-2 flex items-center justify-center">
                        <span class="stat-number counter" data-target="10">0</span>M+
                    </div>
                    <div class="text-gray-600 font-medium">
                        Users Protected
                    </div>
                </div>
                <div class="text-center reveal delay-300">
                    <div class="text-5xl font-bold text-blue-600 mb-2">
                        <span class="stat-number counter" data-target="150">0</span>+
                    </div>
                    <div class="text-gray-600 font-medium">
                        Countries Served
                    </div>
                </div>
            </div>

            <!-- Testimonial -->
            <div class="max-w-4xl mx-auto reveal">
                <div class="bg-white rounded-3xl p-10 shadow-lg border-2 border-gray-200">
                    <div class="flex items-start gap-6">
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?q=80&w=2070&auto=format&fit=crop"
                            alt="CEO Portrait" class="w-20 h-20 rounded-full object-cover border-4 border-gray-100" />
                        <div>
                            <div class="flex items-center gap-1 text-yellow-400 mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="text-xl text-gray-700 italic mb-4 leading-relaxed">
                                "Nissi Technologies transformed our entire
                                infrastructure in just 6 months. The results
                                exceeded our expectations – 60% cost
                                reduction and zero downtime during peak
                                traffic."
                            </p>
                            <div>
                                <div class="font-bold text-gray-900">
                                    Michael Chen
                                </div>
                                <div class="text-gray-600">
                                    CTO, TechCorp Solutions
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section - Subtle and Professional -->
    <section id="contact" class="py-32 bg-white">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <div class="reveal">
                <div
                    class="inline-flex items-center gap-2 px-4 py-2 bg-blue-50 rounded-full text-blue-700 font-semibold text-sm mb-8">
                    <i class="fas fa-rocket"></i>
                    Ready to Get Started?
                </div>
                <h2 class="font-display text-5xl lg:text-6xl text-gray-900 mb-6 leading-tight">
                    Let's Build Your Digital Future Together
                </h2>
                <p class="text-xl text-gray-600 mb-12 max-w-2xl mx-auto leading-relaxed">
                    Schedule a free consultation with our experts and
                    discover how Nissi Technologies can transform your
                    business.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                    <a href="#"
                        class="group px-10 py-5 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold text-lg transition-all shadow-lg shadow-blue-600/25 flex items-center justify-center gap-2">
                        Schedule a Demo
                        <i class="fas fa-arrow-right group-hover:translate-x-1 transition"></i>
                    </a>
                    <a href="#"
                        class="px-10 py-5 bg-white hover:bg-gray-50 text-gray-900 rounded-xl font-semibold text-lg transition-all border-2 border-gray-300 flex items-center justify-center gap-2">
                        <i class="fas fa-phone text-blue-600"></i>
                        Talk to Sales
                    </a>
                </div>
                <p class="text-sm text-gray-500">
                    Join 500+ companies already transforming with Nissi • No
                    credit card required
                </p>
            </div>
        </div>
    </section>
</x-layouts.app>

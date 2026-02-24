<x-layouts.app>
    <!-- ===== REDESIGNED HERO – VISION ===== -->
    <!-- structural changes: stronger narrative + floating stats / timeline preview, replaces generic fullscreen text -->
    <section
        class="relative pt-40 pb-32 min-h-screen flex items-center overflow-hidden bg-linear-to-br from-indigo-50/90 via-white to-slate-50">
        <div class="absolute inset-0 grid-pattern opacity-50"></div>
        <div class="absolute top-1/3 left-1/2 -translate-x-1/2 w-200 h-200 bg-blue-400/10 blob"></div>
        <div class="absolute top-20 right-0 w-96 h-96 bg-purple-400/10 blob" style="animation-delay: -3s"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- two‑column hero: left manifesto, right interactive milestone card -->
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <!-- LEFT COLUMN (8 cols) – main message -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="flex items-center gap-3 animate-slide-up">
                        <span class="relative flex h-3 w-3"><span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400"></span><span
                                class="relative inline-flex rounded-full h-3 w-3 bg-blue-600"></span></span>
                        <span class="text-blue-700 font-semibold tracking-wide text-sm uppercase">since 2020 · building
                            the infinite future</span>
                    </div>

                    <h1
                        class="font-display text-5xl md:text-6xl lg:text-7xl text-gray-900 leading-[1.1] tracking-tight animate-slide-up delay-100">
                        Architecting the
                        <span class="gradient-text">infinite</span> future
                    </h1>

                    <p class="text-lg md:text-xl text-gray-600 max-w-2xl leading-relaxed animate-slide-up delay-200">
                        We don't just build software; we construct the digital nervous
                        system of the next century — ubiquitous intelligence, limitless
                        potential.
                    </p>

                    <!-- condensed trust indicators + north star metrics -->
                    <div class="flex flex-wrap items-center gap-6 pt-4 animate-slide-up delay-300">
                        <div class="flex -space-x-3">
                            <div
                                class="w-10 h-10 rounded-full bg-blue-600 border-2 border-white flex items-center justify-center text-white text-xs font-bold">
                                25k
                            </div>
                            <div
                                class="w-10 h-10 rounded-full bg-purple-600 border-2 border-white flex items-center justify-center text-white text-xs font-bold">
                                1B+
                            </div>
                            <div
                                class="w-10 h-10 rounded-full bg-emerald-600 border-2 border-white flex items-center justify-center text-white text-xs font-bold">
                                2030
                            </div>
                        </div>
                        <span class="text-sm text-gray-600 font-medium"><span class="text-gray-900 font-bold">lives
                                impacted</span> ·
                            carbon neutral goal</span>
                    </div>

                    <!-- scroll CTA refined -->
                    <div class="pt-8">
                        <a href="#mission"
                            class="inline-flex items-center gap-2 text-gray-500 hover:text-blue-600 transition group">
                            <span class="text-sm font-medium">discover our mission</span>
                            <i class="fas fa-arrow-down group-hover:translate-y-1 transition"></i>
                        </a>
                    </div>
                </div>

                <!-- RIGHT COLUMN (5 cols) – dynamic "future timeline preview" card (new structural element) -->
                <div class="lg:col-span-5 relative animate-slide-up delay-200">
                    <div class="relative">
                        <!-- background glow -->
                        <div
                            class="absolute -inset-4 bg-linear-to-tr from-blue-400/20 via-purple-400/20 to-cyan-400/20 rounded-3xl blur-2xl">
                        </div>

                        <!-- main card: upcoming milestones / quantum leap preview -->
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
                            <div class="relative space-y-5">
                                <!-- header with live badge -->
                                <div class="flex justify-between items-center">
                                    <span
                                        class="bg-linear-to-r from-blue-600 to-purple-600 text-white text-xs px-4 py-2 rounded-full font-semibold flex items-center gap-1"><i
                                            class="fas fa-hourglass-half"></i> NEXT
                                        MILESTONES</span>
                                    <span
                                        class="text-xs bg-white/80 px-3 py-1.5 rounded-full shadow-sm flex items-center gap-1"><span
                                            class="relative flex h-2 w-2"><span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400"></span><span
                                                class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span></span>
                                        on track</span>
                                </div>

                                <!-- timeline mini cards (interactive preview) -->
                                <div class="space-y-3">
                                    <div
                                        class="bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-gray-100 flex items-center gap-4 group hover:border-blue-400 transition">
                                        <div
                                            class="w-12 h-12 bg-linear-to-br from-blue-500 to-cyan-500 rounded-xl flex items-center justify-center text-white shadow-md">
                                            <i class="fas fa-microchip"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center">
                                                <span class="font-bold text-gray-900">Quantum‑resistant crypto</span>
                                                <span
                                                    class="text-xs bg-blue-100 text-blue-700 px-2 py-1 rounded-full">Q2
                                                    2025</span>
                                            </div>
                                            <p class="text-xs text-gray-600 mt-1">
                                                Integration across all stacks
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-gray-100 flex items-center gap-4 group hover:border-purple-400 transition">
                                        <div
                                            class="w-12 h-12 bg-linear-to-br from-purple-500 to-pink-500 rounded-xl flex items-center justify-center text-white shadow-md">
                                            <i class="fas fa-brain"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center">
                                                <span class="font-bold text-gray-900">Autonomous infrastructure</span>
                                                <span
                                                    class="text-xs bg-purple-100 text-purple-700 px-2 py-1 rounded-full">2026</span>
                                            </div>
                                            <p class="text-xs text-gray-600 mt-1">
                                                Self‑healing, predictive scaling
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="bg-white/90 backdrop-blur-sm rounded-xl p-4 border border-gray-100 flex items-center gap-4 group hover:border-emerald-400 transition">
                                        <div
                                            class="w-12 h-12 bg-linear-to-br from-emerald-500 to-teal-500 rounded-xl flex items-center justify-center text-white shadow-md">
                                            <i class="fas fa-leaf"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="flex justify-between items-center">
                                                <span class="font-bold text-gray-900">Carbon‑neutral computing</span>
                                                <span
                                                    class="text-xs bg-emerald-100 text-emerald-700 px-2 py-1 rounded-full">2030</span>
                                            </div>
                                            <p class="text-xs text-gray-600 mt-1">
                                                Net‑zero data centers
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <!-- footer: link to full roadmap -->
                                <div class="flex items-center justify-between border-t border-gray-200/60 pt-4 text-xs">
                                    <span class="text-gray-500"><i class="far fa-calendar-alt mr-1"></i> 5 years of
                                        innovation</span>
                                    <a href="#roadmap"
                                        class="text-blue-600 font-medium hover:gap-1 inline-flex items-center gap-0.5 transition">full
                                        roadmap <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- floating badge: 2030 goal -->
                    <div
                        class="absolute -bottom-4 -right-2 bg-white rounded-full shadow-xl py-2 px-5 border border-gray-200 flex items-center gap-2 text-sm">
                        <i class="fas fa-flag-checkered text-blue-500"></i>
                        <span class="font-medium text-gray-800">2030: carbon neutral</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSION SECTION (enhanced, consistent with new aesthetic) -->
    <section id="mission" class="py-32 bg-white border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="relative reveal">
                    <div
                        class="absolute -inset-4 bg-linear-to-r from-blue-500 to-cyan-500 rounded-3xl blur opacity-20">
                    </div>
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border-2 border-gray-200">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?q=80&w=2072&auto=format&fit=crop"
                            alt="Global Network" class="w-full aspect-square object-cover" />
                        <div class="absolute inset-0 bg-linear-to-t from-blue-900/80 via-blue-900/40 to-transparent">
                        </div>
                        <div class="absolute bottom-8 left-8 right-8">
                            <div class="font-display text-4xl text-white mb-2">Global.</div>
                            <div class="font-display text-4xl text-white mb-2">
                                Connected.
                            </div>
                            <div class="font-display text-4xl text-blue-300">Secure.</div>
                        </div>
                    </div>
                </div>
                <div class="reveal delay-100">
                    <h2 class="font-display text-4xl md:text-5xl text-gray-900 mb-6">
                        Our Mission
                    </h2>
                    <p class="text-lg text-gray-700 mb-6 leading-relaxed">
                        At Nissi Technologies, our mission is to
                        <span class="font-bold text-blue-600">democratize enterprise-grade intelligence</span>. We
                        believe that powerful AI and cloud infrastructure shouldn't
                        be the privilege of the few, but the foundation for everyone.
                    </p>
                    <p class="text-gray-600 mb-8 leading-relaxed">
                        We envision a world where technology fades into the background,
                        becoming a seamless enabler of human creativity and industrial
                        efficiency. We are building the bridges between raw data and human
                        insight.
                    </p>
                    <div class="grid grid-cols-2 gap-6 pt-8 border-t-2 border-gray-200">
                        <div class="bg-blue-50 rounded-2xl p-6 border-2 border-blue-100 shadow-sm">
                            <div class="text-4xl font-bold text-blue-600 mb-2">2030</div>
                            <div class="text-sm text-gray-600 font-medium uppercase tracking-wider">
                                Carbon Neutral Goal
                            </div>
                        </div>
                        <div class="bg-purple-50 rounded-2xl p-6 border-2 border-purple-100 shadow-sm">
                            <div class="text-4xl font-bold text-purple-600 mb-2">1B+</div>
                            <div class="text-sm text-gray-600 font-medium uppercase tracking-wider">
                                Lives Impacted
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CORE VALUES (redesigned cards with stronger visuals) -->
    <section id="values" class="py-32 bg-linear-to-b from-gray-50 to-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16 reveal">
                <h2 class="font-display text-4xl md:text-5xl text-gray-900 mb-4">
                    The Code We Live By
                </h2>
                <p class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Our culture is defined by three core principles that guide every
                    line of code we write.
                </p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white border-2 border-gray-200 rounded-3xl p-10 card-hover reveal group">
                    <div
                        class="w-16 h-16 bg-linear-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fas fa-lightbulb text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        Radical Innovation
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        We don't iterate; we evolve. We challenge the status quo of legacy
                        tech stacks to build solutions that were previously thought
                        impossible.
                    </p>
                </div>
                <div class="bg-white border-2 border-gray-200 rounded-3xl p-10 card-hover reveal delay-100 group">
                    <div
                        class="w-16 h-16 bg-linear-to-br from-purple-500 to-pink-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fas fa-shield-heart text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        Unshakeable Trust
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        In a data-driven world, trust is currency. We operate with
                        absolute transparency and security-first architecture in
                        everything we do.
                    </p>
                </div>
                <div class="bg-white border-2 border-gray-200 rounded-3xl p-10 card-hover reveal delay-200 group">
                    <div
                        class="w-16 h-16 bg-linear-to-br from-emerald-500 to-teal-500 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform shadow-lg">
                        <i class="fas fa-users-viewfinder text-white text-2xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">Human-Centric</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Technology serves people, not the other way around. We design for
                        usability, accessibility, and real-world impact.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ROADMAP TIMELINE (enhanced with better visual separation) -->
    <section id="roadmap" class="py-32 bg-white border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-20 reveal">
                <div class="text-blue-600 font-semibold tracking-wider uppercase text-sm mb-4">
                    Trajectory
                </div>
                <h2 class="font-display text-4xl md:text-5xl text-gray-900">
                    Our Journey Forward
                </h2>
            </div>
            <div class="relative max-w-5xl mx-auto timeline-container">
                <!-- Item 1 -->
                <div class="relative mb-20 reveal">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="md:text-right md:pr-16">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">Inception</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Nissi Technologies is founded with a singular vision: to unify
                                fragmented cloud systems.
                            </p>
                        </div>
                        <div class="md:pl-16">
                            <div
                                class="inline-block px-6 py-3 bg-blue-100 text-blue-700 rounded-full font-bold text-lg border-2 border-blue-200 shadow-sm">
                                2020
                            </div>
                        </div>
                    </div>
                    <div
                        class="hidden md:block absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-blue-600 rounded-full border-4 border-white shadow-lg">
                    </div>
                </div>
                <!-- Item 2 -->
                <div class="relative mb-20 reveal">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="md:text-right md:pr-16 order-2 md:order-1">
                            <div
                                class="inline-block px-6 py-3 bg-purple-100 text-purple-700 rounded-full font-bold text-lg border-2 border-purple-200 shadow-sm">
                                2022
                            </div>
                        </div>
                        <div class="md:pl-16 order-1 md:order-2">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                Global Expansion
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Opened hubs in London, Singapore, and New York. Launched the
                                CoreAI beta.
                            </p>
                        </div>
                    </div>
                    <div
                        class="hidden md:block absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-purple-600 rounded-full border-4 border-white shadow-lg">
                    </div>
                </div>
                <!-- Item 3 -->
                <div class="relative mb-20 reveal">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="md:text-right md:pr-16">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                The Quantum Leap
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Integrating quantum-resistant cryptography across all
                                enterprise stacks.
                            </p>
                        </div>
                        <div class="md:pl-16">
                            <div
                                class="inline-block px-6 py-3 bg-gray-100 text-gray-700 rounded-full font-bold text-lg border-2 border-gray-300 shadow-sm">
                                Present Day
                            </div>
                        </div>
                    </div>
                    <div
                        class="hidden md:block absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-gray-900 rounded-full border-4 border-white shadow-lg">
                    </div>
                </div>
                <!-- Item 4 -->
                <div class="relative reveal">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="md:text-right md:pr-16 order-2 md:order-1">
                            <div
                                class="inline-block px-6 py-3 bg-emerald-100 text-emerald-700 rounded-full font-bold text-lg border-2 border-emerald-200 shadow-sm">
                                2026 & Beyond
                            </div>
                        </div>
                        <div class="md:pl-16 order-1 md:order-2">
                            <h3 class="text-2xl font-bold text-gray-900 mb-3">
                                The Singularity Phase
                            </h3>
                            <p class="text-gray-600 leading-relaxed">
                                Full autonomous infrastructure management and eco-positive
                                computing.
                            </p>
                        </div>
                    </div>
                    <div
                        class="hidden md:block absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 w-6 h-6 bg-emerald-500 rounded-full border-4 border-white shadow-lg animate-pulse">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA CAREERS (enhanced) -->
    <section id="careers"
        class="py-32 bg-linear-to-br from-blue-600 via-blue-700 to-purple-700 relative overflow-hidden">
        <div class="absolute inset-0 opacity-10">
            <div class="absolute top-0 left-1/4 w-96 h-96 bg-white rounded-full blur-3xl"></div>
            <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-cyan-300 rounded-full blur-3xl"></div>
        </div>
        <div class="max-w-4xl mx-auto px-6 text-center relative z-10">
            <div class="reveal">
                <div
                    class="w-20 h-20 bg-white/20 backdrop-blur rounded-full flex items-center justify-center mx-auto mb-8">
                    <i class="fas fa-rocket text-white text-3xl"></i>
                </div>
                <h2 class="font-display text-4xl md:text-5xl text-white mb-6">
                    Be Part of the Future
                </h2>
                <p class="text-xl text-blue-100 mb-12 max-w-2xl mx-auto leading-relaxed">
                    The roadmap is set, but the story is still being written. We are
                    looking for visionaries to join our team.
                </p>
                <a href="index.html#contact"
                    class="inline-block px-10 py-5 bg-white text-blue-600 rounded-xl font-bold text-lg hover:shadow-2xl transition-all hover:-translate-y-1 shadow-xl">View
                    Open Positions</a>
            </div>
        </div>
    </section>
</x-layouts.app>

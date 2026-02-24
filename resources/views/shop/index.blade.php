<x-layouts.app>
    <!-- ===== REDESIGNED HERO – SHOP & ACADEMY ===== -->
    <section class="relative pt-40 pb-28 overflow-hidden bg-linear-to-br from-indigo-50/90 via-white to-slate-50">
        <div class="absolute inset-0 grid-pattern opacity-50"></div>
        <div class="absolute top-20 right-20 w-125 h-125 bg-blue-300/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-10 left-10 w-100 h-100 bg-cyan-300/20 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="grid lg:grid-cols-12 gap-8 items-center">
                <!-- LEFT COLUMN – headline, search, categories -->
                <div class="lg:col-span-7 space-y-6">
                    <div class="flex items-center gap-3 animate-slide-up">
                        <span class="relative flex h-3 w-3"><span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400"></span><span
                                class="relative inline-flex rounded-full h-3 w-3 bg-blue-600"></span></span>
                        <span class="text-blue-700 font-semibold tracking-wide text-sm uppercase">flagship store · free
                            shipping over $500</span>
                    </div>

                    <h1
                        class="font-display text-5xl md:text-6xl lg:text-7xl text-gray-900 leading-[1.1] tracking-tight animate-slide-up delay-100">
                        Equip for <span class="gradient-text">peak</span> performance
                    </h1>

                    <p class="text-lg md:text-xl text-gray-600 max-w-xl leading-relaxed animate-slide-up delay-200">
                        From zero‑trust bootcamps to M3 Max workstations. Resources and
                        gear trusted by 25k+ engineers.
                    </p>

                    <!-- category chips + search -->
                    <div class="flex flex-wrap items-center gap-3 pt-2 animate-slide-up delay-300">
                        <span class="text-sm text-gray-500 font-medium">Quick browse:</span>
                        <a href="#academy"
                            class="px-4 py-2 bg-white/80 backdrop-blur-sm border border-gray-200 rounded-full text-sm font-medium text-gray-700 hover:border-blue-400 hover:text-blue-700 transition">📘
                            Academy</a>
                        <a href="#hardware"
                            class="px-4 py-2 bg-white/80 backdrop-blur-sm border border-gray-200 rounded-full text-sm font-medium text-gray-700 hover:border-blue-400 hover:text-blue-700 transition">💻
                            Hardware</a>
                        <a href="#"
                            class="px-4 py-2 bg-white/80 backdrop-blur-sm border border-gray-200 rounded-full text-sm font-medium text-gray-700 hover:border-blue-400 hover:text-blue-700 transition">⚡
                            Accessories</a>
                        <a href="#"
                            class="px-4 py-2 bg-white/80 backdrop-blur-sm border border-gray-200 rounded-full text-sm font-medium text-gray-700 hover:border-blue-400 hover:text-blue-700 transition">🎁
                            Gift cards</a>
                    </div>

                    <div class="flex items-center gap-3 pt-4">
                        <div class="relative flex-1 max-w-xs">
                            <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                            <input type="text" placeholder="Search courses, gear..."
                                class="w-full pl-11 pr-4 py-3 rounded-xl border-2 border-gray-200 bg-white/80 focus:border-blue-500 focus:outline-none transition text-sm shadow-sm" />
                        </div>
                        <span class="text-xs text-gray-500"><i class="fas fa-bolt text-amber-500"></i> bestseller: Aeron
                            chair</span>
                    </div>

                    <div class="flex flex-wrap gap-4 pt-2 text-sm text-gray-600">
                        <span><i class="fas fa-lock text-green-500 mr-1"></i> secure
                            payment</span>
                        <span><i class="fas fa-rotate-left text-blue-500 mr-1"></i> 30‑day
                            returns</span>
                        <span><i class="fas fa-headset text-purple-500 mr-1"></i> 24/7
                            support</span>
                    </div>
                </div>

                <!-- RIGHT COLUMN – dynamic product preview -->
                <div class="lg:col-span-5 relative animate-slide-up delay-200">
                    <div class="relative">
                        <div
                            class="absolute -inset-4 bg-linear-to-tr from-blue-400/20 via-cyan-400/20 to-purple-400/20 rounded-3xl blur-2xl">
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
                            <div class="relative">
                                <div class="flex justify-between items-center mb-4">
                                    <span
                                        class="bg-linear-to-r from-amber-500 to-orange-400 text-white text-xs px-4 py-2 rounded-full font-semibold flex items-center gap-1"><i
                                            class="fas fa-crown"></i> EDITOR'S PICK</span>
                                    <span
                                        class="text-xs bg-white/80 px-3 py-1.5 rounded-full shadow-sm flex items-center gap-1"><i
                                            class="fas fa-star text-amber-500"></i> 4.9 (128
                                        reviews)</span>
                                </div>

                                <!-- featured product -->
                                <div
                                    class="flex gap-4 items-center mb-5 bg-linear-to-r from-gray-50 to-blue-50/50 p-3 rounded-xl border border-blue-100">
                                    <div
                                        class="w-20 h-20 rounded-xl bg-linear-to-br from-gray-800 to-gray-900 flex items-center justify-center text-white shadow-md overflow-hidden">
                                        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?q=80&w=726&auto=format&fit=crop"
                                            alt="MacBook Pro" class="w-full h-full object-cover" />
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-xs text-blue-600 font-semibold mb-0.5">
                                            ⭐ JUST LAUNCHED
                                        </p>
                                        <h4 class="font-display text-base truncate font-bold text-gray-900">
                                            MacBook Pro M3 Max
                                        </h4>
                                        <div class="flex items-center gap-2 mt-1">
                                            <span class="text-lg font-bold text-gray-900">$2,499</span>
                                            <span class="text-xs text-gray-400 line-through">$2,799</span>
                                            <span
                                                class="text-xs bg-red-100 text-red-600 px-2 py-0.5 rounded-full">-10%</span>
                                        </div>
                                    </div>
                                    <button onclick="addToCart()"
                                        class="w-12 h-12 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition shadow-lg shrink-0">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>

                                <!-- mini cards: academy + hardware -->
                                <div class="grid grid-cols-2 gap-3 mb-4">
                                    <div
                                        class="bg-white/80 border border-gray-100 rounded-xl p-3 flex items-center gap-2 group hover:border-blue-300 transition">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-linear-to-br from-blue-500 to-cyan-500 flex items-center justify-center text-white">
                                            <i class="fas fa-graduation-cap"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="text-xs font-bold text-gray-900 truncate">
                                                Cloud Eng. Bootcamp
                                            </div>
                                            <div class="text-xs text-gray-500">$299</div>
                                        </div>
                                        <i class="fas fa-arrow-right text-blue-500 text-xs"></i>
                                    </div>
                                    <div
                                        class="bg-white/80 border border-gray-100 rounded-xl p-3 flex items-center gap-2 group hover:border-purple-300 transition">
                                        <div
                                            class="w-10 h-10 rounded-lg bg-linear-to-br from-purple-500 to-pink-500 flex items-center justify-center text-white">
                                            <i class="fas fa-microchip"></i>
                                        </div>
                                        <div class="flex-1">
                                            <div class="text-xs font-bold text-gray-900 truncate">
                                                MX Master 3S
                                            </div>
                                            <div class="text-xs text-gray-500">$99</div>
                                        </div>
                                        <i class="fas fa-arrow-right text-purple-500 text-xs"></i>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between border-t border-gray-200/60 pt-4 text-xs">
                                    <span class="flex items-center gap-1 text-gray-600"><i
                                            class="fas fa-truck text-blue-500"></i> free shipping
                                        · 2‑day delivery</span>
                                    <span class="bg-blue-50 text-blue-700 px-3 py-1 rounded-full font-medium">🎁 gift
                                        available</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="absolute -bottom-3 -right-4 bg-white rounded-full shadow-xl py-2 px-5 border border-gray-200 flex items-center gap-2 text-sm">
                        <i class="fas fa-gem text-blue-500"></i>
                        <span class="font-medium text-gray-800">buy courses & save 15%</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ACADEMY SECTION (redesigned cards, consistent with new aesthetic) -->
    <section id="academy" class="py-32 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center gap-4 mb-16 reveal">
                <div
                    class="w-14 h-14 bg-linear-to-br from-blue-500 to-cyan-500 rounded-2xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-graduation-cap text-white text-xl"></i>
                </div>
                <div>
                    <h2 class="font-display text-4xl text-gray-900">Nissi Academy</h2>
                    <p class="text-gray-600 text-lg">Level up your technical skills</p>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Program Card 1 (enhanced) -->
                <div class="bg-white border-2 border-gray-200 rounded-3xl overflow-hidden card-hover reveal group">
                    <div
                        class="relative h-56 bg-linear-to-br from-blue-500 to-cyan-500 flex items-center justify-center overflow-hidden">
                        <div
                            class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMwMDAiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMC0yIDEuNjY3LTMuMzMzIDUtNHM1LTIgNS00LTEuNjY3LTMuMzMzLTUtNGMtMy4zMzMtLjY2Ny01LTIuNjY3LTUtNWgtNC4yNWMwIDIuMzMzLTEuNzUgNC4zMzMtNS4yNSA1cy01LjI1IDItNS4yNSA0IDEuNzUgMy4zMzMgNS4yNSA0IDUuMjUgMi42NjcgNS4yNSA1aDQuMjV6Ii8+PC9nPjwvZz48L3N2Zz4=')]">
                        </div>
                        <i
                            class="fab fa-aws text-8xl text-white/90 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-blue-600 text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
                            CERTIFICATION
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="font-display text-2xl text-gray-900">
                                Cloud Engineering for Beginners
                            </h3>
                            <span class="bg-blue-100 text-blue-700 text-xs px-3 py-1 rounded-full font-semibold">8
                                weeks</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Master AWS, Docker, and Kubernetes fundamentals in this
                            comprehensive bootcamp.
                        </p>
                        <div class="flex items-center justify-between pt-6 border-t-2 border-gray-100">
                            <div>
                                <div class="text-3xl font-bold text-gray-900">$299</div>
                                <div class="text-xs text-gray-500">one-time</div>
                            </div>
                            <button onclick="addToCart()"
                                class="px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-xl font-semibold transition inline-flex items-center gap-2 shadow-lg shadow-blue-600/30">
                                Enroll Now <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Program Card 2 -->
                <div
                    class="bg-white border-2 border-gray-200 rounded-3xl overflow-hidden card-hover reveal delay-100 group">
                    <div
                        class="relative h-56 bg-linear-to-br from-purple-500 to-pink-500 flex items-center justify-center overflow-hidden">
                        <div
                            class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMwMDAiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMC0yIDEuNjY3LTMuMzMzIDUtNHM1LTIgNS00LTEuNjY3LTMuMzMzLTUtNGMtMy4zMzMtLjY2Ny01LTIuNjY3LTUtNWgtNC4yNWMwIDIuMzMzLTEuNzUgNC4zMzMtNS4yNSA1cy01LjI1IDItNS4yNSA0IDEuNzUgMy4zMzMgNS4yNSA0IDUuMjUgMi42NjcgNS4yNSA1aDQuMjV6Ii8+PC9nPjwvZz48L3N2Zz4=')]">
                        </div>
                        <i
                            class="fas fa-brain text-8xl text-white/90 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-purple-600 text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
                            ADVANCED
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="font-display text-2xl text-gray-900">
                                Applied AI & Machine Learning
                            </h3>
                            <span class="bg-purple-100 text-purple-700 text-xs px-3 py-1 rounded-full font-semibold">10
                                weeks</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Build and deploy neural networks. Includes access to Nissi GPU
                            clusters.
                        </p>
                        <div class="flex items-center justify-between pt-6 border-t-2 border-gray-100">
                            <div>
                                <div class="text-3xl font-bold text-gray-900">$499</div>
                                <div class="text-xs text-gray-500">one-time</div>
                            </div>
                            <button onclick="addToCart()"
                                class="px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white rounded-xl font-semibold transition inline-flex items-center gap-2 shadow-lg shadow-purple-600/30">
                                Enroll Now <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Program Card 3 -->
                <div
                    class="bg-white border-2 border-gray-200 rounded-3xl overflow-hidden card-hover reveal delay-200 group">
                    <div
                        class="relative h-56 bg-linear-to-br from-emerald-500 to-teal-500 flex items-center justify-center overflow-hidden">
                        <div
                            class="absolute inset-0 opacity-10 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHZpZXdCb3g9IjAgMCA2MCA2MCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPjxnIGZpbGw9IiMwMDAiIGZpbGwtb3BhY2l0eT0iMC4xIj48cGF0aCBkPSJNMzYgMzRjMC0yIDEuNjY3LTMuMzMzIDUtNHM1LTIgNS00LTEuNjY3LTMuMzMzLTUtNGMtMy4zMzMtLjY2Ny01LTIuNjY3LTUtNWgtNC4yNWMwIDIuMzMzLTEuNzUgNC4zMzMtNS4yNSA1cy01LjI1IDItNS4yNSA0IDEuNzUgMy4zMzMgNS4yNSA0IDUuMjUgMi42NjcgNS4yNSA1aDQuMjV6Ii8+PC9nPjwvZz48L3N2Zz4=')]">
                        </div>
                        <i
                            class="fas fa-user-secret text-8xl text-white/90 group-hover:scale-110 transition-transform duration-500"></i>
                        <div
                            class="absolute top-4 right-4 bg-white/90 backdrop-blur-sm text-emerald-600 text-xs font-bold px-3 py-1.5 rounded-full shadow-sm">
                            BOOTCAMP
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="flex justify-between items-start mb-3">
                            <h3 class="font-display text-2xl text-gray-900">
                                Zero-Trust Security Architect
                            </h3>
                            <span
                                class="bg-emerald-100 text-emerald-700 text-xs px-3 py-1 rounded-full font-semibold">6
                                weeks</span>
                        </div>
                        <p class="text-gray-600 mb-6 leading-relaxed">
                            Become a certified cybersecurity analyst. Penetration testing &
                            ethical hacking.
                        </p>
                        <div class="flex items-center justify-between pt-6 border-t-2 border-gray-100">
                            <div>
                                <div class="text-3xl font-bold text-gray-900">$349</div>
                                <div class="text-xs text-gray-500">one-time</div>
                            </div>
                            <button onclick="addToCart()"
                                class="px-6 py-3 bg-emerald-600 hover:bg-emerald-700 text-white rounded-xl font-semibold transition inline-flex items-center gap-2 shadow-lg shadow-emerald-600/30">
                                Enroll Now <i class="fas fa-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- HARDWARE SECTION (redesigned grid, consistent card style) -->
    <section id="hardware" class="py-32 bg-linear-to-b from-gray-50 to-white border-t border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center gap-4 mb-16 reveal">
                <div
                    class="w-14 h-14 bg-linear-to-br from-gray-700 to-gray-900 rounded-2xl flex items-center justify-center shadow-lg">
                    <i class="fas fa-microchip text-white text-xl"></i>
                </div>
                <div>
                    <h2 class="font-display text-4xl text-gray-900">
                        Workstation Upgrades
                    </h2>
                    <p class="text-gray-600 text-lg">
                        Professional gear for peak performance
                    </p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Product 1 (enhanced) -->
                <div class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden product-card group reveal">
                    <div class="relative aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?q=80&w=726&auto=format&fit=crop"
                            alt="MacBook Pro" class="object-cover w-full h-full transition-transform duration-500" />
                        <div
                            class="absolute top-3 left-3 bg-red-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                            -10% OFF
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/5 transition-colors"></div>
                    </div>
                    <div class="p-4">
                        <div class="mb-3">
                            <h4 class="text-gray-900 font-bold text-sm mb-1 truncate">
                                MacBook Pro M3 Max
                            </h4>
                            <p class="text-xs text-gray-500">Space Black, 1TB SSD</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div>
                                <div class="text-xl font-bold text-blue-600">$2,499</div>
                                <div class="text-xs text-gray-400 line-through">$2,799</div>
                            </div>
                            <button onclick="addToCart()"
                                class="w-10 h-10 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-colors shadow-md">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 2 -->
                <div
                    class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden product-card group reveal delay-100">
                    <div class="relative aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1595225476474-87563907a212?q=80&w=2071&auto=format&fit=crop"
                            alt="Mechanical Keyboard"
                            class="object-cover w-full h-full transition-transform duration-500" />
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/5 transition-colors"></div>
                    </div>
                    <div class="p-4">
                        <div class="mb-3">
                            <h4 class="text-gray-900 font-bold text-sm mb-1 truncate">
                                Keychron Q1 Pro
                            </h4>
                            <p class="text-xs text-gray-500">Mechanical, Wireless</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-xl font-bold text-gray-900">$199</div>
                            <button onclick="addToCart()"
                                class="w-10 h-10 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-colors shadow-md">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 3 -->
                <div
                    class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden product-card group reveal delay-200">
                    <div class="relative aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1505740420928-5e560c06d30e?q=80&w=2070&auto=format&fit=crop"
                            alt="Headphones" class="object-cover w-full h-full transition-transform duration-500" />
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/5 transition-colors"></div>
                    </div>
                    <div class="p-4">
                        <div class="mb-3">
                            <h4 class="text-gray-900 font-bold text-sm mb-1 truncate">
                                Sony WH-1000XM5
                            </h4>
                            <p class="text-xs text-gray-500">Noise Cancelling</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-xl font-bold text-gray-900">$349</div>
                            <button onclick="addToCart()"
                                class="w-10 h-10 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-colors shadow-md">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 4 -->
                <div
                    class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden product-card group reveal delay-300">
                    <div class="relative aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1593640408182-31c70c8268f5?q=80&w=2042&auto=format&fit=crop"
                            alt="Monitor" class="object-cover w-full h-full transition-transform duration-500" />
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/5 transition-colors"></div>
                    </div>
                    <div class="p-4">
                        <div class="mb-3">
                            <h4 class="text-gray-900 font-bold text-sm mb-1 truncate">
                                Dell UltraSharp 32"
                            </h4>
                            <p class="text-xs text-gray-500">4K USB-C Hub Monitor</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-xl font-bold text-gray-900">$899</div>
                            <button onclick="addToCart()"
                                class="w-10 h-10 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-colors shadow-md">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- second row (more products) -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-6">
                <!-- Product 5 -->
                <div class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden product-card group reveal">
                    <div class="relative aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?q=80&w=2067&auto=format&fit=crop"
                            alt="Mouse" class="object-cover w-full h-full transition-transform duration-500" />
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/5 transition-colors"></div>
                    </div>
                    <div class="p-4">
                        <div class="mb-3">
                            <h4 class="text-gray-900 font-bold text-sm mb-1 truncate">
                                Logitech MX Master 3S
                            </h4>
                            <p class="text-xs text-gray-500">Wireless Performance</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-xl font-bold text-gray-900">$99</div>
                            <button onclick="addToCart()"
                                class="w-10 h-10 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-colors shadow-md">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 6 -->
                <div
                    class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden product-card group reveal delay-100">
                    <div class="relative aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1625948515291-69613efd103f?q=80&w=2076&auto=format&fit=crop"
                            alt="Webcam" class="object-cover w-full h-full transition-transform duration-500" />
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/5 transition-colors"></div>
                    </div>
                    <div class="p-4">
                        <div class="mb-3">
                            <h4 class="text-gray-900 font-bold text-sm mb-1 truncate">
                                Elgato FaceCam Pro
                            </h4>
                            <p class="text-xs text-gray-500">4K60 HDR Webcam</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-xl font-bold text-gray-900">$299</div>
                            <button onclick="addToCart()"
                                class="w-10 h-10 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-colors shadow-md">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 7 -->
                <div
                    class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden product-card group reveal delay-200">
                    <div class="relative aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1611186871348-b1ce696e52c9?q=80&w=2070&auto=format&fit=crop"
                            alt="Chair" class="object-cover w-full h-full transition-transform duration-500" />
                        <div
                            class="absolute top-3 left-3 bg-blue-500 text-white text-xs font-bold px-3 py-1 rounded-full">
                            BESTSELLER
                        </div>
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/5 transition-colors"></div>
                    </div>
                    <div class="p-4">
                        <div class="mb-3">
                            <h4 class="text-gray-900 font-bold text-sm mb-1 truncate">
                                Herman Miller Aeron
                            </h4>
                            <p class="text-xs text-gray-500">Ergonomic Office Chair</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-xl font-bold text-gray-900">$1,495</div>
                            <button onclick="addToCart()"
                                class="w-10 h-10 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-colors shadow-md">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Product 8 -->
                <div
                    class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden product-card group reveal delay-300">
                    <div class="relative aspect-square bg-gray-100 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1598327105666-5b89351aff97?q=80&w=2027&auto=format&fit=crop"
                            alt="Desk" class="object-cover w-full h-full transition-transform duration-500" />
                        <div class="absolute inset-0 bg-black/0 group-hover:bg-black/5 transition-colors"></div>
                    </div>
                    <div class="p-4">
                        <div class="mb-3">
                            <h4 class="text-gray-900 font-bold text-sm mb-1 truncate">
                                Autonomous SmartDesk
                            </h4>
                            <p class="text-xs text-gray-500">Standing Desk</p>
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="text-xl font-bold text-gray-900">$599</div>
                            <button onclick="addToCart()"
                                class="w-10 h-10 rounded-full bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-colors shadow-md">
                                <i class="fas fa-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRUST BANNER (redesigned with glass effect) -->
    <section class="py-20 bg-white border-y border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-4 gap-8 text-center">
                <div class="reveal glass-card p-6 rounded-2xl border border-white/60 shadow-sm">
                    <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shipping-fast text-blue-600 text-2xl"></i>
                    </div>
                    <h4 class="text-gray-900 font-bold mb-2">Free Shipping</h4>
                    <p class="text-gray-600 text-sm">On orders over $500</p>
                </div>
                <div class="reveal delay-100 glass-card p-6 rounded-2xl border border-white/60 shadow-sm">
                    <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-shield-alt text-green-600 text-2xl"></i>
                    </div>
                    <h4 class="text-gray-900 font-bold mb-2">Secure Payment</h4>
                    <p class="text-gray-600 text-sm">256-bit SSL encrypted</p>
                </div>
                <div class="reveal delay-200 glass-card p-6 rounded-2xl border border-white/60 shadow-sm">
                    <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-undo text-purple-600 text-2xl"></i>
                    </div>
                    <h4 class="text-gray-900 font-bold mb-2">30-Day Returns</h4>
                    <p class="text-gray-600 text-sm">Hassle-free returns</p>
                </div>
                <div class="reveal delay-300 glass-card p-6 rounded-2xl border border-white/60 shadow-sm">
                    <div class="w-16 h-16 bg-amber-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-headset text-amber-600 text-2xl"></i>
                    </div>
                    <h4 class="text-gray-900 font-bold mb-2">24/7 Support</h4>
                    <p class="text-gray-600 text-sm">Expert assistance</p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>

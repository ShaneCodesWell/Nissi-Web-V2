<x-layouts.app>
    <!-- ===== REDESIGNED HERO SECTION ===== -->
    <!-- structural changes: two‑column layout, integrated visual + floating card, cleaner hierarchy, embedded search/browse, removed overcrowded text -->
    <section class="relative pt-40 pb-28 overflow-hidden bg-linear-to-br from-indigo-50/80 via-white to-slate-50">
        <!-- background decoration (refined) -->
        <div class="absolute inset-0 grid-pattern opacity-60"></div>
        <div class="absolute top-10 right-10 w-125 h-125 bg-blue-300/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 left-10 w-100 h-100 bg-cyan-300/20 rounded-full blur-3xl"></div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <!-- Two column structure: left content + right visual card -->
            <div class="grid lg:grid-cols-12 gap-8 items-center">
                <!-- LEFT COLUMN (headline, description, search, tags) - spans 7 columns -->
                <div class="lg:col-span-7 space-y-6">
                    <!-- pre-header with pulse accent -->
                    <div class="flex items-center gap-3 animate-slide-up">
                        <span class="relative flex h-3 w-3">
                            <span
                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-3 w-3 bg-blue-600"></span>
                        </span>
                        <span class="text-blue-700 font-semibold tracking-wide text-sm uppercase">fresh insights — vol.
                            2026</span>
                    </div>

                    <!-- main heading: stronger contrast, less repetitive wording -->
                    <h1
                        class="font-display text-5xl md:text-6xl lg:text-7xl text-gray-900 leading-[1.1] tracking-tight animate-slide-up delay-100">
                        Where <span class="gradient-text">engineering</span><br />meets
                        narrative
                    </h1>

                    <!-- description: more focused, value driven -->
                    <p class="text-lg md:text-xl text-gray-600 max-w-xl leading-relaxed animate-slide-up delay-200">
                        Cloud architecture, post‑quantum security, and the culture behind
                        Nissi’s tech. Read by 25,000+ engineers.
                    </p>

                    <!-- integrated search / browse (new structural element that replaces filter duplication) -->
                    <div class="flex flex-col sm:flex-row gap-4 pt-4 animate-slide-up delay-300">
                        <div class="relative flex-1">
                            <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                            <input type="text" placeholder="Search articles..."
                                class="w-full pl-11 pr-4 py-4 rounded-xl border-2 border-gray-200 bg-white/70 backdrop-blur-sm focus:border-blue-500 focus:outline-none transition text-base shadow-sm" />
                        </div>
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-4 rounded-xl shadow-lg shadow-blue-600/30 inline-flex items-center justify-center gap-2 transition-all whitespace-nowrap">
                            <i class="fas fa-arrow-right"></i> Browse
                        </button>
                    </div>

                    <!-- popular tags row (visual anchor) -->
                    <div class="flex flex-wrap items-center gap-3 pt-2 text-sm">
                        <span class="text-gray-500 font-medium">Popular:</span>
                        <a href="#"
                            class="px-3 py-1.5 bg-white/70 backdrop-blur-sm border border-gray-200 rounded-full text-gray-700 hover:border-blue-400 hover:text-blue-700 transition text-xs font-medium">#quantum‑safe</a>
                        <a href="#"
                            class="px-3 py-1.5 bg-white/70 backdrop-blur-sm border border-gray-200 rounded-full text-gray-700 hover:border-blue-400 hover:text-blue-700 transition text-xs font-medium">#LLM</a>
                        <a href="#"
                            class="px-3 py-1.5 bg-white/70 backdrop-blur-sm border border-gray-200 rounded-full text-gray-700 hover:border-blue-400 hover:text-blue-700 transition text-xs font-medium">#zero‑day</a>
                        <a href="#"
                            class="px-3 py-1.5 bg-white/70 backdrop-blur-sm border border-gray-200 rounded-full text-gray-700 hover:border-blue-400 hover:text-blue-700 transition text-xs font-medium">#embedded</a>
                    </div>
                </div>

                <!-- RIGHT COLUMN - abstract visual + mini featured card (spans 5 columns) -->
                <div class="lg:col-span-5 relative animate-slide-up delay-200">
                    <!-- main floating illustration (3D abstract card style) -->
                    <div class="relative">
                        <!-- blurred background blob -->
                        <div
                            class="absolute -top-10 -left-10 w-64 h-64 bg-linear-to-tr from-blue-400 to-cyan-300 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-float">
                        </div>
                        <div class="absolute -bottom-8 -right-8 w-72 h-72 bg-linear-to-tr from-purple-400 to-pink-300 rounded-full mix-blend-multiply filter blur-2xl opacity-30 animate-float"
                            style="animation-delay: -2s"></div>

                        <!-- main glass card with abstract representation of blog/tech -->
                        <div
                            class="relative bg-white/80 backdrop-blur-xl border border-white/40 rounded-3xl shadow-2xl p-6 overflow-hidden">
                            <!-- tiny grid pattern inside card -->
                            <div class="absolute inset-0 opacity-20"
                                style="
                    background-image:
                      linear-gradient(
                        rgba(0, 102, 255, 0.1) 1px,
                        transparent 1px
                      ),
                      linear-gradient(
                        90deg,
                        rgba(0, 102, 255, 0.1) 1px,
                        transparent 1px
                      );
                    background-size: 20px 20px;
                  ">
                            </div>

                            <div class="relative">
                                <!-- internal header -->
                                <div class="flex justify-between items-center mb-4">
                                    <span
                                        class="text-xs font-mono text-blue-600 bg-blue-100 px-3 py-1.5 rounded-full">latest
                                        feature</span>
                                    <span class="text-xs text-gray-500 flex items-center gap-1"><i
                                            class="far fa-clock"></i> 5 min ago</span>
                                </div>

                                <!-- dynamic mini featured post (embedded) – this replaces the static empty image, creates flow -->
                                <div
                                    class="flex gap-3 items-center mb-5 bg-linear-to-r from-blue-50 to-indigo-50 p-3 rounded-xl border border-blue-100/60">
                                    <div
                                        class="w-12 h-12 rounded-xl bg-linear-to-br from-blue-500 to-cyan-400 flex items-center justify-center text-white shadow-md shrink-0">
                                        <i class="fas fa-cube text-xl"></i>
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-xs text-blue-700 font-semibold mb-0.5">
                                            EDITOR'S PICK
                                        </p>
                                        <h4 class="font-display text-sm truncate font-bold text-gray-800">
                                            Post-quantum readiness
                                        </h4>
                                        <p class="text-xs text-gray-500 truncate">
                                            by Sarah Jenkins · 12k reads
                                        </p>
                                    </div>
                                    <i class="fas fa-arrow-right text-blue-500 text-xs"></i>
                                </div>

                                <!-- abstract representation of popular topics (icon grid) -->
                                <div class="grid grid-cols-4 gap-2 mb-4">
                                    <div
                                        class="bg-white/70 border border-gray-100 rounded-xl p-2 text-center shadow-sm">
                                        <i class="fas fa-cloud text-blue-500 text-lg"></i>
                                        <span class="block text-[10px] font-medium text-gray-700 mt-1">cloud</span>
                                    </div>
                                    <div
                                        class="bg-white/70 border border-gray-100 rounded-xl p-2 text-center shadow-sm">
                                        <i class="fas fa-shield-haltered text-emerald-500 text-lg"></i>
                                        <span class="block text-[10px] font-medium text-gray-700 mt-1">security</span>
                                    </div>
                                    <div
                                        class="bg-white/70 border border-gray-100 rounded-xl p-2 text-center shadow-sm">
                                        <i class="fas fa-microchip text-purple-500 text-lg"></i>
                                        <span class="block text-[10px] font-medium text-gray-700 mt-1">edge</span>
                                    </div>
                                    <div
                                        class="bg-white/70 border border-gray-100 rounded-xl p-2 text-center shadow-sm">
                                        <i class="fas fa-robot text-amber-500 text-lg"></i>
                                        <span class="block text-[10px] font-medium text-gray-700 mt-1">AI</span>
                                    </div>
                                </div>

                                <!-- mini stat bar (visual engagement) -->
                                <div class="flex justify-between text-xs border-t border-gray-200/60 pt-4 mt-2">
                                    <div class="flex items-center gap-1">
                                        <i class="fas fa-newspaper text-gray-400"></i>
                                        <span class="font-medium">140+ articles</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <i class="fas fa-users text-gray-400"></i>
                                        <span class="font-medium">25k readers</span>
                                    </div>
                                    <div class="flex items-center gap-1">
                                        <i class="fas fa-bolt text-gray-400"></i>
                                        <span class="font-medium">weekly</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- small floating badge (extra detail) -->
                        <div
                            class="absolute -right-4 -bottom-2 bg-white rounded-full shadow-xl py-2 px-5 border border-gray-200 flex items-center gap-2 text-sm">
                            <span class="relative flex h-2 w-2"><span
                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400"></span><span
                                    class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span></span>
                            <span class="font-medium text-gray-800">new: quantum series</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- subtle scroll hint (optional) -->
            <div class="hidden md:flex justify-start mt-12 gap-1 text-sm text-gray-400 items-center animate-bounce">
                <i class="fas fa-chevron-down"></i> <span>scroll for deep dives</span>
            </div>
        </div>
    </section>
    <!-- END OF REDESIGNED HERO -->

    <!-- Featured Post (same as original, preserved) -->
    <section class="py-20 bg-white border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="bg-white border-2 border-gray-200 rounded-3xl overflow-hidden shadow-2xl reveal">
                <div class="grid lg:grid-cols-5 gap-0">
                    <div class="lg:col-span-3 relative overflow-hidden h-80 lg:h-auto group">
                        <img src="https://images.unsplash.com/photo-1635070041078-e363dbe005cb?q=80&w=2070&auto=format&fit=crop"
                            alt="Quantum Computing"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" />
                        <div class="absolute inset-0 bg-linear-to-t from-black/50 to-transparent lg:hidden"></div>
                        <span
                            class="absolute top-6 left-6 bg-blue-600 text-white text-xs font-bold px-4 py-2 rounded-full">FEATURED</span>
                    </div>
                    <div class="lg:col-span-2 p-8 lg:p-12 flex flex-col justify-center">
                        <div class="text-sm text-blue-600 mb-3 font-semibold">
                            Engineering • 5 min read
                        </div>
                        <h2
                            class="font-display text-3xl md:text-4xl text-gray-900 mb-4 leading-tight hover:text-blue-600 transition-colors cursor-pointer">
                            Preparing Enterprise Infrastructure for Post-Quantum
                            Cryptography
                        </h2>
                        <p class="text-gray-600 mb-6 line-clamp-3 leading-relaxed">
                            As quantum computers inch closer to reality, current encryption
                            standards face obsolescence. Here is how Nissi Technologies is
                            architecting the transition today.
                        </p>
                        <div class="flex items-center gap-4 pt-6 border-t-2 border-gray-100">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Author"
                                class="w-12 h-12 rounded-full border-2 border-gray-200" />
                            <div>
                                <div class="text-gray-900 font-bold">Sarah Jenkins</div>
                                <div class="text-sm text-gray-500">
                                    CTO, Nissi Technologies
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Categories (unchanged) -->
    <section id="blog" class="py-12 bg-gray-50 border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-wrap justify-center gap-3 reveal">
                <button
                    class="px-6 py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition-colors shadow-lg shadow-blue-600/25">
                    All Posts
                </button>
                <button
                    class="px-6 py-3 rounded-xl bg-white text-gray-700 border-2 border-gray-200 font-semibold hover:border-blue-600 hover:text-blue-600 transition-colors">
                    Engineering
                </button>
                <button
                    class="px-6 py-3 rounded-xl bg-white text-gray-700 border-2 border-gray-200 font-semibold hover:border-blue-600 hover:text-blue-600 transition-colors">
                    AI & ML
                </button>
                <button
                    class="px-6 py-3 rounded-xl bg-white text-gray-700 border-2 border-gray-200 font-semibold hover:border-blue-600 hover:text-blue-600 transition-colors">
                    Security
                </button>
                <button
                    class="px-6 py-3 rounded-xl bg-white text-gray-700 border-2 border-gray-200 font-semibold hover:border-blue-600 hover:text-blue-600 transition-colors">
                    Company News
                </button>
            </div>
        </div>
    </section>

    <!-- Blog Grid (truncated after first 3 to keep demo tidy, same styling) -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Post 1 -->
                <article
                    class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden card-hover blog-card group reveal">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1488590528505-98d2b5aba04b?q=80&w=870&auto=format&fit=crop"
                            alt="Blog 1"
                            class="w-full h-full object-cover transition-transform duration-500" /><span
                            class="absolute top-4 left-4 bg-purple-100 text-purple-700 text-xs font-bold px-3 py-1.5 rounded-full border-2 border-purple-200">AI
                            & ML</span>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors leading-tight">
                            Generative AI: Beyond the Hype Cycle
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2 leading-relaxed">
                            How we are implementing LLMs in production environments without
                            sacrificing latency or privacy.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm hover:gap-3 transition-all">Read
                            Article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                <!-- Post 2 -->
                <article
                    class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden card-hover blog-card group reveal delay-100">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1487058792275-0ad4aaf24ca7?q=80&w=870&auto=format&fit=crop"
                            alt="Blog 2"
                            class="w-full h-full object-cover transition-transform duration-500" /><span
                            class="absolute top-4 left-4 bg-blue-100 text-blue-700 text-xs font-bold px-3 py-1.5 rounded-full border-2 border-blue-200">ENGINEERING</span>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors leading-tight">
                            Why We Migrated from Rest to gRPC
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2 leading-relaxed">
                            Reducing payload size by 60% and improving microservice
                            communication speeds significantly.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm hover:gap-3 transition-all">Read
                            Article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                <!-- Post 3 -->
                <article
                    class="bg-white border-2 border-gray-200 rounded-2xl overflow-hidden card-hover blog-card group reveal delay-200">
                    <div class="relative h-56 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?q=80&w=1470&auto=format&fit=crop"
                            alt="Blog 3"
                            class="w-full h-full object-cover transition-transform duration-500" /><span
                            class="absolute top-4 left-4 bg-emerald-100 text-emerald-700 text-xs font-bold px-3 py-1.5 rounded-full border-2 border-emerald-200">SECURITY</span>
                    </div>
                    <div class="p-6">
                        <h3
                            class="text-xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition-colors leading-tight">
                            The Anatomy of a Zero-Day Attack
                        </h3>
                        <p class="text-gray-600 text-sm mb-4 line-clamp-2 leading-relaxed">
                            A technical breakdown of recent vulnerabilities and how our
                            Sentinel Defense grid responds.
                        </p>
                        <a href="#"
                            class="inline-flex items-center gap-2 text-blue-600 font-semibold text-sm hover:gap-3 transition-all">Read
                            Article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Newsletter + Footer (unchanged, just copied from original to preserve context) -->
    <section id="newsletter" class="py-32 bg-linear-to-b from-gray-50 to-white">
        <div class="max-w-4xl mx-auto px-6">
            <div
                class="bg-linear-to-br from-blue-600 via-blue-700 to-purple-700 rounded-3xl p-12 md:p-16 text-center shadow-2xl relative overflow-hidden reveal">
                <!-- ... -->
                <div class="relative z-10">
                    <div
                        class="w-16 h-16 bg-white/20 backdrop-blur rounded-full flex items-center justify-center mx-auto mb-6">
                        <i class="far fa-envelope-open text-white text-2xl"></i>
                    </div>
                    <h2 class="font-display text-4xl md:text-5xl text-white mb-4">
                        Stay in the Loop
                    </h2>
                    <p class="text-xl text-blue-100 mb-10 max-w-xl mx-auto leading-relaxed">
                        Join 25,000+ engineers and executives who get our weekly tech
                        briefing delivered to their inbox.
                    </p>
                    <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto"
                        onsubmit="
                event.preventDefault();
                alert('Subscribed successfully!');
              ">
                        <input type="email" placeholder="Enter your email"
                            class="flex-1 bg-white/10 backdrop-blur border-2 border-white/20 text-white placeholder-white/60 px-6 py-4 rounded-xl focus:outline-none focus:border-white transition-colors"
                            required /><button type="submit"
                            class="bg-white text-blue-600 font-bold px-8 py-4 rounded-xl hover:shadow-2xl transition-all hover:-translate-y-1">
                            Subscribe
                        </button>
                    </form>
                    <p class="text-blue-200 text-sm mt-6">
                        No spam, unsubscribe anytime. Read our
                        <a href="#" class="underline hover:text-white transition">privacy policy</a>.
                    </p>
                </div>
            </div>
        </div>
    </section>
</x-layouts.app>
<nav class="fixed top-0 w-full z-50 glass border-b border-gray-200/50" x-data="{ open: false }">
    <div class="max-w-7xl mx-auto px-6 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <a href="{{ route('home') }}">
                <div class="flex items-center gap-3">
                    <div
                        class="w-10 h-10 bg-linear-to-br from-blue-500 to-cyan-400 rounded-lg flex items-center justify-center">
                        <span class="text-white font-bold text-xl">N</span>
                    </div>
                    <span class="font-display text-xl text-gray-900">Nissi Technologies</span>
                </div>
            </a>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center gap-8">
                <a href="{{ route('solutions') }}"
                    class="text-gray-700 hover:text-blue-600 font-medium transition">Solutions</a>
                <a href="{{ route('programs') }}"
                    class="text-gray-700 hover:text-blue-600 font-medium transition">Programs</a>
                <a href="{{ route('vision') }}"
                    class="text-gray-700 hover:text-blue-600 font-medium transition">Vision</a>
                <a href="{{ route('shop') }}" class="text-gray-700 hover:text-blue-600 font-medium transition">Shop</a>
                <a href="{{ route('blogs') }}"
                    class="text-gray-700 hover:text-blue-600 font-medium transition">Blogs</a>
                <a href="#contact"
                    class="px-6 py-2.5 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition">Get
                    Started</a>
            </div>

            <!-- Mobile Menu Button -->
            <button
                class="md:hidden text-gray-700 w-10 h-10 flex items-center justify-center rounded-lg hover:bg-gray-100/60 transition"
                @click="open = !open" :aria-expanded="open" aria-label="Toggle menu">
                <i class="fas text-xl transition-all duration-300" :class="open ? 'fa-xmark' : 'fa-bars'"></i>
            </button>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden overflow-hidden transition-all duration-300 ease-in-out"
        :style="open ? 'max-height: 400px; opacity: 1;' : 'max-height: 0; opacity: 0;'">
        <div class="px-6 pb-6 pt-2 border-t border-gray-200/50 flex flex-col gap-1">
            <a href="{{ route('solutions') }}"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50/60 rounded-lg font-medium transition group"
                @click="open = false">
                <i class="fas fa-cubes text-sm text-gray-400 group-hover:text-blue-500 transition w-4"></i>
                Solutions
            </a>
            <a href="{{ route('programs') }}"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50/60 rounded-lg font-medium transition group"
                @click="open = false">
                <i class="fas fa-graduation-cap text-sm text-gray-400 group-hover:text-blue-500 transition w-4"></i>
                Programs
            </a>
            <a href="{{ route('vision') }}"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50/60 rounded-lg font-medium transition group"
                @click="open = false">
                <i class="fas fa-eye text-sm text-gray-400 group-hover:text-blue-500 transition w-4"></i>
                Vision
            </a>
            <a href="{{ route('shop') }}"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50/60 rounded-lg font-medium transition group"
                @click="open = false">
                <i class="fas fa-bag-shopping text-sm text-gray-400 group-hover:text-blue-500 transition w-4"></i>
                Shop
            </a>
            <a href="{{ route('blogs') }}"
                class="flex items-center gap-3 px-4 py-3 text-gray-700 hover:text-blue-600 hover:bg-blue-50/60 rounded-lg font-medium transition group"
                @click="open = false">
                <i class="fas fa-newspaper text-sm text-gray-400 group-hover:text-blue-500 transition w-4"></i>
                Blogs
            </a>
            <div class="pt-2 mt-1 border-t border-gray-200/50">
                <a href="#contact"
                    class="flex items-center justify-center gap-2 w-full px-6 py-3 bg-blue-600 hover:bg-blue-700 text-white rounded-lg font-medium transition"
                    @click="open = false">
                    <i class="fas fa-rocket text-sm"></i>
                    Get Started
                </a>
            </div>
        </div>
    </div>
</nav>

<!-- Top Global Utility Bar -->
<div class="bg-brand-900 text-white text-[10px] md:text-[11px] py-2 md:py-2.5 border-b border-white/10">
    <div
        class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-3 md:gap-2">
        <!-- Address -->
        <div class="flex items-center gap-4 opacity-90 text-center md:text-left">
            <span class="flex items-center gap-1.5 justify-center md:justify-start">
                <svg class="w-3 h-3 text-accent-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd" />
                </svg>
                <span class="line-clamp-1 md:line-clamp-none">F-1/5, 2nd Floor, Okhla Industrial Area Phase - 1, New
                    Delhi</span>
            </span>
        </div>

        <!-- Contact -->
        <div class="flex flex-wrap justify-center items-center gap-x-4 md:gap-6 gap-y-1 opacity-90">
            <span class="flex items-center gap-1.5 hover:text-white transition-colors whitespace-nowrap">
                <svg class="w-3 h-3 text-accent-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                </svg>
                +91 11 47730000 - 99
            </span>
            <a href="mailto:ieodelhi@inclentrust.org"
                class="flex items-center gap-1.5 hover:text-accent-500 transition-colors whitespace-nowrap">
                <svg class="w-3 h-3 text-accent-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                    <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                </svg>
                ieodelhi@inclentrust.org
            </a>
        </div>
    </div>
</div>

<!-- Main Header & Navigation -->
<header class="bg-white border-b border-gray-200 sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center gap-4">
                <a href="index.php" class="flex items-center gap-4">
                    <img src="assets/logo.png" alt="INCLEN Trust Logo" class="h-10 w-auto">
                    <div class="hidden lg:block border-l border-gray-300 pl-4">
                        <span class="block text-brand-900 font-bold text-sm tracking-wide leading-tight">
                            INCLEN TRUST<br>INTERNATIONAL
                        </span>
                        <span class="block text-[10px] text-gray-500 uppercase tracking-wider">
                            Global Health Research
                        </span>
                    </div>
                </a>
            </div>


            <!-- Mobile menu button -->
            <div class="flex items-center md:hidden">
                <button type="button" onclick="toggleMobileMenu()"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-brand-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-brand-500"
                    aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon when menu is closed -->
                    <svg id="menu-icon-closed" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <!-- Icon when menu is open -->
                    <svg id="menu-icon-opened" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <div class="hidden md:flex items-center space-x-1">
                <div class="relative group h-full flex items-center px-3">
                    <a href="index.php"
                        class="text-sm font-semibold text-gray-700 hover:text-brand-600 transition-colors py-2">Home</a>
                </div>
                <div class="relative group h-full flex items-center px-3">
                    <a href="about.php"
                        class="text-sm font-semibold text-gray-700 hover:text-brand-600 transition-colors py-2">About</a>
                </div>

                <div class="relative group h-full flex items-center px-3">
                    <a href="#research"
                        class="text-sm font-semibold text-gray-700 hover:text-brand-600 transition-colors py-2">Research</a>
                </div>
                <div class="relative group h-full flex items-center px-3">
                    <a href="publications.php"
                        class="text-sm font-semibold text-gray-700 hover:text-brand-600 transition-colors py-2">Publications</a>
                </div>
                <div class="relative group h-full flex items-center px-3">
                    <a href="careers.php"
                        class="text-sm font-semibold text-gray-700 hover:text-brand-600 transition-colors py-2">Careers</a>
                </div>
                <div class="relative group h-full flex items-center px-3">
                    <a href="events.php"
                        class="text-sm font-semibold text-gray-700 hover:text-brand-600 transition-colors py-2">News
                        & Event</a>
                </div>

                <!-- Search & CTA -->
                <div class="flex items-center ml-6 gap-3">
                    <button class="text-gray-400 hover:text-brand-600 p-2">
                        <!--<svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">-->
                        <!--    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"-->
                        <!--        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>-->
                        <!--</svg>-->
                    </button>
                    <a href="contact.php"
                        class="bg-accent-500 hover:bg-accent-600 text-white text-xs font-bold uppercase tracking-wider px-5 py-3 rounded shadow-sm transition-colors">
                        Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="hidden md:hidden bg-white border-t border-gray-100" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="index.php"
                class="block px-3 py-2 rounded-md text-base font-semibold text-gray-700 hover:text-brand-600 hover:bg-gray-50">Home</a>
            <a href="about.php"
                class="block px-3 py-2 rounded-md text-base font-semibold text-gray-700 hover:text-brand-600 hover:bg-gray-50">About</a>
            <a href="#research"
                class="block px-3 py-2 rounded-md text-base font-semibold text-gray-700 hover:text-brand-600 hover:bg-gray-50">Research</a>
            <a href="publications.php"
                class="block px-3 py-2 rounded-md text-base font-semibold text-gray-700 hover:text-brand-600 hover:bg-gray-50">Publications</a>
            <a href="careers.php"
                class="block px-3 py-2 rounded-md text-base font-semibold text-gray-700 hover:text-brand-600 hover:bg-gray-50">Careers</a>
            <a href="events.php"
                class="block px-3 py-2 rounded-md text-base font-semibold text-gray-700 hover:text-brand-600 hover:bg-gray-50">News
                & Event</a>
            <div class="border-t border-gray-100 pt-4 pb-3">
                <a href="#contact"
                    class="block w-full text-center bg-accent-500 text-white font-bold py-3 rounded shadow hover:bg-accent-600 transition-colors">Contact
                    Us</a>
            </div>
        </div>
    </div>

    <script>
        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const closedIcon = document.getElementById('menu-icon-closed');
            const openedIcon = document.getElementById('menu-icon-opened');

            if (menu.classList.contains('hidden')) {
                menu.classList.remove('hidden');
                closedIcon.classList.add('hidden');
                openedIcon.classList.remove('hidden');
            } else {
                menu.classList.add('hidden');
                closedIcon.classList.remove('hidden');
                openedIcon.classList.add('hidden');
            }
        }
    </script>
</header>
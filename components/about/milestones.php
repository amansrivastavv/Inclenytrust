<section class="py-24 bg-white relative overflow-hidden" id="milestones" x-data="{ 
    scrollLeft() { $refs.slider.scrollBy({ left: -350, behavior: 'smooth' }) }, 
    scrollRight() { $refs.slider.scrollBy({ left: 350, behavior: 'smooth' }) } 
}">
    <!-- Background Decor -->
    <div class="absolute top-0 right-0 w-1/3 h-full bg-slate-50 skew-x-12 transform origin-top-right -z-0"></div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <!-- Header -->
        <div class="flex flex-col md:flex-row items-end justify-between mb-16 gap-6">
            <div class="max-w-2xl">
                <span class="text-accent-500 font-bold tracking-widest uppercase text-xs">Our Journey</span>
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-brand-900 mt-3">Decades of Impact</h2>
                <p class="text-slate-500 mt-4 text-lg">From a single idea in 1980 to a global force for health equity
                    today.</p>
            </div>

            <!-- Navigation Controls -->
            <div class="flex gap-2">
                <button @click="scrollLeft()"
                    class="h-10 w-10 rounded-full border border-slate-200 flex items-center justify-center text-slate-400 hover:bg-brand-50 hover:text-brand-900 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                </button>
                <button @click="scrollRight()"
                    class="h-10 w-10 rounded-full bg-brand-900 flex items-center justify-center text-white shadow-lg hover:bg-brand-800 transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Horizontal Scroll Container -->
        <div x-ref="slider"
            class="flex overflow-x-hidden pb-12 gap-8 snap-x snap-mandatory scrollbar-hide -mx-4 px-4 md:mx-0 md:px-0 scroll-smooth">

            <!-- 1980 -->
            <div class="min-w-[300px] md:min-w-[350px] snap-center">
                <div class="relative group h-full">
                    <div
                        class="absolute inset-0 bg-brand-900 rounded-2xl transform translate-y-2 translate-x-2 transition-transform group-hover:translate-y-4 group-hover:translate-x-4">
                    </div>
                    <div
                        class="relative bg-white border border-slate-200 p-8 rounded-2xl h-full flex flex-col justify-between hover:-translate-y-1 transition-transform duration-300">
                        <div>
                            <span
                                class="text-6xl font-serif font-bold text-slate-100 absolute top-4 right-4 z-0">80</span>
                            <div class="relative z-10">
                                <div class="text-accent-500 font-bold text-xl mb-2">1980</div>
                                <h3 class="text-2xl font-bold text-brand-900 mb-4 font-serif">Foundation</h3>
                                <p class="text-slate-600 leading-relaxed text-sm">
                                    Established as a "Network of Networks" to build research capacity in the developing
                                    world, originally funded by the Rockefeller Foundation.
                                </p>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <span class="text-xs font-bold uppercase tracking-widest text-brand-400">The
                                Beginning</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 1990s -->
            <div class="min-w-[300px] md:min-w-[350px] snap-center">
                <div class="relative group h-full">
                    <div
                        class="absolute inset-0 bg-brand-900 rounded-2xl transform translate-y-2 translate-x-2 transition-transform group-hover:translate-y-4 group-hover:translate-x-4">
                    </div>
                    <div
                        class="relative bg-white border border-slate-200 p-8 rounded-2xl h-full flex flex-col justify-between hover:-translate-y-1 transition-transform duration-300">
                        <div>
                            <span
                                class="text-6xl font-serif font-bold text-slate-100 absolute top-4 right-4 z-0">95</span>
                            <div class="relative z-10">
                                <div class="text-accent-500 font-bold text-xl mb-2">1995</div>
                                <h3 class="text-2xl font-bold text-brand-900 mb-4 font-serif">Global Expansion</h3>
                                <p class="text-slate-600 leading-relaxed text-sm">
                                    Expanded to 7 regional networks (INCLEN-Africa, INCLEN-Asia, INCLEN-Latin America),
                                    creating a truly global south-to-south collaboration platform.
                                </p>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <span class="text-xs font-bold uppercase tracking-widest text-brand-400">Scale Up</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2009 -->
            <div class="min-w-[300px] md:min-w-[350px] snap-center">
                <div class="relative group h-full">
                    <div
                        class="absolute inset-0 bg-brand-900 rounded-2xl transform translate-y-2 translate-x-2 transition-transform group-hover:translate-y-4 group-hover:translate-x-4">
                    </div>
                    <div
                        class="relative bg-white border border-slate-200 p-8 rounded-2xl h-full flex flex-col justify-between hover:-translate-y-1 transition-transform duration-300">
                        <div>
                            <span
                                class="text-6xl font-serif font-bold text-slate-100 absolute top-4 right-4 z-0">09</span>
                            <div class="relative z-10">
                                <div class="text-accent-500 font-bold text-xl mb-2">2009</div>
                                <h3 class="text-2xl font-bold text-brand-900 mb-4 font-serif">SOMAARTH Launched</h3>
                                <p class="text-slate-600 leading-relaxed text-sm">
                                    Establishment of the Demographic, Development, and Environmental Surveillance Site
                                    (DDESS) in Palwal, Haryana, covering 200,000 lives.
                                </p>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <span
                                class="text-xs font-bold uppercase tracking-widest text-brand-400">Infrastructure</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2013 -->
            <div class="min-w-[300px] md:min-w-[350px] snap-center">
                <div class="relative group h-full">
                    <div
                        class="absolute inset-0 bg-brand-900 rounded-2xl transform translate-y-2 translate-x-2 transition-transform group-hover:translate-y-4 group-hover:translate-x-4">
                    </div>
                    <div
                        class="relative bg-white border border-slate-200 p-8 rounded-2xl h-full flex flex-col justify-between hover:-translate-y-1 transition-transform duration-300">
                        <div>
                            <span
                                class="text-6xl font-serif font-bold text-slate-100 absolute top-4 right-4 z-0">13</span>
                            <div class="relative z-10">
                                <div class="text-accent-500 font-bold text-xl mb-2">2013</div>
                                <h3 class="text-2xl font-bold text-brand-900 mb-4 font-serif">INDT-NMI Innovation</h3>
                                <p class="text-slate-600 leading-relaxed text-sm">
                                    Developed and validated the INCLEN Diagnostic Tool for Neuro-Developmental
                                    Disorders, setting a new standard for low-resource settings.
                                </p>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <span class="text-xs font-bold uppercase tracking-widest text-brand-400">Technology</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2024 -->
            <div class="min-w-[300px] md:min-w-[350px] snap-center">
                <div class="relative group h-full">
                    <div
                        class="absolute inset-0 bg-brand-900 rounded-2xl transform translate-y-2 translate-x-2 transition-transform group-hover:translate-y-4 group-hover:translate-x-4">
                    </div>
                    <div
                        class="relative bg-white border border-slate-200 p-8 rounded-2xl h-full flex flex-col justify-between hover:-translate-y-1 transition-transform duration-300">
                        <div>
                            <span
                                class="text-6xl font-serif font-bold text-slate-100 absolute top-4 right-4 z-0">24</span>
                            <div class="relative z-10">
                                <div class="text-accent-500 font-bold text-xl mb-2">2024</div>
                                <h3 class="text-2xl font-bold text-brand-900 mb-4 font-serif">Future Focused</h3>
                                <p class="text-slate-600 leading-relaxed text-sm">
                                    Leading the charge on climate health, precision public health, and AI-driven
                                    epidemiological surveillance.
                                </p>
                            </div>
                        </div>
                        <div class="mt-8 pt-6 border-t border-slate-100">
                            <span class="text-xs font-bold uppercase tracking-widest text-brand-400">Vision</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
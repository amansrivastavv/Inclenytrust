<section class="py-24 bg-white" id="team">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <span class="text-accent-500 font-bold tracking-widest uppercase text-xs">Our People</span>
            <h2 class="text-3xl md:text-5xl font-serif font-bold text-brand-900 mt-3 mb-6">Governance & Team</h2>
        </div>

        <!-- Custom Tabs -->
        <div x-data="{ activeTab: 'board' }" class="w-full">
            <div class="flex flex-wrap justify-center gap-2 mb-16">
                <!-- Tab Buttons with Sliding Look -->
                <div
                    class="bg-brand-50 p-1.5 rounded-full inline-flex flex-wrap justify-center border border-brand-100">
                    <button @click="activeTab = 'board'"
                        :class="{ 'bg-white text-brand-900 shadow-md': activeTab === 'board', 'text-slate-500 hover:text-brand-700': activeTab !== 'board' }"
                        class="px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest transition-all duration-300">
                        Board of Trustees
                    </button>
                    <button @click="activeTab = 'leadership'"
                        :class="{ 'bg-white text-brand-900 shadow-md': activeTab === 'leadership', 'text-slate-500 hover:text-brand-700': activeTab !== 'leadership' }"
                        class="px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest transition-all duration-300">
                        Leadership
                    </button>
                    <button @click="activeTab = 'investors'"
                        :class="{ 'bg-white text-brand-900 shadow-md': activeTab === 'investors', 'text-slate-500 hover:text-brand-700': activeTab !== 'investors' }"
                        class="px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest transition-all duration-300">
                        Investors
                    </button>
                    <button @click="activeTab = 'team'"
                        :class="{ 'bg-white text-brand-900 shadow-md': activeTab === 'team', 'text-slate-500 hover:text-brand-700': activeTab !== 'team' }"
                        class="px-8 py-3 rounded-full text-xs font-bold uppercase tracking-widest transition-all duration-300">
                        Management Team
                    </button>
                </div>
            </div>

            <!-- Board Content -->
            <div x-show="activeTab === 'board'" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

                <!-- Member 1 -->
                <div class="group relative overflow-hidden rounded-2xl bg-slate-200">
                    <div class="aspect-[3/4] w-full overflow-hidden">
                        <img src="https://images.pexels.com/photos/8460157/pexels-photo-8460157.jpeg"
                            alt="Dr. Virander S. Chauhan"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <!-- Overlay Info -->
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-brand-900/95 via-brand-900/70 to-transparent p-6 pt-24 text-left transition-all duration-300">
                        <div
                            class="transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="font-serif text-xl font-bold text-white">Dr. Virander S. Chauhan</h3>
                            <p class="mt-1 text-xs font-bold uppercase tracking-widest text-accent-500">Chairperson</p>
                            <div class="grid grid-rows-[0fr] transition-all duration-300 group-hover:grid-rows-[1fr]">
                                <p
                                    class="overflow-hidden text-sm text-brand-100 opacity-0 transition-opacity duration-500 group-hover:opacity-100 mt-2">
                                    Scientist & Former Director, ICGEB
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 2 -->
                <div class="group relative overflow-hidden rounded-2xl bg-slate-200">
                    <div class="aspect-[3/4] w-full overflow-hidden">
                        <img src="https://images.pexels.com/photos/19135065/pexels-photo-19135065.jpeg"
                            alt="Dr. K. Srinath Reddy"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-brand-900/95 via-brand-900/70 to-transparent p-6 pt-24 text-left transition-all duration-300">
                        <div
                            class="transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="font-serif text-xl font-bold text-white">Dr. K. Srinath Reddy</h3>
                            <p class="mt-1 text-xs font-bold uppercase tracking-widest text-slate-300">Board Member</p>
                            <div class="grid grid-rows-[0fr] transition-all duration-300 group-hover:grid-rows-[1fr]">
                                <p
                                    class="overflow-hidden text-sm text-brand-100 opacity-0 transition-opacity duration-500 group-hover:opacity-100 mt-2">
                                    President, PHFI
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 3 -->
                <div class="group relative overflow-hidden rounded-2xl bg-slate-200">
                    <div class="aspect-[3/4] w-full overflow-hidden">
                        <img src="https://images.pexels.com/photos/5215009/pexels-photo-5215009.jpeg"
                            alt="Dr. Nandini K. Kumar"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-brand-900/95 via-brand-900/70 to-transparent p-6 pt-24 text-left transition-all duration-300">
                        <div
                            class="transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="font-serif text-xl font-bold text-white">Dr. Nandini K. Kumar</h3>
                            <p class="mt-1 text-xs font-bold uppercase tracking-widest text-slate-300">Board Member</p>
                            <div class="grid grid-rows-[0fr] transition-all duration-300 group-hover:grid-rows-[1fr]">
                                <p
                                    class="overflow-hidden text-sm text-brand-100 opacity-0 transition-opacity duration-500 group-hover:opacity-100 mt-2">
                                    Former DG (Sr. Grade), ICMR
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 4 -->
                <div class="group relative overflow-hidden rounded-2xl bg-slate-200">
                    <div class="aspect-[3/4] w-full overflow-hidden">
                        <img src="https://images.pexels.com/photos/6129452/pexels-photo-6129452.jpeg"
                            alt="Mr. Raghupathi Cavale"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-brand-900/95 via-brand-900/70 to-transparent p-6 pt-24 text-left transition-all duration-300">
                        <div
                            class="transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="font-serif text-xl font-bold text-white">Mr. Raghupathi Cavale</h3>
                            <p class="mt-1 text-xs font-bold uppercase tracking-widest text-slate-300">Board Member</p>
                            <div class="grid grid-rows-[0fr] transition-all duration-300 group-hover:grid-rows-[1fr]">
                                <p
                                    class="overflow-hidden text-sm text-brand-100 opacity-0 transition-opacity duration-500 group-hover:opacity-100 mt-2">
                                    Tech & Strategy Advisor
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Member 5 -->
                <div class="group relative overflow-hidden rounded-2xl bg-slate-200">
                    <div class="aspect-[3/4] w-full overflow-hidden">
                        <img src="https://images.pexels.com/photos/8376154/pexels-photo-8376154.jpeg"
                            alt="Dr. Anurag Agrawal"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-brand-900/95 via-brand-900/70 to-transparent p-6 pt-24 text-left transition-all duration-300">
                        <div
                            class="transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="font-serif text-xl font-bold text-white">Dr. Anurag Agrawal</h3>
                            <p class="mt-1 text-xs font-bold uppercase tracking-widest text-slate-300">Board Member</p>
                            <div class="grid grid-rows-[0fr] transition-all duration-300 group-hover:grid-rows-[1fr]">
                                <p
                                    class="overflow-hidden text-sm text-brand-100 opacity-0 transition-opacity duration-500 group-hover:opacity-100 mt-2">
                                    Director, IGIB
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Leadership Content -->
            <div x-show="activeTab === 'leadership'" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto">

                <!-- Lead 1 -->
                <div class="group relative overflow-hidden rounded-2xl bg-slate-200">
                    <div class="aspect-[3/4] w-full overflow-hidden">
                        <img src="https://images.pexels.com/photos/12660379/pexels-photo-12660379.jpeg"
                            alt="Dr. N.K. Arora"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-brand-900/95 via-brand-900/80 to-transparent p-8 pt-32 text-left transition-all duration-300">
                        <div
                            class="transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="font-serif text-3xl font-bold text-white mb-1">Dr. N.K. Arora</h3>
                            <p class="text-sm font-bold uppercase tracking-widest text-accent-500 mb-4">Executive
                                Director</p>
                            <div class="grid grid-rows-[0fr] transition-all duration-300 group-hover:grid-rows-[1fr]">
                                <p
                                    class="overflow-hidden text-slate-200 opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                                    Steering INCLEN's global vision. A renowned leader in public health policy and
                                    implementation research.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Lead 2 -->
                <div class="group relative overflow-hidden rounded-2xl bg-slate-200">
                    <div class="aspect-[3/4] w-full overflow-hidden">
                        <img src="https://images.pexels.com/photos/13422326/pexels-photo-13422326.jpeg"
                            alt="Dr. Manoj Kumar Das"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-brand-900/95 via-brand-900/80 to-transparent p-8 pt-32 text-left transition-all duration-300">
                        <div
                            class="transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="font-serif text-3xl font-bold text-white mb-1">Dr. Manoj Kumar Das</h3>
                            <p class="text-sm font-bold uppercase tracking-widest text-brand-400 mb-4">Director
                                (Projects)</p>
                            <div class="grid grid-rows-[0fr] transition-all duration-300 group-hover:grid-rows-[1fr]">
                                <p
                                    class="overflow-hidden text-slate-200 opacity-0 transition-opacity duration-500 group-hover:opacity-100">
                                    Leading large-scale clinical projects and fostering research excellence across the
                                    network.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Investors Content -->
            <div x-show="activeTab === 'investors'" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                    <!-- Styled Funders List -->
                    <div
                        class="bg-slate-50 p-8 rounded-xl flex items-center justify-center text-center font-bold text-slate-500 hover:bg-white hover:text-brand-900 hover:shadow-lg transition-all border border-transparent hover:border-slate-100 min-h-[120px] group">
                        <span class="group-hover:scale-110 transition-transform duration-300">Bill & Melinda Gates
                            Foundation</span>
                    </div>
                    <div
                        class="bg-slate-50 p-8 rounded-xl flex items-center justify-center text-center font-bold text-slate-500 hover:bg-white hover:text-brand-900 hover:shadow-lg transition-all border border-transparent hover:border-slate-100 min-h-[120px] group">
                        <span class="group-hover:scale-110 transition-transform duration-300">UNICEF</span>
                    </div>
                    <div
                        class="bg-slate-50 p-8 rounded-xl flex items-center justify-center text-center font-bold text-slate-500 hover:bg-white hover:text-brand-900 hover:shadow-lg transition-all border border-transparent hover:border-slate-100 min-h-[120px] group">
                        <span class="group-hover:scale-110 transition-transform duration-300">USAID</span>
                    </div>
                    <div
                        class="bg-slate-50 p-8 rounded-xl flex items-center justify-center text-center font-bold text-slate-500 hover:bg-white hover:text-brand-900 hover:shadow-lg transition-all border border-transparent hover:border-slate-100 min-h-[120px] group">
                        <span class="group-hover:scale-110 transition-transform duration-300">WHO</span>
                    </div>
                    <div
                        class="bg-slate-50 p-8 rounded-xl flex items-center justify-center text-center font-bold text-slate-500 hover:bg-white hover:text-brand-900 hover:shadow-lg transition-all border border-transparent hover:border-slate-100 min-h-[120px] group">
                        <span class="group-hover:scale-110 transition-transform duration-300">ICMR</span>
                    </div>
                    <div
                        class="bg-slate-50 p-8 rounded-xl flex items-center justify-center text-center font-bold text-slate-500 hover:bg-white hover:text-brand-900 hover:shadow-lg transition-all border border-transparent hover:border-slate-100 min-h-[120px] group">
                        <span class="group-hover:scale-110 transition-transform duration-300">World Bank</span>
                    </div>
                    <div
                        class="bg-slate-50 p-8 rounded-xl flex items-center justify-center text-center font-bold text-slate-500 hover:bg-white hover:text-brand-900 hover:shadow-lg transition-all border border-transparent hover:border-slate-100 min-h-[120px] group">
                        <span class="group-hover:scale-110 transition-transform duration-300">NIH</span>
                    </div>
                    <div
                        class="bg-slate-50 p-8 rounded-xl flex items-center justify-center text-center font-bold text-slate-500 hover:bg-white hover:text-brand-900 hover:shadow-lg transition-all border border-transparent hover:border-slate-100 min-h-[120px] group">
                        <span class="group-hover:scale-110 transition-transform duration-300">Grand Challenges
                            Canada</span>
                    </div>
                </div>
            </div>

            <!-- Management Team Content -->
            <div x-show="activeTab === 'team'" x-transition:enter="transition ease-out duration-500"
                x-transition:enter-start="opacity-0 transform translate-y-4"
                x-transition:enter-end="opacity-100 transform translate-y-0" class="grid md:grid-cols-3 gap-8">

                <!-- Team 1 -->
                <div class="group relative overflow-hidden rounded-2xl bg-slate-200">
                    <div class="aspect-[3/4] w-full overflow-hidden">
                        <img src="https://images.pexels.com/photos/2560891/pexels-photo-2560891.jpeg" alt="Amit Juneja"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-brand-900/95 via-brand-900/70 to-transparent p-6 pt-24 text-left transition-all duration-300">
                        <div
                            class="transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="font-bold text-lg text-white">Amit Juneja</h3>
                            <p class="mt-0.5 text-xs font-bold uppercase tracking-widest text-slate-300">Finance &
                                Administration</p>
                        </div>
                    </div>
                </div>

                <!-- Team 2 -->
                <div class="group relative overflow-hidden rounded-2xl bg-slate-200">
                    <div class="aspect-[3/4] w-full overflow-hidden">
                        <img src="https://images.pexels.com/photos/17221169/pexels-photo-17221169.jpeg"
                            alt="Gaurav Bansal"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-brand-900/95 via-brand-900/70 to-transparent p-6 pt-24 text-left transition-all duration-300">
                        <div
                            class="transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="font-bold text-lg text-white">Gaurav Bansal</h3>
                            <p class="mt-0.5 text-xs font-bold uppercase tracking-widest text-slate-300">Info.
                                Technology (IT)</p>
                        </div>
                    </div>
                </div>

                <!-- Team 3 -->
                <div class="group relative overflow-hidden rounded-2xl bg-slate-200">
                    <div class="aspect-[3/4] w-full overflow-hidden">
                        <img src="https://images.pexels.com/photos/8376232/pexels-photo-8376232.jpeg" alt="Sunita Joti"
                            class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-105">
                    </div>
                    <div
                        class="absolute inset-x-0 bottom-0 bg-gradient-to-t from-brand-900/95 via-brand-900/70 to-transparent p-6 pt-24 text-left transition-all duration-300">
                        <div
                            class="transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">
                            <h3 class="font-bold text-lg text-white">Sunita Joti</h3>
                            <p class="mt-0.5 text-xs font-bold uppercase tracking-widest text-slate-300">Project Manager
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Alpine.js is required for tabs -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
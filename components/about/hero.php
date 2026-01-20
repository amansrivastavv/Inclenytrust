<section class="relative bg-brand-900 py-24 lg:py-32 overflow-hidden flex items-center justify-center min-h-[75vh]">
    <!-- Background Texture/Image -->
    <div class="absolute inset-0 z-0">
        <!-- Subtle World Map Background -->
         <img src="assets/map_network.png"
             class="w-full h-full object-cover opacity-20 mix-blend-soft-light scale-105 animate-[pulse_10s_ease-in-out_infinite]">
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-brand-900 via-brand-900/80 to-brand-900"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 text-center">
        
        <!-- Badge -->
        <div class="inline-flex items-center justify-center mb-8 animate-[fadeInDown_1s_ease-out]">
            <div class="px-4 py-1.5 rounded-full border border-white/10 bg-white/5 backdrop-blur-md flex items-center gap-2 shadow-2xl">
                <span class="flex h-1.5 w-1.5 relative">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-accent-500"></span>
                </span>
                <span class="text-white text-[10px] font-bold uppercase tracking-[0.2em]">Est. 1980</span>
            </div>
        </div>

        <!-- Headline -->
        <h1 class="text-5xl lg:text-7xl font-serif font-bold text-white mb-6 leading-[1.1] tracking-tight animate-[fadeInUp_1s_ease-out_0.2s_both]">
            Advancing Global <br> 
            <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-brand-100 to-brand-300">Health Equity</span>
        </h1>

        <p class="text-lg md:text-xl text-slate-200/90 mb-12 max-w-2xl mx-auto font-light leading-relaxed animate-[fadeInUp_1s_ease-out_0.4s_both]">
            A pioneering network of academic institutions translating rigorous evidence into <span class="text-white font-normal border-b border-accent-500/50 pb-0.5">life-saving policy</span> across the developing world.
        </p>

        <!-- Stats Grid (Premium Floating Cards) -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-6 max-w-5xl mx-auto animate-[fadeInUp_1s_ease-out_0.6s_both]">
            <!-- Card 1 -->
            <div class="group relative bg-gradient-to-br from-white/5 to-white/[0.02] border border-white/10 rounded-xl p-5 backdrop-blur-sm hover:bg-white/10 transition-all duration-500 hover:-translate-y-1">
                <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-accent-500/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="text-3xl md:text-4xl font-serif font-bold text-white mb-1 group-hover:text-accent-400 transition-colors">34</div>
                <div class="text-[10px] text-brand-100 uppercase tracking-widest font-bold opacity-80">Member<br>Countries</div>
            </div>

             <!-- Card 2 -->
             <div class="group relative bg-gradient-to-br from-white/5 to-white/[0.02] border border-white/10 rounded-xl p-5 backdrop-blur-sm hover:bg-white/10 transition-all duration-500 hover:-translate-y-1">
                <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-accent-500/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="text-3xl md:text-4xl font-serif font-bold text-white mb-1 group-hover:text-accent-400 transition-colors">89</div>
                <div class="text-[10px] text-brand-100 uppercase tracking-widest font-bold opacity-80">Partner<br>Institutes</div>
            </div>

             <!-- Card 3 -->
             <div class="group relative bg-gradient-to-br from-white/5 to-white/[0.02] border border-white/10 rounded-xl p-5 backdrop-blur-sm hover:bg-white/10 transition-all duration-500 hover:-translate-y-1">
                <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-accent-500/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="text-3xl md:text-4xl font-serif font-bold text-white mb-1 group-hover:text-accent-400 transition-colors">400k+</div>
                <div class="text-[10px] text-brand-100 uppercase tracking-widest font-bold opacity-80">Populations<br>Monitored</div>
            </div>

             <!-- Card 4 -->
             <div class="group relative bg-gradient-to-br from-white/5 to-white/[0.02] border border-white/10 rounded-xl p-5 backdrop-blur-sm hover:bg-white/10 transition-all duration-500 hover:-translate-y-1">
                <div class="absolute top-0 left-0 w-full h-[1px] bg-gradient-to-r from-transparent via-accent-500/50 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                <div class="text-3xl md:text-4xl font-serif font-bold text-white mb-1 group-hover:text-accent-400 transition-colors">2K+</div>
                <div class="text-[10px] text-brand-100 uppercase tracking-widest font-bold opacity-80">Total<br>Publications</div>
            </div>
        </div>

        <!-- Subtle Scroll Indicator -->
        <div class="absolute bottom-12 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-brand-400 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                </path>
            </svg>
        </div>

    </div>
</section>
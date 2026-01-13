<!-- STRATEGIC PARTNERS SPOTLIGHT -->
<section class="py-32 bg-slate-50 relative overflow-hidden" id="partners">
    <!-- Sophisticated Background Elements -->
    <div class="absolute top-0 left-0 w-full h-full pointer-events-none">
        <div class="absolute top-[-10%] left-[-5%] w-[40%] h-[40%] bg-brand-100/30 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-[-10%] right-[-5%] w-[40%] h-[40%] bg-accent-100/20 rounded-full blur-[120px]">
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="flex flex-col md:flex-row items-end justify-between mb-20 gap-8">
            <div class="max-w-2xl">
                <div
                    class="inline-flex items-center gap-2 px-4 py-1.5 bg-brand-900 text-white rounded-full text-[10px] font-bold uppercase tracking-[0.2em] mb-6 shadow-xl">
                    <span class="w-2 h-2 rounded-full bg-accent-500 animate-pulse"></span>
                    Our Global Network
                </div>
                <h2 class="text-5xl md:text-7xl font-serif font-bold text-brand-900 mb-6 leading-[1.1]">
                    Strategic <span class="relative">
                        Collaborators
                        <svg class="absolute -bottom-2 left-0 w-full" viewBox="0 0 300 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 15C50 5 150 5 295 15" stroke="#f7610c" stroke-width="4"
                                stroke-linecap="round" />
                        </svg>
                    </span>
                </h2>
            </div>
            <p class="text-gray-500 max-w-sm text-lg leading-relaxed border-l-4 border-brand-200 pl-6 mb-2">
                Empowering global healthcare through multi-disciplinary research and high-impact partnerships.
            </p>
        </div>
    </div>

    <!-- Infinite Scroll Container - Massive Scale -->
    <div class="partners-slider">
        <div class="partners-track">
            <?php
            $partners = [
                ['name' => 'World Health Organization', 'short' => 'WHO', 'desc' => 'Leading global policy framework and disease surveillance initiatives.', 'img' => 'https://cdn.who.int/media/images/default-source/imported/who-staff.tmb-768v.jpg?sfvrsn=7f0ca422_14&quot'],
                ['name' => 'UNICEF', 'short' => 'UNICEF', 'desc' => 'Mission-critical collaboration for maternal and child health survival.', 'img' => 'https://images.unsplash.com/photo-1488521787991-ed7bbaae773c?q=80&w=600&h=400&auto=format&fit=crop'],
                ['name' => 'NIPI Norway', 'short' => 'NIPI', 'desc' => 'Scaling innovations for maternal health through India-Norway partnership.', 'img' => 'https://images.unsplash.com/photo-1516549655169-df83a0774514?q=80&w=600&h=400&auto=format&fit=crop'],
                ['name' => 'Public Health Foundation', 'short' => 'PHFI', 'desc' => 'Strengthening public health research ecosystems and institutional capacity.', 'img' => 'https://images.indianexpress.com/2024/03/IIPH-Hyderabad.jpeg?w=1600'],
                ['name' => 'The World Bank', 'short' => 'World Bank', 'desc' => 'Strategic technical and financial partner in large-scale research systems.', 'img' => 'https://centerforearthethics.org/wp-content/uploads/2023/04/World-Bank-1024x570-1.jpg'],
                ['name' => 'Ministry of Health', 'short' => 'MoHFW', 'desc' => 'Translating field research into national health programs and policies.', 'img' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTV4AhYtjzvKsim--vtCn36xlUuoCHIiBhqbA&s'],
                ['name' => 'ICMR India', 'short' => 'ICMR', 'desc' => 'The apex body for biomedical research, serving as a vital scientific partner.', 'img' => 'https://upload.wikimedia.org/wikipedia/en/a/a3/Indian_Council_of_Medical_Research_Logo.svg'],
                ['name' => 'Gates Foundation', 'short' => 'BMGF', 'desc' => 'Global supporter for nutritional surveillance and vaccine effectiveness.', 'img' => 'https://images.unsplash.com/photo-1509099836639-18ba1795216d?q=80&w=600&h=400&auto=format&fit=crop'],
                ['name' => 'Health Institute', 'short' => 'NIH', 'desc' => 'Advancing fundamental knowledge about nature and behavior of living systems.', 'img' => 'https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=600&h=400&auto=format&fit=crop'],
                ['name' => 'USAID Security', 'short' => 'USAID', 'desc' => 'Promoting resilient societies while advancing global health security.', 'img' => 'https://images.unsplash.com/photo-1532938911079-1b06ac7ceec7?q=80&w=600&h=400&auto=format&fit=crop'],
            ];

            // Render for infinite loop
            $displayPartners = array_merge($partners, $partners);

            foreach ($displayPartners as $partner): ?>
                <div class="partner-card-wrapper">
                    <div class="partner-card-inner group">
                        <!-- Huge Image Context -->
                        <div class="partner-logo-container">
                            <img src="<?php echo $partner['img']; ?>" alt="<?php echo $partner['name']; ?>"
                                class="w-full h-full object-cover grayscale group-hover:grayscale-0 group-hover:scale-110 transition-all duration-700">
                            <!-- Overlay Badge -->
                            <div
                                class="absolute top-4 right-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold text-brand-900 opacity-0 group-hover:opacity-100 transition-opacity">
                                <?php echo $partner['short']; ?>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="flex-grow flex flex-col items-center">
                            <h4
                                class="text-2xl font-serif font-bold text-brand-900 mb-4 group-hover:text-accent-500 transition-colors">
                                <?php echo $partner['name']; ?>
                            </h4>
                            <p class="text-gray-500 leading-relaxed font-light mb-8">
                                <?php echo $partner['desc']; ?>
                            </p>

                            <!-- Interaction Indicator -->
                            <div
                                class="mt-auto flex items-center gap-2 text-brand-600 font-bold text-sm opacity-0 group-hover:opacity-100 transition-all translate-y-2 group-hover:translate-y-0">
                                View Case Study
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Card Number Pattern -->
                        <div
                            class="absolute -bottom-4 -left-4 text-brand-50 font-serif text-8xl font-black select-none pointer-events-none opacity-0 group-hover:opacity-100 transition-opacity">
                            <?php echo $partner['short'][0]; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
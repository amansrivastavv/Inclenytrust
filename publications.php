<?php
$pageTitle = "Publications | INCLEN Trust";
include 'components/head.php';
include 'components/header.php';

$publications = json_decode(file_get_contents('assets/data/publications.json'), true) ?? [];
?>

<main class="bg-white min-h-screen font-sans selection:bg-accent-500 selection:text-white">
    <!-- Header Section -->
    <section class="relative bg-white pt-20 pb-24 md:pt-28 md:pb-32 overflow-hidden border-b border-slate-100">
        <div class="absolute inset-0 z-0 pointer-events-none select-none overflow-hidden">
            <div class="absolute top-[-5%] right-[-10%] w-[70%] h-[120%] opacity-[0.02] mix-blend-multiply">
                <img src="assets/map_network.png" class="w-full h-full object-contain rotate-12">
            </div>
            <div
                class="absolute top-1/2 left-[-5%] w-[40rem] h-[40rem] bg-accent-500/5 rounded-full blur-[120px] -translate-y-1/2">
            </div>
            <!-- <div
                class="absolute -bottom-10 -left-10 text-[120px] md:text-[200px] font-serif font-black text-slate-200/40 whitespace-nowrap -rotate-3 leading-none tracking-tighter">
                Research
            </div> -->
        </div>

        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <!-- Left Content -->
                <div class="max-w-3xl">
                    <div class="flex items-center gap-4 mb-6 md:mb-8">
                        <span class="w-8 md:w-12 h-1 md:h-1.5 bg-accent-500 rounded-full"></span>
                        <nav class="text-[10px] md:text-[12px] font-black uppercase tracking-[0.4em] text-brand-900/60">
                            Knowledge Dissemination
                        </nav>
                    </div>

                    <h1
                        class="text-5xl md:text-7xl lg:text-8xl font-serif text-brand-900 font-bold leading-[0.95] tracking-tighter mb-8 md:mb-10">
                        Our <span
                            class="text-transparent bg-clip-text bg-gradient-to-r from-accent-500 to-orange-400 italic font-light pr-4">Publications</span>
                    </h1>

                    <p class="text-slate-500 text-lg md:text-xl font-light leading-relaxed max-w-xl opacity-80">
                        Evidence generated from our global network sites, contributing to the scientific community and
                        informing policy frameworks.
                    </p>
                </div>

                <!-- Right Side Visual -->
                <div class="hidden lg:block relative">
                    <div class="relative z-10 ml-auto w-fit">
                        <!-- Main Image -->
                        <div
                            class="w-[500px] h-[400px] rounded-[40px] overflow-hidden shadow-2xl shadow-brand-900/20 border-[6px] border-white transform rotate-2 hover:rotate-0 transition-transform duration-700">
                            <img src="assets/publication_hero.jpg"
                                class="w-full h-full object-cover grayscale hover:grayscale-0 transition-all duration-700">
                            <div
                                class="absolute inset-0 bg-gradient-to-tr from-brand-900/40 to-transparent mix-blend-multiply pointer-events-none">
                            </div>
                        </div>

                        <!-- Floating Stat Card -->
                        <div
                            class="absolute -bottom-10 -left-16 bg-white/90 backdrop-blur-xl p-8 rounded-[32px] shadow-[0_30px_60px_-15px_rgba(0,0,0,0.1)] border border-white/50 max-w-[280px]">
                            <div class="flex items-center gap-3 mb-4">
                                <div
                                    class="w-10 h-10 rounded-full bg-accent-50 flex items-center justify-center text-accent-500">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                                        </path>
                                    </svg>
                                </div>
                                <div class="text-[10px] font-bold uppercase tracking-[0.2em] text-accent-500">Impact
                                </div>
                            </div>
                            <div class="text-5xl font-serif font-bold text-slate-900 mb-2 leading-none">450+</div>
                            <div class="text-xs text-slate-500 font-medium leading-relaxed">Peer-Reviewed Papers
                                Published Globally since 2010.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Publications Grid -->
    <section class="py-20 bg-slate-50/50">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <?php foreach ($publications as $pub): ?>
                    <a href="publication-details.php?slug=<?php echo $pub['slug']; ?>"
                        class="group bg-white rounded-[32px] p-8 border border-slate-100 hover:border-brand-100 shadow-xl shadow-slate-200/40 hover:shadow-2xl hover:shadow-brand-900/5 transition-all duration-500 flex flex-col h-full">
                        <div class="mb-8 relative overflow-hidden rounded-2xl aspect-[4/3]">
                            <img src="<?php echo $pub['thumbnail']; ?>"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-6">
                                <span
                                    class="text-white text-xs font-bold uppercase tracking-widest flex items-center gap-2">
                                    Read Paper <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="flex-grow">
                            <div
                                class="flex items-center gap-3 mb-4 text-[10px] font-bold uppercase tracking-widest text-slate-400">
                                <span class="text-accent-500">
                                    <?php echo date('Y', strtotime($pub['date'])); ?>
                                </span>
                                <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                                <span class="line-clamp-1">
                                    <?php echo $pub['journal']; ?>
                                </span>
                            </div>

                            <h3
                                class="text-xl font-serif font-bold text-slate-900 mb-4 leading-tight group-hover:text-brand-900 transition-colors">
                                <?php echo $pub['title']; ?>
                            </h3>

                            <p class="text-slate-500 text-sm leading-relaxed line-clamp-3 mb-6">
                                <?php echo $pub['abstract']; ?>
                            </p>
                        </div>

                        <div class="pt-6 border-t border-slate-50 mt-auto">
                            <p class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">
                                Authors
                            </p>
                            <p class="text-sm font-semibold text-slate-700 mt-1 line-clamp-1">
                                <?php echo implode(', ', $pub['authors']); ?>
                            </p>
                        </div>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>

<?php include 'components/footer.php'; ?>
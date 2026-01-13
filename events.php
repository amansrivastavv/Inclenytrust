<?php
$pageTitle = "News & Events | INCLEN Trust";
include 'components/head.php';
include 'components/header.php';

$events_json = file_get_contents('assets/data/events.json');
$events = json_decode($events_json, true);

// Filter logic
$news_items = array_filter($events, function ($e) { return $e['type'] === 'news'; });
$upcoming_events = array_filter($events, function ($e) { return $e['type'] === 'upcoming'; });
$past_events = array_filter($events, function ($e) { return $e['type'] === 'past'; });
?>

<main class="bg-white min-h-screen font-sans selection:bg-accent-500 selection:text-white">
    <section class="relative bg-white pt-20 pb-24 md:pt-28 md:pb-40 overflow-hidden border-b border-slate-100">
        <!-- Brand Watermark & Background Elements -->
        <div class="absolute inset-0 z-0 pointer-events-none select-none overflow-hidden">
            <div class="absolute top-[-5%] md:top-[-10%] right-[-10%] w-[80%] md:w-[70%] h-[110%] md:h-[120%] opacity-[0.04] mix-blend-multiply">
                <img src="assets/map_network.png" class="w-full h-full object-contain rotate-12">
            </div>
            <div class="absolute top-1/2 left-[-5%] w-[30rem] md:w-[40rem] h-[30rem] md:h-[40rem] bg-accent-500/5 rounded-full blur-[100px] md:blur-[120px] -translate-y-1/2"></div>

            <div class="absolute -bottom-10 -left-10 text-[120px] md:text-[220px] font-serif font-black text-slate-100/40 whitespace-nowrap -rotate-3 leading-none tracking-tighter">
                Global Network
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <div class="grid lg:grid-cols-2 gap-12 md:gap-16 items-end">
                <div class="max-w-3xl">
                    <div class="flex items-center gap-4 mb-6 md:mb-8">
                        <span class="w-8 md:w-12 h-1 md:h-1.5 bg-accent-500 rounded-full"></span>
                        <nav class="text-[10px] md:text-[12px] font-black uppercase tracking-[0.4em] md:tracking-[0.5em] text-brand-900/60">
                            Frontiers of Research
                        </nav>
                    </div>
                    
                    <h1 class="text-5xl md:text-8xl lg:text-[100px] font-serif text-brand-900 font-bold leading-[0.95] tracking-tighter mb-8 md:mb-10">
                        News & <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-accent-500 to-orange-400 italic font-light pr-4">Global Events</span>
                    </h1>
                    
                    <p class="text-slate-500 text-lg md:text-2xl font-light leading-relaxed max-w-2xl opacity-80">
                        Synthesizing village-level surveillance with global policy shifts. Join our network of 34 countries in defining the future of clinical epidemiology.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-start sm:items-center gap-6 md:gap-8 bg-white/60 md:bg-white/40 backdrop-blur-md p-6 md:p-8 rounded-[30px] md:rounded-[40px] border border-white/80 shadow-xl shadow-slate-200/40 w-full sm:w-fit">
                    <div class="flex -space-x-4">
                        <div class="w-12 h-12 md:w-14 md:h-14 rounded-full border-[4px] md:border-[6px] border-white bg-slate-100 overflow-hidden shadow-md">
                            <img src="https://i.pravatar.cc/150?u=researcher1" class="w-full h-full object-cover">
                        </div>
                        <div class="w-12 h-12 md:w-14 md:h-14 rounded-full border-[4px] md:border-[6px] border-white bg-slate-100 overflow-hidden shadow-md">
                            <img src="https://i.pravatar.cc/150?u=researcher2" class="w-full h-full object-cover">
                        </div>
                        <div class="w-12 h-12 md:w-14 md:h-14 rounded-full border-[4px] md:border-[6px] border-white bg-gradient-to-br from-accent-500 to-orange-400 flex items-center justify-center text-[10px] md:text-[12px] font-bold text-white shadow-md">
                            400k+
                        </div>
                    </div>
                    <div class="flex flex-col">
                        <div class="text-[9px] md:text-[11px] uppercase font-black tracking-[0.2em] md:tracking-[0.3em] text-accent-500 mb-0.5 md:mb-1">
                            Current Outreach
                        </div>
                        <div class="text-xl md:text-2xl font-serif font-bold text-brand-900 leading-tight">
                            Population <span class="italic font-light text-slate-400">Monitored</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Grid -->
    <div class="max-w-7xl mx-auto px-5 sm:px-8 py-12 md:py-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 md:gap-16">
            
            <!-- Left Column: Upcoming Events -->
            <div class="lg:col-span-8 space-y-12 md:space-y-16">
                <div id="upcoming" class="scroll-mt-32">
                    <div class="flex items-center justify-between mb-8 md:mb-12">
                        <div>
                            <h2 class="text-[10px] md:text-xs font-bold text-accent-500 uppercase tracking-[0.3em] mb-3 md:mb-4">Technical Calendar</h2>
                            <h3 class="text-3xl md:text-4xl font-serif font-bold text-slate-900">Featured <span class="italic font-normal text-slate-400">Engagements</span></h3>
                        </div>
                    </div>

                    <div class="space-y-8 md:space-y-12">
                        <?php foreach($upcoming_events as $event): ?>
                            <a href="event-details.php?id=<?php echo $event['id']; ?>" class="group block bg-white rounded-[32px] md:rounded-[40px] border border-slate-100 hover:border-brand-100 transition-all duration-500 hover:shadow-[0_40px_80px_-20px_rgba(0,0,0,0.08)] overflow-hidden">
                                <div class="flex flex-col lg:flex-row h-full">
                                    <!-- Image Section -->
                                    <div class="w-full lg:w-64 h-56 md:h-64 lg:h-auto overflow-hidden relative flex-shrink-0">
                                        <img src="<?php echo $event['image']; ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-[1.5s]">
                                        <!-- Date Badge Overlay -->
                                        <div class="absolute top-4 left-4 md:top-6 md:left-6 w-14 h-18 md:w-16 md:h-20 bg-white/95 backdrop-blur-md rounded-2xl flex flex-col items-center justify-center shadow-xl">
                                            <span class="text-[9px] md:text-[10px] font-bold text-accent-500 uppercase tracking-widest mb-0.5"><?php echo date('M', strtotime($event['date'])); ?></span>
                                            <span class="text-xl md:text-2xl font-serif font-bold text-slate-900"><?php echo date('d', strtotime($event['date'])); ?></span>
                                        </div>
                                    </div>
                                    
                                    <!-- Details -->
                                    <div class="flex-grow p-6 md:p-10">
                                        <div class="flex flex-wrap items-center gap-3 md:gap-4 mb-4 md:mb-5">
                                            <span class="px-2.5 py-1 bg-brand-900 text-white text-[8px] md:text-[9px] font-bold uppercase tracking-widest rounded-full">
                                                <?php echo $event['category']; ?>
                                            </span>
                                            <span class="text-slate-400 text-[9px] md:text-[10px] font-bold uppercase tracking-widest flex items-center gap-1.5">
                                                <svg class="w-3.5 h-3.5 text-accent-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                                <?php echo $event['venue']; ?>
                                            </span>
                                        </div>
                                        <h4 class="text-xl md:text-2xl lg:text-3xl font-serif font-bold text-slate-900 mb-3 md:mb-4 group-hover:text-brand-600 transition-colors">
                                            <?php echo $event['title']; ?>
                                        </h4>
                                        <p class="text-slate-500 text-sm md:text-base leading-relaxed mb-6 md:mb-8 italic">"<?php echo $event['short_details']; ?>"</p>
                                        
                                        <div class="flex items-center justify-between pt-5 md:pt-6 border-t border-slate-50">
                                            <span class="text-[9px] md:text-[10px] font-bold text-slate-400 uppercase tracking-widest flex items-center gap-2">
                                                <span class="w-2 h-2 rounded-full bg-accent-500 border-4 border-accent-100"></span>
                                                <?php echo $event['time']; ?>
                                            </span>
                                            <span class="text-xs font-bold text-brand-900 opacity-0 lg:opacity-100 translate-x-4 lg:group-hover:translate-x-0 transition-all">Explore Event &rarr;</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Archive Section -->
                <div id="past" class="pt-16 md:pt-20 border-t border-slate-100 scroll-mt-32">
                    <h3 class="text-2xl font-serif font-bold text-slate-900 mb-8 md:mb-10">Historical <span class="italic font-normal text-slate-400">Milestones</span></h3>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 md:gap-6">
                        <?php foreach($past_events as $event): ?>
                            <a href="event-details.php?id=<?php echo $event['id']; ?>" class="flex items-center gap-4 md:gap-6 p-4 md:p-6 rounded-3xl bg-slate-50 border border-transparent hover:border-slate-200 hover:bg-white transition-all group">
                                <div class="w-14 h-14 md:w-16 md:h-16 rounded-2xl overflow-hidden bg-slate-200 flex-shrink-0 grayscale group-hover:grayscale-0 transition-all duration-500">
                                    <img src="<?php echo $event['image']; ?>" class="w-full h-full object-cover">
                                </div>
                                <div class="overflow-hidden">
                                    <span class="text-[8px] md:text-[9px] font-bold text-accent-500 uppercase tracking-widest block mb-1"><?php echo $event['date']; ?></span>
                                    <h5 class="text-xs md:text-sm font-bold text-slate-900 group-hover:text-brand-900 transition-colors line-clamp-1"><?php echo $event['title']; ?></h5>
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>

            <!-- Right Column: Sticky News Announcements -->
            <aside class="lg:col-span-4">
                <div class="sticky top-32 space-y-8">
                    <div class="bg-brand-900 rounded-[32px] md:rounded-[40px] p-8 md:p-10 text-white shadow-2xl shadow-brand-900/20 relative overflow-hidden group">
                        <!-- Decoration -->
                        <div class="absolute -top-10 -right-10 w-32 h-32 bg-white/5 rounded-full blur-2xl group-hover:scale-150 transition-transform duration-1000"></div>
                        
                        <div class="relative z-10">
                            <h3 class="text-[10px] md:text-[11px] font-bold uppercase tracking-[0.3em] text-accent-500 mb-6 md:mb-8 flex items-center gap-2">
                                News Feed
                                <span class="w-2 h-2 rounded-full bg-accent-500 animate-pulse"></span>
                            </h3>
                            
                            <div class="space-y-8 md:space-y-10">
                                <?php foreach($news_items as $item): ?>
                                    <a href="event-details.php?id=<?php echo $item['id']; ?>" class="block group/item">
                                        <span class="text-[8px] md:text-[9px] font-bold text-white/40 uppercase tracking-widest block mb-2"><?php echo $item['date']; ?></span>
                                        <h4 class="text-lg md:text-xl font-serif font-bold text-white mb-3 md:mb-4 leading-tight group-hover/item:text-accent-500 transition-colors"><?php echo $item['title']; ?></h4>
                                        <p class="text-brand-100 text-xs md:text-sm font-light leading-relaxed line-clamp-2 opacity-60 mb-4"><?php echo $item['short_details']; ?></p>
                                        <span class="text-[9px] md:text-[10px] font-bold uppercase tracking-widest text-accent-500 flex items-center gap-2 opacity-0 group-hover/item:opacity-100 transition-opacity">
                                            Full Report
                                            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                        </span>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                            
                            <div class="mt-8 md:mt-12 pt-6 md:pt-8 border-t border-white/10">
                                <a href="contact.php" class="inline-flex items-center gap-2 text-[10px] md:text-xs font-bold text-white hover:text-accent-500 transition-colors uppercase tracking-widest font-sans">
                                    Media Inquiries
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</main>

<?php include 'components/footer.php'; ?>

<style>
    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
    
    /* Ensure smooth scaling without text cut-off */
    .group:hover .group-hover\:shadow-xl {
        transform: translateY(-8px);
    }
</style>
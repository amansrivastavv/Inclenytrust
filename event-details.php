<?php
$events_json = file_get_contents('assets/data/events.json');
$events = json_decode($events_json, true);

$event_id = $_GET['id'] ?? null;
$event = null;

if ($event_id) {
    foreach ($events as $e) {
        if ($e['id'] === $event_id) {
            $event = $e;
            break;
        }
    }
}

if (!$event) {
    header("Location: events.php");
    exit();
}

$pageTitle = $event['title'] . " | INCLEN Insights";
include 'components/head.php';
include 'components/header.php';
?>

<main class="bg-white min-h-screen selection:bg-accent-500 selection:text-white">
    <!-- Breadcrumb Layer -->
    <div class="bg-white border-b border-slate-100 py-6">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center gap-4 text-[10px] font-bold uppercase tracking-widest text-slate-400">
                <a href="index.php" class="hover:text-brand-900 transition-colors">Home</a>
                <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                <a href="events.php" class="hover:text-brand-900 transition-colors">News & Events</a>
                <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                <span class="text-brand-900"><?php echo $event['category']; ?></span>
            </div>
        </div>
    </div>

    <!-- Article Content Layout -->
    <section class="py-20 md:py-32">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">

                <!-- Main Column -->
                <article class="lg:col-span-8">
                    <header class="mb-12">
                        <div class="flex flex-wrap gap-3 mb-8">
                            <span
                                class="px-4 py-1.5 bg-brand-900 text-white text-[10px] font-bold uppercase tracking-[0.2em] rounded-full shadow-xl shadow-brand-900/10">
                                <?php echo $event['type']; ?>
                            </span>
                            <span
                                class="px-4 py-1.5 bg-white border border-slate-200 text-slate-500 text-[10px] font-bold uppercase tracking-[0.2em] rounded-full">
                                ID: <?php echo $event['id']; ?>
                            </span>
                        </div>
                        <h1
                            class="text-5xl md:text-7xl font-serif font-bold text-slate-900 leading-[1.1] tracking-tight mb-8">
                            <?php echo $event['title']; ?>
                        </h1>
                        <p
                            class="text-xl md:text-2xl font-light text-slate-500 italic leading-relaxed border-l-4 border-accent-500 pl-8">
                            <?php echo $event['short_details']; ?>
                        </p>
                    </header>

                    <!-- Featured Visual -->
                    <figure class="mb-16 rounded-[48px] overflow-hidden shadow-2xl relative aspect-[16/9]">
                        <img src="<?php echo $event['image']; ?>" class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 to-transparent pointer-events-none">
                        </div>
                    </figure>

                    <!-- Main Story -->
                    <div class="prose prose-slate prose-xl max-w-none text-slate-600 leading-[1.8]">
                        <p
                            class="mb-10 first-letter:text-6xl first-letter:font-serif first-letter:font-bold first-letter:mr-3 first-letter:float-left first-letter:text-brand-900">
                            <?php echo $event['full_details']; ?>
                        </p>

                        <p class="mb-10">
                            Our global network spanning 34 countries provides the foundational datasets that drive these
                            initiatives.
                            By connecting local clinical research with global health policy, INCLEN ensures that every
                            site
                            contributes to shared intelligence and resilient health systems.
                        </p>

                        <div class="bg-brand-50 rounded-[40px] p-12 my-16 relative overflow-hidden group">
                            <div
                                class="absolute top-0 right-0 w-64 h-64 bg-accent-500/5 rounded-full blur-3xl -mr-32 -mt-32">
                            </div>
                            <h4 class="text-2xl font-serif font-bold text-brand-900 mb-6 relative z-10">Strategic
                                Inquiry</h4>
                            <p class="text-slate-600 text-lg mb-10 relative z-10">For institutional collaboration, data
                                access requests, or specific inquiries regarding this initiative, please connect with
                                the Executive Office.</p>
                            <a href="contact.php"
                                class="relative z-10 inline-flex items-center gap-3 px-10 py-5 bg-brand-900 text-white font-bold uppercase tracking-[0.2em] text-xs rounded-full hover:bg-black transition-all hover:scale-105 shadow-2xl shadow-brand-900/20">
                                Connect with IEO Delhi
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </article>

                <!-- Sidebar Metadata -->
                <aside class="lg:col-span-4">
                    <div class="sticky top-32 space-y-8">
                        <!-- Brief Box -->
                        <div class="bg-white rounded-[40px] p-10 border border-slate-100 shadow-xl shadow-slate-200/50">
                            <h5
                                class="text-[11px] font-bold uppercase tracking-[0.3em] text-accent-500 mb-8 pb-4 border-b border-slate-50">
                                Logistics & Context</h5>

                            <div class="space-y-10">
                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-brand-50 flex items-center justify-center text-brand-900">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">
                                            Occurrence</p>
                                        <p class="text-slate-900 font-bold"><?php echo $event['date']; ?></p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-brand-50 flex items-center justify-center text-brand-900">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                            </path>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <p class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-1">
                                            Venue / Hub</p>
                                        <p class="text-slate-900 font-bold"><?php echo $event['venue']; ?></p>
                                    </div>
                                </div>

                                <div class="flex items-start gap-4">
                                    <div
                                        class="w-12 h-12 rounded-2xl bg-brand-50 flex items-center justify-center text-brand-900">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z">
                                            </path>
                                        </svg>
                                    </div>
                                    <div class="flex flex-wrap gap-2">
                                        <?php foreach ($event['tags'] as $tag): ?>
                                            <span
                                                class="px-3 py-1 bg-slate-100 text-slate-600 text-[9px] font-bold uppercase tracking-widest rounded-full"><?php echo $tag; ?></span>
                                        <?php endforeach; ?>
                                    </div>
                                </div>
                            </div>

                            <button onclick="window.print()"
                                class="w-full mt-12 py-4 bg-slate-900 text-white text-[10px] font-bold uppercase tracking-widest rounded-2xl hover:bg-accent-500 transition-colors">
                                Download Article PDF
                            </button>
                        </div>

                        <!-- CTA Bar -->
                        <div class="bg-accent-500 rounded-[40px] p-10 text-white shadow-2xl shadow-accent-500/20">
                            <h5 class="text-2xl font-serif font-bold mb-4">Support Our Research</h5>
                            <p class="text-white/80 text-sm mb-6">Drive innovation in clinical epidemiology. Explore
                                partnership frameworks today.</p>
                            <a href="index.php#partners"
                                class="block w-full text-center py-4 bg-white text-accent-500 font-bold text-[10px] uppercase tracking-widest rounded-2xl hover:bg-brand-900 hover:text-white transition-all">
                                Partner Network &rarr;
                            </a>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php include 'components/footer.php'; ?>
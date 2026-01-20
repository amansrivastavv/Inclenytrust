<?php
$publications = json_decode(file_get_contents('assets/data/publications.json'), true) ?? [];
$slug = $_GET['slug'] ?? null;
$pub = null;

if ($slug) {
    foreach ($publications as $p) {
        if ($p['slug'] === $slug) {
            $pub = $p;
            break;
        }
    }
}

if (!$pub) {
    header("Location: publications.php");
    exit();
}

$pageTitle = $pub['title'] . " | INCLEN Publications";
include 'components/head.php';
include 'components/header.php';
?>

<main class="bg-white min-h-screen selection:bg-accent-500 selection:text-white">
    <!-- Breadcrumb -->
    <div class="bg-white border-b border-slate-100 py-6">
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex items-center gap-4 text-[10px] font-bold uppercase tracking-widest text-slate-400">
                <a href="index.php" class="hover:text-brand-900 transition-colors">Home</a>
                <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                <a href="publications.php" class="hover:text-brand-900 transition-colors">Publications</a>
                <span class="w-1 h-1 rounded-full bg-slate-300"></span>
                <span class="text-brand-900 line-clamp-1 max-w-[200px]">
                    <?php echo $pub['title']; ?>
                </span>
            </div>
        </div>
    </div>

    <section class="py-20 md:py-32">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-16">

                <!-- Main Details -->
                <article class="lg:col-span-7">
                    <header class="mb-12">
                        <div class="flex flex-wrap gap-3 mb-8">
                            <span
                                class="px-4 py-1.5 bg-brand-900 text-white text-[10px] font-bold uppercase tracking-[0.2em] rounded-full shadow-xl shadow-brand-900/10">
                                Publication
                            </span>
                            <span
                                class="px-4 py-1.5 bg-white border border-slate-200 text-slate-500 text-[10px] font-bold uppercase tracking-[0.2em] rounded-full">
                                <?php echo $pub['journal']; ?>
                            </span>
                        </div>
                        <h1
                            class="text-4xl md:text-6xl font-serif font-bold text-slate-900 leading-[1.1] tracking-tight mb-8">
                            <?php echo $pub['title']; ?>
                        </h1>
                    </header>

                    <div class="space-y-12">
                        <!-- Abstract -->
                        <div>
                            <h3 class="text-xs font-bold text-accent-500 uppercase tracking-widest mb-4">Abstract</h3>
                            <p
                                class="text-xl md:text-2xl font-light text-slate-600 leading-relaxed italic border-l-4 border-slate-200 pl-6">
                                "
                                <?php echo $pub['abstract']; ?>"
                            </p>
                        </div>

                        <!-- Authors & Citation -->
                        <div class="grid md:grid-cols-2 gap-8">
                            <div>
                                <h3 class="text-xs font-bold text-accent-500 uppercase tracking-widest mb-4">Authors
                                </h3>
                                <ul class="space-y-2">
                                    <?php foreach ($pub['authors'] as $author): ?>
                                        <li class="flex items-center gap-3 text-slate-700 font-semibold">
                                            <span class="w-2 h-2 rounded-full bg-brand-200"></span>
                                            <?php echo $author; ?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div>
                                <h3 class="text-xs font-bold text-accent-500 uppercase tracking-widest mb-4">Date</h3>
                                <p class="text-lg font-serif text-slate-900 font-bold">
                                    <?php echo date('F j, Y', strtotime($pub['date'])); ?>
                                </p>
                            </div>
                        </div>

                        <!-- Citation Box -->
                        <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100">
                            <h3 class="text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-3">Suggested
                                Citation</h3>
                            <p class="font-mono text-sm text-slate-600 leading-relaxed select-all">
                                <?php echo $pub['citation']; ?>
                            </p>
                        </div>
                    </div>
                </article>

                <!-- Sidebar: PDF & Actions -->
                <aside class="lg:col-span-5 space-y-8">
                    <div class="sticky top-32">
                        <!-- PDF Preview Card -->
                        <div
                            class="bg-white rounded-[40px] p-8 border border-slate-100 shadow-2xl shadow-slate-200/50 text-center">
                            <div
                                class="aspect-[1/1.4] bg-slate-100 rounded-2xl mb-8 overflow-hidden relative group border border-slate-200">
                                <!-- Placeholder for PDF Preview / Thumbnail -->
                                <img src="<?php echo $pub['thumbnail']; ?>"
                                    class="w-full h-full object-cover opacity-50 blur-sm group-hover:blur-0 group-hover:opacity-80 transition-all duration-700">

                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div
                                        class="w-20 h-20 bg-white rounded-full flex items-center justify-center shadow-xl text-red-500 group-hover:scale-110 transition-transform">
                                        <svg class="w-10 h-10" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H8z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <a href="<?php echo $pub['pdf_url']; ?>" target="_blank"
                                class="block w-full py-5 bg-brand-900 text-white text-xs font-bold uppercase tracking-[0.2em] rounded-2xl hover:bg-red-600 transition-colors shadow-xl shadow-brand-900/20 mb-4">
                                View PDF Document
                            </a>

                            <a href="download.php?id=<?php echo $pub['id']; ?>"
                                class="block w-full py-5 bg-white border border-slate-200 text-slate-700 text-xs font-bold uppercase tracking-[0.2em] rounded-2xl hover:bg-slate-50 transition-colors">
                                Download File
                            </a>

                            <p class="mt-6 text-[10px] text-slate-400 font-bold uppercase tracking-widest">
                                PDF • English • 2.4 MB
                            </p>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php include 'components/footer.php'; ?>
<?php
$pageTitle = "Careers | INCLEN Trust";
include 'components/head.php';
include 'components/header.php';

$jobs = json_decode(file_get_contents('assets/data/careers.json'), true) ?? [];
?>

<main class="bg-white min-h-screen font-sans selection:bg-accent-500 selection:text-white">
    <!-- Hero Section -->
    <section class="relative bg-white pt-20 pb-24 md:pt-28 md:pb-32 overflow-hidden border-b border-slate-100">
        <!-- Background Elements -->
        <div class="absolute inset-0 z-0 pointer-events-none select-none overflow-hidden">
            <div class="absolute top-[-5%] right-[-10%] w-[70%] h-[120%] opacity-[0.02] mix-blend-multiply">
                <img src="assets/map_network.png" class="w-full h-full object-contain rotate-12">
            </div>
            <div
                class="absolute top-1/2 left-[-5%] w-[40rem] h-[40rem] bg-accent-500/5 rounded-full blur-[120px] -translate-y-1/2">
            </div>
        </div>

        <div class="max-w-7xl mx-auto px-6 md:px-8 relative z-10">
            <div class="max-w-4xl">
                <div class="flex items-center gap-4 mb-6 md:mb-8">
                    <span class="w-8 md:w-12 h-1 md:h-1.5 bg-accent-500 rounded-full"></span>
                    <nav class="text-[10px] md:text-[12px] font-black uppercase tracking-[0.4em] text-brand-900/60">
                        Join Our Team
                    </nav>
                </div>

                <h1
                    class="text-5xl md:text-7xl lg:text-8xl font-serif text-brand-900 font-bold leading-[0.95] tracking-tighter mb-8 md:mb-10">
                    Shape the Future of <br>
                    <span
                        class="text-transparent bg-clip-text bg-gradient-to-r from-accent-500 to-orange-400 italic font-light pr-4">Global
                        Health</span>
                </h1>

                <div class="prose prose-lg text-slate-500 font-light leading-relaxed max-w-2xl">
                    <p class="mb-6">
                        INCLEN provides a dynamic multi-discipline learning environment for our employees. Each employee
                        is attached to a mentor for enhancing their skills and believes in the "Learning by Doing"
                        philosophy.
                    </p>
                    <p class="mb-6">
                        We are committed to creating future leaders in Research and encourage employees to gain
                        experience from diverse disciplines under challenging environments. Thus, working with us is an
                        opportunity to enhance your professional skills along with hands-on training in aligned
                        disciplines.
                    </p>
                    <p class="text-brand-900 font-medium border-l-4 border-accent-500 pl-4 italic">
                        Presently, we invite applications from highly motivated professionals for the following
                        positions:
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Careers Interface -->
    <section class="py-16 bg-slate-50/50 min-h-[600px]" id="openings">
        <div class="max-w-7xl mx-auto px-6 md:px-8">
            <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">

                <!-- Sidebar Filters -->
                <aside class="w-full lg:w-80 flex-shrink-0 space-y-8">
                    <div
                        class="bg-white rounded-3xl p-6 shadow-xl shadow-slate-200/50 border border-slate-100 sticky top-24">
                        <h3 class="text-lg font-serif font-bold text-slate-900 mb-6">Filter Openings</h3>

                        <!-- Keywords -->
                        <div class="mb-6">
                            <label
                                class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Keywords</label>
                            <div class="relative">
                                <input type="text" id="keywordSearch" placeholder="e.g. Data, Research..."
                                    class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-accent-500 focus:ring-1 focus:ring-accent-500 transition-all text-slate-700 placeholder:text-slate-400">
                                <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="mb-8">
                            <label
                                class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-2">Location</label>
                            <div class="relative">
                                <input type="text" id="locationSearch" placeholder="e.g. New Delhi, Palwal"
                                    class="w-full pl-10 pr-4 py-3 bg-slate-50 border border-slate-200 rounded-xl text-sm focus:outline-none focus:border-accent-500 focus:ring-1 focus:ring-accent-500 transition-all text-slate-700 placeholder:text-slate-400">
                                <svg class="w-4 h-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2"
                                    fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                        </div>

                        <!-- Job Type -->
                        <div class="mb-6">
                            <label class="block text-xs font-bold uppercase tracking-wider text-slate-400 mb-4">Job
                                Type</label>
                            <div class="space-y-3">
                                <?php
                                $types = ['Freelance', 'Full Time', 'Internship', 'Part Time', 'Temporary', 'Contractual'];
                                foreach ($types as $type):
                                    ?>
                                    <label class="flex items-center gap-3 group cursor-pointer">
                                        <div class="relative flex items-center">
                                            <input type="checkbox" name="job_type" value="<?php echo $type; ?>"
                                                class="peer appearance-none w-5 h-5 border-2 border-slate-300 rounded-md checked:bg-accent-500 checked:border-accent-500 transition-all">
                                            <svg class="absolute w-3 h-3 text-white left-1 top-1 opacity-0 peer-checked:opacity-100 pointer-events-none transition-opacity"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                                    d="M5 13l4 4L19 7"></path>
                                            </svg>
                                        </div>
                                        <span class="text-sm text-slate-600 group-hover:text-slate-900 transition-colors">
                                            <?php echo $type; ?>
                                        </span>
                                    </label>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <button id="resetFilters"
                            class="w-full py-2 text-xs font-bold uppercase tracking-widest text-slate-400 hover:text-accent-500 transition-colors border-t border-slate-100 pt-6">
                            Reset All Filters
                        </button>
                    </div>
                </aside>

                <!-- Job Listings -->
                <div class="flex-grow">
                    <div class="flex items-center justify-between mb-8">
                        <h2 class="text-2xl font-serif font-bold text-slate-900">Current Openings</h2>
                        <span class="text-sm font-medium text-slate-500"><span id="jobCount">
                                <?php echo count($jobs); ?>
                            </span> positions found</span>
                    </div>

                    <!-- Empty State (Hidden) -->
                    <div id="noResults"
                        class="hidden text-center py-20 bg-white rounded-3xl border border-slate-100 border-dashed">
                        <div
                            class="w-16 h-16 bg-slate-50 rounded-full flex items-center justify-center mx-auto mb-4 text-slate-400">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">No listings found</h3>
                        <p class="text-slate-500">Try adjusting your search or filters to find what you're looking for.
                        </p>
                    </div>

                    <!-- Job List -->
                    <div class="space-y-4" id="jobList">
                        <?php foreach ($jobs as $job): ?>
                            <div class="job-card group relative bg-white rounded-2xl p-6 md:p-8 border border-slate-100 shadow-sm hover:shadow-xl hover:shadow-brand-900/5 hover:border-brand-100 transition-all duration-300"
                                data-title="<?php echo strtolower($job['title']); ?>"
                                data-location="<?php echo strtolower($job['location']); ?>"
                                data-type="<?php echo $job['type']; ?>">

                                <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
                                    <div class="space-y-3">
                                        <div class="flex items-center gap-3 text-xs font-bold uppercase tracking-wider">
                                            <span
                                                class="px-3 py-1 rounded-full bg-accent-50 text-accent-600 border border-accent-100">
                                                <?php echo $job['type']; ?>
                                            </span>
                                            <span class="flex items-center gap-1.5 text-slate-400">
                                                <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor"
                                                    viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                    </path>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                </svg>
                                                <?php echo $job['location']; ?>
                                            </span>
                                            <span class="w-1 h-1 rounded-full bg-slate-300 hidden md:block"></span>
                                            <span class="text-slate-400 hidden md:block">Posted
                                                <?php echo date('M d, Y', strtotime($job['posted_date'])); ?>
                                            </span>
                                        </div>

                                        <h3
                                            class="text-xl md:text-2xl font-serif font-bold text-slate-900 group-hover:text-brand-900 transition-colors">
                                            <?php echo $job['title']; ?>
                                        </h3>
                                    </div>

                                    <a href="<?php echo $job['pdf_url']; ?>" target="_blank"
                                        class="flex items-center gap-3 md:justify-end group/btn">
                                        <span
                                            class="text-sm font-bold uppercase tracking-widest text-slate-500 group-hover/btn:text-accent-500 transition-colors">
                                            View Description
                                        </span>
                                        <div
                                            class="w-10 h-10 rounded-full border border-slate-200 flex items-center justify-center group-hover/btn:bg-accent-500 group-hover/btn:border-accent-500 group-hover/btn:text-white transition-all duration-300">
                                            <svg class="w-4 h-4 transform group-hover/btn:-rotate-45 transition-transform duration-300"
                                                fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                            </svg>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const jobList = document.getElementById('jobList');
        const jobCards = document.querySelectorAll('.job-card');
        const keywordInput = document.getElementById('keywordSearch');
        const locationInput = document.getElementById('locationSearch');
        const typeCheckboxes = document.querySelectorAll('input[name="job_type"]');
        const noResults = document.getElementById('noResults');
        const jobCount = document.getElementById('jobCount');
        const resetBtn = document.getElementById('resetFilters');

        function filterJobs() {
            const keyword = keywordInput.value.toLowerCase();
            const location = locationInput.value.toLowerCase();
            const checkedTypes = Array.from(typeCheckboxes)
                .filter(cb => cb.checked)
                .map(cb => cb.value);

            let visibleCount = 0;

            jobCards.forEach(card => {
                const title = card.dataset.title;
                const cardLocation = card.dataset.location;
                const type = card.dataset.type;

                const matchesKeyword = title.includes(keyword);
                const matchesLocation = cardLocation.includes(location);
                const matchesType = checkedTypes.length === 0 || checkedTypes.includes(type);

                if (matchesKeyword && matchesLocation && matchesType) {
                    card.style.display = 'block';
                    visibleCount++;
                } else {
                    card.style.display = 'none';
                }
            });

            // Update UI
            jobCount.textContent = visibleCount;
            if (visibleCount === 0) {
                noResults.classList.remove('hidden');
                jobList.classList.add('hidden');
            } else {
                noResults.classList.add('hidden');
                jobList.classList.remove('hidden');
            }
        }

        // Event Listeners
        keywordInput.addEventListener('input', filterJobs);
        locationInput.addEventListener('input', filterJobs);
        typeCheckboxes.forEach(cb => cb.addEventListener('change', filterJobs));

        resetBtn.addEventListener('click', function () {
            keywordInput.value = '';
            locationInput.value = '';
            typeCheckboxes.forEach(cb => cb.checked = false);
            filterJobs();
        });
    });
</script>

<?php include 'components/footer.php'; ?>
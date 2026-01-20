<?php
// global-map.php
$countries_json = file_get_contents(__DIR__ . '/../../assets/data/countries.json');
?>

<section class="py-16 md:py-24 bg-slate-50 text-slate-800 relative overflow-hidden" id="global-footprint">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="text-center mb-12 md:mb-16">
            <div class="w-12 h-1 bg-accent-500 mx-auto mb-6 md:mb-8"></div>
            <h2 class="text-3xl md:text-5xl font-serif font-bold mb-4 md:mb-6">Our Global Footprint</h2>
            <p class="text-slate-600 text-base md:text-lg max-w-2xl mx-auto leading-relaxed font-light px-4">
                Spanning 34 countries, INCLEN bridges the gap between local clinical research and global health policy.
            </p>
        </div>

        <!-- Main Container -->
        <div
            class="flex flex-col lg:flex-row bg-white border border-slate-200 rounded-2xl md:rounded-3xl shadow-2xl shadow-slate-200/50 overflow-hidden">

            <!-- Sidebar: Search & List -->
            <div
                class="w-full lg:w-80 border-b lg:border-b-0 lg:border-r border-slate-100 flex flex-col h-[400px] lg:h-[650px] bg-slate-50/30">
                <div class="p-6 space-y-4">
                    <div class="flex items-center justify-between">
                        <h3 class="text-xs font-bold uppercase tracking-widest text-slate-400">Network</h3>
                        <span id="country-count"
                            class="text-[10px] font-bold bg-accent-100 text-accent-600 px-2 py-0.5 rounded-full">34
                            Nations</span>
                    </div>
                    <!-- Search Box -->
                    <div class="relative group">
                        <input type="text" id="country-search" placeholder="Search countries..."
                            class="w-full pl-10 pr-4 py-2.5 bg-white border border-slate-200 rounded-xl text-sm focus:ring-2 focus:ring-accent-500 focus:border-accent-500 transition-all outline-none">
                        <svg class="w-4 h-4 absolute left-3.5 top-3.5 text-slate-400 group-focus-within:text-accent-500 transition-colors"
                            fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                    </div>
                </div>

                <div id="country-list" class="flex-1 overflow-y-auto custom-scrollbar px-4 pb-6 space-y-1">
                    <!-- Loaded via JS -->
                </div>
            </div>

            <!-- Map Viewport -->
            <div class="flex-1 p-4 md:p-10 relative bg-white flex flex-col">
                <div id="map-container" class="w-full h-[400px] md:h-full min-h-[350px] md:min-h-[500px]"></div>

                <!-- Bottom Legend & Quick Info -->
                <div
                    class="mt-6 pt-6 border-t border-slate-50 flex flex-col md:flex-row items-center justify-between gap-4">
                    <div
                        class="flex flex-wrap justify-center md:justify-start gap-4 md:gap-8 text-[11px] font-bold tracking-widest uppercase text-slate-400">
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 bg-accent-500 rounded-full shadow-lg shadow-accent-500/40"></span>
                            <span>Participating Hubs</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <span class="w-3 h-3 bg-slate-100 rounded-full border border-slate-200"></span>
                            <span>Global Partners</span>
                        </div>
                    </div>
                    <div class="text-[10px] italic text-slate-400">Data updated annually</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scripts for Map -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.17/d3.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/topojson/1.6.9/topojson.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datamaps/0.5.9/datamaps.world.min.js"></script>
<link rel="stylesheet" href="components/home/map-styles.css">

<style>
    #global-footprint .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }

    #global-footprint .custom-scrollbar::-webkit-scrollbar-track {
        background: transparent;
    }

    #global-footprint .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #f97316;
        border-radius: 10px;
    }

    .datamaps-hoverover {
        font-family: 'Inter', sans-serif !important;
        background: #0f172a !important;
        /* Slate 900 */
        color: white !important;
        border: none !important;
        padding: 12px 16px !important;
        border-radius: 12px !important;
        box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04) !important;
    }

    /* Animation for list items */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .list-item-animate {
        animation: fadeInUp 0.3s ease forwards;
    }
</style>

<script>
    (function () {
        const countriesData = <?php echo $countries_json; ?>;
        const container = document.getElementById('map-container');
        const listContainer = document.getElementById('country-list');
        const searchInput = document.getElementById('country-search');
        const countBadge = document.getElementById('country-count');

        // Helper to highlight list items
        function highlightListItem(code) {
            // Remove previous highlights
            document.querySelectorAll('#country-list > div').forEach(el => {
                el.classList.remove('bg-accent-50', 'border-accent-200');
                el.classList.add('border-transparent');
            });

            // Highlight specific item
            const item = document.getElementById(`list-item-${code}`);
            if (item) {
                item.classList.remove('border-transparent');
                item.classList.add('bg-accent-50', 'border-accent-200');
                item.scrollIntoView({ behavior: 'smooth', block: 'center' });
            }
        }

        function unhighlightListItem() {
            document.querySelectorAll('#country-list > div').forEach(el => {
                el.classList.remove('bg-accent-50', 'border-accent-200');
                el.classList.add('border-transparent');
            });
        }

        // Initialize Map
        // Using a distinct hover color for active countries to ensure visibility
        const map = new Datamap({
            element: container,
            projection: 'mercator',
            responsive: true,
            fills: {
                defaultFill: "#f8fafc", // slate-50 (Inactive)
                active: "#f97316",      // orange-500 (Active)
                hover: "#c2410c"        // orange-700 (Active Hover - Darker for contrast)
            },
            data: countriesData.reduce((acc, curr) => {
                acc[curr.code] = {
                    fillKey: 'active',
                    city: curr.city,
                    // Specific highlight override for active data
                    highlightFillColor: '#c2410c',
                    highlightBorderColor: '#ffffff',
                    highlightBorderWidth: 2
                };
                return acc;
            }, {}),
            geographyConfig: {
                borderWidth: 0.8,
                borderColor: '#e2e8f0', // slate-200
                // Global highlight settings (effectively disables hover for non-data countries)
                highlightFillColor: '#f8fafc',
                highlightBorderColor: '#e2e8f0',
                highlightBorderWidth: 0.8,

                popupOnHover: true, // Ensure this is true
                highlightOnHover: true,

                popupTemplate: function (geo, data) {
                    // Strictly check if data exists (meaning it's one of our 34 countries)
                    if (!data) return null;

                    const cityDisplay = data.city || 'National Level';

                    return '<div class="hover-popup">' +
                        '<div class="popup-country">' + geo.properties.name + '</div>' +
                        '<div class="popup-city">Primary Site: ' + cityDisplay + '</div>' +
                        '</div>';
                }
            }
        });

        // Resize handler
        window.addEventListener('resize', () => map.resize());

        // Function to render list
        function renderList(data) {
            listContainer.innerHTML = '';
            countBadge.innerText = `${data.length} Nations`;

            if (data.length === 0) {
                listContainer.innerHTML = '<div class="text-center py-10 text-slate-400 text-xs">No countries found.</div>';
                return;
            }

            data.forEach((country, index) => {
                const item = document.createElement('div');
                item.id = `list-item-${country.code}`;
                item.className = "flex items-center justify-between p-3.5 rounded-xl cursor-pointer transition-all duration-300 hover:bg-white hover:shadow-md border border-transparent hover:border-slate-100 group list-item-animate";
                item.style.animationDelay = `${index * 0.02}s`;

                item.innerHTML = `
                    <div class="flex items-center gap-3">
                        <div class="w-1.5 h-1.5 rounded-full bg-slate-200 group-hover:bg-accent-500 transition-colors"></div>
                        <div>
                            <div class="text-[13px] font-semibold text-slate-700 group-hover:text-slate-900 transition-colors">${country.name}</div>
                            <div class="text-[10px] text-slate-400 uppercase tracking-widest group-hover:text-accent-600/70 transition-colors">${country.city}</div>
                        </div>
                    </div>
                `;

                // Add simple hover logic for map interaction from list
                item.addEventListener('mouseenter', () => {
                    // Programmatically trigger map highlight
                    const update = {};
                    update[country.code] = '#c2410c'; // highlighting color
                    map.updateChoropleth(update);
                });

                item.addEventListener('mouseleave', () => {
                    const update = {};
                    update[country.code] = '#f97316'; // reset to active color
                    map.updateChoropleth(update);
                });

                listContainer.appendChild(item);
            });
        }

        // Initial render
        renderList(countriesData);

        // Search logic
        searchInput.addEventListener('input', (e) => {
            const term = e.target.value.toLowerCase();
            const filtered = countriesData.filter(c =>
                c.name.toLowerCase().includes(term) ||
                c.city.toLowerCase().includes(term)
            );
            renderList(filtered);
        });
    })();
</script>
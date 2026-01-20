<section class="py-24 bg-white" id="presence" x-data="mapHandler()">
    <?php
    $countriesData = file_get_contents('data/presence-countries.json');
    $networksData = file_get_contents('data/presence-networks.json');
    ?>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <span class="text-accent-500 font-bold tracking-widest uppercase text-xs">Global Footprint</span>
            <h2 class="text-3xl md:text-5xl font-serif font-bold text-brand-900 mt-3 mb-6">Our Presence</h2>
            <p class="text-slate-600 max-w-2xl mx-auto">
                With a decentralized network structure, INCLEN ensures local relevance with global impact.
            </p>
        </div>

        <!-- Stats Grid -->
        <div class="grid md:grid-cols-3 gap-6 mb-12">
            <!-- Stat 1 -->
            <div
                class="bg-brand-50 p-6 md:p-8 rounded-2xl border border-brand-100 text-center hover:scale-105 transition-transform duration-300">
                <div class="text-4xl md:text-5xl font-serif font-bold text-accent-500 mb-2">34</div>
                <div class="text-[10px] md:text-xs font-bold uppercase tracking-widest text-brand-900">Countries</div>
                <div class="mt-2 md:mt-4 text-xs md:text-sm text-slate-500">From Southeast Asia to Latin America</div>
            </div>
            <!-- Stat 2 -->
            <div
                class="bg-brand-50 p-6 md:p-8 rounded-2xl border border-brand-100 text-center hover:scale-105 transition-transform duration-300">
                <div class="text-4xl md:text-5xl font-serif font-bold text-accent-500 mb-2">89</div>
                <div class="text-[10px] md:text-xs font-bold uppercase tracking-widest text-brand-900">Institutions
                </div>
                <div class="mt-2 md:mt-4 text-xs md:text-sm text-slate-500">Embedded in premier universities</div>
            </div>
            <!-- Stat 3 -->
            <div
                class="bg-brand-50 p-6 md:p-8 rounded-2xl border border-brand-100 text-center hover:scale-105 transition-transform duration-300">
                <div class="text-4xl md:text-5xl font-serif font-bold text-accent-500 mb-2">7</div>
                <div class="text-[10px] md:text-xs font-bold uppercase tracking-widest text-brand-900">Regional Networks
                </div>
                <div class="mt-2 md:mt-4 text-xs md:text-sm text-slate-500">Coordinated by regional hubs</div>
            </div>
        </div>

        <!-- Leaflet Interactive Map Container -->
        <div
            class="relative bg-slate-100 rounded-2xl md:rounded-3xl overflow-hidden shadow-2xl border border-slate-200 w-full h-[500px] md:h-auto md:aspect-[16/9] group isolate">

            <style>
                /* Google Maps tiles are naturally vibrant, so we keep filters minimal or remove them */
                #inclen-map .leaflet-tile-pane {
                    filter: none;
                }

                /* Ensure markers pop */
                #inclen-map .leaflet-marker-icon,
                #inclen-map .leaflet-marker-shadow {
                    filter: none !important;
                }
            </style>

            <!-- Map Element -->
            <div id="inclen-map" class="absolute inset-0 z-0 bg-slate-50"></div>

            <!-- Subtle shadow overlay for depth -->
            <div class="absolute inset-0 z-10 pointer-events-none shadow-[inset_0_0_40px_rgba(0,0,0,0.1)]"></div>

            <!-- Bottom Controls Overlay -->
            <div
                class="absolute bottom-6 left-1/2 -translate-x-1/2 md:translate-x-0 md:left-6 z-[1000] pointer-events-auto w-max max-w-[90%]">
                <div
                    class="flex bg-white/80 backdrop-blur-md border border-slate-200 p-1.5 rounded-full relative shadow-lg">
                    <!-- Sliding Pill -->
                    <div class="absolute top-1.5 bottom-1.5 rounded-full bg-accent-500 transition-all duration-500 ease-[cubic-bezier(0.34,1.56,0.64,1)] shadow-md"
                        :class="activeFilter === 'networks' ? 'left-1.5 w-[calc(50%-6px)]' : 'left-[calc(50%+3px)] w-[calc(50%-6px)]'">
                    </div>

                    <button @click="setFilter('networks')"
                        class="relative z-10 px-3 md:px-4 py-2 text-[10px] md:text-[11px] font-bold uppercase tracking-wider transition-colors duration-300 w-32 md:w-[140px] text-center"
                        :class="activeFilter === 'networks' ? 'text-white' : 'text-slate-500 hover:text-accent-600'">
                        Regional Networks
                    </button>
                    <button @click="setFilter('countries')"
                        class="relative z-10 px-3 md:px-4 py-2 text-[10px] md:text-[11px] font-bold uppercase tracking-wider transition-colors duration-300 w-32 md:w-[140px] text-center"
                        :class="activeFilter === 'countries' ? 'text-white' : 'text-slate-500 hover:text-accent-600'">
                        Member Countries
                    </button>
                </div>
            </div>

        </div>
    </div>

    <script>
        function mapHandler() {
            return {
                activeFilter: 'networks',
                map: null,
                layers: {
                    networks: null,
                    countries: null
                },
                init() {
                    this.$nextTick(() => {
                        this.initMap();
                    });
                },
                initMap() {
                    // Initialize Map
                    this.map = L.map('inclen-map', {
                        center: [20, 0],
                        zoom: 2,
                        minZoom: 2,
                        maxZoom: 10,
                        zoomControl: false,
                        attributionControl: false,
                        scrollWheelZoom: false
                    });

                    L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
                        maxZoom: 20,
                        attribution: '&copy; Google'
                    }).addTo(this.map);

                    // Manually add Zoom Control to bottom-right
                    L.control.zoom({
                        position: 'bottomright'
                    }).addTo(this.map);



                    // --- Define Custom Icons ---

                    // Country Icon (Orange Dot)
                    const createCountryIcon = (name) => L.divIcon({
                        className: 'custom-map-marker',
                        html: `
                            <div class="relative group">
                                <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-accent-400 opacity-20 group-hover:scale-150 transition-transform duration-500"></span>
                                <span class="relative inline-flex rounded-full h-3 w-3 bg-white border-2 border-accent-500 shadow-[0_0_10px_rgba(249,115,22,0.6)] group-hover:bg-accent-500 group-hover:border-white transition-colors"></span>
                                <div class="absolute -top-8 left-1/2 transform -translate-x-1/2 whitespace-nowrap text-white text-[10px] font-bold uppercase tracking-wider bg-black/80 px-2 py-1 rounded backdrop-blur-sm opacity-0 -translate-y-2 group-hover:opacity-100 group-hover:translate-y-0 transition-all duration-300 pointer-events-none z-50">
                                    ${name}
                                </div>
                            </div>
                        `,
                        iconSize: [12, 12],
                        iconAnchor: [6, 6]
                    });

                    // Network Icon (Larger, distinct)
                    const createNetworkIcon = (name) => L.divIcon({
                        className: 'custom-network-marker',
                        html: `
                             <div class="relative group flex items-center justify-center">
                                <span class="animate-ping absolute inline-flex h-8 w-8 rounded-full bg-accent-500/30 opacity-100 duration-1000"></span>
                                <span class="relative inline-flex rounded-full h-4 w-4 bg-accent-500 border-2 border-white shadow-xl"></span>
                                <div class="absolute -bottom-8 left-1/2 transform -translate-x-1/2 whitespace-nowrap text-white text-[10px] font-bold uppercase tracking-wider bg-black/50 px-2 py-1 rounded backdrop-blur-sm z-50">${name}</div>
                            </div>
                        `,
                        iconSize: [32, 32],
                        iconAnchor: [16, 16]
                    });


                    // --- Load Data ---
                    const countriesData = <?php echo $countriesData ?: '[]'; ?>;
                    const networksData = <?php echo $networksData ?: '[]'; ?>;

                    // --- Create Layers ---

                    // Countries Layer
                    const countryMarkers = countriesData.map(c => {
                        return L.marker([c.lat, c.lng], { icon: createCountryIcon(c.name) });
                    });
                    this.layers.countries = L.layerGroup(countryMarkers);

                    // Networks Layer
                    const networkMarkers = networksData.map(n => {
                        return L.marker([n.lat, n.lng], { icon: createNetworkIcon(n.name) });
                    });
                    this.layers.networks = L.layerGroup(networkMarkers);

                    // Initial State
                    this.updateLayers();
                },
                setFilter(filter) {
                    this.activeFilter = filter;
                    this.updateLayers();
                },
                updateLayers() {
                    // Clear all first
                    if (this.map.hasLayer(this.layers.countries)) this.map.removeLayer(this.layers.countries);
                    if (this.map.hasLayer(this.layers.networks)) this.map.removeLayer(this.layers.networks);

                    // Add active
                    if (this.activeFilter === 'countries') {
                        this.layers.countries.addTo(this.map);
                    } else {
                        this.layers.networks.addTo(this.map);
                    }
                }
            }
        }
    </script>
</section>
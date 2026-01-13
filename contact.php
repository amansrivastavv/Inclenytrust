<?php
$pageTitle = "Contact Us | INCLEN";
include 'components/head.php';
include 'components/header.php';
?>

<main class="bg-slate-50/50">
    <section class="relative bg-brand-900 pt-24 pb-36 overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="assets/hero_bg.png" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-r from-brand-900/95 via-brand-900/70 to-brand-900/30"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <h1 class="text-5xl md:text-7xl font-serif text-white font-bold tracking-tight leading-[1.1]">
                Let's start a <br class="hidden md:block">
                <span
                    class="text-transparent bg-clip-text bg-gradient-to-r from-accent-500 to-amber-400 italic font-light">Conversation</span>
            </h1>
            <p class="text-lg text-white/70 mt-8 max-w-xl font-light leading-relaxed">
                Connect with the INCLEN Executive Office. Whether it's data access, institutional partnership, or global
                research inquiries.
            </p>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 -mt-16 pb-24 relative z-20">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">

            <div class="lg:col-span-8">
                <div class="bg-white rounded-3xl shadow-2xl shadow-slate-200/50 p-8 md:p-12 border border-slate-100">
                    <div class="mb-10">
                        <h2 class="text-3xl font-serif font-bold text-slate-900">Send a Message</h2>
                        <div class="h-1 w-12 bg-accent-500 mt-3"></div>
                    </div>

                    <form action="#" method="POST" class="space-y-8">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-10">
                            <div class="relative group">
                                <label
                                    class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 group-focus-within:text-brand-600 transition-colors">Full
                                    Name</label>
                                <input type="text" placeholder=""
                                    class="w-full pb-3 bg-transparent border-b-2 border-slate-100 focus:border-brand-600 outline-none transition-all text-slate-800 placeholder:text-slate-300">
                            </div>

                            <div class="relative group">
                                <label
                                    class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 group-focus-within:text-brand-600 transition-colors">Email
                                    Address</label>
                                <input type="email" placeholder=""
                                    class="w-full pb-3 bg-transparent border-b-2 border-slate-100 focus:border-brand-600 outline-none transition-all text-slate-800 placeholder:text-slate-300">
                            </div>

                            <div class="relative group">
                                <label
                                    class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 group-focus-within:text-brand-600 transition-colors">Phone</label>
                                <input type="text" placeholder="+91 ..."
                                    class="w-full pb-3 bg-transparent border-b-2 border-slate-100 focus:border-brand-600 outline-none transition-all text-slate-800 placeholder:text-slate-300">
                            </div>

                            <div class="relative group">
                                <label
                                    class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 group-focus-within:text-brand-600 transition-colors">Inquiry
                                    Type</label>
                                <select
                                    class="w-full pb-3 bg-transparent border-b-2 border-slate-100 focus:border-brand-600 outline-none transition-all text-slate-800 appearance-none cursor-pointer">
                                    <option>Research Collaboration</option>
                                    <option>Data Access Request</option>
                                    <option>Technical Support</option>
                                    <option>General Inquiry</option>
                                </select>
                            </div>
                        </div>

                        <div class="relative group">
                            <label
                                class="block text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2 group-focus-within:text-brand-600 transition-colors">How
                                can we help?</label>
                            <textarea rows="4" placeholder="Describe your request..."
                                class="w-full py-3 bg-slate-50/50 px-4 border-2 border-slate-100 rounded-xl focus:border-brand-600 focus:bg-white outline-none transition-all text-slate-800 placeholder:text-slate-300"></textarea>
                        </div>

                        <button type="submit"
                            class="group inline-flex items-center justify-center px-10 py-4 bg-brand-900 text-white font-bold uppercase tracking-widest text-[11px] rounded-full hover:bg-brand-800 transition-all hover:scale-105 active:scale-95 shadow-xl shadow-brand-900/20">
                            Send Message
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                            </svg>
                        </button>
                    </form>
                </div>
            </div>

            <div class="lg:col-span-4 flex flex-col h-full">
                <div
                    class="bg-white p-5 rounded-3xl shadow-xl shadow-slate-200/50 border border-slate-100 overflow-hidden flex-grow mb-6">
                    <div
                        class="rounded-2xl overflow-hidden h-72 grayscale hover:grayscale-0 transition-all duration-500 mb-6 border border-slate-100">
                        <iframe class="w-full h-full"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.2977430684233!2d77.27870007533777!3d28.621289975664894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce3547b463aa3%3A0xa5130e4dca8d1b22!2sF-1%2F5%2C%202nd%20Floor%2C%20Okhla%20Industrial%20Estate%20Phase%20I%2C%20Okhla%20Industrial%20Area%2C%20New%20Delhi%2C%20Delhi%20110020!5e0!3m2!1sen!2sin!4v1705236680246!5m2!1sen!2sin"
                            loading="lazy"></iframe>
                    </div>
                    <div class="px-2">
                        <h4 class="text-xs font-bold text-slate-900 uppercase tracking-wider mb-2">Executive Office</h4>
                        <p class="text-[13px] text-slate-500 leading-relaxed">F-1/5, 2nd Floor, Okhla Industrial Area
                            Phase
                            - 1, New Delhi - 110020</p>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2 gap-4">
                    <div class="bg-brand-900 p-6 rounded-3xl text-white group hover:bg-brand-800 transition-colors">
                        <div
                            class="w-8 h-8 bg-white/10 rounded-lg flex items-center justify-center mb-3 group-hover:scale-110 transition-transform">
                            <svg class="w-4 h-4 text-accent-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-[9px] font-bold text-white/50 uppercase tracking-widest">Email Us</p>
                        <p class="text-[11px] font-medium truncate">ieodelhi@inclentrust.org</p>
                    </div>

                    <div
                        class="bg-white p-6 rounded-3xl border border-slate-100 shadow-lg shadow-slate-200/50 group hover:border-brand-200 transition-colors">
                        <div
                            class="w-8 h-8 bg-slate-50 rounded-lg flex items-center justify-center mb-3 group-hover:bg-brand-50 transition-colors">
                            <svg class="w-4 h-4 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                                </path>
                            </svg>
                        </div>
                        <p class="text-[9px] font-bold text-slate-400 uppercase tracking-widest">Call Us</p>
                        <p class="text-[11px] font-bold text-slate-900">+91-11-47730000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-16 bg-white overflow-hidden relative border-t border-slate-50">
        <div class="max-w-5xl mx-auto px-6 text-center">
            <h2 class="text-3xl font-serif text-slate-900 font-bold mb-6">A Global Research Infrastructure</h2>
            <p class="text-slate-500 leading-relaxed mb-10 max-w-2xl mx-auto">
                With 89 Clinical Epidemiology Units across 34 countries, our network provides a unique platform for
                high-impact multicentric studies.
            </p>
            <div class="flex flex-wrap justify-center gap-12 opacity-80">
                <div class="text-center">
                    <span class="block text-4xl font-serif text-brand-900 font-bold mb-1">34</span>
                    <span class="text-[10px] uppercase tracking-widest font-bold text-slate-400">Countries
                        Connected</span>
                </div>
                <div class="text-center">
                    <span class="block text-4xl font-serif text-brand-900 font-bold mb-1">89</span>
                    <span class="text-[10px] uppercase tracking-widest font-bold text-slate-400">Partner
                        Institutes</span>
                </div>
                <div class="text-center">
                    <span class="block text-4xl font-serif text-brand-900 font-bold mb-1">400k+</span>
                    <span class="text-[10px] uppercase tracking-widest font-bold text-slate-400">Population
                        Monitored</span>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include 'components/footer.php'; ?>
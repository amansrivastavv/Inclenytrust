<?php
$pageTitle = "About Us | INCLEN Trust International";
include 'components/head.php';
include 'components/header.php';
?>

<main class="bg-white min-h-screen selection:bg-accent-500 selection:text-white">

    <!-- Hero Section -->
    <?php include 'components/about/hero.php'; ?>

    <!-- Who We Are Section -->
    <?php include 'components/about/who-we-are.php'; ?>

    <!-- What We Do (Strategy) Section -->
    <?php include 'components/about/what-we-do.php'; ?>

    <!-- Key Milestones -->
    <?php include 'components/about/milestones.php'; ?>

    <!-- Our Presence -->
    <?php include 'components/about/presence.php'; ?>

    <!-- Team (Board, Leadership, Investors, Mgmt) -->
    <?php include 'components/about/team.php'; ?>

    <!-- Academic Collaborators -->
    <?php include 'components/about/collaborators.php'; ?>

    <!-- Document Library -->
    <?php include 'components/about/documents.php'; ?>

    <!-- Call to Action -->
    <section class="py-24 bg-brand-900 relative overflow-hidden text-center">
        <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')]">
        </div>
        <div class="relative z-10 max-w-4xl mx-auto px-6">
            <h2 class="text-3xl md:text-5xl font-serif font-bold text-white mb-8">Join Our Global Network</h2>
            <p class="text-brand-100 text-lg mb-10 max-w-2xl mx-auto">
                Collaborate with us to generate high-quality evidence and drive policy changes for a healthier world.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact.php"
                    class="px-8 py-4 bg-accent-500 text-white font-bold uppercase tracking-widest text-xs rounded-full hover:bg-accent-600 transition-colors shadow-lg shadow-accent-500/30">
                    Contact Us
                </a>
                <a href="publications.php"
                    class="px-8 py-4 bg-transparent border border-white/30 text-white font-bold uppercase tracking-widest text-xs rounded-full hover:bg-white/10 transition-colors">
                    Explore Research
                </a>
            </div>
        </div>
    </section>

</main>

<?php include 'components/footer.php'; ?>
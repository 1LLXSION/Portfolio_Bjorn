<?php
$naam        = "Bjorn Kuiper";
$functie     = "Junior Webdeveloper";
$beschrijving = "Ik ben een MBO-student web/software development met interesse in PHP, JavaScript, Tailwind CSS en databases.";
$email       = "bkuiper06@student.rocvantwente.nl";
$github      = "https://github.com/1LLXSION";
$linkedin    = "https://www.linkedin.com/in/jouwprofiel/";

$projecten = [
    [
        "titel" => "Reisplanner met PHP en API",
        "stack" => "PHP, JavaScript, Tailwind CSS",
        "beschrijving" => "Webapplicatie die vertrektijden ophaalt via een OV-API en responsive toont.",
        "link" => "#"
    ],
    [
        "titel" => "Portfolio met Tailwind",
        "stack" => "PHP, Tailwind CSS",
        "beschrijving" => "Minimalistische portfolio-site voor school en sollicitaties.",
        "link" => "#"
    ],
    [
        "titel" => "MongoDB CRUD Demo",
        "stack" => "PHP, MongoDB",
        "beschrijving" => "Kleine CRUD-app om basis databaseoperaties te oefenen.",
        "link" => "#"
    ],
];
?>
<!DOCTYPE html>
<html lang="nl" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <title>Portfolio | <?php echo htmlspecialchars($naam); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body class="bg-slate-950 text-slate-100 antialiased">

<!-- NAVBAR -->
<header class="sticky top-0 z-20 border-b border-slate-800/70 bg-slate-950/80 backdrop-blur">
    <nav class="max-w-5xl mx-auto px-4 py-3 flex items-center justify-between">
        <div class="flex items-center gap-3">
            <div class="w-9 h-9 rounded-full border border-slate-500/70 bg-gradient-to-br from-emerald-400 via-sky-500 to-indigo-500"></div>
            <div>
                <div class="font-semibold tracking-wide text-sm uppercase"><?php echo htmlspecialchars($naam); ?></div>
                <div class="text-xs text-slate-400"><?php echo htmlspecialchars($functie); ?></div>
            </div>
        </div>

        <button id="navToggle" class="md:hidden inline-flex items-center justify-center w-9 h-9 rounded-full border border-slate-700 text-slate-300 hover:bg-slate-800/70">
            ☰
        </button>

        <div id="navLinks" class="hidden md:flex items-center gap-4 text-sm">
            <a href="#over-mij" class="px-3 py-1 rounded-full text-slate-300 hover:text-white hover:bg-slate-800/80">Over mij</a>
            <a href="#skills" class="px-3 py-1 rounded-full text-slate-300 hover:text-white hover:bg-slate-800/80">Skills</a>
            <a href="#projecten" class="px-3 py-1 rounded-full text-slate-300 hover:text-white hover:bg-slate-800/80">Projecten</a>
            <a href="#contact" class="px-3 py-1 rounded-full text-slate-100 bg-sky-600 hover:bg-sky-500">Contact</a>
        </div>
    </nav>

    <!-- Mobiel menu -->
    <div id="navMobile" class="md:hidden hidden border-t border-slate-800 bg-slate-950/95">
        <div class="max-w-5xl mx-auto px-4 py-2 flex flex-col gap-1 text-sm">
            <a href="#over-mij" class="py-1 text-slate-300 hover:text-white">Over mij</a>
            <a href="#skills" class="py-1 text-slate-300 hover:text-white">Skills</a>
            <a href="#projecten" class="py-1 text-slate-300 hover:text-white">Projecten</a>
            <a href="#contact" class="py-1 text-slate-100">Contact</a>
        </div>
    </div>
</header>

<main class="max-w-5xl mx-auto px-4 pb-16">

    <!-- HERO -->
    <section id="over-mij" class="pt-10 pb-12 grid gap-8 md:grid-cols-[minmax(0,3fr)_minmax(0,2.2fr)] items-center">
        <div>
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-slate-700/80 bg-slate-900/60 text-xs text-slate-300 mb-3">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                Beschikbaar voor stage / bijbaan
            </div>
            <h1 class="text-3xl md:text-4xl font-bold tracking-tight mb-2">
                <?php echo htmlspecialchars($naam); ?><br>
                <span class="text-sky-400"><?php echo htmlspecialchars($functie); ?></span>
            </h1>
            <p class="text-slate-300 text-sm md:text-base mb-5 leading-relaxed">
                <?php echo htmlspecialchars($beschrijving); ?>
            </p>

            <div class="flex flex-wrap gap-3 mb-5">
                <a href="#projecten"
                   class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-sky-600 hover:bg-sky-500 text-sm font-medium">
                    Bekijk projecten
                    <span>↗</span>
                </a>
                <a href="#contact"
                   class="inline-flex items-center gap-2 px-4 py-2 rounded-full border border-slate-700 text-sm text-slate-300 hover:bg-slate-900/80">
                    Neem contact op
                </a>
            </div>

            <dl class="flex flex-wrap gap-6 text-xs text-slate-400">
                <div>
                    <dt class="font-semibold text-slate-200">Ervaring</dt>
                    <dd>School- en hobbyprojecten, webdev focus</dd>
                </div>
                <div>
                    <dt class="font-semibold text-slate-200">Stack</dt>
                    <dd>PHP, JavaScript, MySQL / MongoDB</dd>
                </div>
                <div>
                    <dt class="font-semibold text-slate-200">Locatie</dt>
                    <dd>Nederland · Remote / hybride</dd>
                </div>
            </dl>
        </div>

        <article class="relative rounded-2xl border border-slate-700/80 bg-gradient-to-br from-slate-900 via-slate-950 to-slate-950 p-4 shadow-2xl overflow-hidden">
            <div class="absolute -right-24 -top-24 h-40 w-40 rounded-full bg-sky-600/20 blur-3xl"></div>
            <div class="relative space-y-3 text-sm">
                <div class="text-[0.7rem] uppercase tracking-[0.15em] text-slate-400">
                    Profiel snapshot
                </div>
                <div class="text-base font-medium">
                    MBO-student met focus op <span class="text-sky-400">full‑stack webdevelopment</span>
                    en het bouwen van praktische projecten.
                </div>
                <div class="flex flex-wrap gap-2 text-xs">
                    <span class="px-2 py-1 rounded-full bg-slate-900/80 border border-slate-700/80">API integraties</span>
                    <span class="px-2 py-1 rounded-full bg-slate-900/80 border border-slate-700/80">Tailwind UI</span>
                    <span class="px-2 py-1 rounded-full bg-slate-900/80 border border-slate-700/80">PHP backend</span>
                </div>
                <div class="pt-1 text-xs text-slate-400">
                    Klaar om in een professioneel team te groeien en echte klantprojecten op te pakken.
                </div>
            </div>
        </article>
    </section>

    <!-- SKILLS -->
    <section id="skills" class="py-10 border-t border-slate-800/70">
        <header class="flex items-baseline justify-between mb-4">
            <h2 class="text-lg md:text-xl font-semibold">Skills</h2>
            <p class="text-xs text-slate-400">Tech die in projecten gebruikt wordt</p>
        </header>

        <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3 text-sm">
            <div class="rounded-xl border border-slate-800 bg-slate-950/80 p-3">
                <div class="font-medium mb-1">Frontend</div>
                <div class="flex flex-wrap gap-1.5 text-xs text-slate-300">
                    <span class="px-2 py-0.5 rounded-full border border-slate-700/80 bg-slate-900/80">HTML</span>
                    <span class="px-2 py-0.5 rounded-full border border-slate-700/80 bg-slate-900/80">CSS</span>
                    <span class="px-2 py-0.5 rounded-full border border-slate-700/80 bg-slate-900/80">Tailwind CSS</span>
                    <span class="px-2 py-0.5 rounded-full border border-slate-700/80 bg-slate-900/80">JavaScript (ES6)</span>
                </div>
            </div>
            <div class="rounded-xl border border-slate-800 bg-slate-950/80 p-3">
                <div class="font-medium mb-1">Backend</div>
                <div class="flex flex-wrap gap-1.5 text-xs text-slate-300">
                    <span class="px-2 py-0.5 rounded-full border border-slate-700/80 bg-slate-900/80">PHP</span>
                    <span class="px-2 py-0.5 rounded-full border border-slate-700/80 bg-slate-900/80">REST API's</span>
                    <span class="px-2 py-0.5 rounded-full border border-slate-700/80 bg-slate-900/80">Laravel (basic)</span>
                </div>
            </div>
            <div class="rounded-xl border border-slate-800 bg-slate-950/80 p-3">
                <div class="font-medium mb-1">Databases & tools</div>
                <div class="flex flex-wrap gap-1.5 text-xs text-slate-300">
                    <span class="px-2 py-0.5 rounded-full border border-slate-700/80 bg-slate-900/80">MySQL</span>
                    <span class="px-2 py-0.5 rounded-full border border-slate-700/80 bg-slate-900/80">MongoDB</span>
                    <span class="px-2 py-0.5 rounded-full border border-slate-700/80 bg-slate-900/80">Git / GitHub</span>
                    <span class="px-2 py-0.5 rounded-full border border-slate-700/80 bg-slate-900/80">Postman</span>
                </div>
            </div>
        </div>
    </section>

    <!-- PROJECTEN -->
    <section id="projecten" class="py-10 border-t border-slate-800/70">
        <header class="flex items-baseline justify-between mb-4">
            <h2 class="text-lg md:text-xl font-semibold">Projecten</h2>
            <p class="text-xs text-slate-400">Een selectie van recente projecten</p>
        </header>

        <div class="grid gap-4 md:grid-cols-2">
            <?php foreach ($projecten as $project): ?>
                <article class="rounded-xl border border-slate-800 bg-slate-950/80 p-4 flex flex-col gap-2">
                    <h3 class="font-semibold text-sm md:text-base">
                        <?php echo htmlspecialchars($project["titel"]); ?>
                    </h3>
                    <p class="text-xs text-slate-400">
                        <?php echo htmlspecialchars($project["stack"]); ?>
                    </p>
                    <p class="text-sm text-slate-200">
                        <?php echo htmlspecialchars($project["beschrijving"]); ?>
                    </p>
                    <div class="mt-auto pt-1 flex items-center justify-between text-xs text-slate-400">
                        <span>Rol: Developer</span>
                        <?php if (!empty($project["link"])): ?>
                            <a href="<?php echo htmlspecialchars($project["link"]); ?>" class="inline-flex items-center gap-1 text-sky-400 hover:text-sky-300">
                                Bekijk
                                <span>↗</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- CONTACT -->
    <section id="contact" class="py-10 border-t border-slate-800/70">
        <header class="flex items-baseline justify-between mb-4">
            <h2 class="text-lg md:text-xl font-semibold">Contact</h2>
            <p class="text-xs text-slate-400">Stuur een bericht of connect op GitHub / LinkedIn</p>
        </header>

        <div class="grid gap-6 md:grid-cols-[minmax(0,3fr)_minmax(0,2fr)]">
            <form class="rounded-xl border border-slate-800 bg-slate-950/80 p-4 space-y-3"
                  onsubmit="event.preventDefault(); alert('Dit is een demo-formulier. Verwerk dit in PHP of stuur via mail().');">
                <div>
                    <label class="block text-xs text-slate-400 mb-1">Naam</label>
                    <input type="text" class="w-full rounded-lg border border-slate-700 bg-slate-950/80 px-3 py-2 text-sm text-slate-100 focus:outline-none focus:ring-1 focus:ring-sky-500" required>
                </div>
                <div>
                    <label class="block text-xs text-slate-400 mb-1">E-mailadres</label>
                    <input type="email" class="w-full rounded-lg border border-slate-700 bg-slate-950/80 px-3 py-2 text-sm text-slate-100 focus:outline-none focus:ring-1 focus:ring-sky-500" required>
                </div>
                <div>
                    <label class="block text-xs text-slate-400 mb-1">Bericht</label>
                    <textarea class="w-full rounded-lg border border-slate-700 bg-slate-950/80 px-3 py-2 text-sm text-slate-100 focus:outline-none focus:ring-1 focus:ring-sky-500 min-h-[120px]" required></textarea>
                </div>
                <button type="submit" class="inline-flex items-center gap-2 rounded-full bg-sky-600 hover:bg-sky-500 px-4 py-2 text-sm font-medium">
                    Verstuur bericht
                </button>
            </form>

            <aside class="rounded-xl border border-slate-800 bg-slate-950/80 p-4 text-sm space-y-3">
                <div>
                    <div class="text-xs font-semibold text-slate-300 uppercase tracking-[0.15em] mb-1">Direct contact</div>
                    <p class="text-slate-300">
                        E-mail:
                        <a href="mailto:<?php echo htmlspecialchars($email); ?>" class="text-sky-400 hover:text-sky-300">
                            <?php echo htmlspecialchars($email); ?>
                        </a>
                    </p>
                </div>
                <div class="space-y-1">
                    <div class="text-xs font-semibold text-slate-300 uppercase tracking-[0.15em] mb-1">Socials</div>
                    <p>
                        <a href="<?php echo htmlspecialchars($github); ?>" class="text-sky-400 hover:text-sky-300">GitHub</a>
                    </p>
                    <p>
                        <a href="<?php echo htmlspecialchars($linkedin); ?>" class="text-sky-400 hover:text-sky-300">LinkedIn</a>
                    </p>
                </div>
                <p class="text-xs text-slate-500 pt-2">
                    Pas gerust de tekst, projecten en styling aan zodat dit perfect bij jouw profiel en opleiding past.
                </p>
            </aside>
        </div>
    </section>
</main>

<footer class="border-t border-slate-800/70 py-4 text-center text-xs text-slate-500">
    &copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($naam); ?> · Portfolio
</footer>

<script>
// mobiel menu toggle
const navToggle  = document.getElementById('navToggle');
const navMobile  = document.getElementById('navMobile');
const navLinks   = document.querySelectorAll('a[href^="#"]');

if (navToggle && navMobile) {
    navToggle.addEventListener('click', () => {
        navMobile.classList.toggle('hidden');
    });
}

// smooth scroll + mobiel menu sluiten na klik
navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
        const href = link.getAttribute('href');
        if (!href || !href.startsWith('#')) return;

        e.preventDefault();
        const target = document.querySelector(href);
        if (!target) return;

        target.scrollIntoView({ behavior: 'smooth' });

        if (window.innerWidth < 768 && navMobile && !navMobile.classList.contains('hidden')) {
            navMobile.classList.add('hidden');
        }
    });
});
</script>

</body>
</html>

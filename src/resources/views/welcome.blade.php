<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dark Mage - Digital Sorcery</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;700&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#9311d4",
                        "background-light": "#f7f6f8",
                        "background-dark": "#161118", // Matching the dark bg from the snippet provided
                    },
                    fontFamily: {
                        "display": ["Space Grotesk", "sans-serif"]
                    },
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                },
            },
        }
    </script>
    <style>
        /* Custom scrollbar for a cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #161118;
        }

        ::-webkit-scrollbar-thumb {
            background: #332839;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #9311d4;
        }

        .glow-text {
            text-shadow: 0 0 20px rgba(147, 17, 212, 0.5);
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white font-display overflow-x-hidden">
    <div class="relative flex min-h-screen w-full flex-col group/design-root">
        <!-- Navbar -->
        <div
            class="w-full border-b border-solid border-b-[#332839] bg-background-dark/95 backdrop-blur sticky top-0 z-50">
            <div class="layout-container flex h-full grow flex-col">
                <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-3">
                    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                        <header class="flex items-center justify-between whitespace-nowrap">
                            <div class="flex items-center gap-4 text-white">
                                <div class="size-6 text-primary animate-pulse">
                                    <span class="material-symbols-outlined !text-3xl">auto_fix_high</span>
                                </div>
                                <h2 class="text-white text-xl font-bold leading-tight tracking-[-0.015em]">Dark Mage
                                </h2>
                            </div>
                            <div class="flex flex-1 justify-end gap-8 items-center">
                                <div class="hidden md:flex items-center gap-9">
                                    <a class="text-gray-300 hover:text-primary transition-colors text-sm font-medium leading-normal"
                                        href="#">Duar</a>
                                    <a class="text-gray-300 hover:text-primary transition-colors text-sm font-medium leading-normal"
                                        href="#">Grimoire</a>
                                    <a class="text-gray-300 hover:text-primary transition-colors text-sm font-medium leading-normal"
                                        href="#">Contact</a>
                                </div>
                                <button
                                    class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-6 bg-primary hover:bg-primary/90 transition-all text-white text-sm font-bold leading-normal tracking-[0.015em] shadow-[0_0_15px_rgba(147,17,212,0.4)]">
                                    <span class="truncate">Summon Us</span>
                                </button>
                            </div>
                        </header>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero Section -->
        <div class="layout-container flex grow flex-col relative overflow-hidden">
            <!-- Decorative Background Elements -->
            <div
                class="absolute top-[-10%] left-[-10%] w-[500px] h-[500px] bg-primary/20 rounded-full blur-[120px] pointer-events-none">
            </div>
            <div
                class="absolute bottom-[-10%] right-[-10%] w-[500px] h-[500px] bg-primary/10 rounded-full blur-[120px] pointer-events-none">
            </div>
            <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-10 md:py-20 z-10">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="@container">
                        <div class="@[480px]:p-4">
                            <div class="flex min-h-[560px] flex-col gap-6 bg-cover bg-center bg-no-repeat @[480px]:gap-8 @[480px]:rounded-xl items-center justify-center p-8 border border-[#332839] relative overflow-hidden group"
                                data-alt="Mystical purple fog swirling in a dark void"
                                style='background-image: linear-gradient(rgba(22, 17, 24, 0.7) 0%, rgba(22, 17, 24, 0.8) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBWg6eAhx7o-lCSXN73ZZaNFz1xsSMw9NiNV1S5p9ATimzvNddaygk-Zt0ESBvNJy9yuYLWshlYZmqm_HCmS8uoMSDH5zCtpYgWe-Cr4Bay6okLeAJ9N6SO9LMyy_3Uuh__s0KrvulOFSTnAwKsOqpb8LJxk0JSwBi58CgX8-ScG0tZIBDCoKNt7IQWNsgh-5sdAsgowdsW4_b4h6B-2gLMZuyyT9R1-Endpj61YwH2XFs-Nid50rpPo87BZ_c5pZf-o1DF67El10q5"); box-shadow: 0 0 40px rgba(0,0,0,0.5);'>
                                <div
                                    class="absolute inset-0 bg-gradient-to-b from-transparent via-background-dark/50 to-background-dark opacity-90">
                                </div>
                                <div class="flex flex-col gap-4 text-center z-10 max-w-2xl">
                                    <div class="flex justify-center mb-2">
                                        <span
                                            class="px-3 py-1 rounded-full bg-[#332839] text-primary text-xs font-bold uppercase tracking-widest border border-primary/30">Digital
                                            Sorcery</span>
                                    </div>
                                    <h1
                                        class="text-white text-5xl font-black leading-tight tracking-[-0.033em] @[480px]:text-6xl glow-text">
                                        Weaving Digital Reality
                                    </h1>
                                    <h2 class="text-gray-300 text-lg font-normal leading-relaxed max-w-lg mx-auto">
                                        Transforming the mundane into the magnificent. We craft web experiences that
                                        feel less like technology and more like magic Soempurnan.
                                    </h2>
                                </div>
                                <div class="flex flex-col sm:flex-row gap-4 z-10 mt-4">
                                    <button
                                        class="flex min-w-[160px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-primary hover:bg-primary/90 hover:scale-105 transition-all text-white text-base font-bold leading-normal tracking-[0.015em] shadow-[0_0_20px_rgba(147,17,212,0.5)]">
                                        <span class="truncate">Explore Spells</span>
                                    </button>
                                    <button
                                        class="flex min-w-[160px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-12 px-6 bg-transparent border border-[#4b3b54] hover:bg-[#332839] hover:border-primary/50 transition-all text-white text-base font-bold leading-normal tracking-[0.015em]">
                                        <span class="truncate">View Portfolio</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Section Header: Grimoire -->
        <div class="layout-container flex flex-col">
            <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1 border-b border-[#332839]">
                    <h2
                        class="text-white text-[28px] font-bold leading-tight tracking-[-0.015em] px-4 pb-6 pt-5 flex items-center gap-3">
                        <span class="material-symbols-outlined text-primary">menu_book</span>
                        Our Grimoire
                    </h2>
                </div>
            </div>
        </div>
        <!-- Feature Section -->
        <div class="layout-container flex flex-col">
            <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="flex flex-col gap-10 px-4 py-10 @container">
                        <div class="flex flex-col md:flex-row justify-between items-start md:items-end gap-4">
                            <h1 class="text-white tracking-tight text-[32px] font-bold leading-tight max-w-[600px]">
                                Arcane Services for the Modern Era
                            </h1>
                            <p class="text-gray-400 max-w-xs text-sm">We specialize in three distinct schools of digital
                                magic, tailored to elevate your presence.</p>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <!-- Card 1 -->
                            <div
                                class="group flex flex-1 gap-6 rounded-xl border border-[#332839] bg-[#1e1621] p-6 flex-col hover:border-primary/50 hover:shadow-[0_0_30px_rgba(147,17,212,0.15)] transition-all duration-300">
                                <div
                                    class="size-12 rounded-lg bg-[#332839] flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                                    <span class="material-symbols-outlined text-[32px]">code</span>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <h2 class="text-white text-xl font-bold leading-tight">Arcane Development</h2>
                                    <p class="text-[#b09db9] text-sm font-normal leading-relaxed">Robust web and app
                                        solutions forged in clean code. We build scalable architectures that stand the
                                        test of time.</p>
                                </div>
                            </div>
                            <!-- Card 2 -->
                            <div
                                class="group flex flex-1 gap-6 rounded-xl border border-[#332839] bg-[#1e1621] p-6 flex-col hover:border-primary/50 hover:shadow-[0_0_30px_rgba(147,17,212,0.15)] transition-all duration-300">
                                <div
                                    class="size-12 rounded-lg bg-[#332839] flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                                    <span class="material-symbols-outlined text-[32px]">palette</span>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <h2 class="text-white text-xl font-bold leading-tight">Visual Alchemy</h2>
                                    <p class="text-[#b09db9] text-sm font-normal leading-relaxed">Enchanting UI/UX
                                        designs that captivate users. We turn complex interfaces into intuitive, magical
                                        experiences.</p>
                                </div>
                            </div>
                            <!-- Card 3 -->
                            <div
                                class="group flex flex-1 gap-6 rounded-xl border border-[#332839] bg-[#1e1621] p-6 flex-col hover:border-primary/50 hover:shadow-[0_0_30px_rgba(147,17,212,0.15)] transition-all duration-300">
                                <div
                                    class="size-12 rounded-lg bg-[#332839] flex items-center justify-center group-hover:bg-primary group-hover:text-white transition-colors text-primary">
                                    <span class="material-symbols-outlined text-[32px]">auto_graph</span>
                                </div>
                                <div class="flex flex-col gap-3">
                                    <h2 class="text-white text-xl font-bold leading-tight">Shadow Marketing</h2>
                                    <p class="text-[#b09db9] text-sm font-normal leading-relaxed">Strategic spells to
                                        boost your digital presence. We navigate the shadows of SEO and analytics to
                                        bring you to the light.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Section (The Covenant) -->
        <div class="layout-container flex flex-col bg-[#130e15]">
            <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-5">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                    <div class="@container">
                        <div class="flex flex-col gap-10 px-4 py-16 md:flex-row items-center">
                            <div class="w-full md:w-1/2 bg-center bg-no-repeat aspect-square md:aspect-[4/3] bg-cover rounded-xl shadow-2xl shadow-primary/10 border border-[#332839]"
                                data-alt="Abstract 3D render of a glowing purple crystal structure"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuANEvZ0PzqC2CKusUVHglF77jpk9OxorR6HaXQdDvPGmiTpudHeyRBzHQmpNGT_UQOLo1RIY-j3-xkPtvXZ6rmiA3Kp5z_Tdf0ACx_WQ2rJf4sY67-qskj2N7nISTg_zZJoT0Uy6q5Hkb1knhIlks_DcDfDjUdssvJozoQN1Gxel4DF9ITCstQ6UrRWtu-wQU2oUY-sU9ymPFxtnQNRVGTVeLyZlNQrnHudzFcyuisKqLtLfdPYsxotAd7aS4eJw5VzbhBY9P6GFc8W");'>
                            </div>
                            <div class="flex flex-col gap-6 md:w-1/2 md:pl-8">
                                <div class="flex flex-col gap-4 text-left">
                                    <div
                                        class="flex items-center gap-2 text-primary font-bold tracking-widest uppercase text-xs">
                                        <span class="w-8 h-[1px] bg-primary"></span>
                                        About Us
                                    </div>
                                    <h1
                                        class="text-white text-4xl font-black leading-tight tracking-[-0.033em] md:text-5xl">
                                        The Covenant
                                    </h1>
                                    <p class="text-gray-300 text-base font-normal leading-relaxed">
                                        We are not merely developers; we are a collective of digital warlocks dedicated
                                        to pushing the boundaries of what is possible on the web.
                                    </p>
                                    <p class="text-gray-400 text-sm font-normal leading-relaxed">
                                        Founded in the deep recesses of the internet, Dark Mage emerged with a single
                                        purpose: to fight the tyranny of boring, template-based websites. We believe
                                        every brand possesses a unique magic waiting to be unleashed.
                                    </p>
                                </div>
                                <button
                                    class="group flex w-fit cursor-pointer items-center gap-2 text-primary text-base font-bold leading-normal tracking-[0.015em] hover:text-white transition-colors mt-2">
                                    <span>Read Our Lore</span>
                                    <span
                                        class="material-symbols-outlined group-hover:translate-x-1 transition-transform">arrow_forward</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- CTA Section -->
        <div class="layout-container flex flex-col relative overflow-hidden">
            <div class="absolute inset-0 bg-primary/5 z-0"></div>
            <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center py-20 z-10">
                <div class="layout-content-container flex flex-col max-w-[960px] flex-1 items-center text-center">
                    <h2 class="text-white text-3xl md:text-5xl font-bold leading-tight tracking-tight mb-6">Ready to
                        cast your spell?</h2>
                    <p class="text-gray-300 max-w-xl text-lg mb-10">Join forces with the Dark Mage covenant and watch
                        your digital presence transform into something legendary.</p>
                    <div class="flex flex-col sm:flex-row gap-4 w-full justify-center">
                        <input
                            class="bg-[#1e1621] border border-[#4b3b54] text-white rounded-lg px-6 py-3 w-full sm:w-80 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary placeholder-gray-500"
                            placeholder="Enter your email scroll..." type="email" />
                        <button
                            class="bg-primary hover:bg-primary/90 text-white font-bold py-3 px-8 rounded-lg shadow-[0_0_20px_rgba(147,17,212,0.4)] transition-all">
                            Begin Journey
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <footer class="bg-[#0f0b11] border-t border-[#332839] py-12">
            <div class="layout-container flex flex-col">
                <div class="px-4 md:px-10 lg:px-40 flex flex-1 justify-center">
                    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
                        <div class="flex flex-col md:flex-row justify-between items-center gap-8">
                            <div class="flex items-center gap-3">
                                <div class="size-8 text-primary">
                                    <span class="material-symbols-outlined text-3xl">auto_fix_high</span>
                                </div>
                                <span class="text-white text-xl font-bold">Dark Mage</span>
                            </div>
                            <div class="flex gap-8 text-sm font-medium text-gray-400">
                                <a class="hover:text-primary transition-colors" href="#">Spells</a>
                                <a class="hover:text-primary transition-colors" href="#">Covenant</a>
                                <a class="hover:text-primary transition-colors" href="#">Scrolls</a>
                                <a class="hover:text-primary transition-colors" href="#">Contact</a>
                            </div>
                            <div class="flex gap-4">
                                <a class="text-gray-500 hover:text-white transition-colors" href="#">
                                    <span class="sr-only">Twitter</span>
                                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24">
                                        <path
                                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84">
                                        </path>
                                    </svg>
                                </a>
                                <a class="text-gray-500 hover:text-white transition-colors" href="#">
                                    <span class="sr-only">GitHub</span>
                                    <svg aria-hidden="true" class="h-5 w-5" fill="currentColor" viewbox="0 0 24 24">
                                        <path clip-rule="evenodd"
                                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                            fill-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="mt-8 pt-8 border-t border-[#332839] text-center text-xs text-gray-600">
                            © 2023 Dark Mage Digital. All rights reserved.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>

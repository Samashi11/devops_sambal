<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dark Mage - Shop</title>
    <!-- Google Fonts: Manrope -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet" />
    <!-- Material Symbols -->
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <!-- Tailwind Config -->
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "primary": "#9311d4",
                        "background-light": "#f7f6f8",
                        "background-dark": "#161118",
                        "surface-dark": "#231c27",
                        "surface-border": "#332839",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"]
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
        body {
            font-family: 'Manrope', "Noto Sans", sans-serif;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark text-slate-900 dark:text-white overflow-x-hidden min-h-screen flex flex-col">
    <!-- Navbar -->
    <header
        class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-surface-border bg-background-dark/95 backdrop-blur-md px-4 py-3 md:px-10">
        <div class="flex items-center gap-4 text-white">
            <div class="size-6 text-primary">
                <span class="material-symbols-outlined text-3xl">raven</span>
            </div>
            <h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em] hidden sm:block">Dark Mage</h2>
        </div>
        <div class="flex flex-1 justify-end gap-4 md:gap-8">
            <div class="hidden md:flex items-center gap-9">
                <a class="text-white text-sm font-medium hover:text-primary transition-colors"
                    href="{{ url('/') }}">Home</a>
                <a class="text-white text-sm font-medium hover:text-primary transition-colors"
                    href="{{ route('about') }}">About Us</a>
                <a class="text-white text-sm font-medium hover:text-primary transition-colors"
                    href="{{ route('contact') }}">Contact</a>
            </div>
            <div class="flex gap-2">
                <button
                    class="flex size-10 cursor-pointer items-center justify-center rounded-lg bg-surface-border hover:bg-surface-border/80 text-white transition-colors">
                    <span class="material-symbols-outlined text-[20px]">search</span>
                </button>
                <button
                    class="flex size-10 cursor-pointer items-center justify-center rounded-lg bg-surface-border hover:bg-surface-border/80 text-white transition-colors">
                    <span class="material-symbols-outlined text-[20px]">person</span>
                </button>
                <button
                    class="flex size-10 cursor-pointer items-center justify-center rounded-lg bg-primary hover:bg-primary/90 text-white transition-colors relative">
                    <span class="material-symbols-outlined text-[20px]">shopping_cart</span>
                    <span class="absolute top-1 right-1 size-2 bg-white rounded-full"></span>
                </button>
            </div>
        </div>
    </header>
    <!-- Main Content Wrapper -->
    <div class="flex-1 flex flex-col max-w-[1440px] mx-auto w-full">
        <!-- Hero Section (Condensed) -->
        <div class="px-4 py-6 md:px-10">
            <div class="relative w-full rounded-xl overflow-hidden min-h-[200px] md:min-h-[280px] flex items-center justify-center bg-cover bg-center"
                data-alt="Dark misty smoke swirling around mysterious potion bottles"
                style='background-image: linear-gradient(rgba(22, 17, 24, 0.4) 0%, rgba(22, 17, 24, 0.8) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuA1JswVRywDTj-bwtdYLjiXDjSSn5rQ8P5TZzRiuP9LBSPD8Ufgm8qvDjgj64HqRCmE_MK1BA-bJj8XZHf651KWj5EocLvJ2sp2feaRQrViInWh4OuYPSE7GaCZUbQ46Shs9hWFQ_5o7zKFx_QvRY7sYLghYiLwY5n79XJfuyvqvJejI3ouhWN5JCqfJl9ie9kIa8BR0KklJ7G0Xa0UELdzbsik7YbeAZooYoSKn5ippbVwgT6k71cjImYU83EuID6Pw1m4Iy35CuOl");'>
                <div class="relative z-10 text-center max-w-2xl px-4">
                    <h1 class="text-white text-3xl md:text-5xl font-black mb-3 tracking-tight">
                        Potions for the Modern Man
                    </h1>
                    <p class="text-gray-200 text-sm md:text-base font-medium max-w-lg mx-auto">
                        Alchemy for your skin. Discover our collection of enchanted grooming essentials.
                    </p>
                </div>
            </div>
        </div>
        <!-- Shop Layout: Sidebar + Grid -->
        <div class="flex flex-col lg:flex-row gap-8 px-4 md:px-10 py-6">
            <!-- Sidebar (Filters) -->
            <aside class="w-full lg:w-64 shrink-0 space-y-8">
                <!-- Search within Shop -->
                <div class="relative">
                    <input
                        class="w-full h-10 pl-10 pr-4 rounded-lg bg-surface-border border-none text-white text-sm placeholder-gray-400 focus:ring-1 focus:ring-primary"
                        placeholder="Search potions..." type="text" />
                    <span
                        class="material-symbols-outlined absolute left-3 top-2.5 text-gray-400 text-[20px]">search</span>
                </div>
                <!-- Categories -->
                <div>
                    <h3 class="text-white text-sm font-bold uppercase tracking-wider mb-4">Categories</h3>
                    <div class="flex flex-wrap gap-2">
                        <button
                            class="px-3 py-1.5 rounded-lg bg-primary text-white text-sm font-medium hover:opacity-90 transition">All</button>
                        <button
                            class="px-3 py-1.5 rounded-lg bg-surface-border text-gray-300 text-sm font-medium hover:bg-surface-border/70 hover:text-white transition">Face</button>
                        <button
                            class="px-3 py-1.5 rounded-lg bg-surface-border text-gray-300 text-sm font-medium hover:bg-surface-border/70 hover:text-white transition">Beard</button>
                        <button
                            class="px-3 py-1.5 rounded-lg bg-surface-border text-gray-300 text-sm font-medium hover:bg-surface-border/70 hover:text-white transition">Body</button>
                        <button
                            class="px-3 py-1.5 rounded-lg bg-surface-border text-gray-300 text-sm font-medium hover:bg-surface-border/70 hover:text-white transition">Sets</button>
                    </div>
                </div>
                <!-- Price Slider -->
                <div>
                    <h3 class="text-white text-sm font-bold uppercase tracking-wider mb-4">Price Range</h3>
                    <div class="flex h-[38px] w-full pt-1.5 relative">
                        <div class="absolute w-full h-1 bg-surface-border rounded-full top-[11px]"></div>
                        <div class="absolute h-1 bg-primary rounded-full top-[11px] left-[15%] right-[30%]"></div>
                        <!-- Thumb 1 -->
                        <div
                            class="absolute left-[15%] top-0 flex flex-col items-center -translate-x-1/2 cursor-pointer group">
                            <div
                                class="size-4 rounded-full bg-white border-2 border-primary group-hover:scale-110 transition-transform">
                            </div>
                            <span class="mt-1 text-xs text-gray-300 font-medium">$15</span>
                        </div>
                        <!-- Thumb 2 -->
                        <div
                            class="absolute right-[30%] top-0 flex flex-col items-center translate-x-1/2 cursor-pointer group">
                            <div
                                class="size-4 rounded-full bg-white border-2 border-primary group-hover:scale-110 transition-transform">
                            </div>
                            <span class="mt-1 text-xs text-gray-300 font-medium">$80</span>
                        </div>
                    </div>
                </div>
                <!-- Filters Checklist -->
                <div>
                    <h3 class="text-white text-sm font-bold uppercase tracking-wider mb-4">Skin Type</h3>
                    <div class="space-y-3">
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <div
                                class="size-4 rounded border border-gray-500 bg-transparent flex items-center justify-center group-hover:border-primary transition-colors">
                                <!-- Checked state would have a checkmark here -->
                            </div>
                            <span class="text-sm text-gray-300 group-hover:text-white">Oily Skin</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <div
                                class="size-4 rounded border border-primary bg-primary flex items-center justify-center">
                                <span class="material-symbols-outlined text-white text-[14px]">check</span>
                            </div>
                            <span class="text-sm text-white">Dry Skin</span>
                        </label>
                        <label class="flex items-center gap-3 cursor-pointer group">
                            <div
                                class="size-4 rounded border border-gray-500 bg-transparent flex items-center justify-center group-hover:border-primary transition-colors">
                            </div>
                            <span class="text-sm text-gray-300 group-hover:text-white">Combination</span>
                        </label>
                    </div>
                </div>
            </aside>
            <!-- Product Grid -->
            <main class="flex-1">
                <!-- Sorting & Count Header -->
                <div class="flex items-center justify-between mb-6">
                    <p class="text-gray-400 text-sm">Showing 6 potions</p>
                    <div class="flex items-center gap-2">
                        <span class="text-sm text-gray-400">Sort by:</span>
                        <select
                            class="bg-surface-border border-none text-white text-sm rounded px-3 py-1.5 focus:ring-1 focus:ring-primary cursor-pointer">
                            <option>Most Potent (Popular)</option>
                            <option>Price: Low to High</option>
                            <option>Price: High to Low</option>
                            <option>Newest Arrivals</option>
                        </select>
                    </div>
                </div>
                <!-- Grid -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <article
                        class="flex flex-col rounded-xl bg-surface-dark overflow-hidden group hover:shadow-[0_0_25px_rgba(147,17,212,0.15)] hover:bg-[#2a222f] transition-all duration-300 border border-transparent hover:border-primary/20">
                        <div class="relative w-full aspect-[4/5] bg-surface-border overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                data-alt="Black cosmetic bottle on a dark stone texture with dramatic lighting"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDboRkMmvD_kgPSHPT13WkSdxQY07unpX__j1d-9e3ddIc4mhzXY-PcogxEHlCNGmGQzhmxCZxxbTTwQISZQrqUY9YrbJ9p-iTOXS8lpMXVa3RTuqUP_6KDGgBYPgcNxWIic9gqq3kB7M4QbmLpAz8r4xoZUaiOok3QTIv7VXZyB_9kc1uf-qt0MN7Tv08yOX5PsIogGnIH4QRII3dKTVoAN-yKrFXxHDpi9QB0Xt4dlLgZTeNxnbTcBxMP9lcJEvB3JN5HTj6C5l7h");'>
                            </div>
                            <div
                                class="absolute top-3 left-3 bg-primary/90 backdrop-blur-sm text-white text-xs font-bold px-2 py-1 rounded">
                                Best Seller</div>
                            <!-- Quick Action Overlay -->
                            <div
                                class="absolute inset-x-0 bottom-0 p-4 translate-y-full group-hover:translate-y-0 transition-transform duration-300 flex justify-center bg-gradient-to-t from-black/80 to-transparent">
                                <button
                                    class="bg-white text-black text-sm font-bold py-2 px-6 rounded-lg hover:bg-gray-200 transition-colors shadow-lg">Quick
                                    View</button>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-1 gap-2">
                            <div class="flex justify-between items-start">
                                <h3 class="text-white text-lg font-bold leading-tight">Void Walker Facewash</h3>
                                <p class="text-white font-medium">$24.00</p>
                            </div>
                            <p class="text-gray-400 text-sm line-clamp-2">Charcoal-infused cleanser that draws out
                                impurities from the depths of your pores.</p>
                            <div class="mt-auto pt-4">
                                <button
                                    class="w-full flex items-center justify-center gap-2 rounded-lg h-10 bg-primary hover:bg-primary/90 text-white text-sm font-bold transition-all active:scale-[0.98]">
                                    <span class="material-symbols-outlined text-[18px]">shopping_bag</span>
                                    Add to Grimoire
                                </button>
                            </div>
                        </div>
                    </article>
                    <!-- Card 2 -->
                    <article
                        class="flex flex-col rounded-xl bg-surface-dark overflow-hidden group hover:shadow-[0_0_25px_rgba(147,17,212,0.15)] hover:bg-[#2a222f] transition-all duration-300 border border-transparent hover:border-primary/20">
                        <div class="relative w-full aspect-[4/5] bg-surface-border overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                data-alt="Purple glowing serum bottle floating in a dark misty environment"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCk1aziM1gqv7m2ImnBCpE9ZR--WnDTQVPDX-yOkOGSqeNFat6tVmY2jky6YRyubr3N2xcE6v9RZVTdJv_AaAi-2qLy01mkgXTpeesNEvTp3opF3_fBcNv2-wBsvECdyAPD3DDxoRoB_uTDVDhONZBVmfMNArN9S7GcbLA7V5OkE4dyfc0b8mHIc4F_r7S5g4u_WBvsnvGFImH4EFM3hm2cvTcPBhKXplaiIfI9Q3er34YBxlhtu74HhHGtGGQ8Xm18yJS_Afh-kdhu");'>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-1 gap-2">
                            <div class="flex justify-between items-start">
                                <h3 class="text-white text-lg font-bold leading-tight">Arcane Mist Toner</h3>
                                <p class="text-white font-medium">$30.00</p>
                            </div>
                            <p class="text-gray-400 text-sm line-clamp-2">Hydrating toner charged with aloe vera and
                                witch hazel for instant revitalization.</p>
                            <div class="mt-auto pt-4">
                                <button
                                    class="w-full flex items-center justify-center gap-2 rounded-lg h-10 bg-surface-border hover:bg-surface-border/80 text-white text-sm font-bold transition-all active:scale-[0.98]">
                                    <span class="material-symbols-outlined text-[18px]">shopping_bag</span>
                                    Add to Grimoire
                                </button>
                            </div>
                        </div>
                    </article>
                    <!-- Card 3 -->
                    <article
                        class="flex flex-col rounded-xl bg-surface-dark overflow-hidden group hover:shadow-[0_0_25px_rgba(147,17,212,0.15)] hover:bg-[#2a222f] transition-all duration-300 border border-transparent hover:border-primary/20">
                        <div class="relative w-full aspect-[4/5] bg-surface-border overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                data-alt="Dark amber glass dropper bottle on black reflective surface"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBiV86bx8sxw6P62Xp_mDnW4BsYERodqt-YBh6C_i3e_Aqp4rF2qw-ruvMwQZRtYolBFuK1YZ1r2nJFX540q7NfARrMMZMJ9bRsGK5nsqsTGDQ5O5pEippdVEWmD21hFiAdIxd5PUQlYpF83oI5MvwnxgTC2XamEf77oREqltwVTpK90dD1DI0-CBDPGthk5wGLEgAckkS7rUN2rl3a0GlYTEysJHiMi7NZX-nuc-CmTyBA4cxDLJCCoUsYv7T4s_UAAb4wvT_InM-9");'>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-1 gap-2">
                            <div class="flex justify-between items-start">
                                <h3 class="text-white text-lg font-bold leading-tight">Shadow Beard Oil</h3>
                                <p class="text-white font-medium">$18.00</p>
                            </div>
                            <p class="text-gray-400 text-sm line-clamp-2">Tame the wildest beard with this blend of
                                argan and jojoba oils. Woodsmoke scent.</p>
                            <div class="mt-auto pt-4">
                                <button
                                    class="w-full flex items-center justify-center gap-2 rounded-lg h-10 bg-surface-border hover:bg-surface-border/80 text-white text-sm font-bold transition-all active:scale-[0.98]">
                                    <span class="material-symbols-outlined text-[18px]">shopping_bag</span>
                                    Add to Grimoire
                                </button>
                            </div>
                        </div>
                    </article>
                    <!-- Card 4 -->
                    <article
                        class="flex flex-col rounded-xl bg-surface-dark overflow-hidden group hover:shadow-[0_0_25px_rgba(147,17,212,0.15)] hover:bg-[#2a222f] transition-all duration-300 border border-transparent hover:border-primary/20">
                        <div class="relative w-full aspect-[4/5] bg-surface-border overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                data-alt="Minimalist black jar of cream with soft purple lighting"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCg3iJwY6jtIoqYxmCg3SbESRCE2YrLcFIDslEDnADJ31mgpjed4-7TOrvGFYAc4tkZGFK_5csL15lFqwy40vBITjLU1Cg_U9pvR-Ye7Zc-Wgud61Zx_zD47S4q5APHlgCUIaVSJBXrsR76WDJ5_L2gaoKFIlDflNkmOEa3xih47te7tcKDmnUG1HHNJdZlKrfcOFNVkIfBiRoOqMfjl13QaDBWQelayXc-YDVVe1zRgu-hC8U0pQU_sh0YgD-XSrfI6Ed6ksbA_Wxc");'>
                            </div>
                            <div
                                class="absolute top-3 left-3 bg-red-600/90 backdrop-blur-sm text-white text-xs font-bold px-2 py-1 rounded">
                                Low Stock</div>
                        </div>
                        <div class="p-4 flex flex-col flex-1 gap-2">
                            <div class="flex justify-between items-start">
                                <h3 class="text-white text-lg font-bold leading-tight">Philosopher’s Exfoliator</h3>
                                <p class="text-white font-medium">$28.00</p>
                            </div>
                            <p class="text-gray-400 text-sm line-clamp-2">Micro-crystals polish away dead skin cells to
                                reveal the immortal youth beneath.</p>
                            <div class="mt-auto pt-4">
                                <button
                                    class="w-full flex items-center justify-center gap-2 rounded-lg h-10 bg-surface-border hover:bg-surface-border/80 text-white text-sm font-bold transition-all active:scale-[0.98]">
                                    <span class="material-symbols-outlined text-[18px]">shopping_bag</span>
                                    Add to Grimoire
                                </button>
                            </div>
                        </div>
                    </article>
                    <!-- Card 5 -->
                    <article
                        class="flex flex-col rounded-xl bg-surface-dark overflow-hidden group hover:shadow-[0_0_25px_rgba(147,17,212,0.15)] hover:bg-[#2a222f] transition-all duration-300 border border-transparent hover:border-primary/20">
                        <div class="relative w-full aspect-[4/5] bg-surface-border overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                data-alt="Elegant small eye serum bottle with silver cap on dark marble"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCzOHjpWxgpPtYBvFs3hAFmmSu5iaDR78RqY-piX1oTXawjO32jULwX0tcTEgUbMjFvxDDAsbJkA1xGGF3rZMTFZNjFiowOaLSljm2fbhZTPBjMfzKcz6q-mzj3QUpgom9dPkWqp-UddYYTl-rSMl25SVpbLAyt1MBJN-xQwrHgFczDogtiw4oPfYE0nYt1_TjlQZBqbWfv5rH8OhTDvnN6hmoZmW3aCQNiGiJfRUzSU0FarmrFqP6Hq6ubFVbjtNVe4o89HKzMuRV6");'>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-1 gap-2">
                            <div class="flex justify-between items-start">
                                <h3 class="text-white text-lg font-bold leading-tight">Nightshade Eye Serum</h3>
                                <p class="text-white font-medium">$45.00</p>
                            </div>
                            <p class="text-gray-400 text-sm line-clamp-2">Banish dark circles and signs of fatigue.
                                Ideal for the sleepless mage.</p>
                            <div class="mt-auto pt-4">
                                <button
                                    class="w-full flex items-center justify-center gap-2 rounded-lg h-10 bg-surface-border hover:bg-surface-border/80 text-white text-sm font-bold transition-all active:scale-[0.98]">
                                    <span class="material-symbols-outlined text-[18px]">shopping_bag</span>
                                    Add to Grimoire
                                </button>
                            </div>
                        </div>
                    </article>
                    <!-- Card 6 -->
                    <article
                        class="flex flex-col rounded-xl bg-surface-dark overflow-hidden group hover:shadow-[0_0_25px_rgba(147,17,212,0.15)] hover:bg-[#2a222f] transition-all duration-300 border border-transparent hover:border-primary/20">
                        <div class="relative w-full aspect-[4/5] bg-surface-border overflow-hidden">
                            <div class="absolute inset-0 bg-cover bg-center group-hover:scale-105 transition-transform duration-500"
                                data-alt="Matte black tin of hair pomade open to show texture"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD2qI-CegK9yhrk9En3E8APTOadfZbwdSpA1OMHuY-4zJtYkVOEKHT8KeXOBi2ULPsGWMuyD389_O8uBv-q6KB0SybQtBXCfhqmUPiOpaDfW0oFxzX7MResVDJiv7g2nbDrH3IeBychKb9tRhoRWZ9a7t9t48VlqVN3W_wW2JYuZsT6SDwQvU4ZAH02pKoogUS2S7ufsobuvAJr0mNmQRL1li4WKln0J-kJHW6ggai6Sd9mOgK-jha4iSlrWtTcuZlFjWhDUa9x78Sy");'>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-1 gap-2">
                            <div class="flex justify-between items-start">
                                <h3 class="text-white text-lg font-bold leading-tight">Ethereal Clay Pomade</h3>
                                <p class="text-white font-medium">$22.00</p>
                            </div>
                            <p class="text-gray-400 text-sm line-clamp-2">Strong hold with a matte finish. Keeps style
                                locked in through any spellcasting.</p>
                            <div class="mt-auto pt-4">
                                <button
                                    class="w-full flex items-center justify-center gap-2 rounded-lg h-10 bg-surface-border hover:bg-surface-border/80 text-white text-sm font-bold transition-all active:scale-[0.98]">
                                    <span class="material-symbols-outlined text-[18px]">shopping_bag</span>
                                    Add to Grimoire
                                </button>
                            </div>
                        </div>
                    </article>
                </div>
                <!-- Pagination -->
                <div class="flex justify-center mt-12 gap-2">
                    <button
                        class="size-10 flex items-center justify-center rounded-lg bg-surface-border text-gray-400 hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                    </button>
                    <button
                        class="size-10 flex items-center justify-center rounded-lg bg-primary text-white font-bold">1</button>
                    <button
                        class="size-10 flex items-center justify-center rounded-lg bg-surface-border text-gray-300 hover:bg-surface-border/80 hover:text-white transition-colors">2</button>
                    <button
                        class="size-10 flex items-center justify-center rounded-lg bg-surface-border text-gray-300 hover:bg-surface-border/80 hover:text-white transition-colors">3</button>
                    <button
                        class="size-10 flex items-center justify-center rounded-lg bg-surface-border text-gray-400 hover:text-white transition-colors">
                        <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                    </button>
                </div>
            </main>
        </div>
    </div>
    <!-- Footer -->
    <footer class="bg-surface-dark border-t border-surface-border mt-12 py-12 px-4 md:px-10">
        <div class="max-w-[1440px] mx-auto grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-2 text-white mb-4">
                    <span class="material-symbols-outlined text-primary text-2xl">raven</span>
                    <h3 class="text-lg font-bold">Dark Mage</h3>
                </div>
                <p class="text-gray-400 text-sm leading-relaxed">
                    Forged in shadow, refined by science. We provide the modern warlock with the tools to master his
                    appearance.
                </p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-4">Shop</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a class="hover:text-primary transition-colors" href="#">All Products</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Face</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Beard &amp; Hair</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Body</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-4">Support</h4>
                <ul class="space-y-2 text-sm text-gray-400">
                    <li><a class="hover:text-primary transition-colors" href="#">Shipping &amp; Returns</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">FAQ</a></li>
                    <li><a class="hover:text-primary transition-colors" href="#">Contact Us</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-4">Join the Coven</h4>
                <p class="text-gray-400 text-sm mb-4">Subscribe for exclusive spells and product drops.</p>
                <div class="flex gap-2">
                    <input
                        class="flex-1 rounded-lg bg-background-dark border border-surface-border text-white px-3 py-2 text-sm focus:ring-1 focus:ring-primary focus:outline-none"
                        placeholder="Email address" type="email" />
                    <button
                        class="bg-primary text-white rounded-lg px-4 py-2 text-sm font-bold hover:bg-primary/90 transition-colors">Join</button>
                </div>
            </div>
        </div>
        <div
            class="max-w-[1440px] mx-auto pt-8 border-t border-surface-border flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500">
            <p>© 2023 Dark Mage Grooming Co. All rights reserved.</p>
            <div class="flex gap-6">
                <a class="hover:text-white transition-colors" href="#">Privacy Policy</a>
                <a class="hover:text-white transition-colors" href="#">Terms of Service</a>
            </div>
        </div>
    </footer>
</body>

</html>

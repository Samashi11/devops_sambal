<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dark Mage - About Us</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200..800&amp;display=swap" rel="stylesheet" />
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
                        "background-dark": "#1c1022",
                        "secondary-text": "#b09db9",
                    },
                    fontFamily: {
                        "display": ["Manrope", "sans-serif"],
                        "body": ["Manrope", "sans-serif"],
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
        /* Custom scrollbar for dark theme */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #1c1022;
        }

        ::-webkit-scrollbar-thumb {
            background: #332839;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #9311d4;
        }
    </style>
</head>

<body class="bg-background-light dark:bg-background-dark text-[#111418] dark:text-white overflow-x-hidden font-display">
    <div class="relative flex min-h-screen w-full flex-col overflow-x-hidden">
        <!-- Top Navigation -->
        <header
            class="w-full border-b border-solid border-b-[#332839] bg-background-light dark:bg-background-dark px-4 py-3 lg:px-10 sticky top-0 z-50">
            <div class="mx-auto flex max-w-[960px] items-center justify-between">
                <div class="flex items-center gap-4 text-[#111418] dark:text-white cursor-pointer">
                    <div class="size-8 flex items-center justify-center text-primary">
                        <!-- Logo Icon -->
                        <span class="material-symbols-outlined !text-3xl">auto_fix_high</span>
                    </div>
                    <h2 class="text-lg font-bold leading-tight tracking-[-0.015em]">Dark Mage</h2>
                </div>
                <nav class="hidden md:flex items-center gap-8">
                    <a class="text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="{{ url('/') }}">Home</a>
                    <a class="text-sm font-medium leading-normal text-primary" href="{{ route('products') }}">Shop</a>
                    <a class="text-sm font-medium leading-normal hover:text-primary transition-colors"
                        href="{{ route('contact') }}">Contact</a>
                </nav>
                <div class="flex items-center gap-4">
                    <button
                        class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary hover:bg-[#7a0eb0] transition-colors text-white text-sm font-bold leading-normal tracking-[0.015em]">
                        <span class="truncate">Shop Potions</span>
                    </button>
                    <!-- Mobile Menu Icon -->
                    <button class="md:hidden text-white">
                        <span class="material-symbols-outlined">menu</span>
                    </button>
                </div>
            </div>
        </header>
        <main class="flex flex-col items-center justify-center w-full">
            <div class="w-full max-w-[960px] px-4 py-8 md:px-10 md:py-12">
                <div class="flex min-h-[480px] flex-col gap-6 bg-cover bg-center bg-no-repeat rounded-xl items-center justify-center p-8 text-center relative overflow-hidden group shadow-2xl shadow-primary/10"
                    data-alt="Dark mysterious smoke texture background with purple ambient lighting"
                    style='background-image: linear-gradient(180deg, rgba(28, 16, 34, 0.4) 0%, rgba(28, 16, 34, 0.9) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuBWIfFZBZb6eUjPTQ04u9UCJ1Jg7AGyOeeGj3T2NjMc570gD41BA1agNYkOdI09LbxU40BCmEGIr0TB6PNrH3Hq7GRnzA1Z3T1-n-CulNghd8S8SIhMnWK-QUMgfXir1WXTxutz3eyLisH-8VqV1NLzDBI4iYsU6x6v8P9KR3EX71ZlXKOYclOZwCFkuQGtdds81JbgeHPCXTxKnX3mCGvUtz6i-I1D3Bzo5p9oNVX0ISRAHg9fFZoHK6AePHHG01LS-rcCUpwiOaSX");'>
                    <div class="absolute inset-0 bg-background-dark/30 backdrop-blur-[2px]"></div>
                    <div class="relative z-10 flex flex-col gap-4 max-w-[700px]">
                        <div
                            class="inline-flex items-center justify-center gap-2 px-3 py-1 rounded-full bg-primary/20 border border-primary/30 w-fit mx-auto mb-2">
                            <span class="material-symbols-outlined text-sm text-primary">auto_fix_high</span>
                            <span class="text-xs font-bold uppercase tracking-wider text-white/90">Est. MMXXIII</span>
                        </div>
                        <h1 class="text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                            Seni Bayangan &amp; Kulit
                        </h1>
                        <h2 class="text-gray-200 text-base md:text-lg font-normal leading-relaxed">
                            Dark Mage bukan sekadar perawatan kulit; ini adalah alkimia untuk pria modern. Kami
                            memadukan rahasia kuno dengan sains klinis untuk mengusir kusamnya keseharian. Buka wajah
                            sejatimu dan melangkah keluar dari bayang-bayang.
                        </h2>
                    </div>
                    <div class="relative z-10 pt-4">
                        <button
                            class="flex items-center justify-center gap-2 rounded-lg h-12 px-6 bg-primary hover:bg-[#7a0eb0] transition-all text-white text-base font-bold tracking-[0.015em] shadow-lg shadow-primary/25">
                            <span>Jelajahi Kisah Kami</span>
                            <span class="material-symbols-outlined text-lg">arrow_downward</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full max-w-[960px] px-4 pt-8 md:px-10">
                <div class="flex flex-col gap-2 border-l-4 border-primary pl-4">
                    <h2 class="text-white text-3xl font-bold leading-tight tracking-[-0.015em]">Para Alkemis</h2>
                    <p class="text-secondary-text text-sm md:text-base">Temui para master guild di balik formulasi kami.
                    </p>
                </div>
            </div>
            <div class="w-full max-w-[960px] px-4 py-8 md:px-10">
                <div class="grid grid-cols-2 md:grid-cols-3 gap-6">
                    <div class="group flex flex-col gap-4">
                        <div class="relative w-full aspect-[3/4] overflow-hidden rounded-xl bg-gray-800">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                data-alt="Portrait of Julian V, a man with a beard looking serious in dark lighting"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuASjjL8nzCv_0p5de6jpkVonBzei2fZ58x8GsK4XMDtkN29SjzAzlhW_16ZvgkjsQFirysDvLNXdOSjq36OKS0mHhs-xxuSxQeEz9OsWU70jpbkJ1uGMSoquW8-40kZqausXkNy8BbG9HS5BDF1D_Ojl9OJVxfYHWvBMrtxJsMo2KsUh0_ijL5keTafgvm7KrcXA_1Fclc9bXLI7hnXf6qafE4sEp3xgcYneeVFVTMspEYd_eJQ3kxxNeKalTGe4UYWi1S1kwd8K96_");'>
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent opacity-80">
                            </div>
                        </div>
                        <div>
                            <p class="text-white text-lg font-bold leading-normal flex items-center gap-2">
                                M. Mahardika
                            </p>
                            <p class="text-secondary-text text-sm font-medium uppercase tracking-wide">Master Formulator
                            </p>
                        </div>
                    </div>
                    <div class="group flex flex-col gap-4">
                        <div class="relative w-full aspect-[3/4] overflow-hidden rounded-xl bg-gray-800">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                data-alt="Portrait of Marcus T, a man with glasses and focused expression"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAuAMyPFLg-Fm0t3k60q_QUGThxQYlCSgLiB7UjB5d5pGUDtfXtpPe-pG1MMQiJre9hJbWypw_dX93EhiDjN4iPfQJupYInsnAzvJZB1uaolrzDH0-VFAr3g0-9w8xE_StDbA_oTrJCOZs60ge8H0Mk6SqqNYa3E27hdDO2_CiDSOCLtgEU1y1JCcI8YIIe90XCLZSRi5CKDLAErlU8z1dr3h2r86VIWZOLlZtU17kGA-1NjdR4D0un4yKgVrCw5C9qAYEsKC10EB4h");'>
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent opacity-80">
                            </div>
                        </div>
                        <div>
                            <p class="text-white text-lg font-bold leading-normal">Salman Maula Ash-Shidqi</p>
                            <p class="text-secondary-text text-sm font-medium uppercase tracking-wide">Brand Sorcerer
                            </p>
                        </div>
                    </div>
                    <div class="group flex flex-col gap-4">
                        <div class="relative w-full aspect-[3/4] overflow-hidden rounded-xl bg-gray-800">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                data-alt="Portrait of Silas B, a man with dark hair in a studio setting"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDGgFRpq8NoyXXbM4KWPaJRPxBh5vDFOQI7O1J85rRzigD_qZsQmOOIHxA_mKv4IHexYSVSqo3d2lI-HkYYaOIn3gykxDBwY9oaKCBDZIx4-VzU3JKVof3OQfFZD0eHeVQe1LR5SdyXZDN9390xzQfXQHyLpvsKxk9pzmb7OpKlyzDzISOob9jYebINjQ5o_QeD25PS-EuO72iIi9qhLIv3lP4utz9lSBeaJBlSHwR-aUB41ebqP-3zU_HSV7lSIVp7VXljt_jvYp7w");'>
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent opacity-80">
                            </div>
                        </div>
                        <div>
                            <p class="text-white text-lg font-bold leading-normal">Ahmad Ghozi</p>
                            <p class="text-secondary-text text-sm font-medium uppercase tracking-wide">Chief Alchemist
                            </p>
                        </div>
                    </div>
                    <div class="group flex flex-col gap-4">
                        <div class="relative w-full aspect-[3/4] overflow-hidden rounded-xl bg-gray-800">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                data-alt="Portrait of Damien R, an artistic man with a slight smile"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuDxJbWWttsIkd0cZJ-14UxtO5zd01o8HZ_MdXD6LS_nX85Iqj25cJASI8KVamLcjn9Vj9Q2rQ4m4yPJic8KEfGbqzONsqX38cSrhS7kJA_5lAs-ED7Rk4dIuIwZCL5lDYkhsueRsPCmbgm5z4IQa8j9QhQEfn-uw6WcxIMTmIYxk3VuUS31pEJ7NUtxoFLmpNREIJalbbn5vxJAWFDHO8PaNk--K31pBDoVQHb_bVcb1qDzGw74Ity89iKumPw3FhP18aZ7suyv7sF2");'>
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent opacity-80">
                            </div>
                        </div>
                        <div>
                            <p class="text-white text-lg font-bold leading-normal">Fadil Muhammad Zain</p>
                            <p class="text-secondary-text text-sm font-medium uppercase tracking-wide">Penyihir Visual
                            </p>
                        </div>
                    </div>
                    <div class="group flex flex-col gap-4">
                        <div class="relative w-full aspect-[3/4] overflow-hidden rounded-xl bg-gray-800">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                data-alt="Portrait of Victor K, a man with strong features in shadow"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCpLALbYIUynUldlRzy16sGZMWWWw3eRJPEZPpL0DNa_nHQ8quj6vWIfnNchs4CvItgxY7kO_uEDUWel0rp7RZAMCPDmmQWKjPRhy7zCfiroMctlKDXbD6CrjGKYis4k6ZgCJQePgORzctQnRBA4X2nbGivXdKzZiv0kO_JU-swLIB9oJWPA0JVXXYolyM_txd67CXMfysgdgDq3BTNBg_LjDJcGzh5ds0hGKPUeYMj_h3ftPdvgdoBNTtXwb0qLJsej4dxsH6TEuRn");'>
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent opacity-80">
                            </div>
                        </div>
                        <div>
                            <p class="text-white text-lg font-bold leading-normal">Reyhan</p>
                            <p class="text-secondary-text text-sm font-medium uppercase tracking-wide">Operasi Bayangan
                            </p>
                        </div>
                    </div>
                    <div class="group flex flex-col gap-4">
                        <div class="relative w-full aspect-[3/4] overflow-hidden rounded-xl bg-gray-800">
                            <div class="w-full h-full bg-cover bg-center transition-transform duration-500 group-hover:scale-105"
                                data-alt="Portrait of Elias M, a man looking confident"
                                style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuD1cxJnpItrPsh8yst37L71Vx_b8woa_5iQ2G-SPsUVv-riPzlHXgm73YPI_DQGPxndBiHtfFY-lYx4zaNtrb_hvHB_C7-rXYDr4NOltOeFcpIXtm5WuwP0-Prk0GR_pXEkZNMSiu0LQeAqcOnmi_irGJDGbymSZqiO1h5xN2r1OH3HnhpPc5zLfKQX-G3ovygvzjW5enjG0F-N1aYbQdzo5tp5bnkZGREk4ayS7QwLEOA7xF6mQs3jrg9BebFim0eiPL4y3V-I46xY");'>
                            </div>
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent opacity-80">
                            </div>
                        </div>
                        <div>
                            <p class="text-white text-lg font-bold leading-normal">Faisa Al Farrel</p>
                            <p class="text-secondary-text text-sm font-medium uppercase tracking-wide">Warlock Produk
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full bg-[#110a15] mt-12 border-t border-[#332839]">
                <div
                    class="mx-auto flex max-w-[960px] flex-col items-center justify-center gap-6 px-4 py-16 md:px-10 md:py-24 text-center">
                    <span class="material-symbols-outlined text-6xl text-primary animate-pulse">hotel_class</span>
                    <div class="flex flex-col gap-4 max-w-[600px]">
                        <h1 class="text-white text-3xl md:text-5xl font-black leading-tight tracking-[-0.033em]">
                            Bergabung dengan Coven
                        </h1>
                        <p class="text-secondary-text text-lg font-normal leading-relaxed">
                            Buka wajah sejatimu. Ramuan kami terbatas, dan malam masih muda.
                        </p>
                    </div>
                    <div class="flex w-full justify-center pt-4">
                        <button
                            class="flex min-w-[200px] cursor-pointer items-center justify-center gap-3 overflow-hidden rounded-lg h-14 px-8 bg-primary hover:bg-[#7a0eb0] transition-all text-white text-lg font-bold leading-normal tracking-[0.015em] shadow-[0_0_20px_rgba(147,17,212,0.3)] hover:shadow-[0_0_30px_rgba(147,17,212,0.5)]">
                            <span>Beli Ramuan</span>
                            <span class="material-symbols-outlined">arrow_forward</span>
                        </button>
                    </div>
                </div>
            </div>
            <footer class="w-full border-t border-[#332839] bg-background-dark px-4 py-8 md:px-10">
                <div class="mx-auto flex max-w-[960px] flex-col md:flex-row justify-between items-center gap-4">
                    <div class="flex items-center gap-2 text-white opacity-80">
                        <span class="material-symbols-outlined text-xl">cruelty_free</span>
                        <span class="text-sm font-medium">© 2026 Dark Mage Beauty</span>
                    </div>
                    <div class="flex gap-6">
                        <a class="text-secondary-text hover:text-white text-sm transition-colors"
                            href="#">Privasi</a>
                        <a class="text-secondary-text hover:text-white text-sm transition-colors"
                            href="#">Syarat &amp; Ketentuan</a>
                        <a class="text-secondary-text hover:text-white text-sm transition-colors"
                            href="#">Instagram</a>
                    </div>
                </div>
            </footer>
        </main>
    </div>
</body>

</html>

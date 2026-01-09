<!DOCTYPE html>

<html class="dark" lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Dark Mage - Contact</title>
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
                        "surface-dark": "#231c27",
                        "border-dark": "#4b3b54",
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
        /* Custom scrollbar for a cleaner dark look */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #1c1022;
        }

        ::-webkit-scrollbar-thumb {
            background: #4b3b54;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #9311d4;
        }
    </style>
</head>

<body
    class="bg-background-light dark:bg-background-dark font-display min-h-screen flex flex-col overflow-x-hidden text-slate-900 dark:text-white">
    <!-- Top Navigation -->
    <header
        class="sticky top-0 z-50 flex items-center justify-between whitespace-nowrap border-b border-solid border-b-[#332839] bg-background-dark/95 backdrop-blur-md px-6 py-4 md:px-10">
        <div class="flex items-center gap-4 text-white">
            <div class="size-6 text-primary">
                <span class="material-symbols-outlined text-2xl">auto_fix_high</span>
            </div>
            <h2 class="text-white text-lg font-bold leading-tight tracking-[-0.015em]">Dark Mage</h2>
        </div>
        <div class="flex flex-1 justify-end gap-8">
            <div class="hidden md:flex items-center gap-9">
                <a class="text-white text-sm font-medium leading-normal hover:text-primary transition-colors"
                    href="{{ url('/') }}">Home</a>
                <a class="text-white text-sm font-medium leading-normal hover:text-primary transition-colors"
                    href="{{ route('products') }}">Shop</a>
                <a class="text-white text-sm font-medium leading-normal hover:text-primary transition-colors"
                    href="{{ route('about') }}">About Us</a>
            </div>
            <button
                class="flex min-w-[84px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 bg-primary hover:bg-primary/90 transition-colors text-white text-sm font-bold leading-normal tracking-[0.015em]">
                <span class="truncate">Cart</span>
            </button>
        </div>
    </header>
    <main class="flex-grow flex justify-center py-10 px-4 md:px-8">
        <div class="flex flex-col lg:flex-row max-w-[1200px] w-full gap-8 lg:gap-16">
            <div class="w-full lg:w-1/2 flex flex-col gap-6">
                <div
                    class="relative w-full aspect-[4/5] lg:h-full lg:aspect-auto rounded-xl overflow-hidden shadow-2xl shadow-primary/10">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-background-dark via-transparent to-transparent opacity-60 z-10">
                    </div>
                    <div class="w-full h-full bg-center bg-no-repeat bg-cover transform hover:scale-105 transition-transform duration-700"
                        data-alt="Dark moody photograph of a charcoal face wash bottle in mist"
                        style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCegNetWELbYC3yPtyeYBYdwmZe_xh2VgU5MxqQPS4cq0g5qJTm9OTwKpiwm0BBg1oFhoYTxoIxQixTzU4qDcc0L47C3qDoy1C71sJRDtUb59boqy8gJHz_hr_ra6K5sWuFoZzgC58jT6NVOttoWrbm4A7_Mo1uY3avGggdqiU5Ogoi0NVHuCHNUd_9jGsxPnhnu63G1zyTntcJQySCerHdyZSwaP8v_BZupiNlBXtDLvv2Eimjy5-N16T5oMlHAcu4TvBGry-6GaE-");'>
                    </div>
                    <div class="absolute bottom-0 left-0 p-8 z-20">
                        <p class="text-white text-3xl font-bold tracking-tight mb-2">Ritual Menanti</p>
                        <p class="text-[#b09db9] text-base max-w-md">Bergabunglah dengan ribuan orang yang telah
                            mengubah rutinitas mereka menjadi mantra kepercayaan diri.</p>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 flex flex-col justify-center">
                <div class="mb-8">
                    <p class="text-primary text-sm font-bold tracking-wider uppercase mb-2">Hubungi Dukungan</p>
                    <h1 class="text-white text-4xl md:text-5xl font-black leading-tight tracking-[-0.033em] mb-4">
                        CONTACT US</h1>
                    <p class="text-[#b09db9] text-lg font-normal leading-relaxed">
                        Ada pertanyaan tentang pesanan Anda atau formula alkimia kami? Tim penyihir kami siap membantu
                        Anda dalam perjalanan Anda.
                    </p>
                </div>
                <form class="flex flex-col gap-5" method="POST" action="/contact/send">
                    @csrf
                    <!-- Nama -->
                    <label class="flex flex-col flex-1">
                        <p class="text-white text-sm font-medium pb-2 ml-1">Nama</p>
                        <input name="name" type="text" required aria-label="Nama pengirim"
                            placeholder="Masukkan nama Anda"
                            class="form-input w-full rounded-lg text-white bg-surface-dark border border-border-dark h-14 px-4" />
                    </label>

                    <!-- Email -->
                    <label class="flex flex-col flex-1">
                        <p class="text-white text-sm font-medium pb-2 ml-1">Alamat Email</p>
                        <input name="email" type="email" required aria-label="Email pengirim"
                            placeholder="Masukkan email Anda"
                            class="form-input w-full rounded-lg text-white bg-surface-dark border border-border-dark h-14 px-4" />
                    </label>

                    <!-- Subject -->
                    <label class="flex flex-col w-full">
                        <p class="text-white text-sm font-medium pb-2 ml-1">Perihal</p>
                        <input name="subject" type="text" required aria-label="Subjek pesan"
                            placeholder="Mengenai apa pesan ini?"
                            class="form-input w-full rounded-lg text-white bg-surface-dark border border-border-dark h-14 px-4" />
                    </label>

                    <!-- Message -->
                    <label class="flex flex-col w-full">
                        <p class="text-white text-sm font-medium pb-2 ml-1">Pesan</p>
                        <textarea name="message" required aria-label="Isi pesan" placeholder="Tuliskan pesan Anda di sini..."
                            class="form-textarea w-full rounded-lg text-white bg-surface-dark border border-border-dark min-h-[160px] p-4 resize-y"></textarea>
                    </label>

                    <!-- Honeypot (anti-spam, disembunyikan via CSS) -->
                    <input type="text" name="website" tabindex="-1" autocomplete="off" class="hidden" />

                    <button type="submit"
                        class="mt-2 flex w-full items-center justify-center rounded-lg h-14 bg-primary text-white font-bold">
                        Kirim Pesan
                    </button>
                    @if (session('success'))
                        <p class="text-green-400 text-sm mt-2">
                            {{ session('success') }}
                        </p>
                    @endif

                </form>

                <div class="mt-10 pt-8 border-t border-[#332839] grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="flex items-start gap-4">
                        <div
                            class="size-10 rounded-full bg-surface-dark border border-border-dark flex items-center justify-center text-primary shrink-0">
                            <span class="material-symbols-outlined">mail</span>
                        </div>
                        <div>
                            <p class="text-white font-bold mb-1">Email Kami</p>
                            <p class="text-[#b09db9] text-sm"><a
                                    href="mailto:info@darkmage.my.id">info@darkmage.my.id</a></p>
                        </div>
                    </div>
                    <div class="flex items-start gap-4">

                        <div
                            class="size-10 rounded-full bg-surface-dark border border-border-dark flex items-center justify-center text-primary shrink-0">
                            <span class="material-symbols-outlined">send</span>
                        </div>
                        <div>
                            <a
                                href="https://wa.me/+6289507392244?text=Halo%20Tim%20Dark%20Mage,%20saya%20ingin%20bertanya%20tentang%20produk%20Anda.">
                                <p class="text-white font-bold mb-1">Whatsapp Kami</p>
                                <p class="text-[#b09db9] text-sm">+62 895-0739-2244
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="border-t border-[#332839] bg-[#161118] py-8">
        <div class="flex flex-col md:flex-row justify-center items-center gap-6 text-[#b09db9] text-sm">
            <p>© 2026 Dark Mage. Hak cipta dilindungi undang-undang.</p>
            <div class="flex gap-6">
                <a class="hover:text-white transition-colors" href="#">Kebijakan Privasi</a>
                <a class="hover:text-white transition-colors" href="#">Syarat Layanan</a>
            </div>
        </div>
    </footer>
</body>

</html>

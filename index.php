<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dnkcreative</title>
    <link rel="icon" type="image/png" href="logodnk.png">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>

     <!-- Modal Preview Gambar Hasil Project -->
    <div id="image-modal" class="fixed inset-0 bg-black/90 backdrop-blur-md hidden flex items-center justify-center z-[100] p-4 cursor-pointer" onclick="closeImageModal()">
        <div class="relative max-w-4xl w-full max-h-[90vh] flex flex-col items-center justify-center" onclick="event.stopPropagation()">
            <!-- Tombol Close -->
            <button onclick="closeImageModal()" class="absolute -top-10 right-0 text-white text-3xl font-bold hover:text-blue-400 transition">&times;</button>
            
            <!-- Elemen Gambar Large -->
            <img id="modal-img-target" src="" alt="Preview Project" class="max-w-full max-h-[75vh] object-contain rounded-2xl shadow-2xl border border-gray-800">
            
            <!-- Judul & Keterangan Gambar -->
            <div class="mt-4 text-center">
                <h3 id="modal-img-title" class="text-xl font-bold text-white"></h3>
                <p id="modal-img-desc" class="text-xs text-gray-400 mt-1 max-w-xl mx-auto"></p>
            </div>
        </div>
    </div>

<body class="antialiased">

    <!-- Header Navigation -->
    <header class="fixed top-0 left-0 right-0 z-50 bg-[#0b0f19]/80 backdrop-blur-md border-b border-gray-800/60">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <!-- Logo -->
                <a href="#home" class="text-xl font-extrabold tracking-tight text-white flex items-center gap-2">
                    <span class="w-8 h-8 bg-blue-600/20 border border-blue-500/30 rounded-lg flex items-center justify-center overflow-hidden p-1">
                        <img src="logodnk.png" alt="Logo" class="w-full h-full object-contain">
                    </span>
                    Dinika<span class="text-blue-500">.portfolio</span>
                </a>

                <!-- Desktop Menu -->
                <nav class="hidden lg:flex items-center space-x-6 text-sm font-medium text-gray-300">
                    <a href="#home" class="hover:text-blue-400 transition">Beranda</a>
                    <a href="#about" class="hover:text-blue-400 transition">Tentang</a>
                    <a href="#skills" class="hover:text-blue-400 transition">Keahlian</a>
                    <a href="#vision" class="hover:text-blue-400 transition">Visi Misi</a>
                    <a href="#experience" class="hover:text-blue-400 transition">Pengalaman</a>
                    <a href="#education" class="hover:text-blue-400 transition">Pendidikan</a>
                    <a href="#projects" class="hover:text-blue-400 transition">Proyek</a>
                    <a href="#contact" class="hover:text-blue-400 transition">Kontak</a>
                </nav>


                <!-- Action Button WhatsApp -->
                <div class="flex items-center gap-3">
                    <a href="https://wa.me/62815161683004?text=Halo%20Dinika,%20saya%20melihat%20website%20portofolio%20Anda%20dan%20tertarik%20untuk%20berdiskusi." 
                       target="_blank" 
                       rel="noopener noreferrer" 
                       class="bg-gradient-to-r from-emerald-600 to-green-600 hover:from-emerald-500 hover:to-green-500 text-white text-xs sm:text-sm font-semibold px-4 py-2 rounded-lg shadow-lg shadow-emerald-500/20 transition-all flex items-center gap-2">
                        <i class="fa-brands fa-whatsapp text-base"></i>
                        <span>WhatsApp</span>
                    </a>
                    <!-- Mobile Hamburger -->
                    <button id="menu-btn" class="lg:hidden text-gray-400 hover:text-white p-2">
                        <i class="fa-solid fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div id="mobile-menu" class="hidden lg:hidden bg-gray-900 border-b border-gray-800 px-4 py-4 space-y-3">
            <a href="#home" class="block text-gray-300 hover:text-blue-400">Beranda</a>
            <a href="#about" class="block text-gray-300 hover:text-blue-400">Tentang</a>
            <a href="#skills" class="block text-gray-300 hover:text-blue-400">Keahlian</a>
            <a href="#vision" class="block text-gray-300 hover:text-blue-400">Visi Misi</a>
            <a href="#experience" class="block text-gray-300 hover:text-blue-400">Pengalaman</a>
            <a href="#education" class="block text-gray-300 hover:text-blue-400">Pendidikan</a>
            <a href="#projects" class="block text-gray-300 hover:text-blue-400">Proyek</a>
            <a href="#contact" class="block text-gray-300 hover:text-blue-400">Kontak</a>
        </div>
    </header>

    <!-- Hero Section -->
    <section id="home" class="relative min-h-screen flex items-center justify-center pt-24 pb-12 px-4">
        <div class="hero-glow"></div>
        <div class="max-w-4xl text-center space-y-6">
            <div class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-blue-500/10 border border-blue-500/20 text-blue-400 text-xs font-semibold">
                <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                Mahasiswa Active - Semester 3 S1 Teknik Informatika
            </div>
            
            <h1 class="text-4xl sm:text-6xl md:text-7xl font-extrabold tracking-tight text-white">
                Halo, Saya <span class="text-gradient">Dinika Bagas Putra</span>
            </h1>
            
            <p class="text-base sm:text-xl text-gray-400 max-w-2xl mx-auto font-normal leading-relaxed">
                Remaja berusia 19 tahun yang berfokus pada pengembangan skill dan kemampuan saya terutama sebagai software engineer untuk memperbanyak portfolio sebagai bekal masa depan saya
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4 pt-4">
                <a href="#projects" class="bg-blue-600 hover:bg-blue-500 text-white font-semibold px-6 py-3 rounded-xl transition shadow-lg shadow-blue-600/30">
                    <i class="fa-solid fa-diagram-project mr-2"></i>Lihat Portofolio
                </a>
                <a href="#contact" class="glass-card hover:bg-gray-800 text-gray-200 font-semibold px-6 py-3 rounded-xl transition">
                    <i class="fa-solid fa-paper-plane mr-2"></i>Hubungi Saya
                </a>
            </div>

            <!-- Quick Info Badges -->
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-4 pt-10 max-w-3xl mx-auto text-left">
                <div class="glass-card p-4 rounded-xl border border-gray-800">
                    <p class="text-xs text-gray-400">Usia</p>
                    <p class="text-lg font-bold text-white">19 Tahun</p>
                </div>
                <div class="glass-card p-4 rounded-xl border border-gray-800">
                    <p class="text-xs text-gray-400">Program Studi</p>
                    <p class="text-lg font-bold text-white">Teknik Informatika</p>
                </div>
                <div class="glass-card p-4 rounded-xl border border-gray-800">
                    <p class="text-xs text-gray-400">Jenjang</p>
                    <p class="text-lg font-bold text-white">S1 (Semester 3)</p>
                </div>
                <div class="glass-card p-4 rounded-xl border border-gray-800">
                    <p class="text-xs text-gray-400">Studi</p>
                    <p class="text-lg font-bold text-blue-400">Duta Bangsa University Of Surakarta</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Tentang Saya Section -->

    <!-- Tentang Saya Section -->
    <section id="about" class="py-20 bg-gray-900/40">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white">Tentang <span class="text-blue-500">Saya</span></h2>
                <p class="text-gray-400 text-sm mt-2">Mengenal saya lebih dekat sebagai mahasiswa & developer</p>
            </div>

            <div class="grid md:grid-cols-12 gap-8 items-center">
                <!-- Kolom Foto Profil -->
                <div class="md:col-span-4 flex justify-center">
                    <div class="relative group">
                        <!-- Efek Glow di belakang foto -->
                        <div class="absolute -inset-1 bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl blur opacity-30 group-hover:opacity-70 transition duration-500"></div>
                        
                        <!-- Container Foto -->
                        <div class="relative w-64 h-72 sm:w-72 sm:h-80 rounded-2xl overflow-hidden border border-gray-700 bg-gray-800 shadow-xl">
                            <!-- Ganti 'foto-dinika.jpg' dengan nama file foto kamu -->
                            <img src="profil-dinika.jpeg" alt="Dinika Bagas Putra" class="w-full h-full object-cover group-hover:scale-105 transition duration-500">
                        </div>
                    </div>
                </div>

                <!-- Kolom Deskripsi & Bio -->
                <div class="md:col-span-8 grid sm:grid-cols-2 gap-6">
                    <!-- Deskripsi Singkat -->
                    <div class="glass-card p-6 rounded-2xl border border-gray-800 space-y-4 flex flex-col justify-between">
                        <div>
                            <h3 class="text-xl font-bold text-white mb-3">Hi, Saya Dinika Bagas Putra 👋</h3>
                            <p class="text-gray-300 leading-relaxed text-sm">
                                Saya adalah seorang mahasiswa S1 Teknik Informatika semester 3 berusia 19 tahun dengan passion mendalam di bidang teknologi dan software engineering. 
                            </p>
                            <p class="text-gray-300 leading-relaxed text-sm mt-2">
                                Saya menikmati proses memecahkan masalah kompleks melalui kode, merancang arsitektur basis data MySQL, serta membangun antarmuka web yang interaktif.
                            </p>
                        </div>
                        <div class="pt-2 text-xs text-blue-400 font-semibold">
                            <i class="fa-solid fa-location-dot mr-1"></i> Indonesia
                        </div>
                    </div>

                    <!-- Biodata Table Card -->
                    <div class="glass-card p-6 rounded-2xl border border-gray-800 flex flex-col justify-between">
                        <h3 class="text-lg font-bold text-white mb-4 flex items-center gap-2">
                            <i class="fa-solid fa-address-card text-blue-500"></i> Biodata Singkat
                        </h3>
                        <div class="space-y-3 text-sm">
                            <div class="flex justify-between py-1.5 border-b border-gray-800/80">
                                <span class="text-gray-400">Nama</span>
                                <span class="font-semibold text-white">Dinika Bagas Putra</span>
                            </div>
                            <div class="flex justify-between py-1.5 border-b border-gray-800/80">
                                <span class="text-gray-400">Umur</span>
                                <span class="font-semibold text-white">19 Tahun</span>
                            </div>
                            <div class="flex justify-between py-1.5 border-b border-gray-800/80">
                                <span class="text-gray-400">Jurusan</span>
                                <span class="font-semibold text-white text-right">Teknik Informatika</span>
                            </div>
                            <div class="flex justify-between py-1.5 border-b border-gray-800/80">
                                <span class="text-gray-400">Semester</span>
                                <span class="font-semibold text-white">Semester 3</span>
                            </div>
                            <div class="flex justify-between py-1.5">
                                <span class="text-gray-400">Status</span>
                                <span class="font-semibold text-green-400">Aktif</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Keahlian Section -->
    <!-- Keahlian Section -->
    <section id="skills" class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white">Keahlian & <span class="text-blue-500">Teknologi</span></h2>
                <p class="text-gray-400 text-sm mt-2">Tools, bidang jaringan, dan pemrograman yang saya kuasai</p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Frontend Card -->
                <div class="glass-card p-6 rounded-2xl border border-gray-800 hover:border-blue-500/50 transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-blue-500/10 text-blue-400 rounded-xl flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-4">Frontend Dev</h3>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-gray-300">HTML5 & CSS3</span>
                                    <span class="text-blue-400">85%</span>
                                </div>
                                <div class="w-full bg-gray-800 h-2 rounded-full overflow-hidden">
                                    <div class="bg-blue-500 h-full rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-gray-300">JavaScript (ES6+)</span>
                                    <span class="text-blue-400">75%</span>
                                </div>
                                <div class="w-full bg-gray-800 h-2 rounded-full overflow-hidden">
                                    <div class="bg-blue-500 h-full rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-gray-300">Tailwind CSS</span>
                                    <span class="text-blue-400">80%</span>
                                </div>
                                <div class="w-full bg-gray-800 h-2 rounded-full overflow-hidden">
                                    <div class="bg-blue-500 h-full rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Backend Card -->
                <div class="glass-card p-6 rounded-2xl border border-gray-800 hover:border-purple-500/50 transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-purple-500/10 text-purple-400 rounded-xl flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-server"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-4">Backend Dev</h3>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-gray-300">PHP (Native)</span>
                                    <span class="text-purple-400">80%</span>
                                </div>
                                <div class="w-full bg-gray-800 h-2 rounded-full overflow-hidden">
                                    <div class="bg-purple-500 h-full rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-gray-300">RESTful API</span>
                                    <span class="text-purple-400">70%</span>
                                </div>
                                <div class="w-full bg-gray-800 h-2 rounded-full overflow-hidden">
                                    <div class="bg-purple-500 h-full rounded-full" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Network Engineering Card (BARU) -->
                <div class="glass-card p-6 rounded-2xl border border-gray-800 hover:border-orange-500/50 transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-orange-500/10 text-orange-400 rounded-xl flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-network-wired"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-4">Networking</h3>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-gray-300">MikroTik RouterOS</span>
                                    <span class="text-orange-400">80%</span>
                                </div>
                                <div class="w-full bg-gray-800 h-2 rounded-full overflow-hidden">
                                    <div class="bg-orange-500 h-full rounded-full" style="width: 80%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-gray-300">Network Troubleshooting</span>
                                    <span class="text-orange-400">85%</span>
                                </div>
                                <div class="w-full bg-gray-800 h-2 rounded-full overflow-hidden">
                                    <div class="bg-orange-500 h-full rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-gray-300">Routing & Switching</span>
                                    <span class="text-orange-400">75%</span>
                                </div>
                                <div class="w-full bg-gray-800 h-2 rounded-full overflow-hidden">
                                    <div class="bg-orange-500 h-full rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Database & Tools Card -->
                <div class="glass-card p-6 rounded-2xl border border-gray-800 hover:border-teal-500/50 transition flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 bg-teal-500/10 text-teal-400 rounded-xl flex items-center justify-center text-xl mb-4">
                            <i class="fa-solid fa-database"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-4">Database & Tools</h3>
                        <div class="space-y-3">
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-gray-300">MySQL / phpMyAdmin</span>
                                    <span class="text-teal-400">85%</span>
                                </div>
                                <div class="w-full bg-gray-800 h-2 rounded-full overflow-hidden">
                                    <div class="bg-teal-500 h-full rounded-full" style="width: 85%"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-xs mb-1">
                                    <span class="text-gray-300">Git & GitHub</span>
                                    <span class="text-teal-400">75%</span>
                                </div>
                                <div class="w-full bg-gray-800 h-2 rounded-full overflow-hidden">
                                    <div class="bg-teal-500 h-full rounded-full" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section id="vision" class="py-20 bg-gray-900/40">
        <div class="max-w-6xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white">Visi & <span class="text-blue-500">Misi</span></h2>
                <p class="text-gray-400 text-sm mt-2">Prinsip dan target pengembangan karier saya</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8">
                <!-- Visi Card -->
                <div class="glass-card p-8 rounded-2xl border border-blue-500/30 relative overflow-hidden">
                    <div class="absolute -right-6 -bottom-6 text-blue-500/10 text-9xl font-black">V</div>
                    <h3 class="text-2xl font-bold text-blue-400 mb-4 flex items-center gap-3">
                        <i class="fa-solid fa-eye"></i> Visi Saya
                    </h3>
                    <p class="text-gray-300 leading-relaxed text-sm sm:text-base">
                        Menjadi seorang Engineer yang handal dan mahir dalam bidang nya terutama sebagai software engineer
                    </p>
                </div>

                <!-- Misi Card -->
                <div class="glass-card p-8 rounded-2xl border border-indigo-500/30 relative overflow-hidden">
                    <div class="absolute -right-6 -bottom-6 text-indigo-500/10 text-9xl font-black">M</div>
                    <h3 class="text-2xl font-bold text-indigo-400 mb-4 flex items-center gap-3">
                        <i class="fa-solid fa-bullseye"></i> Misi Saya
                    </h3>
                    <ul class="space-y-3 text-sm text-gray-300 list-disc list-inside">
                        <li>Mengembangkan keahlian *fullstack web development* secara konsisten selama perkuliahan.</li>
                        <li>Membuat proyek-proyek open-source dan aplikasi fungsional yang menyelesaikan masalah nyata.</li>
                        <li>Terus mengikuti perkembangan teknologi modern seperti Cloud, API Architecture, dan Security.</li>
                        <li>Membangun portofolio yang solid untuk persiapan karier profesional sebelum kelulusan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Pengalaman Section -->
    <!-- Pengalaman Section -->
    <section id="experience" class="py-20">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white">Pengalaman <span class="text-blue-500">Karier & Magang</span></h2>
                <p class="text-gray-400 text-sm mt-2">Jejak perjalanan profesional di bidang komputer dan jaringan</p>
            </div>

            <div class="relative timeline-line pl-8 space-y-8">
                
                <!-- Pengalaman 4: NOC at Global Data Putro Mangkubumi (SFXNET) -->
                <div class="relative">
                    <div class="absolute -left-[25px] top-1 w-4 h-4 rounded-full bg-blue-500 border-4 border-gray-900 shadow-lg shadow-blue-500/50"></div>
                    <div class="glass-card p-6 rounded-2xl border border-blue-500/30">
                        <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                            <span class="text-xs font-semibold px-2.5 py-1 bg-blue-500/10 text-blue-400 rounded-md">Desember 2025 - Agustus 2026</span>
                            <span class="text-xs font-semibold px-2.5 py-1 bg-purple-500/10 text-purple-400 rounded-md">NOC (Network Operation Center)</span>
                        </div>
                        <h3 class="text-lg font-bold text-white">Global Data Putro Mangkubumi (SFXNET)</h3>
                        <p class="text-xs text-gray-400 mb-3">Internet Service Provider (ISP)</p>
                        <p class="text-sm text-gray-300 leading-relaxed">
                            Memantau trafik internet secara *real-time* 24 jam, melakukan *troubleshooting* jaringan, serta menguasai dan mengoperasikan berbagai *tools* jaringan tingkat lanjut seperti OLT dan MikroTik.
                        </p>
                    </div>
                </div>

                <!-- Pengalaman 3: Teknisi Lapangan at Global Data Putro Mangkubumi (SFXNET) -->
                <div class="relative">
                    <div class="absolute -left-[25px] top-1 w-4 h-4 rounded-full bg-indigo-500 border-4 border-gray-900"></div>
                    <div class="glass-card p-6 rounded-2xl border border-gray-800">
                        <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                            <span class="text-xs font-semibold px-2.5 py-1 bg-indigo-500/10 text-indigo-400 rounded-md">Mei 2025 - Juli 2025</span>
                            <span class="text-xs font-semibold px-2.5 py-1 bg-blue-500/10 text-blue-400 rounded-md">Teknisi Jaringan (IKR)</span>
                        </div>
                        <h3 class="text-lg font-bold text-white">Global Data Putro Mangkubumi (SFXNET)</h3>
                        <p class="text-xs text-gray-400 mb-3">Pekerjaan Pertama Pasca Kelulusan SMK</p>
                        <p class="text-sm text-gray-300 leading-relaxed">
                            Bertanggung jawab sebagai teknisi lapangan dalam instalasi, pemeliharaan, serta penanganan kendala jaringan internet langsung di lokasi pelanggan.
                        </p>
                    </div>
                </div>

                <!-- Pengalaman 2: PKL di AJ NET -->
                <div class="relative">
                    <div class="absolute -left-[25px] top-1 w-4 h-4 rounded-full bg-teal-500 border-4 border-gray-900"></div>
                    <div class="glass-card p-6 rounded-2xl border border-gray-800">
                        <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                            <span class="text-xs font-semibold px-2.5 py-1 bg-teal-500/10 text-teal-400 rounded-md">Juli 2024 - Oktober 2024</span>
                            <span class="text-xs font-semibold px-2.5 py-1 bg-teal-500/10 text-teal-400 rounded-md">PKL (Praktik Kerja Lapangan)</span>
                        </div>
                        <h3 class="text-lg font-bold text-white">AJ NET (Penyedia Layanan Internet WiFi)</h3>
                        <p class="text-xs text-gray-400 mb-3">Network Technician</p>
                        <p class="text-sm text-gray-300 leading-relaxed">
                            Mempelajari dan bekerja langsung sebagai teknisi jaringan, memahami berbagai komponen perangkat *network*, topologi, serta penanganan infrastruktur WiFi rumahan.
                        </p>
                    </div>
                </div>

                <!-- Pengalaman 1: Magang di Speed Comp -->
                <div class="relative">
                    <div class="absolute -left-[25px] top-1 w-4 h-4 rounded-full bg-orange-500 border-4 border-gray-900"></div>
                    <div class="glass-card p-6 rounded-2xl border border-gray-800">
                        <div class="flex flex-wrap items-center justify-between gap-2 mb-2">
                            <span class="text-xs font-semibold px-2.5 py-1 bg-orange-500/10 text-orange-400 rounded-md">Januari 2024 - April 2024</span>
                            <span class="text-xs font-semibold px-2.5 py-1 bg-orange-500/10 text-orange-400 rounded-md">PKL (Praktik Kerja Lapangan)</span>
                        </div>
                        <h3 class="text-lg font-bold text-white">Speed Comp (Toko Komputer & Service)</h3>
                        <p class="text-xs text-gray-400 mb-3">Hardware & Service Assistant</p>
                        <p class="text-sm text-gray-300 leading-relaxed">
                            Mempelajari komponen perangkat keras komputer (hardware), mendiagnosis masalah, serta melakukan servis perbaikan unit komputer secara menyeluruh.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Riwayat Pendidikan Section -->
    <section id="education" class="py-20 bg-gray-900/40">
        <div class="max-w-4xl mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white">Riwayat <span class="text-blue-500">Pendidikan</span></h2>
                <p class="text-gray-400 text-sm mt-2">Latar belakang akademis saya</p>
            </div>

            <div class="grid gap-6">
                <!-- Pendidikan Item 1 -->
                <div class="glass-card p-6 rounded-2xl border border-gray-800 flex flex-col sm:flex-row justify-between sm:items-center gap-4">
                    <div>
                        <span class="text-xs font-semibold text-blue-400">2025 - Sekarang (Semester 3)</span>
                        <h3 class="text-xl font-bold text-white mt-1">S1 Teknik Informatika</h3>
                        <p class="text-sm text-gray-400">Universitas Duta Bangsa SUrakarta</p>
                    </div>
                    <span class="px-3 py-1 bg-green-500/10 text-green-400 text-xs font-semibold rounded-full w-fit">Sedang Menempuh</span>
                </div>

                <!-- Pendidikan Item 2 -->
                <div class="glass-card p-6 rounded-2xl border border-gray-800 flex flex-col sm:flex-row justify-between sm:items-center gap-4">
                    <div>
                        <span class="text-xs font-semibold text-gray-400">2022 - 2025</span>
                        <h3 class="text-xl font-bold text-white mt-1">SMK Muhammadiyah 1 Gondangrejo</h3>
                        <p class="text-sm text-gray-400">Teknik Komputer Jaringan</p>
                    </div>
                    <span class="px-3 py-1 bg-blue-500/10 text-blue-400 text-xs font-semibold rounded-full w-fit">Lulus</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Proyek Portofolio Section -->
    <section id="projects" class="py-20">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between mb-12 gap-4">
                <div>
                    <h2 class="text-3xl font-bold text-white">Proyek <span class="text-blue-500">Portofolio</span></h2>
                    <p class="text-gray-400 text-sm mt-1">Project coding yang telah saya selesaikan</p>
                </div>
            </div>

            <!-- List Proyek -->
            <div id="projects-list" class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Memuat via JavaScript -->
                <div class="col-span-full text-center py-12 text-gray-400">
                    <i class="fa-solid fa-spinner animate-spin text-2xl text-blue-500 mb-2"></i>
                    <p>Memuat proyek dari database...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Kontak Section -->
    <section id="contact" class="py-20 bg-gray-900/40">
        <div class="max-w-5xl mx-auto px-4">
            <!-- Judul Section -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-white">Hubungi <span class="text-blue-500">Saya</span></h2>
                <p class="text-gray-400 text-sm mt-2">Mari berkolaborasi atau berdiskusi seputar proyek software & jaringan</p>
            </div>

            <!-- Grid 2 Kolom (Info Kontak & Form Pesan) -->
            <div class="grid md:grid-cols-2 gap-8 items-start">
                
                <!-- Kolom Kiri: Info Kontak -->
                <div class="space-y-4">
                    <!-- Email -->
                    <div class="glass-card p-5 rounded-2xl border border-gray-800 flex items-center gap-4">
                        <div class="w-12 h-12 bg-blue-500/10 text-blue-400 rounded-xl flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="overflow-hidden">
                            <p class="text-xs text-gray-400">Email</p>
                            <p class="text-sm sm:text-base font-semibold text-white truncate">dinikabagasputra04@gmail.com</p>
                        </div>
                    </div>

                    <!-- LinkedIn -->
                    <div class="glass-card p-5 rounded-2xl border border-gray-800 flex items-center gap-4 hover:border-blue-500/50 transition">
                        <div class="w-12 h-12 bg-blue-600/10 text-blue-500 rounded-xl flex items-center justify-center text-xl shrink-0">
                            <i class="fa-brands fa-linkedin-in"></i>
                        </div>
                        <div class="overflow-hidden">
                            <p class="text-xs text-gray-400">LinkedIn</p>
                            <a href="www.linkedin.com/in/dinika-bagas-putra-59a081376" target="_blank" rel="noopener noreferrer" class="text-sm sm:text-base font-semibold text-blue-400 hover:underline truncate block">
                                Dinika Bagas Putra
                            </a>
                        </div>
                    </div>

                    <!-- GitHub -->
                    <div class="glass-card p-5 rounded-2xl border border-gray-800 flex items-center gap-4 hover:border-gray-600 transition">
                        <div class="w-12 h-12 bg-gray-500/10 text-gray-300 rounded-xl flex items-center justify-center text-xl shrink-0">
                            <i class="fa-brands fa-github"></i>
                        </div>
                        <div class="overflow-hidden">
                            <p class="text-xs text-gray-400">GitHub</p>
                            <a href="https://github.com/dinikabagasputra" target="_blank" rel="noopener noreferrer" class="text-sm sm:text-base font-semibold text-gray-200 hover:underline truncate block">
                                github.com/dinikabagas
                            </a>
                        </div>
                    </div>

                    <!-- Status / Kampus -->
                    <div class="glass-card p-5 rounded-2xl border border-gray-800 flex items-center gap-4">
                        <div class="w-12 h-12 bg-purple-500/10 text-purple-400 rounded-xl flex items-center justify-center text-xl shrink-0">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div class="overflow-hidden">
                            <p class="text-xs text-gray-400">Pendidikan</p>
                            <p class="text-sm sm:text-base font-semibold text-white">S1 Teknik Informatika (Semester 3)</p>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan: Form Pesan -->
                <form id="contact-form" class="glass-card p-6 sm:p-8 rounded-2xl border border-gray-800 space-y-4">
                    <div>
                        <label class="block text-xs font-semibold text-gray-300 mb-2">Nama Anda</label>
                        <input type="text" required placeholder="Masukkan nama..." class="w-full bg-gray-900 border border-gray-800 rounded-xl p-3 text-sm text-white focus:outline-none focus:border-blue-500 transition">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-300 mb-2">Email Anda</label>
                        <input type="email" required placeholder="nama@email.com" class="w-full bg-gray-900 border border-gray-800 rounded-xl p-3 text-sm text-white focus:outline-none focus:border-blue-500 transition">
                    </div>
                    <div>
                        <label class="block text-xs font-semibold text-gray-300 mb-2">Pesan</label>
                        <textarea rows="4" required placeholder="Tuliskan pesan Anda..." class="w-full bg-gray-900 border border-gray-800 rounded-xl p-3 text-sm text-white focus:outline-none focus:border-blue-500 transition"></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-semibold py-3 rounded-xl transition shadow-lg shadow-blue-600/20">
                        Kirim Pesan
                    </button>
                </form>

            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="py-8 border-t border-gray-800/80 text-center text-xs text-gray-500">
        <p>&copy; 2026 Dinika Bagas Putra. All rights reserved.</p>
    </footer>
            
    <!-- Custom JS -->
    <script src="script.js"></script>
</body>
</html>
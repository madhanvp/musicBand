<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sithani Bhajans</title>
    <link rel="stylesheet" href="./assets/css/style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
<<<<<<< HEAD
=======
    <script src="https://unpkg.com/lucide@latest"></script>
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:wght@400;700&family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
<<<<<<< HEAD
    <!-- Header Section -->
=======
            <!-- Header Section -->
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
    <header class="bg-[#dcd1cd] shadow-sm sticky top-0 z-30">
        <div class="max-w-6xl mx-auto flex items-center justify-between px-4 md:px-6 py-4">
            <!-- Logo -->
            <div class="flex items-center gap-5 md:gap-3">
                <img src="assets/imgs/logo.jpg" alt="Sithani Bhajans logo" class="h-10 w-10 md:h-10 md:w-10 object-contain" loading="eager" />
                <span class="text-3xl md:text-4xl font-bold text-[#9A5A00] font-['Libre_Caslon_Text']">
                    Sithani Bhajans
                </span>
            </div>
            <!-- Desktop Navigation -->
            <nav>
                <ul class="hidden md:flex items-center gap-10 text-[18px] font-medium text-[#5f504a]">
<<<<<<< HEAD
                    <li><a href="#home" class="nav-link inline-block border-b-2 border-transparent pb-1">Home</a></li>
                    <li><a href="#singers" class="nav-link inline-block border-b-2 border-transparent pb-1">Singers</a></li>
                    <li><a href="#musicians" class="nav-link inline-block border-b-2 border-transparent pb-1">Musicians</a></li>
                    <li><a href="#gallery" class="nav-link inline-block border-b-2 border-transparent pb-1">Gallery</a></li>
                </ul>
            </nav>
            <!-- Menu icon -->
            <div class="flex items-center gap-1">
                <button class="bg-[#8B4E00] hover:bg-[#A86400] transition-colors duration-300 text-white text-sm md:text-base px-5 md:px-6 py-2 rounded mr-2"> BOOK TICKETS </button>
                <button id="menu-btn" class="md:hidden"> <img src="assets/icons/menu.svg" alt="Menu" class="h-10 w-10"> </button>
            </div>
        </div>
        <!-- Mobile Menu -->
       <div id="mobile-menu" class="hidden bg-[#dcd1cd] shadow-md md:hidden">
            <ul class="flex flex-col items-center gap-5 py-6 text-[18px] font-medium text-[#5f504a]">
                <li><a href="#home" class="nav-link inline-block border-b-2 border-transparent pb-1" onclick="document.getElementById('mobile-menu').classList.add('hidden')">Home</a></li>
                <li><a href="#singers" class="nav-link inline-block border-b-2 border-transparent pb-1" onclick="document.getElementById('mobile-menu').classList.add('hidden')">Singers</a></li>
                <li><a href="#musicians" class="nav-link inline-block border-b-2 border-transparent pb-1" onclick="document.getElementById('mobile-menu').classList.add('hidden')">Musicians</a></li>
                <li><a href="#gallery" class="nav-link inline-block border-b-2 border-transparent pb-1" onclick="document.getElementById('mobile-menu').classList.add('hidden')">Gallery</a></li>
=======
                    <li><a href="#home" class="nav-link active border-b-2 border-transparent pb-1">Home</a></li>
                    <li><a href="#singers" class="nav-link border-b-2 border-transparent pb-1">Singers</a></li>
                    <li><a href="#musicians" class="nav-link border-b-2 border-transparent pb-1">Musicians</a></li>
                    <li><a href="#gallery" class="nav-link border-b-2 border-transparent pb-1">Gallery</a></li>
                </ul>
            </nav>
            <!-- Right Actions -->
            <div class="flex items-center gap-1">
                <button class="bg-[#8B4E00] text-white text-sm md:text-base px-5 md:px-6 py-2 rounded mr-2"> BOOK TICKETS </button>
                <button id="menu-btn" class="md:hidden"> <img src="assets/icons/menu.svg" alt="Menu" class="h-10 w-10"> </button>
            </div>
        </div>

        <!-- Mobile Menu -->
       <div id="mobile-menu" class="hidden bg-[#dcd1cd] shadow-md md:hidden">
            <ul class="flex flex-col items-center gap-5 py-6 text-[18px] font-medium text-[#5f504a]">
                <li><a href="#home" onclick="document.getElementById('mobile-menu').classList.add('hidden')">Home</a></li>
                <li><a href="#singers" onclick="document.getElementById('mobile-menu').classList.add('hidden')">Singers</a></li>
                <li><a href="#musicians" onclick="document.getElementById('mobile-menu').classList.add('hidden')">Musicians</a></li>
                <li><a href="#gallery" onclick="document.getElementById('mobile-menu').classList.add('hidden')">Gallery</a></li>
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
            </ul>
        </div>
    </header> <!--Close Header Section-->

    <main>
            <!-- Home Section -->
        <section id="home" class="home relative min-h-screen bg-cover bg-center flex items-center"
            style="background-image: url('./assets/imgs/home-bg.jpg');">
            <div class="absolute inset-0 bg-black/40"></div>
                <div class="relative z-10 max-w-7xl mx-auto px-8 text-white flex flex-col items-center text-center">            
                    <img src="assets/imgs/logo.jpg" alt="Sithani Bhajans logo" class="h-60 w-60 object-contain mb-4" loading="eager" />                  
                        <h1 class="font-['Libre_Caslon_Text'] text-5xl md:text-5xl font-bold leading-tight mb-6"> Divine Echoes of the Eternal </h1>                
                        <p class="max-w-2xl text-lg text-slate-200 mb-8">
                            Experience a transformative musical journey that bridges ancient Vedic traditions 
                            with modern symphonic elegance. Join us for an evening of Darshan through sound.
                        </p>                    
                    <div class="flex gap-4">
<<<<<<< HEAD
                        <button class="bg-[#8B4E00] hover:-translate-y-1 transition-all duration-300 rounded px-8 py-4 text-white font-semibold"> Book Tickets Now </button>
                        <button class="border border-white px-8 py-4 rounded font-semibold hover:bg-[#9f908c] transition-all duration-300"> Watch Live Stream </button>
=======
                        <button class="bg-[#8B4E00] px-8 py-4 rounded text-white font-semibold"> Book Tickets Now </button>
                        <button class="border border-white px-8 py-4 rounded font-semibold"> Watch Live Stream </button>
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
                    </div>                
                </div>
            <div class="absolute bottom-0 left-0 right-0 h-80 bg-gradient-to-t from-white to-transparent"></div>
        </section>
<<<<<<< HEAD
        <!---Singers Section--->
        <section id="singers" class="bg-gradient-to-b from-white to-[#fef0ea] py-20">
            <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row items-center gap-10">
                <div class="w-full lg:w-[45%]">
                    <p class="text-orange-700 reveal-item">Our Divine Journey</p>
                    <h2 class="text-4xl font-bold mt-4 mb-4 reveal-item"> Preserving the Sithani Bhajans </h2>
                    <p class="text-gray-600 reveal-item">
=======

        <!----------->

        <section id="singers" class="bg-gradient-to-b from-white to-[#fef0ea] py-20">

            <div class="max-w-7xl mx-auto px-6 flex flex-col lg:flex-row items-center gap-10">

                <div class="w-full lg:w-[45%]">

                    <p class="text-orange-700">Our Divine Journey</p>

                    <h2 class="text-4xl font-bold mt-4 mb-4">
                        Preserving the Sithani Bhajans
                    </h2>

                    <p class="text-gray-600">
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
                        Sithani Bhajans was born from a collective desire to keep the ancient vibrations
                          of devotional music alive in a rapidly changing world. Our mission is to create
                           a sanctuary of sound where listeners can find inner peace and spiritual
                            upliftment.
                    </p>
<<<<<<< HEAD
                    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-6">
                    <div class="bg-[#fdf1ea] rounded-1xl p-6 border-b-4 border-[#A86400] reveal-item">
=======

                    <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-6">

                    <div class="bg-[#fdf1ea] rounded-1xl p-6 border-b-4 border-[#A86400]">
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
                        <div class="text-3xl text-[#A86400]">✦</div>
                        <h3 class="mt-4 text-xl font-semibold text-[#A86400]">TRADITION</h3>
                        <p class="mt-3 text-gray-600">Rooted in ancient Vedic ragas.</p>
                    </div>
<<<<<<< HEAD
                    <div class="bg-[#fdf1ea] rounded-1xl p-6 border-b-4 border-[#A86400] reveal-item">
=======
                
                    <div class="bg-[#fdf1ea] rounded-1xl p-6 border-b-4 border-[#A86400]">
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
                        <div class="text-3xl text-[#A86400]">⌘</div>
                        <h3 class="mt-4 text-xl font-semibold text-[#A86400]">INNOVATION</h3>
                        <p class="mt-3 text-gray-600">Modern symphonic arrangements.</p>
                    </div>
<<<<<<< HEAD
                </div>
                </div>
                <div class="w-full lg:w-[50%]">
                    <img src="assets/imgs/signers.jpg" alt="Singers" class="w-full h-[450px] lg:h-[600px] rounded-2xl object-cover reveal-item" >
                </div>
            </div>
        </section>
        <!---Musicians Section--->
        <section id="musicians" class="min-h-screen bg-[#fefefe] flex flex-col items-center justify-center gap-12 py-16">
            <div class="text-center">
                <h2 class="text-4xl font-bold text-slate-900 reveal-item">The Divine Voices</h2>
                <div class="mt-2 flex justify-center">
                    <span class="block w-20 h-1 bg-[#A86400] rounded"></span>
                </div>
            </div>
            <div class="grid w-full max-w-6xl gap-8 px-6 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Card 1 -->
                <article class="musician-card overflow-hidden rounded-xl bg-[#fee9e0] reveal-item">
=======

                </div>

                </div>

                <div class="w-full lg:w-[50%]">
                    <img src="assets/imgs/signers.jpg" alt="Singers" class="w-full h-[450px] lg:h-[600px] rounded-2xl object-cover" >
                </div>

            </div>

        </section>

        <!------------>

        <section id="musicians" class="min-h-screen bg-[#fefefe] flex flex-col items-center justify-center gap-12 py-16">

            <div class="text-center">
                <h2 class="text-4xl font-bold text-slate-900">The Divine Voices</h2>
            </div>
            <div class="grid w-full max-w-6xl gap-8 px-6 sm:grid-cols-2 lg:grid-cols-3">

                <!-- Card 1 -->
                <article class="musician-card overflow-hidden rounded-xl bg-[#fee9e0]">
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
                    <div class="overflow-hidden">
                        <img src="assets/imgs/musician-1.jpg" alt="Acharya Vishwanath" class="musician-img h-80 w-full object-cover">
                    </div>
                    <div class="p-6">
                        <p class="text-xs uppercase tracking-[0.25em] text-[#A86400]"> Classical Lead </p>
                        <h3 class="mt-3 text-2xl font-semibold text-slate-900"> Acharya Vishwanath </h3>
<<<<<<< HEAD
                        <p class="mt-3 text-sm leading-7 text-slate-600"> 
                            Renowned for his mastery of Dhrupad and soul-stirring vocal improvisations. 
                        </p>
=======
                        <p class="mt-3 text-sm leading-7 text-slate-600"> Renowned for his mastery of Dhrupad and soul-stirring vocal improvisations. </p>
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
                        <div class="mt-5 flex gap-5">
                        <img src="assets/icons/share-2.svg" alt="Share" class="h-5 w-5">
                        <img src="assets/icons/circle-play.svg" alt="Play" class="h-5 w-5">
                        </div>
                    </div>
                </article>
<<<<<<< HEAD
                <!-- Card 2 -->
                <article class="musician-card overflow-hidden rounded-xl bg-[#fee9e0] reveal-item">
                    <div class="overflow-hidden">
                        <img src="assets/imgs/musician-2.jpg" alt="Mira Bai Shreya" class="musician-img h-80 w-full object-cover">
                    </div>
                    <div class="p-6">
                        <p class="text-xs uppercase tracking-[0.25em] text-[#A86400]"> Contemporary Lead </p>
                        <h3 class="mt-3 text-2xl font-semibold text-slate-900"> Mira Bai Shreya </h3>
=======

                <!-- Card 2 -->
                <article class="musician-card overflow-hidden rounded-xl bg-[#fee9e0]">

                    <div class="overflow-hidden">
                        <img src="assets/imgs/musician-2.jpg"
                            alt="Mira Bai Shreya"
                            class="musician-img h-80 w-full object-cover">
                    </div>

                    <div class="p-6">
                        <p class="text-xs uppercase tracking-[0.25em] text-[#A86400]">
                            Contemporary Lead
                        </p>

                        <h3 class="mt-3 text-2xl font-semibold text-slate-900">
                            Mira Bai Shreya
                        </h3>

>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
                        <p class="mt-3 text-sm leading-7 text-slate-600">
                            A hauntingly beautiful voice that bridges traditional bhajan with ambient soundscapes.
                        </p>
                        <div class="mt-5 flex gap-5">
<<<<<<< HEAD
                        <img src="assets/icons/share-2.svg" alt="Share" class="h-5 w-5">
                        <img src="assets/icons/circle-play.svg" alt="Play" class="h-5 w-5">
                        </div>
                    </div>
                </article>
                <!--- Card 3 --->
                <article class="musician-card overflow-hidden rounded-xl bg-[#fee9e0] reveal-item">
                    <div class="overflow-hidden">
                        <img src="assets/imgs/musician-3.jpg" alt="Rishi Kabir" class="musician-img h-80 w-full object-cover">
                    </div>
=======

                        <img src="assets/icons/share-2.svg" alt="Share" class="h-5 w-5">
                        <img src="assets/icons/circle-play.svg" alt="Play" class="h-5 w-5">

                        </div>

                    </div>

                </article>

                <!-- Card 3 -->
                <article class="musician-card overflow-hidden rounded-xl bg-[#fee9e0]">

                    <div class="overflow-hidden">
                        <img src="assets/imgs/musician-3.jpg"
                            alt="Rishi Kabir"
                            class="musician-img h-80 w-full object-cover">
                    </div>

>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
                    <div class="p-6">
                        <p class="text-xs uppercase tracking-[0.25em] text-[#A86400]"> Sufi & Folk </p>
                        <h3 class="mt-3 text-2xl font-semibold text-slate-900"> Rishi Kabir </h3>
                        <p class="mt-3 text-sm leading-7 text-slate-600">
<<<<<<< HEAD
                            Specializing in ecstatic rhythms of Sufi chants and Kabir's timeless poetry. 
                        </p>
=======
                            Specializing in ecstatic rhythms of Sufi
                            chants and Kabir's timeless poetry.
                        </p>

>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
                        <div class="mt-5 flex gap-5">
                        <img src="assets/icons/share-2.svg" alt="Share" class="h-5 w-5">
                        <img src="assets/icons/circle-play.svg" alt="Play" class="h-5 w-5">
                        </div>
<<<<<<< HEAD
                    </div>
                </article>
            </div>
        </section>
        <!--- Gallery section --->
        <section id="gallery" class="bg-[#f8eee8] py-20 md:py-24">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-10 flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                    <div class="reveal-item">
                        <h2 class="mt-3 font-['Libre_Caslon_Text'] text-4xl font-semibold text-[#3d1707] sm:text-5xl"> The Orchestral Tapestry </h2>
                        <p class="mt-4 text-base leading-8 text-slate-600">
                            Our ensemble features a blend of ancient string instruments, 
                            earthy percussion, and modern atmospheric textures.
                        </p>
                    </div>
                    <div class="flex items-center gap-3">
                        <button class="gallery-nav-btn rounded-xl border border-[#b9894d] bg-white/70 p-3 text-[#8a4d0c] transition-all duration-300 hover:bg-[#b9894d] hover:text-white hover:scale-110" data-direction="prev"> ← </button>
                        <button class="gallery-nav-btn rounded-xl border border-[#b9894d] bg-white/70 p-3 text-[#8a4d0c] transition-all duration-300 hover:bg-[#b9894d] hover:text-white hover:scale-110" data-direction="next"> → </button>
                    </div>
                </div>
                <div class="gallery-track overflow-hidden">
                    <div class="gallery-slider flex gap-6 transition-transform duration-500 ease-out">
                        @foreach ($instruments as $instrument)
                        <article class="gallery-card group min-w-full md:min-w-[calc(50%-0.75rem)] xl:min-w-[calc(25%-1.125rem)] reveal-item">
                            <div class="overflow-hidden rounded-[1.5rem] bg-white shadow-lg">
                                <img src="{{ asset('storage/'.$instrument->image) }}" alt="{{ $instrument->name }}" class="h-64 w-full object-cover">
                            </div>
                            <div class="mt-5 text-center">
                                <h3 class="text-2xl font-semibold text-[#3d1707]"> {{ $instrument->name }} </h3>
                                <p class="mt-2 text-sm uppercase tracking-[0.3em] text-[#b16b15]"> {{ $instrument->type }} </p>
                            </div>
                        </article>
                        @endforeach
                        
                        @foreach ($instruments as $instrument)
                        <article class="gallery-card group min-w-full md:min-w-[calc(50%-0.75rem)] xl:min-w-[calc(25%-1.125rem)] reveal-item">
                            <div class="overflow-hidden rounded-[1.5rem] bg-white shadow-lg">
                                <img src="{{ asset('storage/'.$instrument->image) }}" alt="{{ $instrument->name }}" class="h-64 w-full object-cover">
                            </div>
                            <div class="mt-5 text-center">
                                <h3 class="text-2xl font-semibold text-[#3d1707]"> {{ $instrument->name }} </h3>
                                <p class="mt-2 text-sm uppercase tracking-[0.3em] text-[#b16b15]"> {{ $instrument->type }} </p>
                            </div>
                        </article>
                        @endforeach
=======

                    </div>

                </article>

            </div>

        </section>

        <!------------>

        <section id="gallery" class="bg-[#f8eee8] py-20 md:py-24">
            <div class="mx-auto max-w-7xl px-6">
                <div class="mb-10 flex flex-col gap-6 md:flex-row md:items-end md:justify-between">
                    <div class="max-w-2xl">
                        <h2 class="mt-3 font-['Libre_Caslon_Text'] text-4xl font-semibold text-[#3d1707] sm:text-5xl">The Orchestral Tapestry</h2>
                        <p class="mt-4 text-base leading-8 text-slate-600">Our ensemble features a blend of ancient string instruments, earthy percussion, and modern atmospheric textures.</p>
                    </div>

                    <div class="flex items-center gap-3">
                        <button class="gallery-nav-btn rounded-xl border border-[#b9894d] bg-white/70 p-3 text-[#8a4d0c] transition hover:bg-[#f7e8db]" data-direction="prev" aria-label="Previous">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
                        </button>
                        <button class="gallery-nav-btn rounded-xl border border-[#b9894d] bg-white/70 p-3 text-[#8a4d0c] transition hover:bg-[#f7e8db]" data-direction="next" aria-label="Next">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
                        </button>
                    </div>
                </div>

                <div class="gallery-track overflow-hidden">
                    <div class="gallery-slider flex gap-6 transition-transform duration-500 ease-out">
                        <article class="gallery-card group min-w-full md:min-w-[calc(50%-0.75rem)] xl:min-w-[calc(25%-1.125rem)]">
                            <div class="overflow-hidden rounded-[1.5rem] bg-white shadow-lg shadow-slate-300/40">
                                <img src="assets/imgs/tabla.jpg" alt="Tabla" class="h-64 w-full object-cover " />
                            </div>
                            <div class="mt-5 text-center">
                                <h3 class="text-2xl font-semibold text-[#3d1707]">Tabla</h3>
                                <p class="mt-2 text-sm uppercase tracking-[0.3em] text-[#b16b15]">Percussion</p>
                            </div>
                        </article>

                        <article class="gallery-card group min-w-full md:min-w-[calc(50%-0.75rem)] xl:min-w-[calc(25%-1.125rem)]">
                            <div class="overflow-hidden rounded-[1.5rem] bg-white shadow-lg shadow-slate-300/40">
                                <img src="assets/imgs/bansuri.jpg" alt="Bansuri" class="h-64 w-full object-cover " />
                            </div>
                            <div class="mt-5 text-center">
                                <h3 class="text-2xl font-semibold text-[#3d1707]">Bansuri</h3>
                                <p class="mt-2 text-sm uppercase tracking-[0.3em] text-[#b16b15]">Wind</p>
                            </div>
                        </article>

                        <article class="gallery-card group min-w-full md:min-w-[calc(50%-0.75rem)] xl:min-w-[calc(25%-1.125rem)]">
                            <div class="overflow-hidden rounded-[1.5rem] bg-white shadow-lg shadow-slate-300/40">
                                <img src="assets/imgs/tanpura.jpg" alt="Tanpura" class="h-64 w-full object-cover " />
                            </div>
                            <div class="mt-5 text-center">
                                <h3 class="text-2xl font-semibold text-[#3d1707]">Tanpura</h3>
                                <p class="mt-2 text-sm uppercase tracking-[0.3em] text-[#b16b15]">Strings</p>
                            </div>
                        </article>

                        <article class="gallery-card group min-w-full md:min-w-[calc(50%-0.75rem)] xl:min-w-[calc(25%-1.125rem)]">
                            <div class="overflow-hidden rounded-[1.5rem] bg-white shadow-lg shadow-slate-300/40">
                                <img src="assets/imgs/harmonium.jpg" alt="Harmonium" class="h-64 w-full object-cover " />
                            </div>
                            <div class="mt-5 text-center">
                                <h3 class="text-2xl font-semibold text-[#3d1707]">Harmonium</h3>
                                <p class="mt-2 text-sm uppercase tracking-[0.3em] text-[#b16b15]">Keys</p>
                            </div>
                        </article>
                        <!----Extra-->
                        <article class="gallery-card group min-w-full md:min-w-[calc(50%-0.75rem)] xl:min-w-[calc(25%-1.125rem)]">
                            <div class="overflow-hidden rounded-[1.5rem] bg-white shadow-lg shadow-slate-300/40">
                                <img src="assets/imgs/bansuri.jpg" alt="Bansuri" class="h-64 w-full object-cover " />
                            </div>
                            <div class="mt-5 text-center">
                                <h3 class="text-2xl font-semibold text-[#3d1707]">Bansuri</h3>
                                <p class="mt-2 text-sm uppercase tracking-[0.3em] text-[#b16b15]">Wind</p>
                            </div>
                        </article>

>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
                    </div>
                </div>
            </div>
        </section>
<<<<<<< HEAD
        <!--- Stay Connected Section --->
        <section id="stay-connected" class="bg-[#fef7f5] py-20 md:py-24">
            <div class="mx-auto max-w-5xl px-6">
                <div class="rounded-[1rem] bg-[#b05f00] px-8 py-12 text-center text-white shadow-xl shadow-orange-200/40 md:px-12 reveal-item">
                    <h2 class="font-['Libre_Caslon_Text'] text-3xl font-semibold sm:text-4xl reveal-item">Stay Connected</h2>
                    <p class="mx-auto mt-4 max-w-2xl text-sm leading-8 text-amber-50 md:text-base reveal-item">Join our spiritual community to receive updates on upcoming performances, sacred recordings, and guided meditations.</p>
                    <form class="mx-auto mt-8 flex max-w-xl flex-col gap-6 sm:flex-row reveal-item">
                        <input type="email" placeholder="Your Email Address" class="w-full rounded-[1rem] border border-white/30 bg-white/90 px-5 py-3 text-slate-700 outline-none placeholder:text-slate-500 focus:ring-2 focus:ring-white/60 reveal-item" />
                        <button type="submit" class="rounded-[1rem] bg-white px-6 py-3 font-semibold text-[#8a4d0c] transition hover:bg-[#f7e8db] reveal-item">Subscribe</button>
=======
    <!----------->
        <section id="stay-connected" class="bg-[#fef7f5] py-20 md:py-24">
            <div class="mx-auto max-w-5xl px-6">
                <div class="rounded-[1rem] bg-[#b05f00] px-8 py-12 text-center text-white shadow-xl shadow-orange-200/40 md:px-12">
                    <h2 class="font-['Libre_Caslon_Text'] text-3xl font-semibold sm:text-4xl">Stay Connected</h2>
                    <p class="mx-auto mt-4 max-w-2xl text-sm leading-8 text-amber-50 md:text-base">Join our spiritual community to receive updates on upcoming performances, sacred recordings, and guided meditations.</p>
                    <form class="mx-auto mt-8 flex max-w-2xl flex-col gap-6 sm:flex-row">
                        <input type="email" placeholder="Your Email Address" class="w-full rounded-[1rem] border border-white/30 bg-white/90 px-5 py-3 text-slate-700 outline-none placeholder:text-slate-500 focus:ring-2 focus:ring-white/60" />
                        <button type="submit" class="rounded-[1rem] bg-white px-6 py-3 font-semibold text-[#8a4d0c] transition hover:bg-[#f7e8db]">Subscribe</button>
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
                    </form>
                </div>
            </div>
        </section>

    </main>
<<<<<<< HEAD
    <!-- Footer Section -->
    <footer class="bg-[#fefefe] py-20 border-t-2 border-[#dfcabb]">
=======
            <!-- Footer Section -->
    <footer class="bg-[#fefefe] py-8 border-t border-gray-200">
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
        <div class="max-w-7xl mx-auto px-6">
            <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
                <div class="flex flex-col items-center lg:items-start">
                    <div class="flex items-center gap-3">
                        <img src="assets/imgs/logo.jpg" alt="Sithani Bhajans Logo" class="h-10 w-10 object-contain">
<<<<<<< HEAD
                        <h3 class="text-4xl font-bold text-[#351000] font-['Libre_Caslon_Text']"> Sithani Bhajans </h3>
                    </div>
                    <p class="mt-2 text-smd text-slate-500"> © 2024 Sithani Bhajans. All rights reserved. </p>
=======
                        <h3 class="text-2xl font-bold text-[#351000] font-['Libre_Caslon_Text']"> Sithani Bhajans </h3>
                    </div>
                    <p class="mt-2 text-sm text-slate-500"> © 2024 Sithani Bhajans. All rights reserved. </p>
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
                </div>
                <ul class="flex flex-col md:flex-row items-center gap-4 md:gap-8">
                    <li><a href="#" class="text-slate-500 hover:text-[#9A5A00] transition"> Privacy Policy </a></li>
                    <li><a href="#" class="text-slate-500 hover:text-[#9A5A00] transition"> Terms of Service </a></li>
                    <li><a href="#" class="text-slate-500 hover:text-[#9A5A00] transition"> Press Kit </a></li>
                    <li><a href="#" class="text-slate-500 hover:text-[#9A5A00] transition"> Contact Us </a></li>
                </ul>
                <div class="flex items-center gap-4">
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md bg-[#fedacb]"><img src="assets/icons/global-footer-1.svg" alt="Icon 1" class="h-6 w-6"></a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md bg-[#fedacb]"><img src="assets/icons/music-footer-2.svg" alt="Icon 2" class="h-6 w-6"></a>
                    <a href="#" class="w-10 h-10 flex items-center justify-center rounded-md bg-[#fedacb]"><img src="assets/icons/video-library-footer-3.svg" alt="Icon 3" class="h-6 w-6"></a>
                </div>
            </div>
        </div>
    </footer>
<<<<<<< HEAD
    <!--- Script Section --->
    <script src="{{ asset('assets/js/script.js') }}"></script>
=======

<script src="./assets/js/script.js"></script>
>>>>>>> 329de75f9c73636c6366a3a381a083a96e431079
</body>
</html>
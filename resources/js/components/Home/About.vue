<template>
    <section class="max-w-7xl mx-auto px-6 pt-40 py-20 flex flex-col md:flex-row items-center gap-12 bg-white">

        <div class="w-full md:w-1/2 relative">
            <div class="absolute -top-4 -left-4 w-32 h-32 bg-[#fbb03b] rounded-tl-[3rem] -z-10"></div>

            <div class="rounded-[2.5rem] overflow-hidden shadow-xl">
                <img :src="About" alt="Jovens da AJM" class="w-full h-auto object-cover">
            </div>

            <div class="absolute -bottom-6 -right-6 text-gray-200 -z-10 hidden lg:block">
                <svg width="100" height="100" fill="currentColor" viewBox="0 0 20 20">
                    <circle cx="2" cy="2" r="1" />
                    <circle cx="7" cy="2" r="1" />
                    <circle cx="12" cy="2" r="1" />
                    <circle cx="17" cy="2" r="1" />
                    <circle cx="2" cy="7" r="1" />
                    <circle cx="7" cy="7" r="1" />
                    <circle cx="12" cy="7" r="1" />
                    <circle cx="17" cy="7" r="1" />
                    <circle cx="2" cy="12" r="1" />
                    <circle cx="7" cy="12" r="1" />
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="17" cy="12" r="1" />
                    <circle cx="2" cy="17" r="1" />
                    <circle cx="7" cy="17" r="1" />
                    <circle cx="12" cy="17" r="1" />
                    <circle cx="17" cy="17" r="1" />
                </svg>
            </div>
        </div>

        <div class="w-full md:w-1/2">
            <header class="mb-6">
                <p class="text-[#fbb03b] font-bold text-sm uppercase tracking-widest mb-1">SOBRE NÓS</p>
                <h2 class="text-[#001b3d] text-4xl font-extrabold mb-4">Quem somos</h2>
            </header>

            <div class="space-y-4 text-gray-700 leading-relaxed text-md">
                <p>
                    A Associação Juvenil de Marracuene (AJM) é uma organização sem fins lucrativos dedicada ao
                    desenvolvimento integral da juventude, promovendo iniciativas nas áreas de educação, cultura,
                    empreendedorismo e inclusão social.
                </p>
                <p>
                    Através de eventos, formações e atividades comunitárias, criamos oportunidades reais para jovens
                    desenvolverem competências, ampliarem redes de contacto e transformarem ideias em ações
                    concretas.
                </p>
            </div>

            <div class="mt-8">
                <Link :href="route('about')">
                <button
                    class="bg-[#001b3d] text-white px-8 py-3 rounded-lg font-bold flex items-center gap-3 hover:bg-opacity-90 transition-all group">
                    Saber mais sobre a AJM
                    <i class="fa-solid fa-arrow-right text-sm group-hover:translate-x-1 transition-transform"></i>
                </button>
                </Link>
            </div>
        </div>

    </section>
</template>
<script setup>

import About from '../../assets/img/about.png'
</script>
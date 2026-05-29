<template>
    <section class="max-w-7xl mx-auto px-6 py-7">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div>
                <p class="text-[#fbb03b] font-bold text-sm uppercase tracking-widest mb-2">FIQUE POR DENTRO</p>
                <h2 class="text-[#001b3d] text-4xl font-extrabold">Participe dos nossos eventos</h2>
            </div>
            <Link :href="route('events')" class="text-[#001b3d] font-bold flex items-center gap-2 hover:gap-3 transition-all">
                Ver todos os eventos <i class="fa-solid fa-arrow-right"></i>
            </Link>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="group cursor-pointer">
                <div class="relative rounded-[2rem] overflow-hidden mb-6 shadow-lg">
                    <img :src="Evento" alt="Workshop"
                        class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">

                    <div class="absolute top-4 left-4 bg-white rounded-2xl p-3 shadow-md text-center min-w-[70px]">
                        <span class="block text-[#001b3d] text-2xl font-black">24</span>
                        <span class="block text-[#fbb03b] text-xs font-bold uppercase">MAI</span>
                    </div>
                </div>

                <div class="space-y-3 px-2">
                    <div class="flex items-center gap-4 text-gray-500 text-sm">
                        <span class="flex items-center gap-2">
                            <i class="fa-regular fa-clock text-[#fbb03b]"></i> 09:00 - 13:00
                        </span>
                        <span class="flex items-center gap-2">
                            <i class="fa-solid fa-location-dot text-[#fbb03b]"></i> Marracuene
                        </span>
                    </div>
                    <h3
                        class="text-[#001b3d] text-xl font-bold group-hover:text-[#fbb03b] transition-colors leading-tight">
                        Workshop: Comunicação Assertiva e Liderança
                    </h3>
                    <p class="text-gray-500 text-sm line-clamp-2">
                        Aprenda técnicas fundamentais para se expressar com clareza e liderar equipas de alto
                        impacto.
                    </p>
                    <button class="pt-2 text-[#001b3d] font-bold text-sm flex items-center gap-2">
                        Mais detalhes <i class="fa-solid fa-plus text-xs"></i>
                    </button>
                </div>
            </div>

            <div class="group cursor-pointer">
                <div class="relative rounded-[2rem] overflow-hidden mb-6 shadow-lg">
                    <img :src="Evento" alt="Fórum"
                        class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 left-4 bg-white rounded-2xl p-3 shadow-md text-center min-w-[70px]">
                        <span class="block text-[#001b3d] text-2xl font-black">07</span>
                        <span class="block text-[#fbb03b] text-xs font-bold uppercase">JUN</span>
                    </div>
                </div>

                <div class="space-y-3 px-2">
                    <div class="flex items-center gap-4 text-gray-500 text-sm">
                        <span class="flex items-center gap-2">
                            <i class="fa-regular fa-clock text-[#fbb03b]"></i> 14:00 - 17:30
                        </span>
                        <span class="flex items-center gap-2">
                            <i class="fa-solid fa-location-dot text-[#fbb03b]"></i> Auditório AJM
                        </span>
                    </div>
                    <h3
                        class="text-[#001b3d] text-xl font-bold group-hover:text-[#fbb03b] transition-colors leading-tight">
                        Fórum de Empreendedorismo Juvenil
                    </h3>
                    <p class="text-gray-500 text-sm line-clamp-2">
                        Um encontro com mentores e investidores para impulsionar o teu projeto ou negócio local.
                    </p>
                    <button class="pt-2 text-[#001b3d] font-bold text-sm flex items-center gap-2">
                        Mais detalhes <i class="fa-solid fa-plus text-xs"></i>
                    </button>
                </div>
            </div>

            <div class="group cursor-pointer">
                <div class="relative rounded-[2rem] overflow-hidden mb-6 shadow-lg">
                    <img :src="Evento" alt="Cultura"
                        class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-500">
                    <div class="absolute top-4 left-4 bg-white rounded-2xl p-3 shadow-md text-center min-w-[70px]">
                        <span class="block text-[#001b3d] text-2xl font-black">21</span>
                        <span class="block text-[#fbb03b] text-xs font-bold uppercase">JUN</span>
                    </div>
                </div>

                <div class="space-y-3 px-2">
                    <div class="flex items-center gap-4 text-gray-500 text-sm">
                        <span class="flex items-center gap-2">
                            <i class="fa-regular fa-clock text-[#fbb03b]"></i> 10:00 - 18:00
                        </span>
                        <span class="flex items-center gap-2">
                            <i class="fa-solid fa-location-dot text-[#fbb03b]"></i> Praça da Independência
                        </span>
                    </div>
                    <h3
                        class="text-[#001b3d] text-xl font-bold group-hover:text-[#fbb03b] transition-colors leading-tight">
                        Festival Cultural "Vozes de Marracuene"
                    </h3>
                    <p class="text-gray-500 text-sm line-clamp-2">
                        Celebração da arte, música e dança local. Um dia dedicado à nossa identidade.
                    </p>
                    <button class="pt-2 text-[#001b3d] font-bold text-sm flex items-center gap-2">
                        Mais detalhes <i class="fa-solid fa-plus text-xs"></i>
                    </button>
                </div>
            </div>

        </div>
    </section>
</template>
<script setup>

import Evento from '../../assets/img/evento.png';
</script>
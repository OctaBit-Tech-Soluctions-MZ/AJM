<script setup>
import PublicLayout from '@/layouts/PublicLayout.vue';
import Event from '../../assets/img/events.png';
import Evento from '../../assets/img/evento.png';
import Feira from '../../assets/img/feira.png';
</script>

<template>
    <PublicLayout>

        <section class="relative w-full bg-[#001b3d] overflow-hidden">

            <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center">

                <div class="w-full md:w-1/2 px-6 py-20 z-10">
                    <h1 class="text-white text-6xl md:text-7xl font-extrabold mb-4 relative">
                        Eventos AJM
                        <span class="absolute bottom-[-10px] left-0 w-24 h-1.5 bg-[#fbb03b]"></span>
                    </h1>

                    <p class="text-slate-300 text-lg md:text-xl leading-relaxed mt-10 max-w-lg">
                        Descobre, participa e faz parte da mudança
                    </p>
                </div>

                <div class="w-full md:w-1/2 relative h-[400px] md:h-[600px]">
                    <img :src="Event" alt="Equipa AJM" class="w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-gradient-to-r from-[#001b3d] via-[#001b3d]/2 to-transparent"></div>
                </div>
            </div>
        </section>
        <div class="flex items-center justify-center gap-8 py-10 font-sans">

            <button
                class="bg-[#001b3d] text-white px-10 py-2.5 rounded-full font-bold text-sm shadow-md transition-all">
                Todos
            </button>

            <button class="text-[#001b3d] font-bold text-sm hover:opacity-70 transition-all">
                Próximos
            </button>

            <button class="text-[#001b3d] font-bold text-sm hover:opacity-70 transition-all">
                Passados
            </button>

        </div>
        <section class="max-w-7xl mx-auto px-6 py-7">

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
        <section class="max-w-7xl mx-auto px-6 py-10 font-sans">

            <div
                class="relative w-full bg-[#002861] rounded-2xl overflow-hidden mb-6 flex flex-col md:flex-row items-stretch">

                <div class="flex-1 p-8 md:p-12 z-10">
                    <span
                        class="bg-[#fbb03b] text-[#002861] text-[10px] font-bold px-3 py-1 rounded-md uppercase mb-6 inline-block">
                        Evento em destaque
                    </span>

                    <h2 class="text-white text-3xl md:text-4xl font-bold mb-4">
                        Cimeira da Juventude 2025
                    </h2>

                    <div class="flex flex-wrap gap-6 text-white/90 text-sm mb-6">
                        <span class="flex items-center gap-2">
                            <i class="fa-regular fa-calendar"></i> 20 - 22 Setembro 2025
                        </span>
                        <span class="flex items-center gap-2">
                            <i class="fa-solid fa-location-dot"></i> Maputo
                        </span>
                    </div>

                    <p class="text-white/80 text-sm mb-8 max-w-lg">
                        Três dias de aprendizado, conexão e inspiração com jovens líderes de todo o país.
                    </p>

                    <button
                        class="bg-[#fbb03b] text-[#002861] font-bold px-8 py-3 rounded-lg flex items-center gap-2 hover:bg-[#e5a035] transition-colors">
                        Participar agora <i class="fa-solid fa-arrow-right"></i>
                    </button>
                </div>

                <div class="relative md:w-1/2 h-[300px] md:h-auto overflow-hidden">
                    <img :src="Feira" alt="Cimeira" class="absolute inset-0 w-full h-full object-cover">

                    <div class="absolute inset-0 bg-gradient-to-r from-[#002861] via-[#002861]/40 to-transparent"></div>
                </div>
            </div>

            <div
                class="bg-[#f0f7ff] rounded-2xl p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-6">
                <div class="flex items-center gap-6">
                    <div
                        class="bg-[#001b3d] w-14 h-14 rounded-xl flex items-center justify-center text-white text-2xl shadow-lg">
                        <i class="fa-regular fa-calendar-days"></i>
                    </div>
                    <div>
                        <h3 class="text-[#001b3d] text-xl font-bold">Não percas os próximos eventos!</h3>
                        <p class="text-gray-600 text-sm">Inscreve-te e recebe novidades e lembretes.</p>
                    </div>
                </div>

                <button
                    class="bg-[#fccb45] text-[#001b3d] font-bold px-10 py-3 rounded-xl hover:brightness-105 transition-all">
                    Inscrever-me
                </button>
            </div>

        </section>
    </PublicLayout>
</template>
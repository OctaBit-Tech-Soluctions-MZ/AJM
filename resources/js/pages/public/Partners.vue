<script setup>
import PublicLayout from '@/layouts/PublicLayout.vue';
import Ots from '../../assets/img/ots.png';
import Octabit from '../../assets/img/parceiros/octabit.png';

</script>

<template>
    <PublicLayout>
        <section class="relative w-full bg-[#001b3d] overflow-hidden">

            <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center">

                <div class="w-full md:w-1/2 px-6 py-20 z-10">
                    <span class="text-[#fccb45] text-xs font-bold uppercase tracking-widest block">
                        Parceiros
                    </span>
                    <h1 class="text-white text-6xl md:text-7xl font-extrabold mb-4 relative">
                        Juntos por um
                        impacto maior
                    </h1>

                    <p class="text-slate-300 text-lg md:text-xl leading-relaxed mt-10 max-w-lg">
                        Acreditamos que parcerias solidas transformam ideias
                        em ações que mudam vidas e constroem um futuro melhor
                        para a juventude moçambicana
                    </p>
                </div>

                <div class="w-full md:w-1/2 relative h-[400px] md:h-[600px]">
                    <img :src="Ots" alt="Equipa AJM" class="w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-gradient-to-r from-[#001b3d] via-[#001b3d]/2 to-transparent"></div>
                </div>
            </div>
        </section>

        <section class="max-w-7xl mx-auto px-6 py-10">
            <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
                <div class="max-w-2xl">
                    <h2 class="text-[#001b3d] text-4xl font-extrabold mb-4">Nossos parceiros</h2>
                    <p class="text-gray-500">Trabalhamos lado a lado com organizações que partilham da nossa visão e
                        compromisso
                        com o desenvolvimento da juventude e das comunidades.</p>
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8 items-center">

                <div
                    class="bg-gray-50 rounded-2xl p-8 h-32 flex items-center justify-center grayscale hover:grayscale-0 hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 cursor-pointer">
                    <img :src="Octabit" alt="Parceiro AJM" class="max-h-full max-w-full object-contain">
                </div>

                <div
                    class="bg-gray-50 rounded-2xl p-8 h-32 flex items-center justify-center grayscale hover:grayscale-0 hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 cursor-pointer">
                    <img :src="Octabit" alt="Parceiro AJM" class="max-h-full max-w-full object-contain">
                </div>

                <div
                    class="bg-gray-50 rounded-2xl p-8 h-32 flex items-center justify-center grayscale hover:grayscale-0 hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 cursor-pointer">
                    <img :src="Octabit" alt="Parceiro AJM" class="max-h-full max-w-full object-contain">
                </div>

                <div
                    class="bg-gray-50 rounded-2xl p-8 h-32 flex items-center justify-center grayscale hover:grayscale-0 hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 cursor-pointer">
                    <img :src="Octabit" alt="Parceiro AJM" class="max-h-full max-w-full object-contain">
                </div>

                <div
                    class="bg-gray-50 rounded-2xl p-8 h-32 flex items-center justify-center grayscale hover:grayscale-0 hover:bg-white hover:shadow-xl transition-all duration-300 border border-transparent hover:border-gray-100 cursor-pointer">
                    <img :src="Octabit" alt="Parceiro AJM" class="max-h-full max-w-full object-contain">
                </div>

            </div>
        </section>
        <section class="max-w-7xl mx-auto px-6 py-12 bg-white">
            <h2 class="text-[#001b3d] text-xl font-bold mb-10">Áreas de colaboração</h2>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-16">

                <div class="flex items-start gap-4">
                    <div class="bg-[#001b3d] w-14 h-14 rounded-full flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-graduation-cap text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-[#001b3d] font-bold text-sm mb-1">Educação</h3>
                        <p class="text-gray-500 text-[11px] leading-tight">
                            Promoção do acesso à educação e formação de qualidade.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="bg-[#001b3d] w-14 h-14 rounded-full flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-briefcase text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-[#001b3d] font-bold text-sm mb-1">Empreendedorismo</h3>
                        <p class="text-gray-500 text-[11px] leading-tight">
                            Apoio ao desenvolvimento de competências e negócios jovens.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="bg-[#001b3d] w-14 h-14 rounded-full flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-leaf text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-[#001b3d] font-bold text-sm mb-1">Ambiente</h3>
                        <p class="text-gray-500 text-[11px] leading-tight">
                            Projetos de sustentabilidade e preservação ambiental.
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-4">
                    <div class="bg-[#001b3d] w-14 h-14 rounded-full flex items-center justify-center shrink-0">
                        <i class="fa-solid fa-users-viewfinder text-white text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-[#001b3d] font-bold text-sm mb-1">Liderança</h3>
                        <p class="text-gray-500 text-[11px] leading-tight">
                            Formação de líderes e promoção da cidadania ativa.
                        </p>
                    </div>
                </div>

            </div>

            <div class="bg-[#f0f7ff] rounded-2xl p-8 flex flex-col md:flex-row items-center justify-between gap-8">

                <div class="space-y-4">
                    <h3 class="text-[#001b3d] text-xl font-bold">Seja um parceiro da AJM</h3>
                    <p class="text-gray-600 text-xs max-w-sm">
                        A sua organização pode fazer parte desta transformação. Vamos construir juntos um futuro melhor
                        para os jovens!
                    </p>
                    <Link :href="route('contacts')">
                        <button
                        class="bg-[#fccb45] text-[#001b3d] font-bold px-5 py-2.5 rounded-lg flex items-center gap-2 text-xs">
                        Fale connosco <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </button>
                    </Link>
                </div>

                <div class="flex flex-wrap md:flex-nowrap items-center gap-8 md:gap-12">
                    <div class="flex items-center gap-3">
                        <div class="bg-[#fccb45] w-12 h-12 rounded-full flex items-center justify-center shadow-sm">
                            <i class="fa-solid fa-handshake-simple text-[#001b3d] text-lg"></i>
                        </div>
                        <div>
                            <span class="block text-[#001b3d] text-xl font-bold leading-none">50+</span>
                            <span class="text-gray-500 text-[10px]">Parceiros envolvidos</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="bg-[#fccb45] w-12 h-12 rounded-full flex items-center justify-center shadow-sm">
                            <i class="fa-solid fa-people-group text-[#001b3d] text-lg"></i>
                        </div>
                        <div>
                            <span class="block text-[#001b3d] text-xl font-bold leading-none">15+</span>
                            <span class="text-gray-500 text-[10px]">Projetos realizados</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="bg-[#fccb45] w-12 h-12 rounded-full flex items-center justify-center shadow-sm">
                            <i class="fa-solid fa-user-group text-[#001b3d] text-lg"></i>
                        </div>
                        <div>
                            <span class="block text-[#001b3d] text-xl font-bold leading-none">5000+</span>
                            <span class="text-gray-500 text-[10px]">Jovens beneficiados</span>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="bg-[#fccb45] w-12 h-12 rounded-full flex items-center justify-center shadow-sm">
                            <i class="fa-solid fa-map-location-dot text-[#001b3d] text-lg"></i>
                        </div>
                        <div>
                            <span class="block text-[#001b3d] text-xl font-bold leading-none">8</span>
                            <span class="text-gray-500 text-[10px]">Províncias alcançadas</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </PublicLayout>
</template>
<script setup>
import PublicLayout from '@/layouts/PublicLayout.vue';
import Project from '../../assets/img/project.png';

</script>

<template>
    <PublicLayout>
        <section class="relative w-full bg-[#001b3d] overflow-hidden">

            <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center">

                <div class="w-full md:w-1/2 px-6 py-20 z-10">
                    <h1 class="text-white text-6xl md:text-7xl font-extrabold mb-4 relative">
                        Os Nossos Projectos
                        <span class="absolute bottom-[-10px] left-0 w-24 h-1.5 bg-[#fbb03b]"></span>
                    </h1>

                    <p class="text-slate-300 text-lg md:text-xl leading-relaxed mt-10 max-w-lg">
                        Conheça as iniciativas que estamos a desenvolver
                        para capacitar jovens e transformar comunidades
                    </p>
                </div>

                <div class="w-full md:w-1/2 relative h-[400px] md:h-[600px]">
                    <img :src="Project" alt="Equipa AJM" class="w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-gradient-to-r from-[#001b3d] via-[#001b3d]/2 to-transparent"></div>
                </div>
            </div>
        </section>
        <section class="max-w-7xl mx-auto px-6 py-12 font-sans bg-white">
            <div class="flex justify-between items-center mb-10">
                <h2 class="text-[#001b3d] text-2xl font-bold">Projetos em destaque</h2>
                <a href="#" class="text-[#001b3d] text-sm font-bold flex items-center gap-2 hover:underline">
                    Ver todos os projetos <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-16">

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col h-full">
                    <div class="relative h-44">
                        <img src="edu.jpg" class="w-full h-full object-cover">
                        <div
                            class="absolute -bottom-5 left-4 bg-[#fccb45] w-10 h-10 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                            <i class="fa-solid fa-book-open text-[#001b3d] text-sm"></i>
                        </div>
                    </div>
                    <div class="p-5 pt-8 flex flex-col flex-grow">
                        <h3 class="text-[#001b3d] font-bold text-base mb-3">Educação para Todos</h3>
                        <p class="text-gray-500 text-[11px] leading-relaxed mb-4 flex-grow">
                            Promovemos o acesso à educação de qualidade para jovens em comunidades vulneráveis.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full">Educação</span>
                            <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full">Jovens</span>
                            <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full">Inclusão</span>
                        </div>
                        <a href="#" class="text-[#001b3d] font-bold text-[11px] flex items-center gap-2">
                            Ver projeto <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col h-full">
                    <div class="relative h-44">
                        <img src="emp.jpg" class="w-full h-full object-cover">
                        <div
                            class="absolute -bottom-5 left-4 bg-[#fccb45] w-10 h-10 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                            <i class="fa-solid fa-briefcase text-[#001b3d] text-sm"></i>
                        </div>
                    </div>
                    <div class="p-5 pt-8 flex flex-col flex-grow">
                        <h3 class="text-[#001b3d] font-bold text-base mb-3">Empreendedorismo Jovem</h3>
                        <p class="text-gray-500 text-[11px] leading-relaxed mb-4 flex-grow">
                            Capacitamos jovens com competências empreendedoras para criarem negócios sustentáveis.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span
                                class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full">Empreendedorismo</span>
                            <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full">Formação</span>
                            <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full">Inovação</span>
                        </div>
                        <a href="#" class="text-[#001b3d] font-bold text-[11px] flex items-center gap-2">
                            Ver projeto <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col h-full">
                    <div class="relative h-44">
                        <img src="env.jpg" class="w-full h-full object-cover">
                        <div
                            class="absolute -bottom-5 left-4 bg-[#fccb45] w-10 h-10 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                            <i class="fa-solid fa-leaf text-[#001b3d] text-sm"></i>
                        </div>
                    </div>
                    <div class="p-5 pt-8 flex flex-col flex-grow">
                        <h3 class="text-[#001b3d] font-bold text-base mb-3">Ambiente e Sustentabilidade</h3>
                        <p class="text-gray-500 text-[11px] leading-relaxed mb-4 flex-grow">
                            Desenvolvemos ações de sensibilização e projetos ambientais para um futuro mais verde.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full">Ambiente</span>
                            <span
                                class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full">Sustentabilidade</span>
                            <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full">Comunidade</span>
                        </div>
                        <a href="#" class="text-[#001b3d] font-bold text-[11px] flex items-center gap-2">
                            Ver projeto <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>

                <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden flex flex-col h-full">
                    <div class="relative h-44">
                        <img src="lid.jpg" class="w-full h-full object-cover">
                        <div
                            class="absolute -bottom-5 left-4 bg-[#fccb45] w-10 h-10 rounded-full flex items-center justify-center border-4 border-white shadow-sm">
                            <i class="fa-solid fa-users-line text-[#001b3d] text-sm"></i>
                        </div>
                    </div>
                    <div class="p-5 pt-8 flex flex-col flex-grow">
                        <h3 class="text-[#001b3d] font-bold text-base mb-3">Liderança e Cidadania</h3>
                        <p class="text-gray-500 text-[11px] leading-relaxed mb-4 flex-grow">
                            Formamos líderes jovens comprometidos com a cidadania ativa e o desenvolvimento comunitário.
                        </p>
                        <div class="flex flex-wrap gap-2 mb-4">
                            <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full">Liderança</span>
                            <span class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full">Cidadania</span>
                            <span
                                class="bg-gray-50 text-gray-500 text-[10px] px-3 py-1 rounded-full">Participação</span>
                        </div>
                        <a href="#" class="text-[#001b3d] font-bold text-[11px] flex items-center gap-2">
                            Ver projeto <i class="fa-solid fa-arrow-right text-[10px]"></i>
                        </a>
                    </div>
                </div>
            </div>

            <div class="bg-[#f0f7ff] rounded-2xl p-8 grid grid-cols-2 md:grid-cols-4 gap-8 mb-12">
                <div class="flex items-center gap-4">
                    <div class="bg-[#001b3d] w-12 h-12 rounded-xl flex items-center justify-center text-white text-xl">
                        <i class="fa-solid fa-users-viewfinder"></i>
                    </div>
                    <div>
                        <span class="block text-[#001b3d] text-2xl font-bold">12+</span>
                        <span class="block text-gray-500 text-[10px] font-bold">Projetos ativos</span>
                        <span class="block text-gray-400 text-[9px]">Em várias áreas de atuação</span>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="bg-[#001b3d] w-12 h-12 rounded-xl flex items-center justify-center text-white text-xl">
                        <i class="fa-solid fa-people-group"></i>
                    </div>
                    <div>
                        <span class="block text-[#001b3d] text-2xl font-bold">5000+</span>
                        <span class="block text-gray-500 text-[10px] font-bold">Jovens beneficiados</span>
                        <span class="block text-gray-400 text-[9px]">Impacto direto nas comunidades</span>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="bg-[#001b3d] w-12 h-12 rounded-xl flex items-center justify-center text-white text-xl">
                        <i class="fa-regular fa-calendar-check"></i>
                    </div>
                    <div>
                        <span class="block text-[#001b3d] text-2xl font-bold">8</span>
                        <span class="block text-gray-500 text-[10px] font-bold">Províncias alcançadas</span>
                        <span class="block text-gray-400 text-[9px]">De norte a sul do país</span>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="bg-[#001b3d] w-12 h-12 rounded-xl flex items-center justify-center text-white text-xl">
                        <i class="fa-solid fa-handshake-simple"></i>
                    </div>
                    <div>
                        <span class="block text-[#001b3d] text-2xl font-bold">50+</span>
                        <span class="block text-gray-500 text-[10px] font-bold">Parceiros envolvidos</span>
                        <span class="block text-gray-400 text-[9px]">Juntos por um objetivo comum</span>
                    </div>
                </div>
            </div>

            <div
                class="bg-[#001b3d] rounded-2xl p-8 flex flex-col md:flex-row items-center justify-between gap-6 overflow-hidden">
                <div class="flex items-center gap-6">
                    <div class="bg-[#fccb45] w-14 h-14 rounded-full flex items-center justify-center shadow-lg">
                        <i class="fa-regular fa-heart text-[#001b3d] text-xl"></i>
                    </div>
                    <div>
                        <h3 class="text-white text-xl font-bold">Quer apoiar os nossos projetos?</h3>
                        <p class="text-white/70 text-xs">A sua contribuição faz a diferença na vida de muitos jovens.
                        </p>
                    </div>
                </div>
                <div class="flex flex-wrap gap-4">
                    <button
                        class="bg-[#fccb45] text-[#001b3d] font-bold px-6 py-3 rounded-lg flex items-center gap-2 text-xs hover:brightness-105 transition-all">
                        <i class="fa-solid fa-heart"></i> Fazer uma doação
                    </button>
                    <Link :href="route('signup')"
                        class="border border-white/30 text-white font-bold px-6 py-3 rounded-lg flex items-center gap-2 text-xs hover:bg-white/10 transition-all">
                        <i class="fa-regular fa-user"></i> Seja voluntário
                    </Link>
                </div>
            </div>
        </section>
    </PublicLayout>
</template>
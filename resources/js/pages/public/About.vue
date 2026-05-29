<script setup>
import PublicLayout from '@/layouts/PublicLayout.vue';
import AJM from '../../assets/img/about.png';
import Avatar from '../../assets/img/avatar/avatar_1.svg';

</script>

<template>
    <PublicLayout>
        <section class="relative w-full bg-[#001b3d] overflow-hidden">
            <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center">

                <div class="w-full md:w-1/2 px-6 py-20 z-10">
                    <h1 class="text-white text-6xl md:text-7xl font-extrabold mb-4 relative">
                        Sobre nós
                        <span class="absolute bottom-[-10px] left-0 w-24 h-1.5 bg-[#fbb03b]"></span>
                    </h1>

                    <p class="text-slate-300 text-lg md:text-xl leading-relaxed mt-10 max-w-lg">
                        Conheça a nossa história, missão, visão e os valores que nos movem todos os dias a trabalhar por
                        uma juventude mais capacitada, inclusiva e protagonista da mudança social em Marracuene.
                    </p>
                </div>

                <div class="w-full md:w-1/2 relative h-[400px] md:h-[600px]">
                    <img :src="AJM" alt="Equipa AJM" class="w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-gradient-to-r from-[#001b3d] via-[#001b3d]/2 to-transparent"></div>
                </div>
            </div>
        </section>
        <section class="max-w-7xl mx-auto px-6 py-16 font-sans">
            <div class="flex flex-col lg:flex-row gap-12">

                <div class="lg:w-2/3">
                    <div class="mb-8">
                        <h2 class="text-[#001b3d] text-2xl font-bold mb-2">A nossa essência</h2>
                        <div class="w-12 h-1 bg-[#fbb03b]"></div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-16 h-16 bg-[#001b3d] rounded-full flex items-center justify-center mb-4">
                                <i class="fa-solid fa-bullseye text-white text-2xl"></i>
                            </div>
                            <h3 class="text-[#001b3d] font-bold mb-2">Missão</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                Promover o desenvolvimento integral da juventude, criando oportunidades que fortaleçam
                                competências, liderança e cidadania ativa.
                            </p>
                        </div>

                        <div class="border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-16 h-16 bg-[#fbb03b] rounded-full flex items-center justify-center mb-4">
                                <i class="fa-regular fa-eye text-white text-2xl"></i>
                            </div>
                            <h3 class="text-[#fbb03b] font-bold mb-2">Visão</h3>
                            <p class="text-gray-500 text-sm leading-relaxed">
                                Ser referência em transformação social e empoderamento juvenil, construindo uma
                                comunidade justa, inclusiva e próspera.
                            </p>
                        </div>

                        <div class="border border-gray-100 rounded-2xl p-6 shadow-sm hover:shadow-md transition-shadow">
                            <div class="w-16 h-16 bg-[#001b3d] rounded-full flex items-center justify-center mb-4">
                                <i class="fa-solid fa-gem text-white text-2xl"></i>
                            </div>
                            <h3 class="text-[#001b3d] font-bold mb-2">Valores</h3>
                            <ul class="text-gray-500 text-sm space-y-2">
                                <li class="flex items-center gap-2"><i
                                        class="fa-solid fa-check text-[#001b3d] text-[10px]"></i> Integridade</li>
                                <li class="flex items-center gap-2"><i
                                        class="fa-solid fa-check text-[#001b3d] text-[10px]"></i> Inclusão</li>
                                <li class="flex items-center gap-2"><i
                                        class="fa-solid fa-check text-[#001b3d] text-[10px]"></i> Responsabilidade</li>
                                <li class="flex items-center gap-2"><i
                                        class="fa-solid fa-check text-[#001b3d] text-[10px]"></i> Inovação</li>
                                <li class="flex items-center gap-2"><i
                                        class="fa-solid fa-check text-[#001b3d] text-[10px]"></i> Trabalho em equipa
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="lg:w-1/3">
                    <div class="mb-8">
                        <h2 class="text-[#001b3d] text-2xl font-bold mb-2">A nossa história</h2>
                        <div class="w-12 h-1 bg-[#fbb03b]"></div>
                    </div>

                    <div class="space-y-6 text-gray-600 text-sm leading-relaxed border-l border-gray-100 pl-8">
                        <p>
                            A AJM nasceu em 2018, fundada por um grupo de jovens sonhadores que acreditam no poder da
                            educação, da cultura e do empreendedorismo como motores de mudança social.
                        </p>
                        <p>
                            Desde então, temos trabalhado lado a lado com a comunidade para identificar desafios, criar
                            soluções e abrir caminhos para que os jovens possam alcançar o seu pleno potencial.
                        </p>
                        <p>
                            Hoje, somos uma rede crescente de jovens, parceiros e voluntários comprometidos com um
                            futuro melhor para Marracuene.
                        </p>
                    </div>
                </div>

            </div>
        </section>
        <section class="relative bottom-[40px] w-full px-6 left-0">
            <div class="max-w-7xl mx-auto">
                <div
                    class="bg-white rounded-3xl shadow-2xl grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8 px-8 py-10">

                    <div class="flex items-start gap-4">
                        <div class="text-[#001b3d] text-4xl mt-1">
                            <i class="fa-solid fa-users"></i>
                        </div>
                        <div>
                            <h3 class="text-[#001b3d] text-3xl font-extrabold leading-none">500+</h3>
                            <p class="text-gray-900 font-bold text-sm mt-1">Jovens impactados</p>
                            <p class="text-gray-500 text-xs leading-relaxed mt-1">
                                Acreditamos no potencial da juventude.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="text-[#fbb03b] text-4xl mt-1">
                            <i class="fa-regular fa-calendar-check"></i>
                        </div>
                        <div>
                            <h3 class="text-[#fbb03b] text-3xl font-extrabold leading-none">20+</h3>
                            <p class="text-gray-900 font-bold text-sm mt-1">Eventos realizados</p>
                            <p class="text-gray-500 text-xs leading-relaxed mt-1">
                                Encontros, formações e atividades que transformam.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="text-[#001b3d] text-4xl mt-1">
                            <i class="fa-solid fa-graduation-cap"></i>
                        </div>
                        <div>
                            <h3 class="text-[#001b3d] text-3xl font-extrabold leading-none">15+</h3>
                            <p class="text-gray-900 font-bold text-sm mt-1">Formações</p>
                            <p class="text-gray-500 text-xs leading-relaxed mt-1">
                                Capacitação prática para um futuro melhor.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="text-[#fbb03b] text-4xl mt-1">
                            <i class="fa-solid fa-handshake-angle"></i>
                        </div>
                        <div>
                            <h3 class="text-[#fbb03b] text-3xl font-extrabold leading-none">10+</h3>
                            <p class="text-gray-900 font-bold text-sm mt-1">Parcerias</p>
                            <p class="text-gray-500 text-xs leading-relaxed mt-1">
                                Trabalhando juntos por uma comunidade forte.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="max-w-7xl mx-auto px-6 py-16 font-sans">
            <div class="flex flex-col lg:flex-row items-center gap-6">

                <div class="lg:w-1/4">
                    <h2 class="text-[#001b3d] text-2xl font-bold mb-2">A nossa equipa</h2>
                    <div class="w-12 h-1 bg-[#fbb03b] mb-6"></div>
                    <p class="text-gray-500 text-sm leading-relaxed mb-8">
                        Uma equipa jovem, dinâmica e apaixonada por transformar ideias em impacto real.
                    </p>
                    <Link :href="route('signup')">
                        <button
                        class="border border-[#001b3d] text-[#001b3d] px-6 py-2.5 rounded-lg flex items-center gap-2 font-bold text-sm hover:bg-[#001b3d] hover:text-white transition-all">
                        Junte-se a nós <i class="fa-solid fa-arrow-right"></i>
                        </button>
                    </Link>
                </div>

                <div class="lg:w-1/2 grid grid-cols-2 md:grid-cols-4 gap-4">
                    <div class="bg-white border border-gray-100 rounded-2xl p-4 shadow-sm text-center">
                        <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100">
                            <img :src="Avatar" alt="Nelson Chauque" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-[#001b3d] font-bold text-sm">Nelson Chauque</h3>
                        <p class="text-gray-400 text-[10px] uppercase tracking-wider">Presidente</p>
                    </div>

                    <div class="bg-white border border-gray-100 rounded-2xl p-4 shadow-sm text-center">
                        <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100">
                            <img :src="Avatar" alt="Célia Manhique" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-[#001b3d] font-bold text-sm">Célia Manhique</h3>
                        <p class="text-gray-400 text-[10px] uppercase tracking-wider">Vice-Presidente</p>
                    </div>

                    <div class="bg-white border border-gray-100 rounded-2xl p-4 shadow-sm text-center">
                        <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100">
                            <img :src="Avatar" alt="Fernando Sitoe" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-[#001b3d] font-bold text-sm">Fernando Sitoe</h3>
                        <p class="text-gray-400 text-[10px] uppercase tracking-wider">Coord. de Projetos</p>
                    </div>

                    <div class="bg-white border border-gray-100 rounded-2xl p-4 shadow-sm text-center">
                        <div class="aspect-square rounded-xl overflow-hidden mb-4 bg-gray-100">
                            <img :src="Avatar" alt="Dina Matsinhe" class="w-full h-full object-cover">
                        </div>
                        <h3 class="text-[#001b3d] font-bold text-sm">Dina Matsinhe</h3>
                        <p class="text-gray-400 text-[10px] uppercase tracking-wider">Coord. de Programas</p>
                    </div>
                </div>

                <div class="lg:w-1/4 self-stretch">
                    <div
                        class="bg-[#001b3d] rounded-2xl p-8 h-full flex flex-col justify-between relative overflow-hidden border-r-4 border-[#fbb03b]">
                        <div class="relative z-10">
                            <div class="text-[#fbb03b] text-4xl mb-6">
                                <i class="fa-solid fa-hand-holding-heart"></i>
                            </div>
                            <h3 class="text-white text-xl font-bold mb-4">Faça parte da mudança!</h3>
                            <p class="text-white/70 text-xs leading-relaxed">
                                Acreditamos que cada jovem tem o poder de transformar a sua realidade e construir um
                                amanhã melhor.
                            </p>
                        </div>
                        <Link :href="route('signup')"
                            class="bg-[#fbb03b] text-[#001b3d] w-full py-3 rounded-xl font-bold text-sm flex items-center justify-center gap-2 hover:brightness-110 transition-all mt-8 relative z-10">
                            Tornar-se membro <i class="fa-solid fa-arrow-right"></i>
                        </Link>
                    </div>
                </div>

            </div>
        </section>
    </PublicLayout>
</template>
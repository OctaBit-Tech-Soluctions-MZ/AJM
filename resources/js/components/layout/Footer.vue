<template>
    <div class="relative">
        <footer class="bg-[#0a1629] text-white pt-28 pb-6 px-6">
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12 border-b border-white/10 pb-10">

                <div class="space-y-6">
                    <div class="flex items-center gap-4 text-white">
                        <div class="w-10 h-10 bg-white/20 rounded-full">
                            <img :src="Logo" alt="">
                        </div>
                        <div class="leading-tight">
                            <p class="font-bold text-lg">AJM</p>
                            <p class="text-xs opacity-80">Associação Juvenil de Marracuene</p>
                        </div>
                    </div>
                    <p class="text-sm text-gray-400 leading-relaxed">
                        Promovendo o desenvolvimento integral da juventude e construindo um futuro com mais
                        oportunidades para todos.
                    </p>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-[#0a1629] transition-all"><i
                                class="fa-brands fa-facebook-f text-sm"></i></a>
                        <a href="#"
                            class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-[#0a1629] transition-all"><i
                                class="fa-brands fa-instagram text-sm"></i></a>
                        <a href="#"
                            class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-[#0a1629] transition-all"><i
                                class="fa-brands fa-youtube text-sm"></i></a>
                        <a href="#"
                            class="w-8 h-8 rounded-full border border-white/20 flex items-center justify-center hover:bg-white hover:text-[#0a1629] transition-all"><i
                                class="fa-brands fa-whatsapp text-sm"></i></a>
                    </div>
                </div>

                <div>
                    <h4 class="font-bold mb-6">Navegação</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><Link :href="route('home')" class="hover:text-white">Início</Link></li>
                        <li><Link :href="route('about')" class="hover:text-white">Sobre nós</Link></li>
                        <li><Link :href="route('projects')" class="hover:text-white">Projetos</Link></li>
                        <li><Link :href="route('events')" class="hover:text-white">Eventos</Link></li>
                        <li><Link :href="route('partners')" class="hover:text-white">Parcerias</Link></li>
                        <li><Link :href="route('contacts')" class="hover:text-white">Contacto</Link></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-6">Áreas de atuação</h4>
                    <ul class="space-y-3 text-sm text-gray-400">
                        <li><a href="#" class="hover:text-white">Educação</a></li>
                        <li><a href="#" class="hover:text-white">Empreendedorismo</a></li>
                        <li><a href="#" class="hover:text-white">Cultura</a></li>
                        <li><a href="#" class="hover:text-white">Inclusão Social</a></li>
                    </ul>
                </div>

                <div>
                    <h4 class="font-bold mb-6">Contactos</h4>
                    <ul class="space-y-4 text-sm text-gray-400">
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-phone text-xs"></i> +258 84 123 4567
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-regular fa-envelope text-xs"></i> geral@ajm.org.mz
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fa-solid fa-location-dot text-xs"></i> Marracuene, Moçambique
                        </li>
                    </ul>
                </div>
            </div>

            <div class="text-center pt-8">
                <p class="text-[10px] text-gray-500 uppercase tracking-widest">
                    © 2025 Associação Juvenil de Marracuene. Todos os direitos reservados.
                </p>
            </div>
        </footer>

    </div>
</template>
<script setup>
import Logo from '../../assets/img/logo.png';
</script>
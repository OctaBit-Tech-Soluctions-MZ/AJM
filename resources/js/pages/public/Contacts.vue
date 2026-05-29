<script setup>
import PublicLayout from '@/layouts/PublicLayout.vue';
import Pronto from '../../assets/img/pronto.png';

</script>

<template>
    <PublicLayout>

        <section class="relative w-full bg-[#001b3d] overflow-hidden">

            <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center">

                <div class="w-full md:w-1/2 px-6 py-20 z-10">
                    <h1 class="text-white text-6xl md:text-7xl font-extrabold mb-4 relative">
                        Fale connosco
                        <span class="absolute bottom-[-10px] left-0 w-24 h-1.5 bg-[#fbb03b]"></span>
                    </h1>

                    <p class="text-slate-300 text-lg md:text-xl leading-relaxed mt-10 max-w-lg">
                        Estamos aqui para ouvir-te! Entra em contacto connosco
                        para saber mais, tirar duvidas ou propor parcerias
                    </p>
                </div>

                <div class="w-full md:w-1/2 relative h-[400px] md:h-[600px]">
                    <img :src="Pronto" alt="Equipa AJM" class="w-full h-full object-cover object-center">

                    <div class="absolute inset-0 bg-gradient-to-r from-[#001b3d] via-[#001b3d]/2 to-transparent"></div>
                </div>
            </div>
        </section>
        <section class="max-w-7xl mx-auto px-6 py-16 font-sans">
            <div class="flex flex-col lg:flex-row gap-16">

                <div class="lg:w-1/2">
                    <h2 class="text-[#001b3d] text-2xl font-bold mb-8">Envia-nos uma mensagem</h2>

                    <form class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="space-y-2">
                                <label class="text-[#001b3d] text-xs font-bold">Nome completo <span
                                        class="text-red-500">*</span></label>
                                <input type="text" placeholder="O teu nome"
                                    class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none">
                            </div>
                            <div class="space-y-2">
                                <label class="text-[#001b3d] text-xs font-bold">Email <span
                                        class="text-red-500">*</span></label>
                                <input type="email" placeholder="O teu email"
                                    class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#001b3d] text-xs font-bold">Assunto <span
                                    class="text-red-500">*</span></label>
                            <div class="relative">
                                <select
                                    class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none appearance-none">
                                    <option>Seleciona um assunto</option>
                                </select>
                                <i
                                    class="fa-solid fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 text-xs"></i>
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="text-[#001b3d] text-xs font-bold">Mensagem <span
                                    class="text-red-500">*</span></label>
                            <textarea placeholder="Escreve a tua mensagem..." rows="5"
                                class="w-full bg-gray-50 border border-gray-300 rounded-lg px-4 py-3 text-sm outline-none resize-none"></textarea>
                        </div>

                        <button type="submit"
                            class="bg-[#001b3d] text-white px-8 py-3 rounded-lg font-bold text-sm flex items-center gap-2 hover:bg-[#002861] transition-all">
                            <i class="fa-solid fa-paper-plane text-xs"></i> Enviar mensagem
                        </button>
                    </form>
                </div>

                <div class="lg:w-1/2 border-l border-gray-100 pl-8 md:pl-12">
                    <h2 class="text-[#001b3d] text-2xl font-bold mb-8">Outras formas de contacto</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-10">
                        <div class="border border-gray-100 rounded-2xl p-5 flex items-start gap-4">
                            <div class="w-10 h-10 bg-[#fccb45] rounded-full flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-location-dot text-[#001b3d]"></i>
                            </div>
                            <div>
                                <h4 class="text-[#001b3d] font-bold text-sm">Endereço</h4>
                                <p class="text-gray-500 text-[11px] leading-relaxed">Av. Julius Nyerere, nº
                                    1234<br>Maputo, Moçambique</p>
                            </div>
                        </div>

                        <div class="border border-gray-100 rounded-2xl p-5 flex items-start gap-4">
                            <div class="w-10 h-10 bg-[#fccb45] rounded-full flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-phone text-[#001b3d]"></i>
                            </div>
                            <div>
                                <h4 class="text-[#001b3d] font-bold text-sm">Telefone</h4>
                                <p class="text-gray-500 text-[11px] leading-relaxed">+258 84 123 4567<br>+258 82 987
                                    6543</p>
                            </div>
                        </div>

                        <div class="border border-gray-100 rounded-2xl p-5 flex items-start gap-4">
                            <div class="w-10 h-10 bg-[#fccb45] rounded-full flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-envelope text-[#001b3d]"></i>
                            </div>
                            <div>
                                <h4 class="text-[#001b3d] font-bold text-sm">Email</h4>
                                <p class="text-gray-500 text-[11px] leading-relaxed">geral@ajm.org.mz<br>info@ajm.org.mz
                                </p>
                            </div>
                        </div>

                        <div class="border border-gray-100 rounded-2xl p-5 flex items-start gap-4">
                            <div class="w-10 h-10 bg-[#fccb45] rounded-full flex items-center justify-center shrink-0">
                                <i class="fa-solid fa-clock text-[#001b3d]"></i>
                            </div>
                            <div>
                                <h4 class="text-[#001b3d] font-bold text-sm">Horário</h4>
                                <p class="text-gray-500 text-[11px] leading-relaxed">Seg - Sex: 08h00 - 17h00<br>Sáb:
                                    08h00 - 12h00</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-[#001b3d] text-2xl font-bold mb-6">Onde estamos</h2>
                    <div class="w-full h-48 rounded-2xl overflow-hidden grayscale border border-gray-100">
                        <iframe class="w-full h-full border-0" src="https://www.google.com/maps?q=Maputo&output=embed"
                            allowfullscreen loading="lazy">
                        </iframe>
                    </div>
                </div>

            </div>
        </section>
        <section class="max-w-7xl mx-auto px-6 py-10 font-sans">
            <div
                class="bg-[#001b3d] rounded-2xl p-6 md:p-10 flex flex-col md:flex-row items-center justify-between gap-6 overflow-hidden">

                <div class="flex items-center gap-6">
                    <div
                        class="bg-[#fccb45] w-16 h-16 rounded-full flex items-center justify-center shrink-0 shadow-lg">
                        <i class="fa-solid fa-handshake text-[#001b3d] text-2xl"></i>
                    </div>

                    <div>
                        <h3 class="text-white text-xl md:text-2xl font-bold mb-1">
                            Queres ser nosso parceiro?
                        </h3>
                        <p class="text-white/80 text-sm md:text-base">
                            Juntos podemos criar mais impacto na juventude moçambicana.
                        </p>
                    </div>
                </div>

                <Link :href="route('partners')"
                    class="bg-[#fccb45] text-[#001b3d] font-bold px-8 py-3 rounded-xl flex items-center gap-3 hover:brightness-110 transition-all whitespace-nowrap text-sm">
                    Saber mais sobre parcerias <i class="fa-solid fa-arrow-right"></i>
                </Link>

            </div>
        </section>
    </PublicLayout>
</template>
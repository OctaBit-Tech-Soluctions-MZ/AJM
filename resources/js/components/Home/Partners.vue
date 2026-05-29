<template>
    <section class="max-w-7xl mx-auto px-6 py-10">
        <div class="flex flex-col md:flex-row justify-between items-end mb-12 gap-6">
            <div class="max-w-2xl">
                <p class="text-[#fbb03b] font-bold text-sm uppercase tracking-widest mb-2">REDE DE APOIO</p>
                <h2 class="text-[#001b3d] text-4xl font-extrabold mb-4">Nossos parceiros e apoiadores</h2>
                <p class="text-gray-500">Trabalhamos em conjunto com organizações que acreditam no potencial da
                    juventude de Marracuene.</p>
            </div>
            <Link :href="route('contacts')">
            <button
                class="border-2 border-[#001b3d] text-[#001b3d] px-6 py-2 rounded-xl font-bold hover:bg-[#001b3d] hover:text-white transition-all flex items-center gap-2 group">
                Quero ser parceiro
                <i class="fa-solid fa-handshake group-hover:scale-110 transition-transform"></i>
            </button>
            </Link>
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
</template>
<script setup>
import Octabit from '../../assets/img/parceiros/octabit.png';
</script>
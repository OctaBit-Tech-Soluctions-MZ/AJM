<template>
    <div class="relative pt-5">
        <div class="max-w-6xl mx-auto px-4 relative z-10 -mb-16">
            <div
                class="bg-[#1d4ed8] rounded-2xl p-8 md:p-12 flex flex-col md:flex-row items-center justify-between gap-6 shadow-lg overflow-hidden relative">
                <div class="absolute right-0 top-0 opacity-10 pointer-events-none">
                    <svg width="200" height="200" viewBox="0 0 100 100">
                        <circle cx="100" cy="50" r="50" fill="white" />
                    </svg>
                </div>

                <div class="relative z-10">
                    <h2 class="text-white text-3xl font-bold mb-2">Faça parte da mudança!</h2>
                    <p class="text-white/80 max-w-md">
                        Junte-se a nós e ajude a construir um futuro melhor para os jovens de Marracuene.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 relative z-10">
                    <Link :href="route('signup')"
                        class="bg-[#fbb03b] text-black font-bold px-6 py-3 rounded-lg flex items-center gap-2 hover:bg-yellow-500 transition-all">
                        Tornar-se membro <i class="fa-solid fa-user-plus"></i>
                    </Link>
                    <Link
                        class="border border-white text-white font-bold px-6 py-3 rounded-lg flex items-center gap-2 hover:bg-white/10 transition-all">
                        Submeter um projeto <i class="fa-regular fa-file-lines"></i>
                    </Link>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup></script>
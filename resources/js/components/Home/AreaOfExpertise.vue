<template>
    <section class="max-w-7xl mx-auto px-6 py-4">
        <div class="text-center mb-12">
            <p class="text-[#fbb03b] font-bold text-sm uppercase tracking-widest mb-2">O QUE FAZEMOS</p>
            <h2 class="text-[#001b3d] text-4xl font-extrabold">Nossas áreas de atuação</h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

            <div
                class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-shadow text-center flex flex-col items-center border border-gray-50">
                <div class="w-16 h-16 bg-[#001b3d] rounded-full flex items-center justify-center mb-6 shadow-md">
                    <i class="fa-solid fa-book-open text-white text-2xl"></i>
                </div>
                <h3 class="text-[#001b3d] text-xl font-bold mb-3">Educação</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    Promovemos o acesso ao conhecimento e à formação de qualidade para todos os jovens.
                </p>
                <Link :href="route('contacts')" class="text-[#001b3d] font-bold text-sm hover:underline flex items-center gap-2 mt-auto">
                    Saiba mais <i class="fa-solid fa-arrow-right text-xs"></i>
            </Link>
            </div>

            <div
                class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-shadow text-center flex flex-col items-center border border-gray-50">
                <div class="w-16 h-16 bg-[#fbb03b] rounded-full flex items-center justify-center mb-6 shadow-md">
                    <i class="fa-solid fa-rocket text-white text-2xl"></i>
                </div>
                <h3 class="text-[#001b3d] text-xl font-bold mb-3">Empreendedorismo</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    Apoiamos jovens a transformar ideias em negócios sustentáveis e inovadores.
                </p>
                <Link :href="route('contacts')" class="text-[#001b3d] font-bold text-sm hover:underline flex items-center gap-2 mt-auto">
                    Saiba mais <i class="fa-solid fa-arrow-right text-xs"></i>
            </Link>
            </div>

            <div
                class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-shadow text-center flex flex-col items-center border border-gray-50">
                <div class="w-16 h-16 bg-[#001b3d] rounded-full flex items-center justify-center mb-6 shadow-md">
                    <i class="fa-solid fa-music text-white text-2xl"></i>
                </div>
                <h3 class="text-[#001b3d] text-xl font-bold mb-3">Cultura</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    Valorizamos a cultura local como ferramenta de identidade e transformação social.
                </p>
                <Link :href="route('contacts')" class="text-[#001b3d] font-bold text-sm hover:underline flex items-center gap-2 mt-auto">
                    Saiba mais <i class="fa-solid fa-arrow-right text-xs"></i>
            </Link>
            </div>

            <div
                class="bg-white p-8 rounded-3xl shadow-lg hover:shadow-2xl transition-shadow text-center flex flex-col items-center border border-gray-50">
                <div class="w-16 h-16 bg-[#fbb03b] rounded-full flex items-center justify-center mb-6 shadow-md">
                    <i class="fa-solid fa-users-line text-white text-2xl"></i>
                </div>
                <h3 class="text-[#001b3d] text-xl font-bold mb-3">Inclusão Social</h3>
                <p class="text-gray-500 text-sm leading-relaxed mb-6">
                    Trabalhamos por uma sociedade mais justa, igualitária e com oportunidades para todos.
                </p>
                <Link :href="route('contacts')" class="text-[#001b3d] font-bold text-sm hover:underline flex items-center gap-2 mt-auto">
                    Saiba mais <i class="fa-solid fa-arrow-right text-xs"></i>
            </Link>
            </div>
        </div>
    </section>
</template>
<script setup>

</script>
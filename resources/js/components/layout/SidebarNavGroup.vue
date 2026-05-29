<template>
    <div class="mt-6 first:mt-2">
        <!-- Título da Seção (Ajustado para fundo branco) -->
        <h3 class="mb-2 px-4 text-[10px] font-bold uppercase tracking-widest text-gray-500">
            {{ title }}
        </h3>

        <!-- Container dos Itens -->
        <div class="flex flex-col gap-y-0.5">
            <slot />
        </div>
    </div>
</template>

<script setup>
defineProps({
    title: {
        type: String,
        required: true,
    },
})
</script>
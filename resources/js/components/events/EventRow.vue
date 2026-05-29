<script setup>
defineProps({
  evento: Object,
})

const badgeClass = value => ({
  'Conferência': 'bg-purple-100 text-purple-700',
  'Workshop': 'bg-blue-100 text-blue-700',
  'Networking': 'bg-orange-100 text-orange-700',
  'Formação': 'bg-green-100 text-green-700',
  'Seminário': 'bg-violet-100 text-violet-700',
  'Publicado': 'bg-green-100 text-green-700',
  'Rascunho': 'bg-blue-100 text-blue-700',
  'Encerrado': 'bg-slate-200 text-slate-600',
}[value])
</script>

<template>
  <tr class="border-b border-slate-100 hover:bg-slate-50">
    <td class="px-6 py-5">
      <div class="flex items-center gap-4">
        <img :src="evento.imagem" class="w-20 h-14 rounded-xl object-cover" />

        <div>
          <h3 class="font-bold text-slate-900">{{ evento.nome }}</h3>
          <p class="text-slate-500">{{ evento.descricao }}</p>
        </div>
      </div>
    </td>

    <td class="px-6 py-5">
      <span class="px-3 py-1 rounded-lg text-sm font-semibold" :class="badgeClass(evento.tipo)">
        {{ evento.tipo }}
      </span>
    </td>

    <td class="px-6 py-5 text-slate-700 font-semibold">
      {{ evento.data }}
      <p class="text-slate-500 font-normal">{{ evento.hora }}</p>
    </td>

    <td class="px-6 py-5">
      <span class="px-3 py-1 rounded-lg text-sm font-semibold" :class="badgeClass(evento.estado)">
        {{ evento.estado }}
      </span>
    </td>

    <td class="px-6 py-5">
      <p class="font-semibold">{{ evento.vagas }}</p>
      <div class="w-24 h-1.5 bg-slate-200 rounded-full mt-2">
        <div class="h-1.5 rounded-full" :class="evento.barra" :style="{ width: evento.percentagem }"></div>
      </div>
    </td>

    <td class="px-6 py-5">
      <p class="font-semibold">{{ evento.inscricoes }}</p>
      <p class="text-slate-500">inscritos</p>
    </td>

    <td class="px-6 py-5">
      <div class="flex gap-3">
        <button class="w-10 h-10 rounded-xl border border-slate-200">
          <i class="fa-solid fa-eye"></i>
        </button>
        <button class="w-10 h-10 rounded-xl border border-slate-200">
          <i class="fa-solid fa-pen"></i>
        </button>
        <button class="w-10 h-10 rounded-xl border border-slate-200">
          <i class="fa-solid fa-ellipsis-vertical"></i>
        </button>
      </div>
    </td>
  </tr>
</template>
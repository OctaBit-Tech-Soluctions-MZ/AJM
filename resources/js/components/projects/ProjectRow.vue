<script setup>
defineProps({
  projeto: Object,
})

const badgeClass = value => ({
  'Formação': 'bg-purple-100 text-purple-700',
  'Infraestrutura': 'bg-green-100 text-green-700',
  'Saúde': 'bg-orange-100 text-orange-700',
  'Parcerias': 'bg-pink-100 text-pink-700',
  'Empreendedorismo': 'bg-violet-100 text-violet-700',
  'Em Execução': 'bg-blue-100 text-blue-700',
  'Planeamento': 'bg-yellow-100 text-yellow-700',
  'Concluído': 'bg-green-100 text-green-700',
  'Pausado': 'bg-slate-200 text-slate-600',
}[value])

const barClass = value => ({
  'Em Execução': 'bg-blue-600',
  'Planeamento': 'bg-yellow-500',
  'Concluído': 'bg-green-600',
  'Pausado': 'bg-slate-500',
}[value])
</script>

<template>
  <tr class="border-b border-slate-100 hover:bg-slate-50 transition">
    <td class="px-6 py-5">
      <div class="flex items-center gap-4">
        <div
          class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl"
          :class="projeto.iconBg"
        >
          <i :class="projeto.icon"></i>
        </div>

        <div>
          <h3 class="font-bold text-slate-900">
            {{ projeto.nome }}
          </h3>
          <p class="text-slate-500">
            {{ projeto.descricao }}
          </p>
        </div>
      </div>
    </td>

    <td class="px-6 py-5">
      <span class="px-3 py-1 rounded-full text-sm font-semibold" :class="badgeClass(projeto.categoria)">
        {{ projeto.categoria }}
      </span>
    </td>

    <td class="px-6 py-5 text-slate-700">
      <p>{{ projeto.inicio }}</p>
      <p>{{ projeto.fim }}</p>
    </td>

    <td class="px-6 py-5">
      <span class="px-3 py-1 rounded-full text-sm font-semibold" :class="badgeClass(projeto.estado)">
        {{ projeto.estado }}
      </span>
    </td>

    <td class="px-6 py-5">
      <p class="font-semibold text-slate-800">
        {{ projeto.progresso }}%
      </p>

      <div class="w-32 h-2 bg-slate-200 rounded-full mt-2">
        <div
          class="h-2 rounded-full"
          :class="barClass(projeto.estado)"
          :style="{ width: projeto.progresso + '%' }"
        ></div>
      </div>
    </td>

    <td class="px-6 py-5 font-semibold text-slate-700">
      {{ projeto.orcamento }}
    </td>

    <td class="px-6 py-5">
      <div class="flex items-center gap-2">
        <img :src="projeto.avatar" class="w-8 h-8 rounded-full object-cover" />
        <span class="font-medium text-slate-700">
          {{ projeto.responsavel }}
        </span>
      </div>
    </td>

    <td class="px-6 py-5">
      <div class="flex gap-2">
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
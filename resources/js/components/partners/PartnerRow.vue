<script setup>
defineProps({
  parceiro: Object,
})

const badgeClass = value => ({
  Financeiro: 'bg-blue-100 text-blue-700',
  Tecnologia: 'bg-orange-100 text-orange-700',
  Energia: 'bg-green-100 text-green-700',
  Seguros: 'bg-pink-100 text-pink-700',
  Patrocinador: 'bg-purple-100 text-purple-700',
  Estratégico: 'bg-blue-100 text-blue-700',
  Colaborador: 'bg-sky-100 text-sky-700',
  Apoiador: 'bg-yellow-100 text-yellow-700',
  Ativo: 'bg-green-100 text-green-700',
  Inativo: 'bg-slate-200 text-slate-600',
}[value])
</script>

<template>
  <tr class="border-b border-slate-100 hover:bg-slate-50 transition">
    <td class="px-6 py-5">
      <div class="flex items-center gap-4">
        <div
          class="w-16 h-16 rounded-xl flex items-center justify-center font-black text-lg"
          :class="parceiro.logoBg"
        >
          {{ parceiro.logo }}
        </div>

        <div>
          <h3 class="font-bold text-slate-900">
            {{ parceiro.nome }}
          </h3>
          <p class="text-slate-500 max-w-xs">
            {{ parceiro.descricao }}
          </p>
        </div>
      </div>
    </td>

    <td class="px-6 py-5">
      <span class="px-3 py-1 rounded-full text-sm font-semibold" :class="badgeClass(parceiro.categoria)">
        {{ parceiro.categoria }}
      </span>
    </td>

    <td class="px-6 py-5">
      <span class="px-3 py-1 rounded-full text-sm font-semibold" :class="badgeClass(parceiro.tipo)">
        <i class="fa-regular fa-star mr-1"></i>
        {{ parceiro.tipo }}
      </span>
    </td>

    <td class="px-6 py-5">
      <span class="px-3 py-1 rounded-full text-sm font-semibold" :class="badgeClass(parceiro.status)">
        <i class="fa-solid fa-circle text-[8px] mr-1"></i>
        {{ parceiro.status }}
      </span>
    </td>

    <td class="px-6 py-5 text-slate-600">
      <p>
        <i class="fa-regular fa-user mr-2"></i>
        {{ parceiro.contato }}
      </p>
      <p>
        <i class="fa-regular fa-envelope mr-2"></i>
        {{ parceiro.email }}
      </p>
    </td>

    <td class="px-6 py-5 font-semibold text-slate-700">
      {{ parceiro.projetos }}
    </td>

    <td class="px-6 py-5 text-slate-600">
      {{ parceiro.data }}
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
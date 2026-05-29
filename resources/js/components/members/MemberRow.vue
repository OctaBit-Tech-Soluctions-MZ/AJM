<script setup>
defineProps({
  membro: Object,
})

const categoriaClass = value => ({
  Jovem: 'bg-blue-100 text-blue-700',
  Voluntário: 'bg-yellow-100 text-yellow-700',
  Equipa: 'bg-green-100 text-green-700',
  Parceiro: 'bg-purple-100 text-purple-700',
}[value])

const estadoClass = value => ({
  Ativo: 'bg-green-100 text-green-700',
  Pendente: 'bg-orange-100 text-orange-700',
  Inativo: 'bg-slate-200 text-slate-600',
}[value])
</script>

<template>
  <tr class="border-b border-slate-100 hover:bg-slate-50 transition">
    <td class="px-6 py-5">
      <div class="flex items-center gap-3">
        <img :src="membro.avatar" class="w-11 h-11 rounded-full object-cover" />

        <div>
          <h3 class="font-bold text-slate-900">
            {{ membro.nome }}
          </h3>
          <p class="text-sm text-slate-500">
            {{ membro.telefone }}
          </p>
        </div>
      </div>
    </td>

    <td class="px-6 py-5 text-slate-600 font-medium">
      {{ membro.email }}
    </td>

    <td class="px-6 py-5">
      <span class="px-3 py-1 rounded-full text-sm font-semibold" :class="categoriaClass(membro.categoria)">
        {{ membro.categoria }}
      </span>
    </td>

    <td class="px-6 py-5 text-slate-600 font-medium">
      {{ membro.data }}
    </td>

    <td class="px-6 py-5">
      <span class="px-3 py-1 rounded-full text-sm font-semibold" :class="estadoClass(membro.estado)">
        {{ membro.estado }}
      </span>
    </td>

    <td class="px-6 py-5">
      <div class="flex gap-2">
        <button class="w-10 h-10 rounded-xl border border-slate-200 text-blue-600">
          <i class="fa-solid fa-eye"></i>
        </button>

        <button class="w-10 h-10 rounded-xl border border-slate-200 text-blue-600">
          <i class="fa-solid fa-pen"></i>
        </button>

        <button class="w-10 h-10 rounded-xl border border-slate-200 text-slate-600">
          <i class="fa-solid fa-ellipsis-vertical"></i>
        </button>
      </div>
    </td>
  </tr>
</template>
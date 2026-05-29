<script setup>
import ProjectRow from './ProjectRow.vue'

defineProps({
  projetos: Array,
})
</script>

<template>
  <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">
    <table class="w-full text-left">
      <thead class="bg-slate-50 border-b border-slate-200">
        <tr>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Projeto</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Categoria</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Período</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Estado</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Progresso</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Orçamento</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Responsável</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Ações</th>
        </tr>
      </thead>

      <tbody>
        <ProjectRow
          v-for="projeto in projetos"
          :key="projeto.id"
          :projeto="projeto"
        />
      </tbody>
    </table>

    <div class="flex items-center justify-between px-6 py-5">
      <p class="text-slate-500">
        Mostrando 1 a {{ projetos.length }} de 12 projetos
      </p>

      <div class="flex items-center gap-2">
        <button class="w-10 h-10 rounded-xl border border-slate-200">«</button>
        <button class="w-10 h-10 rounded-xl border border-slate-200">‹</button>
        <button class="w-10 h-10 rounded-xl bg-purple-600 text-white">1</button>
        <button class="w-10 h-10 rounded-xl border border-slate-200">2</button>
        <button class="w-10 h-10 rounded-xl border border-slate-200">3</button>
        <button class="w-10 h-10 rounded-xl border border-slate-200">›</button>
      </div>
    </div>
  </div>
</template>
<script setup>
import PartnerRow from './PartnerRow.vue'

defineProps({
  parceiros: Array,
})
</script>

<template>
  <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">
    <table class="w-full text-left">
      <thead class="bg-slate-50 border-b border-slate-200">
        <tr>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Parceiro</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Categoria</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Tipo de Parceria</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Status</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Contato</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Projetos</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Data de Cadastro</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Ações</th>
        </tr>
      </thead>

      <tbody>
        <PartnerRow
          v-for="parceiro in parceiros"
          :key="parceiro.id"
          :parceiro="parceiro"
        />
      </tbody>
    </table>

    <div class="flex items-center justify-between px-6 py-5 border-t border-slate-200">
      <p class="text-slate-500">
        Mostrando 1 a {{ parceiros.length }} de 24 parceiros
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
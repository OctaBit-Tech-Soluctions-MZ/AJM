<script setup>
import MemberRow from './MemberRow.vue'

defineProps({
  membros: Array,
})
</script>

<template>
  <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">
    <table class="w-full text-left">
      <thead class="bg-slate-50 border-b border-slate-200">
        <tr>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Nome</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Email</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Categoria</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Data de Adesão</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Estado</th>
          <th class="px-6 py-4 text-sm font-bold text-slate-500">Ações</th>
        </tr>
      </thead>

      <tbody>
        <MemberRow
          v-for="membro in membros"
          :key="membro.id"
          :membro="membro"
        />
      </tbody>
    </table>

    <div class="flex items-center justify-between px-6 py-5 border-t border-slate-200">
      <p class="text-slate-500">
        Mostrando 1 a {{ membros.length }} membros
      </p>

      <div class="flex items-center gap-2">
        <button class="w-10 h-10 rounded-xl border border-slate-200">‹</button>
        <button class="w-10 h-10 rounded-xl bg-[#06265c] text-white">1</button>
        <button class="w-10 h-10 rounded-xl border border-slate-200">2</button>
        <button class="w-10 h-10 rounded-xl border border-slate-200">3</button>
        <button class="w-10 h-10 rounded-xl border border-slate-200">›</button>
      </div>
    </div>
  </div>
</template>
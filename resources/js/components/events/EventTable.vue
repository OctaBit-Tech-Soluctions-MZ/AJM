<script setup>
import EventRow from './EventRow.vue'

defineProps({
  eventos: Array,
})
</script>

<template>
  <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">
    <table class="w-full text-left">
      <thead class="bg-slate-50">
        <tr>
          <th class="px-6 py-4">Evento</th>
          <th class="px-6 py-4">Tipo</th>
          <th class="px-6 py-4">Data</th>
          <th class="px-6 py-4">Estado</th>
          <th class="px-6 py-4">Vagas</th>
          <th class="px-6 py-4">Inscrições</th>
          <th class="px-6 py-4">Ações</th>
        </tr>
      </thead>

      <tbody>
        <EventRow
          v-for="evento in eventos"
          :key="evento.id"
          :evento="evento"
        />
      </tbody>
    </table>
  </div>
</template>
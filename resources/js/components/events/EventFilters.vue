<script setup>
import TextInput from '@/components/ui/TextInput.vue'
import SelectInput from '@/components/ui/SelectInput.vue'
import BaseButton from '@/components/ui/BaseButton.vue'

defineProps({
  filters: Object,
})

defineEmits(['update:filters', 'clear'])
</script>

<template>
  <div class="bg-white border border-slate-200 rounded-2xl p-5">
    <div class="grid grid-cols-1 md:grid-cols-4 xl:grid-cols-5 gap-4">
      <TextInput
        :model-value="filters.search"
        placeholder="Pesquisar evento..."
        @update:model-value="$emit('update:filters', { ...filters, search: $event })"
      />

      <SelectInput
        :model-value="filters.tipo"
        :options="[
          { label: 'Todos os tipos', value: '' },
          { label: 'Conferência', value: 'Conferência' },
          { label: 'Workshop', value: 'Workshop' },
          { label: 'Networking', value: 'Networking' },
          { label: 'Formação', value: 'Formação' },
          { label: 'Seminário', value: 'Seminário' },
        ]"
        @update:model-value="$emit('update:filters', { ...filters, tipo: $event })"
      />

      <SelectInput
        :model-value="filters.estado"
        :options="[
          { label: 'Todos os estados', value: '' },
          { label: 'Publicado', value: 'Publicado' },
          { label: 'Rascunho', value: 'Rascunho' },
          { label: 'Encerrado', value: 'Encerrado' },
        ]"
        @update:model-value="$emit('update:filters', { ...filters, estado: $event })"
      />

      <TextInput
        :model-value="filters.periodo"
        type="date"
        @update:model-value="$emit('update:filters', { ...filters, periodo: $event })"
      />

      <BaseButton variant="secondary" icon="fa-solid fa-filter-circle-xmark" @click="$emit('clear')">
        Limpar Filtros
      </BaseButton>
    </div>
  </div>
</template>
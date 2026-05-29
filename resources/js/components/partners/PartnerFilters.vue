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
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-5 gap-4">
      <TextInput
        :model-value="filters.search"
        placeholder="Pesquisar parceiros..."
        @update:model-value="$emit('update:filters', { ...filters, search: $event })"
      />

      <SelectInput
        :model-value="filters.categoria"
        :options="[
          { label: 'Todas', value: '' },
          { label: 'Financeiro', value: 'Financeiro' },
          { label: 'Tecnologia', value: 'Tecnologia' },
          { label: 'Energia', value: 'Energia' },
          { label: 'Seguros', value: 'Seguros' },
        ]"
        @update:model-value="$emit('update:filters', { ...filters, categoria: $event })"
      />

      <SelectInput
        :model-value="filters.tipo"
        :options="[
          { label: 'Todos', value: '' },
          { label: 'Patrocinador', value: 'Patrocinador' },
          { label: 'Estratégico', value: 'Estratégico' },
          { label: 'Colaborador', value: 'Colaborador' },
          { label: 'Apoiador', value: 'Apoiador' },
        ]"
        @update:model-value="$emit('update:filters', { ...filters, tipo: $event })"
      />

      <SelectInput
        :model-value="filters.status"
        :options="[
          { label: 'Todos', value: '' },
          { label: 'Ativo', value: 'Ativo' },
          { label: 'Inativo', value: 'Inativo' },
        ]"
        @update:model-value="$emit('update:filters', { ...filters, status: $event })"
      />

      <BaseButton variant="secondary" icon="fa-solid fa-rotate-left" @click="$emit('clear')">
        Limpar filtros
      </BaseButton>
    </div>
  </div>
</template>
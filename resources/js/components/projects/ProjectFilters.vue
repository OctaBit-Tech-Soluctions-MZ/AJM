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
        placeholder="Pesquisar projetos..."
        @update:model-value="$emit('update:filters', { ...filters, search: $event })"
      />

      <SelectInput
        :model-value="filters.categoria"
        :options="[
          { label: 'Todas', value: '' },
          { label: 'Formação', value: 'Formação' },
          { label: 'Infraestrutura', value: 'Infraestrutura' },
          { label: 'Saúde', value: 'Saúde' },
          { label: 'Parcerias', value: 'Parcerias' },
          { label: 'Empreendedorismo', value: 'Empreendedorismo' },
        ]"
        @update:model-value="$emit('update:filters', { ...filters, categoria: $event })"
      />

      <SelectInput
        :model-value="filters.estado"
        :options="[
          { label: 'Todos', value: '' },
          { label: 'Em Execução', value: 'Em Execução' },
          { label: 'Planeamento', value: 'Planeamento' },
          { label: 'Concluído', value: 'Concluído' },
          { label: 'Pausado', value: 'Pausado' },
        ]"
        @update:model-value="$emit('update:filters', { ...filters, estado: $event })"
      />

      <SelectInput
        :model-value="filters.prioridade"
        :options="[
          { label: 'Todas', value: '' },
          { label: 'Alta', value: 'Alta' },
          { label: 'Média', value: 'Média' },
          { label: 'Baixa', value: 'Baixa' },
        ]"
        @update:model-value="$emit('update:filters', { ...filters, prioridade: $event })"
      />

      <BaseButton variant="secondary" icon="fa-solid fa-rotate-left" @click="$emit('clear')">
        Limpar filtros
      </BaseButton>
    </div>
  </div>
</template>
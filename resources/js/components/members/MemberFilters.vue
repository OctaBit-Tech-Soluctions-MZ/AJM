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
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
      <TextInput
        :model-value="filters.search"
        placeholder="Pesquisar membro..."
        @update:model-value="$emit('update:filters', { ...filters, search: $event })"
      />

      <SelectInput
        :model-value="filters.categoria"
        :options="[
          { label: 'Todas categorias', value: '' },
          { label: 'Jovem', value: 'Jovem' },
          { label: 'Voluntário', value: 'Voluntário' },
          { label: 'Equipa', value: 'Equipa' },
          { label: 'Parceiro', value: 'Parceiro' },
        ]"
        @update:model-value="$emit('update:filters', { ...filters, categoria: $event })"
      />

      <SelectInput
        :model-value="filters.estado"
        :options="[
          { label: 'Todos estados', value: '' },
          { label: 'Ativo', value: 'Ativo' },
          { label: 'Pendente', value: 'Pendente' },
          { label: 'Inativo', value: 'Inativo' },
        ]"
        @update:model-value="$emit('update:filters', { ...filters, estado: $event })"
      />

      <BaseButton variant="secondary" icon="fa-solid fa-rotate-left" @click="$emit('clear')">
        Limpar filtros
      </BaseButton>
    </div>
  </div>
</template>
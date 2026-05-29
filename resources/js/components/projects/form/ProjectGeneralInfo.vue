<script setup>
import TextInput from '@/components/ui/TextInput.vue'
import TextArea from '@/components/ui/TextArea.vue'
import SelectInput from '@/components/ui/SelectInput.vue'
import BaseButton from '@/components/ui/BaseButton.vue'

defineProps({
  form: Object,
})

defineEmits(['update:form'])
</script>

<template>
  <section class="bg-white border border-slate-200 rounded-2xl p-6">
    <h2 class="text-xl font-bold text-slate-900">
      1. Informações Gerais
    </h2>
    <p class="text-slate-500 mt-1 mb-6">
      Forneça as informações básicas do projeto.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
      <TextInput
        label="Título do Projeto *"
        placeholder="Ex: Capacitação de Jovens Líderes"
        :model-value="form.titulo"
        @update:model-value="$emit('update:form', { ...form, titulo: $event })"
      />

      <SelectInput
        :model-value="form.categoria"
        :options="[
          { label: 'Selecione uma categoria', value: '' },
          { label: 'Formação', value: 'Formação' },
          { label: 'Infraestrutura', value: 'Infraestrutura' },
          { label: 'Saúde', value: 'Saúde' },
          { label: 'Parcerias', value: 'Parcerias' },
        ]"
        @update:model-value="$emit('update:form', { ...form, categoria: $event })"
      />

      <div class="md:col-span-2">
        <TextArea
          label="Descrição Resumida *"
          placeholder="Descreva resumidamente o objetivo e o propósito do projeto..."
          :model-value="form.descricao"
          @update:model-value="$emit('update:form', { ...form, descricao: $event })"
        />
        <p class="text-xs text-slate-400 mt-1">0/300 caracteres</p>
      </div>

      <SelectInput
        :model-value="form.area"
        :options="[
          { label: 'Selecione uma área', value: '' },
          { label: 'Educação', value: 'Educação' },
          { label: 'Saúde', value: 'Saúde' },
          { label: 'Juventude', value: 'Juventude' },
        ]"
        @update:model-value="$emit('update:form', { ...form, area: $event })"
      />

      <SelectInput
        :model-value="form.prioridade"
        :options="[
          { label: 'Média', value: 'Média' },
          { label: 'Alta', value: 'Alta' },
          { label: 'Baixa', value: 'Baixa' },
        ]"
        @update:model-value="$emit('update:form', { ...form, prioridade: $event })"
      />

      <TextInput
        label="Data de Início Prevista *"
        type="date"
        :model-value="form.inicio"
        @update:model-value="$emit('update:form', { ...form, inicio: $event })"
      />

      <TextInput
        label="Data de Término Prevista *"
        type="date"
        :model-value="form.fim"
        @update:model-value="$emit('update:form', { ...form, fim: $event })"
      />

      <div class="md:col-span-2">
        <TextInput
          label="Local de Execução"
          placeholder="Ex: Maputo, Nampula, Online, etc."
          :model-value="form.local"
          @update:model-value="$emit('update:form', { ...form, local: $event })"
        />
      </div>

      <SelectInput
        :model-value="form.estado"
        :options="[
          { label: 'Em Planeamento', value: 'Em Planeamento' },
          { label: 'Em Execução', value: 'Em Execução' },
          { label: 'Concluído', value: 'Concluído' },
        ]"
        @update:model-value="$emit('update:form', { ...form, estado: $event })"
      />

      <SelectInput
        :model-value="form.visibilidade"
        :options="[
          { label: 'Interno (Apenas equipe)', value: 'Interno' },
          { label: 'Público', value: 'Público' },
        ]"
        @update:model-value="$emit('update:form', { ...form, visibilidade: $event })"
      />

      <div class="md:col-span-2">
        <TextInput
          label="Palavras-chave"
          placeholder="Ex: jovens, educação, liderança, formação..."
          :model-value="form.keywords"
          @update:model-value="$emit('update:form', { ...form, keywords: $event })"
        />
      </div>
    </div>

    <div class="flex items-center justify-between mt-8">
      <BaseButton variant="secondary">
        Cancelar
      </BaseButton>

      <BaseButton>
        Próximo <i class="fa-solid fa-arrow-right"></i>
      </BaseButton>
    </div>
  </section>
</template>
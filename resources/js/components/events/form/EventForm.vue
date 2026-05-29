<script setup>
import TextInput from '@/components/ui/TextInput.vue'
import TextArea from '@/components/ui/TextArea.vue'
import SelectInput from '@/components/ui/SelectInput.vue'
import EventImageUpload from './EventImageUpload.vue'

defineProps({
  form: Object,
})

defineEmits(['update:form'])
</script>

<template>
  <div class="bg-white border border-slate-200 rounded-2xl p-6">
    <h2 class="text-xl font-bold text-purple-700">
      Informações do Evento
    </h2>

    <div class="h-px bg-slate-200 my-5"></div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <TextInput
        label="Nome do Evento *"
        placeholder="Ex.: Conferência Nacional de Tecnologia"
        :model-value="form.nome"
        @update:model-value="$emit('update:form', { ...form, nome: $event })"
      />

      <SelectInput
        label="Tipo de Evento *"
        :model-value="form.tipo"
        :options="[
          { label: 'Selecione o tipo de evento', value: '' },
          { label: 'Conferência', value: 'Conferência' },
          { label: 'Workshop', value: 'Workshop' },
          { label: 'Networking', value: 'Networking' },
          { label: 'Formação', value: 'Formação' },
          { label: 'Seminário', value: 'Seminário' },
        ]"
        @update:model-value="$emit('update:form', { ...form, tipo: $event })"
      />

      <div class="md:col-span-2">
        <TextArea
          label="Descrição *"
          placeholder="Descreva brevemente o objetivo do evento..."
          :rows="4"
          :model-value="form.descricao"
          @update:model-value="$emit('update:form', { ...form, descricao: $event })"
        />

        <p class="text-right text-xs text-slate-400 mt-1">
          {{ form.descricao.length }}/500 caracteres
        </p>
      </div>

      <TextInput
        label="Data de Início *"
        type="date"
        :model-value="form.dataInicio"
        @update:model-value="$emit('update:form', { ...form, dataInicio: $event })"
      />

      <TextInput
        label="Data de Fim *"
        type="date"
        :model-value="form.dataFim"
        @update:model-value="$emit('update:form', { ...form, dataFim: $event })"
      />

      <TextInput
        label="Hora de Início *"
        type="time"
        :model-value="form.horaInicio"
        @update:model-value="$emit('update:form', { ...form, horaInicio: $event })"
      />

      <TextInput
        label="Hora de Fim *"
        type="time"
        :model-value="form.horaFim"
        @update:model-value="$emit('update:form', { ...form, horaFim: $event })"
      />

      <TextInput
        label="Local do Evento *"
        placeholder="Ex.: Maputo, Online, Auditório AJM..."
        :model-value="form.local"
        @update:model-value="$emit('update:form', { ...form, local: $event })"
      />

      <TextInput
        label="Número de Vagas *"
        type="number"
        placeholder="Ex.: 150"
        :model-value="form.vagas"
        @update:model-value="$emit('update:form', { ...form, vagas: $event })"
      />

      <SelectInput
        label="Estado *"
        :model-value="form.estado"
        :options="[
          { label: 'Rascunho', value: 'Rascunho' },
          { label: 'Publicado', value: 'Publicado' },
          { label: 'Encerrado', value: 'Encerrado' },
        ]"
        @update:model-value="$emit('update:form', { ...form, estado: $event })"
      />

      <SelectInput
        label="Visibilidade *"
        :model-value="form.visibilidade"
        :options="[
          { label: 'Público', value: 'Público' },
          { label: 'Interno', value: 'Interno' },
        ]"
        @update:model-value="$emit('update:form', { ...form, visibilidade: $event })"
      />

      <div class="md:col-span-2">
        <EventImageUpload
          @change="$emit('update:form', { ...form, imagem: $event })"
        />
      </div>
    </div>
  </div>
</template>
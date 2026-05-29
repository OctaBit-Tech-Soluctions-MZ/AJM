<script setup>
import TextInput from '@/components/ui/TextInput.vue'
import TextArea from '@/components/ui/TextArea.vue'
import SelectInput from '@/components/ui/SelectInput.vue'
import PartnerLogoUpload from './PartnerLogoUpload.vue'

defineProps({
  form: Object,
})

defineEmits(['update:form'])
</script>

<template>
  <div class="bg-white border border-slate-200 rounded-2xl p-6">
    <h2 class="text-xl font-bold text-purple-700">
      Informações do Parceiro
    </h2>

    <div class="h-px bg-slate-200 my-5"></div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <TextInput
        label="Nome do Parceiro *"
        placeholder="Ex.: UNICEF Moçambique"
        :model-value="form.nome"
        @update:model-value="$emit('update:form', { ...form, nome: $event })"
      />

      <PartnerLogoUpload
        @change="$emit('update:form', { ...form, logo: $event })"
      />

      <SelectInput
        label="Categoria *"
        :model-value="form.categoria"
        :options="[
          { label: 'Selecione uma categoria', value: '' },
          { label: 'Financeiro', value: 'Financeiro' },
          { label: 'Tecnologia', value: 'Tecnologia' },
          { label: 'Energia', value: 'Energia' },
          { label: 'Seguros', value: 'Seguros' },
          { label: 'Educação', value: 'Educação' },
          { label: 'Saúde', value: 'Saúde' },
        ]"
        @update:model-value="$emit('update:form', { ...form, categoria: $event })"
      />

      <SelectInput
        label="Tipo de Parceiro *"
        :model-value="form.tipo"
        :options="[
          { label: 'Selecione o tipo de parceiro', value: '' },
          { label: 'Patrocinador', value: 'Patrocinador' },
          { label: 'Estratégico', value: 'Estratégico' },
          { label: 'Colaborador', value: 'Colaborador' },
          { label: 'Apoiador', value: 'Apoiador' },
        ]"
        @update:model-value="$emit('update:form', { ...form, tipo: $event })"
      />

      <div class="md:col-span-2">
        <TextInput
          label="Contacto Principal *"
          placeholder="Nome do contacto principal"
          :model-value="form.contacto"
          @update:model-value="$emit('update:form', { ...form, contacto: $event })"
        />
      </div>

      <TextInput
        label="Email *"
        type="email"
        placeholder="exemplo@parceiro.org"
        :model-value="form.email"
        @update:model-value="$emit('update:form', { ...form, email: $event })"
      />

      <TextInput
        label="Telefone *"
        placeholder="+258 84 123 4567"
        :model-value="form.telefone"
        @update:model-value="$emit('update:form', { ...form, telefone: $event })"
      />

      <TextInput
        label="Website (Opcional)"
        placeholder="https://www.exemplo.org"
        :model-value="form.website"
        @update:model-value="$emit('update:form', { ...form, website: $event })"
      />

      <TextInput
        label="Redes Sociais (Opcional)"
        placeholder="Ex.: https://www.facebook.com/exemplo"
        :model-value="form.redes"
        @update:model-value="$emit('update:form', { ...form, redes: $event })"
      />

      <div class="md:col-span-2">
        <TextArea
          label="Descrição (Opcional)"
          placeholder="Breve descrição sobre o parceiro e sua atuação..."
          :rows="5"
          :model-value="form.descricao"
          @update:model-value="$emit('update:form', { ...form, descricao: $event })"
        />

        <p class="text-right text-xs text-slate-400 mt-1">
          {{ form.descricao.length }}/300 caracteres
        </p>
      </div>
    </div>
  </div>
</template>
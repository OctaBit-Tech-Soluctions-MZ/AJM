<script setup>
import TextInput from '@/components/ui/TextInput.vue'
import TextArea from '@/components/ui/TextArea.vue'
import SelectInput from '@/components/ui/SelectInput.vue'
import MemberPhotoUpload from './MemberPhotoUpload.vue'

defineProps({
  form: Object,
})

defineEmits(['update:form'])
</script>

<template>
  <div class="bg-white border border-slate-200 rounded-2xl p-6">
    <h2 class="text-xl font-bold text-[#06265c]">
      Dados do Membro
    </h2>

    <p class="text-slate-500 mt-1">
      Preencha os seus dados para concluir o cadastro.
    </p>

    <div class="h-px bg-slate-200 my-6"></div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <TextInput
        label="Nome completo *"
        placeholder="Ex.: Donaldo Manuel"
        :model-value="form.nome"
        @update:model-value="$emit('update:form', { ...form, nome: $event })"
      />

      <TextInput
        label="Data de nascimento *"
        type="date"
        :model-value="form.dataNascimento"
        @update:model-value="$emit('update:form', { ...form, dataNascimento: $event })"
      />

      <SelectInput
        label="Género *"
        :model-value="form.genero"
        :options="[
          { label: 'Selecione o género', value: '' },
          { label: 'Masculino', value: 'Masculino' },
          { label: 'Feminino', value: 'Feminino' },
          { label: 'Outro', value: 'Outro' },
        ]"
        @update:model-value="$emit('update:form', { ...form, genero: $event })"
      />

      <SelectInput
        label="Categoria *"
        :model-value="form.categoria"
        :options="[
          { label: 'Selecione a categoria', value: '' },
          { label: 'Jovem', value: 'Jovem' },
          { label: 'Voluntário', value: 'Voluntário' },
          { label: 'Parceiro', value: 'Parceiro' },
        ]"
        @update:model-value="$emit('update:form', { ...form, categoria: $event })"
      />

      <TextInput
        label="Telefone *"
        placeholder="+258 84 123 4567"
        :model-value="form.telefone"
        @update:model-value="$emit('update:form', { ...form, telefone: $event })"
      />

      <TextInput
        label="Email *"
        type="email"
        placeholder="exemplo@email.com"
        :model-value="form.email"
        @update:model-value="$emit('update:form', { ...form, email: $event })"
      />

      <TextInput
        label="Província *"
        placeholder="Ex.: Maputo"
        :model-value="form.provincia"
        @update:model-value="$emit('update:form', { ...form, provincia: $event })"
      />

      <TextInput
        label="Distrito/Bairro *"
        placeholder="Ex.: Marracuene"
        :model-value="form.bairro"
        @update:model-value="$emit('update:form', { ...form, bairro: $event })"
      />

      <TextInput
        label="Ocupação"
        placeholder="Ex.: Estudante, trabalhador, empreendedor..."
        :model-value="form.ocupacao"
        @update:model-value="$emit('update:form', { ...form, ocupacao: $event })"
      />

      <TextInput
        label="Instituição/Empresa"
        placeholder="Ex.: Universidade, escola ou empresa"
        :model-value="form.instituicao"
        @update:model-value="$emit('update:form', { ...form, instituicao: $event })"
      />

      <div class="md:col-span-2">
        <MemberPhotoUpload
          @change="$emit('update:form', { ...form, foto: $event })"
        />
      </div>

      <div class="md:col-span-2">
        <TextArea
          label="Motivação para fazer parte da AJM"
          placeholder="Explique brevemente porque deseja fazer parte da organização..."
          :rows="5"
          :model-value="form.motivacao"
          @update:model-value="$emit('update:form', { ...form, motivacao: $event })"
        />
      </div>
    </div>
  </div>
</template>
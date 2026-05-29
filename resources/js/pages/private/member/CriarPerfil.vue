<script setup>
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'

import BaseButton from '@/components/ui/BaseButton.vue'
import MemberProfileForm from '@/components/members/form/MemberProfileForm.vue'

const form = ref({
  nome: '',
  dataNascimento: '',
  genero: '',
  categoria: '',
  telefone: '',
  email: '',
  provincia: '',
  bairro: '',
  ocupacao: '',
  instituicao: '',
  foto: null,
  motivacao: '',
})

function submeter() {
  console.log('Dados do membro:', form.value)

  // Depois ligamos ao backend:
  // router.post('/member/profile', form.value)

  router.visit('/login')
}
</script>

<template>
  <div class="min-h-screen bg-slate-50 px-6 py-8">
    <div class="mx-auto max-w-5xl">
      <div class="mb-8 flex items-start justify-between">
        <div>
          <h1 class="text-4xl font-black text-slate-900">
            Completar Cadastro de Membro
          </h1>

          <p class="mt-2 text-slate-500">
            Preencha os seus dados. A sua conta ficará pendente até aprovação do administrador.
          </p>
        </div>
      </div>

      <MemberProfileForm
        :form="form"
        @update:form="form = $event"
      />

      <div class="mt-6 flex items-center justify-between rounded-2xl border border-yellow-200 bg-yellow-50 p-5">
        <div>
          <h3 class="font-bold text-yellow-700">
            Aprovação necessária
          </h3>
          <p class="text-sm text-slate-600">
            Depois de enviar os dados, o administrador deverá validar o seu cadastro antes de ter acesso ao sistema.
          </p>
        </div>

        <BaseButton
          icon="fa-solid fa-paper-plane"
          @click="submeter"
        >
          Enviar Cadastro
        </BaseButton>
      </div>
    </div>
  </div>
</template>
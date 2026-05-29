<script setup>
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'

import AdminLayout from '@/layouts/Private/AdminLayout.vue'
import BaseButton from '@/components/ui/BaseButton.vue'
import PartnerForm from '@/components/partners/PartnerForm.vue'

const form = ref({
  nome: '',
  logo: null,
  categoria: '',
  tipo: '',
  contacto: '',
  email: '',
  telefone: '',
  website: '',
  redes: '',
  descricao: '',
})

function cancelar() {
  router.visit('/admin/partners')
}

function guardarParceiro() {
  console.log('Dados do parceiro:', form.value)

  // Depois ligamos ao backend:
  // router.post('/admin/partners', form.value)
}
</script>

<template>
  <AdminLayout>
    <div class="space-y-6">
      <div class="flex items-start justify-between">
        <div>
          <div class="mb-5 flex items-center gap-2 text-sm text-slate-500">
            <button
              class="hover:text-purple-700"
              @click="cancelar"
            >
              Parceiros
            </button>

            <i class="fa-solid fa-chevron-right text-xs"></i>

            <span class="font-semibold text-purple-700">
              Novo Parceiro
            </span>
          </div>

          <h1 class="text-4xl font-black text-slate-900">
            Novo Parceiro
          </h1>

          <p class="mt-2 text-slate-500">
            Preencha as informações do parceiro.
          </p>
        </div>

        <div class="flex items-center gap-4">
          <BaseButton
            variant="secondary"
            @click="cancelar"
          >
            Cancelar
          </BaseButton>

          <BaseButton
            icon="fa-solid fa-floppy-disk"
            @click="guardarParceiro"
          >
            Guardar Parceiro
          </BaseButton>
        </div>
      </div>

      <PartnerForm
        :form="form"
        @update:form="form = $event"
      />
    </div>
  </AdminLayout>
</template>
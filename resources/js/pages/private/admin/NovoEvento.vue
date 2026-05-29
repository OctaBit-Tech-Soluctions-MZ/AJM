<script setup>
import { ref } from 'vue'
import { router } from '@inertiajs/vue3'

import AdminLayout from '@/layouts/Private/AdminLayout.vue'
import BaseButton from '@/components/ui/BaseButton.vue'
import EventForm from '@/components/events/form/EventForm.vue'

const form = ref({
  nome: '',
  tipo: '',
  descricao: '',
  dataInicio: '',
  dataFim: '',
  horaInicio: '',
  horaFim: '',
  local: '',
  vagas: '',
  estado: 'Rascunho',
  visibilidade: 'Público',
  imagem: null,
})

function cancelar() {
  router.visit('/admin/events')
}

function guardarEvento() {
  console.log('Dados do evento:', form.value)

  // Depois ligamos ao backend:
  // router.post('/admin/events', form.value)
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
              Eventos
            </button>

            <i class="fa-solid fa-chevron-right text-xs"></i>

            <span class="font-semibold text-purple-700">
              Novo Evento
            </span>
          </div>

          <h1 class="text-4xl font-black text-slate-900">
            Novo Evento
          </h1>

          <p class="mt-2 text-slate-500">
            Preencha as informações do evento.
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
            @click="guardarEvento"
          >
            Guardar Evento
          </BaseButton>
        </div>
      </div>

      <EventForm
        :form="form"
        @update:form="form = $event"
      />
    </div>
  </AdminLayout>
</template>
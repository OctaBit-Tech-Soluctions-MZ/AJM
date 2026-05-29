<script setup>
import { ref } from 'vue'
import BaseButton from '@/components/ui/BaseButton.vue'
import ProjectFormSidebar from '@/components/projects/form/ProjectFormSidebar.vue'
import ProjectFormSummary from '@/components/projects/form/ProjectFormSummary.vue'
import ProjectGeneralInfo from '@/components/projects/form/ProjectGeneralInfo.vue'

const form = ref({
  titulo: '',
  categoria: '',
  descricao: '',
  area: '',
  prioridade: 'Média',
  inicio: '',
  fim: '',
  local: '',
  estado: 'Em Planeamento',
  visibilidade: 'Interno',
  keywords: '',
})
</script>

<template>
  <div class="h-screen overflow-hidden bg-slate-50 flex">
    <ProjectFormSidebar />

    <main class="flex-1 h-screen overflow-y-auto p-8">
      <div class="flex items-start justify-between mb-8">
        <div>
          <h1 class="text-3xl font-black text-slate-900">
            Novo Projeto
          </h1>
          <p class="text-slate-500">
            Preencha as informações do projeto. Você pode salvar rascunho a qualquer momento.
          </p>
        </div>

        <div class="flex items-center gap-3">
          <BaseButton variant="secondary" icon="fa-regular fa-floppy-disk">
            Salvar rascunho
          </BaseButton>

          <button class="text-2xl text-slate-500">
            <i class="fa-solid fa-xmark"></i>
          </button>
        </div>
      </div>

      <div class="grid grid-cols-1 xl:grid-cols-[1fr_320px] gap-6">
        <div>
          <ProjectGeneralInfo
            :form="form"
            @update:form="form = $event"
          />

          <div class="mt-6 rounded-2xl border border-purple-200 bg-purple-50 p-5 text-purple-700">
            <i class="fa-solid fa-lock mr-2"></i>
            <strong>Seus dados estão seguros</strong>
            <p class="text-sm text-slate-500 mt-1">
              Todas as informações são salvas automaticamente como rascunho enquanto você preenche o formulário.
            </p>
          </div>
        </div>

        <ProjectFormSummary />
      </div>
    </main>
  </div>
</template>
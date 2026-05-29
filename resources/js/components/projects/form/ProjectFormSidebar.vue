<script setup>
const steps = [
  ['Informações Gerais', 'Dados básicos do projeto'],
  ['Planeamento', 'Prazos, marcos e cronograma'],
  ['Orçamento e Recursos', 'Orçamento e recursos do projeto'],
  ['Equipa e Responsáveis', 'Membros e partes envolvidas'],
  ['Metas e Indicadores', 'Objetivos e indicadores de sucesso'],
  ['Anexos e Documentos', 'Documentos de suporte'],
  ['Revisão e Publicação', 'Revise e publique o projeto'],
]
</script>

<template>
  <aside class="w-80 shrink-0 border-r border-slate-200 bg-white min-h-screen p-6">
    <div class="flex items-center gap-4 mb-8">
      <div class="w-12 h-12 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center text-xl">
        <i class="fa-solid fa-briefcase"></i>
      </div>

      <h2 class="font-bold text-slate-900">
        Gestão de Projetos
      </h2>
    </div>

    <div class="space-y-6">
      <div
        v-for="(step, index) in steps"
        :key="step[0]"
        class="flex gap-4"
      >
        <div
          class="w-9 h-9 rounded-full flex items-center justify-center border font-bold"
          :class="index === 0 ? 'bg-purple-600 text-white border-purple-600' : 'bg-white text-slate-400 border-slate-300'"
        >
          {{ index + 1 }}
        </div>

        <div>
          <h3
            class="font-bold"
            :class="index === 0 ? 'text-purple-700' : 'text-slate-700'"
          >
            {{ step[0] }}
          </h3>
          <p class="text-sm text-slate-500">
            {{ step[1] }}
          </p>
        </div>
      </div>
    </div>

    <div class="mt-16 rounded-2xl border border-purple-200 bg-purple-50 p-5">
      <div class="text-purple-700 text-xl mb-3">
        <i class="fa-regular fa-lightbulb"></i>
      </div>
      <h3 class="font-bold text-purple-700">
        Dica
      </h3>
      <p class="text-sm text-slate-500 mt-2">
        Preencha todas as informações para criar um projeto completo e bem estruturado.
      </p>
    </div>
  </aside>
</template>
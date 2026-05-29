<script setup>
defineProps({
  progress: {
    type: Number,
    default: 14,
  },
})
</script>

<template>
  <aside class="w-80 shrink-0 bg-white border border-slate-200 rounded-2xl p-6">
    <h3 class="font-bold text-slate-900 mb-8">
      <i class="fa-solid fa-building-columns text-purple-600 mr-2"></i>
      Resumo do Projeto
    </h3>

    <div class="text-center py-8">
      <div class="w-24 h-24 rounded-full bg-purple-100 text-purple-700 flex items-center justify-center text-4xl mx-auto">
        <i class="fa-solid fa-briefcase"></i>
      </div>

      <h4 class="font-bold text-slate-800 mt-6">
        Informações serão exibidas aqui
      </h4>

      <p class="text-sm text-slate-500 mt-2">
        Preencha os campos para ver o resumo do projeto.
      </p>
    </div>

    <div class="border-t border-slate-200 pt-6">
      <h4 class="font-bold text-slate-800">
        Progresso do Preenchimento
      </h4>

      <div class="flex items-center justify-between text-sm text-slate-500 mt-3">
        <span>1 de 7 etapas concluídas</span>
        <strong class="text-purple-600">{{ progress }}%</strong>
      </div>

      <div class="h-2 bg-slate-200 rounded-full mt-3">
        <div class="h-2 bg-purple-600 rounded-full" :style="{ width: progress + '%' }"></div>
      </div>
    </div>

    <div class="border-t border-slate-200 mt-6 pt-6 space-y-4">
      <h4 class="font-bold text-slate-800">
        Etapas do Formulário
      </h4>

      <p class="text-sm text-purple-700 font-semibold">
        <i class="fa-solid fa-circle-check mr-2"></i>
        Informações Gerais
      </p>
      <p class="text-sm text-slate-500">Planeamento</p>
      <p class="text-sm text-slate-500">Orçamento e Recursos</p>
      <p class="text-sm text-slate-500">Equipa e Responsáveis</p>
      <p class="text-sm text-slate-500">Metas e Indicadores</p>
      <p class="text-sm text-slate-500">Anexos e Documentos</p>
      <p class="text-sm text-slate-500">Revisão e Publicação</p>
    </div>
  </aside>
</template>
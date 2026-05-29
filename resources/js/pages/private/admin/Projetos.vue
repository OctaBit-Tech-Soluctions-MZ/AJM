<script setup>
import { ref, computed } from 'vue'
import AdminLayout from '@/layouts/Private/AdminLayout.vue'
import BaseButton from '@/components/ui/BaseButton.vue'
import ProjectFilters from '@/components/projects/ProjectFilters.vue'
import ProjectTable from '@/components/projects/ProjectTable.vue'
import ProjectStats from '@/components/projects/ProjectStats.vue'

const filters = ref({
  search: '',
  categoria: '',
  estado: '',
  prioridade: '',
})

const projetos = ref([
  {
    id: 1,
    nome: 'Capacitação de Jovens Líderes',
    descricao: 'Desenvolvimento de competências...',
    categoria: 'Formação',
    inicio: '15 Jan 2024',
    fim: '30 Jun 2024',
    estado: 'Em Execução',
    progresso: 65,
    orcamento: '450.000,00 MZN',
    responsavel: 'Carlos M.',
    avatar: 'https://i.pravatar.cc/100?img=12',
    icon: 'fa-solid fa-seedling',
    iconBg: 'bg-purple-100 text-purple-700',
  },
  {
    id: 2,
    nome: 'Biblioteca Comunitária',
    descricao: 'Construção e equipagem de uma...',
    categoria: 'Infraestrutura',
    inicio: '01 Fev 2024',
    fim: '31 Ago 2024',
    estado: 'Planeamento',
    progresso: 20,
    orcamento: '1.250.000,00 MZN',
    responsavel: 'Ana Paula',
    avatar: 'https://i.pravatar.cc/100?img=47',
    icon: 'fa-solid fa-book-open',
    iconBg: 'bg-green-100 text-green-700',
  },
  {
    id: 3,
    nome: 'Saúde Para Todos',
    descricao: 'Campanha de conscientização e...',
    categoria: 'Saúde',
    inicio: '10 Mar 2024',
    fim: '10 Set 2024',
    estado: 'Em Execução',
    progresso: 40,
    orcamento: '320.000,00 MZN',
    responsavel: 'João S.',
    avatar: 'https://i.pravatar.cc/100?img=32',
    icon: 'fa-solid fa-users',
    iconBg: 'bg-orange-100 text-orange-700',
  },
  {
    id: 4,
    nome: 'Parcerias Sustentáveis',
    descricao: 'Fortalecimento de parcerias com...',
    categoria: 'Parcerias',
    inicio: '05 Jan 2024',
    fim: '05 Mai 2024',
    estado: 'Concluído',
    progresso: 100,
    orcamento: '150.000,00 MZN',
    responsavel: 'Maria A.',
    avatar: 'https://i.pravatar.cc/100?img=49',
    icon: 'fa-solid fa-handshake-angle',
    iconBg: 'bg-pink-100 text-pink-700',
  },
  {
    id: 5,
    nome: 'Empreendedorismo Jovem',
    descricao: 'Apoio a iniciativas de jovens empre...',
    categoria: 'Empreendedorismo',
    inicio: '20 Abr 2024',
    fim: '20 Out 2024',
    estado: 'Pausado',
    progresso: 30,
    orcamento: '280.000,00 MZN',
    responsavel: 'Carlos M.',
    avatar: 'https://i.pravatar.cc/100?img=12',
    icon: 'fa-solid fa-chart-line',
    iconBg: 'bg-violet-100 text-violet-700',
  },
])

const stats = [
  {
    value: 12,
    label: 'Total de Projetos',
    icon: 'fa-solid fa-briefcase',
    iconBg: 'bg-purple-100 text-purple-700',
  },
  {
    value: 3,
    label: 'Concluídos',
    icon: 'fa-solid fa-circle-check',
    iconBg: 'bg-green-100 text-green-700',
  },
  {
    value: 5,
    label: 'Em Execução',
    icon: 'fa-solid fa-circle-play',
    iconBg: 'bg-blue-100 text-blue-700',
  },
  {
    value: 2,
    label: 'Planeamento',
    icon: 'fa-regular fa-clock',
    iconBg: 'bg-yellow-100 text-yellow-700',
  },
  {
    value: 2,
    label: 'Pausados',
    icon: 'fa-regular fa-circle-pause',
    iconBg: 'bg-red-100 text-red-700',
  },
]

const projetosFiltrados = computed(() => {
  return projetos.value.filter(projeto => {
    const search = projeto.nome.toLowerCase().includes(filters.value.search.toLowerCase())
    const categoria = !filters.value.categoria || projeto.categoria === filters.value.categoria
    const estado = !filters.value.estado || projeto.estado === filters.value.estado

    return search && categoria && estado
  })
})

function limparFiltros() {
  filters.value = {
    search: '',
    categoria: '',
    estado: '',
    prioridade: '',
  }
}
</script>

<template>
  <AdminLayout>
    <div class="space-y-6">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-5">
          <div class="w-16 h-16 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center text-3xl">
            <i class="fa-solid fa-briefcase"></i>
          </div>

          <div>
            <h1 class="text-4xl font-black text-slate-900">
              Gestão de Projetos
            </h1>
            <p class="text-slate-500">
              Acompanhe e gerencie todos os projetos da organização
            </p>
          </div>
        </div>

        <BaseButton icon="fa-solid fa-plus" @click="$inertia.visit('/admin/projects/create')">
            Novo Projeto
        </BaseButton>
      </div>

      <ProjectFilters
        :filters="filters"
        @update:filters="filters = $event"
        @clear="limparFiltros"
      />

      <ProjectTable :projetos="projetosFiltrados" />

      <ProjectStats :stats="stats" />
    </div>
  </AdminLayout>
</template>
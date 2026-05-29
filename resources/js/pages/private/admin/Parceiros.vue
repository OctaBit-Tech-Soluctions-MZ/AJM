<script setup>
import { ref, computed } from 'vue'
import AdminLayout from '@/layouts/Private/AdminLayout.vue'
import BaseButton from '@/components/ui/BaseButton.vue'
import PartnerFilters from '@/components/partners/PartnerFilters.vue'
import PartnerTable from '@/components/partners/PartnerTable.vue'
import PartnerStats from '@/components/partners/PartnerStats.vue'

import { router } from '@inertiajs/vue3'

function irParaParceiros() {
  router.visit('/admin/partners')
}

const filters = ref({
  search: '',
  categoria: '',
  tipo: '',
  status: '',
})

const parceiros = ref([
  {
    id: 1,
    nome: 'Banco Comercial Angolano',
    descricao: 'Apoio financeiro e institucional para projetos de impacto social.',
    categoria: 'Financeiro',
    tipo: 'Patrocinador',
    status: 'Ativo',
    contato: 'João Manuel',
    email: 'joao.manuel@bca.ao',
    projetos: 5,
    data: '15 Jan 2024',
    logo: 'BCA',
    logoBg: 'bg-blue-700 text-white',
  },
  {
    id: 2,
    nome: 'Unitel Angola',
    descricao: 'Parceria estratégica em conectividade e inovação tecnológica.',
    categoria: 'Tecnologia',
    tipo: 'Estratégico',
    status: 'Ativo',
    contato: 'Ana Paula',
    email: 'ana.paula@unitel.co.ao',
    projetos: 3,
    data: '10 Jan 2024',
    logo: 'UT',
    logoBg: 'bg-orange-100 text-orange-600',
  },
  {
    id: 3,
    nome: 'Sonangol',
    descricao: 'Apoio a iniciativas de desenvolvimento comunitário e ambiental.',
    categoria: 'Energia',
    tipo: 'Patrocinador',
    status: 'Ativo',
    contato: 'Carlos Alberto',
    email: 'carlos.alberto@sonangol.ao',
    projetos: 4,
    data: '08 Jan 2024',
    logo: 'SG',
    logoBg: 'bg-yellow-100 text-red-600',
  },
  {
    id: 4,
    nome: 'Microsoft Angola',
    descricao: 'Parceria para capacitação digital e inovação social.',
    categoria: 'Tecnologia',
    tipo: 'Colaborador',
    status: 'Ativo',
    contato: 'Marta Silva',
    email: 'marta.silva@microsoft.com',
    projetos: 2,
    data: '05 Jan 2024',
    logo: 'MS',
    logoBg: 'bg-slate-100 text-blue-600',
  },
  {
    id: 5,
    nome: 'Fidelidade Seguros',
    descricao: 'Apoio em seguros e proteção para programas sociais.',
    categoria: 'Seguros',
    tipo: 'Apoiador',
    status: 'Inativo',
    contato: 'Ricardo Lopes',
    email: 'ricardo.lopes@fidelidade.co.ao',
    projetos: 1,
    data: '20 Dez 2023',
    logo: 'FS',
    logoBg: 'bg-red-100 text-red-600',
  },
  {
    id: 6,
    nome: 'ENSA - Seguros de Angola',
    descricao: 'Parceria em seguros para eventos e projetos.',
    categoria: 'Seguros',
    tipo: 'Colaborador',
    status: 'Ativo',
    contato: 'Luís Francisco',
    email: 'luis.francisco@ensa.ao',
    projetos: 2,
    data: '18 Dez 2023',
    logo: 'ENSA',
    logoBg: 'bg-blue-100 text-blue-700',
  },
])

const stats = [
  {
    value: 24,
    label: 'Total de Parceiros',
    icon: 'fa-solid fa-users',
    iconBg: 'bg-purple-100 text-purple-700',
  },
  {
    value: 18,
    label: 'Parceiros Ativos',
    icon: 'fa-solid fa-circle-check',
    iconBg: 'bg-green-100 text-green-700',
  },
  {
    value: 6,
    label: 'Tipos de Parceria',
    icon: 'fa-solid fa-handshake',
    iconBg: 'bg-blue-100 text-blue-700',
  },
  {
    value: 17,
    label: 'Projetos em Parceria',
    icon: 'fa-regular fa-folder',
    iconBg: 'bg-orange-100 text-orange-700',
  },
  {
    value: 'Este ano',
    label: '12 Novos Parceiros',
    icon: 'fa-regular fa-calendar-days',
    iconBg: 'bg-pink-100 text-pink-700',
  },
]

const parceirosFiltrados = computed(() => {
  return parceiros.value.filter(parceiro => {
    const search = parceiro.nome.toLowerCase().includes(filters.value.search.toLowerCase())
    const categoria = !filters.value.categoria || parceiro.categoria === filters.value.categoria
    const tipo = !filters.value.tipo || parceiro.tipo === filters.value.tipo
    const status = !filters.value.status || parceiro.status === filters.value.status

    return search && categoria && tipo && status
  })
})

function limparFiltros() {
  filters.value = {
    search: '',
    categoria: '',
    tipo: '',
    status: '',
  }
}
</script>

<template>
  <AdminLayout>
    <div class="space-y-6">
      <div class="flex items-center justify-between">
        <div class="flex items-center gap-5">
          <div class="w-16 h-16 rounded-2xl bg-purple-100 text-purple-700 flex items-center justify-center text-3xl">
            <i class="fa-solid fa-users"></i>
          </div>

          <div>
            <h1 class="text-4xl font-black text-slate-900">
              Gestão de Parceiros
            </h1>
            <p class="text-slate-500">
              Gerencie e acompanhe todos os parceiros da organização
            </p>
          </div>
        </div>

        <Link href="/admin/partners/create">
          <BaseButton
            icon="fa-solid fa-plus"
            @click="router.visit('/admin/partners/create')"
          >
            Novo Parceiro
          </BaseButton>
        </Link>  
      </div>

      <PartnerFilters
        :filters="filters"
        @update:filters="filters = $event"
        @clear="limparFiltros"
      />

      <PartnerTable :parceiros="parceirosFiltrados" />

      <PartnerStats :stats="stats" />
    </div>
  </AdminLayout>
</template>
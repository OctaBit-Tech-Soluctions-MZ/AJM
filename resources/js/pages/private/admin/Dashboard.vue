<script setup>
import AdminLayout from '@/layouts/Private/AdminLayout.vue'
import BaseButton from '@/components/ui/BaseButton.vue'
import DashboardCards from '@/components/dashboard/DashboardCards.vue'
import DataTable from '@/components/ui/DataTable.vue'
import DashboardCharts from '@/components/dashboard/DashboardCharts.vue'
import { Link } from '@inertiajs/vue3'

const pieData = {
  labels: ['Jovens (15-24 anos)', 'Voluntários', 'Equipa', 'Parceiros'],
  datasets: [
    {
      data: [774, 250, 125, 99],
      backgroundColor: ['#063b8e', '#facc15', '#16a34a', '#8b5cf6'],
      borderWidth: 0,
    },
  ],
}

const lineData = {
  labels: ['Dez', 'Jan', 'Fev', 'Mar', 'Abr', 'Mai'],
  datasets: [
    {
      label: 'Registos',
      data: [40, 50, 62, 70, 92, 80],
      borderColor: '#2563eb',
      backgroundColor: 'rgba(37,99,235,0.12)',
      tension: 0.4,
      fill: true,
    },
  ],
}

const cards = [
  {
    title: 'Total de Membros',
    value: '1,248',
    subtitle: 'vs mês anterior',
    percentage: '8.4%',
    icon: 'fa-solid fa-users',
    iconClass: 'bg-blue-100 text-blue-700',
  },
  {
    title: 'Membros Ativos',
    value: '1,018',
    subtitle: 'vs mês anterior',
    percentage: '7.2%',
    icon: 'fa-regular fa-user',
    iconClass: 'bg-green-100 text-green-700',
  },
  {
    title: 'Novos Membros',
    value: '86',
    subtitle: 'este mês',
    percentage: '15.3%',
    icon: 'fa-solid fa-user-plus',
    iconClass: 'bg-purple-100 text-purple-700',
  },
  {
    title: 'Pedidos Pendentes',
    value: '12',
    subtitle: 'Ver pedidos',
    icon: 'fa-solid fa-user-clock',
    iconClass: 'bg-orange-100 text-orange-600',
  },
]

const columns = [
  { key: 'nome', label: 'Nome' },
  { key: 'email', label: 'Email' },
  { key: 'categoria', label: 'Categoria' },
  { key: 'estado', label: 'Estado' },
  { key: 'acoes', label: 'Ações' },
]

const membros = [
  {
    id: 1,
    nome: 'Donaldo',
    email: 'donaldo@gmail.com',
    categoria: 'Jovem',
    estado: 'Ativo',
  },
  {
    id: 2,
    nome: 'Huren',
    email: 'huren@gmail.com',
    categoria: 'Jovem',
    estado: 'Ativo',
  },
]
</script>

<template>
  <AdminLayout>
    <div class="space-y-6 overflow-hidden">
      <!-- HEADER -->
      <div
        class="flex flex-col gap-4 sm:flex-row sm:items-center sm:justify-between"
      >
        <div class="min-w-0">
          <h1
            class="text-2xl font-bold text-slate-900 sm:text-3xl lg:text-4xl"
          >
            Dashboard
          </h1>

          <p class="mt-1 max-w-2xl text-sm text-slate-500 sm:text-base">
            Visão geral da gestão de membros e atividades da AJM
          </p>
        </div>

        <div class="flex w-full flex-col gap-3 sm:w-auto sm:flex-row">
          <Link href="/admin/partners" class="w-full sm:w-auto">
            <BaseButton
              icon="fa-solid fa-users"
              class="w-full justify-center sm:w-auto"
            >
              Parceiros
            </BaseButton>
          </Link>
        </div>
      </div>

      <!-- CARDS -->
      <DashboardCards :cards="cards" />

      <!-- GRÁFICOS -->
      <div class="overflow-hidden">
        <DashboardCharts
          :pie-data="pieData"
          :line-data="lineData"
        />
      </div>

      <!-- TABELA -->
      <div class="w-full overflow-x-auto rounded-2xl">
        <DataTable
          :columns="columns"
          :rows="membros"
        >
          <template #estado="{ row }">
            <span
              class="rounded-full bg-green-100 px-3 py-1 text-sm font-semibold text-green-700"
            >
              {{ row.estado }}
            </span>
          </template>

          <template #acoes>
            <div class="flex gap-4 text-blue-600">
              <button>
                <i class="fa-solid fa-eye"></i>
              </button>

              <button>
                <i class="fa-solid fa-pen"></i>
              </button>
            </div>
          </template>
        </DataTable>
      </div>
    </div>
  </AdminLayout>
</template>
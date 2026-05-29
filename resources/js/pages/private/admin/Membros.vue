<script setup>
import { ref, computed } from 'vue'
import AdminLayout from '@/layouts/Private/AdminLayout.vue'
import BaseButton from '@/components/ui/BaseButton.vue'
import MemberStats from '@/components/members/MemberStats.vue'
import MemberFilters from '@/components/members/MemberFilters.vue'
import MemberTable from '@/components/members/MemberTable.vue'

const filters = ref({
  search: '',
  categoria: '',
  estado: '',
})

const stats = [
  {
    value: 1248,
    label: 'Total de Membros',
    icon: 'fa-solid fa-users',
    iconBg: 'bg-blue-100 text-blue-700',
  },
  {
    value: 1018,
    label: 'Membros Ativos',
    icon: 'fa-solid fa-user-check',
    iconBg: 'bg-green-100 text-green-700',
  },
  {
    value: 86,
    label: 'Novos este mês',
    icon: 'fa-solid fa-user-plus',
    iconBg: 'bg-purple-100 text-purple-700',
  },
  {
    value: 12,
    label: 'Pendentes',
    icon: 'fa-solid fa-user-clock',
    iconBg: 'bg-orange-100 text-orange-700',
  },
]

const membros = ref([
  {
    id: 1,
    nome: 'Ana Carla Matusse',
    email: 'ana.matusse@gmail.com',
    telefone: '+258 84 123 4567',
    categoria: 'Jovem',
    data: '20 Mai 2025',
    estado: 'Ativo',
    avatar: 'https://i.pravatar.cc/100?img=47',
  },
  {
    id: 2,
    nome: 'Carlos Nhantumbo',
    email: 'carlos.nhantumbo@gmail.com',
    telefone: '+258 82 222 1111',
    categoria: 'Voluntário',
    data: '19 Mai 2025',
    estado: 'Ativo',
    avatar: 'https://i.pravatar.cc/100?img=12',
  },
  {
    id: 3,
    nome: 'Dina Francisco',
    email: 'dina.francisco@gmail.com',
    telefone: '+258 85 333 2222',
    categoria: 'Jovem',
    data: '18 Mai 2025',
    estado: 'Ativo',
    avatar: 'https://i.pravatar.cc/100?img=33',
  },
  {
    id: 4,
    nome: 'Helder Guambe',
    email: 'helder.g@gmail.com',
    telefone: '+258 87 444 3333',
    categoria: 'Parceiro',
    data: '17 Mai 2025',
    estado: 'Pendente',
    avatar: 'https://i.pravatar.cc/100?img=14',
  },
  {
    id: 5,
    nome: 'Maria José Sitoe',
    email: 'maria.sitoe@gmail.com',
    telefone: '+258 84 555 4444',
    categoria: 'Equipa',
    data: '15 Mai 2025',
    estado: 'Ativo',
    avatar: 'https://i.pravatar.cc/100?img=49',
  },
])

const membrosFiltrados = computed(() => {
  return membros.value.filter(membro => {
    const search =
      membro.nome.toLowerCase().includes(filters.value.search.toLowerCase()) ||
      membro.email.toLowerCase().includes(filters.value.search.toLowerCase())

    const categoria =
      !filters.value.categoria || membro.categoria === filters.value.categoria

    const estado =
      !filters.value.estado || membro.estado === filters.value.estado

    return search && categoria && estado
  })
})

function limparFiltros() {
  filters.value = {
    search: '',
    categoria: '',
    estado: '',
  }
}
</script>

<template>
  <AdminLayout>
    <div class="space-y-6">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-4xl font-black text-slate-900">
            Membros
          </h1>
          <p class="text-slate-500 mt-2">
            Gerencie todos os membros cadastrados na organização.
          </p>
        </div>

        <BaseButton icon="fa-solid fa-plus">
          Adicionar Membro
        </BaseButton>
      </div>

      <MemberStats :stats="stats" />

      <MemberFilters
        :filters="filters"
        @update:filters="filters = $event"
        @clear="limparFiltros"
      />

      <MemberTable :membros="membrosFiltrados" />
    </div>
  </AdminLayout>
</template>
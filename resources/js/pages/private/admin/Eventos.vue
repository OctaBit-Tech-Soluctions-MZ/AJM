<script setup>
import { ref, computed } from 'vue'
import AdminLayout from '@/layouts/Private/AdminLayout.vue'
import BaseButton from '@/components/ui/BaseButton.vue'
import EventFilters from '@/components/events/EventFilters.vue'
import EventTable from '@/components/events/EventTable.vue'
import { router } from '@inertiajs/vue3'

const filters = ref({
  search: '',
  tipo: '',
  estado: '',
  periodo: '',
})

const eventos = ref([
  {
    id: 1,
    nome: 'Conferência Nacional de Tecnologia',
    descricao: 'Inovação e o futuro digital',
    tipo: 'Conferência',
    data: '15 - 16 Mai 2025',
    hora: '09:00 - 17:00',
    estado: 'Publicado',
    vagas: '120/150',
    inscricoes: 98,
    percentagem: '80%',
    barra: 'bg-blue-600',
    imagem: 'https://images.unsplash.com/photo-1540575467063-178a50c2df87?w=300',
  },
  {
    id: 2,
    nome: 'Workshop de Marketing Digital',
    descricao: 'Estratégias para resultados reais',
    tipo: 'Workshop',
    data: '22 Mai 2025',
    hora: '14:00 - 18:00',
    estado: 'Publicado',
    vagas: '30/30',
    inscricoes: 30,
    percentagem: '100%',
    barra: 'bg-red-500',
    imagem: 'https://images.unsplash.com/photo-1552664730-d307ca884978?w=300',
  },
  {
    id: 3,
    nome: 'Encontro de Networking',
    descricao: 'Conectando pessoas e oportunidades',
    tipo: 'Networking',
    data: '05 Jun 2025',
    hora: '18:00 - 21:00',
    estado: 'Rascunho',
    vagas: '0/100',
    inscricoes: 0,
    percentagem: '0%',
    barra: 'bg-slate-300',
    imagem: 'https://images.unsplash.com/photo-1556761175-b413da4baf72?w=300',
  },
])

const eventosFiltrados = computed(() => {
  return eventos.value.filter(evento => {
    const matchSearch = evento.nome.toLowerCase().includes(filters.value.search.toLowerCase())
    const matchTipo = !filters.value.tipo || evento.tipo === filters.value.tipo
    const matchEstado = !filters.value.estado || evento.estado === filters.value.estado

    return matchSearch && matchTipo && matchEstado
  })
})

function limparFiltros() {
  filters.value = {
    search: '',
    tipo: '',
    estado: '',
    periodo: '',
  }
}
</script>

<template>
  <AdminLayout>
    <div class="space-y-6">
      <div class="flex items-center justify-between">
        <div>
          <h1 class="text-4xl font-black text-slate-900">
            Eventos
          </h1>
          <p class="text-slate-500 mt-2">
            Gerencie todos os eventos da organização.
          </p>
        </div>

        <BaseButton
  icon="fa-solid fa-plus"
  @click="router.visit('/admin/events/create')"
>
  Criar Novo Evento
</BaseButton>
      </div>

      <EventFilters
        :filters="filters"
        @update:filters="filters = $event"
        @clear="limparFiltros"
      />

      <EventTable :eventos="eventosFiltrados" />
    </div>
  </AdminLayout>
</template>
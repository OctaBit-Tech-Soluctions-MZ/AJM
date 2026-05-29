<script setup>
import { ref } from 'vue'

import Sidebar from '@/components/layout/Sidebar.vue'
import SidebarNavGroup from '@/components/layout/SidebarNavGroup.vue'
import SidebarNavItem from '@/components/layout/SidebarNavItem.vue'
import Topbar from '@/components/layout/Topbar.vue'

const sidebarOpen = ref(false)

function toggleSidebar() {
  sidebarOpen.value = !sidebarOpen.value
}

function closeSidebar() {
  sidebarOpen.value = false
}
</script>

<template>
  <div class="h-screen overflow-hidden bg-slate-50">
    <button
      type="button"
      class="fixed left-4 top-4 z-50 flex h-11 w-11 items-center justify-center rounded-xl bg-white text-slate-800 shadow-lg lg:hidden"
      @click="toggleSidebar"
    >
      <i :class="sidebarOpen ? 'fa-solid fa-xmark' : 'fa-solid fa-bars'"></i>
    </button>

    <div
      v-if="sidebarOpen"
      class="fixed inset-0 z-30 bg-black/40 lg:hidden"
      @click="closeSidebar"
    ></div>

    <div
      class="fixed left-0 top-0 z-40 h-screen transition-transform duration-300 lg:translate-x-0"
      :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full lg:translate-x-0'"
    >
      <Sidebar>
        <SidebarNavItem href="/admin/dashboard" icon="fa fa-house" label="Dashboard" :active="true" />
        <SidebarNavGroup title="Gestão de Membros">
          <SidebarNavItem href="/admin/members" icon="fa-solid fa-users" label="Membros" />
          <SidebarNavItem href="" icon="fa-solid fa-bell" label="Pedidos Pendentes" />
          <SidebarNavItem href="" icon="fa-solid fa-layer-group" label="Categorias" />
          <SidebarNavItem href="" icon="fa-solid fa-check-double" label="Verificações" />
        </SidebarNavGroup>

        <SidebarNavGroup title="Actividades">
          <SidebarNavItem href="/admin/events" icon="fa-solid fa-calendar-days" label="Eventos" />
          <SidebarNavItem href="/admin/projects" icon="fa-solid fa-box-archive" label="Projectos" />
        </SidebarNavGroup>

        <SidebarNavGroup title="Comunicação">
          <SidebarNavItem href="" icon="fa-solid fa-envelope-open-text" label="Noticações" />
          <SidebarNavItem href="" icon="fa-solid fa-envelope" label="Email/Mensagens" />
        </SidebarNavGroup>

        <SidebarNavGroup title="Relatorios">
          <SidebarNavItem href="" icon="fa-solid fa-chart-line" label="Relatórios" />
          <SidebarNavItem href="" icon="fa-solid fa-chart-bar" label="Estatísticas" />
        </SidebarNavGroup>

        <SidebarNavGroup title="Configurações">
          <SidebarNavItem href="" icon="fa-solid fa-gear" label="Definições" />
          <SidebarNavItem href="" icon="fa-solid fa-user-shield" label="Perfis de Acesso" />
        </SidebarNavGroup>
      </Sidebar>
    </div>

    <div class="flex h-screen flex-col lg:ml-[260px]">
      <Topbar title="Dashboard" />

      <main class="flex-1 overflow-y-auto p-4 pt-20 sm:p-5 sm:pt-20 lg:p-8">
        <slot />
      </main>
    </div>
  </div>
</template>
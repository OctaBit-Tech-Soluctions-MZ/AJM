<template>
    <div class="relative">
        <button type="button"
            class="relative inline-flex h-11 w-11 items-center justify-center rounded-xl border border-slate-200 bg-white text-slate-600 transition hover:border-slate-300 hover:bg-slate-50 hover:text-slate-900"
            @click="isOpen = !isOpen">
            <Bell class="h-5 w-5" />

            <span v-if="unreadCount > 0"
                class="absolute -right-1 -top-1 flex h-5 min-w-[1.25rem] items-center justify-center rounded-full bg-red-500 px-1 text-[11px] font-semibold text-white">
                {{ unreadCount }}
            </span>
        </button>

        <transition enter-active-class="transition duration-200 ease-out" enter-from-class="opacity-0 scale-95"
            enter-to-class="opacity-100 scale-100" leave-active-class="transition duration-150 ease-in"
            leave-from-class="opacity-100 scale-100" leave-to-class="opacity-0 scale-95">
            <div v-if="isOpen"
                class="absolute right-0 z-50 mt-3 w-96 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-xl">
                <div class="flex items-center justify-between border-b border-slate-100 px-5 py-4">
                    <h3 class="text-sm font-semibold text-slate-900">Notificações</h3>
                    <button class="text-xs font-medium text-blue-600 hover:text-blue-700">
                        Marcar todas como lidas
                    </button>
                </div>

                <div class="max-h-96 overflow-y-auto">
                    <div v-for="notification in notifications" :key="notification.id"
                        class="border-b border-slate-100 px-5 py-4 transition hover:bg-slate-50">
                        <div class="flex gap-3">
                            <div class="mt-1 h-2.5 w-2.5 rounded-full"
                                :class="notification.read ? 'bg-slate-300' : 'bg-blue-500'" />

                            <div class="min-w-0 flex-1">
                                <p class="text-sm font-medium text-slate-900">
                                    {{ notification.title }}
                                </p>
                                <p class="mt-1 text-sm text-slate-600">
                                    {{ notification.message }}
                                </p>
                                <p class="mt-2 text-xs text-slate-400">
                                    {{ notification.time }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="border-t border-slate-100 px-5 py-4">
                    <button class="w-full text-center text-sm font-medium text-blue-600 hover:text-blue-700">
                        Ver todas as notificações
                    </button>
                </div>
            </div>
        </transition>
    </div>
</template>

<script setup>
import { computed, ref } from 'vue'
import { Bell } from 'lucide-vue-next'

const isOpen = ref(false)

const notifications = ref([
    {
        id: 1,
        title: 'Novo pedido de adesão',
        message: 'Foi submetido um novo pedido de adesão por Ana Silva.',
        time: 'Há 5 minutos',
        read: false,
    },
    {
        id: 2,
        title: 'Pagamento confirmado',
        message: 'A cota de Março de Carlos Mabunda foi confirmada.',
        time: 'Há 1 hora',
        read: false,
    },
    {
        id: 3,
        title: 'Evento publicado',
        message: 'O evento Cimeira da Juventude 2026 foi publicado com sucesso.',
        time: 'Ontem',
        read: true,
    },
])

const unreadCount = computed(() =>
    notifications.value.filter(notification => !notification.read).length,
)
</script>

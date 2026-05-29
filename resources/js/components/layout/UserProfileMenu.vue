<template>
    <div class="relative">
        <button type="button"
            class="flex items-center gap-3 rounded-2xl border border-slate-200 bg-white px-3 py-2 transition hover:border-slate-300 hover:bg-slate-50"
            @click="isOpen = !isOpen">
            <img :src="user.avatar || defaultAvatar" :alt="user.name"
                class="h-11 w-11 rounded-full object-cover ring-2 ring-slate-100" />

            <div class="hidden text-left lg:block">
                <p class="text-sm font-semibold text-slate-900">{{ user.name }}</p>
                <p class="text-xs text-slate-500">{{ user.role }}</p>
            </div>

            <ChevronDown class="hidden h-4 w-4 text-slate-400 transition lg:block" :class="isOpen && 'rotate-180'" />
        </button>

        <transition enter-active-class="transition duration-200 ease-out" enter-from-class="scale-95 opacity-0"
            enter-to-class="scale-100 opacity-100" leave-active-class="transition duration-150 ease-in"
            leave-from-class="scale-100 opacity-100" leave-to-class="scale-95 opacity-0">
            <div v-if="isOpen"
                class="absolute right-0 z-50 mt-3 w-72 overflow-hidden rounded-2xl border border-slate-200 bg-white shadow-xl">
                <div class="border-b border-slate-100 px-5 py-4">
                    <div class="flex items-center gap-3">
                        <img :src="user.avatar || defaultAvatar" :alt="user.name"
                            class="h-12 w-12 rounded-full object-cover" />
                        <div>
                            <p class="font-semibold text-slate-900">{{ user.name }}</p>
                            <p class="text-sm text-slate-500">{{ user.email }}</p>
                        </div>
                    </div>
                </div>

                <div class="p-2">
                    <Link href="/perfil"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-slate-700 transition hover:bg-slate-50">
                        <User class="h-4 w-4" />
                        Meu Perfil
                    </Link>

                    <Link href="/configuracoes"
                        class="flex items-center gap-3 rounded-xl px-4 py-3 text-sm text-slate-700 transition hover:bg-slate-50">
                        <Settings class="h-4 w-4" />
                        Configurações
                    </Link>

                    <div class="my-2 border-t border-slate-100"></div>

                    <Link href="/logout" method="post" as="button"
                        class="flex w-full items-center gap-3 rounded-xl px-4 py-3 text-sm text-red-600 transition hover:bg-red-50">
                        <LogOut class="h-4 w-4" />
                        Terminar Sessão
                    </Link>
                </div>
            </div>
        </transition>
    </div>
</template>

<script setup>
import { ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import {
    ChevronDown,
    User,
    Settings,
    LogOut,
} from 'lucide-vue-next'

const isOpen = ref(false)

defineProps({
    user: {
        type: Object,
        required: true,
    },
})

const defaultAvatar = 'https://ui-avatars.com/api/?name=AJM&background=0F172A&color=fff'
</script>

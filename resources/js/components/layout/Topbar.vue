<template>
    <header class="flex h-20 items-center justify-between border-b border-slate-200 bg-white px-6 lg:px-8">
        <div class="flex items-center gap-4">
            

            <div>
                <h1 class="text-[16px] font-bold text-slate-900">{{ title }}</h1>
            </div>
        </div>

        <div class="flex items-center gap-4">
            <button type="button"
                class="relative inline-flex h-11 w-11 items-center justify-center rounded-xl bg-white text-slate-600 transition hover:bg-slate-50 hover:text-slate-900">
                <Bell class="h-5 w-5" />
                <span v-if="notificationCount > 0"
                    class="absolute right-2 top-2 flex h-5 min-w-[20px] items-center justify-center rounded-full bg-red-500 px-1 text-[11px] font-semibold text-white">
                    {{ notificationCount }}
                </span>
            </button>

            <button type="button"
                class="flex items-center gap-3 rounded-2xl bg-white px-3 py-2 transition hover:bg-slate-50">
                <img :src="Avatar" :alt="User" class="h-11 w-11 rounded-full object-cover" />

                <div class="hidden text-left md:block">
                    <p class="text-sm font-semibold text-slate-900">Huren Pelembe</p>
                    <p class="text-xs text-slate-500">Administrador</p>
                </div>

                <ChevronDown class="hidden h-4 w-4 text-slate-400 md:block" />
            </button>
        </div>
    </header>
</template>

<script setup>
import { Bell, ChevronDown, Menu } from 'lucide-vue-next'
import Avatar from '../../assets/img/avatar/avatar_1.svg';

defineProps({
    title: {
        type: String,
        default: 'Dashboard',
    },
    subtitle: {
        type: String,
        default: '',
    },
    notificationCount: {
        type: Number,
        default: 0,
    },
    // user: {
    //     type: Object,
    //     required: true,
    // },
})
</script>
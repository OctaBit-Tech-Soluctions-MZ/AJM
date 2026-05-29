<template>
  <Link 
    :href="href"
    class="group flex items-center gap-3 rounded-lg px-4 py-2.5 text-[14px] font-medium transition-all duration-200"
    :class="active
      ? 'bg-[#001B4E] text-white shadow-sm'
      : 'text-gray-600 hover:bg-gray-200 hover:text-[#001B4E]'"
  >
    <!-- Ícone -->
    <i
      :class="[
        icon,
        'h-4 w-4 flex-shrink-0 transition-colors flex items-center justify-center',
        active
          ? 'text-[#F9C333]'
          : 'text-gray-400 group-hover:text-[#001B4E]'
      ]"
    ></i>

    <!-- Texto -->
    <span class="flex-1 leading-none">{{ label }}</span>

    <!-- Badge (Notificações) -->
    <div 
      v-if="badge" 
      class="flex h-5 min-w-[20px] items-center justify-center rounded-[4px] bg-[#F9C333] px-1.5 text-[10px] font-bold text-[#001B4E]"
    >
      {{ badge }}
    </div>
  </Link>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'

defineProps({
  href: { type: String, required: true },
  label: { type: String, required: true },
  icon: { type: String, required: true },
  active: { type: Boolean, default: false },
  badge: { type: [String, Number], default: null },
})
</script>F
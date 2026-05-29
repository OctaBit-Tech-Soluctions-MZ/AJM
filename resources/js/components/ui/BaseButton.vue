<script setup>
defineProps({
  variant: {
    type: String,
    default: 'primary',
  },
  icon: String,
})
</script>

<template>
  <button
    class="inline-flex items-center gap-2 rounded-xl px-5 py-3 font-semibold transition"
    :class="{
      'bg-[#06265c] text-white hover:bg-[#041b42] shadow': variant === 'primary',
      'bg-white text-slate-700 border border-slate-200 hover:bg-slate-50': variant === 'secondary',
      'bg-red-600 text-white hover:bg-red-700': variant === 'danger',
    }"
  >
    <i v-if="icon" :class="icon"></i>
    <slot />
  </button>
</template>
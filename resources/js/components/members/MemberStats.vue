<script setup>
defineProps({
  stats: Array,
})
</script>

<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
    <div
      v-for="item in stats"
      :key="item.label"
      class="bg-white border border-slate-200 rounded-2xl p-5 flex items-center gap-4"
    >
      <div
        class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl"
        :class="item.iconBg"
      >
        <i :class="item.icon"></i>
      </div>

      <div>
        <h3 class="text-3xl font-black text-slate-900">
          {{ item.value }}
        </h3>
        <p class="text-slate-500">
          {{ item.label }}
        </p>
      </div>
    </div>
  </div>
</template>
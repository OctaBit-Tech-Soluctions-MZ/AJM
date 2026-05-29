<script setup>
defineProps({
  title: String,
  value: [String, Number],
  subtitle: String,
  icon: String,
  iconClass: String,
  percentage: String,
})
</script>

<template>
  <div class="bg-white border border-slate-200 rounded-2xl p-5 flex items-center gap-5">
    <div
      class="w-14 h-14 rounded-2xl flex items-center justify-center text-2xl"
      :class="iconClass"
    >
      <i :class="icon"></i>
    </div>

    <div>
      <p class="text-sm font-semibold text-slate-500">
        {{ title }}
      </p>

      <div class="flex items-center gap-3">
        <h2 class="text-3xl font-bold text-slate-900">
          {{ value }}
        </h2>

        <span v-if="percentage" class="text-green-600 text-sm font-bold">
          <i class="fa-solid fa-arrow-up"></i> {{ percentage }}
        </span>
      </div>

      <p class="text-sm text-slate-500">
        {{ subtitle }}
      </p>
    </div>
  </div>
</template>
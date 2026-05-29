<script setup>
defineProps({
  modelValue: String,
  options: Array,
})

defineEmits(['update:modelValue'])
</script>

<template>
  <select
    :value="modelValue"
    @change="$emit('update:modelValue', $event.target.value)"
    class="w-full rounded-xl border border-slate-200 bg-white px-4 py-3 text-slate-600 outline-none"
  >
    <option
      v-for="option in options"
      :key="option.value"
      :value="option.value"
    >
      {{ option.label }}
    </option>
  </select>
</template>
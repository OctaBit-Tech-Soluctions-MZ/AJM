<script setup>
defineProps({
  label: String,
  modelValue: String,
  placeholder: String,
  rows: {
    type: Number,
    default: 4,
  },
})

defineEmits(['update:modelValue'])
</script>

<template>
  <div>
    <label v-if="label" class="block mb-2 text-sm font-semibold text-slate-700">
      {{ label }}
    </label>

    <textarea
      :rows="rows"
      :value="modelValue"
      :placeholder="placeholder"
      @input="$emit('update:modelValue', $event.target.value)"
      class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none resize-none focus:ring-2 focus:ring-[#06265c]/20 focus:border-[#06265c]"
    ></textarea>
  </div>
</template>
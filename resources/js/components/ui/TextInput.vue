<script setup>
defineProps({
  label: String,
  modelValue: [String, Number],
  type: {
    type: String,
    default: 'text',
  },
  placeholder: String,
})

defineEmits(['update:modelValue'])
</script>

<template>
  <div>
    <label v-if="label" class="block mb-2 text-sm font-semibold text-slate-700">
      {{ label }}
    </label>

    <input
      :type="type"
      :value="modelValue"
      :placeholder="placeholder"
      @input="$emit('update:modelValue', $event.target.value)"
      class="w-full rounded-xl border border-slate-200 px-4 py-3 outline-none focus:ring-2 focus:ring-[#06265c]/20 focus:border-[#06265c]"
    />
  </div>
</template>
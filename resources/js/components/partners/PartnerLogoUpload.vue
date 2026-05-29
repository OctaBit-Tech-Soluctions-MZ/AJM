<script setup>
defineProps({
  label: {
    type: String,
    default: 'Logo *',
  },
})

defineEmits(['change'])
</script>

<template>
  <div>
    <label class="block mb-2 text-sm font-semibold text-slate-700">
      {{ label }}
    </label>

    <label
      class="flex h-[110px] cursor-pointer items-center justify-center rounded-xl border border-dashed border-slate-300 bg-white hover:bg-slate-50 transition"
    >
      <input
        type="file"
        class="hidden"
        accept="image/png,image/jpg,image/jpeg,image/svg+xml"
        @change="$emit('change', $event.target.files[0])"
      />

      <div class="text-center text-slate-500">
        <i class="fa-solid fa-upload text-2xl mb-3"></i>

        <p>
          Clique para enviar ou arraste o arquivo
        </p>

        <p class="text-sm">
          PNG, JPG ou SVG (máx. 2MB)
        </p>
      </div>
    </label>
  </div>
</template>
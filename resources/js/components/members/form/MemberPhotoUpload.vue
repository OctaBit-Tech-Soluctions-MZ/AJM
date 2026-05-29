<script setup>
defineEmits(['change'])
</script>

<template>
  <div>
    <label class="block mb-2 text-sm font-semibold text-slate-700">
      Foto do Membro
    </label>

    <label
      class="flex h-[130px] cursor-pointer items-center justify-center rounded-xl border border-dashed border-slate-300 bg-white hover:bg-slate-50 transition"
    >
      <input
        type="file"
        class="hidden"
        accept="image/png,image/jpg,image/jpeg"
        @change="$emit('change', $event.target.files[0])"
      />

      <div class="text-center text-slate-500">
        <i class="fa-solid fa-user-plus text-3xl mb-3"></i>
        <p>Clique para enviar uma foto</p>
        <p class="text-sm">PNG ou JPG até 2MB</p>
      </div>
    </label>
  </div>
</template>
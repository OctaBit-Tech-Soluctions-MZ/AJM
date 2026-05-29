<script setup>
import DashboardCard from './DashboardCard.vue'

defineProps({
  cards: {
    type: Array,
    default: () => [],
  },
})
</script>

<template>
  <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-5">
    <DashboardCard
      v-for="card in cards"
      :key="card.title"
      v-bind="card"
    />
  </div>
</template>
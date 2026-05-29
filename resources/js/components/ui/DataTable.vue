<script setup>
defineProps({
  columns: {
    type: Array,
    default: () => [],
  },
  rows: {
    type: Array,
    default: () => [],
  },
})
</script>

<template>
  <div class="bg-white border border-slate-200 rounded-2xl overflow-hidden">
    <table class="w-full text-left">
      <thead class="bg-slate-50 border-b border-slate-200">
        <tr>
          <th
            v-for="column in columns"
            :key="column.key"
            class="px-6 py-4 text-sm font-bold text-slate-500"
          >
            {{ column.label }}
          </th>
        </tr>
      </thead>

      <tbody class="divide-y divide-slate-100">
        <tr
          v-for="row in rows"
          :key="row.id"
          class="hover:bg-slate-50 transition"
        >
          <td
            v-for="column in columns"
            :key="column.key"
            class="px-6 py-4"
          >
            <slot
              :name="column.key"
              :row="row"
            >
              {{ row[column.key] }}
            </slot>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
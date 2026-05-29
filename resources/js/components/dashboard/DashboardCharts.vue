<script setup>
import {
  Chart as ChartJS,
  ArcElement,
  Tooltip,
  Legend,
  CategoryScale,
  LinearScale,
  PointElement,
  LineElement,
  Filler,
} from 'chart.js'

import { Doughnut, Line } from 'vue-chartjs'

ChartJS.register(
  ArcElement,
  Tooltip,
  Legend,
  CategoryScale,
  LinearScale,
  PointElement,
  LineElement,
  Filler
)

defineProps({
  pieData: Object,
  lineData: Object,
})

const pieOptions = {
  responsive: true,
  maintainAspectRatio: false,
  cutout: '62%',
  plugins: {
    legend: {
      display: false,
    },
  },
}

const lineOptions = {
  responsive: true,
  maintainAspectRatio: false,
  plugins: {
    legend: {
      display: false,
    },
  },
}
</script>

<template>
  <div class="grid grid-cols-1 xl:grid-cols-2 gap-6">
    <div class="bg-white border border-slate-200 rounded-2xl p-6">
      <h2 class="text-lg font-bold text-slate-900 mb-6">
        Membros por Categoria
      </h2>

      <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-6">
        <div class="relative h-64">
          <Doughnut :data="pieData" :options="pieOptions" />

          <div class="absolute inset-0 flex flex-col items-center justify-center">
            <h3 class="text-3xl font-bold text-slate-900">
              1,248
            </h3>
            <p class="text-slate-500">Total</p>
          </div>
        </div>

        <div class="space-y-5">
          <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
              <span class="w-3 h-3 rounded-full bg-[#063b8e]"></span>
              <span class="text-slate-600 font-medium">Jovens (15-24 anos)</span>
            </div>
            <strong class="text-slate-800">62% (774)</strong>
          </div>

          <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
              <span class="w-3 h-3 rounded-full bg-yellow-400"></span>
              <span class="text-slate-600 font-medium">Voluntários</span>
            </div>
            <strong class="text-slate-800">20% (250)</strong>
          </div>

          <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
              <span class="w-3 h-3 rounded-full bg-green-600"></span>
              <span class="text-slate-600 font-medium">Equipa</span>
            </div>
            <strong class="text-slate-800">10% (125)</strong>
          </div>

          <div class="flex items-center justify-between">
            <div class="flex items-center gap-3">
              <span class="w-3 h-3 rounded-full bg-purple-500"></span>
              <span class="text-slate-600 font-medium">Parceiros</span>
            </div>
            <strong class="text-slate-800">8% (99)</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="bg-white border border-slate-200 rounded-2xl p-6">
      <div class="flex items-center justify-between mb-6">
        <h2 class="text-lg font-bold text-slate-900">
          Registos ao Longo do Tempo
        </h2>

        <select class="border border-slate-200 rounded-xl px-4 py-2 text-sm font-semibold text-slate-600 outline-none">
          <option>Últimos 6 meses</option>
          <option>Últimos 12 meses</option>
        </select>
      </div>

      <div class="h-64">
        <Line :data="lineData" :options="lineOptions" />
      </div>
    </div>
  </div>
</template>
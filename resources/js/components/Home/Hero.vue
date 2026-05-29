<template>
  <!-- HERO -->
  <section class="relative bg-slate-50">
    <div class="relative flex min-h-[720px] items-center pb-10 pt-28 md:h-[650px] md:min-h-0 md:pb-0 md:pt-0">
      <!-- BACKGROUND IMAGE -->
      <div class="absolute inset-0">
        <img
          :src="Hero"
          class="h-full w-full object-cover"
          alt="AJM Hero"
        />
      </div>

      <!-- OVERLAY -->
      <div class="absolute inset-0 bg-black/60"></div>

      <!-- CONTENT -->
      <div class="relative z-10 mx-auto w-full max-w-7xl px-6">
        <div class="max-w-2xl text-white">
          <h1 class="text-3xl font-bold leading-tight sm:text-4xl md:text-5xl">
            Transformando jovens em agentes de mudança
          </h1>

          <p class="mt-5 text-base text-gray-200 md:text-lg">
            Promovemos oportunidades que desenvolvem competências,
            fortalecem lideranças e geram impacto positivo na comunidade
            de Marracuene.
          </p>

          <div class="mt-8 flex flex-col gap-4 sm:flex-row">
            <Link
              :href="route('about')"
              class="flex items-center justify-center gap-2 rounded-lg bg-[#fbb03b] px-6 py-3 font-semibold text-black transition hover:bg-yellow-500"
            >
              Conhecer a AJM
              <i class="fa-solid fa-arrow-right"></i>
            </Link>

            <Link
              :href="route('partners')"
              class="flex items-center justify-center gap-2 rounded-lg border border-white px-6 py-3 font-medium text-white transition hover:bg-white hover:text-black"
            >
              Tornar-se parceiro
              <i class="fa-solid fa-handshake"></i>
            </Link>
          </div>
        </div>
      </div>
    </div>

    <!-- CARDS -->
    <div class="relative z-20 -mt-20 px-6 md:-mt-24">
      <div class="mx-auto max-w-7xl">
        <div
          class="grid grid-cols-1 gap-8 rounded-3xl bg-white px-6 py-8 shadow-2xl sm:grid-cols-2 sm:px-8 sm:py-10 lg:grid-cols-4"
        >
          <div class="flex items-start gap-4">
            <div class="mt-1 text-4xl text-[#001b3d]">
              <i class="fa-solid fa-users"></i>
            </div>

            <div>
              <h3 class="text-3xl font-extrabold leading-none text-[#001b3d]">
                500+
              </h3>
              <p class="mt-1 text-sm font-bold text-gray-900">
                Jovens impactados
              </p>
              <p class="mt-1 text-xs leading-relaxed text-gray-500">
                Acreditamos no potencial da juventude.
              </p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="mt-1 text-4xl text-[#fbb03b]">
              <i class="fa-regular fa-calendar-check"></i>
            </div>

            <div>
              <h3 class="text-3xl font-extrabold leading-none text-[#fbb03b]">
                20+
              </h3>
              <p class="mt-1 text-sm font-bold text-gray-900">
                Eventos realizados
              </p>
              <p class="mt-1 text-xs leading-relaxed text-gray-500">
                Encontros, formações e atividades que transformam.
              </p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="mt-1 text-4xl text-[#001b3d]">
              <i class="fa-solid fa-graduation-cap"></i>
            </div>

            <div>
              <h3 class="text-3xl font-extrabold leading-none text-[#001b3d]">
                15+
              </h3>
              <p class="mt-1 text-sm font-bold text-gray-900">
                Formações
              </p>
              <p class="mt-1 text-xs leading-relaxed text-gray-500">
                Capacitação prática para um futuro melhor.
              </p>
            </div>
          </div>

          <div class="flex items-start gap-4">
            <div class="mt-1 text-4xl text-[#fbb03b]">
              <i class="fa-solid fa-handshake-angle"></i>
            </div>

            <div>
              <h3 class="text-3xl font-extrabold leading-none text-[#fbb03b]">
                10+
              </h3>
              <p class="mt-1 text-sm font-bold text-gray-900">
                Parcerias
              </p>
              <p class="mt-1 text-xs leading-relaxed text-gray-500">
                Trabalhando juntos por uma comunidade forte.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import Hero from '../../assets/img/hero.png'
</script>
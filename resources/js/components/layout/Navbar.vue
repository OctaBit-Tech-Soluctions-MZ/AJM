<script setup>
import { ref, watch, onMounted, onUnmounted } from 'vue'
import { Link } from '@inertiajs/vue3'
import Logo from '../../assets/img/logo.png'

const props = defineProps({
  bg: {
    type: String,
    default: 'bg-transparent'
  },
  text_link: {
    type: String,
    default: 'text-white'
  }
})

const headerColor = ref(props.bg)
const linkColor = ref(props.text_link)

const mobileMenuOpen = ref(false)

function toggleMobileMenu() {
  mobileMenuOpen.value = !mobileMenuOpen.value
}

function closeMobileMenu() {
  mobileMenuOpen.value = false
}

const handleScroll = () => {
  if (props.bg === 'bg-transparent') {
    if (window.scrollY > 50) {
      headerColor.value = 'bg-white backdrop-blur-md shadow-lg'
      linkColor.value = 'text-[#001b3d]'
    } else {
      headerColor.value = 'bg-transparent'
      linkColor.value = 'text-white'
    }
  }
}

watch(() => props.bg, (val) => {
  headerColor.value = val
})

watch(() => props.text_link, (val) => {
  linkColor.value = val
})

onMounted(() => {
  window.addEventListener('scroll', handleScroll)
  handleScroll()
})

onUnmounted(() => {
  window.removeEventListener('scroll', handleScroll)
})
</script>

<template>
  <header
    :class="[
      'fixed top-0 left-0 w-full z-50 transition-all duration-300',
      headerColor
    ]"
  >
    <div
      class="max-w-7xl mx-auto px-4 sm:px-6 py-4 flex items-center justify-between"
    >

      <!-- LOGO -->
      <Link
        :href="route('home')"
        class="flex items-center gap-2"
        :class="linkColor"
      >
        <div class="w-[50px] h-[50px] sm:w-[60px] sm:h-[60px]">
          <img
            :src="Logo"
            alt="AJM"
            class="w-full h-full object-contain"
          />
        </div>

        <div class="leading-tight">
          <p class="font-bold text-base sm:text-lg">
            AJM
          </p>

          <p
            class="text-[10px] sm:text-xs opacity-80 max-w-[150px] sm:max-w-none"
          >
            Associação Juvenil de Marracuene
          </p>
        </div>
      </Link>

      <!-- MENU DESKTOP -->
      <nav
        class="hidden md:flex items-center gap-8 text-sm font-medium"
        :class="linkColor"
      >
        <Link
          :href="route('home')"
          class="text-yellow-400"
        >
          Início
        </Link>

        <Link
          :href="route('about')"
          class="hover:text-yellow-400 transition"
        >
          Sobre nós
        </Link>

        <Link
          :href="route('projects')"
          class="hover:text-yellow-400 transition"
        >
          Projetos
        </Link>

        <Link
          :href="route('events')"
          class="hover:text-yellow-400 transition"
        >
          Eventos
        </Link>

        <Link
          :href="route('partners')"
          class="hover:text-yellow-400 transition"
        >
          Parcerias
        </Link>

        <Link
          :href="route('contacts')"
          class="hover:text-yellow-400 transition"
        >
          Contacto
        </Link>
      </nav>

      <!-- AÇÕES -->
      <div class="flex items-center gap-3">

        <!-- BOTÃO LOGIN DESKTOP -->
        <Link
          :href="route('login')"
          class="hidden md:flex bg-yellow-400 hover:bg-yellow-500 transition text-black px-5 py-2 rounded-lg font-semibold items-center gap-2 shadow"
        >
          Entrar
          <i class="fa-regular fa-user"></i>
        </Link>

        <!-- HAMBURGUER MOBILE -->
        <button
          class="md:hidden h-11 w-11 rounded-xl bg-white/20 backdrop-blur-md flex items-center justify-center"
          :class="linkColor"
          @click="toggleMobileMenu"
        >
          <i
            :class="
              mobileMenuOpen
                ? 'fa-solid fa-xmark text-xl'
                : 'fa-solid fa-bars text-xl'
            "
          ></i>
        </button>

      </div>
    </div>

    <!-- MENU MOBILE -->
    <div
      v-if="mobileMenuOpen"
      class="md:hidden bg-white border-t shadow-xl"
    >
      <nav
        class="flex flex-col p-4 text-[#001b3d] font-medium"
      >
        <Link
          :href="route('home')"
          class="px-4 py-3 rounded-lg hover:bg-slate-100"
          @click="closeMobileMenu"
        >
          Início
        </Link>

        <Link
          :href="route('about')"
          class="px-4 py-3 rounded-lg hover:bg-slate-100"
          @click="closeMobileMenu"
        >
          Sobre nós
        </Link>

        <Link
          :href="route('projects')"
          class="px-4 py-3 rounded-lg hover:bg-slate-100"
          @click="closeMobileMenu"
        >
          Projetos
        </Link>

        <Link
          :href="route('events')"
          class="px-4 py-3 rounded-lg hover:bg-slate-100"
          @click="closeMobileMenu"
        >
          Eventos
        </Link>

        <Link
          :href="route('partners')"
          class="px-4 py-3 rounded-lg hover:bg-slate-100"
          @click="closeMobileMenu"
        >
          Parcerias
        </Link>

        <Link
          :href="route('contacts')"
          class="px-4 py-3 rounded-lg hover:bg-slate-100"
          @click="closeMobileMenu"
        >
          Contacto
        </Link>

        <Link
          :href="route('login')"
          class="mt-3 bg-yellow-400 hover:bg-yellow-500 text-black font-bold px-4 py-3 rounded-lg text-center transition"
          @click="closeMobileMenu"
        >
          Entrar
        </Link>
      </nav>
    </div>
  </header>
</template>
<!-- resources/js/Layouts/PublicLayout.vue -->
<template>
  <div class="bg-[#F8FAFC]">

    <Navbar  :bg="headerBg" :text_link="color" />

    <main>
      <slot />
    </main>

    <Footer />

  </div>
</template>

<script setup>
import Navbar from '@/components/layout/Navbar.vue';
import Footer from '@/components/layout/Footer.vue';

defineProps({
  headerBg: {
    type: String,
    default: 'bg-transparent'
  },
  color: {
    type: String,
    default: 'text-white'
  }
})
</script>
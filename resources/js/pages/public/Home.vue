<script setup>
import PublicLayout from '@/layouts/PublicLayout.vue';;
import Hero from '@/components/Home/Hero.vue';
import About from '@/components/Home/About.vue';
import Event from '@/components/Home/Event.vue';
import AreaOfExpertise from '@/components/Home/AreaOfExpertise.vue';
import Partners from '@/components/Home/Partners.vue';
import CTA from '@/components/Home/CTA.vue';

</script>

<template>
    <PublicLayout>
        <!-- Hero component -->
        <Hero />
        <!-- About us component -->
        <About />
        <!-- Are Of Expertise component -->
        <AreaOfExpertise />
        <!-- Event component -->
        <Event />
        <!-- Partners component -->
        <Partners />
        <!-- CTA -->
         <CTA />
    </PublicLayout>
</template>
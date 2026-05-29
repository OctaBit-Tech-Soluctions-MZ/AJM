<script setup>
import PublicLayout from '@/layouts/PublicLayout.vue';
import About from '../../assets/img/about.png';
import Logo from '../../assets/img/logo.png';
import TextField from '@/components/auth/TextField.vue';
import { useForm } from '@inertiajs/vue3';
import { Link } from '@inertiajs/vue3'

function submit() {
    form.post('/signup', {
        onSuccess: () => {
            router.visit('/member/profile/create')
        }
    })
}

const form = useForm({
    email: null,
    password: null,
    name: null,
    confirmed_password: null,
})

defineOptions({
    layout: (h, page) => h(PublicLayout, { headerBg: 'bg-[#001b3d] shadow-lg' }, () => page)
})

</script>

<template>
    <div class="min-h-screen bg-[#f4f7ff] flex items-center justify-center p-4 pt-30">
        <div
            class="max-w-5xl w-full bg-white rounded-3xl overflow-hidden shadow-2xl flex flex-col md:flex-row min-h-[600px]">

            <div class="md:w-1/2 relative bg-[#001b3d] text-white p-12 flex flex-col justify-between overflow-hidden">
                <div class="absolute inset-0 bg-black/40 z-10"></div>

                <img :src="About" class="absolute inset-0 w-full h-full object-cover" alt="Jovens a estudar">

                <div class="relative z-20">
                    <div class="flex items-center gap-2">
                        <img :src="Logo" class="h-10" alt="AJM Logo">
                        <div>
                            <h2 class="font-bold text-xl leading-none">AJM</h2>
                            <p class="text-[8px] uppercase tracking-tighter opacity-80 leading-none">Associação
                                Juvenil de Marracuene</p>
                        </div>
                    </div>
                </div>

                <div class="relative z-20 mt-20">
                    <h1 class="text-4xl md:text-5xl font-bold leading-tight mb-4">
                        Juntos por um <br> futuro melhor para <br> a <span class="text-[#fccb45]">juventude.</span>
                    </h1>
                    <div class="w-16 h-1 bg-[#fccb45] mb-8"></div>
                    <p class="text-white/80 text-sm max-w-xs">
                       Cria a tua conta para te juntares e acompanhares as nossas iniciativas.
                    </p>
                </div>
            </div>

            <div class="md:w-1/2 p-12 flex flex-col justify-center">
                <div class="max-w-md mx-auto w-full">
                    <h2 class="text-[#001b3d] text-3xl font-bold mb-2">Cria a tua conta AJM</h2>
                    <p class="text-gray-400 text-sm mb-8">Preenche os teus dados para te registares como membro</p>

                    <form class="space-y-6" @submit.prevent="submit">
                        <TextField 
                            id="name" 
                            label="Email" 
                            placeholder="Huren Vicente Pelembe" 
                            v-model="form.name"
                            :error="form.errors.name" 
                            icon="fa-regular fa-user" />
                        <TextField 
                            id="email" 
                            label="Email" 
                            placeholder="example@gmail.com" 
                            v-model="form.email"
                            :error="form.errors.email" 
                            icon="fa-regular fa-envelope" />
                        
                        <TextField 
                            id="password" 
                            label="Palavra-passe"
                            type="password" 
                            placeholder="......" 
                            v-model="form.password"
                            :error="form.errors.password" 
                            icon="fa-solid fa-lock" />
                        
                        <TextField 
                            id="confirmed_password" 
                            label="Confirmar Palavra-passe"
                            type="password" 
                            placeholder="......" 
                            v-model="form.confirmed_password"
                            :error="form.errors.confirmed_password" 
                            icon="fa-solid fa-lock" />

                        <button
    type="submit"
    :disabled="form.processing"
    class="w-full bg-[#001b3d] text-white font-bold py-3.5 rounded-xl hover:bg-[#00285a] transition-colors shadow-lg"
>
    {{ form.processing ? 'Criando conta...' : 'Criar Conta' }}
</button>
                    </form>

                    <p class="text-center text-gray-400 text-xs mt-10">
                        Ja tens uma conta? <Link :href="route('login')"
                            class="text-[#0e41a8] font-bold hover:underline">Entrar</Link>
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
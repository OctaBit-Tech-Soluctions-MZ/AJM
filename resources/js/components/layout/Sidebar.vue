    <template>
        <aside class="flex h-screen w-64 flex-col bg-white border-r border-gray-100 shadow-sm">
            <!-- Logo Section -->
            <div class="px-6 py-8 flex items-center gap-3">
                <img :src="Logo" alt="AJM" class="h-12 w-auto object-contain" />
                <p class="text-[9px] leading-tight font-bold text-[#001B4E] uppercase tracking-tighter">
                    Associação Juvenil de Marracuene
                </p>
            </div>

            <!-- Navigation Scroll Area -->
            <nav class="flex-1 overflow-y-auto px-4 custom-scrollbar">
                <div class="flex flex-col gap-y-2">
                    <slot />
                </div>
            </nav>

            <!-- Footer / Logout -->
            <div class="mt-auto border-t border-gray-100 p-4">
                <button @click="$emit('logout')"
                    class="flex w-full items-center gap-3 rounded-lg px-4 py-3 text-left transition-all duration-200 hover:bg-red-50 group">
                    <div
                        class="flex h-8 w-8 items-center justify-center rounded-full border border-gray-200 group-hover:border-red-200 group-hover:bg-white">
                        <svg class="h-4 w-4 text-gray-500 group-hover:text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H6a2 2 0 01-2-2V7a2 2 0 012-2h5a2 2 0 012 2v1" />
                        </svg>
                    </div>
                    <span class="text-[13px] font-medium text-gray-600 group-hover:text-red-600">Terminar sessão</span>
                </button>
            </div>
        </aside>
    </template>

    <script setup>
    import Logo from '../../assets/img/logo.png';
    defineEmits(['logout']);
    </script>

    <style scoped>
    .custom-scrollbar::-webkit-scrollbar {
        width: 4px;
    }
    .custom-scrollbar::-webkit-scrollbar-track {
        background: #001B4E;
    }
    .custom-scrollbar::-webkit-scrollbar-thumb {
        background: #F9C333;
        border-radius: 10px;
    }
    </style>
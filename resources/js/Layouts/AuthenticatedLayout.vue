<script setup>
import Menu from "../Components/PrimeVue/Menu.vue";
</script>

<template>
    <div class="h-screen flex flex-col">
        <!-- Barra lateral -->
        <div class="flex flex-1">
            <nav
                class="w-full md:w-1/5 h-full bg-white border-x-2 border-gray-200 p-6 top-0 z-10"
            >
                <div class="py-5 border-b-2">
                    <img
                        src="https://www.exata.it/wp-content/uploads/2023/07/logo-exata-data-intelligence.png"
                        alt="Logo da empresa, Exata Tech"
                        class="w-[15em] mx-auto"
                    />
                </div>
                <!-- Ações do administrador -->
                <ul>
                    <div class="border-b-2">
                        <p class="font-bold text-sm text-slate-400 pt-3">
                            ADMINISTRADOR
                        </p>

                        <li class="my-2 p-3 flex items-center gap-4">
                            <Menu />
                        </li>
                    </div>
                </ul>
            </nav>

            <!-- Conteúdo Principal -->
            <div class="w-full">
                <main class="bg-gray-50 h-full md:h-[100%]">
                    <slot />
                </main>
            </div>
        </div>
    </div>
</template>

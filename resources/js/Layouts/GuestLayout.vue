<script setup>
import ApplicationLogo from "@/Components/ApplicationLogo.vue";
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <div
        class="min-h-screen flex sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 gap-[5em]"
    >
        <div
            class="bg-indigo-600 h-[40em] w-[32em] flex flex-col items-center rounded-xl"
        >
            <h1 class="text-center text-white font-bold mt-[3.5em] text-[2em]">
                Bem vindo!!
            </h1>
            <p class="text-center text-white text-[1em] mt-[1em] w-[25em]">
                Faça seu login ao lado e comece a cadastrar seus usuários o
                quanto antes!!
            </p>

            <Link href="/">
                <img
                    src="https://github.com/GuilhermeWilker/Todo-Today/blob/main/public/imgs/pablita-911.png?raw=true"
                    alt=""
                    class="mt-[1em]"
                />
            </Link>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg"
        >
            <slot />
        </div>
    </div>
</template>

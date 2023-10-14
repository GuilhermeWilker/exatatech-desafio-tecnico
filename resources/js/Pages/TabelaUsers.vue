<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Tabela from "@/Components/PrimeVue/Tabela.vue";
import Header from "../Components/Header.vue";

import { Head } from "@inertiajs/vue3";
import UserDropdown from "@/Components/UserDropdown.vue";

defineProps({
    users: Array,
    user: Object,
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <Header>
            <UserDropdown :user="user" />
        </Header>
        <!-- Conteúdo -->
        <div class="p-2 sm:p-8 sm:w-[68em]">
            <!-- Tabela Container -->
            <div>
                <!-- Header -->
                <header
                    class="flex items-center justify-between w-full sm:w-[55em]"
                >
                    <h3
                        class="font-bold text-[1.2em] sm:text-[1.2em] flex items-center gap-3 text-slate-400"
                    >
                        <i class="fa-solid fa-table-list"></i>
                        Tabela de usuários
                    </h3>
                </header>

                <!-- Tabela -->
                <div class="h-[25em]">
                    <Tabela :users="users" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

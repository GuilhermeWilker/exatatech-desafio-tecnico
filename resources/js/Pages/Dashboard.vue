<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Card from "../Components/Card.vue";
import Tabela from "../Components/PrimeVue/Tabela.vue";
import Header from "@/Components/Header.vue";
import UserDropdown from "@/Components/UserDropdown.vue";
// import MenuBar from "@/Components/PrimeVue/MenuBar.vue";

import { Head, Link } from "@inertiajs/vue3";

defineProps({
    user: Object,
    users: Array,
    userCount: String,
    maleUsers: Number,
    femaleUsers: Number,
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
            <!-- Cards Container -->
            <div class="pb-7">
                <h3
                    class="font-bold text-[1.2em] sm:text-[1.2em] flex items-center gap-3 text-slate-500"
                >
                    <i class="fa-solid fa-chart-line"></i>
                    Overview
                </h3>

                <!-- Cards -->
                <div class="card-container flex items-center gap-8">
                    <Card
                        :number="userCount"
                        title="Novos usuários"
                        icon="fa-solid fa-users"
                    />
                    <Card
                        :number="femaleUsers"
                        title="Gênero feminino"
                        icon="fa-solid fa-venus"
                    />
                    <Card
                        :number="maleUsers"
                        title="Gênero masculino"
                        icon="fa-solid fa-mars"
                    />
                </div>
            </div>

            <!-- Tabela Container -->
            <div class="">
                <!-- Header -->
                <header
                    class="flex items-center justify-between w-full sm:w-[55em]"
                >
                    <h3
                        class="font-bold text-[1.2em] sm:text-[1.2em] flex items-center gap-3 text-slate-500"
                    >
                        <i class="fa-solid fa-table-list"></i>
                        Tabela de usuários
                    </h3>

                    <div class="flex items-center gap-3">
                        <Link
                            href="/users/table"
                            class="underline text-indigo-500 font-bold"
                        >
                            ver a tabela completa
                        </Link>
                        <i
                            class="fa-solid fa-arrow-right text-indigo-400 text-sm"
                        ></i>
                    </div>
                </header>

                <!-- Tabela -->
                <div class="h-[13em]">
                    <Tabela :users="users" />
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

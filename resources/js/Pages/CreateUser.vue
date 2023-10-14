<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Formulario from "../Components/PrimeVue/Formulario.vue";
import Header from "../Components/Header.vue";
import UserDropdown from "@/Components/UserDropdown.vue";

import { Head } from "@inertiajs/vue3";

defineProps({
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
        <div class="w-full md:w-2/3 p-4 md:p-8">
            <div class="my-4 sm:my-2 mx-auto w-full md:w-2/5">
                <Formulario />
            </div>
        </div>
    </AuthenticatedLayout>
</template>

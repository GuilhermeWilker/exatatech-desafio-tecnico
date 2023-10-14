<template>
    <div class="card flex justify-content-center">
        <Menu :model="items" />
    </div>
</template>

<script setup>
import Menu from "primevue/menu";

import { ref } from "vue";

const items = ref([
    { separator: true },
    { separator: true },
    {
        label: "Overview",
        icon: "fa-solid fa-chart-bar",
        url: "/",
    },
    { separator: true },
    { separator: true },
    {
        label: "Novo usuário",
        icon: "fa-solid fa-user-plus",
        url: "/create/user",
    },
    { separator: true },
    { separator: true },
    {
        label: "Tabela users",
        icon: "fa-solid fa-table",
        url: "/users/table",
    },
    { separator: true },
    { separator: true },
]);
</script>

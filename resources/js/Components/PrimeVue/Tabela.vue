<template>
    <div class="card w-full my-8 h-full overflow-x-auto overflow-y-auto">
        <DataTable :value="users" editMode="row" dataKey="id">
            <Column field="name" header="Nome" class="border-2"></Column>
            <Column field="email" header="E-mail" class="border-2"></Column>

            <Column
                field="cellphone"
                header="Celular"
                class="border-2"
            ></Column>

            <Column
                field="position"
                header="Profissão"
                class="border-2"
            ></Column>

            <Column field="gender" header="Gênero" class="border-2"></Column>
            <Column field="state" header="Estado" class="border-2"></Column>

            <Column header="" class="border-2">
                <template #body="{ data, field, rowIndex }">
                    <div class="flex items-center gap-3">
                        <button
                            @click="editUser(data.id)"
                            class="font-bold p-2 text-sm rounded-md hover:bg-blue-600 hover:text-white"
                        >
                            <i class="fa-regular fa-pen-to-square"></i>
                        </button>

                        <Link
                            :href="`/user/${data.id}`"
                            method="delete"
                            as="button"
                            class="hover:text-white font-bold p-2 text-sm rounded-md hover:bg-red-600"
                        >
                            <i class="fa-solid fa-minus"></i>
                        </Link>
                    </div>
                </template>
            </Column>
        </DataTable>
    </div>
</template>

<script setup>
import DataTable from "primevue/datatable";
import Column from "primevue/column";

import { Link, router } from "@inertiajs/vue3";

defineProps({
    users: Array,
});

const editUser = (userId) => {
    router.visit(`/edit/user/${userId}`);
};
</script>

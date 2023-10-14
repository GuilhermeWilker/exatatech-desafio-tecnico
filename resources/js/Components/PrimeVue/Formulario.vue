<template>
    <div>
        <form
            @submit.prevent="submit"
            method="post"
            class="p-5 bg-white rounded-md border-2 w-full sm:w-[30em] mx-auto"
        >
            <legend
                class="text-slate-700 py-2 text-xl sm:text-md text-center font-medium"
            >
                Cadastre novos usuários no formulário abaixo!
            </legend>
            <!-- Input nome -->
            <div class="card flex flex-col justify-center gap-1 my-4">
                <label for="name" class="font-bold text-gray-600">Nome:</label>

                <InputText
                    v-model="form.name"
                    class="border-1 rounded-md border-gray-200"
                    type="text"
                />
                <small class="text-sm text-gray-500">Exemplo: João Silva</small>
            </div>
            <!-- Input Group [Profissao, Estado] -->
            <div
                class="flex flex-col sm:flex-row items-center justify-between my-4 gap-3"
            >
                <!-- Input Profissao -->
                <div
                    class="card flex flex-col justify-center gap-1 w-full sm:w-1/2"
                >
                    <label for="position" class="font-bold text-gray-600"
                        >Profissão:</label
                    >
                    <InputText
                        class="border-1 rounded-md border-gray-200"
                        id="position"
                        name="position"
                        type="text"
                        v-model="form.position"
                    />
                    <small class="text-sm text-gray-500"
                        >Exemplo: Arquiteto de Software</small
                    >
                </div>
                <!-- Input Estado -->
                <div
                    class="card flex flex-col justify-center gap-1 w-full sm:w-1/2"
                >
                    <label for="state" class="font-bold text-gray-600"
                        >Estado:</label
                    >
                    <InputText
                        class="border-1 rounded-md border-gray-200"
                        id="state"
                        name="state"
                        type="text"
                        v-model="form.state"
                    />
                    <small class="text-sm text-gray-500"
                        >Exemplo: São Paulo</small
                    >
                </div>
            </div>
            <!-- Input email -->
            <div class="card flex flex-col justify-center gap-1 my-4">
                <label for="email" class="font-bold text-gray-600"
                    >E-mail:</label
                >
                <InputText
                    class="border-1 rounded-md border-gray-200"
                    id="email"
                    name="email"
                    type="text"
                    v-model="form.email"
                />
                <small class="text-sm text-gray-500"
                    >Exemplo: joaosilva53@email.com</small
                >
            </div>
            <!-- Input Group [celular, Gênero] -->
            <div
                class="flex flex-col sm:flex-row items-center justify-between my-4 gap-3"
            >
                <!-- Input Celular -->
                <div
                    class="card flex flex-col justify-center gap-1 w-full sm:w-1/2"
                >
                    <label for="cellphone" class="font-bold text-gray-600"
                        >Celular:</label
                    >
                    <InputText
                        class="border-1 rounded-md border-gray-200"
                        id="cellphone"
                        name="cellphone"
                        type="number"
                        placeholder="(11) 912345678"
                        v-model="form.cellphone"
                    />
                </div>
                <!-- Input Gênero -->
                <div
                    class="card flex flex-col justify-center gap-1 my-4 w-full sm:w-1/2"
                >
                    <label for="gender" class="font-bold text-gray-600"
                        >Gênero:</label
                    >
                    <Dropdown
                        v-model="form.selectedGender"
                        :options="gender"
                        optionLabel="name"
                        placeholder="Selecione.."
                        class="border-2 border-gray-200 text-sm h-[3em] flex items-center"
                    />
                </div>
            </div>

            <input type="hidden" name="password" value="" />

            <Button
                label="Cadastrar"
                class="p-3 bg-blue-600 text-white text-sm w-full"
                icon="pi pi-check"
                iconPos="right"
                type="submit"
            />
        </form>
    </div>
</template>

<script setup>
import { ref, reactive } from "vue";
import { router, useForm } from "@inertiajs/vue3";
import InputText from "primevue/inputtext";

import Button from "primevue/button";
import Dropdown from "primevue/dropdown";

const selectedGender = ref();
const gender = ref([
    { name: "Masculino", code: "M" },
    { name: "Feminino", code: "F" },
]);

const form = reactive({
    name: null,
    position: null,
    state: null,
    email: null,
    cellphone: null,
    selectedGender: null,
});

function submit() {
    router.post("/create/user", form);
}
</script>

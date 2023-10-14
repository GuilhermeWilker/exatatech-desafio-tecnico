<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import Header from "../Components/Header.vue";
import Button from "primevue/button";

import { Head, router, Link } from "@inertiajs/vue3";
import { ref } from "vue";

const data = defineProps({
    user: Object,
});

console.log(data.user.id);

const form = ref({
    name: data.user.name,
    position: data.user.position,
    state: data.user.state,
    email: data.user.email,
    cellphone: data.user.cellphone,
    selectedGender: null,
});
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <Header>
            <Link
                href="/"
                class="relative border-2 py-2 px-4 text-right rounded-md cursor-pointer ml-auto"
                >Voltar ao dashboard</Link
            >
        </Header>

        <!-- Conteúdo -->
        <div class="w-full md:w-2/3 p-4 md:p-8">
            <!-- Formulário -->
            <div class="my-4 sm:my-2 mx-auto w-full md:w-2/5">
                <form
                    @submit.prevent="
                        router.put(
                            route('user.update', { user: user.id }),
                            form
                        )
                    "
                    class="p-5 bg-white rounded-md border-2 w-full sm:w-[30em] mx-auto"
                >
                    <legend
                        class="text-slate-700 py-2 text-xl sm:text-md text-center font-medium"
                    >
                        Edite suas informações abaixo!
                    </legend>
                    <!-- Input nome -->
                    <div class="card flex flex-col justify-center gap-1 my-4">
                        <label for="name" class="font-bold text-gray-600"
                            >Nome:</label
                        >

                        <input
                            class="border-1 rounded-md border-gray-200"
                            type="text"
                            v-model="form.name"
                        />
                    </div>
                    <!-- Input Group [Profissao, Estado] -->
                    <div
                        class="flex flex-col sm:flex-row items-center justify-between my-4 gap-3"
                    >
                        <!-- Input Profissao -->
                        <div
                            class="card flex flex-col justify-center gap-1 w-full sm:w-1/2"
                        >
                            <label
                                for="position"
                                class="font-bold text-gray-600"
                                >Profissão:</label
                            >
                            <input
                                class="border-1 rounded-md border-gray-200"
                                id="position"
                                name="position"
                                type="text"
                                v-model="form.position"
                            />
                        </div>
                        <!-- Input Estado -->
                        <div
                            class="card flex flex-col justify-center gap-1 w-full sm:w-1/2"
                        >
                            <label for="state" class="font-bold text-gray-600"
                                >Estado:</label
                            >
                            <input
                                class="border-1 rounded-md border-gray-200"
                                id="state"
                                name="state"
                                type="text"
                                v-model="form.state"
                            />
                        </div>
                    </div>
                    <!-- Input email -->
                    <div class="card flex flex-col justify-center gap-1 my-4">
                        <label for="email" class="font-bold text-gray-600"
                            >E-mail:</label
                        >
                        <input
                            class="border-1 rounded-md border-gray-200"
                            id="email"
                            name="email"
                            type="text"
                            disabled
                            v-model="form.email"
                        />
                    </div>
                    <!-- Input Group [celular, Gênero] -->
                    <div
                        class="flex flex-col sm:flex-row items-center justify-between my-4 gap-3"
                    >
                        <!-- Input Celular -->
                        <div
                            class="card flex flex-col justify-center gap-1 w-full sm:w-1/2"
                        >
                            <label
                                for="cellphone"
                                class="font-bold text-gray-600"
                                >Celular:</label
                            >
                            <input
                                class="border-1 rounded-md border-gray-200"
                                id="cellphone"
                                name="cellphone"
                                type="number"
                                placeholder="(11) 912345678"
                                v-model="form.cellphone"
                            />
                        </div>
                    </div>

                    <input type="hidden" name="id" v-model="user.id" />

                    <Button
                        label="Editar"
                        class="p-3 bg-blue-600 text-white text-sm w-full"
                        type="submit"
                    />
                </form>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

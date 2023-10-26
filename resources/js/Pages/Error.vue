<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { defineProps, computed } from "vue";

// const { status } = defineProps(["status"]);

defineProps({
    user: Object,
    status: Number,
});

const errorMessages = {
    503: {
        title: "503: Service Unavailable",
        description:
            "Sorry, we are doing some maintenance. Please check back soon.",
    },
    500: {
        title: "500: Server Error",
        description: "Whoops, something went wrong on our servers.",
    },
    404: {
        title: "404: Page Not Found",
        description: "Sorry, the page you are looking for could not be found.",
    },
    403: {
        title: "403: Forbidden",
        description: "Sorry, you are forbidden from accessing this page.",
    },
};

const errorInfo = computed(() => {
    const error = errorMessages[status];
    if (error) {
        return {
            title: error.title,
            description: error.description,
        };
    }
});
</script>

<template>
    <AuthenticatedLayout>
        <Header>
            <UserDropdown :user="user" />
        </Header>
        <div>
            <h1>{{ errorMessages[status].title }}</h1>
            <div>{{ errorMessages[status].description }}</div>
            <Link href="/">Voltar a home</Link>
        </div>
    </AuthenticatedLayout>
</template>

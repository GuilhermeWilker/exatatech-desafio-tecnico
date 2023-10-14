<template>
    <div
        class="relative border-2 py-2 px-4 text-right rounded-md cursor-pointer ml-auto"
        @click="toggleDropdown"
    >
        {{ user.name }} | {{ user.email }}
        <i v-if="isDropdownOpen" class="fas fa-chevron-up ml-2"></i>
        <i v-else class="fas fa-chevron-down ml-2"></i>
        <div
            v-if="isDropdownOpen"
            class="dropdown-menu w-full flex items-center justify-center flex-col"
        >
            <div class="flex items-center hover:bg-gray-200 cursor-pointer">
                <Link href="/logout"> Logout </Link>
            </div>
        </div>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { defineProps } from "vue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    user: Object,
});

const isDropdownOpen = ref(false);

const toggleDropdown = () => {
    isDropdownOpen.value = !isDropdownOpen.value;
};
</script>

<style scoped>
.dropdown-menu {
    position: absolute;
    top: 100%;
    right: 0;
    background: white;
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 0;
    display: none;
    z-index: 10;
}

.relative:hover .dropdown-menu {
    display: block;
}

.dropdown-menu a {
    text-decoration: none;
    color: #333;
    display: block;
    padding: 1rem 1.5rem;
    cursor: pointer;
    transition: background-color 0.2s;
}

.dropdown-menu a:hover {
    background-color: #f5f5f5;
}
</style>

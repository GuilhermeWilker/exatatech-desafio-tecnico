<template>
    <!-- card -->
    <div
        class="card p-5 bg-white w-full sm:w-[25em] my-5 drop-shadow-md rounded-xl flex items-center gap-4 sm:gap-8"
    >
        <div
            class="flex items-center justify-center bg-indigo-500 p-3 w-[4em] sm:w-[4.5em] rounded-md"
        >
            <i
                :class="iconClass"
                class="text-white text-[1.5em] sm:text-[1.2em]"
            ></i>
        </div>

        <div>
            <p class="font-black text-[1.5em] sm:text-[1.4em] text-slate-500">
                {{ number }}
                <span
                    v-if="number > 0"
                    class="text-[1.25em] sm:text-[.8em] text-green-500"
                >
                    +
                </span>
            </p>

            <p class="text-[0.8em] sm:text-[.9em] text-slate-400">
                {{ title }}
            </p>
        </div>
    </div>
</template>

<script setup>
const props = defineProps({
    number: Number,
    title: String,
    icon: String,
});

const iconClass = `${props.icon} text-[2em] p-3`;
</script>

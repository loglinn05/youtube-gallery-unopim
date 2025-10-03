<template>
    <button class="yg-font-sans yg-border-0 yg-px-4 yg-py-2 yg-bg-purple-700 yg-text-white yg-rounded-lg">
        {{ label }}
    </button>
</template>

<script setup>
defineProps({
    label: String
})
</script>

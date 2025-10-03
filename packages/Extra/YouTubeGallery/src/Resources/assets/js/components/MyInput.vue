<template>
    <input :type="type" :name="name" :placeholder="placeholder" :value="value"
           class="yg-p-2 yg-border yg-border-gray-200 yg-rounded-lg yg-text-gray-800 focus:yg-border-purple-500 focus:yg-shadow focus:yg-shadow-purple-500"
           autocomplete="on">
</template>

<script setup>
defineProps({
    type: {
        type: String,
        default: 'text'
    },
    name: String,
    placeholder: {type: String, default: ''},
    value: {type: String, default: ''}
})
</script>

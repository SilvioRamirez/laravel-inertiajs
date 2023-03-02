<script setup>
defineProps({
    value: String,
    show: String,
});
</script>

<template>
    <label :for="value" class="block font-medium text-sm text-gray-700">
        <span v-if="show">{{ show }}</span>
        <span v-else>{{ value }}<slot /></span>
    </label>
</template>

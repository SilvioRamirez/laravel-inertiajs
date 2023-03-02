<script setup>

defineProps({
    modelValue: String,
    show: String,
});

</script>

<template>
    <label :for="modelValue" class="block text-sw font-medium text-gray-700">
        <span v-if="show">{{ show }}</span>
        <span v-else>{{ modelValue }}<slot /></span>
    </label>
    <input
        type="text"
        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
        @input="$emit('update:modelValue', $event.target.value)"
    >    
</template>
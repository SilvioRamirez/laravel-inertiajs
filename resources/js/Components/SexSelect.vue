
<script setup>
defineProps({
    value: String,
    show: String,
});
</script>

<template>
    <label :for="value" class="block font-medium text-sm text-gray-700">
        <span v-if="show">{{ show }}</span>
        <span v-else><slot /></span>
    </label>

    <select
        :name="show"
        :id="value"
        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
        
        <option value="">SELECCIONAR...</option>
        <option value="MASCULINO">MASCULINO</option>
        <option value="FEMENINO">FEMENINO</option>
    </select>

</template>

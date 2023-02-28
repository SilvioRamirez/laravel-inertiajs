
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
        :auto-complete="value"
        class="mt-1 block w-full rounded-md border border-gray-300 bg-white py-2 px-3 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
        
        <option value="">SELECCIONAR...</option>
        <option value="SOLTERO/A">SOLTERO/A</option>
        <option value="CASADO/A">CASADO/A</option>
        <option value="DIVORSIADO/A">DIVORSIADO/A</option>
        <option value="VIUDO/A">VIUDO/A</option>
    </select>

</template>

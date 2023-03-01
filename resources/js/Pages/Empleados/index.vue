<template>
    <AppLayout title="Empleados">
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">

            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <EyeIcon class="h-5 w-5 text-white"/>
                <span>&nbsp;</span>Ver Listado 
            </button>

            <Link :href="route('empleados.create')">
                <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <UserPlusIcon class="h-5 w-5 text-white"/>
                    <span>&nbsp;</span>Crear
                </button>
            </Link>

        </div>

        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Empleados
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                         <h3 class="text-2xl text-center">Laravel 9 Inertia JS Datatable</h3>
                         <Table :resource="empleados"></Table>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>

</template>

<script>

import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
import { Table } from '@protonemedia/inertiajs-tables-laravel-query-builder';
import { createInertiaApp } from '@inertiajs/vue3';
import { ref, toRefs, computed } from 'vue';
import { useForm, usePage, Head } from '@inertiajs/vue3';
import { EyeIcon } from '@heroicons/vue/24/solid';
import { UserPlusIcon } from '@heroicons/vue/24/solid';
import { setTranslations } from "@protonemedia/inertiajs-tables-laravel-query-builder";

export default {

    created(){
        document.title = 'Empleados';
    },
    components: {
        Link,
        AppLayout,
        EyeIcon,
        UserPlusIcon,
        Table,        
    },
    methods:
        setTranslations({
            next: "Siguiente",
            no_results_found: "No se encontraron resultados.",
            of: "de",
            per_page: "por página",
            previous: "Anterior",
            results: "resultados",
            to: "a",
        }),
    props: (['empleados']),
    
   
}

</script>
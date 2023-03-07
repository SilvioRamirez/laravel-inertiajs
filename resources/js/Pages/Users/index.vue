<template>
    <AppLayout title="Usuarios">
        <div class="py-1">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                         <h3 class="text-2xl text-center">Listado de Usuarios</h3>

                        <Link :href="route('admin.users.create')">
                            <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                                <UserPlusIcon class="h-5 w-5 text-white"/>
                                <span>&nbsp;</span>Crear
                            </button>
                        </Link>
                        
                        <Table
                            :resource="users"
                            :data="users.data"
                            :meta="users.meta"
                            :striped="true"
                            preserve-scroll="table-top"
                            >
                            <!-- <slot :name="`cell(${roles.name})`" :item="item">
                                {{ get(item, roles.name) }}
                            </slot> -->
                            <template  #cell(acciones)="{ item: user }">
                                <Link :href="`/admin/users/${user.id}/edit`" class="text-white bg-yellow-400 hover:bg-yellow-500 focus:outline-none focus:ring-4 focus:ring-yellow-300 font-medium rounded-full text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 mb-2 dark:focus:ring-yellow-900">
                                    <PencilSquareIcon class="h-4 w-4 text-white"/>
                                </Link>
                            </template>
                            <template  #cell(roles_name)="{ item: user }">
                                <div class="flex space-x-1">
                                    <div v-for="role in user.roles">
                                        <span>{{ role.name }}</span>
                                    </div>
                                </div>
                            </template>

                            
                        </Table>
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
import { EyeIcon, UserPlusIcon, PencilSquareIcon } from '@heroicons/vue/24/solid';
import { setTranslations } from "@protonemedia/inertiajs-tables-laravel-query-builder";

export default {

    created(){
        document.title = 'Usuarios';
    },
    components: {
        Link,
        AppLayout,
        EyeIcon,
        UserPlusIcon,
        PencilSquareIcon,
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
            to: "al",
        }),
    props: (['users']),
    
   
}

</script>
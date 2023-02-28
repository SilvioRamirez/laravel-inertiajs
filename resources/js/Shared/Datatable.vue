<template>
    <div class="container flex justify-center mx-auto">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="p-12 border-b border-gray-200 shadow">
                    <table class="divide-y divide-gray-300" id="dt-empleados">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-6 py-2 text-xs text-gray-500" v-for="header in headers" :key="header.id">{{ header }}</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import 'jquery/dist/jquery.min.js';
    import "datatables.net-dt/js/dataTables.dataTables"
    import $ from 'jquery'; 

    export default {
        props: ['url', 'columns', 'headers'],
        mounted(){
            let datatable = $('#dt-empleados').on('processing.dt', function(e, settings, processing) {
                    if (processing) {
                        $('table').addClass('opacity-25');
                    }else {
                        $('table').removeClass('opacity-25');
                    }
                }).DataTable({
                ajax: {
                    url: this.url,
                },
                serverSide: true,
                processing: true,
                paging: true,
                columns: this.columns,
            });

        },
    }
</script>
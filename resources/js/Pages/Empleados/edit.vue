<template>
    <AppLayout title="Editar">
        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-base font-semibold leading-6 text-gray-900">Editar Información</h3>
                    <p class="mt-1 text-sm text-gray-600">Editar Información de los Empleados de la CET</p>
                </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form @submit.prevent="updateData">
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="bg-white px-4 py-5 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">                                   

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="cedula_documento" class="block text-sw font-medium text-gray-700">Cedula</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.cedula_documento"
                                            autofocus
                                        >
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="documento_fiscal" class="block text-sw font-medium text-gray-700">RIF</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.documento_fiscal">
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="nombre1" class="block text-sw font-medium text-gray-700">Primer Nombre</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.nombre1">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="nombre2" class="block text-sw font-medium text-gray-700">Segundo Nombre</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.nombre2">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="apellido1" class="block text-sw font-medium text-gray-700">Primer Apellido</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.apellido1">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="apellido2" class="block text-sw font-medium text-gray-700">Segundo Apellido</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.apellido2">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="sexo" class="block text-sw font-medium text-gray-700">Genero</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.sexo">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="nacionalidad" class="block text-sw font-medium text-gray-700">Nacionalidad</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.nacionalidad">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="fec_nacimiento" class="block text-sw font-medium text-gray-700">Fecha de Nacimiento</label>
                                        <input type="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.fec_nacimiento">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="lugar_nacimiento" class="block text-sw font-medium text-gray-700">Lugar de Nacimiento</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.lugar_nacimiento">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="estado_civil" class="block text-sw font-medium text-gray-700">Estado Civil</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.estado_civil">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="fec_estado_civil" class="block text-sw font-medium text-gray-700">Fecha de Estado Civil</label>
                                        <input type="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.fec_estado_civil">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="email" class="block text-sw font-medium text-gray-700">Correo</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.email">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="foto" class="block text-sw font-medium text-gray-700">Foto</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.foto">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tipo_persona" class="block text-sw font-medium text-gray-700">Tipo Persona</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.tipo_persona">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="num_estatus" class="block text-sw font-medium text-gray-700">Numero de Estatus</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.num_estatus">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="gruposangre" class="block text-sw font-medium text-gray-700">Grupo Sanguineo</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.gruposangre">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="tipopersona" class="block text-sw font-medium text-gray-700">Tipo Persona</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.tipopersona">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="ciudad" class="block text-sw font-medium text-gray-700">Ciudad</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.ciudad">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="sector" class="block text-sw font-medium text-gray-700">Sector</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.sector">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="fec_ultima_modificacion" class="block text-sw font-medium text-gray-700">Fecha Ultima Modificacion</label>
                                        <input type="date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.fec_ultima_modificacion">
                                    </div>
                                    <div class="col-span-6 sm:col-span-3">
                                        <label for="seguridad_usuario" class="block text-sw font-medium text-gray-700">Seguridad de Usuario</label>
                                        <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                            v-model="form.seguridad_usuario">
                                    </div>                                     
                                    
                                </div>
                            </div>
                            
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <!-- <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Registrar</button> -->

                                <DangerButton class="mr-2"
                                        @click="deleteData()"
                                        :class="{ 'opasity-25': form.processing }"
                                        :disabled="form.processing"
                                    >
                                    Eliminar
                                </DangerButton>                                

                                <PrimaryButton
                                    :class="{ 'opasity-25': form.processing }"
                                    :disabled="form.processing"
                                >
                                    Editar
                                </PrimaryButton>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<script>

import { defineComponent } from 'vue';
import { useForm } from '@inertiajs/vue3';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import DangerButton from '@/Components/DangerButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import SexSelect from '@/Components/SexSelect.vue';
import CivilSelect from '@/Components/CivilSelect.vue';
import DateInput from '@/Components/DateInput.vue';
import InputTextEdit from '@/Components/Form/InputTextEdit.vue';


export default {
    created(){
        document.title ="Editar Empleados"
    },
    components: {
        PrimaryButton,
        DangerButton,
        TextInput,
        InputError,
        InputLabel,
        ActionMessage,
        Link,
        AppLayout,
        SexSelect,
        CivilSelect,
        DateInput,
        InputTextEdit,

    },
    props: {
        editData: Object,
    },  
    data(){
        return {
            form: this.$inertia.form({
                '_method': 'PUT',
                id: this.editData.id,
                cedula_documento: this.editData.cedula_documento,
                documento_fiscal: this.editData.documento_fiscal,
                nombre1: this.editData.nombre1,
                nombre2: this.editData.nombre2,
                apellido1: this.editData.apellido1,
                apellido2: this.editData.apellido2,
                sexo: this.editData.sexo,
                nacionalidad: this.editData.nacionalidad,
                fec_nacimiento: this.editData.fec_nacimiento,
                lugar_nacimiento: this.editData.lugar_nacimiento,
                estado_civil: this.editData.estado_civil,
                fec_estado_civil: this.editData.fec_estado_civil,
                email: this.editData.email,
                foto: this.editData.foto,
                tipo_persona: this.editData.tipo_persona,
                num_estatus: this.editData.num_estatus,
                gruposangre: this.editData.gruposangre,
                tipopersona: this.editData.tipopersona,
                ciudad: this.editData.ciudad,
                sector: this.editData.sector,
                fec_ultima_modificacion: this.editData.fec_ultima_modificacion,
                seguridad_usuario: this.editData.seguridad_usuario,
            }),
            formDelete: this.$inertia.form({
                '_method': 'DELETE',
            })
        }
    },
    methods: {
        updateData(){
            this.form.post(this.route('admin.empleados.update', this.editData.id), {
                errorBag: 'updateData',
            });
        },
        deleteData(){
            if(!confirm("¿Seguro de Eliminar esta información?")) return;
            this.form.post(this.route('admin.empleados.destroy', this.editData.id), {
                errorBag: 'deleteData',
            });
            
        }
    }

}

</script>
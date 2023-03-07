<template>
    <AppLayout>
        <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-base font-semibold leading-6 text-gray-900">Información</h3>
                    <p class="mt-1 text-sm text-gray-600">Información de los Empleados de la CET</p>
                </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">
                    <form @submit.prevent="storeData">
                        <div class="overflow-hidden shadow sm:rounded-md">
                            <div class="bg-white px-4 py-5 sm:p-6">
                                <div class="grid grid-cols-6 gap-6">                                   

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="cedula_documento" show="Cedula"></InputLabel>
                                        <TextInput modelValue="cedula_documento" v-model="form.cedula_documento"></TextInput>
                                        <InputError :message="form.errors.cedula_documento" class="mt-2"></InputError>
                                    </div>

                                    <FormField
                                        label="Nombre y Apellido"
                                        :class="{ 'text-red-400': form.errors.name }"
                                    >
                                        <FormControl
                                            v-model="form.name"
                                            type="text"
                                            placeholder="Nombre y Apellido"
                                            :error="form.errors.name"
                                        >
                                        <div class="text-red-400 text-sm" v-if="form.errors.name">
                                            {{ form.errors.name }}
                                        </div>
                                        </FormControl>

                                    </FormField>
                                    
                                    
                                </div>
                            </div>
                            
                            <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                                <!-- <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Registrar</button> -->

                                <PrimaryButton
                                    :class="{ 'opasity-25': form.processing }"
                                    :disabled="form.processing"
                                >
                                    Registrar
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

import { defineComponent } from 'vue'
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import { Head, Link, useForm } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import SexSelect from '@/Components/SexSelect.vue';
import CivilSelect from '@/Components/CivilSelect.vue';
import DateInput from '@/Components/DateInput.vue';
import FormControl from '@/Components/FormControl.vue';
import FormField from '@/Components/FormField.vue';

export default {
    created(){
        document.title ="Crear Empleados"
    },
    components: {
        PrimaryButton,
        TextInput,
        InputError,
        InputLabel,
        ActionMessage,
        Link,
        AppLayout,
        SexSelect,
        CivilSelect,
        DateInput,
        FormControl,
        FormField,
    },
    data(){
        return {
            form: this.$inertia.form({
                cedula_documento: "",
                documento_fiscal: "",
                nombre1: "",
                nombre2: "",
                apellido1: "",
                apellido2: "",
                sexo: "",
                nacionalidad: "",
                fec_nacimiento: "",
                lugar_nacimiento: "",
                estado_civil: "",
                fec_estado_civil: "",
                email: "",
                foto: "",
                tipo_persona: "",
                num_estatus: "",
                gruposangre: "",
                tipopersona: "",
                ciudad: "",
                sector: "",
                fec_ultima_modificacion: "",
                seguridad_usuario: "",
            })
        }
    },
    methods: {
        storeData(){
            this.form.post(this.route('admin.empleados.store'), {
                errorBag: 'storeData',
                preserveScroll: true,
            })
        }
    }

}

</script>
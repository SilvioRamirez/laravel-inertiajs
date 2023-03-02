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

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="documento_fiscal" show="RIF"></InputLabel>
                                        <TextInput modelValue="documento_fiscal" v-model="form.documento_fiscal"></TextInput>
                                        <InputError :message="form.errors.documento_fiscal" class="mt-2"></InputError>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="nombre1" show="Primer Nombre"></InputLabel>
                                        <TextInput modelValue="nombre1" v-model="form.nombre1"></TextInput>
                                        <InputError :message="form.errors.nombre1" class="mt-2"></InputError>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="nombre2" show="Segundo Nombre"></InputLabel>
                                        <TextInput modelValue="nombre2" v-model="form.nombre2"></TextInput>
                                        <InputError :message="form.errors.nombre2" class="mt-2"></InputError>
                                    </div>
                                    
                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="apellido1" show="Primer Apellido"></InputLabel>
                                        <TextInput modelValue="apellido1" v-model="form.apellido1"></TextInput>
                                        <InputError :message="form.errors.apellido1" class="mt-2"></InputError>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="apellido2" show="Segundo Apellido"></InputLabel>
                                        <TextInput modelValue="apellido2" v-model="form.apellido2"></TextInput>
                                        <InputError :message="form.errors.apellido2" class="mt-2"></InputError>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="sexo" show="Genero"></InputLabel>
                                        <TextInput modelValue="sexo" v-model="form.sexo"></TextInput>
                                        <InputError :message="form.errors.sexo" class="mt-2"></InputError>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="nacionalidad" show="Nacionalidad"></InputLabel>
                                        <TextInput modelValue="nacionalidad" v-model="form.nacionalidad"></TextInput>
                                        <InputError :message="form.errors.nacionalidad" class="mt-2"></InputError>
                                    </div>
                                    
                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="fec_nacimiento" show="Fecha de Nacimiento"></InputLabel>
                                        <DateInput modelValue="fec_nacimiento" v-model="form.fec_nacimiento"></DateInput>
                                        <InputError :message="form.errors.fec_nacimiento" class="mt-2"></InputError>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="lugar_nacimiento" show="Lugar de Nacimiento"></InputLabel>
                                        <TextInput modelValue="lugar_nacimiento" v-model="form.lugar_nacimiento"></TextInput>
                                        <InputError :message="form.errors.lugar_nacimiento" class="mt-2"></InputError>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="estado_civil" show="Estado Civil"></InputLabel>
                                        <TextInput modelValue="estado_civil" v-model="form.estado_civil"></TextInput>
                                        <InputError :message="form.errors.estado_civil" class="mt-2"></InputError>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="fec_estado_civil" show="Fecha de Estado Civil"></InputLabel>
                                        <DateInput modelValue="fec_estado_civil" v-model="form.fec_estado_civil"></DateInput>
                                        <InputError :message="form.errors.fec_estado_civil" class="mt-2"></InputError>
                                    </div>
                                    
                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="email" show="Correo"></InputLabel>
                                        <TextInput modelValue="email" v-model="form.email"></TextInput>
                                        <InputError :message="form.errors.email" class="mt-2"></InputError>
                                    </div>                                    
                                    
                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="foto" show="Foto"></InputLabel>
                                        <TextInput modelValue="foto" v-model="form.foto"></TextInput>
                                        <InputError :message="form.errors.foto" class="mt-2"></InputError>
                                    </div> 

                                    

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="tipo_persona" show="Tipo Persona"></InputLabel>
                                        <TextInput modelValue="tipo_persona" v-model="form.tipo_persona"></TextInput>
                                        <InputError :message="form.errors.tipo_persona" class="mt-2"></InputError>
                                    </div> 

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="num_estatus" show="Numero de Estatus"></InputLabel>
                                        <TextInput modelValue="num_estatus" v-model="form.num_estatus"></TextInput>
                                        <InputError :message="form.errors.num_estatus" class="mt-2"></InputError>
                                    </div> 

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="gruposangre" show="Grupo de Sangre"></InputLabel>
                                        <TextInput modelValue="gruposangre" v-model="form.gruposangre"></TextInput>
                                        <InputError :message="form.errors.gruposangre" class="mt-2"></InputError>
                                    </div> 

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="tipopersona" show="Tipo de Persona"></InputLabel>
                                        <TextInput modelValue="tipopersona" v-model="form.tipopersona"></TextInput>
                                        <InputError :message="form.errors.tipopersona" class="mt-2"></InputError>
                                    </div> 

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="ciudad" show="Ciudad"></InputLabel>
                                        <TextInput modelValue="ciudad" v-model="form.ciudad"></TextInput>
                                        <InputError :message="form.errors.ciudad" class="mt-2"></InputError>
                                    </div>

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="sector" show="Sector"></InputLabel>
                                        <TextInput modelValue="sector" v-model="form.sector"></TextInput>
                                        <InputError :message="form.errors.sector" class="mt-2"></InputError>
                                    </div> 

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="fec_ultima_modificacion" show="Fecha de Ultima Modificación"></InputLabel>
                                        <DateInput modelValue="fec_ultima_modificacion" v-model="form.fec_ultima_modificacion"></DateInput>
                                        <InputError :message="form.errors.fec_ultima_modificacion" class="mt-2"></InputError>
                                    </div> 

                                    <div class="col-span-6 sm:col-span-3">
                                        <InputLabel value="seguridad_usuario" show="Seguridad de Usuario"></InputLabel>
                                        <TextInput modelValue="seguridad_usuario" v-model="form.seguridad_usuario"></TextInput>
                                        <InputError :message="form.errors.seguridad_usuario" class="mt-2"></InputError>
                                    </div> 
                                    
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
import InputError from '@/components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import ActionMessage from '@/Components/ActionMessage.vue';
import { Link } from '@inertiajs/vue3';
import AppLayout from '@/Layouts/AppLayout.vue';
import SexSelect from '@/Components/SexSelect.vue';
import CivilSelect from '@/Components/CivilSelect.vue';
import DateInput from '@/Components/DateInput.vue';


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
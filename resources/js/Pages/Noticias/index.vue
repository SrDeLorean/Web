<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Noticias
            </h2>
        </template>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                    <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert" v-if="$page.flash.message">
                        <div class="flex">
                            <div>
                                <p class="text-sm">{{ $page.flash.message }}</p>
                            </div>
                        </div>
                    </div>
           
                    <button @click="openModal()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Nueva noticia</button>
                    <table id="new" class="table table-bordered display nowrap" cellspacing="0" width="100%">
                        <thead class="thead-dark">
                            <tr class="bg-gray-100">
                                <th scope="col">id</th>
                                <th scope="col">titulo</th>
                                <th scope="col">descripcion</th>
                                <th scope="col">autor</th>
                                <th class="px-4 py-2">Ver</th>
                                <th class="px-4 py-2">Modificar</th>
                                <th class="px-4 py-2">Eliminar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="row in data" :key="row.id">
                                <th scope="row">{{row.id}}</th>
                                <td>{{row.titulo}}</td>
                                <td>{{row.descripcion}}</td>
                                <td>{{row.autor}}</td>
                                <td class="border px-4 py-2">
                                    <button @click="show(row)" class="btn btn-primary">Ver</button>
                                    </td>
                                <td class="border px-4 py-2">
                                    <button @click="edit(row)" class="btn btn-warning">Editar</button>
                                    </td>
                                <td class="border px-4 py-2">
                                    <button @click="deleteRow(row)" class="btn btn-danger">Eliminar</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                 
    
                    
                    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400" v-if="isOpen">
                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <div class="fixed inset-0 transition-opacity">
                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                            </div>
                            <!-- This element is to trick the browser into centering the modal contents. -->
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
                            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                <form>
                                    <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                        <div class="">
                                            <div class="mb-4">
                                                <label for="titulo" class="block text-gray-700 text-sm font-bold mb-2">Titulo:</label>
                                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="titulo" placeholder="titulo" v-model="form.titulo">
                                                <div v-if="$page.errors.titulo" class="text-red-500">{{ $page.errors.titulo[0] }}</div>
                                            </div>
                                            <div class="mb-4">
                                                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripcion:</label>
                                                <textarea class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descripcion" placeholder="descripcion" v-model="form.descripcion"></textarea>
                                                <div v-if="$page.errors.descripcion" class="text-red-500">{{ $page.errors.descripcion[0] }}</div>
                                            </div>
                                            <div class="mb-4">
                                                <label for="autor" class="block text-gray-700 text-sm font-bold mb-2">Autor:</label>
                                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="autor" placeholder="autor" v-model="form.autor">
                                                <div v-if="$page.errors.autor" class="text-red-500">{{ $page.errors.autor[0] }}</div>
                                            </div>
                                            <div class="mb-4">
                                                <label for="foto" class="block text-gray-700 text-sm font-bold mb-2">foto:</label>
                                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="foto" placeholder="foto" v-model="form.foto">
                                                <div v-if="$page.errors.autor" class="text-red-500">{{ $page.errors.autor[0] }}</div>
                                                
                                            </div>
                                            <div class="mb-4">
                                                <label for="valoracion" class="block text-gray-700 text-sm font-bold mb-2">valoracion:</label>
                                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="valoracion" placeholder="0" v-model="form.valoracion">
                                                <div v-if="$page.errors.autor" class="text-red-500">{{ $page.errors.autor[0] }}</div>
                                            </div>
                                            <div class="mb-4">
                                                <label for="cantidad" class="block text-gray-700 text-sm font-bold mb-2">cantidad:</label>
                                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="cantidad" placeholder="0" v-model="form.cantidad">
                                                <div v-if="$page.errors.autor" class="text-red-500">{{ $page.errors.autor[0] }}</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" v-show="!editMode" @click="save(form)">
                                            Save
                                        </button>
                                        </span>
                                        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
                                        <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5" v-show="editMode" @click="update(form)">
                                            Update
                                        </button>
                                        </span>
                                        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
                                        <button @click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                            Cancel
                                        </button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400" v-if="isShow">
                        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                            <div class="fixed inset-0 transition-opacity">
                                <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                            </div>
                            <!-- This element is to trick the browser into centering the modal contents. -->
                            <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
                            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                    <div class="">
                                        <div class="mb-4">
                                            <label for="titulo" class="block text-gray-700 text-sm font-bold mb-2">Titulo: {{form.titulo}}</label>
                                        </div>
                                        <div class="mb-4">
                                            <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">descripcion: {{form.descripcion}}</label>
                                        </div>
                                        <div class="mb-4">
                                            <label for="autor" class="block text-gray-700 text-sm font-bold mb-2">Autor: {{form.autor}}</label>
                                        </div>
                                        <div class="mb-4">
                                            <label for="foto" class="block text-gray-700 text-sm font-bold mb-2">Foto: {{form.foto}}</label>
                                        </div>
                                        <div class="mb-4">
                                            <label for="valoracion" class="block text-gray-700 text-sm font-bold mb-2">Valoracion: {{form.valoracion}}</label>
                                        </div>
                                        <div class="mb-4">
                                            <label for="cantidad" class="block text-gray-700 text-sm font-bold mb-2">Cantidad: {{form.cantidad}}</label>
                                        </div>
                                        <button @click="closeShow()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
                                            Cerrar
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import datatables from 'datatables.net-responsive-bs';
    import $ from 'jquery';
    import axios from 'axios';

    export default {
        components: {
            AppLayout,
        },
        props: ['data', 'errors'],
        data() {
            return {
                editMode: false,
                isOpen: false,
                isShow: false,
                form: {
                    titulo: null,
                    descripcion: null,
                    autor: null,
                    foto: null,
                    valoracion: null,
                    cantidad: null
                },
            }
        },
        mounted(){
            this.mytable();
        },
        methods: {
            mytable(){
                $(document).ready(function() {
                    $('#new').DataTable({
                        responsive: true
                    });
                } );
            },
            openModal: function () {
                this.isOpen = true;
            },
            closeModal: function () {
                this.isOpen = false;
                this.reset();
                this.editMode=false;
            },
            show: function (data) {
                this.form = Object.assign({}, data);
                this.isShow = true;
                this.openShow();
            },
            closeShow: function () {
                this.isShow = false;
                //this.reset();
            },
            reset: function () {
                this.form = {
                    titulo: null,
                    descripcion: null,
                    autor: null,
                    foto: null,
                    valoracion: null,
                    cantidad: null
                }
            },
            save: function (data) {
                this.$inertia.post('/noticias', data)
                this.reset();
                this.closeModal();
                this.editMode = false;
            },
            edit: function (data) {
                this.form = Object.assign({}, data);
                this.editMode = true;
                this.openModal();
            },
            update: function (data) {
                data._method = 'PUT';
                this.$inertia.post('/noticias/' + data.id, data)
                this.reset();
                this.closeModal();
            },
            deleteRow: function (data) {
                if (!confirm('¿Estas seguro que quieres eliminar este elemento?')) return;
                data._method = 'DELETE';
                this.$inertia.post('/noticias/' + data.id, data)
                this.reset();
                this.closeModal();
            }
        }
    }
</script>
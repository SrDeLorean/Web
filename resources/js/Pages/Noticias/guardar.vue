<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Noticias
            </h2>
        </template>

        <div class="py-4">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <table id="new" class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">titulo</th>
                                <th scope="col">descripcion</th>
                                <th scope="col">autor</th>
                                <th scope="col">ver</th>
                                <th scope="col">editar</th>
                                <th scope="col">eliminar</th>                        
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="data in noticias" :key="data.id">
                                <th scope="row">{{data.id}}</th>
                                <td>{{data.titulo}}</td>
                                <td>{{data.descripcion}}</td>
                                <td>{{data.autor}}</td>
                                <td>
                                    <InertiaLink :href="data.show_url">
                                        s
                                    </InertiaLink>
                                </td>
                                <td>
                                    <InertiaLink :href="data.edit_url">
                                        e
                                    </InertiaLink>
                                </td>
                                <td>
                                    <InertiaLink :href="data.destroy_url">
                                        x
                                    </InertiaLink>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import datatables from 'datatables';
    import $ from 'jquery';

    export default {
        props: ['noticias'],
        components: {
            AppLayout,
        },
        mounted(){
            this.mytable();
        },
        methods:{
            mytable(){
                $(document).ready( function () {
                    $('#new').DataTable();
                });
            }
        }
    }
</script>
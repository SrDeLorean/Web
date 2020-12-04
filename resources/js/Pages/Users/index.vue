<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Usuarios
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
                      <table id="table_id" class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">titulo</th>
                                <th scope="col">descripcion</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="data in users" :key="data.id">
                                <th scope="row">{{data.id}}</th>
                                <td>{{data.name}}</td>
                                <td>{{data.email}}</td>
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
        props: ['users'],
        components: {
            AppLayout,
        },
        mounted(){
            this.mytable();
        },
        methods:{
            mytable(){
                $(document).ready( function () {
                    $('#table_id').DataTable({
                        responsive: true
                    });
                });
            }
        }
    }
</script>
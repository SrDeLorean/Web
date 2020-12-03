<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Noticias
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <table class="table">
                        <thead>
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
                            <tr v-for="data in pageOfItems" :key="data.id">
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
                                    <InertiaLink :href="data.delete_url">
                                        x
                                    </InertiaLink>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="card-footer pb-0 pt-3">
                        <jw-pagination :items="noticias" @changePage="onChangePage"></jw-pagination>
                    </div>
                </div>
            </div>
        </div>

    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'

    export default {
        props: ['noticias'],
        pageOfItems: [],

        components: {
            AppLayout,
        },
        methods: {
            onChangePage(pageOfItems) {
                // update page of items
                this.pageOfItems = pageOfItems;
            }
        }
    }
    
</script>
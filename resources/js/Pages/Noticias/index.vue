<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Noticias
            </h2>
        </template>

     
                    <vuetable ref="vuetable"
                        :api-mode="false"
                        :data="noticias"
                        :fields="['id', 'titulo', 'descripcion', 'autor']"
                        pagination-path="id"
                    ></vuetable>


    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Vuetable from 'vuetable-2'

    export default {
        props: ['noticias'],
        pageOfItems: [],

        components: {
            AppLayout,
            Vuetable
        },
        methods: {
            onChangePage(pageOfItems) {
                // update page of items
                this.pageOfItems = pageOfItems;
            }
        }
    }
    
</script>

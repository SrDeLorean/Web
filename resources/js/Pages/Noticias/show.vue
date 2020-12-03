<template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <table class="table">
                        {{noticia}}
                    </table>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        props: ['noticia']
    }
</script>
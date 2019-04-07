<template>
    <v-toolbar flat>
        Список лендингов
        <v-spacer></v-spacer>
        <v-toolbar-items>
            <v-btn flat>
                <v-icon color="primary" left>add_circle</v-icon>
                Создать
            </v-btn>
        </v-toolbar-items>
    </v-toolbar>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<template>
    <v-toolbar flat>
        Список лендингов
        <v-spacer></v-spacer>
        <v-toolbar-items>
            <v-text-field
                single-line
                label="Название"
                v-model="name"
            ></v-text-field>
            <v-divider class="mx-3" inset vertical></v-divider>
            <v-text-field
                single-line
                label="Путь"
                v-model="route"
            ></v-text-field>
            <v-btn @click="add" flat>
                <v-icon color="primary" left>add_circle</v-icon>
                Создать
            </v-btn>
        </v-toolbar-items>
    </v-toolbar>
</template>

<script>
    export default {
        data: () => ({
            name: '',
            route: '',
            load: false,
        }),
        methods: {
            add () {
                axios.post('/api/add/landing', {name: this.name, route: this.route}).then(response => {
                    this.$emit('uploadData');
                });
            }
        }
    }
</script>

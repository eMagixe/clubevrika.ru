<template>
    <v-content>
      <v-container fluid fill-height>
        <v-layout align-center justify-center>
            <v-progress-circular
            v-if="load"
            :size="50"
            color="primary"
            indeterminate
            ></v-progress-circular>
            <v-flex v-if="!load" xs12 sm8 md4>
                <v-card class="elevation-12">
                <v-toolbar dark color="primary">
                    <v-toolbar-title>Вход</v-toolbar-title>
                </v-toolbar>
                <v-card-text>
                    <v-form>
                        <v-text-field v-model="email" prepend-icon="alternate_email" name="email" label="E-mail" type="email"></v-text-field>
                        <v-text-field @keyup.enter="login" v-model="password" prepend-icon="lock" name="password" label="Пароль" type="password"></v-text-field>
                    </v-form>
                </v-card-text>
                <v-card-actions>
                    <v-spacer></v-spacer>
                    <v-btn @click="login" color="primary">Войти</v-btn>
                </v-card-actions>
                </v-card>
            </v-flex>
        </v-layout>
      </v-container>
    </v-content>
</template>

<script>
export default {
    data: () => ({
        email: '',
        password: '',
        load: false,
    }),
    props: {
        token: String,
    },
    methods: {
        login () {
            this.load = true;
            axios.post('/login', { _token: this.token, email: this.email, password: this.password })
                .then((response)=>{
                    window.location.href = '/';
                }).catch((error)=>{
                    console.log(error.message);
                    this.load = false;
                });
        },
    },
};
</script>
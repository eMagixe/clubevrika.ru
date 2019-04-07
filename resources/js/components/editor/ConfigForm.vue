<template>
<form>
    <v-text-field :label="text.label" :value="text.values" v-for="text in options.textInputs" :key="text.name"></v-text-field>
    <v-select :items="select.values" v-for="select in options.selectInputs" :key="select.name"></v-select>
    <v-checkbox></v-checkbox>
    <v-btn @click="">Сохранить</v-btn>
    <v-btn @click="">Очистить</v-btn>
  </form>
</template>

<script>
    export default {
      props: {
        options: Object
      }
    }
</script>
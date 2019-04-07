<template>
  <div>
  <landing-toolbar @uploadData="upload"></landing-toolbar>
  <v-data-table
    :headers="headers"
    :items="landings"
    class="elevation-1"
    rows-per-page-text="Показывать"
  >
    <template v-slot:items="props">
      <td>{{ props.item.name }}</td>
      <td class="text-xs-center">
        <a :href="'/landing/'+props.item.route">{{ props.item.route }}</a>
      </td>
      <td class="text-xs-center">{{ props.item.updated_at }}</td>
      <td class="text-xs-center">{{ props.item.created_at }}</td>
      <td class="text-xs-center">
        <v-btn :href="'/editor/' + props.item.id" fab flat dark small color="primary">
          <v-icon dark>edit</v-icon>
        </v-btn>
      </td>
    </template>
    <template v-slot:pageText="props">
      Показано: {{ props.pageStart }} - {{ props.pageStop }} из {{ props.itemsLength }}
    </template>
  </v-data-table>
  </div>
</template>

<script>
  import axios from 'axios';
  import LandingToolbar from './LandingToolbar.vue';

  export default {
    data () {
      return {
        headers: [
          {
            text: 'Название',
            align: 'left',
            sortable: false,
            value: 'name'
          },
          { text: 'Путь', align: 'center', value: 'route' },
          { text: 'Обновлен', align: 'center', value: 'updated_at' },
          { text: 'Создан', align: 'center', value: 'created_at' },
          { text: '', align: 'center', value: '' },
        ],
        landings: []
      }
    },
    created () {
      this.upload();
    },
    methods: {
      upload () {
        axios.get('/api/all/landings').then(response => {
          this.landings = response.data;
        }).catch(e => {
          console.error(e.message);
        });
      }
    },
    components: {
      'landing-toolbar': LandingToolbar
    }
  }
</script>

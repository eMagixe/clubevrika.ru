<template>
<div>
<v-toolbar flat color="primary lighten-1" dark>
    <v-spacer></v-spacer>
    <v-toolbar-items>
        <v-btn @click="update" flat>
            <v-icon left>save</v-icon>
            Сохранить
        </v-btn>
    </v-toolbar-items>
</v-toolbar>
<v-layout align-space-between justify-space-between row fill-height>
  <v-navigation-drawer>
  <v-toolbar flat>
    <v-list>
      <v-list-tile>
        <v-list-tile-title class="title">
          Список
        </v-list-tile-title>
      </v-list-tile>
    </v-list>
  </v-toolbar>
  <v-divider></v-divider>
  <v-list>
    <template>
      
    <draggable v-model="sections" group="tags" @start="drag=true" @end="drag=false">
      <v-list-tile @click="setOptions(item.options)" v-for="(item, i) in sections" :key="item.id">
        <v-list-tile-action>
            <v-icon>code</v-icon>
        </v-list-tile-action>
        <v-list-tile-content>
            <v-list-tile-title>
                {{ item.name }}
            </v-list-tile-title>
        </v-list-tile-content>
      </v-list-tile>
    </draggable>

    </template>
  </v-list>
  </v-navigation-drawer>
  <v-navigation-drawer>
  <v-toolbar flat>
    <v-list>
      <v-list-tile>
        <v-list-tile-title class="title">
          Лендинг
        </v-list-tile-title>
      </v-list-tile>
    </v-list>
  </v-toolbar>
  <v-divider></v-divider>
  <v-list>
    <template>
 
    <draggable v-model="structure" group="tags" @start="drag=true" @end="drag=false">
      <v-list-tile @click="setOptions(item.options)" v-for="(item, i) in structure" :key="item.id">
        <v-list-tile-action>
            <v-icon>code</v-icon>
        </v-list-tile-action>
        <v-list-tile-content>
            <v-list-tile-title>
                {{ item.name }}
            </v-list-tile-title>
        </v-list-tile-content>
      </v-list-tile>
    </draggable>

    </template>
  </v-list>
  </v-navigation-drawer>
  <v-card>
    <v-container
      fluid
      grid-list-lg
    >
    <config-form :options="currentOptions"></config-form>
  </v-container>
  </v-card>
</v-layout>
</div>
</template>

<script>
import draggable  from "vuedraggable";
import ConfigForm from "./ConfigForm.vue";
import Section from './classes/Section';

export default {
    data: () => ({
        sections: [
          new Section(0, 'Новая панель', 'nav-bar').addOption('name', 'Имя', 'text', 'Max'),
          new Section(1, 'Вторая панель', 'nav2-bar').addOption('name', 'Имя', 'text', 'Max2'),
        ],
        structure: [],
        currentOptions: {}
    }),
    props: ['landing_id'],
    methods:{
      setOptions (options) {
        this.currentOptions = options;        
      },
      update () {
        axios.post('/api/landing/update', {id: this.landing_id, data: this.structure});
      }
    },
    components: {
        draggable,
        'config-form': ConfigForm,
    }
}
</script>

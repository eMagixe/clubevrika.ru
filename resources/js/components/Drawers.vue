<template>
  <v-navigation-drawer
    class="primary lighten-2"
    dark
  >
    <v-list>
      <v-list-tile
        v-for="item in items"
        :key="item.title"
        :href="item.url"
      >
        <v-list-tile-action>
          <v-icon>{{ item.icon }}</v-icon>
        </v-list-tile-action>

        <v-list-tile-content>
          <v-list-tile-title>{{ item.title }}</v-list-tile-title>
        </v-list-tile-content>
      </v-list-tile>
    </v-list>
  </v-navigation-drawer>
</template>

<script>
  export default {
    data () {
      return {
        items: [
            { title: 'Лендинги', icon: 'view_list', url: '/landings' },
            { title: 'Пользователи', icon: 'account_box', url: '/home' },
            { title: 'Настройки', icon: 'build', url: '#' },
        ]
      }
    }
  }
</script>

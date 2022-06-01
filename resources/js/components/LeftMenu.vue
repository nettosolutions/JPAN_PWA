<template>
  <v-card>
    <v-navigation-drawer
      absolute
      permanent
      left
    >
      <template v-slot:prepend>
        <v-list-item two-line>
          <v-list-item-avatar>
            <img src="https://randomuser.me/api/portraits/women/81.jpg">
          </v-list-item-avatar>

          <v-list-item-content>
            <v-list-item-title>Jane Smith</v-list-item-title>
            <v-list-item-subtitle>Logged In</v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>
      </template>

      <v-divider></v-divider>

      <v-list dense class="pa-6">
        <v-list-item
          v-for="item in items"
          :key="item.title"
        >
          <!-- <v-list-item-icon>
            <v-icon>{{ item.icon }}</v-icon>
          </v-list-item-icon> -->

          <v-list-item-content class="pa-6">
            <v-list-item-title style="padding: 2% 0;">{{ item.title }}</v-list-item-title>
            <br />
          </v-list-item-content>
        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </v-card>
</template>
<script>
    export default {
        data () {
        return {
            items: [
            { title: 'Main', icon: 'mdi-home-city' },
            { title: 'Employees', icon: 'mdi-account' },
            { title: 'Administration', icon: 'mdi-account-group-outline' },
            { title: 'Reporting', icon: 'mdi-account-group-outline' },
            { title: 'Applications', icon: 'mdi-account-group-outline' },
            { title: 'Recruitment', icon: 'mdi-account-group-outline' },
            ],
        }
        },
    }
</script>
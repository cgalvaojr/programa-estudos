<template>
  <v-app>
    <v-navigation-drawer
      app
    >
      <v-list
        dense
        expand
      >
        <v-list-item>
          <v-list-item-avatar>
            <img src="../src/assets/logo.svg">
          </v-list-item-avatar>

          <v-list-item-content>
            <v-list-item-title>Bem-vindo ao GranCursos</v-list-item-title>
            <v-list-item-subtitle>usuario.teste@gmail.com</v-list-item-subtitle>
          </v-list-item-content>
        </v-list-item>

        <v-divider></v-divider>

        <template>
          <v-list-item-group v-model="menuSelecionado" color="primary">
            <v-list-item
              v-for="(item, key) in menus"
              :key="key"
              subheader
              class="mt-2"
              link

            >
              <v-list-item-icon>
                <v-icon>{{ item.icon }}</v-icon>
              </v-list-item-icon>
              <v-list-item-content>{{ item.title }}</v-list-item-content>

            </v-list-item>
          </v-list-item-group>

        </template>
      </v-list>

    </v-navigation-drawer>
    <v-app-bar app>
      <v-toolbar-title class="headline text-uppercase">
        <span class="primary--text">Grancursos</span>
        <span class="font-weight-light"> Programa de estudos</span>
      </v-toolbar-title>
      <v-spacer></v-spacer>
    </v-app-bar>

    <v-content>
        <ProgramaEstudos />
    </v-content>

    <v-footer inset app>
      <span>®GranCursos 2021</span>
    </v-footer>
  </v-app>
</template>

<script>
import ProgramaEstudos from "./containers/ProgramaEstudos";

export default {
  name: 'App',
  components: {
    ProgramaEstudos,
  },
  data: () => ({
    menuSelecionado: 0,
    menus : [
      {title: 'Programa de estudos', icon : 'mdi-school'}
    ]
  }),
};
</script>

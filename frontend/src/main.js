import Vue from 'vue';
import App from './App.vue';
import store from './store';
import vuetify from './plugins/vuetify';

Vue.config.productionTip = false;

// Vue.use(Vuex);

new Vue({
  vuetify,
  store,
  render: h => h(App)
}).$mount('#app');

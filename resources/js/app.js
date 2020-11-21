require('./bootstrap');

window.Vue = require('vue');

const Vuetify = require('vuetify')
const VueSweetalert2 = require('vue-sweetalert2');
import { TiptapVuetifyPlugin } from 'tiptap-vuetify'

require('sweetalert2/dist/sweetalert2.min.css')
require('tiptap-vuetify/dist/main.css')
require('vuetify/dist/vuetify.min.css')
import colors from 'vuetify/lib/util/colors'
Vue.use(VueSweetalert2);
Vue.use(Vuetify)

const vuetify = new Vuetify({
    theme: { dark: true },
    light: {
        primary: colors.purple,
        secondary: colors.grey.darken1,
        accent: colors.shades.black,
        error: colors.red.accent3,
      },
      dark: {
        primary: colors.blue.lighten3,
      },
})

Vue.use(TiptapVuetifyPlugin, {
    // the next line is important! You need to provide the Vuetify Object to this place.
    vuetify, // same as "vuetify: vuetify"
    // optional, default to 'md' (default vuetify icons before v2.0.0)
    iconsGroup: 'mdi'
})

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))
Vue.component('auth-component', require('./components/AuthComponent.vue').default);
//Vue.component('add-game', require('./components/game/AddGame.vue').default);
//Vue.component('edit-game', require('./components/game/EditGame.vue').default);
//Vue.component('add-game-review', require('./components/game/AddGameReview.vue').default);
//Vue.component('add-game-playlist', require('./components/game/AddGamePlaylist.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    vuetify,
    el: '#app',
    data: () => ({
        drawer: false,
    }),
})
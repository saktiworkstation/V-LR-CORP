import './bootstrap';
import 'admin-lte/dist/css/adminlte.css';

import { createApp } from 'vue';
import App from './App.vue'
import Dashboard from './dashboard.vue'
import router from '../router'

import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'

library.add(fas, fab, far)

createApp(App).use(router).component("fa", FontAwesomeIcon).mount('#app')
createApp(Dashboard).use(router).component("fa", FontAwesomeIcon).mount('#admin-page')

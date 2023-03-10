import './bootstrap';

import {createApp} from 'vue/dist/vue.esm-bundler';

import axios from 'axios'

import VueAxios from 'vue-axios'

import SelectMessageType from './components/SelectMessageType.vue'

const global_app = createApp({
    components:{
        SelectMessageType,
    },
})

global_app.use(VueAxios, axios)
global_app.mount("#global_app")

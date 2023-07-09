require('./bootstrap');

import { createApp } from 'vue';
import ApodComponent from './components/ApodComponent.vue';
import PastImageComponent from './components/PastImageComponent.vue';
import BackButtonComponent from './components/BackButtonComponent.vue';
import ChangeBgButtonComponent from './components/ChangeBgButtonComponent.vue';
import moment from 'moment';

const app = createApp({});

app.component('apod-component', ApodComponent);
app.component('past-image-component', PastImageComponent);
app.component('button-component', BackButtonComponent);
app.component('change-bg-button-component', ChangeBgButtonComponent);

app.config.globalProperties.$moment = moment;

app.mount('#app');
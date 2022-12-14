import './bootstrap';
import '../css/app.css';
import 'flowbite';
import 'flowbite/dist/datepicker.js'

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { library } from '@fortawesome/fontawesome-svg-core';
import { fas } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

library.add(fas);

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            
            .use(ZiggyVue, Ziggy)
            .component('fa', FontAwesomeIcon)

            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });

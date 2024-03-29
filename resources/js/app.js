import { createApp, h } from 'vue';
import { createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import Layout from './Shared/Layout.vue';
import 'bootstrap';
import loadsh from 'lodash';

window._ = loadsh;

const app = createInertiaApp({
    resolve: async name => {
        // let page = (await import(`./Pages/${name}`)).default;

        let page = require(`./Pages/${name}`).default;

        if (page.layout === undefined) {
            page.layout = Layout;
        }

        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({
            render: () => h(App, props)
        })
            .use(plugin)
            .component('Link', Link)
            .component('Head', Head)
            .mount(el);
    },
    title: title => `Inertia App | ${title}`
});

InertiaProgress.init({
    color: 'blue',
    showSpinner: true
});
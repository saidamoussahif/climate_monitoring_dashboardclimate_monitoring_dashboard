import { createApp, h } from 'vue';
import { InertiaApp } from '@inertiajs/inertia-vue3';



Vue.component('Chart', Chart);
Vue.component('Card', Card);

const props = {
    initialPage: JSON.parse(app.dataset.page),

    resolveComponent: (name) => {
        const page = require(`./Pages/${name}`).default;
        page.layout = page.layout || (({ children }) => h(Fragment, children));
        return page;
    },
};

const app = document.getElementById("app");

createApp({ render: () => h(InertiaApp, props) })
    .use(InertiaApp)
    .mount(app);
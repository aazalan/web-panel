import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/vue3'
import { DefineComponent } from 'vue';

createInertiaApp({
    resolve: async (name):  Promise<DefineComponent> => {
        const pages = import.meta.glob('./pages/**/*.vue', { eager: true })
        const page = pages[`./pages/${name}.vue`];
        return (await page as { default: DefineComponent }).default;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el)
    },
});

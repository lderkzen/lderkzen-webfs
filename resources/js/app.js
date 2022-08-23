import { createApp, h } from 'vue'
import {createInertiaApp, Head, Link } from '@inertiajs/inertia-vue3'
import Layout from "./CashRegister/Shared/Layout"

createInertiaApp({
    resolve: async name => {
        const page = (await import(`./CashRegister/Pages/${name}`)).default

        if (page.layout === undefined)
            page.layout = Layout

        return page
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component('Head', Head)
            .component('Link', Link)
            .mount(el)
    },
    title: title => `${title ? title + ' | ' : ''}De Gouden Draak`
})

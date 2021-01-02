import { App } from '@inertiajs/inertia-svelte';
import { InertiaProgress } from '@inertiajs/progress';

let el = document.getElementById('app');

InertiaProgress.init();

new App({
    target: el,
    props: {
        initialPage: JSON.parse(el.dataset.page),
        resolveComponent: name => import(`./pages/${name}.svelte`),
    },
});

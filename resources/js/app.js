import { App } from '@inertiajs/inertia-svelte';
import { InertiaProgress } from '@inertiajs/progress';
import * as helpers from '~/helpers';

if (typeof window === 'undefined') {
    global.Refresher = helpers;
} else {
    window.Refresher = helpers;
}

let el = document.getElementById('app');

InertiaProgress.init();

new App({
    target: el,
    props: {
        initialPage: JSON.parse(el.dataset.page),
        resolveComponent: (name) => import(`./Pages/${name}.svelte`),
    },
});

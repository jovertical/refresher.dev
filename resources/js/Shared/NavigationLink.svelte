<script>
    import { InertiaLink } from '@inertiajs/inertia-svelte';
    import cx from 'classnames';

    export let route;

    let active = window.route().current(route + '*');

    let classes = {
        root: cx(
            'block px-3 py-2 rounded-md font-medium',
            {
                'bg-gray-900 text-white': active,
                'text-gray-300 hover:bg-gray-700 hover:text-white': !active,
            },
            $$props.class,
        ),
    };
</script>

<InertiaLink href="{window.route(route)}" class="{classes.root}">
    <slot />
</InertiaLink>

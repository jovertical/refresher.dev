<script>
    import { InertiaLink } from '@inertiajs/inertia-svelte';
    import cx from 'classnames';
    import Icon from '~/Shared/Icon';

    export let route;
    export let params = {};
    export let icon;

    let active = window.route().current(route + '*');

    let classes = {
        root: cx(
            'group rounded-md px-3 py-2 flex items-center text-sm font-medium',
            {
                'bg-gray-50 text-indigo-600 hover:bg-white': active,
                'text-gray-900 hover:text-gray-900 hover:bg-gray-50': !active,
            },
            $$props.clas,
        ),

        icon: cx('flex-shrink-0 -ml-1 mr-3', {
            'text-indigo-500': active,
            'text-gray-400 group-hover:text-gray-500': !active,
        }),
    };
</script>

<InertiaLink href="{window.route(route, params)}" class="{classes.root}">
    <Icon class="{classes.icon}" name="{icon}" />

    <span class="truncate">
        <slot />
    </span>
</InertiaLink>

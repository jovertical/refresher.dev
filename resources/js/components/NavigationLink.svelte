<script>
    import { InertiaLink } from '@inertiajs/inertia-svelte';
    import Icon from '~/components/Icon';

    export let icon;
    export let link;
    export let text;
    export let compact = false;

    let route = window.route;

    let active = route().current(link + '*');
</script>

<InertiaLink
    href="{route(link)}"
    class="group flex items-center px-2 py-2 {compact ? 'text-sm' : 'text-base'} font-medium rounded-md {active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white'}"
>
    <Icon class="text-gray-300 {compact ? 'mr-3' : 'mr-4'}" name="{icon}" />
    <span>{text}</span>
</InertiaLink>

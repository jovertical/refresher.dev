<script>
    import { InertiaLink } from '@inertiajs/inertia-svelte';

    export let route;
</script>

<InertiaLink href="{window.route(route)}" {...$$props}>
    <slot />
</InertiaLink>

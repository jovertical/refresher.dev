<script>
    import { createEventDispatcher } from 'svelte';
    import cx from '~/directives/cx';

    let dispatch = createEventDispatcher();

    export let name;
    export let rows = 3;
    export let hasError = false;

    $: props = (({ name, rows, hasError, ...other }) => other)($$props);

    function handleChange(event) {
        dispatch('change', {
            name: event.target.name,
            value: event.target.value,
        });
    }
</script>

<textarea
    class="max-w-none sm:max-w-lg shadow-sm block w-full sm:text-sm rounded-md {$$props.class}"
    use:cx="{{
        'focus:ring-indigo-500 focus:border-indigo-500 border-gray-300': !hasError,
        'border-red-300 text-red-900 focus:ring-red-500 focus:border-red-500': hasError,
    }}"
    id="{name}"
    name="{name}"
    rows="{rows}"
    {...props}
    aria-invalid="{hasError}"
    aria-describedby="{name + '-error'}"
    on:change="{handleChange}">{$$props.value}</textarea>

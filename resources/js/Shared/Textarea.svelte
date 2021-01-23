<script>
    import { createEventDispatcher } from 'svelte';
    import cx from 'classnames';

    let dispatch = createEventDispatcher();

    export let name;
    export let value;
    export let rows = 3;
    export let hasError;

    let classes = {
        root: cx('max-w-lg shadow-sm block w-full sm:text-sm rounded-md', {
            'focus:ring-indigo-500 focus:border-indigo-500 border-gray-300': !hasError,
            'border-red-300 text-red-900 focus:ring-red-500 focus:border-red-500': hasError,
        }),
    };

    function handleChange(event) {
        dispatch('change', {
            name: event.target.name,
            value: event.target.value,
        });
    }
</script>

<textarea
    id="{name}"
    name="{name}"
    rows="{rows}"
    aria-invalid="{hasError}"
    aria-describedby="{name + '-error'}"
    on:change="{handleChange}"
    class="{classes.root}">{value}</textarea>

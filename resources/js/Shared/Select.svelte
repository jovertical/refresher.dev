<script>
    import { createEventDispatcher } from 'svelte';
    import cx from 'classnames';

    let dispatch = createEventDispatcher();

    export let name = '';
    export let hasError;

    function handleChange(event) {
        dispatch('change', {
            name: event.target.name,
            value: event.target.value,
        });
    }

    let classes = {
        root: cx(
            'block max-w-lg w-full shadow-sm sm:max-w-xs sm:text-sm rounded-md',
            {
                'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500': !hasError,
                'border-red-300 focus:border-red-500 focus:ring-red-500': hasError,
            },
        ),
    };
</script>

<select
    id="{name}"
    name="{name}"
    autocomplete="{name}"
    on:blur="{handleChange}"
    class="{classes.root}">
    <slot />
</select>

<script>
    import { createEventDispatcher } from 'svelte';
    import cx from '~/directives/cx';

    let dispatch = createEventDispatcher();

    export let name = '';
    export let hasError;

    function handleChange(event) {
        dispatch('change', {
            name: event.target.name,
            value: event.target.value,
        });
    }
</script>

<select
    class="block max-w-lg w-full shadow-sm sm:max-w-xs sm:text-sm rounded-md"
    use:cx="{{
        'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500': !hasError,
        'border-red-300 focus:border-red-500 focus:ring-red-500': hasError,
    }}"
    id="{name}"
    name="{name}"
    autocomplete="{name}"
    on:blur="{handleChange}">
    <slot />
</select>

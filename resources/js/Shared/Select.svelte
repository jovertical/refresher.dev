<script>
    import { createEventDispatcher } from 'svelte';

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
    id="{name}"
    name="{name}"
    autocomplete="{name}"
    on:blur="{handleChange}"
    class="block max-w-lg w-full shadow-sm sm:max-w-xs sm:text-sm rounded-md"
    class:border-gray-300="{!hasError}"
    class:focus:border-indigo-500="{!hasError}"
    class:focus:ring-indigo-500="{!hasError}"
    class:border-red-300="{hasError}"
    class:focus:border-red-500="{hasError}"
    class:focus:ring-red-500="{hasError}">
    <slot />
</select>

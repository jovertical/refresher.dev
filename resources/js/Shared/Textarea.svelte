<script>
    import { createEventDispatcher } from 'svelte';

    let dispatch = createEventDispatcher();

    export let name;
    export let value;
    export let rows = 3;
    export let hasError;

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
    class="max-w-lg shadow-sm block w-full sm:text-sm rounded-md"
    class:focus:ring-indigo-500="{!hasError}"
    class:focus:border-indigo-500="{!hasError}"
    class:border-gray-300="{!hasError}"
    class:border-red-300="{hasError}"
    class:text-red-900="{hasError}"
    class:focus:ring-red-500="{hasError}"
    class:focus:border-red-500="{hasError}">{value}</textarea>

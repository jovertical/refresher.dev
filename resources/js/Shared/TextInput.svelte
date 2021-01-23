<script>
    import { createEventDispatcher } from 'svelte';
    import FilledIcon from '~/Shared/FilledIcon';

    let dispatch = createEventDispatcher();

    export let type = 'text';
    export let name;
    export let value;
    export let hasError;

    function handleChange(event) {
        dispatch('change', {
            name: event.target.name,
            value: event.target.value,
        });
    }
</script>

<div class="relative">
    <input
        id="{name}"
        type="{type}"
        name="{name}"
        aria-invalid="{hasError}"
        aria-describedby="{name + '-error'}"
        value="{value}"
        on:change="{handleChange}"
        class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none sm:text-sm"
        class:focus:ring-indigo-500="{!hasError}"
        class:focus:border-indigo-500="{!hasError}"
        class:pr-10="{hasError}"
        class:border-red-300="{hasError}"
        class:text-red-900="{hasError}"
        class:placeholder-red-300="{hasError}"
        class:focus:ring-red-500="{hasError}"
        class:focus:border-red-500="{hasError}" />

    {#if hasError}
        <div
            class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
            <FilledIcon
                class="text-red-500"
                name="exclamation-circle"
                size="small" />
        </div>
    {/if}
</div>

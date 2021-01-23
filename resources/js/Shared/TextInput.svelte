<script>
    import FilledIcon from '~/Shared/FilledIcon';
    import FormError from '~/Shared/FormError';
    import FormLabel from '~/Shared/FormLabel';

    export let onChange;
    export let label;
    export let type = 'text';
    export let name;
    export let error;

    $: props = (({ onChange, label, type, name, errors, ...other }) => other)(
        $$props,
    );
</script>

<div>
    {#if label}
        <FormLabel for="{name}" value="{label}" />
    {/if}

    <div class="mt-1 relative rounded-md shadow-sm">
        <input
            id="{name}"
            type="{type}"
            name="{name}"
            aria-invalid="{!!error}"
            aria-describedby="{name + '-error'}"
            {...props}
            on:change="{onChange}"
            class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none sm:text-sm"
            class:focus:ring-indigo-500="{!error}"
            class:focus:border-indigo-500="{!error}"
            class:pr-10="{error}"
            class:border-red-300="{error}"
            class:text-red-900="{error}"
            class:placeholder-red-300="{error}"
            class:focus:ring-red-500="{error}"
            class:focus:border-red-500="{error}" />

        {#if error}
            <div
                class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <FilledIcon
                    class="text-red-500"
                    name="exclamation-circle"
                    size="small" />
            </div>
        {/if}
    </div>

    {#if error}
        <FormError name="{name}" value="{error}" />
    {/if}
</div>

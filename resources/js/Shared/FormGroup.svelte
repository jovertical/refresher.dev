<script>
    import cx from '~/directives/cx';
    import FormDescription from '~/Shared/FormDescription';
    import FormError from '~/Shared/FormError';
    import FormLabel from '~/Shared/FormLabel';

    export let name;
    export let label;
    export let description;
    export let error;
</script>

<div {...$$props}>
    {#if label}
        <FormLabel name="{name}" value="{label}" />
    {/if}

    <div use:cx="{{ 'mt-1': !!label }}">
        <slot />
    </div>

    {#if description && !error}
        <FormDescription class="mt-2" name="{name}" value="{description}" />
    {/if}

    {#if error}
        <FormError class="mt-1" name="{name}" value="{error}" />
    {/if}
</div>

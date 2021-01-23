<script>
    import StepperItem from '~/Shared/StepperItem';

    export let steps = [];
    export let current = 0;
</script>

<nav aria-label="Progress">
    <ol class="overflow-hidden">
        {#each steps as step, key}
            <StepperItem
                step="{key + 1}"
                current="{current}"
                total="{steps.length}"
                {...step} />
        {/each}
    </ol>
</nav>

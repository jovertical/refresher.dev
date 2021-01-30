<script>
    import StepperItem from '~/Shared/StepperItem';

    export let steps = [];
    export let current = 0;
</script>

<nav class="flex" aria-label="Progress">
    <ol class="space-y-6">
        {#each steps as step, key}
            <StepperItem step="{key + 1}" current="{current}" title="{step}" />
        {/each}
    </ol>
</nav>

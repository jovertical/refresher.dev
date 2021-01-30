<script>
    import Stepper from '~/Shared/Stepper';

    export let step = 1;

    let steps = ['Refresher Information', 'Items', 'Preview'];
</script>

<div class="space-y-6 lg:col-start-1 lg:col-span-1 p-5 hidden lg:block">
    <Stepper current="{step}" steps="{steps}" />
</div>

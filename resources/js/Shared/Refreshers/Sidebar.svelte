<script>
    import Stepper from '~/Shared/Stepper';

    let steps = [
        {
            title: 'Refresher Information',
            description: 'Describe the refresher & select the skills',
        },

        {
            title: 'Items',
            description: 'Set up to 20 items',
        },

        {
            title: 'Preview',
            description: 'You can experience how others take this refresher',
        },
    ];
</script>

<div class="space-y-6 lg:col-start-1 lg:col-span-1 p-5">
    <Stepper current="{1}" steps="{steps}" />
</div>

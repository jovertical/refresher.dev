<script>
    import Stepper from '~/Shared/Stepper';

    let steps = [
        {
            title: 'Refresher Information',
            description: 'Basic refresher details',
        },

        {
            title: 'Skills',
            description: 'You can select up to 5 skills',
        },

        {
            title: 'Items',
            description: 'You can select up to 20 items',
        },

        {
            title: 'Access & Sharing',
            description: 'Set who can take the refresher',
        },
    ];
</script>

<div class="space-y-6 lg:col-start-1 lg:col-span-1 p-5">
    <Stepper current="{1}" steps="{steps}" />
</div>

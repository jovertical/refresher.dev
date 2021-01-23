<script>
    import App from '~/Shared/Layouts/App';
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

<App>
    <div
        class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
        <div class="space-y-6 lg:col-start-1 lg:col-span-1 p-5">
            <Stepper current="{1}" steps="{steps}" />
        </div>

        <div
            class="lg:col-start-2 lg:col-span-2 border-4 border-dashed border-gray-200 rounded-lg h-96">
            <!--  -->
        </div>
    </div>
</App>

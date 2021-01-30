<script>
    import Button from '~/Shared/Button';
    import App from '~/Shared/Layouts/App';
    import Sidebar from '~/Shared/Refreshers/Sidebar';
</script>

<App>
    <div
        class="lg:mt-4 max-w-3xl mx-auto px-0 lg:px-16 grid grid-cols-1 gap-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-4">
        <Sidebar step="{3}" />

        <div class="col-start-1 lg:col-start-2 col-span-4 lg:col-span-3">
            <section aria-labelledby="refresher_items">
                <div class="shadow sm:rounded-md sm:overflow-hidden">
                    <div class="bg-white py-6 px-4 sm:p-6 h-96">
                        <!-- Content here -->
                    </div>
                </div>

                <div class="pt-5 px-5 sm:px-0">
                    <div class="flex justify-end">
                        <Button variant="secondary">Prev</Button>
                        <Button class="ml-3">Finish</Button>
                    </div>
                </div>
            </section>
        </div>
    </div>
</App>

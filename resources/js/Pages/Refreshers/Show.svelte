<script>
    import Button from '~/Shared/Button';
    import App from '~/Shared/Layouts/App';

    export let refresher = {};
</script>

<App title="Refresher Details">
    <!-- Page header -->
    <div
        class="max-w-3xl mx-auto px-4 sm:px-0 md:flex md:items-center md:justify-between md:space-x-5 lg:max-w-7xl">
        <div class="flex items-center space-x-5">
            <div>
                <h1 class="text-2xl font-bold text-gray-900">
                    {refresher.title}
                </h1>

                <p class="text-sm font-medium text-gray-500">
                    Created on
                    <time
                        class="text-gray-900"
                        datetime="{refresher.date.created_at.value}">
                        {refresher.date.created_at.text}
                    </time>
                </p>
            </div>
        </div>

        <div
            class="mt-6 flex flex-col-reverse justify-stretch space-y-4 space-y-reverse sm:flex-row-reverse sm:justify-end sm:space-x-reverse sm:space-y-0 sm:space-x-3 md:mt-0 md:flex-row md:space-x-3">
            <Button variant="secondary">Edit</Button>
            <Button>Take</Button>
        </div>
    </div>

    <div
        class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
        <div class="space-y-6 lg:col-start-1 lg:col-span-2">
            <!-- Description list-->
            <section aria-labelledby="applicant-information-title">
                <div class="bg-white shadow sm:rounded-lg">
                    <div class="px-4 py-5 sm:px-6">
                        <h2
                            id="applicant-information-title"
                            class="text-lg leading-6 font-medium text-gray-900">
                            Refresher Information
                        </h2>

                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                            Refresher details and how many have starred
                        </p>
                    </div>

                    <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                        <dl
                            class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Difficulty level
                                </dt>

                                <dd class="mt-1 text-sm text-gray-900">
                                    {refresher.difficulty.key}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Status
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {refresher.status.key}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Stars
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">0</dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Private
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {refresher.private ? 'Yes' : 'No'}
                                </dd>
                            </div>

                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">
                                    About
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {refresher.description}
                                </dd>
                            </div>
                        </dl>
                    </div>
                </div>
            </section>

            <!-- Items -->
            <section aria-labelledby="items-title">
                <div class="bg-white shadow sm:rounded-lg sm:overflow-hidden">
                    <div class="divide-y divide-gray-200">
                        <div class="px-4 py-5 sm:px-6">
                            <h2
                                id="items-title"
                                class="text-lg font-medium text-gray-900">
                                Items
                            </h2>
                        </div>

                        <div class="px-4 py-6 sm:px-6">
                            <p>A work in progress</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <section
            aria-labelledby="timeline-title"
            class="lg:col-start-3 lg:col-span-1">
            <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
                <h2
                    id="timeline-title"
                    class="text-lg font-medium text-gray-900">Timeline</h2>

                <!-- Activity Feed -->
                <div class="mt-6 flow-root">A work in progress</div>
            </div>
        </section>
    </div>
</App>

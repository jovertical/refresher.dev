<script>
    import Button from '~/Shared/Button';
    import FilledIcon from '~/Shared/FilledIcon';
    import App from '~/Shared/Layouts/App';
    import Refresher from './Refresher';

    export let refreshers = {};
</script>

<App title="Refreshers">
    <div
        class="pb-5 px-4 sm:px-0 border-b border-gray-200 sm:flex sm:items-center sm:justify-between">
        <h3 class="text-lg leading-6 font-medium text-gray-900">
            Your Refreshers
        </h3>

        <div class="mt-3 sm:mt-0 sm:ml-4 flex flex-wrap">
            <div class="w-full sm:w-auto">
                <label for="search_candidate" class="sr-only">Search</label>
                <div class="flex rounded-md shadow-sm">
                    <div class="relative flex-grow focus-within:z-10">
                        <div
                            class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <FilledIcon
                                class="text-gray-400"
                                name="search"
                                size="small" />
                        </div>
                        <input
                            type="text"
                            name="search_refresher"
                            id="search_refresher"
                            class="focus:ring-indigo-500 focus:border-indigo-500 block w-full rounded-none rounded-l-md pl-10 sm:hidden border-gray-300"
                            placeholder="Search" />
                        <input
                            type="text"
                            name="search_refresher"
                            id="search_refresher"
                            class="hidden focus:ring-indigo-500 focus:border-indigo-500 w-full rounded-none rounded-l-md pl-10 sm:block sm:text-sm border-gray-300"
                            placeholder="Search refreshers" />
                    </div>

                    <button
                        type="button"
                        class="-ml-px relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-r-md text-gray-700 bg-gray-50 hover:bg-gray-100 focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500">
                        <FilledIcon
                            class="text-gray-400"
                            name="sort-ascending"
                            size="small" />
                        <span class="ml-2">Sort</span>
                        <FilledIcon
                            class="ml-2.5 -mr-1.5 h-5 w-5 text-gray-400"
                            name="name: chevron-down"
                            size="small" />
                    </button>
                </div>
            </div>

            <div class="mt-4 sm:ml-4 sm:mt-0 w-full sm:w-auto">
                <Button class="w-full sm:w-auto">Add new</Button>
            </div>
        </div>
    </div>

    <div class="mt-5 bg-white shadow overflow-hidden sm:rounded-md">
        <ul class="divide-y divide-gray-200">
            {#each refreshers.data as refresher}
                <Refresher attributes="{refresher}" />
            {/each}
        </ul>
    </div>
</App>

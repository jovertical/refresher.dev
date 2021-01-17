<script>
    import { InertiaLink } from '@inertiajs/inertia-svelte';
    import Badge from '~/Shared/Badge';
    import FilledIcon from '~/Shared/FilledIcon';

    export let attributes = {};

    let { route } = window;

    $: status = App.pull(attributes.status.value, {
        '1': 'warning',
        '2': 'success',
    });
</script>

<li>
    <InertiaLink
        href="{route('refreshers.show', attributes.id)}"
        class="block hover:bg-gray-50">
        <div class="px-4 py-4 sm:px-6">
            <div class="flex items-center justify-between">
                <p class="text-sm font-medium text-indigo-600 truncate">
                    {attributes.title}
                </p>

                <div class="ml-2 flex-shrink-0 flex">
                    <Badge text="{attributes.status.key}" status="{status}" />
                </div>
            </div>

            <div class="mt-2 sm:flex sm:justify-between">
                <div class="sm:flex">
                    <p class="flex items-center text-sm text-gray-500">
                        <FilledIcon
                            class="flex-shrink-0 mr-1.5 text-gray-400"
                            name="academic-cap"
                            size="small" />
                        {attributes.difficulty.key}
                    </p>

                    <p
                        class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0 sm:ml-6">
                        <FilledIcon
                            class="flex-shrink-0 mr-1.5 text-gray-400"
                            name="star"
                            size="small" />
                        0
                    </p>
                </div>

                <div
                    class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                    <FilledIcon
                        class="flex-shrink-0 mr-1.5 text-gray-400"
                        name="calendar"
                        size="small" />

                    <p>
                        Created on
                        <time datetime="{attributes.date.created_at.value}">
                            {attributes.date.created_at.text}
                        </time>
                    </p>
                </div>
            </div>
        </div>
    </InertiaLink>
</li>

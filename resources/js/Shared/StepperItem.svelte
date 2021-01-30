<script>
    import cx from '~/directives/cx';
    import FilledIcon from '~/Shared/FilledIcon';

    export let title = '';
    export let step = 1;
    export let current = 1;

    $: completed = current > step;
    $: active = current === step;
</script>

<li>
    <a
        href="{'#'}"
        use:cx="{{ group: !active, 'flex items-start': active }}"
        aria-current="{active ? 'step' : ''}">
        <span class="flex items-start">
            <span
                class="flex-shrink-0 relative h-5 w-5 flex items-center justify-center"
                aria-hidden="{!active}">
                {#if completed}
                    <FilledIcon
                        class="text-indigo-600 group-hover:text-indigo-800"
                        name="check-circle"
                        size="small" />
                {:else if active}
                    <span class="absolute h-4 w-4 rounded-full bg-indigo-200">
                    </span>
                    <span
                        class="relative block w-2 h-2 bg-indigo-600 rounded-full">
                    </span>
                {:else}
                    <div
                        class="h-2 w-2 bg-gray-300 rounded-full group-hover:bg-gray-400">
                    </div>
                {/if}
            </span>

            <span
                class="ml-3 text-sm font-medium"
                use:cx="{{
                    'text-gray-500 group-hover:text-gray-900': !active,
                    'text-indigo-600': active,
                }}">
                {title}
            </span>
        </span>
    </a>
</li>

<script>
    import { InertiaLink } from '@inertiajs/inertia-svelte';
    import cx from '~/directives/cx';
    import FilledIcon from '~/Shared/FilledIcon';

    export let title = '';
    export let description = '';
    export let step = 0;
    export let current = 0;
    export let total = 0;

    $: last = step === total;
    $: completed = current > step;
    $: active = current === step;
</script>

<li class="relative" use:cx="{{ 'pb-10': !last }}">
    {#if !last}
        <div
            class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full"
            use:cx="{{
                'bg-indigo-600': completed,
                'bg-gray-300': !completed,
            }}"
            aria-hidden="true">
        </div>
    {/if}

    <InertiaLink href="/" class="relative flex items-start group">
        <span class="h-9 flex items-center">
            <span
                class="relative z-10 w-8 h-8 flex items-center justify-center rounded-full"
                use:cx="{{
                    'bg-indigo-600 group-hover:bg-indigo-800': completed,
                    'bg-white border-2': !completed,
                    'border-indigo-600': active,
                    'group-hover:border-gray-400': !completed && !active,
                }}">
                {#if completed}
                    <FilledIcon class="text-white" name="check" size="small" />
                {:else}
                    <span
                        class="h-2.5 w-2.5 rounded-full"
                        use:cx="{{
                            'bg-indigo-600': active,
                            'bg-transparent group-hover:bg-gray-300': !active,
                        }}">
                    </span>
                {/if}
            </span>
        </span>

        <span class="ml-4 min-w-0 flex flex-col">
            <span
                class="text-xs font-semibold uppercase tracking-wide"
                use:cx="{{
                    'text-indigo-600': active,
                    'text-gray-500': !completed && !active,
                }}">{title}</span>

            <span class="text-sm text-gray-500">
                {description}
            </span>
        </span>
    </InertiaLink>
</li>

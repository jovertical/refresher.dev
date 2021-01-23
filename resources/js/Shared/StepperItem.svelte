<script>
    import { InertiaLink } from '@inertiajs/inertia-svelte';
    import cx from 'classnames';
    import FilledIcon from '~/Shared/FilledIcon';

    export let title = '';
    export let description = '';
    export let step = 0;
    export let current = 0;
    export let total = 0;

    let last = step === total;
    let completed = current > step;
    let active = current === step;

    let classes = {
        root: cx('relative', { 'pb-10': !last }),

        line: cx('-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full', {
            'bg-indigo-600': completed,
            'bg-gray-300': !completed,
        }),

        indicator: cx(
            'relative z-10 w-8 h-8 flex items-center justify-center rounded-full',
            {
                'bg-indigo-600 group-hover:bg-indigo-800': completed,
                'bg-white border-2': !completed,
                'border-indigo-600': active,
                'group-hover:border-gray-400': !completed && !active,
            },
        ),

        alternativeIcon: cx('h-2.5 w-2.5 rounded-full', {
            'bg-indigo-600': active,
            'bg-transparent group-hover:bg-gray-300': !active,
        }),

        title: cx('text-xs font-semibold uppercase tracking-wide', {
            'text-indigo-600': active,
            'text-gray-500': !completed && !active,
        }),
    };
</script>

<li class="{classes.root}">
    {#if !last}
        <div class="{classes.line}" aria-hidden="true"></div>
    {/if}

    <InertiaLink href="/" class="relative flex items-start group">
        <span class="h-9 flex items-center">
            <span class="{classes.indicator}">
                {#if completed}
                    <FilledIcon class="text-white" name="check" size="small" />
                {:else}
                    <span class="{classes.alternativeIcon}"> </span>
                {/if}
            </span>
        </span>

        <span class="ml-4 min-w-0 flex flex-col">
            <span class="{classes.title}">{title}</span>

            <span class="text-sm text-gray-500">
                {description}
            </span>
        </span>
    </InertiaLink>
</li>

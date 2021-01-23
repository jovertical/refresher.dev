<script>
    import cx from 'classnames';
    import FilledIcon from '~/Shared/FilledIcon';

    export let status;

    let icons = {
        success: 'check-circle',
    };

    let classes = {
        icon: cx({
            'text-green-400': status === 'success',
        }),

        message: cx('text-sm font-medium ', {
            'text-green-800': status === 'success',
        }),
    };
</script>

<div class="rounded-md bg-green-50 p-4 {$$props.class || ''}">
    <div class="flex">
        <div class="flex-shrink-0">
            <FilledIcon
                class="{classes.icon}"
                name="{icons[status]}"
                size="small" />
        </div>

        <div class="ml-3">
            <p class="{classes.message}">
                <slot />
            </p>
        </div>
    </div>
</div>

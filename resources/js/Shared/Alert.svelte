<script>
    import FilledIcon from '~/Shared/FilledIcon';

    export let status;

    let icons = {
        success: 'check-circle',
    };

    let iconClasses = {
        success: 'text-green-400',
    };
</script>

<div class="rounded-md bg-green-50 p-4 {$$props.class || ''}">
    <div class="flex">
        <div class="flex-shrink-0">
            <FilledIcon
                class="{iconClasses[status]}"
                name="{icons[status]}"
                size="small" />
        </div>

        <div class="ml-3">
            <p
                class="text-sm font-medium {status}"
                class:text-green-800="{status === 'success'}">
                <slot />
            </p>
        </div>
    </div>
</div>

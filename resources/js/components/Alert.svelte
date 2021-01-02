<script>
    import FilledIcon from '~/components/FilledIcon';

    export let status;

    let show = true;

    let icons = {
        success: 'check-circle',
    };
</script>

<div class="rounded-md bg-green-50 p-4 {$$props.class}" class:hidden="{!show}" class:block="{show}">
    <div class="flex">
        <div class="flex-shrink-0">
            <FilledIcon class="alert-icon {status}" name="{icons[status]}" size="small" />
        </div>

        <div class="ml-3">
            <p class="alert-text {status}">
                <slot />
            </p>
        </div>

        <div class="ml-auto pl-3">
            <div class="-mx-1.5 -my-1.5">
                <button class="alert-close-button {status}" on:click="{() => (show = false)}">
                    <span class="sr-only">Dismiss</span>
                    <FilledIcon name="x" size="small" />
                </button>
            </div>
        </div>
    </div>
</div>

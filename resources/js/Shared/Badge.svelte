<script>
    import cx from 'classnames';

    export let text = '';
    export let status = null;

    let classes = {
        root: cx(
            'px-2 inline-flex text-xs leading-5 font-semibold rounded-full',
            {
                'bg-green-100 text-green-800': status === 'success',
                'bg-yellow-100 text-yellow-800': status === 'warning',
                'bg-red-100 text-red-800': status === 'error',
            },
        ),
    };
</script>

<p class="{classes.root}">
    {text}
</p>

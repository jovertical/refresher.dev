<script>
    import cx from '~/directives/cx';

    export let text = '';
    export let status = null;
</script>

<p
    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
    use:cx="{{
        'bg-green-100 text-green-800': status === 'success',
        'bg-yellow-100 text-yellow-800': status === 'warning',
        'bg-red-100 text-red-800': status === 'error',
    }}">
    {text}
</p>

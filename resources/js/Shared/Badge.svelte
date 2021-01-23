<script>
    export let text = '';
    export let status = null;
</script>

<p
    class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
    class:bg-green-100="{status === 'success'}"
    class:text-green-800="{status === 'success'}"
    class:bg-yellow-100="{status === 'warning'}"
    class:text-yellow-800="{status === 'warning'}"
    class:bg-red-100="{status === 'error'}"
    class:text-red-800="{status === 'error'}">
    {text}
</p>

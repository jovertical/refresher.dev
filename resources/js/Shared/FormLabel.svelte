<script>
    export let value = '';
    export let name = '';
</script>

<label
    class="block text-sm font-medium text-gray-700 {$$props.class || ''}"
    for="{name}">
    {value}
</label>

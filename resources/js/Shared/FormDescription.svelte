<script>
    export let name = '';
    export let value = '';
</script>

<p class="text-sm text-gray-500 {$$props.class || ''}" id="{name}-description">
    {value}
</p>

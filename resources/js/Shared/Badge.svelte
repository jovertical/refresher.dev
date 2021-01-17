<script>
    export let text = '';
    export let status = null;
</script>

<p class="badge badge-{status} {$$props.class || ''}">
    {text}
</p>

<script>
    export let variant = 'outlined';
    export let size = 'regular';
    export let name;
</script>

<svg
    class="{size === 'small' ? 'w-5 h-5' : 'w-6 h-6'} {$$props.class || ''}"
    class:small="{size === 'small'}"
    class:regular="{size === 'regular'}"
    xmlns="http://www.w3.org/2000/svg"
    viewBox="{size === 'small' ? '0 0 20 20' : '0 0 24 24'}"
    fill="{variant === 'filled' ? 'currentColor' : 'none'}"
    stroke="{variant === 'outlined' ? 'currentColor' : 'none'}"
    aria-hidden="true"
>
    {#if name === 'beaker'}
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"
        ></path>
    {:else if name === 'home'}
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
        ></path>
    {:else if name === 'menu-alt-2'}
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7"></path>
    {:else if name === 'search'}
        <path
            stroke-linecap="round"
            stroke-linejoin="round"
            stroke-width="2"
            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
        ></path>
    {:else if name === 'x'}
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
    {/if}
</svg>

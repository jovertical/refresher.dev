<script>
export let onChange;
export let label;
export let name;
export let error;

$: props = (({ onChange, label, name, errors, ...other }) => other)($$props);
</script>

<div>
    {#if label}<label for="{name}" class="form-label">{label}</label>{/if}

    <div class="mt-1 relative rounded-md shadow-sm">
        <input
            id="{name}"
            name="{name}"
            aria-invalid="{!!error}"
            aria-describedby="{name + '-error'}"
            {...props}
            on:change="{onChange}"
            class="form-input"
            class:error
        />

        {#if error}
            <div
                class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none"
            >
                <!-- Heroicon name: exclamation-circle -->
                <svg
                    class="h-5 w-5 text-red-500"
                    xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                    aria-hidden="true"
                >
                    <path
                        fill-rule="evenodd"
                        d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"
                        clip-rule="evenodd"
                    ></path>
                </svg>
            </div>
        {/if}
    </div>

    {#if error}
        <p id="{name + '-error'}" class="form-error">{error}</p>
    {/if}
</div>

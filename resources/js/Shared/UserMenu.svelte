<script>
    import clickOutside from '~/directives/clickOutside';

    export let onLogout;

    let open = false;
</script>

<div class="relative {$$props.class}" use:clickOutside on:click_outside="{() => (open = false)}">
    <div>
        <button
            class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
            id="user-menu"
            aria-haspopup="true"
            on:click="{() => (open = true)}"
        >
            <span class="sr-only">Open user menu</span>
            <img
                class="h-8 w-8 rounded-full"
                src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                alt=""
            />
        </button>
    </div>

    {#if open}
        <!--
            Profile dropdown panel, show/hide based on dropdown state.

            Entering: "transition ease-out duration-100"
                From: "transform opacity-0 scale-95"
                To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
                From: "transform opacity-100 scale-100"
                To: "transform opacity-0 scale-95"
        -->
        <div
            class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5"
            role="menu"
            aria-orientation="vertical"
            aria-labelledby="user-menu"
        >
            <a
                href="{'#'}"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                role="menuitem"
            >
                Your Profile
            </a>
            <a
                href="{'#'}"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                role="menuitem"
            >
                Settings
            </a>
            <a
                href="{'#'}"
                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
                role="menuitem"
                on:click="{onLogout}"
            >
                Logout
            </a>
        </div>
    {/if}
</div>

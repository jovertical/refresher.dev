<script>
    import { page } from '@inertiajs/inertia-svelte';
    import Guest from '~/components/Layouts/Guest';
    import Link from '~/components/Link';
</script>

<Guest>
    <div class="fixed top-0 inset-x-0 w-full">
        <div class="flex items-center justify-end space-x-6 h-20 px-10">
            {#if $page.props.auth.guest}
                <Link class="text-gray-800 underline hover:no-underline" route="login">Login</Link>
                <Link class="text-gray-800 underline hover:no-underline" route="register">
                    Register
                </Link>
            {:else}
                <Link class="text-gray-800 underline hover:no-underline" route="home">
                    Dashboard
                </Link>
            {/if}
        </div>
    </div>

    <h1 class="text-5xl text-center text-gray-700">Refresher.dev</h1>
</Guest>

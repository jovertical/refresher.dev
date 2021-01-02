<script>
    import { InertiaLink, page } from '@inertiajs/inertia-svelte';
    import Icon from '~/components/Icon';
    import MobileSidebar from '~/components/MobileSidebar';
    import Search from '~/components/Search';
    import Sidebar from '~/components/Sidebar';
    import UserMenu from '~/components/UserMenu';

    let route = window.route;

    export let title;
</script>

<div class="h-screen flex overflow-hidden bg-gray-100">
    <MobileSidebar />

    <Sidebar />

    <div class="flex flex-col w-0 flex-1 overflow-hidden">
        <div class="relative z-10 flex-shrink-0 flex h-16 bg-white shadow">
            <button
                class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden"
            >
                <span class="sr-only">Open sidebar</span>
                <Icon name="menu-alt-2" />
            </button>

            <div class="flex-1 px-4 flex justify-between">
                <Search />

                <div class="ml-4 flex items-center md:ml-6">
                    <UserMenu />
                </div>
            </div>
        </div>

        <main class="flex-1 relative overflow-y-auto focus:outline-none" tabindex="0">
            <div class="py-6">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                    <h1 class="text-2xl font-semibold text-gray-900">{title}</h1>
                </div>

                <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
                    <slot />
                </div>
            </div>
        </main>
    </div>
</div>

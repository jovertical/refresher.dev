<script>
    import { Inertia } from '@inertiajs/inertia';
    import { InertiaLink } from '@inertiajs/inertia-svelte';
    import Icon from '~/components/Icon';
    import NavigationLink from '~/components/NavigationLink';
    import UserMenu from '~/components/UserMenu';

    let route = window.route;

    let open = false;

    function handleLogout() {
        Inertia.post(route('logout'));
    }
</script>

<div>
    <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                        <img
                            class="h-8 w-8"
                            src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg"
                            alt="Workflow"
                        />
                    </div>

                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <NavigationLink class="text-sm" route="home">Dashboard</NavigationLink>
                            <NavigationLink class="text-sm" route="tests.index">
                                Tests
                            </NavigationLink>
                        </div>
                    </div>
                </div>

                <div class="hidden md:block">
                    <div class="ml-4 flex items-center md:ml-6">
                        <UserMenu onLogout="{handleLogout}" />
                    </div>
                </div>

                <div class="-mr-2 flex md:hidden">
                    <!-- Mobile menu button -->
                    <button
                        class="bg-gray-800 inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                        on:click="{() => (open = !open)}"
                    >
                        <span class="sr-only">Open main menu</span>
                        <Icon class="{open ? 'hidden' : 'block'}" name="menu" />
                        <Icon class="{open ? 'block' : 'hidden'}" name="x" />
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div class="md:hidden" class:hidden="{!open}" class:block="{open}">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <NavigationLink route="home">Dashboard</NavigationLink>
                <NavigationLink route="tests.index">Tests</NavigationLink>
            </div>

            <div class="pt-4 pb-3 border-t border-gray-700">
                <div class="flex items-center px-5">
                    <div class="flex-shrink-0">
                        <img
                            class="h-10 w-10 rounded-full"
                            src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                            alt=""
                        />
                    </div>

                    <div class="ml-3">
                        <div class="text-base font-medium leading-none text-white">Tom Cook</div>
                        <div class="text-sm font-medium leading-none text-gray-400">
                            tom@example.com
                        </div>
                    </div>
                </div>

                <div class="mt-3 px-2 space-y-1">
                    <a
                        href="{'#'}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700"
                    >
                        Your Profile</a>
                    <a
                        href="{'#'}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700"
                    >
                        Settings
                    </a>
                    <a
                        href="{'#'}"
                        class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700"
                        on:click="{handleLogout}"
                    >
                        Logout
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <main>
        <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <slot />
        </div>
    </main>
</div>

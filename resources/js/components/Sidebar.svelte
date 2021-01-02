<script>
    import { InertiaLink } from '@inertiajs/inertia-svelte';
    import Logo from '~/components/Logo';
    import NavigationLink from '~/components/NavigationLink';
</script>

<div class="hidden md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col h-0 flex-1">
            <div class="flex items-center h-16 flex-shrink-0 px-4 bg-gray-900">
                <Logo />
            </div>

            <div class="flex-1 flex flex-col overflow-y-auto">
                <nav class="flex-1 px-2 py-4 bg-gray-800 space-y-1">
                    <NavigationLink text="Dashboard" link="home" icon="home" compact />
                    <NavigationLink text="Tests" link="tests.index" icon="beaker" compact />
                </nav>
            </div>
        </div>
    </div>
</div>

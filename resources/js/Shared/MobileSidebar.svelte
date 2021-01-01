<script>
    import clickOutside from '~/directives/clickOutside';
    import Icon from '~/Shared/Icon';
    import Logo from '~/Shared/Logo';
    import NavigationLink from '~/Shared/NavigationLink';

    export let open;
</script>

<div class="md:hidden" class:block="{open}" class:hidden="{!open}">
    <div class="fixed inset-0 flex z-40">
        <!--
            Off-canvas menu overlay, show/hide based on off-canvas menu state.
    
            Entering: "transition-opacity ease-linear duration-300"
                From: "opacity-0"
                To: "opacity-100"
            Leaving: "transition-opacity ease-linear duration-300"
                From: "opacity-100"
                To: "opacity-0"
        -->
        <div class="fixed inset-0" aria-hidden="true">
            <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
        </div>
        <!--
            Off-canvas menu, show/hide based on off-canvas menu state.
    
            Entering: "transition ease-in-out duration-300 transform"
                From: "-translate-x-full"
                To: "translate-x-0"
            Leaving: "transition ease-in-out duration-300 transform"
                From: "translate-x-0"
                To: "-translate-x-full"
        -->
        <div
            class="relative flex-1 flex flex-col max-w-xs w-full pt-5 pb-4 bg-gray-800"
            use:clickOutside
            on:click_outside="{() => (open = false)}"
        >
            <div class="absolute top-0 right-0 -mr-12 pt-2">
                <button
                    class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                    on:click="{() => (open = false)}"
                >
                    <span class="sr-only">Close sidebar</span>
                    <Icon class="text-white" name="x" />
                </button>
            </div>

            <div class="flex-shrink-0 flex items-center px-4">
                <Logo />
            </div>

            <div class="mt-5 flex-1 h-0 overflow-y-auto">
                <nav class="px-2 space-y-1">
                    <NavigationLink text="Dashboard" link="home" icon="home" />
                    <NavigationLink text="Tests" link="tests.index" icon="beaker" />
                </nav>
            </div>
        </div>

        <div class="flex-shrink-0 w-14" aria-hidden="true">
            <!-- Dummy element to force sidebar to shrink to fit close icon -->
        </div>
    </div>
</div>

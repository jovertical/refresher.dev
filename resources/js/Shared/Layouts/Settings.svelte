<script>
    import App from '~/Shared/Layouts/App';
    import SettingsLink from '~/Shared/SettingsLink';

    let route = window.route;
</script>

<App>
    <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
        <aside class="py-6 px-2 sm:px-6 lg:py-0 lg:px-0 lg:col-span-3">
            <nav class="space-y-1">
                <SettingsLink route="settings.profile.edit" icon="user-circle">
                    Profile
                </SettingsLink>

                <SettingsLink route="settings.password.edit" icon="key">Password</SettingsLink>
            </nav>
        </aside>

        <div class="space-y-6 sm:px-6 lg:px-0 lg:col-span-9">
            <slot />
        </div>
    </div>
</App>

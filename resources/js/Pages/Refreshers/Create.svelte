<script>
    import App from '~/Shared/Layouts/App';
    import InformationStep from '~/Shared/Refreshers/InformationStep';
    import ItemsStep from '~/Shared/Refreshers/ItemsStep';
    import SharingStep from '~/Shared/Refreshers/SharingStep';
    import SkillsStep from '~/Shared/Refreshers/SkillsStep';
    import Sidebar from '~/Shared/Refreshers/Sidebar';
</script>

<App>
    <div
        class="mt-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-3">
        <Sidebar />

        <div class="lg:col-start-2 lg:col-span-2">
            <InformationStep />
        </div>
    </div>
</App>

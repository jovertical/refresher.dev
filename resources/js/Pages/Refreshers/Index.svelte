<script>
    import App from '~/Shared/Layouts/App';
    import Refresher from './Refresher';

    export let refreshers = {};
</script>

<App title="Refreshers">
    <div class="bg-white shadow overflow-hidden sm:rounded-md">
        <ul class="divide-y divide-gray-200">
            {#each refreshers.data as refresher}
                <Refresher attributes="{refresher}" />
            {/each}
        </ul>
    </div>
</App>

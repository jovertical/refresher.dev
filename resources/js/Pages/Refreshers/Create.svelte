<script>
    import App from '~/Shared/Layouts/App';
    import Form from '~/Shared/Refreshers/Form';
    import Sidebar from '~/Shared/Refreshers/Sidebar';
    import { createForm } from '~/stores/form';

    let form = createForm({
        title: '',
        description: '',
        difficulty: 1,
        skills: [],
    });

    function store() {
        form.post(route('refreshers.store'));
    }
</script>

<App>
    <div
        class="lg:mt-4 max-w-3xl mx-auto px-0 lg:px-16 grid grid-cols-1 gap-6 lg:max-w-7xl lg:grid-flow-col-dense lg:grid-cols-4">
        <Sidebar step="{1}" />
        <Form store="{form}" on:submit="{store}" />
    </div>
</App>

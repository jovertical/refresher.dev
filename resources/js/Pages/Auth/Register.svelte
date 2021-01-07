<script>
    import { Inertia } from '@inertiajs/inertia';
    import { InertiaLink } from '@inertiajs/inertia-svelte';
    import Button from '~/Shared/Button';
    import Auth from '~/Shared/Layouts/Auth';
    import TextInput from '~/Shared/TextInput';
    import { createForm } from '~/stores/form';

    export let errors = {};

    let route = window.route;

    let form = createForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });

    function handleSubmit() {
        Inertia.post(route('register'), $form);
    }
</script>

<Auth title="Sign up to get started">
    <span slot="helper">
        Already have an account?
        <InertiaLink
            class="font-medium text-indigo-600 hover:text-indigo-500"
            href="{route('login')}"
        >
            login
        </InertiaLink>
    </span>

    <form class="space-y-6" on:submit|preventDefault="{handleSubmit}">
        <TextInput
            label="Name"
            name="name"
            type="text"
            value="{$form.name}"
            error="{errors.name}"
            onChange="{form.handleChange}"
        />

        <TextInput
            label="Email address"
            name="email"
            type="email"
            value="{$form.email}"
            error="{errors.email}"
            onChange="{form.handleChange}"
        />

        <TextInput
            label="Password"
            name="password"
            type="password"
            value="{$form.password}"
            error="{errors.password}"
            onChange="{form.handleChange}"
        />

        <TextInput
            label="Confirm Password"
            name="password_confirmation"
            type="password"
            value="{$form.password_confirmation}"
            error="{errors.password_confirmation}"
            onChange="{form.handleChange}"
        />

        <div>
            <Button>Sign up</Button>
        </div>
    </form>
</Auth>

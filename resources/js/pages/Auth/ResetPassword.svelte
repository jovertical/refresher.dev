<script>
    import { Inertia } from '@inertiajs/inertia';
    import { page } from '@inertiajs/inertia-svelte';
    import Button from '~/components/Button';
    import Auth from '~/components/Layouts/Auth';
    import Link from '~/components/Link';
    import TextInput from '~/components/TextInput';
    import { createForm } from '~/stores/form';

    export let errors = {};

    let form = createForm({
        email: $page.props.email,
        password: '',
        password_confirmation: '',
        token: $page.props.token,
    });

    function handleSubmit() {
        Inertia.post(route('password.update'), $form);
    }
</script>

<Auth title="Reset password">
    <form class="space-y-6" on:submit|preventDefault="{handleSubmit}">
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

        <div class="flex items-center justify-end">
            <Link route="login" class="font-medium text-indigo-600 hover:text-indigo-500 text-sm">
                Back to login
            </Link>
        </div>

        <div>
            <Button>Reset Password</Button>
        </div>
    </form>
</Auth>

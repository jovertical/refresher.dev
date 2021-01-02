<script>
    import { Inertia } from '@inertiajs/inertia';
    import Auth from '~/components/Layouts/Auth';
    import Link from '~/components/Link';
    import TextInput from '~/components/TextInput';
    import { createForm } from '~/stores/form';

    export let errors = {};

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
        <Link route="login" class="font-medium text-indigo-600 hover:text-indigo-500">login</Link>
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
            <button
                type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
                Sign up
            </button>
        </div>
    </form>
</Auth>

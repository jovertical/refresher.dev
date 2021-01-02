<script>
    import { Inertia } from '@inertiajs/inertia';
    import { page } from '@inertiajs/inertia-svelte';
    import Auth from '~/Layouts/Auth';
    import Link from '~/Shared/Link';
    import TextInput from '~/Shared/TextInput';
    import { createForm } from '~/stores/form';

    export let errors = {};

    let form = createForm({
        email: '',
        password: '',
    });

    function handleSubmit() {
        Inertia.post(route('login'), $form);
    }
</script>

<Auth title="Login to your account">
    <span slot="helper">
        Not registered with us yet?
        <Link route="register" class="font-medium text-indigo-600 hover:text-indigo-500">
            sign up
        </Link>
    </span>

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
            autocomplete="current-password"
            value="{$form.password}"
            error="{errors.password}"
            onChange="{form.handleChange}"
        />

        <div class="flex items-center justify-between">
            <div class="flex items-center">
                <input
                    id="remember_me"
                    name="remember_me"
                    type="checkbox"
                    class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded"
                />
                <label for="remember_me" class="ml-2 block text-sm text-gray-900">
                    Remember me
                </label>
            </div>

            <div class="text-sm">
                <a href="/" class="font-medium text-indigo-600 hover:text-indigo-500">
                    Forgot your password?
                </a>
            </div>
        </div>

        <div>
            <button
                type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
            >
                Login
            </button>
        </div>
    </form>
</Auth>

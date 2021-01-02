<script>
    import { Inertia } from '@inertiajs/inertia';
    import Button from '~/components/Button';
    import Auth from '~/components/Layouts/Auth';
    import Link from '~/components/Link';
    import TextInput from '~/components/TextInput';
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
                <Link
                    route="password.request"
                    class="font-medium text-indigo-600 hover:text-indigo-500"
                >
                    Forgot your password?
                </Link>
            </div>
        </div>

        <div>
            <Button>Login</Button>
        </div>
    </form>
</Auth>

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
    });

    function handleSubmit() {
        Inertia.post(route('password.email'), $form);
    }
</script>

<Auth title="Forgot password">
    <span slot="helper">
        Just let us know your email address and we will email you a password reset link that will
        allow you to choose a new one.
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

        <div class="flex items-center justify-end">
            <Link route="login" class="font-medium text-indigo-600 hover:text-indigo-500 text-sm">
                Back to login
            </Link>
        </div>

        <div>
            <Button>Email Password Reset Link</Button>
        </div>
    </form>
</Auth>

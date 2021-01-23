<script>
    import Button from '~/Shared/Button';
    import TextInput from '~/Shared/TextInput';
    import { createForm } from '~/stores/form';

    let form = createForm({
        title: '',
        description: '',
    });

    function save() {
        form.post(route('refreshers.store'));
    }
</script>

<section aria-labelledby="refresher_information">
    <form on:submit|preventDefault="{save}">
        <div class="shadow sm:rounded-md sm:overflow-hidden">
            <div class="bg-white py-6 px-4 sm:p-6">
                <div>
                    <h2
                        id="refresher_information"
                        class="text-lg leading-6 font-medium text-gray-900">
                        Refresher Information
                    </h2>

                    <p class="mt-1 text-sm text-gray-500">
                        Ex recusandae quia in dolorem ipsum minima harum.
                        Dolorum voluptatibus autem autem fugit est.
                    </p>
                </div>

                <div class="mt-6 grid grid-cols-4 gap-6">
                    <div class="col-span-4 sm:col-span-2">
                        <TextInput
                            label="Title"
                            name="title"
                            value="{$form.title}"
                            error="{$form.errors.title}"
                            onChange="{form.handleChange}" />
                    </div>

                    <div class="col-span-4">
                        <TextInput
                            label="Description"
                            name="description"
                            value="{$form.description}"
                            error="{$form.errors.description}"
                            onChange="{form.handleChange}" />
                    </div>

                    <div class="col-span-4">
                        <!-- Difficulty -->
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <div class="flex justify-end">
                <Button type="submit" loading="{$form.loading}">
                    Save & Next
                </Button>
            </div>
        </div>
    </form>
</section>

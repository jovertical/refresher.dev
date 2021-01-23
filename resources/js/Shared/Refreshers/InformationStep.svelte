<script>
    import { page } from '@inertiajs/inertia-svelte';
    import Button from '~/Shared/Button';
    import FormGroup from '~/Shared/FormGroup';
    import Select from '~/Shared/Select';
    import Textarea from '~/Shared/Textarea';
    import TextInput from '~/Shared/TextInput';
    import { createForm } from '~/stores/form';

    let form = createForm({
        step: 1,
        title: '',
        description: '',
        difficulty: 1,
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
                    <FormGroup
                        class="col-span-4 sm:col-span-2"
                        label="Title"
                        error="{$form.errors.title}">
                        <TextInput
                            name="title"
                            value="{$form.title}"
                            on:change="{form.handleChange}"
                            hasError="{!!$form.errors.title}" />
                    </FormGroup>

                    <FormGroup
                        class="col-span-4"
                        label="Description"
                        error="{$form.errors.description}">
                        <Textarea
                            name="description"
                            value="{$form.description}"
                            on:change="{form.handleChange}"
                            hasError="{!!$form.errors.description}" />
                    </FormGroup>

                    <FormGroup
                        class="col-span-4 lg:col-span-2"
                        label="Difficulty"
                        error="{$form.errors.difficulty}">
                        <Select
                            name="difficulty"
                            value="{$form.difficulty}"
                            on:change="{form.handleChange}"
                            hasError="{!!$form.errors.difficulty}">
                            {#each $page.props.levels as level}
                                <option value="{level.value}">
                                    {level.description}
                                </option>
                            {/each}
                        </Select>
                    </FormGroup>
                </div>
            </div>
        </div>

        <div class="pt-5 px-5 sm:px-0">
            <div class="flex justify-end">
                <Button type="submit" loading="{$form.loading}">Next</Button>
            </div>
        </div>
    </form>
</section>

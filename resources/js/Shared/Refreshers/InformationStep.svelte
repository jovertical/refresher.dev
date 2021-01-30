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
        skills: [],
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
                        Describe the refresher and select the skills
                    </p>
                </div>

                <div class="mt-6 grid grid-cols-4 gap-6">
                    <FormGroup
                        name="title"
                        class="col-span-4 sm:col-span-3 md:col-span-2"
                        label="Title"
                        error="{$form.errors.title}">
                        <TextInput
                            name="title"
                            value="{$form.title}"
                            on:change="{form.handleChange}"
                            hasError="{!!$form.errors.title}"
                            placeholder="e.g. JavaScript - The hard parts" />
                    </FormGroup>

                    <FormGroup
                        name="description"
                        class="col-span-4"
                        label="Description"
                        description="Brief description of the refresher. URLs are hyperlinked."
                        error="{$form.errors.description}">
                        <Textarea
                            name="description"
                            value="{$form.description}"
                            on:change="{form.handleChange}"
                            hasError="{!!$form.errors.description}" />
                    </FormGroup>

                    <FormGroup
                        id="difficulty"
                        class="col-span-4"
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

                    <FormGroup
                        id="skills"
                        class="col-span-4 sm:col-span-3 md:col-span-2"
                        label="Skills"
                        description="You can select up to 5."
                        error="{$form.errors.skills}">
                        <TextInput
                            name="skills"
                            value=""
                            on:change="{form.handleChange}"
                            hasError="{!!$form.errors.skills}"
                            icon="tag" />
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

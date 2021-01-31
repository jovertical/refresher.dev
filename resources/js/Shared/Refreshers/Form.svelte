<script>
    import { createEventDispatcher } from 'svelte';
    import { page } from '@inertiajs/inertia-svelte';
    import Button from '~/Shared/Button';
    import FormGroup from '~/Shared/FormGroup';
    import Select from '~/Shared/Select';
    import Textarea from '~/Shared/Textarea';
    import TextInput from '~/Shared/TextInput';

    let dispatch = createEventDispatcher();

    export let store;

    function submit() {
        dispatch('submit');
    }
</script>

<div class="col-start-1 lg:col-start-2 col-span-4 lg:col-span-3">
    <section aria-labelledby="refresher_information">
        <form on:submit|preventDefault="{submit}">
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
                            error="{$store.errors.title}">
                            <TextInput
                                name="title"
                                value="{$store.title}"
                                on:change="{store.handleChange}"
                                hasError="{!!$store.errors.title}"
                                placeholder="e.g. JavaScript - The hard parts" />
                        </FormGroup>

                        <FormGroup
                            name="description"
                            class="col-span-4"
                            label="Description"
                            description="Markdown is supported"
                            error="{$store.errors.description}">
                            <Textarea
                                name="description"
                                value="{$store.description}"
                                on:change="{store.handleChange}"
                                hasError="{!!$store.errors.description}" />
                        </FormGroup>

                        <FormGroup
                            id="difficulty"
                            class="col-span-4"
                            label="Difficulty"
                            error="{$store.errors.difficulty}">
                            <Select
                                name="difficulty"
                                value="{$store.difficulty}"
                                on:change="{store.handleChange}"
                                hasError="{!!$store.errors.difficulty}">
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
                            description="You can select up to 5"
                            error="{$store.errors.skills}">
                            <TextInput
                                name="skills"
                                value=""
                                on:change="{store.handleChange}"
                                hasError="{!!$store.errors.skills}"
                                icon="tag" />
                        </FormGroup>
                    </div>
                </div>
            </div>

            <div class="pt-5 px-5 sm:px-0">
                <div class="flex justify-end">
                    <Button type="submit" loading="{$store.loading}">
                        Next
                    </Button>
                </div>
            </div>
        </form>
    </section>
</div>

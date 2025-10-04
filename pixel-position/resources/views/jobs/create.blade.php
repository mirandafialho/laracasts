<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO" />
        <x-forms.input label="Salary" name="salary" placeholder="$80,000 USD" />
        <x-forms.input label="Location" name="location" placeholder="Boston, Massachusetts" />

        <x-forms.select label="Schedule" name="schedule">
            <option>Full Time</option>
            <option>Part Time</option>
            <option>Contract</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com/jobs/ceo" />
        <x-forms.checkbox label="Feature (Costs Extra)" name="is_featured" />

        <x-forms.divider />

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="ceo, manager, head of office" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>

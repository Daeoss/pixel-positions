<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"></x-forms.input>
        <x-forms.input label="Salary" name="salary" placeholder="$50,000 USD"></x-forms.input>
        <x-forms.input label="Location" name="location" placeholder="Central Hometown, New York"></x-forms.input>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part time</option>
            <option>Full time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://www.internet.com/jobs/wire-wanted"></x-forms.input>
        <x-forms.checkbox label="Feature (Costs extra)" name="featured"></x-forms.checkbox>

        <x-forms.divider></x-forms.divider>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="tag1, tag2, tag3"></x-forms.input>

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
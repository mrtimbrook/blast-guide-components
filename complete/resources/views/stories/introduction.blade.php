@storybook([
    'layout' => 'fullscreen'
])

<x-docs-page
    title="Blast 🚀"
    label="About"
    description="Storybook for Laravel Blade"
>

{!! Str::markdown("# Introduction

This is the `DocsPage` component. You can put whatever you like into the main slot and it will render in the center column of the page. It also has 3 props - `title`, `label` and `description` - to fill out the content in the component header.

Be sure to set the `layout` to `fullscreen` so it all renders correctly in the Storybook UI.
") !!}

</x-docs-page>

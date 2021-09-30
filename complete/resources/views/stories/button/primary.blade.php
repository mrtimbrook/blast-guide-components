@storybook([
    'preset' => 'button.base',
    'name' => 'Button with Icon',
    'status' => 'stable',
    'design' => 'https://www.figma.com/file/z3UTaD2Lt7d92J3n7fHKWI/Blast-Guide-Components?node-id=1%3A2',
])

<x-button.primary
    :href="$href ?? null"
    :icon="$icon ?? null"
    :iconPosition="$iconPosition ?? null"
>
    {{ $label ?? null }}
</x-button.primary>

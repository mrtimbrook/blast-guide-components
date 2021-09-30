@storybook([
    'preset' => 'button-box.primary',
    'design' => 'https://www.figma.com/file/z3UTaD2Lt7d92J3n7fHKWI/Blast-Guide-Components?node-id=18%3A112',
])

<x-button-box.primary
    :title="$title ?? null"
    :buttons="$buttons ?? null"
/>

This is a basic button component. It renders an `a` or `button` depending on the props (see below) passed to the component.

Any attributes passed to the button base component are merged with the component's existing attributes to allow you to add ids, behaviors, data attributes, etc to the component as you wish.

## Props

### `icon`
(`string | false`)

The name of the icon file to use in the button. Can be positioned with the `iconPosition` prop (see below). Rendered using the `<x-icon>` component.

Default: `false`.

### `iconPosition`
(`string` - `'before' | 'after'`)

Defines the position of the icon in respect to the text, either before or after. Has no effect if used without the `icon` prop.

Default: `'after'`

### `href`
(`string | false`)

The href string to use on a `a` element. If this prop is set to `falsey` value the component will render as a `button`, unless `static` prop (see below) is set to `true`. If both `static` and `href` props are set, the `href` prop is ignored and the component is rendered as a `span`.

Default: `false`

## Slots

### `default`

The default component slot is used for the label text within the button. It can be left blank and used with the `icon` prop to render an 'icon-only' button.

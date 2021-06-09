# Kirby zzpub plugin

Simple Kirby 3 Plugin to auto-publish pages.
<br>
Parent page can be set optionally.

### Why?

My use case is a website project with a database-like content section. The data-base consists of all child pages and their children that are stored in the folder „data“. Only these pages should be auto-published on creation and duplication. This is why the plugin accepts a `parent` option.

<br>

## Installation

### Download

Download and copy this repository to `/site/plugins/zzpub`.

### Git submodule

```
git submodule add https://github.com/hannesherold/kirby-zzpub.git site/plugins/zzpub
```

### Composer

```
composer require hherold/kirby-zzpub
```

<br>

## Options

Use the following options in your `config.php`:


```php
'hherold.zzpub' => [
   'autoPublish' => true,
   'parent'      => 'database',
   'status'      => 'unlisted'
]
```

__autoPublish__
<br>
Enables/disables the plugin.
<br>
_default: false_

__parent__
<br>
Restricts the plugin to children of a specific parent page. 
<br>
_Expects the slug of the parent_
<br>
> Be careful: if you change the actual slug of the parent-page! Then you need to set the new slug here accordingly.

__status__
<br>
Sets the status pof the auto-published page. 
<br>
_Options: `unlisted`, `listed`_

<br>

## Hooks

The plugin listens to these Kirby hooks:

`page.create:after`
<br>
`page.duplicate:after`

<br>

## License

MIT

<br>

## Trivia

The name of the plugin is chosen mainly for its first letters „z“ and due to the fact that Kirby triggers plugins in alphabetical order. To prevent conflicts with other plugins that manipulate page data, the auto-publish function should be triggered *after* other plugins.

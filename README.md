# zzpub

Simple Kirby 3 Plugin to auto-publish pages with optional parent page.

### Why?

My use case is a website project with a database-like content section. The data-base consists of all child pages and their children that are stored in the folder „database“. Only these pages should be auto-published on creation (and duplication). This is why the plugin introduces a `parent` option.

<br>

## Installation

### Download

Download and copy this repository to `/site/plugins/zzpub`.

### Git submodule

```
git submodule add https://github.com/hannesherold/zzpub.git site/plugins/zzpub
```

### Composer

```
composer require hherold/zzpub
```

<br>

## Options

Use the following options in your `config.php`:


```php
'hherold.zack' => [
   'autoPublish' => true,		// default: false
   'parent'      => 'database',		// default: false
   'status'      => 'unlisted'		// default: listed
]
```



#### `autoPublish`

enables/disables the plugin

#### `parent`
Use `parent` if you want to restrict auto-publish function to children of a specific parent. The option expects the slug of the parent.

**Be careful** if you change the actual slug of the parent-page! Then you need to set the new slug here accordingly.

#### `status`
Sets the status pof the auto-published page. Available options:
`unlisted`
`listed`

<br>

## Hooks

The plugin listens to these Kirby hooks:

`page.create:after`
`page.duplicate:after`

<br>

## License

MIT

<br>

## Trivia

The name of the plugin is chosen mainly for its first letters „z“ and due to the fact that Kirby triggers plugins in alphabetical order. To prevent conflicts with other plugins that manipulate page data, the auto-publish function should be triggered *after* other plugins.

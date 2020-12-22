## How to install?

First you need to include Alpine if you haven't done so already. You can do this by adding the link to the latest version to the HEAD of your site:
```https://cdn.jsdelivr.net/gh/alpinejs/alpine@2.8.0/dist/alpine.min.js```

Then you can install the add-on via the Control Panel or via composer

```bash
composer require sortarad/quick-brown-fox
```

## How to use?

Place `{{ quick_brown_fox :from="fonts" size="30" }}` tag in a view.

You can modify default text by wrapping new text into a tag:

```
{{ quick_brown_fox :from="fonts" size="30" }}
	Almost before we knew it, we had left the ground.
{{ /quick_brown_fox }}
```

We also provide some basic styling for controls. You can enable them by adding the following tag to the site head.

```
{{ quick_brown_fox:assets }}
```

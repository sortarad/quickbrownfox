## How to install?

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

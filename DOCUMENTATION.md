## How to install?
You can install the add-on via the Control Panel or via composer

```bash
composer require sortarad/quick-brown-fox
```

## How to use?
1. First you need to include Alpine.js (if you haven't done so already).
2. Then create an asset container with the handle of **fonts**. In that container upload your font.
3. Finally, place the quick brown fox tag into a view.   
`{{ quick_brown_fox :from="fonts" size="30" }}` .

### What options?
There are two options that you can control. 

- **Speed:** This is the starting font size in pixels. 
**Example:** `size="30"`
- **Text:** What text is displayed in the type tester.   
It defaults to **The quick brown fox jumps over the lazy dog** but you can modify default text by wrapping new text into a tag.

**Example:**
```
{{ quick_brown_fox :from="fonts" size="30" }}
	Feel the Rhythm! Feel the Rhyme! Get on up, it's bobsled time! Cool Runnings!
{{ /quick_brown_fox }}
```
## How does it look?
We've put together some basic styling to get you started. You can add this styling by adding the follow tag to the head of your site.

```
{{ quick_brown_fox:assets }}
```

# The P Tag Remover Plugin README

---

## Description

The P Tag Remover is a WordPress plugin developed to enhance the cleanliness and structure of your website's HTML output. It specifically targets and removes extraneous `<p>` tags that WordPress's `wpautop` function automatically inserts around images, embeds, and images enclosed within anchor tags in post content. This targeted action addresses common layout issues the author encounters when writing custom themes for Wordpress, and ensures that your content appears as intended without unwanted formatting artifacts introduced by WordPress's automatic actions.

## Features

- **Targeted Removal:** Efficiently strips out unnecessary `<p>` tags surrounding `<img>` tags, `[embed]` shortcodes, and `<a>` tags that enclose `<img>` tags.
- **Content Integrity:** Preserves the core content (images, embeds, and linked images) intact while only removing the unwanted `<p>` tags.
- **Seamless Integration:** Executes the removal after WordPress has applied its content filters, ensuring compatibility with other plugins and themes and maintaining the integrity of the final HTML output.

## Installation

1. Download the plugin zip file.
2. Navigate to your WordPress dashboard.
3. Go to Plugins > Add New > Upload Plugin.
4. Choose the zip file you downloaded and click Install Now.
5. After installation, activate the plugin through the 'Plugins' menu in WordPress.

## Usage

Once activated, The P Tag Remover works automatically, scanning and adjusting the post content whenever it is displayed. There is no need for manual intervention or configuration.

## About the Author

The P Tag Remover was developed by David Bickley, a web developer committed to enhancing our experience of the digital world. For more information and to explore other projects, visit [David Bickley's website](http://davidbickley.com/).

## Version

- Current version: 1.0

## License

This plugin is released under a standard open-source license, allowing you to use and modify it as needed for your personal or commercial projects.
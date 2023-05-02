# Cusdis WordPress Comment Plugin

This plugin replaces the original WordPress comment system with the Cusdis comment system for static HTML sites. 

Before installing, make sure to register your domain on [cusdis.com](https://cusdis.com/) by clicking on the "START FREE" button.

To install the plugin:

1. Download `My-Cusdis-Comment-Plugin.php` from [here](https://raw.githubusercontent.com/roywikan/cusdis-wp-comment-plugin/main/My-Cusdis-Comment-Plugin.php)
2. Put the file in `\wp-content\plugins\My-Cusdis-Comment-Plugin.php`
3. Activate the plugin
4. Done!

---

Compared to Disqus, Cusdis is not designed as a full alternative. It aims to implement a minimalist embedded comment tool for small sites like your static blog.

Here are the pros and cons of Cusdis:

## Pros

- Cusdis is open-source and self-hostable, meaning you own your data.
- The SDK is lightweight (~5kb gzipped).
- Cusdis does not require commenters to sign in, and does not use cookies at all.

## Cons

- Cusdis is in the early stages of development.
- You have to manually moderate comments which are not displayed by default until you approve them, since there is no spam filter.
- Disqus is a company, whereas Cusdis is not.

---

To use the plugin, replace `753c115a-e791-4f69-9443-da8ddf73b1bb` in the following code with your own domain ID obtained from your cusdis.com registration results code:

#try to comment below:





		<div id="cusdis_thread"
		data-host="https://cusdis.com"
		data-app-id="753c115a-e791-4f69-9443-da8ddf73b1bb"
		data-page-id="123456789"
		data-page-url="https://roywikan.github.io/cusdis-wp-comment-plugin/"
		data-page-title="cusdis-wp-comment-plugin" >		
		</div>
		
		<script async defer src="https://cusdis.com/js/cusdis.es.js"></script>

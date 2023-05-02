# cusdis-wp-comment-plugin
replace original wordpress comment with cusdis comment system for static html sites.

REGISTER YOUR DOMAIN first on https://cusdis.com/ , look for START FREE button.
After that,...

To INSTALL:

1. Download My-Cusdis-Comment-Plugin.php ---> https://raw.githubusercontent.com/roywikan/cusdis-wp-comment-plugin/main/My-Cusdis-Comment-Plugin.php 
2. Put it on \wp-content\plugins\My-Cusdis-Comment-Plugin.php
3. activate the plugin.
4. done.


-----------------------------------------------
Compared to Disqus
Cusdis is not designed for a FULLY alternative to Disqus, it's aim to implement a minimist embed comment tool for small sites (like your static blog).

Below are the pros and cons of Cusdis:

Pros
Cusdis is open-source and self-hostable, you own your data.
The SDK is lightweight (~5kb gzipped)
Cusdis doesn't required commenter to sign in. We don't use cookies at all.

Cons
Cusdis is on early development stage
You have to manually moderate comments which are not display by default until you approve it, since we dont't have a spam filter.
Disqus is a company, we aren't.
---------------------------------
try to comment below:


		<div id="cusdis_thread"
		data-host="https://cusdis.com"
		data-app-id="753c115a-e791-4f69-9443-da8ddf73b1bb"
		data-page-id="123456789"
		data-page-url="https://roywikan.github.io/cusdis-wp-comment-plugin/"
		data-page-title="cusdis-wp-comment-plugin" >		
		</div>
		
		<script async defer src="https://cusdis.com/js/cusdis.es.js"></script>

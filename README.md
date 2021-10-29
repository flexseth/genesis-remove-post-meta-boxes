# genesis-remove-post-meta-boxes
Remove extra meta boxes from pages &amp;/or posts in the Genesis Framework.
Simply add this snippet (without the opening php tag) to your child theme's functions.php file.

If you want to keep a meta box, delete the line with the cooresponding `remove_meta_box` code.
As the snippet is configured now, it will remove the *Scripts* and *SEO settings* on every post and page. 

# Third Party SEO Plugins
If you are using a third party SEO Plugin such as WordPress SEO by Yoast, All-in-One SEO pack etc - these meta boxes may already be removed. 

### Todo

- [ ] Test to see if this snippet conflicts with WordPress SEO meta box settings (Unlikely)

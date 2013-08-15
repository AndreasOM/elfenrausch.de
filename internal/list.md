---
title:  List
layout: default
description: List of pages and other stuff.
---
# Test

See [jekyll](http://jekyllrb.com/docs/home/)
and [markdown](http://daringfireball.net/projects/markdown/).


## Posts
<ul>
  {% for post in site.posts %}
    <li>
      <a href="{{ post.url }}">{{ post.title }}</a>
	<p>{{ post.excerpt }}</p>
    </li>
  {% endfor %}
</ul>

## Pages
<ul>
  {% for page in site.pages %}
    <li>
      <a href="{{ page.url }}">{{ page.title }}</a>
	<p>{{ page.excerpt }}</p>
    </li>
  {% endfor %}
</ul>




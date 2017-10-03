---
layout: post
title: Website Simplification
author: Sal
category: Software
tags:
- jekyll
- hosting
summary: Implementing a website.
---
```
    Keeping it simple
```

Having a personal website is all the rage. Given the long list of options where does one start. As a technologist I'm always trying out new ideas and prototyping solutions. So let's take a look at how I arrived at the current **Jekyll** based solution you are currently reading. 

### Requirements
The requirements:

* Must be simple!
* Free hosting with a custom domain name
* Simple content editor that supports images
* GIT-based release updates

Remarkably, this project did not require a business case, funding, the availability of a large group of people or any sponsorship from a senior executive. I managed to do it all by myself. Apart from this little writeup, all of the requirements, design and planning is maintained in that very efficient repository known as "my brain".

### Keeping It Simple

We all know what Simple is when we meet it. It's a rare experience in the corporate world. But when all the decisions are with one person, it is pretty trivial.

To appreciate **Simple** we need to have met the close cousin **Difficult**. Previous experience of implementing Content Management Systems (CMS) such as Drupal and Typo is verging on an enterprise grade platform. The hosting and config of these open source beasts will require rolled up sleeves and a few iterations to get it into shape. Achievable but not Simple!

The **Simple** solution that I am using to braodcast this content is courtesy of **Jekyll**. A very simple and lightweight framework that makes it very easy to configure and deliver content. 

The Jekyll setup is well [documented](http://jekyllrb.com/docs/home/). The ideas are captured in a file using a simple **Markdown** editor such as **MacDown**. Once setup on your local machine the next big step is Hosting!

### Free Hosting

The simplest way to host a **Jekyll** website is to create a free GitHub account and upload the full website as a Git repository. With a little tweaking, this will magically dispatch your content to users as website via a dedicated url eg ***yourwebsite.github.io***. The GitHub platform is a native user of the **Jekyll** framework and there are [simple instructions](https://help.github.com/articles/using-jekyll-as-a-static-site-generator-with-github-pages/) available for serving your web content to users. 

The hosting option I have used is based on the excellent and free PaaS offered by [Redhat Openshift](https://www.openshift.com/). Once configured with the **Jekyll** gears the hosted solution is accessible via a dedicated url which can be aliased to a custom domain by setting up a DNS entry with a CNAME mapping. A couple of mouse clicks and follow the [simple instructions](https://hub.openshift.com/quickstarts/41-jekyll) and a robust hosted website will be up and running.

### Content Editor

Let's face it, the whole raison d'etre for having a website is to publish content. Content creation for your **Jekyll** website must be written in [Markdown syntax](http://daringfireball.net/projects/markdown/syntax#overview) and there are so many great editors available that will make writing posts fun. There is a great [review of Markdown and available editors](https://www.raywenderlich.com/119949/top-five-markdown-editors). However, in simple terms each post will be contained within a single file. The filename of this post is *2017-03-29-website-simplification.md*. The naming convention is automatically used to sort your posts in date order. I use [MacDown](https://macdown.uranusjr.com/) to write up my posts and store the files in the _posts folder.

The Markup syntax allows images to be easily incorporated into posts. A good way to manage images is to keep them in a separate folder to your post files. The directory structure might look like this:

```
    posts folder:
  		2017-03-29-website-simplification.md
  		...
  		
  	images folder:
  		2017-03-29-website-simplification-01.png
		2017-03-29-website-simplification-02.jpg
		...
```

You get the idea. This makes it easy to pick out the images associated with any post. 

### GIT Based Release

GIT is perhaps a little too technical for casual users who do not have a developer background. But it's relatively simple but extremely powerful tool for managing changes to documents. There are plenty of [explanations](https://juristr.com/blog/2013/04/git-explained/) available if you want tio find out more. There are command line versions of git available which allow you to manage the version history of your files. These are a great fallback option if you are stuck.

But a free version of [Gitkraken](https://www.gitkraken.com/) makes life so much easier to provide a GUI based secure front end to GIT. Tracking changes and updates to your website becomes simple and fun.

The full flow of content from idea to served web content is orchestrated with a good mix of tools that simplify the process and the best part, it costs nothing!

### Summary

You may be thinking, why bother with all this? Why not just post the content on to a blogger site? Well if you are the sort of person that yearns for a microwave meal, then that is certainly an option. This solution is not quite a meal at the Savoy, but it's a pretty decent Spag Boll meal that you have built with some decent labour. Enjoy!!


---
layout: post
title: GIT history pruning
author: Sal
category: Software
tags:
- git
- cookbook
summary: DevOps cookbook.
---
 
To remove the git history and baseline the repository to the latest node follow these manual steps:

```
git checkout --orphan newBranch
git add -A  # Add all files and commit them
git commit
git branch -D master  # Deletes the master branch
git branch -m master  # Rename the current branch to master
git push -f origin master  # Force push master branch to github
git gc --aggressive --prune=all     # remove the old files
```
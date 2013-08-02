## Pergen Productions Official Website Designed and implemented by Mexo Inc.
=================

### Git Remote Reference
---------
Link: [http://gitref.org/remotes/](http://gitref.org/remotes/)

### reset the index to the desired tree
---------
git reset 56e05fced

### move the branch pointer back to the previous HEAD
---------
git reset --soft HEAD@{1}
git commit -m "Revert to 56e05fced"

### Update working copy to reflect the new commit
---------
git reset --hard

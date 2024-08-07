# Stale Pages extension
This is an **unofficial** git mirror of
https://www.mediawiki.org/wiki/Extension:Stale_Pages.  That extension is
unmaintained and was never migrated from svn to git; I created this mirror so
I could more easily continue using it in my own wiki.

You can view the subversion commit history at
https://phabricator.wikimedia.org/diffusion/SVN/history/trunk/extensions/StalePages/.

_**Unmaintained:** This fork is no longer updated and does not work with
MediaWiki >= 1.36!  Use the built-in **Oldest pages** as described below under
Alternatives._

## Using as a git submodule
MediaWiki extensions can be tracked as git submodules, whether you're following
upstream git, or, as I am, using the tarball releases and tracking my
LocalSettings.php, etc.  in a private git repo.
```
git submodule add <repo_url> extensions/StalePages
git submodule update --init --recursive
```

## Enabling in MediaWiki
As directed on [the extension page](https://www.mediawiki.org/wiki/Extension:Stale_Pages),
load the extension in `LocalSettings.php`, and optionally set the cutoff for
pages being considered "stale":
```
require_once( "$IP/extensions/StalePages/StalePages.php" );
$wgStalePagesDays = 365;
```
The default value for `$wgStalePagesDays` is 270.

Visiting the **Special:StalePages** page will list the pages modified more than
`$wgStalePagesDays` ago, ordered oldest to newest.

## Alternatives
The built-in **Special:AncientPages** page (listed as "Oldest pages") has
similar functionality, but lists _all_ pages, oldest to newest, without a
cutoff.  Since MW 1.32 it supports an `AncientPagesQuery` hook allowing you to
modify its query, e.g. to add a date condition.

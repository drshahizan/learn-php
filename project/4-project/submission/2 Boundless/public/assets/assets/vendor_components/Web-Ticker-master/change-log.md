---
handle: change-log
canonical: https://maze.digital/webticker/change-log/
title: Web Ticker Change Log | The development path of Web Ticker
description: The jQuery Web Ticker has developed over time, this change log keeps track of the most important changes you need to note before upgrading.
---

##Change Log

3.0.0

 - Added Ability to choose between Ease or Linear transitions
 - Injected required CSS rules in JS file
 - Fixed bug when updating with multiple new `<li>` items - only the last new item was being added
 - Fixed bug when adding a new `<li>` item in non-duplicate setting - ordering was not being handled well
 - Fixed bug when updating the list with shorter content than the original - duplication only filled the row partially
 - Fixed bug when resizing - width of the ticker was not being updated
 - Fixed bug when having a very long `<li>` item crashed the ticker - when trying to compare width of items to width of the ticker
 - Change of Licenses - now features GPLv3, Commercial & OEM Licenses
 - Added substantial documentation, and migrated repository to Maze Digital

2.1.1

 - Fixed CSS3 Support for Firefox
 - Fixed CSS3 Check function to support Fallback for IE

2.1.0

 - Added CSS3 Transition Support
 - Improved cods & closures
 - No need to set unique IDs when running multiple tickers with different options
 - Streamlined the update Swap Feature
 - Added two new boolean parameters to the Update function [insert/remove]

2.0.0

 - Complete Rewrite and restructuring of the Ticker
 - Added the ability to Update the ticker live
 - Added ability to load RSS & update periodically (same domain)
 - Breaking compatibility from 1.x
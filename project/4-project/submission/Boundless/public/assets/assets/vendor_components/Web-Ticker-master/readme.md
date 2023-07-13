---
canonical: https://maze.digital/webticker/
license: https://maze.digital/webticker/license/
use-cases: https://maze.digital/webticker/use-cases/
examples: https://maze.digital/webticker/examples/
faq: https://maze.digital/webticker/faq/
change-log: https://maze.digital/webticker/change-log/
---

#Web Ticker v3.0.0

##Web Ticker - what is it for?

Web Ticker is a jQuery plugin that allows you to have items scrolling indefinitely across the screen. It uses some fancy calculations to ensure smooth continuous transitions. The Web Ticker content, can be varied, including text, image lists or even custom styled items. The Web Ticker API can also be used to control the scrolling, and content programatically.

##Install & Configure

###Installation

All you should need to do is look at a few of our simple examples to get started.
Continue reading for step by step instructions.

1. Make sure that jQuery is available on your page, if you do not have jQuery you can include a Google hosted version by copying the code below:

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

2. Download the standalone <a href="https://raw.githubusercontent.com/mazedigital/Web-Ticker/master/jquery.webticker.min.js" target='blank'>jquery.webticker.min.js</a> or install via npm

		npm install webticker

	and include it like this:

		<script src="./path/to/jquery.webticker.min.js"></script>

3. Make sure you have a valid list(s) in HTML and that you can identify and select

		<ul id="webTicker">
			<li>This List Item will scroll infintely</li>
			<li>And this one will follow it</li>
			<li>Finally when it goes out of screen, it will queue again at the end</li>
		</ul>

4. In your Javascript file, select with jQuery the list you want to convert to a ticker, and run the webTicker function.

		$('#webTicker').webTicker();

WebTicker is now activated on the list with id 'webTicker'.

###Settings {#settings}

When initializing the web ticker you may pass parameters to modify the settings of the web ticker. This is completely optional and used to meet your specific needs.

| Setting | Description | Default |
|:-------:|-------------|---------|
| speed   | The movement speed in pixels per second | 50 |
| moving  | Defines if the WebTicker should start in moving state or a paused state | true |
| startEmpty  | Defines whether the elemtents should start outside of the visible area | true |
| duplicate  | Indicates that items should be duplicated if necessary to remove any white space | false |
| hoverpause  | Pauses the animation if the user hovers over the ticker | true |
| rssurl  | The URL of the RSS Feed (pay attention to cross domain restrictions) | false |
| rssfrequency  | The time (in minutes) it takes to refresh the RSS Feed. 0 means no update | 0 |
| updatetype  | Defines if the data update will `reset` the ticker including only new items or `update` items inline | reset |
| transition  | The easing function used throughout for transitions | linear |
| height  | The height of the ticker element. The string value needs to include the unit | '30px' |
| maskleft  | The image to be used for overlay masking on the left side | '' |
| maskright  |  The image to be used for overlay masking on the right side | '' |
| maskwidth  | Defines the width of the Mask (used for fade-in and fade-out) | 0 |


###Methods {#methods}

Methods can be called using javaScript on the element of the web ticker. The below table illustrates the available methods.

| Method  | Description | Example |
|:-------:|-------------|---------|
| stop   | Stops the elements of the ticker in the current position | <a href="/webticker/examples/#news">Stop Example</a> |
| cont  | Continues scrolling the elements from the current position. | <a href="/webticker/examples/#news">Continue Example</a> |
| update  | The update functionality supports two modes 'swap' and 'reset' which are set accordingly when the ticker is started. The swap functionality uses data-update attributes to identify uniquie items in the list. When a node value is changed this is just 'swapped' leaving it in the same positions. Items not in the 'update' list are not removed whilst new ones would be added at the end. This behaviour can be altered by passing the last two parameters, insert & remove. A boolean value of true would indicate new items to be added/removed respectively. The default values for 'insert' is true whilst 'remove' is false. | <a href="/webticker/examples/#news">Update Example</a> |
| transition  | Defines which of the transitions to use. The available transisions are 'linear', which scrolls at a normal and steady speed, and 'ease' which slows down as an item exits the edge of the ticker border. | <a href="/webticker/examples/#finance">Transition Example</a> |


###Styling {#styling}

Styling the WebTicker is pretty much up to you as a developer, however the WebTicker does alter the dom slightly, and 

###Markup Explained {#markup-explained}

The final mark up would look something like the below:

	<div class="tickercontainer">
		<div class="mask">
			<ul id="WebTicker">
    			<li class="ticker-spacer"></li>
				<li>This List Item will scroll infintely</li>
				<li>And this one will follow it</li>
				<li class="last" >Finally when it goes out of screen, it will queue again at the end</li>
    		</ul>
			<span class="tickeroverlay-left">&nbsp;</span>
			<span class="tickeroverlay-right">&nbsp;</span>
		</div>
	</div>

Elements Explained:

| Class  | Description |
|:-------:|-------------|
| tickercontainer   | wraps the ticker, setting the height and width. |
| mask   | primarily used when masking/overlays are required, is another `container` wrapper |
| ticker-spacer   | Used when there is not sufficient space to fill the ticker with items (white space) |
| tickeroverlay-left   | a class which can be used to define an overlay on top of the webticker (used when defining a left overlay image) |
| tickeroverlay-right   | a class which can be used to define an overlay on top of the webticker (used when defining a right overlay image) |
| last   | used when adding new items, as a refernece to the last initialized item |

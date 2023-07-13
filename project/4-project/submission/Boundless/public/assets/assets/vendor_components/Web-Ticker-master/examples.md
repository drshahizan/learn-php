---
handle: examples
canonical: https://maze.digital/webticker/examples/
title: Web Ticker Examples | Using the various webticker options
description: A guide showing how you update existing ticker data, stopping the animations, using different ease functions or setting up your ticker with images.
---

##Examples

Below are examples of different methods that can be used with the web ticker.

### Example 1: Updating the Ticker Content {#update}

<div class="ticker-wrapper">
	<ul id="webticker-update-example" >
		<li data-update="item1">WebTicker v3.0.0 has just been released! Read the new documentation.</li>	
		<li data-update="item2">WebTicker v3.0.0 now has commercial licenses available</li>
	</ul>
</div>
<div class="ticker-controls">
	<ul>
		<li><a id="update-newsticker1">Update first ticker</a></li>
	</ul>
</div>
 
#### HTML

The Markup Used for Initializing the Web Ticker

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ {.html}
<ul id="webticker-update-example" >
	<li data-update="item1">WebTicker v3.0.0 has just been released! Read the new documentation.</li>	
	<li data-update="item2">WebTicker v3.0.0 now has commercial licenses available. Check which license is applicable for you.</li>
</ul>
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 

#### Starting the Web Ticker

The first ticker is running the default options with an exception to the height, which is being set to 75px.

	$("#webticker-update-example").webTicker({
		height:'75px'
	});
 
#### Updating the Data

The update method is called using the below trigger.

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ {.javascript}
$("#update-newsticker1").click(function(){
	$("#webticker-update-example").webTicker('update',
		'<li data-update="item1">Web Ticker v3.0.0 has just been released! And the documentation has become even better!</li> 
		 <li data-update="item2">The Web Ticker v3.0.0 commercial license no longer binds you to make your projects open source.</li> 
		 <li data-update="item3">An OEM License is also available if your would like to make the WebTicker part of your website builder</li>
		 <li data-update="item4">Maze Digital will now be commercially supporting the Web Ticker</li>',
		'swap',
		true,
		false
	);
});
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 


### Example 2: Stop/Continue Ticker Scrolling {#stop-cont}

<div class="ticker-wrapper">
	<ul id="webticker-stop-continue-example" >
		<li data-update="item1">WebTicker v3.0.0 has just been released! </li>	
		<li data-update="item2">These items will be constantly repeated.</li>
	</ul>
</div>
<div class="ticker-controls">
	<ul>
		<li><a id="stop-newsticker2">Stop first ticker</a></li>
		<li><a id="continue-newsticker2">Continue first ticker</a></li>
	</ul>
</div>

#### Settings Used

The second ticker is using some of the available options; such as having hover-pause disabled, transition set to 'ease' and 'duplicate' set to true.

	$("#webticker-stop-continue-example").webTicker({
		height:'75px', 
		duplicate:true, 
		rssfrequency:0, 
		startEmpty:false, 
		hoverpause:false, 
		transition: "ease"
	}); 

#### Methods Used

The stop method is called using:

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ {.javascript}
$("#stop-newsticker2").click(function(){
	$("#webticker-stop-continue-example").webTicker('stop');
});
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 

The continue method is called using:

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ {.javascript}
$("#continue-newsticker2").click(function(){
	$("#webticker-stop-continue-example").webTicker('cont');
});
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 

### Example 3: Transition Easing {#transitions}

<div class="ticker-wrapper">
	<ul id="webticker-transition-ease" >
		<li data-update="item1">Maze Digital - Crafting Digital Experiences</li>	
		<li data-update="item2">Web Ticker v3.0.0 another digital experience crafted by Maze Digital</li>
	</ul>
</div>
<div class="ticker-controls">
	<ul>
		<li><a id="linear-financeticker">Transition Linear</a></li>
		<li><a id="ease-financeticker">Transision Ease</a></li>
	</ul>
</div>

#### Methods Used

The ease transition method is called using:

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ {.javascript}
	$("#ease-financeticker").click(function(){
		$("#webticker-transition-ease").webTicker('transition', 'ease');
	});
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 

The linear transition method is called using:

~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ {.javascript}
	$("#linear-financeticker").click(function(){
		$("#webticker-transition-ease").webTicker('transition', 'linear');
	});
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ 

### Example 4: Right-to-left {#right-to-left}

<div class="ticker-wrapper">
	<ul id="right-to-left-webticker" dir="ltr">
		<li data-update="item1"> وقد تم الافراج عن عادل WebTicker 3.0.0! الرخص التجارية المتاحة.</li>	
		<li data-update="item2"> WebTicker 3.0.0 עתה שוחרר! רישיונות מסחריים זמינים.</li>
	</ul>
</div>

#### HTML

	<ul id="right-to-left-webticker" dir="ltr">
		<li data-update="item1"> وقد تم الافراج عن عادل WebTicker 3.0.0! الرخص التجارية المتاحة.</li>	
		<li data-update="item2"> WebTicker 3.0.0 עתה שוחרר! רישיונות מסחריים זמינים.</li>
	</ul>

#### Settings Used

The ticker can be set to scroll from left to right using the following initializing settings.

	$("#right-to-left-webticker").webTicker({
		height:'75px', 
		direction: 'right'
	});

### Example 5: Images {#images}

<div class="ticker-wrapper images">
	<ul id="images-webticker">
		<li>
			<img style='width:200px; height: 150px;' src="/workspace/assets/img/webticker/MER_800_600.jpg"/>
		</li>
	</ul>
</div>

#### HTML

The fifth ticker includes images instead of plain text.
~~~~~~~~~~~~~~~~~~~~~~~~~~~~ {.html}
<div class="ticker-wrapper">
	<ul id="images-webticker">
		<li>
			<img style='width:200px; height: 150px;' src="/workspace/assets/img/webticker/MER_800_600.jpg"/>
		</li>
	</ul>
</div>
~~~~~~~~~~~~~~~~~~~~~~~~~~~~

### Example 6: RSS {#rss}

Rss Feeds are automatically supported by the ticker; note that as per javascript cross-domain restrictions you can only load RSS feeds from your own website.

	$("#webticker").webTicker({
		rssurl:'http://maze.digital/rss/', 
		rssfrequency:5
	});

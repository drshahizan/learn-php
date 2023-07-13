---
handle: use-cases
canonical: https://maze.digital/webticker/use-cases/
title: News Ticker, Stock Ticker & Image Ticker with jQuery Web Ticker
description: A list of possible use cases of how you can use the jQuery Web Ticker, from news tickers to stock tickers, to image tickers.
---


##Use Cases

Below are examples of different uses for the web ticker.

### Use Case 1: News Ticker {#news}

News changes fairly frequently, at times you may want to offer byte-sized headlines going across your website for your customers to knwo what is going on. The continous functionality of the WebTicker with the option to pause on hover is great to allow your users to interact with this content. Most importantly, all the items can be in themselves links, taking your users to the relevant articles.

<div class="ticker-wrapper">
	<ul id="news-webticker" >
		<li data-update="item1">WebTicker v3.0.0 has just been released! Read the new documentation.</li>	
		<li data-update="item2">WebTicker v3.0.0 now has commercial licenses available</li>
		<li data-update="item3">News can potentially be dynamically updated and WebTicker can do just that!</li>
	</ul>
</div>

### Use Case 2: Stock Ticker {#finance}

Tick rates change and update all the time, Web Ticker is a great way to show updated pricing to your clients. Through the update facility you can update the ticks as frequently as you want. Note example below does not contain real data but is rather used to show a possible concept use. Other than stock ticker, this is also found as *live rates ticker*, *forex ticker* and *market ticker* amongst other variations, particularly as it's used to represent changing values in the market. Company symbold represented in the ticker are usually referred to as ticker symbols.

<div class="ticker-wrapper">
	<ul id="finance-webticker" >
		<li data-update="item1">EUR/USD <span style="color:red;">1.13</span></li>	
		<li data-update="item2">EUR/JPY <span style="color:green;">1.13</span></li>	
		<li data-update="item3">EUR/GBP <span>1.13</span></li>
		<li data-update="item4">EUR/SEK <span style="color:green;">1.13</span></li>	
		<li data-update="item5">EUR/CHF <span style="color:green;">1.13</span></li>	
		<li data-update="item6">EUR/CAD <span>1.13</span></li>
		<li data-update="item7">EUR/NZD <span style="color:red;">1.13</span></li>
		<li data-update="item8">EUR/AUD <span style="color:red;">1.13</span></li>
	</ul>
</div>

### Use Case 3: Image Ticker {#images}

Do you work with a lot of great companies? Maybe you've been featured in too many places, WebTicker can also be used to showcase images. We've seen it used to highlight partners as well as to showcase photo galleries in a snapshot.

<div class="ticker-wrapper images">
	<ul id="images-webticker">
		<li><img style='width:200px; height: 150px;' src="/workspace/assets/img/webticker/MER_800_600.jpg"/></li>
	</ul>
</div>
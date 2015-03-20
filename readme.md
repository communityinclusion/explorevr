If you like to make things with code and/or data, ExploreVR.org may have some extra-interesting stuff for you. Let me show you around.

Code and Design

We built ExploreVR.org taking some awesome open source frameworks and libraries and smashing them together. Namely:

HTML5 Boilerplate with Reset and Modernizr
Twitter Bootstrap CSS and JS (via Initializr)
jQuery
We leave all the above untouched, and override as needed with our own custom CSS and JS files, so that I can update the frameworks without messing up the customization. I use PHP to create the template system, and then build pages that way (no proper CMS).

Now that we have a solid, responsive (and hopefully attractive) base template, we need to give it something to display. For this version we concentrated on maps and charts. Our goal was to post raw data in a public place, in this case a web service, and then pull it back into our own site in a visual way. This way we are building something cool, but allowing anybody else to build something cool with the same data on their site.

Maps

For our data-rich maps we used two service provided by Google: Fusion Tables and Maps. Spreadsheets convert easily to Fusion Tables, and then by defining certain columns as location data, or merging with publicly available geographic data, were were able to create maps within Fusion Tables. We then used some JQuery to stack maps on top of each other to give the illusion of interactive layers. The raw data is available to view or download alongside the data.

Charts

For charts and graphs our data team used Socrata Open Data a free service. The service allows you to upload data and then make charts and graphs based on views of the data. Once the data team had their charts built, we simply embedded the charts using the Socrata Social Data Player provided.

Accessibility

The base templates are very accessible HTML5 with some ARIA roles. We chose to use visualization tools that didn't rely on Flash or images to render the data. With the maps, the useful data is layered atop the map. With Charts the data is rendered in html5 in the Socrata Social Player. For those who find the visualization layer an impediment, the raw, tabular data is always provided alongside the visualized version.

Collaboration

Data

If you want to build your own maps, charts and view of the data you should be able to go to these two services (Google and Socrata) and create your own visualizations. If you are limited by the read-only status, simply copy the data to your own computer or account and have at it. If you want to merge data with your own datasets, that is possible too. If you build something you think is interesting, we'd love to hear about it, feel free to contact us. If you find errors in our data, feel free to alert us.

Code

Our code is publicly available on Github. Feel free to clone or fork it for your own purposes. If you want to make any improvements to the code (and I would love you forever if you did), you can fork it and do pull requests. You can use Github to report bugs or request features as well.

Wrap up

So that is a rough overview of what we've got for you. We hope you use the site to explore all the great VR data we have or you. We will be adding and visualizing more datasets, as well as creating some data-rich publications that summarize and visualize some of our findings. Keep track of this space. Also, we encourage use our data and code to share and share alike, or just make or suggest improvements to what is here. Now go forth, explore and create!

[![Join the chat at https://gitter.im/communityinclusion/explorevr](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/communityinclusion/explorevr?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
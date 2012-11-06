<?php include_once "before.php"; ?>
<article>
		<h3>Collaboration</h3>

<p>The interactive map below draws on data relating to VR agency collaboration with other state agencies or programs as reported in the 2011 National Survey of State Vocational Rehabilitation Agencies.</p>

<p>Each tab in the graphic below represents one type of agency with which VR agencies report collaboration.</p>

<p>Click through each tab to see the distribution of collaboration across the United States and its territories. Click on an individual state to learn more information.</p>
<p>Source: the 2011 National Survey of State Vocational Rehabilitation Agencies</p>

<p><em>Note: The 2011 National Survey of State Vocational Rehabilitation Agencies asked respondents about collaboration in terms of “your state VR agency’s relationship with other local and state agencies in terms of coordinating service delivery; sharing space, funding for programs and customers, staff and data; and managing Community Rehabilitation Provider (CRP) and vendor relations.”</em></p>
<div class="alert info">
<ul style="list-style-type:none;">
<li>Green = Partnership</li>
<li>Red = No partnership</li>
<li>No color = No response</li>
</ul></div>

<div class="rounders">
<div class="navbar">
  <div class="navbar-inner">
   
    <ul id="map_nav" class="nav">
      <li class="active"><a href="#map1" >IDD Agency</a></li>
				<li><a href="#map2">MH Agency
</a></li>
				<li><a href="#map3"> Welfare / TANF Agency
</a></li>
    </ul>
  </div>
</div>

<div id="mapper" data-spy="scroll" data-target="#map_nav" data-offset="400">    



            <p id="map1"><strong>IDD Agency</strong></p>
                          <iframe  width="700" height="400" scrolling="no" frameborder="no" src="https://www.google.com/fusiontables/embedviz?viz=MAP&amp;q=select+col6+from+1PkYdUuzLgeZTKU2fVk24SACHXcCml6tjHVkyO5Y+where+col1+in+(&#39;No&#39;%2C+&#39;Yes&#39;%2C+&#39;Yes+(General+Agency%2C+Blind+Agency)&#39;%2C+&#39;Yes+(General+Agency)&#39;%2C+&#39;Yes+(Blind+Agency)&#39;)&amp;h=false&amp;lat=38.378718426553014&amp;lng=-96.36539249999993&amp;z=4&amp;t=1&amp;l=col6&amp;y=2&amp;tmplt=1"></iframe>

             <p id="map2"><strong>MH Agency</strong></p>
                		<iframe id="map2" width="700" height="400" scrolling="no" frameborder="no" src="https://www.google.com/fusiontables/embedviz?viz=MAP&amp;q=select+col6+from+1MJNhAL7iUkbw71sYGWb-ghmxxer9It5ycZf-Mmo+where+col2+in+(&#39;No&#39;%2C+&#39;Yes&#39;%2C+&#39;Yes+(General+Agency%2C+Blind+Agency)&#39;%2C+&#39;Yes+(General+Agency)&#39;%2C+&#39;Yes+(Blind+Agency)&#39;)&amp;h=false&amp;lat=38.378718426553014&amp;lng=-96.36539249999993&amp;z=4&amp;t=1&amp;l=col6&amp;y=2&amp;tmplt=1"></iframe>
              <p id="map3"><strong>Welfare / TANF Agency</strong></p>
             			<iframe id="map3" width="700" height="400" scrolling="no" frameborder="no" src="https://www.google.com/fusiontables/embedviz?viz=MAP&amp;q=select+col6+from+1JDPO1BzYe2rXXnXppFHIzKvY7G-7exEX5TF03Sc+where+col3+in+(&#39;No&#39;%2C+&#39;Yes&#39;%2C+&#39;Yes+(General+Agency%2C+Blind+Agency)&#39;%2C+&#39;Yes+(General+Agency)&#39;%2C+&#39;Yes+(Blind+Agency)&#39;)&amp;h=false&amp;lat=38.378718426553014&amp;lng=-96.36539249999993&amp;z=4&amp;t=1&amp;l=col6&amp;y=2&amp;tmplt=1"></iframe>
         
</div>
<p><em>*Please zoom out to view data for Alaska, Hawaii and the territories</em></p>

<button type="button" class="btn " data-toggle="collapse" data-target="#demo">
  View Data
</button>
 
<div id="demo" class="collapse "> 
  <p><a target="_NEW" href="https://www.google.com/fusiontables/DataSource?docid=1PkYdUuzLgeZTKU2fVk24SACHXcCml6tjHVkyO5Y">Download this data</a></p>
<iframe width="700" height="400" scrolling="yes" frameborder="no" src="https://www.google.com/fusiontables/embedviz?viz=GVIZ&amp;t=TABLE&amp;containerId=gviz_canvas&amp;q=select+col0%2C+col1%2C+col2%2C+col3%2C+col4+from+1PkYdUuzLgeZTKU2fVk24SACHXcCml6tjHVkyO5Y"></iframe>
</div>
</div>

</article>
<?php include_once "after.php"; ?>

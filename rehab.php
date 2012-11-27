<?php include_once "before.php"; ?>

<article>
		
<h3>Rehabilitation Rates for all Individuals Exiting VR After Receiving Services and Special Populations by Type of Parent Agency (DSA)</h3>
<p>In the 2011 National Survey of State Vocational Rehabilitation Agencies we asked VR agencies to report where they are located within the government structure of their state—their Designated State Agency (DSA) or “parent agency.” Based on survey responses to this question we categorized VR agencies into 1 of 5 categories: Labor / Workforce, Independent (they do not have a parent agency), Human/Social Services, Education, or Other. We paired this data with RSA-911 rehabilitation rate data to analyze rehabilitation rates based on parent agency. Rehabilitation rate is the ratio of successful closures (Status 26) relative to the sum of successful closures and people not rehabilitated with an IPE (Status 28). We created two charts, one for general and combined agencies and one for blind agencies. Rehabilitation rates for the following population groups are specifically included:</p>
<ul>
<li>Rehabilitation Rate for all case closures [Status 26/(Status 26 +Status 28)] </li>
<li>Transition age people (14 to 24)</li>
<li>People ages 65 and older</li>
<li>People who received SSI at application</li>
<li>People who received SSDI at application</li>
</ul>
<p>Clicking on the legend will allow you to manipulate the chart to only see data relevant to your needs or interests.</p>

<p><em>Note: Location data should not be used independently because of external factors (i.e. Order of Selection).</em></p>

<h3>Rehabilitation Rates by Agency Location (General / Combined Agencies)</h3>
<div><iframe width="760px" title="Chart: Rehabilitation Rates by Agency Structure (General / Combined Agencies)" height="646px" src="https://opendata.socrata.com/w/kh7m-6wgn/y34g-bnf3?cur=tSidaRe18vV&from=root" frameborder="0" scrolling="no"><a href="https://opendata.socrata.com/Government/Chart-Rehabilitation-Rates-by-Agency-Structure-Gen/kh7m-6wgn" title="Chart: Rehabilitation Rates by Agency Structure (General / Combined Agencies)" target="_blank">Chart: Rehabilitation Rates by Agency Structure (General / Combined Agencies)</a></iframe><p><a href="http://www.socrata.com/" target="_blank">Powered by Socrata</a></p></div>
<p>Sources: The 2011 National Survey of State Vocational Rehabilitation Agencies; RSA-911 FY2010</p>
<h3>Rehabilitation Rates by Agency Location (Blind Agencies)</h3>
<div><iframe width="760px" title="Chart: Rehabilitation Rates by Agency Structure (Blind Agencies)" height="646px" src="https://opendata.socrata.com/w/vwyt-kbni/y34g-bnf3?cur=jZFyFr5XZ_n&from=root" frameborder="0" scrolling="no"><a href="https://opendata.socrata.com/Government/Chart-Rehabilitation-Rates-by-Agency-Structure-Bli/vwyt-kbni" title="Chart: Rehabilitation Rates by Agency Structure (Blind Agencies)" target="_blank">Chart: Rehabilitation Rates by Agency Structure (Blind Agencies)</a></iframe><p><a href="http://www.socrata.com/" target="_blank">Powered by Socrata</a></p></div>
<p>Sources: The 2011 National Survey of State Vocational Rehabilitation Agencies; RSA-911 FY2010</p>

<h3>Rehabilitation Rates by RSA Disability Category</h3>
<p>The rehabilitation rates for each type of disability at agency level were generated using RSA-911 FY2011 personal level data following these steps.</p>
<ol>
  <li>Individuals were categorized into nine mutually exclusive disability groups (Visual, Hearing, Orthopedic, Intellectual, Substance abuse, Mental health, Learning disability, Traumatic brain injury and Other) based on the primary impairment and cause of primary impairment reported. Nine dichotomized dummy variables were created.</li>
  <li>Individuals were categorized into two mutually exclusive outcome groups—closed after an employment outcome with an IPE (Status 26) and no employment outcome with an IPE (Status 28). Two binary dummy variables were created for these two groups.  We then created our new variable by multiplication of the disability group with the outcome group:</li>
  	<ol type = "a">
  		<li>Disability type with Status 26 (i.e. Visual x Status 26)</li>
  		<li>Disability type with the sum of Status 26 and Status 28 (i.e. [Visual x (Status 26 + Status 28)]</li>
  	</ol>
  <li>We aggregated the sum of the two set of interactions calculated from previous step to get agency level data from personal level data.</li>
  <li>Finally, rehabilitation rate was calculated by dividing the total number of status 26 of a specific disability by the total number of  IPEs (status 26 + Status 28) of that specific disability (i.e. ∑(Visual x Status 26) / ∑ [Visual x (Status 26 + Status 28)].</li>
</ol>
<div><iframe width="760px" title="Chart: Rehabilitation Rate by RSA Disability Category (General / Combined Agencies)" height="646px" src="https://opendata.socrata.com/w/3ggm-6fg4/y34g-bnf3?cur=IQXOrUeYPQ9&from=root" frameborder="0" scrolling="no"><a href="https://opendata.socrata.com/dataset/Chart-Rehabilitation-Rate-by-RSA-Disability-Catego/3ggm-6fg4" title="Chart: Rehabilitation Rate by RSA Disability Category (General / Combined Agencies)" target="_blank">Chart: Rehabilitation Rate by RSA Disability Category (General / Combined Agencies)</a></iframe><p><a href="http://www.socrata.com/" target="_blank">Powered by Socrata</a></p></div>
<p>Source: RSA-911 FY2011</p>

		</article>
<?php include_once "after.php"; ?>

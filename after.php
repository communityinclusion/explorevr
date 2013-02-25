

            <hr>

            <footer>
                <footer class="wrapper">
            <p class="muted">ExploreVR is part of the Vocational Rehabilitation Research and Training Center (VR-RRTC). The VR-RRTC is a national center that builds the capacity of the public vocational rehabilitation (VR) program to improve employment outcomes for people with disabilities. The VR-RRTC is funded by the National Institute on Disability and Rehabilitation Research and the Rehabilitation Services Administration of the US Department of Education. Visit the VR-RRTC website (<a href="http://www.vr-rrtc.org">www.vr-rrtc.org</a>) for more information about the center’s policy research, training, and technical assistance efforts.</p>
        </footer>
            </footer>

        </div> <!-- /container -->

        
        <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-962830-28']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript">
if (typeof jQuery != 'undefined') {
    jQuery(document).ready(function($) {
        var filetypes = /\.(zip|exe|pdf|doc*|xls*|ppt*|mp3|csv)$/i;
        var baseHref = '';
        if (jQuery('base').attr('href') != undefined)
            baseHref = jQuery('base').attr('href');
        jQuery('a').each(function() {
            var href = jQuery(this).attr('href');
            if (href && (href.match(/^https?\:/i)) && (!href.match(document.domain))) {
                jQuery(this).click(function() {
                    var extLink = href.replace(/^https?\:\/\//i, '');
                    _gaq.push(['_trackEvent', 'External', 'Click', extLink]);
                    if (jQuery(this).attr('target') != undefined && jQuery(this).attr('target').toLowerCase() != '_blank') {
                        setTimeout(function() { location.href = href; }, 200);
                        return false;
                    }
                });
            }
            else if (href && href.match(/^mailto\:/i)) {
                jQuery(this).click(function() {
                    var mailLink = href.replace(/^mailto\:/i, '');
                    _gaq.push(['_trackEvent', 'Email', 'Click', mailLink]);
                });
            }
            else if (href && href.match(filetypes)) {
                jQuery(this).click(function() {
                    var extension = (/[.]/.exec(href)) ? /[^.]+$/.exec(href) : undefined;
                    var filePath = href;
                    _gaq.push(['_trackEvent', 'Download', 'Click-' + extension, filePath]);
                    if (jQuery(this).attr('target') != undefined && jQuery(this).attr('target').toLowerCase() != '_blank') {
                        setTimeout(function() { location.href = baseHref + href; }, 200);
                        return false;
                    }
                });
            }
        });
    });
}
</script>
       <a href="https://github.com/communityinclusion/explorevr" id="github"><img style=" z-index:10000; position: absolute; top: 0; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
    </body>
</html>
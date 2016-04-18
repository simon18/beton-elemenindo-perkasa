<!-- BEGIN FOOTER -->
    <div class="footer">
        <div class="footer-inner">
             <?php echo date('Y'); ?> &copy; PT. Beton Elemenindo Perkasa
        </div>
        <div class="footer-tools">
            <span class="go-top">
                <i class="fa fa-angle-up"></i>
            </span>
        </div>
    </div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="assets/plugins/respond.min.js"></script>
<script src="assets/plugins/excanvas.min.js"></script> 
<![endif]-->
<script src="<?php echo $baseURL; ?>assets/plugins/jquery-1.10.2.min.js" type="text/javascript"></script>
<script src="<?php echo $baseURL; ?>assets/plugins/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<script src="<?php echo $baseURL; ?>assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="<?php echo $baseURL; ?>assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="<?php echo $baseURL; ?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="<?php echo $baseURL; ?>assets/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="<?php echo $baseURL; ?>assets/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="<?php echo $baseURL; ?>assets/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
<!-- FOR PRELOAD -->
<script src="<?php echo $baseURL; ?>assets/js/core-1.0.5.js"></script>
<script src="<?php echo $baseURL; ?>assets/js/preloadCssImages.jQuery_v5.js"></script>
<script type="text/javascript">
    $('document').ready(function() {
      /*

      Preload Images

      */
      var imgs = new Array(), $imgs = $('img');
      for (var i = 0; i < $imgs.length; i++) {
        imgs[i] = new Image();
        imgs[i].src = $imgs.eq(i).attr('src');
      }
      Core.preloader.queue(imgs).preload(function() {
        var images = $('a').map(function() {
                return $(this).attr('href');
        }).get();
        Core.preloader.queue(images).preload(function() {
              $.preloadCssImages();
        })
      })
      $('#envor-preload').hide();
    });
</script>
<!-- END CORE PLUGINS -->
<script src="<?php echo $baseURL; ?>assets/scripts/core/app.js"></script>
<script>
jQuery(document).ready(function() {    
   App.init();
});
</script>
<!-- END JAVASCRIPTS -->
<script type="text/javascript">  var _gaq = _gaq || [];  _gaq.push(['_setAccount', 'UA-37564768-1']);  _gaq.push(['_setDomainName', 'keenthemes.com']);  _gaq.push(['_setAllowLinker', true]);  _gaq.push(['_trackPageview']);  (function() {    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;    ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);  })();</script></body>
<!-- END BODY -->
</html>
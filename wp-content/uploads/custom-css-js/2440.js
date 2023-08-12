<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
 



jQuery(document).ready(function( $ ){
  jQuery('.blog-wrapper a.fusion-read-more').each(function() {
    var text = jQuery(this).text();
    jQuery(this).text(text.replace('Read More', 'קרא עוד')); 
  });
});</script>
<!-- end Simple Custom CSS and JS -->

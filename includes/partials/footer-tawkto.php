<?php
/**
 * footer-tawkto.php — Tawk.to live chat embed + preloader dismiss
 * Included by: includes/footer.php (last, after vendor scripts)
 *
 * Visitor attributes ($tawk_visitor_name, $tawk_visitor_email,
 * $tawk_visitor_phone) must be set before footer.php is included.
 * footer.php builds $__tawk_attrs_json from those variables and
 * makes it available to this partial via the shared scope.
 */
// $__tawk_attrs_json is set in footer.php from $tawk_visitor_* variables.
// Fallback to an empty object if this partial is ever included standalone.
if (!isset($__tawk_attrs_json)) {
    $__tawk_attrs_json = '{}';
}
?>
<!--Start of Tawk.to Script-->
<!-- Tawk.to widget styles extracted to assets/css/custom-fixes.css (Sprint 2) -->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
Tawk_API.onLoad=function(){
    try {
        var serverAttrs=<?php echo $__tawk_attrs_json; ?>;
        var stored = {};
        try {
            var raw = localStorage.getItem('awsTawkVisitor');
            if (raw) { stored = JSON.parse(raw) || {}; }
        } catch (e2) { stored = {}; }
        var attrs = {};
        ['name', 'email', 'phone'].forEach(function (k) {
            var sv = serverAttrs && serverAttrs[k] ? String(serverAttrs[k]).trim() : '';
            var tv = stored && stored[k] ? String(stored[k]).trim() : '';
            var v = sv || tv;
            if (v) { attrs[k] = v; }
        });
        if (Object.keys(attrs).length && typeof Tawk_API.setAttributes==='function') {
            Tawk_API.setAttributes(attrs,function(){});
        }
        if (typeof Tawk_API.showWidget === 'function') {
            Tawk_API.showWidget();
        }
        var frames=document.querySelectorAll('iframe[src*="tawk.to"]');
        for (var i=0;i<frames.length;i++){
            var f=frames[i], p=f.parentElement;
            if(p){p.style.left='0';p.style.right='auto';}
        }
    } catch (e) { /* avoid breaking Tawk if DOM/CSS APIs differ */ }
};
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69d1fa4e1772311c3585e1cd/1jle3jgku';
s1.charset='UTF-8';
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- ── Preloader dismiss ──────────────────────────────── -->
<script>
(function () {
    function dismissPreloader() {
        var el = document.getElementById('aws-preloader');
        if (!el) return;
        el.classList.add('aws-loaded');
        setTimeout(function () { el.style.display = 'none'; }, 600);
    }
    if (document.readyState === 'complete') {
        dismissPreloader();
    } else {
        window.addEventListener('load', dismissPreloader);
        /* safety: always dismiss after 4 s even if assets are slow */
        setTimeout(dismissPreloader, 4000);
    }
})();
</script>
<!-- ── /Preloader dismiss ─────────────────────────────── -->

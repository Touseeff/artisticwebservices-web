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

/* ── Interaction-deferred loader ──────────────────────────────────
   Tawk.to loads only after the first user gesture (mouse, key, touch,
   scroll) or after 5 s — whichever comes first. This keeps it out of
   the initial TBT window entirely on pages with no early interaction.
   ──────────────────────────────────────────────────────────────── */
(function(){
    var tawkLoaded=false;
    function loadTawk(){
        if(tawkLoaded)return;
        tawkLoaded=true;
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/69d1fa4e1772311c3585e1cd/1jle3jgku';
        s1.charset='UTF-8';
        s0.parentNode.insertBefore(s1,s0);
    }
    /* Load on first user interaction */
    ['mouseover','keydown','touchstart','scroll','click'].forEach(function(e){
        document.addEventListener(e,loadTawk,{once:true,passive:true});
    });
    /* Fallback: load unconditionally after 5 s */
    setTimeout(loadTawk,5000);
})();

/* ── Accessibility: title attribute on Tawk.to iframe ─────────────
   Tawk.to injects an untitled iframe, which fails WCAG 4.1.2 (frame-title).
   A MutationObserver watches for the iframe and sets its title immediately.
   ──────────────────────────────────────────────────────────────── */
(function(){
    function titleTawkFrames(){
        // Tawk injects a chat-window iframe (src contains "tawk.to") AND a launcher
        // bubble iframe whose src is "about:blank" — the old [src*="tawk.to"] selector
        // missed the launcher, so frame-title (WCAG 4.1.2) kept failing. Title
        // about:blank iframes too, but only once Tawk has genuinely loaded
        // (showWidget exists only on the real API, not the stub) so we never
        // mislabel an unrelated about:blank iframe.
        var loaded = !!(window.Tawk_API && typeof window.Tawk_API.showWidget === 'function')
                     || !!document.querySelector('iframe[src*="tawk.to"]');
        document.querySelectorAll('iframe:not([title])').forEach(function(f){
            var src = f.getAttribute('src') || '';
            if (src.indexOf('tawk.to') !== -1 || (loaded && src === 'about:blank')) {
                f.setAttribute('title','Live chat support widget');
            }
        });
    }
    var obs=new MutationObserver(titleTawkFrames);
    obs.observe(document.body,{childList:true,subtree:true});
    /* Also run immediately in case Tawk loaded before this script */
    titleTawkFrames();
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

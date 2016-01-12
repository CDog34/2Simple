<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

    </div>
</div><!-- end #body -->

<footer class="footer" role="contentinfo">
    <p class="footer-site">
      &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    </p>
    <p class="footer-theme">
      暗闇も光るなら 星そらになる<br>
      Theme Hikari By <a href="https://cdog.me" target="_blank">CDog(XD)</a>

    </p>
</footer><!-- end #footer -->

<?php $this->footer(); ?>
<script src="<?php $this->options->themeUrl('hikari.js'); ?>">

</script>
</body>
</html>

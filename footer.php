<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php //if (!$_SERVER['HTTP_X_PJAX']) {
?>
</div><!-- end #body -->

<footer class="footer" role="contentinfo">
    <p class="footer-site">
      &copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a>.
    </p>
    <p class="footer-theme">
      2 Young 2 Simple, Sometimes Naive<br>
      Theme 2Simple By <a href="https://cdog.me" target="_blank">CDog</a>

    </p>
</footer><!-- end #footer -->


    <script type="text/javascript" src="//upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.3.min.js"></script>

<script type="text/javascript" src="//filehost.izhai.net/web/jquery.pjax.js"></script>
<script src="<?php $this->options->themeUrl('hikari.js'); ?>"></script>
<?php $this->footer(); ?>
<?php if (!$this->is('index')){ ?>
<script type="text/javascript">
$(function(){
	fly($('.page-body').offset().top);
});
</script>
<?php } ?>

<div class="loader">
	<div class="cssload-thecube">
		<div class="cssload-cube cssload-c1"></div>
		<div class="cssload-cube cssload-c2"></div>
		<div class="cssload-cube cssload-c4"></div>
		<div class="cssload-cube cssload-c3"></div>
	</div>
</div>
</body>
</html>
<?php //} ?>

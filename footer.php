<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<?php //if (!$_SERVER['HTTP_X_PJAX']) {
?>
</div><!-- end #body -->

<footer class="footer" role="contentinfo">
	    	<?php echo $this->options->footerHtml ? $this->options->footerHtml : "" ?>
    <p class="footer-theme">
    	Theme 2Simple By <a href="https://cdog.me" target="_blank">CDog</a>.
    	Typecho
    </p>
</footer><!-- end #footer -->


<script type="text/javascript" src="//upcdn.b0.upaiyun.com/libs/jquery/jquery-2.0.3.min.js"></script>

<script type="text/javascript" src="//filehost.izhai.net/web/jquery.pjax.js"></script>
<script src="<?php $this->options->themeUrl('hikari.js'); ?>"></script>
<?php $this->footer(); ?>


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

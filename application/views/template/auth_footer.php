<!-- jQuery 2.2.3 -->
<script src="<?= base_url('front-end/plugins/jQuery/jquery-2.2.3.min.js') ?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?= base_url('front-end/js/vendor/bootstrap.min.js') ?>"></script>
<!-- iCheck -->
<script src="<?= base_url('front-end/plugins/iCheck/icheck.min.js') ?>"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
</div> <!-- End Row -->
</div> <!--End Container-->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/poper.js" type="text/javascript"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5a391e22c43a54c6"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/main.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.validate.min.js" type="text/javascript"></script>

<script type="text/javascript">
                        $(document).ready(function () {
                            $(function () {
                                $(".contact-form").validate({
                                    highlight: function (element) {
                                        $(element).closest('.form-group').addClass("has-danger");

                                    },
                                    unhighlight: function (element) {
                                        $(element).closest('.form-group').removeClass('has-danger').addClass('has-success');

                                    },
                                    rules: {
                                        name: {
                                            required: true,
                                            rangelength: [3, 255]
                                        },
                                        email: {
                                            required: true,
                                            email: true
                                        },
                                        message: {
                                            required: true,
                                            rangelength: [10, 255]
                                        }

                                    },
                                    messages: {
                                        name: {
                                            required: "The *Name field is required!",
                                            rangelength: "The *Name must be between 3 and 255 characters!"
                                        },
                                        email: {
                                            required: "The *Email field is required!",
                                            email: "Please enter a valid email address!"
                                        },
                                        message: {
                                            required: "The *Message field is required!",
                                            rangelength: "The *Messafe must be between 10 and 255 characters!"
                                        }
                                    },
                                    errorElement: 'p',
                                    errorPlacement: function (error, element) {
                                        error.appendTo($(element).closest('.form-group').find('.error'));
                                    }

                                });
                            });
                        });
                        //Form Validation


</script>
</body>

</html>

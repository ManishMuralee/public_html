<!--Header.php file added here -->
<body>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

        <a class="logo d-flex align-items-center">
            <img src="assets/img/logo.png" alt="">
            <span>ShortURL</span>
        </a>

        <nav id="navbar" class="navbar">
            <ul>

            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->

    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">No such short url created. Create here !</h1> <br><br>
                <h1 data-aos="fade-up">Shorten your links,for better results !</h1>
                <h2 data-aos="fade-up" data-aos-delay="400">Enter url to be shortened</h2>
                <br><br>
                <div data-aos="fade-up" data-aos-delay="600">
                    <form id="shorturl" method="post">
                        <div class="row col s12 no-padding-right">
                            <input name="url_org" placeholder="Paste a long url" required="" id="accountemaillogin" type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                            <input readonly type="text" value="" id="input_error" style="display: none">
                            <span id='copied' style="display: none"></span>
                            <span id="copyclipboard" style="display: none">
	                        <input readonly type="text" value="Click To copy Short URL" class="btn btn-primary">
                        </span>
                        </div>
                        <br>
                        <button type="submit" name="submit" class="btn btn-primary" id="shorturl_button">
                            Click to get short url
                            <i class="bi bi-arrow-right"></i>
                        </button>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
                <img src="assets/img/cover.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->


<!--jQueryCDN-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $(function () {
        $('form').on('submit', function (e) {
            e.preventDefault(); //prevent default form submit
            $.ajax({
                type: 'post',
                url: "<?php echo base_url() ?>Front/shorturlnow",
                data: $('form').serialize(),
                success: function (data) {
                    $("#input_error").show();
                    $("#input_error").val(data);
                    if(data!='Not a valid URL')
                    {
                        $("#shorturl_button").hide();
                        $("#copyclipboard").show();
                        $("#copied").show();
                    }
                }
            });

        });
        // function for short url copy clipboard
        function copy_clipboard() {
            var copyText = document.getElementById("input_error");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
        }
        $('#copyclipboard').click(function() {
            copy_clipboard();
        });

    });
</script>
<!--Footer.php file added here -->

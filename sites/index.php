<!doctype html>
<html lang="en">
<head>
	<title>Amir Shaikh</title>
    <?php include '../_partial/head.php' ?>
    <link type="text/css" href="../css/desktop-style.css" rel="stylesheet" />
</head>
<body class="desktop">
    <div class="container-fluid p-lr-none">
        <div class="col-md-3 desktop-icon" data-embed="http://intreajewels.com/">
            <img src="../img/partners/magma.png" class="center-block img-responsive" alt="" title="" />
        </div>
        <div class="col-md-3 desktop-icon" data-embed="http://www.jbsclothingcompany.com/">
            <img src="../img/partners/magma.png" class="center-block img-responsive" alt="" title="" />
        </div>
        <div class="col-md-3 desktop-icon" data-embed="http://www.loannaka.com/">
            <img src="../img/partners/magma.png" class="center-block img-responsive" alt="" title="" />
        </div>
        <div class="col-md-3 desktop-icon" data-embed="http://www.goodbye.co.in/">
            <img src="../img/partners/magma.png" class="center-block img-responsive" alt="" title="" />
        </div>
        <div class="col-md-3 desktop-icon" data-embed="http://www.sparksolar.in/">
            <img src="../img/partners/magma.png" class="center-block img-responsive" alt="" title="" />
        </div>
        <div class="col-md-3 desktop-icon" data-embed="http://www.loannaka.com/">
            <img src="../img/partners/magma.png" class="center-block img-responsive" alt="" title="" />
        </div>
        <div class="col-md-3 desktop-icon" data-embed="http://www.goodbye.co.in/">
            <img src="../img/partners/magma.png" class="center-block img-responsive" alt="" title="" />
        </div>
        <div class="col-md-3 desktop-icon" data-embed="http://www.sparksolar.in/">
            <img src="../img/partners/magma.png" class="center-block img-responsive" alt="" title="" />
        </div>
    </div>
</body>
    <?php include '../_partial/footer-scripts.php' ?>
    <script>
        $(document).ready(function(){
            $(".desktop-icon").click(function(){
                var embedData = $(this).attr('data-embed');
                alert(embedData);
                $("#embed").replaceWith("<embed id='embed' src='"+embedData+"' width='100%' height='100%' />");
            });
        });
    </script>
</html>
<?include("header.php");?>
    <div class="content">
        <div class="row">
            <div class="col-sm-8">
                <div class="post">
                    <div class="label">
                        <?=$posts["label"]?>
                    </div>
                    <h1>
                        <?=$posts["title"]?>
                    </h1>
                    <div class="post__content">
                        <?=$posts["content"]?>
                    </div>
                    <div class="post__pictures">
                        <div class="e-post__pictures">
                            <img src="application/templates/pictures/minimo_17.jpg">
                        </div>
                        <div class="e-post__pictures">
                            <img src="application/templates/pictures/minimo_23.jpg">
                        </div>
                        <div class="e-post__pictures">
                            <img src="application/templates/pictures/minimo_26.jpg">
                        </div>
                    </div>
                    <blockquote class="quote">
                        "Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo."
                    </blockquote>
                    <div class="post__content">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. <strong>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</strong> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <aside class="sidebar">
                    <div class="about-post">
                        <div class="about-post__picture">
                            <img src="application/templates/pictures/minimo_13.jpg">
                        </div>
                        <div>
                            <div class="about-post__title"><?=$about["name"]?></div>
                            <div class="about-post__content"><?=$about["about"]?></div>
                        </div>
                        <div class="social">
                            <a href=""><i class="icon icon-fb"></i></a>
                            <a href=""><i class="icon icon-inst"></i></a>
                            <a href=""><i class="icon icon-pnt"></i></a>
                        </div>
                    </div>
                    <div class="top-posts">
                        <div class="label">
                            top posts
                        </div>
                        <ul class="posts">
                            <li class="e-posts">
                                <a href="" class="e-posts__link">A day exploring the Alps</a>
                                <div class="commens-count">24 comments</div>
                            </li>
                            <li class="e-posts">
                                <a href="" class="e-posts__link">American dream</a>
                                <div class="commens-count">19 comments</div>
                            </li>
                            <li class="e-posts">
                                <a href="" class="e-posts__link">Cold winter days</a>
                                <div class="commens-count">15 comments</div>
                            </li>
                        </ul>
                    </div>
                    <div class="banner">
                        <img src="application/templates/pictures/minimo_19.jpg">
                    </div>
                </aside>
            </div>
        </div>
    </div>
    </div>
    <div class="also">
        <div class="container">
            <div class="label">
                you may also like
            </div>
            <div class="also-posts">
                <div class="col-sm-4">
                    <div class="also-posts__post">
                        <div class="also-posts__post__picture">
                            <a href=""><img src="application/templates/pictures/minimo_30.jpg"></a>
                        </div>
                        <div class="also-posts__post__title">
                            <a href="">Cold winter days</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="also-posts__post">
                        <div class="also-posts__post__picture">
                            <a href=""><img src="application/templates/pictures/minimo_32.jpg"></a>
                        </div>
                        <div class="also-posts__post__title">
                            <a href="">A day exploring the Alps</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="also-posts__post">
                        <div class="also-posts__post__picture">
                            <a href=""><img src="application/templates/pictures/minimo_34.jpg"></a>
                        </div>
                        <div class="also-posts__post__title">
                            <a href="">American dream</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?include("footer.php");?>
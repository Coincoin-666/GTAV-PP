<?php
require "../includes/header.php";
require "../controllers/pics_ctrl.php";
require "../controllers/icons_ctrl.php";
?>

<main class="container current_text mt-4">

    <div class="row g-3">
        <div class="_title">
            <h1 lang="it" class="fst-italic">Il buono, il brutto, il cattivo <span class="text-muted fs-5 exp">(1)</span></h1>
            <h2>The Good, the Bad and the Ugly</h2>
            <h3 class="text-muted mt-1">(Yes, I proudly came with this title.)</h3>
        </div>

        <article class="row g-3">
            <div class="col-md-6 d-lg-block d-md-none bg-danger">
<p>INSERT LOS SANTOS PICS HERE</p>
            </div>
            <p class="col-md-12 col-lg-6">
                For the first time in the Grand Theft Auto franchise, we will play one of three characters.<br>
                Each one of them is defined by a set of characteristics, and one special ability.<br>
                In this opus, <a href="https://www.rockstargames.com/">Rockstar Games</a> really took a particular care to the psychology of any of the characters – <em>hence the title of this article</em>.<br>
                We have been playing those games since GTA II, and although we used to want to clear the game as fast as we could to unlock all weapons, vehicles and islands and cause havoc with an army tank; in this one we really enjoyed starting over, partly because of this.<br>
                Also, we're playing in an open world from the start so there's no island to unlock.<br>
            </p>
        </article>

        <section class="container char_cards text-dark">
            <div class="row g-3">
                <article class="col-md-4 col-sm-12">
                    <div class="card" style="background-image: url(<?= $get_f_bg['path'] ?>);">
                        <img src="" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title _title">Franklin Clinton – The Good</h4>
                            <p class="card-text">Born and raised in South LS in 1988. As far as we know, he always lived there, at his aunt's house, sister of his dead mom.
                                Gangbanger, loyal to The Families, we understand that he did commit small crimes for a living with his friend Lamar, but wishes to become something more. He'll meet Michael, by chance, which will instore a weird father/son relationship.</p>
                        </div>
                        <ul class="list-group list-unstyled">
                            <li>
                                <img src="<?= (isset())  ?>">'; ?>
                            </li>
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </article>

                <article class="col-md-4 col-sm-12">
                    <div class="card" style="background-image: url(<?= $get_m_bg['path'] ?>);">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h4 class="card-title _title">Michael De Santa – The Bad</h4>
                            <p class="card-text">Formerly known as Michael Townley, notorious thief, born in ???????, and faked his death in 2013 as a retirement from his illegal affairs. He changed his name accordingdly to a deal he made with the FIB, and lived under witness protection program. He's the husband of Amanda, and a father of two children: Tracey and James.</p>
                        </div>
                        <ul class="list-group list-unstyled">
                            <li></li>
                            <li></li>
                            <li></li>
                        </ul>
                        <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </article>


                <article class="col-md-4 col-sm-12">
                    <form method="POST" name="trevor_bg">
                        <div class="card" style="background-image: url(<?= $get_t_bg['path'] ?>);">
                            <img src="..." class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="card-title _title">Trevor Philips – The Ugly</h4>
                                <p class="card-text">We don't know much about Trevor, except that he is completely crazy. Born in Canada – or as he says himself "in the Canadian border region of America" – meth-head, amphetamines addict, drug dealer, arms seller, completely unstable. He is extremely violent, as we'll see during his first mission, but very sensitive. All of this makes him a very complex character.</p>
                            </div>
                            <ul class="list-group list-unstyled">
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                            <div class="card-body">
                                <a href="#" class="card-link">Card link</a>
                                <a href="#" class="card-link">Another link</a>
                            </div>
                        </div>
                    </form>
                </article>

            </div>
        </section>
    </div>

</main>


<?php
require "../includes/footer.php";
?>
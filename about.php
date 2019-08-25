<?php 
/*
Template Name: About us
*/
get_header(); ?>
        <main class="page_main" data-image="2-professional-women-walkikng-outdoors.jpg">
            <div class="" >
                <section>
                    <div class="container bg_w">
                        <h2 class="title title-big">About us</h2>
                        <span class="title">
                            Our goals
                        </span>
                        <p>Our goal is to <b>build bridges between academies</b>. First, there is <b>donation</b> ! We
                            have been visiting academies for some time and there is a gap between academies having
                            enough equipment and academies in need. Some academies often have some spare equipment that
                            they do not use anymore. Some academies do not have enough equipment.</p>

                        <p>Then, there is <b>twinning</b>. This part of the platform is not about donation, but about
                            twinning. We all have ASCs, ITCs, but we don’t have twinning. The idea is to bring together
                            academies that will be able to build common labs across academies. Instead of building
                            topologies in your own lab, you would be able to create common labs with academies from
                            other parts of the world. The idea is to increase student satisfaction and increase their
                            commitment.</p>
                    </div>
                </section>
                <section>
                    <div class="container bg_w">

                        <h2 class="title">
                            Nos partenaires
                        </h2>
                        p1, p2, p3
                    </div>
                </section>
            </div>

            <section>
                <div class="container bg_w">

                    <h2 class="title">

                        From Belgium to Nigeria
                    </h2>
                    <p>
                        AcadExchange first successful donation was from Belgium to Nigeria ! It’s this equipment
                        donation that gave the idea for this website !
                    </p>

                    <p>
                        We’ve realised that the gap between academies having enough equipment and academies in need is
                        not acceptable. And so our academies had some spare equipment that wasn’t used anymore. We’ve
                        decided that other academies should use this equipment ! So we’ve sent it to a Cisco Academy to
                        Nigeria!
                    </p>
                </div>
            </section>
            <section id="contact">
                <div class="container bg_w">

                    <h2 class="contact title">
                        Contact us
                    </h2>
                    <form action="?" method="POST" class="form">
                        <div class="">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name">
                            <label for="forename">Forename</label>
                            <input type="text" id="forename" name="forename">
                            <label for="sub">Subject</label>
                            <input type="text" id="sub" name="sub"></div>
                        <div class="">
                            <label for="message">Message</label>
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <div class="f-solo">
                            <input type="submit" value="Envoyer" class="button">
                        </div>
                    </form>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
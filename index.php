<?php get_header(); ?>

        <main class="page_main" data-image="cisco-group-mixed-plaque.jpg">
            <section class="graphic_introduction" >
                <div class="container  bg_w">
                    <h2 class="title hidden">
                        Description
                    </h2>
                    <span class="title title-big">ACADExchange</span>
                    <p>
                        Are you a Cisco Networking Academy teaching CCNA ?
                        Are you struggling to get equipment to teach CCNA at your academy ?
                        Or are you having equipment that you do not use anymore at your academy ?<br>
                        This site might be of interest to you
                    </p>
                </div>
            </section>
            <section class=" " id="explanation">
                <div class="container bg_w">
                    <h2 class="title hidden">
                        Our goal
                    </h2>
                    <span class="title">
                        Our goal is to build bridges between academies
                    </span>
                    <p>
                        <span class="c-red mb-11">First, there is donation</span><br>
                        We have been visiting academies for some time and there is a gap between academies having enough
                        equipment and academies in need.<br>
                        Some academies often have some spare equipment that they do not use anymore. Some academies do
                        not have enough equipment.<br>
                    </p>
                    <p>
                        <span class="c-red mb-11">Then, there is twinning</span><br>
                        This part of the platform is not about donation, but about twinning. We all have ASCs, ITCs, but
                        we don't have twinning.<br>
                        The idea is to bring together academies that will be able to build common labs across academies.
                        Instead of building topologies in your own lab,
                        you would be able to create common labs with academies from other parts of the world. The idea
                        is to increase student satisfaction and increase their commitment.<br>
                    </p>
                </div>

            </section>
            <section class="">
                <div class="container  bg_w">
                    <h2 class="title hidden">
                        What can i do ?
                    </h2>
                    <span class="title">
                        What can i do ?
                    </span>
                    <ul class="discover_list list horizontal_list">
                        <li class="discover_element">
                            <img src="<?= assets('./assets/images/teacher-computers-classroom.jpg') ?>" alt="" class="discover_img img_fullsize">
                            <p class="discover_text">
                                <a href="" class="discover_button button">Donate</a>
                            </p>
                        </li>
                        <li class="discover_element">
                            <img src="<?= assets('./assets/images/students-desk.JPG') ?>" alt="" class="discover_img img_fullsize">
                            <p class="discover_text">
                                <a href="" class="discover_button button">Get equipment</span></a>
                            </p>
                        </li>
                        <li class="discover_element">
                            <img src="<?= assets('./assets/images/classroom-meeting-hands-raised-business.JPG') ?>" alt="" class="discover_img img_fullsize">
                            <p class="discover_text">
                                <a href="" class="discover_button button">Twinning</span></a>
                            </p>
                        </li>
                    </ul>
                </div>
            </section>
<?php get_footer(); ?>
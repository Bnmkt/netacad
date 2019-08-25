<?php 
/*
Template Name: Twinning
*/
get_header(); ?>
        <main class="page_main" data-image="31214.jpg">
            <section id="twinning">
                <div class="container bg_w">

                    <h2 class="title title-big">
                        Twinning
                    </h2>
                    Netacad students are probably not aware of the great community they are part of.
                    <p><span class="c-red">1.8 million students connect to the online platform through 11000 academies
                            in 180 countries...</span></p>
                    <p>
                        We intend to build bridges between academies by creating the concept of twin academies. What if
                        we
                        could create common labs across borders by using our lab equipment, but also our great
                        simulation platform
                        Packet Tracer ? By twinning with other academies, we encourage you to increase student
                        satisfaction
                        and build bridges with other academies, other cultures,... Let's build a human network thanks to
                        networking...
                    </p>
                    <p>
                        In order to create a successful twinning, please find a twin academy that matches your
                        expectations,
                        based on student level, student age, common language,...
                    </p>
                </div>
            </section>
            <section>

                <div class="container bg_w">
                    <h2 class="hidden">Twinning path</h2>
                    <p class="title">In order to twin, we ask you to follow the following path :</p>
                    <ol class="donation_ordered">
                        <li>Once you have registered on this website, please be sure that the encoded information is
                            complete and correct via My Profile. Please describe your Academy and what you expect from
                            the twinning. Choose a twin academy based on student level, student age, common language.
                            Academy instructors of both academy will agree on the goal</li>
                        <li>Based on student level, select a lab in the Following list or create your own lab. Academy
                            instructors should agree in prerequisites, timing & schedule lab session. In this step, you
                            should check the connection to the server.</li>
                        <li>Students will have prepared the lab at home or in the Classroom. Students will create an
                            account on teams.webex.com, for example, to allow for teaming with the peering academy.</li>
                        <li>Students will work in teams. For example, you will have a team of 2 students in the first
                            academy peering with 2 students in the second academy.</li>
                        <li>Students should give feedback on the activity. Each student should explain the most exciting
                            part of the lab…</li>
                    </ol>
                    <span class="c-red">
                        You can either apply for twinning by describing your academy and what you expect from twinning
                        or directly choose an academy for twinning.
                    </span>
                </div>
            </section>
            <section>
                <div class="container bg_w">
                    <h2 class="hidden">Start twinning</h2>
                    <article>
                        <h3 class="title">Describe your activities</h3>
                        <form action="?" method="POST" class="equ_form">
                            <div class="levels">
                                <p><b>Level</b></p>
                                <div class="line">
                                    <input type="radio" name="lvl[]" id="lvl1">
                                    <label for="lvl1"> CCNA R&S : introduction to networks</label>
                                </div>
                                <div class="line">
                                    <input type="radio" name="lvl[]" id="lvl2">
                                    <label for="lvl2">CCNA R&S : routing and switching fundamentals</label>
                                </div>
                                <div class="line">
                                    <input type="radio" name="lvl[]" id="lvl3">
                                    <label for="lvl3">CCNA R&S : connecting networks</label>
                                </div>
                                <div class="line">
                                    <input type="radio" name="lvl[]" id="lvl4">
                                    <label for="lvl4">CCNA R&S : scaling networks</label>
                                </div>
                                <div class="line">
                                    <input type="radio" name="lvl[]" id="lvl5">
                                    <label for="lvl5">CCNP ROUTE</label>
                                </div>
                                <div class="line">
                                    <input type="radio" name="lvl[]" id="lvl6">
                                    <label for="lvl6">CCNP SWITCH</label>
                                </div>
                                <div class="line">
                                    <input type="radio" name="lvl[]" id="lvl7">
                                    <label for="lvl7">CCNP TSHOOT</label>
                                </div>
                            </div>
                            <div class="age">
                                <p><b>Age</b></p>
                                <div class="line">
                                    <input type="radio" id="age1" name="age[]">
                                    <label for="age1">> 18</label>
                                </div>
                                <div class="line">
                                    <input type="radio" id="age2" name="age[]">
                                    <label for="age2">< 25</label>
                                </div>
                                <div class="line">
                                    <input type="radio" id="age3" name="age[]">
                                    <label for="age3">< 35</label>
                                </div>
                            </div>
                            <div class="language">
                                    
                                <p><b>Language</b></p>
                                        <div class="line">
                                            <input type="radio" id="lg1" name="language[]">
                                            <label for="lg1">English</label>
                                        </div>
                                        <div class="line">
                                            <input type="radio" id="lg2" name="language[]">
                                            <label for="lg2">French</label>
                                        </div>
                                        <div class="line">
                                            <input type="radio" id="lg3" name="language[]">
                                            <label for="lg3">Spanish</label>
                                        </div>
                                        <div class="line">
                                            <input type="radio" id="lg4" name="language[]">
                                            <label for="lg4">Arabic</label>
                                        </div>
                                        <div class="line">
                                            <input type="radio" id="lg5" name="language[]">
                                            <label for="lg5">Italian</label>
                                        </div>
                            </div>
                            <div class="line">
                                <label for="description"><b>Academy description and expectations</b></label>
                            </div>
                            <div class="line">
                                <textarea name="description" id="description" cols="30" rows="10"></textarea>
                            </div>
                            <input type="submit" value="Confirm" class="button">
                        </form>
                    </article>
                    <article>
                        <h3 class="title">
                            Choose an academy for twinning
                        </h3>

                    </article>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
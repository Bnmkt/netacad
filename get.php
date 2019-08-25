<?php 
/*
Template Name: Get
*/
get_header(); ?>
<main class="page_main" data-image="male-instructor-in-classroom.jpg">
            <h2 class="hidden">
                Get equipment
            </h2>
            <section id="get">
                <div class="container bg_w">
                    <p class="title title-big">Get equipment</p>
                    <h3 class="hidden">How to get equipment</h3>
                    In order to get equipment, we ask you to follow the following path :
                    <ol class="donation_ordered">
                        <li>Once you have registered on this website, please be sure that the encoded information is
                            complete and correct via My Profile</li>
                        <li>Test equipment : we encourage you to test the equipment you have received with your
                            students.
                            You can perform the following challenge lab that will insure that the equipment can be used
                            for
                            the vast majority of the protocols and techniques that are learnt within the CCNA
                            curriculum.
                            Please keep in touch with the donating academy or institution to get support.</li>


                        <li>Please describe the equipment you are willing to receive and be sure this equipment is part
                            of
                            the eligible equipment list.</li>
                        <li>We will match the equipment you need with academies donating equipment. You will be
                            contacted by
                            email and you will be in touch with the donating academy or institution.</li>

                    </ol>
                </div>
            </section>
            <section>
                <div class="container bg_w">
                    <h2 class="title">
                        Select the equipment you need
                    </h2>
                    <form action="?" class="equ_form">
                        <span class="c-red">Choose a bundle for your Academy</span>
                        <div class="line">
                            <input type="radio" name="bundle[]" id="bundle1"> <label for="bundle1">3 routers and 3
                                switches</label>
                        </div>
                        <div class="line">
                            <input type="radio" name="bundle[]" id="bundle2"> <label for="bundle2">6 routers and 6
                                switches</label>
                        </div>
                        <div class="line">
                            <span class="c-red">One bundle is allowed per year and per academy</span>
                            <label>How many hours in a week will this equipment be used by students ?</label>
                        </div>
                        <div class="line">
                            <select name="hoursperweek" id="hoursperweek">
                                <option value="5">5</option>
                                <option value="5-10">5-10</option>
                                <option value="10-20">10-20</option>
                                <option value="20+">20+</option>
                            </select>
                        </div>
                        <div class="line">
                            <label>How many hours in a week will this equipment be used by students ?</label>
                        </div>
                        <div class="line">
                            <select name="hoursperweek" id="hoursperweek">
                                <option value="10">5</option>
                                <option value="10-20">10-20</option>
                                <option value="20-50">20-50</option>
                                <option value="50+">50+</option>
                            </select>
                        </div>
                        <input type="submit" value="Donate" class="button">
                    </form>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
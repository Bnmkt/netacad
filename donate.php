
<?php 
/*
Template Name: Donate
*/
get_header(); ?>
<main class="page_main" data-image="teacher-students-laptops.jpg">

            <h2 class="hidden">
                Donate equipment
            </h2>
            <section id="donate">
                <div class="container bg_w">
                    <p class="title title-big">
                        Donate equipment
                    </p>
                    <h3 class="hidden">How to donate</h3>
                    We encourage Cisco Academies to follow the following path :
                    <ol class="donation_ordered">
                        <li>Once you have registered on this website, please be sure that the encoded information is
                            complete and correct via My Profile</li>
                        <li>Please describe the equipment you are willing to donate and be sure this equipment is part
                            of
                            the eligible equipment list.</li>
                        <li>Test equipment : we encourage you to test this equipment with your students. You can perform
                            the
                            following challenge lab that will insure that the equipment can be used for the vast
                            majority of
                            the protocols and techniques that are learnt within the CCNA curriculum.</li>
                        <li>We will match the equipment you intend to donate with academies trying to get equipment. You
                            will be contacted by email and you will be in touch with the receiving academy.</li>
                        <li>If you can afford the cost of shipment, we encourage you to send the equipment yourself.
                            However, if you need assistance or funding, please contact us.</li>
                        <li>Pair with receiving academy and help them setup again the challenge lab.</li>
                    </ol>
                    <span class="c-red">If you would like to donate equipment without involving students, you could skip
                        the above third
                        step.</span>

                </div>
            </section>
            <section>
                <div class="container bg_w">
                    <h2 class="title">
                        Select equipment to donate
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

                            <label for="describe">Describe the equipment</label>
                        </div>
                        <div class="line">
                            <textarea name="describe" id="describe" cols="30" rows="10"></textarea>
                        </div>
                        <div class="line">
                            <input type="checkbox" name="tested" id="equtested"> <label for="equtested">The equipment is
                                tested and functionnal</label>
                        </div>
                        <div class="line">
                            <input type="checkbox" name="eligible" id="equeligible"> <label for="equeligible">The
                                equipment is in the eligible equipment list</label>
                        </div>
                        <input type="submit" value="Donate" class="button">
                    </form>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
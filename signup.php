<?php 
/*
Template Name: signup
*/
get_header(); ?>
       <main class="page_main" data-image="cisco-group-mixed-plaque.jpg">
            <h2 class="title hidden">
                Login
            </h2>
            <section class="">
                <div class="container  bg_w">
                    <p class="title title-big">
                        Login
                    </p>
                    <form action="?" method="POST" class="">
                        <div class="login_form form">
                            <div class="">
                                <label for="fname">First name</label>
                                <input type="text" name="fname" id="fname">
                                <label for="lname">Last name</label>
                                <input type="text" name="lname" id="lname">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email">
                                <label for="password">Password</label>
                                <input type="password" name="password" id="password">
                                <label for="password2">Confirm password</label>
                                <input type="password" name="password2" id="password2">
                                <label for="country">Country</label>
                                <input type="text" name="country" id="country">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city">
                                <div class="line">
                                    <p class="mb-11"><b>Who are you ?</b></p>
                                    <div class="line">
                                        <input type="radio" name="who[]" id="ca"> <label for="ca">Cisco Academy</label>
                                    </div>
                                    <div class="line">
                                        <input type="radio" name="who[]" id="crsm"> <label for="crsm">CSR
                                            Manager</label>
                                    </div>
                                    <div class="line">
                                        <input type="radio" name="who[]" id="oc"> <label for="oc">Other
                                            Contributor</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="f-solo mt-10">
                            <input type="submit" value="Sign up" class="button">
                        </div>
                    </form>
                </div>
            </section>
            <section>
                <div class="container bg_w">
                    <h2 class="title">You already have an account ?</h2>
                    <p>Then go to the <a href="login">login page</a></p>
                    <a href="login" class="button mt-10">Login</a>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
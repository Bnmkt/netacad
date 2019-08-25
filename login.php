<?php 
/*
Template Name: login
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
                                        <label for="email">Email</label>
                                        <input type="text" name="email" id="email">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password">
                                        <a href="?">Forgot your password ?</a>
                                    </div>
                        </div>

                        <div class="f-solo mt-10">
                            <input type="submit" value="Login" class="button">
                        </div>
                    </form>
                </div>
            </section>
            <section>
                <div class="container bg_w">
                    <h2 class="title">You don't have an account ?</h2>
                    <p>You can sign up right here !</p>
                    <a href="sign-up" class="button mt-10">Sign up</a>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
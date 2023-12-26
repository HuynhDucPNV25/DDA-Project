<style>
    <?php
    require_once APP_ROOT . "/Assets/CSS/BodyLoginRegister/BodyLoginRegister.css";
    ?>
</style>



<div class="container" id="containerLog">
    <div class="row">
        <div class="row">
            <a id="titleLog" href="HomePage">Home ></a>
            <a id="titleLog" href="#">Sign in &amp; Register</a>
        </div>
        <div class="row">
            <div class="column" id="log">
                <h2>Sign In</h2>
                <label>Required (*)</label>
                <div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" placeholder="Email Address (*)" required>
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" placeholder="Password (*)" required>
                    </div>
                    <div id="form-check">
                        <label>
                            <input id="check" type="checkbox" name="remember"> Remember me
                        </label>
                        <a id="forgot" href="#">Forgot the password</a>
                    </div>
                    <button id="buttonn" type="submit">Sign In</button>
                    <div class="divider">
                        <hr class="left-line">
                        <span class="or-text">OR</span>
                        <hr class="right-line">
                    </div>
                    <h6 id="one-ck">Sign In With One Click</h6>
                    <p>Log in with your social media account</p>
                    <div class="row">
                        <div class="col"> <a href="https://www.facebook.com" target="_blank"><button id="button1">Facebook</button></a> </div>
                        <div class="col"> <a href="https://www.google.com" target="_blank"><button id="button2">Google</button></a> </div>
                    </div>
                    <p id="tex">When you use Facebook or Google to login to our site, be advised that your data is governed by Facebook’s or Google’s privacy policy and terms of use.</p>
                </div>
            </div>
            <div class="col">
            </div>
            <div class="column" id="log2">
                <h2>Create Account</h2>
                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <input type="text" id="first" name="firstName" placeholder="First name (*)" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="mail" name="email" placeholder="Email Address (*)" required>
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" placeholder="Password (*)" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <input type="text" id="lastName" name="lastName" placeholder="Last name (*)" required>
                        </div>
                        <div class="form-group">
                            <input type="email" id="confirmEmail" name="confirmEmail" placeholder="Confirm email (*)" required>
                        </div>
                        <div class="form-group">
                            <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password (*)" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <p id="tex">Date of birth* <br>We want to wish you a happy birthday! When you provide your birthday, we will also use this information to personalize our marketing efforts</p>
                </div>
                <div class="row">
                    <div class="col">
                        <select class="time" id="date">
                            <option disabled selected>Date</option>
                            <?php for ($day = 1; $day <= 30; $day++) { ?>
                                <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col">
                        <select class="time" id="month">
                            <option disabled selected>Month</option>
                            <?php for ($month = 1; $month <= 12; $month++) { ?>
                                <option value="<?php echo $month; ?>"><?php echo $month; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col">
                        <select class="time" id="year">
                            <option disabled selected>Year</option>
                            <?php for ($year = 1950; $year <= 2024; $year++) { ?>
                                <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group">
                        <input type="text" id="number" name="numb" placeholder="Phone number (*)" required>
                    </div>
                </div>
                <br>
                <div class="row">
                    <button id="buttonn2" type="submit">Create an account</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="containerLog">

    <div class="column" id="log">
        <h2>Login</h2>
        <p>Required (*)</p>
        <div>
            <div class="form-group">

                <input type="email" id="email" name="email" placeholder="Email Address (*)" required>
            </div>
            <div class="form-group">

                <input type="password" id="password" name="password" placeholder="Password (*)" required>
            </div>
            <div class="form-check">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label> <a id="forgot" href="#">Forgot the password</a>
            </div>


            <button id="buttonn" type="submit">Sign In</button>
            <div class="divider">
                <hr class="left-line">
                <span class="or-text">OR</span>
                <hr class="right-line">
            </div>
            <h6 id="one-ck"> Sign In With One Click</h6>
            <p> Log in with your social media account
            <p>
            <div class="row">
                <div class="col">
                    <button id="button1">Facebook</button>
                </div>
                <div class="col">
                    <button id="button1">Google</button>
                </div>
            </div>
            <p id="tex">When you use Facebook or Google to login to our site, be advised that your data is governed by Facebook’s or Google’s privacy policy and terms of use.</p>

        </div>
    </div>
    <div class="col">

    </div>
    <div class="column" id="log2">

        <h2>Register</h2>
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
            <div class=" col">
                <div class="form-group">

                    <input type="text" id="lastName" name="lastName" placeholder="Last name (*)" required>
                </div>
                <div class=" form-group">

                    <input type="email" id="confirmEmail" name="confirmEmail" placeholder="Confirm email (*)" required>
                </div>
                <div class=" form-group">

                    <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password (*)" required>
                </div>

            </div>
        </div>
        <div class="row">
            <p id="tex">Date of birth*
                We want to wish you a happy birthday! When you provide your birthday, we will also use this information to personalize our marketing efforts</p>
        </div>
        <div class="row">
            <div class="col">
                <select id="date">
                    <!-- Sử dụng vòng lặp for để tạo các tùy chọn từ 1 đến 30 -->
                    <!-- Giả sử 30 là số ngày bạn muốn -->
                    <!-- Bạn cũng có thể thay đổi giá trị 30 thành số ngày bạn muốn -->
                    <?php for ($day = 1; $day <= 30; $day++) { ?>
                        <option value="<?php echo $day; ?>"><?php echo $day; ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="col">

            </div>
            <div class="col">

            </div>
        </div>
        <div class=" row">
            <button id="buttonn" type="submit">Register</button>
        </div>




    </div>
</div>
</div>
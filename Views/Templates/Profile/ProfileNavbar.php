<style>
        #ProfileNavbar {
            position: relative;
        }

        #profileIcon {
            color: azure;
            font-size: 24px;
            border: 1px solid black;
            width: 40px;
            height: 40px;
            border-radius: 170px;
            text-align: center;
            padding: 6px;
            top: -5px;
            position: absolute;
            cursor: pointer;
        }

        .iconText {
            display: none;
            position: absolute;
            transform: translateX(-50%);
            text-align: center;
            color: black;
            top:70px;
            left: 25px;
            width: 200px;
        }
        

        #iconProfile {
            position: absolute;

            bottom: -40px;
            font-size: 20px;
            font-family: 'Noto Sans', sans-serif;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 4.20px;
            word-wrap: break-word;
            top:45px;
           left: 25px;
            width: 200px;
        }

        #textBelowIcon {
            bottom: -70px;
            font-family: 'Noto Sans', sans-serif;
            font-weight: 900;
            font-size: 20px;
            width: 100px;
        }

        #triangleIcon {
            position: absolute;
            top: 28px;
            left: 15.4px;
            display: none;
            color: black;
            margin-top: 3px;
        }

        #ProfileNavbar.showText .iconText,
        #ProfileNavbar.logout .iconText,
        #ProfileNavbar.showText #triangleIcon {
            display: block;
        }
        #iconSignin {
            margin-top: 3px;
            color: white;
            font-size:30px ;
        }
        .iconText2 {
            padding-left: 10px  ;
            margin-top: 10px;
            color: black;
        }
        .iconText2:hover ,#iconSignin:hover {
            color:pink;     
        }       
        #iconText:focus{
            background-color:darkcyan;
            color: red;
            
        }
    </style>

    <?php
    function ProfileNavbar()
    {

        return '
        <form class="form-inline" id="ProfileNavbar">
            <i class="fa-solid fa-user" id="profileIcon">
            </i>
            <i id="triangleIcon" class="fa-solid fa-caret-down"></i>
            <a href="##" id="iconProfile" class="iconText">Profile</a>
            <a href="##" id="textBelowIcon" class="iconText">Logout</a>
            
        </form>
    ';
    }
    ?>
    <?php
    function ProfileNavbarLogin()
    { 
        return '
        <form class="form-inline" id="ProfileNavbar">
            <a href=""> <i id="iconSignin" class="fa-solid fa-right-to-bracket"></i></a>
            <a href="?Login" id="textBelowIcon" class="iconText2">LOG IN</a>    
        </form>
        ';
    }
    ?>

    

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var profileNavbar = document.getElementById('ProfileNavbar');

            profileNavbar.addEventListener('click', function () {
                // Chuyển đổi lớp 'showText' khi click vào icon
                this.classList.toggle('showText');
            });
            profileNavbar.addEventListener('click', function () {
                // Chuyển đổi lớp 'logout' khi click vào icon
                this.classList.toggle('logout');
            });
        });
    </script>

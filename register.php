<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="./css/form.css">
    <title>DLDR-REGISTERATION</title>
    <link rel="icon" type="image/jpg"
        href='https://res.cloudinary.com/ezeko/image/upload/v1574728286/images/dlcm_logo_tyrhka.jpg'>

    <!-- Compiled and minified bootsrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width initial-scale=1">
    <meta name="description"
        content="responsive landing page, made by adejobi ezekiel, responsive landing page template, made in nigeria">
    <meta name="keyword" content="Ezekielcodes, responsive web form, 100days of coding, Adejobi Ezekiel, Ezekoconcept, ezeko, FreeCodeCamp-Ezeko,
             html5, html, php developer, css template, landing page, landing page template">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</head>

<body>
    <div class="container">
        <a href="./"><img
                src='https://res.cloudinary.com/ezeko/image/upload/v1574728286/images/dlcm_logo_tyrhka.jpg'></a>
        <span class="container span">
            <h3>Welcome to Deeper Life 2020 December Retreat Ore Region</h3>
            <h2>Do not hesitate to fill the below Spaces correctly</h2>
            <h5 id="gbu" class="blinking">God bless you!!!!!</h5>
        </span>
    </div>
    <form action="backend/reg_validate.php" method="POST" class="container">
        <div id="form" class="black  white-text">
            <div class="form-group">
                <label for="name">Your Surname<b>*</b></label>
                <input type="text" id="name" name="surname" class="form-control" placeholder="Your surname" required />
            </div>
            <div class="form-group">
                <label for="otherName">Other Names<b>*</b></label>
                <input type="text" id='otherName' class="form-control" name="otherName" placeholder="Other Names"
                    required />
            </div>
            <div class="form-group">
                <label for="address">Your Address<b>*</b></label>
                <input type="text" id="address" class="form-control" name="address" placeholder="Your Address"
                    required />
            </div>

            <div class="form-group">
                <label for="number">Your Phone Number<b>*</b></label>
                <input type="tel" class="form-control" name="number" placeholder="e.g 09034547878" required />
            </div>
            <div id="memberSelection" class="form-group">
                <label for="member">Are you a member?<b>*</b>
                    <input type="radio" id="member" name="member" value="true" required>
                    <span>YES</span>
                </label>
                <label for="member2">
                    <input type="radio" id="member2" name="member" value="false" required>
                    <span>NO</span>
                </label>


            </div>
            <br />
            <div class="yes hidden form-group">
                <label for="district">Your Group of District<b>*</b></label>
                <select name="district" id="district" class="form-control">
                    <option value="">Select Your Group of District</option>
                    <option value="CENTRAL">CENTRAL GROUP</option>
                    <option value="CAMPSITE">CAMPSITE GROUP</option>
                    <option value="EBENEZER">EBENEZER GROUP</option>
                    <option value="IDIMANGO">IDIMANGO GROUP</option>
                    <option value="IBUKUN-OLUWA"> IBUKUN-OLUWA GROUP</option>
                    <option value="LAGOS-EXPRESS">LAGOS-EXPRESS GROUP </option>
                    <option value="LANGUAGE">LANGUAGE GROUP</option>
                    <option value="OMI-AYO"> OMI-AYO GROUP </option>
                    <option value="POWERLINE"> POWERLINE GROUP</option>
                    <option value="YORUBA">YORUBA GROUP</option>
                    <option value="OTHERS"> OUTSIDE LOCATION (GROUP)</option>
                </select>

            </div>
            <div class="yes hidden form-group" id="location-div">
                <label for="location">Your District Location<b>*</b></label>
                <select name="location" id="location" class="form-control">
                    <option value="">Choose your church</option>
                </select>


            </div>
            <div class="no hidden" class="form-group">
                <label for="denomination">Your Denomination<b>*</b></label>
                <input type="text" class="form-control" name="denomination" placeholder="Enter your church e.g C.A.C" />
            </div>
            <div id="genderSelection">
                <label for="gender">Gender<b>*</b></label>
                <input type="radio" id="gender" name="gender" value="male" class="with-gap" required>
                male
                <input type="radio" id="gender2" name="gender" value="female" class="with-gap" required>
                female



            </div>
            <br />

            <div class="form-group">
                <label>Select Category<b>*</b></label>
                <select name="category" class="form-control" id="category" required>
                    <option name="category" value=''>Select Category</option>
                    <option name="category" id="category" value="children">Children</option>
                    <option name="category" id="category" value="youth">Youth</option>
                    <option name="category" id="category" value="campus">Campus</option>
                    <option name="category" id="category" value="adult">Adult</option>
                </select>

            </div>
            <div class="hidden form-group" id="school-div">
                <label for="school">Your Institution<b>*</b></label>
            </div>
            <div class="hidden form-group" id="level">
                <label>Your Level<b>*</b></label>
                <select name="level" class="form-control">
                    <option value=''>Select Level</option>
                    <option value='100'>100 Level</option>
                    <option value='200'>200 Level</option>
                    <option value='300'>300 Level</option>
                    <option value='400'>400 Level</option>
                    <option value='500'>500 Level</option>
                    <option value='600'>600 Level</option>
                    <option value='graduated'> Graduated -Not Applicable-</option>
                </select>

            </div>
            <div id="ageSelection">
                <label for='age'>Choose Your Age Range<b>*</b>
                    <input type="radio" name="age" id='age' value="0-7" required><span>0-7</span>
                </label>
                <label for='age2'>
                    <input type="radio" name="age" id='age2' value="8-14" required><span>8-14</span>
                </label>
                <label for="age3">
                    <input type="radio" name="age" id='age3' value="14-18" required><span>14-18</span>
                </label>
                <label for="age4"><input type="radio" name="age" id='age4' value="19-25" required><span>19-25</span>
                </label>
                <label for="age5"><input type="radio" name="age" id='age5' value="26-40" required><span>26-40</span>
                </label>
                <label for="age6"><input type="radio" name="age" id='age6' value="40&above" required><span>40 &
                        above</span>
                </label>

            </div>
            <br />
            <div class="input-field">
                <label for="prayer">Prayer Request<b>*</b></label>
                <input type="text" class="form-control" name="prayer"
                    placeholder="What do you want God to do for you?" />
            </div>

            <input type="submit" class="form-control" value="REGISTER" class="btn" />
        </div>



    </form>
    <script src="./js/reg.js"></script>
    <script src="./js/campus.js"></script>

</body>

</html>
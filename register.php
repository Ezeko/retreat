<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="./css/style.css" >
        <title>DLDR-REGISTERATION</title>
        <link rel="icon" type="image/jpg" href='https://res.cloudinary.com/ezeko/image/upload/v1574728286/images/dlcm_logo_tyrhka.jpg'>
            
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <meta name="viewport" content="width=device-width initial-scale=1">
            <meta name="description" content="responsive landing page, made by adejobi ezekiel, responsive landing page template, made in nigeria">
            <meta name="keyword" content="Ezekielcodes, responsive web form, 100days of coding, Adejobi Ezekiel, Ezekoconcept, ezeko, FreeCodeCamp-Ezeko,
             html5, html, php developer, css template, landing page, landing page template">

    </head>
    <body>
        <form action="backend/reg_validate.php" method="POST">
                    <img src='https://res.cloudinary.com/ezeko/image/upload/v1574728286/images/dlcm_logo_tyrhka.jpg'>
                    <h1>Welcome to Deeper Life 2020 December Retreat Ore Region</h1>
            <h2>Do not hesitate to fill the below Spaces correctly</h2>
            <h5  id="gbu" class="blinking">God bless you!!!!!</h5>
            <div id="form">
            <div>
                <label for="name">Your Surname<b>*</b></label>
                <input type="text" placeholder="Your surname" name="surname" required />
            </div>
            <div>
                <label for="name">Other Names<b>*</b></label>
                <input type="text" placeholder="Other Names" name="otherName" required />
            </div>
            <div>
                <label for="address">Your Address<b>*</b></label>
                <input type="text" placeholder="Your Address" name="address" required />
            </div>

            <div>
                <label for="number">Your Phone Number<b>*</b></label>
                <input type="tel" placeholder="Your Phone Number" name="number" required />
            </div>
            <div id="memberSelection">
                <label for="member">Are you a member?<b>*</b></label>
                YES<input type="radio" name="member" value="yes" required>
                NO<input type="radio" name="member" value="no" required>
            </div>
            <div class="yes hidden">
                <label for="district">Your Group of District<b>*</b></label>
                <select name="district" id="district" required>
                    <option value="none">Not Applicable</option>
                    <option value="CENTRAL">CENTRAL GROUP</option>
                    <option value="CAMPSITE">CAMPSITE GROUP</option>
                    <option value="EBENEZER">EBENEZER GROUP</option>
                    <option value="IDIMANGO">IDIMANGO GROUP</option>
                    <option value="IBUKUN-OLUWA"> IBUKUN-OLUWA GROUP</option>
                    <option value="LAGOS-EXPRESS">LAGOS-EXPRESS GROUP </option>
                    <option value="LANGUAGE">LANGUAGE GROUP</option>
                    <option value="OMI-AYO">	OMI-AYO GROUP </option>
                    <option value="POWERLINE"> POWERLINE GROUP</option>
                    <option value="YORUBA">YORUBA GROUP</option>
                    <option value="OTHERS"> OUTSIDE LOCATION (GROUP)</option>
                </select>
            </div>
            <div class="yes hidden">
                <label for="location">Your District Location<b>*</b></label>
                <!-- <input type="text" id="location" placeholder="Your District Location put none if not a member" value="none" name="location" required /> -->
                <select name="location" id="location" required>
                    <option value="">Choose your church</option>
                </select>
            </div>
            <div class="no hidden">
                <label for="denomination">Your Denomination<b>*</b></label>
                <input type="text" placeholder="Your Denomination put DLBC if a member" value="DLBC" name="denomination" required />
            </div>
            <div id="genderSelection">
                <label for="gender">Gender<b>*</b></label>
                male<input type="radio" name="gender" value="male" required>
                female<input type="radio" name="gender" value="female" required>
            </div>
            <div>
                <select name="category" id="category">
                    <option name="category" id="category" value='none' >Select Category</option>
                    <option name="category" id="category" value="children">Children</option>
                    <option name="category" id="category" value="youth"  >Youth</option>
                    <option name="category" id="category" value="campus"  >Campus</option>
                    <option name="category" id="category" value="adult"  >Adult</option>
                </select>
            </div>
            <div id="ageSelection">
                <label for="age">Choose Your Age Range<b>*</b></label>
                0-7<input type="radio" name="age" value="0-7" required>
                8-14<input type="radio" name="age" value="8-14" required>
                14-18<input type="radio" name="age" value="14-18" required>
                19-25<input type="radio" name="age" value="19-25" required>
                26-40<input type="radio" name="age" value="26-40" required>
                40 & above<input type="radio" name="age" value="40&above" required>

            </div>

            <input type="submit" value="REGISTER" />
            </div>

            
        </form>
        <script src="./js/register.js"></script>
    
    </body>
</html>
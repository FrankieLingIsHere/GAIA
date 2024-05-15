<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="description" content="Enquiry page" />
    <meta name="keywords" content="enquiry" />
    <meta name="author" content="GAIA" />
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <link rel="icon" type="image/x-icon" href="images/Logo_favicon.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
    <title>Enquiry page</title>
</head>

<body class="enquirypage-bg">
    <?php
        include 'database.php';
        include 'create_table.php';
    ?>

    <!--Nav Bar-->
    <header class="header">
    <?php include 'menu.php';?>
    </header>

    <article>

        <h1 class="profile">Contact Us</h1>
        <section class="enquiry-section">
            <form method="post" action="enquiry_process.php" class="form-bg">
                <legend id="legenda">Enquiry Form</legend>
                <input type="checkbox" id="toggle" class="accordion-checkbox">
                <label for="toggle" class="accordion-label">Personal Detail</label>
                    <div class="accordion-content">
                        <fieldset>
                            <div class="input-group">
                                <div class="input-half">
                                    <label for="fname">First Name:</label>
                                    <input type="text" name="fname" id="fname" size="25"/>
                                </div><div class="input-half">
                                    <label for="email">Email address:</label>
                                    <input type="email" name="email" id="email" size="50"/>
                                </div>
                                
                            </div>
                            <div class="input-group">
                                <div class="input-half">
                                    <label for="lname">Last Name:</label>
                                    <input type="text" name="lname" id="lname"size="25"/>
                                </div>
                                <div class="input-half">
                                    <label for="phnum">Phone Number:</label>
                                    <input type="tel" id="phnum" name="phnum" placeholder="Enter your phone number" size="30"/>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                <br>
                <input type="checkbox" id="toggle1" class="accordion-checkbox">
                <label for="toggle1" class="accordion-label">Address</label>

                <div class="accordion-content">
                    <fieldset>
                        <div class="input-group">
                            <div class="input-half">
                                <label for="streetadd">Street address:</label>
                                <input type="text" name="streetadd" id="streetadd" size="40"  />
                            </div>
                            <div class="input-half">
                                <label for="c/t">City/Town:</label>
                                <input type="text" name="c/t" id="c/t" size="20"  />
                            </div>
                        </div>
                        <div class="input-group">
                            <div class="input-half">
                                <label for="state">State:</label>
                                <select id="state" name="state" >
                            <option value="" disabled selected>Select a State</option>
                            <option value="Johor">Johor</option>
                            <option value="Kedah">Kedah</option>
                            <option value="Kelantan">Kelantan</option>
                            <option value="Kuala Lumpur">Kuala Lumpur</option>
                            <option value="Labuan">Labuan</option>
                            <option value="Melaka">Melaka</option>
                            <option value="Negeri Sembilan">Negeri Sembilan</option>
                            <option value="Pahang">Pahang</option>
                            <option value="Perak">Perak</option>
                            <option value="Perlis">Perlis</option>
                            <option value="Penang">Penang</option>
                            <option value="Putrajaya">Putrajaya</option>
                            <option value="Sabah">Sabah</option>
                            <option value="Sarawak">Sarawak</option>
                            <option value="Selangor">Selangor</option>
                            <option value="Terengganu">Terengganu</option>
                        </select>
                    </div>
                    <div class="input-half">
                        <label for="pcode">Postcode:</label>
                        <input type="text" name="pcode" id="pcode"/>
                    </div>
                </div>
            </fieldset>
        </div>
                <br>
                <input type="checkbox" id="toggle2" class="accordion-checkbox">
                <label for="toggle2" class="accordion-label">Comment</label>

                <div class="accordion-content">
                    <fieldset>
                        <label for="plantSelect">Choose a Plant:</label>
                        <select id="plantSelect" name="plant" >
                            <option value="" disabled selected>Select a Plant</option>
                            <optgroup label="Dipterocarpaceae">
                                <option value="Vatica_Bella">Vatica Bella</option>
                                <option value="Vatica_Borneensis">Vatica Borneensis</option>
                                <option value="Vatica_Congesta">Vatica Congesta</option>
                                <option value="Vatica_Flavida">Vatica Flavida</option>
                            </optgroup>
                            <optgroup label="Dipterocarpaceae">
                                <option value="Dipterocarpus_Applanatus">Dipterocarpus Applanatus</option>
                                <option value="Dipterocarpus_Caudiferus">Dipterocarpus Caudiferus</option>
                                <option value="Dipterocarpus_Confertus">Dipterocarpus Confertus</option>
                            </optgroup>
                            <optgroup label="Dipterocarpaceae">
                                <option value="Hopea_Aequalis">Hopea Aequalis</option>
                                <option value="Hopea_Auriculata">Hopea Auriculata</option>
                                <option value="Hopea_Centipeda">Hopea Centipeda</option>
                            </optgroup>
                            <optgroup label="Lauraceae">
                                <option value="Actinodaphne_Pruinosa">Actinodaphne Pruinosa</option>
                                <option value="Actinodaphne_Malaccensis">Actinodaphne Malaccensis</option>
                                <option value="Actinodaphne_Furfuracea">Actinodaphne Furfuracea</option>
                            </optgroup>
                            <optgroup label="Lauraceae">
                                <option value="Beilschmiedia_Micrantha">Beilschmiedia Micrantha</option>
                                <option value="Beilschmiedia_Membranacea">Beilschmiedia Membranacea</option>
                                <option value="Beilschmiedia Roxburghiana">Beilschmiedia Roxburghiana</option>
                            </optgroup>
                            <optgroup label="Lauraceae">
                                <option value="Cinnamomum_Sintoc">Cinnamomum Sintoc</option>
                                <option value="Cinnamomum_Javanicum">Cinnamomum Javanicum</option>
                                <option value="Cinnamomum_Kinabaluense">Cinnamomum Kinabaluense</option>
                            </optgroup>
                            <optgroup label="Burseraceae">
                                <option value="Canarium_Apertum">Canarium Apertum</option>
                                <option value="Canarium_Asperum">Canarium Asperum</option>
                                <option value="Canarium_Caudatum">Canarium Caudatum</option>
                            </optgroup>
                            <optgroup label="Burseraceae">
                                <option value="Dacryodes_Costata">Dacryodes Costata</option>
                                <option value="Dacryodes_Expansa">Dacryodes Expansa</option>
                                <option value="Dacryodes_Incurvata">Dacryodes Incurvata</option>
                            </optgroup>
                            <optgroup label="Burseraceae">
                                <option value="Santiria_Apiculata">Santiria Apiculata</option>
                                <option value="Santiria_Kalkmaniana">Santiria Kalkmaniana</option>
                                <option value="Santiria_Griffithii">Santiria Griffithii</option>
                            </optgroup>
                        </select>
                        <br>
                        <p><label for="comment">Comment:</label></p>
                        <textarea id="comment" name="comment" rows="4" cols="40"
                                placeholder="Please leave your comment here"></textarea></p>      
                    </fieldset>
                </div>
                </fieldset>
                <input type="submit" value="Send Enquiry" class="button" />
                <input type="reset" value="Reset" class="button" />
            </form>
        </section>
    </article>

    <footer>
        <hr />
        <p>&copy; GAIA website group 2023, credit to Swinburne University of Technology Sarawak</p>
    </footer>

</body>

</html>
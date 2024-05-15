<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content=" ">
    <meta name="author" content=" ">
    <title>Enhancement</title>
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <link rel="icon" type="image/x-icon" href="images/Logo_favicon.png">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!--Nav Bar-->
    <header class="header">
    <?php include 'menu.php';?>
    </header>

    <article>
        <h1>ENHANCEMENT</h1>

        <div class="enhancement-container">
            <h2>Flip Card</h2>
            <p>Description: The flip card is a feature that allows users to view the back of the cards when they want
                more
                information about it. For this flip card it will show the Genera/ Species / Family in a brief
                description
                that will be shown in the index. Also this flip card can bring you directly to explorer html </p>
            <div class="flip-card-contenna">
                <div class="flipcard-contain">
                    <div class="flip-card">
                        <div class="flip-card-inner">
                            <div class="flip-card-front">
                                <img src="Images/Dipterocarpaceae/Dipterocarpaceae.webp" alt="Family">
                            </div>
                            <div class="flip-card-back">
                                <h1>FAMILY</h1>
                                <p>DIPTEROCARPACEAE</p>
                                <p>LAURACEAE</p>
                                <p>BURSERACEAE</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p>Source: <a href="https://www.w3schools.com/howto/howto_css_flip_card.asp">W3Schools</a></p>
        </div>

        <div class="enhancement-container">
            <h2>Pop-up Window</h2>
            <p>Description: The information is hidden from the initial viewport to prevent confusion of users. To access
                the complete data, users need to press the '+' button to call out the result button, then open out the
                information window to be seen clearly for the website users. :target selectors is mainly used to
                achieved this feature with pure CSS.</p>
            <aside class="uploadimg">
                <input type="file" accept=".jpg,.jpeg,.png,.svg,.webp,.tiff" id="file_upload" />
                <p>
                    <a href="#result"><img src="Images/add_file.webp" alt="Add Image" id="add_file" /></a>
                    <label for="file_upload" id="label_upload">Upload your photo to identify</label>
                </p>
            </aside>
            <p><a id="result" href="#show_popup">Show result</a></p>
            <a id="show_popup" href="#" class="popup"></a>
            <section class="popup">
                <h2>Plant Information</h2>
                <figure id="example">
                    <img src="Images/Confertus.jpeg" alt="Dipterocarpus Confertus" />
                    <figcaption>Dipterocarpus Confertus</figcaption>
                </figure>
                <dl class="description_popup">
                    <dt>Scientific name</dt>
                    <dd><em>Diperocarpaceae Dipterocarpus confertus</em></dd>
                    <dt>Common name</dt>
                    <dd>Keruing Kobis</dd>
                    <dt>How to take care</dt>
                    <dd>prefer:
                        <ul>
                            <li>ferralitic soil</li>
                            <li>friable soil that is sandy</li>
                        </ul>
                    </dd>
                    <dt>Preferred environemnt</dt>
                    <dd>mixed depterocarp forests</dd>
                    <dt>Main habitat</dt>
                    <dd>Borneo</dd>
                </dl>
            </section>
            <p>Source: <a href="https://gist.github.com/epoberezkin/4722580">GitHub</a></p>
        </div>

        <div class="enhancement-container">
            <h2>Accordion box</h2>
            <p>Description: The accorddion box is a feature that allows users to expand and collapse sections of
                content. For this accordion box, it will show the content store which like "Personal Details" content
                will diplay First name, Last name, Email address and Phone Numnber.</p>
            <input type="checkbox" id="toggle" class="accordion-checkbox">
            <label for="toggle" class="accordion-label">Personal Detail</label>
            <div class="accordion-content">
                <fieldset>
                    <div class="input-group">
                        <div class="input-half">
                            <label for="fname">First Name:</label>
                            <input type="text" name="fname" id="fname" maxlength="25" size="25" pattern="[A-Za-z]+"
                                required="required" />
                        </div>
                        <div class="input-half">
                            <label for="lname">Last Name:</label>
                            <input type="text" name="lname" id="lname" maxlength="25" size="25" pattern="[A-Za-z]+"
                                required="required" />
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-half">
                            <label for="email">Email address:</label>
                            <input type="email" name="email" id="email" maxlength="50" size="50" required="required" />
                        </div>
                        <div class="input-half">
                            <label for="phnum">Phone Number:</label>
                            <input type="tel" id="phnum" name="phnum" placeholder="Enter your phone number"
                                maxlength="30" size="30" pattern="[0-9]{10,11}" required="required" />
                        </div>
                    </div>
                </fieldset>
            </div>
            <p>Source: <a href="https://www.stechies.com/create-accordion-html-without-javascript/">STechies</a></p>
        </div>

        <div class="enhancement-container">
            <h2>Fade-in Effect upon Hovering the Cards</h2>
            <p>Description: When hovering the cards on the contributor page, a fade-in effect will occur for the
                comments to be visible. This effect is to prevent the page from getting too overcrowded with comments.
            </p>
            <div class="enhancement4">
                <div class="cards1">
                    <div class="card2">
                        <div class="image-container">
                            <img src="images/actinodaphne_malaccensis.jpeg" alt="malaccensis" class="cardimage">
                            <div class="fadeintext">
                                <div class="text-fade">
                                    <p>"Wow, I never knew this plant would be so endangered!"</p>
                                </div>
                            </div>
                        </div>
                        <div class="cardcontent">
                            <p>
                                Actinodaphne Malaccensis
                            </p>
                        </div>
                        <div class="cardinfo">
                            <div>
                                Sophia Rodriguez
                            </div>
                            <div class="comments">
                                Hover image to see comments
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p>Source: <a href="https://blog.hubspot.com/website/css-fade-in#text-transition">HubSpot</a></p>
        </div>

        <div class="enhancement-container">
            <h2>Hover effect when the cursor on the image</h2>
            <p>Description: when the cursor hover over the image , an fade in layer will appear from the bottom of image
                to show description for the plant in the image.</p>
            <div class="enhancement4">
                <div class="container1">
                    <img src="Images/Dipterocarpaceae/Dipterocarpaceae.webp" alt="Dipterocarpaceae" class="image">
                    <div class="overlay">
                        <div class="text">
                            <h2>Dipterocarpaceae</h2>
                            <ol>
                                <li>Primarily found in tropical region such as SouthEast Asia</li>
                                <li>Large,evergreen and often reach greate heights (50m)</li>
                                <li>Leaves are simple, alternate.</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <p>Source: <a href="https://www.w3schools.com/howto/howto_css_image_overlay_slide.asp">W3Schools</a></p>
        </div>
    </article>

    <footer>
        <hr />
        <p>&copy; GAIA website group 2023, credit to Swinburne University of Technology Sarawak</p>
    </footer>
</body>

</html>
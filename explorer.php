<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="keywords" content=" ">
    <meta name="author" content=" ">
    <link rel="stylesheet" href="Style/style.css">
    <link rel="stylesheet" type="text/css" href="Style/style.css">
    <link rel="icon" type="image/x-icon" href="images/Logo_favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Explorer</title>
</head>

<body>
    <!--Nav Bar-->
    <header class="header">
        <?php include 'menu.php';?>
    </header>


    <div class="search">
        <!--search bar-->
        <input type="text" name="search" placeholder="  Search.." class="search-text">

        <!----Family---->

        <h1>Family</h1>
        <p>Diversity of plant world</p>
    </div>

    <!---starting the family images part-->

    <div class="wrapper">

        <div class="container">
            <img src="Images/Dipterocarpaceae/Dipterocarpaceae.webp" alt="Dipterocarpaceae" class="image">
            <div class="overlay">
                <div class="text">
                    <h2 class="h2-change"><a href="genera.html#Genera1.1">Dipterocarpaceae</a></h2>
                    <ol>
                        <li>Primarily found in tropical region such as SouthEast Asia</li>
                        <li>Large,evergreen and often reach greate heights (50m)</li>
                        <li>Leaves are simple, alternate.</li>
                    </ol>
                    <a href="genera.html#Genera1.1" class="btn2">Genera</a>
                    <a href="species.html#Family1.1" class="btn2">Species</a>
                </div>
            </div>
        </div>

        <div class="container">
            <img src="Images/Lauraceae/Lauraceae.jpg" alt="Lauraceae" class="image">
            <div class="overlay">
                <div class="text">
                    <h2 class="h2-change1"><a href="genera.html#Genera1.2">Lauraceae</a></h2>
                    <ol>
                        <li>large family of flowering plants </li>
                        <li>Primarily found in tropical and subtropical regions</li>
                        <li>Simple, alternate, and evergreen leaves</li>
                    </ol>
                    <a href="genera.html#Genera1.3" class="btn2">Genera</a>
                    <a href="species.html#Family2.1" class="btn2">Species</a>
                </div>
            </div>
        </div>

        <div class="container">
            <img src="Images/Burseraceae/Burseraceae.jpg" alt="Burseraceae" class="image">
            <div class="overlay">
                <div class="text">
                    <h2 class="h2-change2"><a href="genera.html#Genera1.3">Burseraceae</a></h2>
                    <ol>
                        <li>Ability to produce aromatic resins</li>
                        <li>Primarily found in tropical and subtropical regions such as Africa</li>
                        <li>Leaves are typically compound, with multiple leaflets</li>
                    </ol>
                    <a href="genera.html#Genera1.2" class="btn2">Genera</a>
                    <a href="species.html#Family3.1" class="btn2">Species</a>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <hr />
        <p>&copy; GAIA website group 2023, credit to Swinburne University of Technology Sarawak</p>
        <section class="acknowledgement">
            <h2>ACKNOWLEDGEMENTS</h2>
            <p>Image & information credit to <a
                    href="https://www.biodiversity4all.org/taxa/889889-Dipterocarpus-confertus">BioDiversity4All</a></p>
            <p>Extra information credit to <a
                    href="https://uses.plantnet-project.org/en/Dipterocarpus_confertus_(PROSEA)">PlantUse English</a>
            </p>
        </section>
    </footer>

</body>

</html>
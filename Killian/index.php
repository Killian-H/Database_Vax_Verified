<!-- TCSS 445 : Autumn 2020 -->
<!-- Assignment 4 Template -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Vax Verified</title>
        <!-- add a reference to the external stylesheet -->
        <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
    </head>

    <body>
        <!-- START -- Add HTML code for the top menu section (navigation bar) -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <div>
                    <img src="Vax Verified.png" alt="myPic"
                         width="80"
                         height="80"/>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarColor03">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Home
                                <span class="visually-hidden">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="business.php">Businesses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="preferences.php">User Settings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Saved Businesses</a>
                        </li>
        <!--                <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </li> -->
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-sm-2" type="text" placeholder="Search">
                        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
        <!-- END -- Add HTML code for the top menu section (navigation bar) -->

        <h1><center>Business: <br>Vax Verified</center></h1>
        <div class="col d-flex justify-content-center">
            <img src="Vax Verified.png" alt="myPic"
                 width="250"
                 height="250"/>
        </div>
        <div class="col d-flex justify-content-center">
        <div class="card border-primary mb-3" style="width: 100rem; height: 30rem">
            <div class="card-header"><center>Covid Business Tracker</center></div>
            <div class="card-body">
                <h4 class="card-title"><center>Overview:</center></h4>
                <p class="card-text">For our project, we have decided to build a database which will hold information about which businesses
                    require and do not require the Covid-19 vaccine before entering their establishment. The problem we are trying to solve
                    is giving people a database where those who are, and aren’t vaccinated can determine where they are, and aren’t allowed to
                    go. It’s important for people to use this because those who are vaccinated may want to only go to establishments where they
                    know others have been vaccinated and which adhere to strict covid-19 guidelines. This would ensure the safety of patrons at
                    these locations. It’s also useful for those who aren’t vaccinated because they will be able to determine where they can go.
                    Our motivation for this project is to help people plan their lives better and keep up with regularly changing policies of
                    businesses during this pandemic. It could also potentially reduce stress.</p>
            </div>
        </div>
        </div>
        <div class="col d-flex justify-content-center">
        <div class="card" style="position: absolute; bottom: 5px; width: 100rem">
            <div class="card-body">
                <h4 class="card-title"><center>Members' Contact Information</center></h4>
                <p class="card-text"><center>Killian Hickey: khickey1@uw.edu<br>
                    Edson Jacob Mendieta: edsonm@uw.edu<br>
                    Alex Larsen: alexlars@uw.edu</center></p>
            </div>
        </div>
        </div>
    </body>
</html>
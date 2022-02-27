<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>RiUnit Converter</title>
</head>

<body>

    <?php
        $page = basename($_SERVER['PHP_SELF']);
        $active_page = "active border-bottom border-3 rounded";
    ?>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark bg-gradient">
        <div class="container-fluid">
            <a class="navbar-brand <?php if($page == 'index.php'){ echo $active_page.'"';}?>" href="index.php">RiUnitConverter</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == 'length_distance.php'){ echo $active_page.'"';}?>" aria-current="page" href="length_distance.php">Length & Distance</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == 'area.php'){ echo $active_page.'"';}?>" href="area.php">Area</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == 'volume_capacity.php'){ echo $active_page.'"';}?>" href="volume_capacity.php">Volume & Capacity</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == 'mass_weight.php'){ echo $active_page.'"';}?>" href="mass_weight.php">Mass & Weight</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == 'speed.php'){ echo $active_page.'"';}?>" href="speed.php">Speed</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($page == 'temperature.php'){ echo $active_page.'"';}?>" href="temperature.php">Temperature</a>
                    </li>

                    <!-- <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li> -->
                </ul>
                <!-- <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>

    <!-- jQuery -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>

    <!-- JavaScript: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>
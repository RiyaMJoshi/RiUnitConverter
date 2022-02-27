<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css">
</head>

<body>

    <?php
        require('include/header.php');
    ?>

    <!-- Menu in Card -->
    <div class="container-fluid">
        <div class="card m-4 shadow p-4 bg-body rounded">
            <div class="card-body">
                <div class="row justify-content-center">
                    <div class="col-md-5 col-sm-12 m-3">
                        <a href="length_distance.php" class="text-decoration-none text-dark text-center">
                            <div class="card p-3 bg-primary rounded">
                                <div><i class="fas fa-ruler"></i></div>
                                <div class="card-body">
                                    <p class="card-text">Length &amp; Distance</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-5 col-sm-12 m-3">
                        <a href="area.php" class="text-decoration-none text-dark text-center">
                            <div class="card p-3 bg-warning rounded">
                                <div><i class="fas fa-chart-area"></i></div>
                                <div class="card-body">
                                    <p class="card-text">Area</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-5 col-sm-12 m-3">
                        <a href="volume_capacity.php" class="text-decoration-none text-dark text-center">
                            <div class="card bg-secondary p-3 rounded">
                                <div><i class="fas fa-cube"></i></div>
                                <div class="card-body">
                                    <p class="card-text">Volume &amp; Capacity</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-5 col-sm-12 m-3">
                        <a href="mass_weight.php" class="text-decoration-none text-dark text-center">
                            <div class="card bg-info p-3 rounded">
                                <div><i class="fas fa-weight-hanging"></i></div>
                                <div class="card-body">
                                    <p class="card-text">Mass &amp; Weight</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-5 col-sm-12 m-3">
                        <a href="speed.php" class="text-decoration-none text-dark text-center">
                            <div class="card bg-danger p-3 rounded">
                                <div><i class="fas fa-gauge-high"></i></div>
                                <div class="card-body">
                                    <p class="card-text">Speed</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-5 col-sm-12 m-3">
                        <a href="temperature.php" class="text-decoration-none text-dark text-center">
                            <div class="card bg-success p-3 rounded">
                                <div><i class="fas fa-temperature-high"></i></div>
                                <div class="card-body">
                                    <p class="card-text">Temperature</p>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- End Menu in Card -->




    <?php
        require('include/footer.php');
    ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

</body>

</html>
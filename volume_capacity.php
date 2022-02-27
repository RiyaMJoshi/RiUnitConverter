<?php
    require_once('include/header.php');
    require_once('include/functions.php');

    $units = array("Cubic Kilometer", "Cubic Metre", "Cubic Centimetre", "Cubic Mile", "Cubic Yard", 
            "Cubic Foot", "Cubic Inch", "Litre", "Millilitre", 
            "Liquid Gallon (US)", "Liquid Quart (US)", "Liquid Pint (US)", "Legal Cup (US)", 
            "Fluid Ounce (US)", "Tablespoon (US)", "Teaspoon (US)",
            "Liquid Gallon (UK)", "Liquid Quart (UK)", "Liquid Pint (UK)", "Legal Cup (UK)", 
            "Fluid Ounce (UK)", "Tablespoon (UK)", "Teaspoon (UK)");

    $from_value = '0';
    $from_unit = '';
    $to_value = '';
    $to_unit = '';
    $valid = true;

    if(isset($_POST['submit'])){
        $from_value = $_POST['inputFrom'];

        // validate decimal value with optional +/- and e/E and '.'
        $validate_exp = "/^[+\-]?\d*(\.\d+)?([eE][+\-]?\d+)?$/";
        if (preg_match($validate_exp, $from_value)) {
            echo "<script>console.log('Valid Input')</script>";
        $from_unit = optionize($_POST['unitFrom']);
        $to_unit = optionize($_POST['unitTo']);

        $to_value = convert_volume($from_value, $from_unit, $to_unit);
    }
    else{
        $valid = false;
        echo "<script>console.log('Opps.. Invalid Input')</script>";            
    }  
    }
?>

<!-- <h1>Volume & Capacity...</h1> -->

<div class="container">
    <div class="card my-4">
        <h5 class="card-header">Volume & Capacity Conversion</h5>
        <div class="card-body">
            <?php
                // Show alert message on invalid input
                if(!$valid){
                    ?>
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Please Enter Numeric or Scientific Input..!</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php
                }
            ?>
            <form class="row g-3 justify-content-between" method="post" action="">
                <div class="col-md-12">
                    <label for="value" class="form-label card-text">Value:</label>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="inputFrom" name="inputFrom" value="<?php echo $from_value; ?>">
                </div>
                <div class="col-md-2 text-center align-self-center fs-4">
                    <label for="equalTo" class="form-label">=</label>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" id="inputTo" name="inputTo" value="<?php echo float_to_string($to_value); ?>" readonly>
                </div>
                <div class="col-md-5">
                    <label for="unitFrom" class="form-label">From:</label>
                    <select id="unitFrom" name="unitFrom" class="form-select">
                    <?php
                            foreach($units as $key=>$unit){
                                $opt = optionize($unit);
                                echo "<option value=\"{$opt}\"";
                                if($from_unit == $opt) { echo " selected"; }
                                echo ">{$unit}</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-md-5">
                    <label for="unitTo" class="form-label">To:</label>
                    <select id="unitTo" name="unitTo" class="form-select">
                    <?php
                            foreach($units as $key=>$unit){
                                $opt = optionize($unit);
                                echo "<option value=\"{$opt}\"";
                                if($to_unit == $opt) { echo " selected"; }
                                echo ">{$unit}</option>";
                            }
                        ?>
                    </select>
                </div>
                <div class="col-12">
                    <input type="submit" class="btn btn-warning" name="submit" value="Convert">
                </div>
            </form>           
        </div>
    </div>
</div>


<?php
    require('include/footer.php');
?>

<?php
/*   if (filter_has_var(INPUT_POST, 'data')){
    echo 'Data Found';
  } else {
    echo 'No Data';
  }
 */

  if (filter_has_var(INPUT_POST, 'name')){

    // $email = $_REQUEST['data'];
    //
    // // Remove illegal characters
    // $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // echo "{$email} <br>";
    //
    // if (filter_var($email, FILTER_VALIDATE_EMAIL)){
    //   echo 'Email is valid';
    // } else{
    //   echo 'Email is not valid';
    // }
    //
    //
    // #FILTER_VALIDATE_BOOLEAN
    // #FILTER_VALIDATE_EMAIL
    // #FILTER_VALIDATE_FLOAT
    // #FILTER_VALIDATE_INT
    // #FILTER_VALIDATE_IP
    // #FILTER_VALIDATE_REGEX
    // #FILTER_VALIDATE_URL
    //
    // $var = "23";
    //
    // if (filter_var($var, FILTER_VALIDATE_INT)){
    //   echo "'{$var}' is  a number";
    // } else {
    //   echo "'{$var}' is not a number";
    // }
    // //
    // $number = '<script>alert(1)</script>';
    // // echo $number;
    // echo $number;

    // echo $number;
    // var_dump(filter_var($number, FILTER_SANITIZE_NUMBER_INT));
    //
    // $filters = array(
    //   "data" => FILTER_VALIDATE_EMAIL,
    //   "data2" => array(
    //     "filter" => FILTER_VALIDATE_INT,
    //     "options" => array(
    //       "min_range" => 1,
    //       "max_range" => 100
    //     )
    //   )
    // );
    //
    // print_r(filter_input_array(INPUT_POST, $filters));

    $arrayName = array(
      'name' => 'brad traversy',
      'age' => 120,
      'email' => 'brad_traversy@gmail.com'
    );

    $filters = array(
      'name' => array(
        'filter' => FILTER_CALLBACK,
        'options' => 'ucwords'
      ),
      'age' => array(
        'filter' => FILTER_VALIDATE_INT,
        'options' => array(
          'min_range' => 1,
          'max_range' => 120
        )
      ),
      'email' => FILTER_VALIDATE_EMAIL
    );

    print_r(filter_var_array($arrayName, $filters));
  }
?>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

  <button type="submit">Submit</button>
</form>

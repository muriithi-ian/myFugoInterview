<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tables</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

</head>

<body>
</div>


    <div class="container">
        <table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <th>NAME</th>
                <th>VALUES</th>
            </thead>
            <tbody id="apiData">
              <!--   <tr>
                    <td>s</td>
                    <td>p</td>
                </tr>
                <tr>
                    <td>f</td>
                    <td>x</td>
                </tr> -->
            </tbody>
        </table> 
    </div>

    <div id ="phpData">
    <?php
        // place GET call to API
        $cURL = curl_init();
        //host address
        curl_setopt($cURL, CURLOPT_URL,'http://18.220.203.205:9090/MyFugoSys/myfugo/animalidentification/56');
        //disable Header from being returned with response
        curl_setopt($cURL, CURLOPT_HEADER,false);
        //disable auto-render of returned value to website
        curl_setopt($cURL, CURLOPT_RETURNTRANSFER,true);
        //set query timeout
        curl_setopt($cURL, CURLOPT_CONNECTTIMEOUT,10);
        //store response from API
        $response = curl_exec($cURL);
        curl_close($cURL);        
    ?>

    <script type="text/javascript">
    //pass response to JS for rendering
        var apiRawData = <?php echo $response?>
    </script>
    
    <!-- scripts -->
    <script src="index.js"></script>

    <!-- required bootstrap scripts -->
    <!-- Disabled to remove conflict between slim and core jQuery -->
   <!--  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>
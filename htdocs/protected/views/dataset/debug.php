<h1>Debug view</h1>

<?php
    
    print PHP_EOL.'<pre>';
    
    //print_r($model->attributes);
    
    //print_r($model->buckles);


    
    print '$_POST:';
    print_r($_POST);
    print '$_GET:';
    print_r($_GET);
    if (isset($_SESSION))
    {
        print '$_SESSION:';
        print_r($_SESSION);				
    }
    if (isset($_FILES))
    {
        print '$_FILES:';
        print_r($_FILES);				
    }
    if (isset($_REQUEST))
    {
        print '$_REQUEST:';
        print_r($_REQUEST);				
    }
    if (isset($_SERVER))
    {
        print '$_SERVER:';
        print_r($_SERVER);				
    }
    
    print '</pre>';
    
?>


<?php include 'header.php' ?>
<!DOCTYPE html>

<?php

// make a note of the current working directory relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler script
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'upload.processor.php';

// set a max file size for the html upload form
$max_file_size = 30000; // size in bytes

// now echo the html page
?>
<html lang="en">

    <head>
        <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">

        <link rel="stylesheet" type="text/css" href="stylesheet.css">

        <title>Upload form</title>

    </head>

    <body>

    <form id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post">

        <h1>
            Upload Picture
        </h1>

        <p>
            <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
        </p>

        <p>
            <label for="file">Select your image (.JPG & .PNG only)</label>
            <input id="file" type="file" name="file">
        </p>

        <p>
            <input id="submit" type="submit" name="submit" value="Upload">
        </p>

    </form>


    </body>

</html>

</html>
<?php include 'footer.php' ?>

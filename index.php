<?php
$brdURL = 'b';
$brdTitle = 'PHP4chan';
?>
<title>/<?php echo $brdURL; ?>/ - <?php echo $brdTitle; ?> </title>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

      <center>      <h1>/<?php echo $brdURL; ?>/ - <?php echo $brdTitle; ?> </h1>


            <form action="shout.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>Name:</td>
                        <td>
                            <input type="text" name="name" value="Anonymous">
                        </td>
                    </tr>
                                            <td>E-Mail:</td>
                        <td>
                            <input type="text" name="name" value="">
                        </td>
                    </tr>
                                                                <td>Subject:</td>
                        <td>
                            <input type="text" name="name" value="">
                                                        <input type="submit" value="Post">

                        </td>
                    </tr>
                    <tr>
                        <td>Message:</td>
                        <td>
                            <textarea name="post"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td>File:</td>
                        <td>
                            <input type="file" name="fileToUpload" id="fileToUpload">
                        </td>
                    </tr>
                                                                <td>Password:</td>
                        <td>
                            <input type="password" name="name" value="">
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        </center><hr>
        <?php
            echo file_get_contents("posts.html");
        ?>
    </body>
</html>

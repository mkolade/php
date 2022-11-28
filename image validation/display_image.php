<?php

if(isset($_POST['submit']))
{
    $name = $_POST['firstname']." ".$_POST['lastname'];
    $address = $_POST['address'];
    $email = $_POST['email'];

    $passport = $_FILES['photo'];

    if(is_uploaded_file($passport['tmp_name']))
    {
        
        $allowed_photo_extension = array("jpg","jpeg","png");

        $file_information = pathinfo($passport['name']);

        if(in_array(strtolower($file_information['extension']),$allowed_photo_extension))
        {
            
           if(getimagesize($passport['tmp_name']))
           {

                $random_name = time().".".$file_information['extension'];


                move_uploaded_file($passport['tmp_name'],"passport/".$random_name);

                ?>


                <table width="500">
                    <tr>
                        <td><img src="passport/<?php  echo $random_name;  ?>" width="300" height="300"/></td>
                    </tr>
                    <tr>
                    <td>
                            Name : <?php echo $name  ?><br/>
                            Email Address : <?php echo $email  ?><br/>
                            Address : <?php echo $address  ?><br/>
                    </td>
                    </tr>
                </table>


            <?php

           }
           else
           {
            header("location:index.php?message=Please upload a valid image");
           }

        }
        else
        {
            header("location:index.php?message=Please upload a valid image");
        }

    }
    else
    {
        header("location:index.php?message=Error while uploading file,please try again");
    }


}

?>
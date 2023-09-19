<?php

    if(isset($_POST['submit'])) {
        $allowed_ext = ['pdf', 'jpg', 'jpeg', 'png', 'gif'];
        
        if(!empty($_FILES['upload']['name'])) {
            print_r($_FILES);
            $file_name = $_FILES['upload']['name'];
            $file_type = $_FILES['upload']['type'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp_name = $_FILES['upload']['tmp_name'];
            $file_error = $_FILES['upload']['error'];
            $target_dir = "uploads/{$file_name}";
        
        $file_ext = explode('.', $file_name);
        $file_ext = strtolower(end($file_ext));

        // Validate file ext
            if(in_array($file_ext, $allowed_ext)) {
            if($file_size <= 1000000) {
                    move_uploaded_file(
                        $file_tmp_name, 
                        $target_dir
                    );
                    $message = '<p style="color:green">File uploaded successfully</p>'; 
            }
            else {
                $message = '<p style="color:red">File size is too large</p>';
            }
            }
            else {
                $message = '<p style="color:red">Invalid file extension</p>';
            }
        }
        else {
            $message = '<p style="color:red">Please select a file</p>';
        }   
        // Get file ext
       

        

        

        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File upload</title>
</head>
<body>
    <?php echo $message ?? null; ?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>"
    method="POST" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="upload" >
    <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>
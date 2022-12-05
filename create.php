<?php 
 
 include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Blog using PHP and MySQL</title>
</head>
<body>
        <div class="container mt-5">
           <form method="GET">
            <input type="text" name="title" placeholder="Blog Title" class="form-control bg-dark text-white my-3 text-center">
            <textarea name="content" class="form-control bg-dark text-white my-3"></textarea>
            <button name="new_post" class="btn btn-dark">Add Post</button>
           </form>
     </div>


     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstra/4.5.2/css/bootstrap.min.js"></script> 
</body>
</html>
<?php
    require_once 'connection/connection.php';
?>

<?php
    session_start();

    if(isset($_SESSION['user_id'])){
        header("Location: login.php");
    }

    if(isset($_POST["postadd"])){
        $title = mysqli_real_escape_string($connection,$_POST["title"]);
        $province = mysqli_real_escape_string($connection,$_POST["province"]);
        $description = mysqli_real_escape_string($connection,$_POST["descrp"]);
        $iscoming = mysqli_real_escape_string($connection,$_POST["surveyor"]);
        $size = $_POST["size"];
        $price = mysqli_real_escape_string($connection,$_POST['price']);
        $phone = mysqli_real_escape_string($connection,$_POST['tel']);

        $uploadDir = 'images/properties/property';

        function uploadImage($image, $uploadDir) {
            $imageName = basename($image['name']);
            $targetFilePath = $uploadDir . $imageName;
            if (move_uploaded_file($image['tmp_name'], $targetFilePath)) {
                return $imageName;
            }
            return null;
        }

        $image1 = uploadImage($_FILES['image1'],$uploadDir);
        $image2 = uploadImage($_FILES['image2'],$uploadDir);
        $image3 = uploadImage($_FILES['image3'],$uploadDir);

        $userid = $_SESSION['user_id'];
        

        $sql = "INSERT INTO property (title,userid,location,descrp,img1,img2,img3,size,price,phone,surveyorok) VALUES ('{$title}',$userid,'{$province}','{$description}','{$image1}','{$image2}','{$image3}',$size,'{$price}','{$phone}','{$iscoming}')";
        $result_set = mysqli_query($connection,$sql);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Land Sale Posting Page</title>
    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    

<div class="container my-5">
    <h2 class="text-center mb-4"><b>Post Your Land for Sale</b></h2>
    <form method="post action="postadd.php" enctype="multipart/form-data">
        <!-- Property Title -->
        <div class="form-group">
            <label for="propertyTitle" style="margin-bottom: 10px"><b>Property Title</b></label>
            <input type="text" name="title" class="form-control" style="margin-bottom: 20px;border-color:#06b30e;" id="propertyTitle" placeholder="Enter property title" required>
        </div>

        <!-- Location -->
        <div class="form-group">
            <label for="locationSelect" style="margin-bottom: 10px"><b>Location</b></label>
            <select class="form-control" name="province" id="locationSelect" style="margin-bottom: 20px;border-color:#06b30e">
                <option>All of Sri Lanka</option>
                <option>Western Province</option>
                <option>North Western Province</option>
                <option>Northern Province</option>
                <option>Central Province</option>
                <option>Sabaragamuwa Province</option>
                <option>Estern Province</option>
                <option>Uwa Province</option>
                <option>Southern Province</option>
                <option>North Central Province</option>
                <!-- Add more options as needed -->
            </select>
        </div>

        <!-- Description -->
        <div class="form-group">
            <label for="propertyDescription" style="margin-bottom: 10px"><b>Description</b></label>
            <textarea class="form-control" name="descrp" style="margin-bottom: 20px;border-color:#06b30e ;" id="propertyDescription" rows="4" placeholder="Describe your property" required></textarea>
        </div>
        
        <!-- Upload Images with Preview -->
        <div class="form-group">
            <label for="propertyImages" style="margin-bottom: 10px;border-color:#06b30e;"><b>Upload Images</b></label><br>
            <input type="file" name="image1" class="form-control-file" style="margin-bottom: 20px" id="propertyImages" multiple required onchange="previewImages(event)">
            <input type="file" name="image2" class="form-control-file" style="margin-bottom: 20px" id="propertyImages" multiple required onchange="previewImages(event)">
            <input type="file" name="image3" class="form-control-file" style="margin-bottom: 20px" id="propertyImages" multiple required onchange="previewImages(event)">
        </div>

        

        <div class="form-group">
            <label for="Size of the Property" style="margin-bottom: 10px" ><b>Size(perches) </b></label>
            <input type="number" name="size" class="form-control" style="margin-bottom: 20px;border-color:#06b30e;" id="propertySize" placeholder="Enter the size of your land" required>
        </div>

         <!-- Price -->
         <div class="form-group">
            <label for="propertyPrice" style="margin-bottom: 10px"><b>Price ($)</b></label>
            <input type="text" name="price" class="form-control" style="margin-bottom: 20px;border-color:#06b30e;" id="propertyPrice" placeholder="Enter price" required>
        </div>


        <!-- Contact Information -->
        <div class="form-group">
            <label for="contactInfo" style="margin-bottom: 10px"><b>Contact Information</b></label>
            <input type="text" name="tel" class="form-control" style="margin-bottom: 20px;border-color:#06b30e;" id="contactInfo" placeholder="Enter your contact details" required>
        </div>

        <div class="form-group">
            <label for="contactInfo" style="margin-bottom: 10px"><b>Do you come with surveyor or not?</b></label><br>
            <input type="radio" name="surveyor" style="margin-bottom: 20px" style="margin-left: 20px;" required> Yes
            <input type="radio" name="surveyor" style="margin-bottom: 20px" style="margin-left: 20px;" required> No
        </div>

        <!-- Submit Button -->
        <button type="submit" name="postadd" class="btn btn-block" style="margin-bottom: 10px;width: 100%;background-color:#06b30e; color: white;">Post</button>
    </form>
</div>

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
<script src="bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>

<!-- JavaScript for Image Preview -->
<script>
function previewImages(event) {
    const imagePreviewContainer = document.getElementById('imagePreview');
    imagePreviewContainer.innerHTML = ''; // Clear previous images

    const files = event.target.files;
    for (const file of files) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const imgElement = document.createElement('img');
            imgElement.src = e.target.result;
            imgElement.style.width = '150px';
            imgElement.style.height = '100px';
            imgElement.style.objectFit = 'cover';
            imgElement.className = 'img-thumbnail';

            imagePreviewContainer.appendChild(imgElement);
        };

        reader.readAsDataURL(file);
    }
}
</script>

</body>
</html>

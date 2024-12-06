<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Land Sale Advertisement</title>
  <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .price {
      font-size: 24px;
      font-weight: bold;
      color: #008c4a;
    }
    .negotiable {
      font-size: 16px;
      color: #666;
    }
    .property-details {
      list-style: none;
      padding: 0;
    }
    .property-details li {
      margin-bottom: 8px;
    }
  </style>
</head>
<body>
  <!-- Main Content Section -->
  <div class="container my-5">
    <!-- Title and Price Section -->
    <div class="text-center">
      <h1 class="mb-3">Prime 2-Acre Commercial Land for Sale</h1>
      <p class="price">Rs 950,000 per perch</p>
      <p class="negotiable">Negotiable</p>
    </div>

    <!-- Image Gallery -->
    <div id="carouselExampleDark" class="carousel carousel-dark slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="land1.jpg" class="d-block w-100" height="500px" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="land2.jpg" class="d-block w-100" height="500px" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <div class="carousel-item">
            <img src="land4.jpg" class="d-block w-100" height="500px" alt="...">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    <!-- Property Information -->
    <div class="row">
      <div class="col-md-5">
        <h2>Details</h2>
        <ul class="property-details">
          <li><strong>Address:</strong> Homagama, Magammana</li>
          <li><strong>Land type:</strong> Commercial, Residential</li>
          <li><strong>Land size:</strong> 326.0 perches</li>
          <li><strong>Mobile number: </strong>0715653421</li>
          <li><strong style="color: red;">Will surveyor is come or not: </strong>Yes</li>
          <label for="propertyDescription" style="margin-bottom: 10px"><b>Leave a massege</b></label>
          <textarea class="form-control" style="margin-bottom: 20px" id="propertyDescription" row="2" placeholder="Can you put the msg" required></textarea>
          <button type="submit" class="btn btn-block" style="margin-bottom: 10px;background-color: #06b30e;color:white;">Send</button>
        </ul>
      </div>
      <div class="col-md-6">
        <h2>Description</h2>
        <p>Prime 2-Acre Commercial Land for Sale in Magammana, Homagama – Ideal for Factory, Warehouse, Office, Hotel, apartment or any commercial development.</p>
        <p>This 2-acre land in the heart of Magammana, Homagama, is perfect for any commercial or residential purposes which offers excellent connectivity to key transportation destinations.</p>
      </div>
    </div>
  </div>

  <div class="container mt-5">
    <!-- Header for More Ads Section -->
    <h4 class="mb-4">More ads from </h4>

    <div class="row">
        <!-- First Ad -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100">
                <img src="land1.jpg" class="card-img-top" alt="House Image">
                <div class="card-body">
                    <h6 class="card-title">4 Bedrooms House for Rent in Gampaha</h6>
                    <p class="card-text text-muted">Beds: 4, Baths: 1</p>
                    <p class="card-text text-muted">Gampaha, House Rentals</p>
                    <span class="text-success font-weight-bold">Rs 45,000 /month</span>
                    <p class="text-muted small">8 days ago</p>
                </div>
            </div>
        </div>

        <!-- Second Ad -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100">
                <img src="land2.jpg" class="card-img-top" alt="House Image">
                <div class="card-body">
                    <h6 class="card-title">Fully Furnished House for Rent in Gampaha</h6>
                    <p class="card-text text-muted">Beds: 5, Baths: 3</p>
                    <p class="card-text text-muted">Gampaha, House Rentals</p>
                    <span class="text-success font-weight-bold">Rs 110,000 /month</span>
                    <p class="text-muted small">1 day ago</p>
                </div>
            </div>
        </div>

        <!-- Third Ad -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100">
                <img src="land4.jpg" class="card-img-top" alt="House Image">
                <div class="card-body">
                    <h6 class="card-title">House for Rent in Negombo</h6>
                    <p class="card-text text-muted">Beds: 3, Baths: 1</p>
                    <p class="card-text text-muted">Gampaha, House Rentals</p>
                    <span class="text-success font-weight-bold">Rs 75,000 /month</span>
                    <p class="text-muted small">17 days ago</p>
                </div>
            </div>
        </div>

        <!-- Fourth Ad -->
        <div class="col-md-6 col-lg-3 mb-4">
            <div class="card h-100">
                <img src="land5.jpg" class="card-img-top" alt="House Image">
                <div class="card-body">
                    <h6 class="card-title">House for Rent in Jaela</h6>
                    <p class="card-text text-muted">Beds: 4, Baths: 3</p>
                    <p class="card-text text-muted">Gampaha, House Rentals</p>
                    <span class="text-success font-weight-bold">Rs 75,000 /month</span>
                    <p class="text-muted small">1 day ago</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Link -->
    <div class="text-center">
        <a href="index.php" class="btn" style="background-color: #06b30e;color: white;">Go Home Page</a>
    </div>
</div>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="bootstrap-5.3.3-dist/js/bootstrap.min.js""></script>

</body>
</html>

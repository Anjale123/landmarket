
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <style>
    .navbar {
        background-color: #06b30e;
    }

    .merriweather-regular {
    font-family: "Merriweather", serif;
    font-weight: 400;
    font-style: normal;
    font-size: 24px;
    }

   
    .search-input {
        border: none;
        background: transparent;
        width: 25%;
        outline: none;
    }
    .search-button {
            background: none;
            border: none;
            color: #fff;
            font-size: 1.2rem;
          }
    .post-ad-btn {
        background-color: #ffc107;
        color: #fff;
        border-radius: 15px;
    }
    .language-toggle {
        margin-right: 50px;
    }
</style>
</head>
<body>
    

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark">
<div class="container-fluid">
<img src="" alt="">
<a class="navbar-brand merriweather-regular" href="#">LandMarket</a>
<div class="collapse navbar-collapse">
  <ul class="navbar-nav ms-auto">
    <li class="nav-item">
      <a class="nav-link" href="#"><img src="Image/chat.png" class="img" alt="" width="25px" height="25px">&nbsp;Chat</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="login.php"><img src="Image/login.png" class="img" alt="" width="25px" height="25px">&nbsp;Login</a>
    </li>
    <li class="nav-item">
      <a class="btn post-ad-btn" href="Postpage.php ">POST YOUR AD</a>
    </li>
  </ul>
</div>
</div>
</nav>

<!-- Search Bar -->
  <img src="Image/land.jpg" class="img" width="100%" height="300px" alt="...">
    <br>
    <br>

  <div class="container mt-4">
    <!-- Header and Filter -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Lands for Sale</h1>
           
            <hr>
        </div>
    </div>
    <div class="row">
      <!-- Sidebar Filters -->
      <div class="col-md-3">
          <div class="card mb-4">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        <hr>
        <br>
              <div class="card-header">Filter by</div>
              <div class="card-body">
                  <form>
                      <div class="form-group">
                          <label for="locationSelect">Location</label>
                          <select class="form-control" id="locationSelect">
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
                      <div class="form-group">
                          <label for="sortBy">Sort by</label>
                          <select class="form-control" id="sortBy">
                              <option>Newest on Top</option>
                              <option>Price: Low to High</option>
                              <option>Price: High to Low</option>
                          </select>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <!-- Land Listings -->
      <div class="col-md-9">
          <div class="card mb-3">
              <div class="row no-gutters">
                  <div class="col-md-4">
                      <img src="Image/land2.jpg" class="card-img" alt="Land Image">
                  </div>
                  <div class="col-md-8">
                      <div class="card-body">
                          <h5 class="card-title">Land for Sale in Katunayaka</h5>
                          <p class="card-text">Rs 700,000 per perch</p>
                          <p class="card-text">10 perchues</p>

                          <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                      </div>
                  </div>
              </div>
        

          <div class="card mb-8">
              <div class="row no-gutters">
                  <div class="col-md-4">
                      <img src="Image/land1.jpg" class="card-img" alt="Land Image">
                  </div>
                  <div class="col-md-8">
                      <div class="card-body">
                          <h5 class="card-title">Land for Sale in Anuradhapuraya</h5>
                          <p class="card-text">50 perchues</p>
                          <p class="card-text">Rs.1276,000 total price</p>
                          <p class="card-text"><small class="text-body-secondary">Last updated 5 days ago</small></p>
                        </div>
                      </div>
                  </div>
              </div>
<br>
              <div class="card mb-8">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="Image/land3.jpg" class="card-img" alt="Land Image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Land for Sale in Vavuniya</h5>
                            <p class="card-text">15 perchues</p>
                            <p class="card-text">Rs.700,000 total price</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 1 hour ago</small></p>
                          </div>
                        </div>
                    </div>
                </div>
<br>
                <div class="card mb-8">
                  <div class="row no-gutters">
                      <div class="col-md-4">
                          <img src="Image/land5.jpg" class="card-img" alt="Land Image">
                      </div>
                      <div class="col-md-8">
                          <div class="card-body">
                              <h5 class="card-title">Land for Sale in Kandy</h5>
                              <p class="card-text">10 perchues</p>
                              <p class="card-text">Rs.1,000,000 total price</p>
                              <p class="card-text"><small class="text-body-secondary">Last updated 50 days ago</small></p>
                            </div>
                          </div>
                      </div>
                  </div>
          </div>
          </div>
          <br>

          <!-- Add more listings as needed -->
      </div>
  </div>
</div>
<footer class="text-bg-success p-3">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>About Us</h5>
        <p>A wide range of land listings in various regions, from residential plots to commercial and agricultural land.</p>
      </div>
      <div class="col-md-4">
        <h5>Contact</h5>
        <ul class="list-unstyled">
          <li>Email: landMarket@123.lk</li>
          <li>Phone: +94 77 222 33 44</li>
          <li>Address: 125/13, Belummahara, Gampaha</li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Follow Us</h5>
        <a href="#" class="text-black me-3"><i class="fab fa-facebook"></i></a>
        <a href="#" class="text-black me-3"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-black"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <hr class="my-3">
    <p class="mb-0 text-center">&copy; 2024 Your Company. All rights reserved.</p>
  </div>
</footer>

<!-- Bootstrap Icons (Optional) -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





</body>
</html>

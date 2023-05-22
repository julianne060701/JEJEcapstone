<html>
<head>
    <style>
        /* CSS Styles */
        .container-xxl {
            max-width: 1400px;
            margin: 0 auto;
        }

        .text-start {
            text-align: left;
        }

        .property-item {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 15px;
        }

        .property-item img {
            width: 50%;
            height: auto;
        }

        .property-item h5 {
            color: #5D59AF;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .property-item a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }

        .property-item a:hover {
            text-decoration: underline;
        }

        .property-item p {
            margin: 0;
            color: #777;
        }

        .property-item small {
            display: block;
            color: #999;
            font-size: 14px;
            margin-bottom: 5px;
        }

        .property-item i {
            margin-right: 5px;
        }
    </style>
</head>
<body>
<!-- Property List Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-0 gx-5 align-items-end">
            <div class="col-lg-6">
                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                    <h1 class="mb-3">Property Listing</h1>
                    <p>Here is the list of posted properties on the portal.</p>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div id="tab-1" class="tab-pane fade show p-0 active">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href="viewProfile.php"><img class="img-fluid" src="image.jpg" alt=""/></a>
                                <div class="rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style="background: #5D59AF;">For Rent</div>
                                <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="color: #5D59AF;">Apartment</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="mb-3" style="color: #5D59AF;">&#8369; 2000</h5>
                                <a class="d-block h5 mb-2" href="seekerViewProperty.php?property_ID=1&addresscode=123&email=user@example.com">Property 1</a>
                                <p><i class="bx bxs-map me-2" style="color: #5D59AF;"></i>Property Address</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="bx bxs-door-open me-2" style="color: #5D59AF;"></i>5 Available Rooms</small>
                                <small class="flex-fill text-center border-end py-2"><i class="bx bxs-bed me-2" style="color: #5D59AF;"></i>2 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="bx bxs-bath me-2" style="color: #5D59AF;"></i>Bath - 2</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="property-item rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <a href="viewProfile.php"><img class="img-fluid" src="images/sample.jpg" alt=""/></a>
                                <div class="rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3" style="background: #5D59AF;">For Rent</div>
                                <div class="bg-white rounded-top position-absolute start-0 bottom-0 mx-4 pt-1 px-3" style="color: #5D59AF;">House</div>
                            </div>
                            <div class="p-4 pb-0">
                                <h5 class="mb-3" style="color: #5D59AF;">&#8369; 3000</h5>
                                <a class="d-block h5 mb-2" href="seekerViewProperty.php?property_ID=2&addresscode=456&email=user@example.com">Property 2</a>
                                <p><i class="bx bxs-map me-2" style="color: #5D59AF;"></i>Property Address</p>
                            </div>
                            <div class="d-flex border-top">
                                <small class="flex-fill text-center border-end py-2"><i class="bx bxs-door-open me-2" style="color: #5D59AF;"></i>3 Available Rooms</small>
                                <small class="flex-fill text-center border-end py-2"><i class="bx bxs-bed me-2" style="color: #5D59AF;"></i>4 Bed</small>
                                <small class="flex-fill text-center py-2"><i class="bx bxs-bath me-2" style="color: #5D59AF;"></i>Bath - 3</small>
                            </div>
                        </div>
                    </div>
                    <!-- Add more property items as needed -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Property List End -->

</body>
</html>

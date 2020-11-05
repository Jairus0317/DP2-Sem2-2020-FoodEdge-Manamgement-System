<!DOCTYPE html>
<html lang="en">

<head>
    <title> Feedback</title>
    <meta charset="utf-8">
    <meta name="author" content="Eddie Liew">
    <meta name="description" content="Contact Us">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="style/feedback.css">
</head>

<nav>

</nav>

<body>
    <div class="container my-5 py-5 z-depth-1">


        <!--Section: Content-->
        <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

            <!--css temporary put at here-->
            <style>
                .map-container {
                    height: 200px;
                    position: relative;
                }
                
                .map-container iframe {
                    left: 0;
                    top: 0;
                    height: 100%;
                    width: 100%;
                    position: absolute;
                }
            </style>

            <h3 class="font-weight-bold">Contact Us</h3>

            <!--Google map-->
            <div id="map-container-google-1" class="z-depth-1 map-container mb-5">
                <iframe src="https://maps.google.com/maps?q=swinburne%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>


            <div class="row">

                <div class="col-lg-5 col-md-12 mb-0 mb-md-0">

                    <p><span class="font-weight-bold mr-2">Address</span></p>
                    <p class="text-muted">FoodEdge Catering</p>
                    <p class="text-muted">Jalan Simpang Tiga,</p>
                    <p class="text-muted">93350 Kuching,</p>
                    <p class="text-muted">Sarawak, Malaysia.</p>

                    <p><span class="font-weight-bold mr-2">Email</span></p>
                    <p><a href="mailto:foodedgecatering@gamil.com">foodedgecatering@gamil.com</a></p>
                    <p><span class="font-weight-bold mr-2">Phone</span></p>
                    <p><a href="tel:+6082428353">082 428 353</a></p>

                </div>
                <!--Grid column-->

                <div class="col-lg-7 col-md-12 mb-4 mb-md-0">

                    <div class="md-form md-outline mt-3">
                        <p class="font-weight-bold">Drop us a message</p>
                    </div>

                    <div class="row">

                        <div class="col-md-6">

                            <!-- Material outline input -->
                            <div class="md-form md-outline mb-0">
                                <input type="text" id="form-first-name" class="form-control">
                                <label for="form-first-name">First name</label>
                            </div>

                        </div>

                        <div class="col-md-6">

                            <!-- Material outline input -->
                            <div class="md-form md-outline mb-0">
                                <input type="text" id="form-last-name" class="form-control">
                                <label for="form-last-name">Last name</label>
                            </div>

                        </div>

                    </div>

                    <!-- Material outline input -->
                    <div class="md-form md-outline mt-3">
                        <input type="email" id="form-email" class="form-control">
                        <label for="form-email">E-mail</label>
                    </div>

                    <!--Material textarea-->
                    <div class="md-form md-outline mb-3">
                        <textarea id="form-message" class="md-textarea form-control" rows="3"></textarea>
                        <label for="form-message">Leave us a message</label>
                    </div>

                    <button type="submit" class="btn btn-info btn-sm ml-0">Submit<i class="far fa-paper-plane ml-2"></i></button>

                </div>
            </div>

        </section>

    </div>



    <footer>

    </footer>




</body>

</html>
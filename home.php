<?php include 'header.html'; ?>

<main data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="70" tabindex="0">
    
    <section id="home" class="vh-100 d-flex align-items-center justify-content-center bg-primary text-white">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
                    <h1 class="display-2 fw-bold mb-3" style="font-family: 'Lobster', cursive;">welcome to sri's ride</h1>
                    <p class="lead mb-4">Your Ride, Your Way – Anytime, Anywhere!</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-warning"></i>24/7 Service Availability</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-warning"></i>Professional & Verified Drivers</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-warning"></i>Clean & Comfortable Cars</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill me-2 text-warning"></i>Instant Booking & Support</li>
                    </ul>
                    <a href="#services" class="btn btn-light btn-lg shadow me-2">Explore Services</a>
                    <a href="#contact" class="btn btn-outline-light btn-lg">Book Now</a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="b.jfif" alt="Sri's Ride Car" class="img-fluid rounded shadow-lg hero-img" style="max-height: 400px; object-fit: cover; border: 5px solid #fff;">
                    <div class="mt-4">
                        <span class="badge bg-warning text-dark fs-6 px-3 py-2 shadow">Special Offer: 50% Off First Ride!</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="about" class="py-5 bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                    <img src="a.jfif" class="img-fluid rounded shadow-lg" alt="F1 Car" style="max-height: 350px; object-fit: cover; border: 5px solid #fff;">
                    <div class="mt-3">
                        <span class="badge bg-danger fs-6 px-3 py-2 shadow">Speed And Spicy</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-3" style="font-family: 'Lobster', cursive; color: #d90429;">About us</h2>
                    <p class="mb-3 fs-5">Sri's Ride is more than just a travel service—it's a passion for excellence, speed, and safety. Inspired by the world of Formula 1, we bring the thrill of high-performance travel to everyday journeys.</p>
                    <ul class="list-unstyled mb-4">
                        <li class="mb-2"><i class="bi bi-flag-fill me-2 text-success"></i>Located in <b>Chennai, Tamil Nadu, India</b></li>
                        <li class="mb-2"><i class="bi bi-globe2 me-2 text-primary"></i>Serving all major cities and across India</li>
                        <li class="mb-2"><i class="bi bi-award-fill me-2 text-warning"></i>Trusted by thousands of happy customers</li>
                        <li class="mb-2"><i class="bi bi-person-badge-fill me-2 text-info"></i>Founder: <b>SHREERAM M K</b></li>
                    </ul>
                    <div class="alert alert-info shadow-sm">
                        <strong>Shreeram M K</strong> is dedicated to redefining travel in India, advanced technology, comfort, and a love for high-speed experience. Experience the difference with Sri's Ride!
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="services" class="py-5 bg-white">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">Our Services</h2>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 service-card">
                        <div class="card-body text-center py-5">
                            <i class="bi bi-car-front display-3 text-primary mb-3"></i>
                            <h5 class="card-title fw-bold">City Rides</h5>
                            <p class="card-text">Quick and comfortable rides within the city at affordable prices. Enjoy the travel with our modern cars.</p>
                            <span class="badge bg-success mb-2">Popular</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 service-card">
                        <div class="card-body text-center py-5">
                            <i class="bi bi-clock-history display-3 text-warning mb-3"></i>
                            <h5 class="card-title fw-bold">Hourly Rentals</h5>
                            <p class="card-text">Flexible hourly rentals for your business needs. Perfect for meetings, shopping, or city tours.</p>
                            <span class="badge bg-warning text-dark mb-2">Flexible</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-lg border-0 service-card">
                        <div class="card-body text-center py-5">
                            <i class="bi bi-geo-alt display-3 text-info mb-3"></i>
                            <h5 class="card-title fw-bold">Long Trips</h5>
                            <p class="card-text">Comfortable long-distance rides to your favorite destinations. Travel long distances with peace of mind.</p>
                            <span class="badge bg-info text-dark mb-2">Long Distance</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="pricing" class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">Pricing</h2>
            <div class="row justify-content-center">
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm text-center simple-pricing-card">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-2">City Ride</h5>
                            <div class="display-6 fw-bold text-primary mb-2">₹200<span class="fs-6">/trip</span></div>
                            <p class="card-text text-muted">Quick, safe, and affordable rides for daily needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm text-center simple-pricing-card">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-2">Hourly Rental</h5>
                            <div class="display-6 fw-bold text-warning mb-2">₹500<span class="fs-6">/hour</span></div>
                            <p class="card-text text-muted">Flexible rentals for meetings, shopping, or city tours. Pay only for the time you need.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card border-0 shadow-sm text-center simple-pricing-card">
                        <div class="card-body">
                            <h5 class="card-title fw-bold mb-2">Long Trip</h5>
                            <div class="display-6 fw-bold text-info mb-2">₹15<span class="fs-6">/km</span></div>
                            <p class="card-text text-muted">Travel long distances with comfort and peace of mind. Ideal for vacations and business trips.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4 justify-content-center">
                <div class="col-md-8">
                    <div class="alert alert-light border shadow-sm text-center">
                        <strong>Note:</strong> Prices may vary based on location, time, and vehicle type. For a custom quote, <a href="#contact" class="alert-link">contact us</a>!
                    </div>
                </div>
            </div>
        </div>
    </section>

    
    <section id="contact" class="py-5 bg-white">
        <div class="container">
            <h2 class="fw-bold text-center mb-4">Contact Us</h2>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form id="contactForm" action="conn.php" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                        <div id="contactResult" class="mt-3"></div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
>

<style>
    .simple-pricing-card {
        transition: transform 0.2s, box-shadow 0.2s, background 0.2s;
    }
    .simple-pricing-card:hover {
        transform: translateY(-8px) scale(1.03);
        box-shadow: 0 8px 32px rgba(0,0,0,0.18);
        background: linear-gradient(135deg, #e0c3fc 0%, #8ec5fc 100%);
        color: #222;
    }
    .simple-pricing-card:hover .card-title {
        color: #6f42c1;
    }
    .simple-pricing-card:hover .display-6 {
        color: #d63384 !important;
        text-shadow: 0 2px 8px rgba(214,51,132,0.15);
    }
</style>


<?php include 'footer.html'; ?>
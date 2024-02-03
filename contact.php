<?php $title = "About" ?>
<?php include("header.php") ?>
<style>
    section {
        padding-bottom: 100px;
    }
</style>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 contact">
                    <h2 class="abt-title">Contact us Directly</h2>
                    <span></span>
                    <div class="address-card">
                        <div>
                            <h4>Brittania, Chennai</h4>
                            <span>
                                <p>Gayathri nagar, Ayapakkam, chennai - 600077</p>
                                <p>Open hours 9:00 - 22:00</p>
                            </span>
                        </div>
                        <div class="view-map">View on map <img src="public/img/arrow-right.png" alt="View on map"></div>
                    </div>
                    <hr>
                    <div class="address-card">
                        <div>
                            <h4>Brittania, Chennai</h4>
                            <span>
                                <p>Gayathri nagar, Ayapakkam, chennai - 600077</p>
                                <p>Open hours 9:00 - 22:00</p>
                            </span>
                        </div>
                        <div class="view-map">View on map <img src="public/img/arrow-right.png" alt="View on map"></div>
                    </div>
                    <hr>
                </div>
                <div class="col-sm-6">
                    <div class="contact-card">
                        <p>Get in touch</p>
                        <form action="">
                            <div class="form-group mb-2">
                                <label for="name">Name</label>
                                <input type="text" id="name" class="form-input">
                            </div>
                            <div class="form-group mb-2">
                                <label for="email">Email</label>
                                <input type="text" id="email" class="form-input">
                            </div>
                            <div class="form-group mb-2">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" class="form-input">
                            </div>
                            <div class="form-group mb-2">
                                <label for="messsage">Your message</label>
                                <textarea name="" class="form-input" id="message" rows="3"></textarea>
                            </div>
                            <button>Hit us up</button>
                            <div class="form-group mt-5">
                                <p>Call on</p>
                                <div class="call-us">
                                    <span><img class="me-2" src="public/img/call-to.svg" alt="Call us">+91 123 456 7890</span>
                                    <span class="ms-3"><img class="me-2" src="public/img/call-to.svg" alt="Call us">+91 123 456
                                        7890</span>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include("footer.php") ?>
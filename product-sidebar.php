<section>
    <h4>Request A Quote</h4>
    <div class=" container ">
        <div class="row ">
            <form action="mail.php" method="post">

                <div class="col-12">
                    <input type="text" name="name" placeholder="Name*" required>
                </div>
                <div class="col-12">
                    <input type="text" name="phone" placeholder="Phone Number*" required pattern="[1-9]{1}[0-9]{9}">
                </div>
                <div class="col-12">
                    <input type="email" name="email" placeholder="Ëmail Address*" required>
                </div>
                <div class="col-12">
                    <textarea name="message" placeholder="Message"></textarea>
                </div>
                <div class="col-12">
                    <button class="submit_btn btn btn-primary" type="submit">SEND MESSAGE</button>
                </div>

                <input type="hidden" id="token" name="token">

            </form>
        </div>
    </div>
</section>
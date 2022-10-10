<footer>

    <div class="footer-content flex-content space-between wrap">

        <div class="footer-element footer-contact">

            <h3 class="header">Brand Name</h3>

            <p>The simple solution to either sell your property or search for property to buy or rent</p>

            <ul class="links social-link flex-content">

                <li><a href="http://facebook.com/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-facebook-square"></i></a></li>
                <li><a href="http://instagram.com/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-instagram-square"></i></a></li>
                <li><a href="http://twitter.com/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-twitter-square"></i></a></li>
                <li><a href="http://linkedin.com/" target="_blank" rel="noopener noreferrer"><i class="fa-brands fa-linkedin"></i></a></li>

            </ul>

        </div>

        <div class="footer-element footer-link">

            <h3 class="header">Links</h3>

            <ul class="links normal-link">

                <li><a href="../index.php">Home</a></li>
                <li><a href="../pages/sale.php">Sell</a></li>
                <li><a href="../pages/properties.php?type=buy">Buy</a></li>
                <li><a href="../pages/properties.php?type=sell">Sell</a></li>
                <li><a href="../pages/about.php">About</a></li>
                <li><a href="../pages/contact.php">Contact</a></li>

            </ul>

        </div>

        <div class="footer-element footer-newsletter">

            <h3 class="header">Newletter</h3>

            <p>Subscribe to our newsletter</p>

            <form action="./functions/newslettersignup.php" method="post" class="newsletter-form flex-content">
                
                <input type="text" name="newsletter-text" id="newsletter-text" placeholder="Input email to sign up">
                <button type="submit">Submit</button>

            </form>

        </div>

    </div>

    <div class="footer-content copyright-text">

        <p class="copyright">&COPY; <?php echo date("Y") ?> All right reserved <a href="https://www.github.com/dasimems">Dasimems</a> && <a href="https://www.github.com/juliusshining12">Shining George</a> </p>

    </div>

</footer>
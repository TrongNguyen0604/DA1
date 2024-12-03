
<footer>
        <div class="footer_suports">
            <div class="footer_suport">
                <div class="footer_left">
                    <div class="footer_title">
                        <h4>Enjoy 15% off your first order</h4>
                    </div>
                    <div class="footer_content">
                        <p>Claim your exclusive discount code when you subscribe to our emails.
                            <br>
                            Terms and conditions apply
                        </p>
                    </div>
                    <div class="footer_input">
                        <input type="text" placeholder="your@address.com">
                        <button>Submit</button>
                    </div>
                    <hr style="width: 10%; margin-left: 0; margin-top: 30px;">
                    <div class="footer_icon">
                        <i class="fa-brands fa-youtube"></i>
                        <i class="fa-brands fa-facebook"></i>
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-threads"></i>
                    </div>
                </div>

                <div class="footer_right">
                    <div class="footer_title">
                        <h4>Need help?</h4>
                    </div>
                    <div class="footer_content">
                        <p>For any enquiries please visit NET-A-PORTER Customer Care.</p>
                        <p1>LOCATION & LANGUAGE</p1>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer_customers">
            <div class="footer_customers_left">
                <div class="footer_customers_title">
                    <h4>Customer Care</h4>
                </div>
                <div class="footer_customers_content">
                    <p>Track an Order</p>
                    <p>Create a Return</p>
                    <p>Contract Us</p>
                    <p>Deliver</p>
                    <p>Payment</p>
                    <p>Pay Police</p>
                    <p>Privacy Police</p>
                    <p>Cookie</p>
                    <p>Conditions apply</p>
                </div>
            </div>
            <div class="footer_customers_center">
                <div class="footer_customers_title">
                    <h4>About Us</h4>
                </div>
                <div class="footer_customers_content">
                    <p>Conditions apply</p>
                    <p>People</p>
                    <p>NET-A-PORTER Reswart</p>
                    <p>Cratg</p>
                    <p>Occasion</p>
                    <p>Finest luxury</p>
                    <p>Designer</p>
                    <p>Dressed for any</p>
                    <p>IOS or Android</p>
                </div>
            </div>
            <div class="footer_customers_right">
                <div class="footer_customers_title">
                    <h4>GET THE NET-A-PORTER APP</h4>
                </div>
                <img src="images/QR.png" alt="">
                <div class="footer_customers_content">
                    <p>Scan the QR code with your iOS or Android smartphone to download the app</p>
                    <p>visit PORTER.COM</p>
                </div>
                <div class="footer_customers_logo">
                    <p>NET - A - PORTER  ACCEPTS</p>
                  <img src="images/logoNN.png" alt="">
                  <img src="images/logoNN1.png" alt="">
                  <img src="images/logoNN2.png" alt="">
                  <img src="images/logoNN3.png" alt="">
                  <img src="images/logoNN4.png" alt="">
                  <img src="images/logoNN5.png" alt="">
                </div>
            </div>

        </div>
    </footer>
    <script>
        btnSearch = document.getElementById('btnSearch');
        keyword   = document.getElementById('keyword');

        btnSearch.addEventListener('click',function() {
            location.href = "<?= ROOT_URL . '?ctl=search&keyword='?>" + keyword.value;
        });
    </script>
</body>
</html>
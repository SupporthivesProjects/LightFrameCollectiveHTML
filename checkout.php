<?php include 'includes/header.php'; ?>
<section class="checkout-page">
    <div class="checkout-box">
        <p class="ch-head">Checkout</p>
        <form class="check-inp-sec">
           <input type="text" placeholder="First name" class="check-inp">
           <input type="text" placeholder="Last name" class="check-inp">
           <input type="email" placeholder="Email Address" class="check-inp">
           <input type="text" placeholder="Address line 1" class="check-inp">
           <input type="text" placeholder="Address line 2" class="check-inp">
           <div class="tx-box w-100">
            <input type="text" placeholder="Zip / Postal Code" class="check-inp w-100">
            <input type="text" placeholder="City / town" class="check-inp w-100">
           </div>
           <input type="text" placeholder="Country" class="check-inp">
        </form>
    </div>
    <div class="order-summary">
        <p class="ch-head">Order Summary</p>
        <img src="img/os-line.png" alt="" class="os-line">
        <div class="od-det">
            <div class="od-g-line w-100">
                <div class="disc">
                 <p class="pre-p">Premium Pack (500 Credits)</p>
                 <span class="pre-p" style="color: var(--Base-Success-Green, #47B147);">-40%</span>
                </div>
                <div class="dis-amt">
                 <p class="pre-p" style="color: var(--Text, #667085);">$500 <span class="pre-p"> $300</span></p>
                 <img src="img/close.png" alt="" class="cl-icon">
                </div>
            </div>
            <div class="od-g-line w-100">
                <div class="disc">
                 <p class="pre-p">Custom Order (40 Credits)</p>
                </div>
                <div class="dis-amt">
                <span class="pre-p">$40</span>
                 <img src="img/close.png" alt="" class="cl-icon">
                </div>
            </div>
        </div>
        <img src="img/os-line.png" alt="" class="os-line">
        <div class="od-g-line w-100">
           <div class="disc">
            <p class="pre-p">Sub total</p>
           </div>
            <div class="dis-amt">
           <span class="pre-p">$340</span>
           </div>
        </div>
        <div class="od-g-line w-100">
           <div class="disc">
            <p class="pre-p" style="color: var(--Base-Success-Green, #47B147);">Gold tier Account saving @ 12%</p>
           </div>
            <div class="dis-amt">
           <span class="pre-p" style="color: var(--Base-Success-Green, #47B147);">-$40</span>
           </div>
        </div>
        <div class="od-g-line w-100">
           <div class="disc">
            <p class="pre-pp">Total</p>
           </div>
            <div class="dis-amt">
           <span class="pre-p">$300</span>
           </div>
        </div>
        <img src="img/os-line.png" alt="" class="os-line">
        <div class="promo-box w-100">
            <div class="tps-box">
                <input type="checkbox" name="" id="" class="a-tps">
                <label for="">I have read and agree to the <a href="tc.php" style="color: var(--Base-Color, #927AC1);text-decoration:none">Terms of Use.</a> </label>
            </div>
            <input type="text" placeholder="Type your promo code here" class="check-inp w-100">
            <button class="purp-btn btn" data-bs-toggle="modal" data-bs-target="#payment-success">Continue to payment</button>
            <img src="img/Mastercard.png" alt="">
        </div>
    </div>
</section>




<!--checkout success Modal -->
<div class="modal fade" id="payment-success" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body check-mod">
                <div class="head-modal">
                    <button class="btn m-close" data-bs-dismiss="modal">
                        <img src="img/close.png" alt="">
                    </button>
                    <div class="modal-texts">
                        <img src="img/logo.svg" alt="">
                        <p class="ch-head">Payment success!</p>
                    </div>   
                </div>
                <button class="purp-btn btn" data-bs-toggle="modal" data-bs-target="#payment-fail">Back Home</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<!--checkout fail Modal -->
<div class="modal fade" id="payment-fail" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-body check-mod">
                <div class="head-modal">
                    <button class="btn m-close" data-bs-dismiss="modal">
                        <img src="img/close.png" alt="">
                    </button>
                    <div class="modal-texts">
                        <img src="img/logo.svg" alt="">
                        <p class="ch-head">Payment error</p>
                    </div>   
                </div>
                <button class="purp-btn btn">Back Home</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->

<?php include 'includes/footer.php'; ?>
<?php
/* Template Name: Feedback Form */
get_header();
?>


        <div class="feedBacktop">
            <?php
            if (isset($_GET['status']) && $_GET['status'] === 'success') {
                echo '<div class="success-message">Thank you for your feedback. We always value your feedback.</div>';
            }
            ?>
<!--            <form action="--><?php //echo esc_url( get_template_directory_uri() . '/send-email.php' ); ?><!--" method="post" id="theForm">-->
            <form action="https://formsubmit.co/01f3e4b2a9a1959fa602647b3409d2f9" method="POST" id="theForm">
                <input type="hidden" name="_next" value="http://localhost/wordpress/thank-you">
                <legend><h1 class="feedback-h1">Give Us Some Feedback!</h1></legend>
                   <div id="form-container">
                    <div class="two">
                        <label for="title">Title</label>
                        <input type="text" name="title" id="title" placeholder="Enter your title" required>
                    </div>                    
                    <div class="two">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="three">
                        <label for="enquiry">Enquiry</label>
                        <textarea  name="enquiry" id="enquiry" placeholder="Enter your feedback here" rows="5" cols="50" required></textarea>
                    </div> 
                    <div class="four">
                        <label for="terms">
                        <input type="checkbox" name="terms" id="terms" required>I agreed with terms and conditions.</label>
                    </div>
                       <div class="four">
                        <input type="submit" value="Submit" id="submit" class="submit">
                    </div>
                    <div class="four">
                        <input type="reset" value="Cancel" id="cancel">
                    </div>
                   </div>
            </form>



        </div>
    </div>  <!-- wrapper -->
</body>
</html>

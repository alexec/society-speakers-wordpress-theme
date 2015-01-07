<?php
	/*-----------------------------------------------------------------------------------*/
	/* This template will be called by all other template files to finish 
	/* rendering the page and display the footer area/content
	/*-----------------------------------------------------------------------------------*/
?>

   <footer class="text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    The information on this website is for the sole use of Toastmasters' members, for Toastmasters business only. It is not to be used for solicitation and distribution of non-Toastmasters material or information. All rights reserved. Toastmasters International, the Toastmasters International logo and all other Toastmasters International trademarks and copyrights are the sole property of Toastmasters International and may be used only by permission.
                </div>
            </div>
        </div>
    </footer>


<?php wp_footer(); 
// This fxn allows plugins to insert themselves/scripts/css/files (right here) into the footer of your website. 
// Removing this fxn call will disable all kinds of plugins. 
// Move it if you like, but keep it around.
?>

</body>
</html>

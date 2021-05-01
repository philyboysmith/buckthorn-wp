<footer class="w-full p-4 bg-white text-sm lg:text-sm text-grey2 uppercase xl:sticky bottom-0">
            <div class="m-auto max-w-screen-2xl p-4 py-2 lg:flex justify-between items-center">
                <div class=" sm:mb-4 lg:mb-0">
                    <p>
                        <a href="/privacy-policy">
                            Privacy Policy
                        </a>
                    </p>
                </div>
                <div class=" lg:text-right flex xl:justify-end items-end">
                    <div class="mr-2">
                        <p class="mb-0">
                            COPYRIGHT BUCKTHORN PARTNERS LLP ©2021, ALL RIGHTS RESERVED.
                            <br>
                                AUTHORISED & REGULATED BY THE FINANCIAL CONDUCT AUTHORITY.
                            </br>
                        </p>
                    </div>
                    <a href="https://www.linkedin.com/company/buckthorn-partners/" target="_blank">
                        <img alt="LinkedIn" class="mb-1" src="/assets/images/icon-linkedin.svg"/>
                    </a>
                </div>
            </div>
        </footer>
        <?php if($_COOKIE['buckthorn'] == null) { ?>

<div id="newCookieNotice" class="fixed bottom-0 left-0 right-0 shadow-md bg-indigo-dark  z-20 py-6 bg-white text-" style="min-height: 60px" >
	<div class="container mx-auto p-3 md:flex">
            <div class="inner md:w-4/5 pr-4">
			    <div>Our website uses necessary cookies in order for it to run. We would also like to use optional analytics cookies to improve the site, by collecting and reporting information on how you use it. These cookies do not directly identify the user. We won’t set optional cookies unless they are accepted. For more information on how our site cookies work, please see our <a class="underline" href="/cookie-policy-and-control">Cookie Policy</a>.</div>
                <div class="my-4 md:mb-0 form md:flex items-start" id="cookie-checkboxes ">
                    <div class="block mb-4 flex items-center outline-none round md:mr-16">
                    <input id="essential" type="checkbox" name="essential" checked disabled> <label for="checkbox" class="wpcf7-list-item-label opacity-50"></label> Essential Cookies
                    </div>
                    <div class="flex items-center focus:outline-none round">
                        <input id="analytics" type="checkbox" name="analytics"> <label for="analytics" class="wpcf7-list-item-label"></label> Analytics Cookies
                    </div>
                </div>
            </div>
            <div class=" md:w-1/5">
                <button class=" bg-brand hover:bg-blue hover:text-white  text-basecolor7 p-2 mb-3 rounded-full text-xs  uppercase border-2 border-basecolor7 w-full text-center hover:border-blue" onClick="window.acceptAll()">Accept All</button>
                <button class=" bg-brand hover:bg-blue hover:text-white  text-basecolor7 p-2  mb-3 rounded-full text-xs  uppercase border-2 border-basecolor7 w-full text-center hover:border-blue" onClick="window.acceptSelected()">Accept Selected</button>
                <button class="bg-brand hover:bg-blue hover:text-white  text-basecolor7 p-2  mb-3 rounded-full text-xs  uppercase border-2 border-basecolor7 w-full text-center hover:border-blue"  onClick="window.location.href='https://google.com'">Reject</button>
            </div>
		</div>
	</div>


<?php } ?>

<script>

function acceptAll() {
    var theDate = new Date();
    var oneYearLater = new Date( theDate.getTime() + 31536000000 );
    window.document.cookie = "buckthorn=1; expires=" + oneYearLater + "; path=/";
    jQuery("#newCookieNotice").fadeOut();
}

function acceptSelected() {
    var checked = document.getElementById('analytics').checked ? 1 : 0;
    var theDate = new Date();
    var oneYearLater = new Date( theDate.getTime() + 31536000000 );
    window.document.cookie = "buckthorn=" + checked + "; expires=" + oneYearLater + "; path=/";
    jQuery("#newCookieNotice").fadeOut();
}

function rejectAll() {
    var theDate = new Date();
    var oneYearLater = new Date( theDate.getTime() + 31536000000 );
    window.document.cookie = "buckthorn=0; expires=" + oneYearLater + "; path=/";
   window.document.cookie = "_gid=; Path=/; Domain=.mvcredit.com; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";
    window.document.cookie = "_ga=; Path=/; Domain=.mvcredit.com; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";
    window.document.cookie = "_gat_gtag_UA_131216966_1=; Path=/; Domain=.mvcredit.com; Expires=Thu, 01 Jan 1970 00:00:01 GMT;";

    jQuery("#newCookieNotice").fadeOut();
}

<?php if($_COOKIE['buckthorn'] != '1') { ?>

jQuery('#toggleCookies').on('click', function(){
	window.acceptAll();
location.reload();

});

<?php  }  else { ?>

jQuery('#toggleCookies').on('click', function(){
	window.rejectAll();
location.reload();

});

<?php } ?>
</script>

<style>

#cookie-checkboxes input[type="checkbox"]{
	appearance: none;
	width: 24px;
height: 24px;
background-image: url(/assets/circle-outline.svg);
background-size: cover;
outline: 0!important;
}

#cookie-checkboxes input[type="checkbox"]:checked{
	appearance: none;
	width: 24px;
height: 24px;
background-image: url(/assets/checkbox-marked-circle-outline.svg);
background-size: cover;
}

</style>

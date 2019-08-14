/**
* Vhaldecode
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
*/
var cookieLaw = {

    /**
     * Gets a cookie value by cookie name.
     *
     * @param cname
     * @returns {string}
     */
    getCookie: function(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i = 0; i < ca.length; i++)
        {
            var c = ca[i].trim();
            if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
        }
        return "";
    },

    /**
     * Sets a cookie meaning that the cookie law has been accepted.
     *
     * @param remember
     */
    cookieLawAccept: function(remember) {
        remember = typeof remember !== 'undefined' ? remember : false;
        if (remember) {
            var d = new Date();
            d.setTime(d.getTime()+(365*24*60*60*1000)); // Remember 365 days
            document.cookie = "cookielaw=1;expires=" + d.toGMTString();
        } else {
            document.cookie = "cookielaw=1";
        }
        if (typeof jQuery == 'undefined') {
            document.getElementById('v-cookielaw').style.display = 'none';
        } else {
            jQuery('#v-cookielaw').slideUp();
        }
    }
}

/**
 * This will make appear the notice if the cookie law has not been accepted.
 */
window.onload = function(){
    if (!cookieLaw.getCookie('cookielaw')) {
        document.getElementById('v-cookielaw').style.display = 'block';
    }
}

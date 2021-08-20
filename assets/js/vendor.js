"use strict";

// detect IE and display an error message prompting users to upgrade to a modern browser
if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
  document.write('<div id="outdated"><h6>Your browser is out-of-date!</h6><p>Update your browser to view this website correctly.<a id="btnUpdateBrowser" href="http://outdatedbrowser.com/" target="_blank">Update my browser now</a></p><p class="last"><a data-toggle="hidden" data-target="#outdated" href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p></div>');
}
"use strict";

/**
 * File skip-link-focus-fix.js.
 *
 * Helps with accessibility for keyboard only users.
 *
 * Learn more: https://git.io/vWdr2
 */
(function () {
  var isIe = /(trident|msie)/i.test(navigator.userAgent);

  if (isIe && document.getElementById && window.addEventListener) {
    window.addEventListener('hashchange', function () {
      var id = location.hash.substring(1),
          element;

      if (!/^[A-z0-9_-]+$/.test(id)) {
        return;
      }

      element = document.getElementById(id);

      if (element) {
        if (!/^(?:a|select|input|button|textarea)$/i.test(element.tagName)) {
          element.tabIndex = -1;
        }

        element.focus();
      }
    }, false);
  }
})();
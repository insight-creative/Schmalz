// detect IE and display an error message prompting users to upgrade to a modern browser
if (navigator.appName == 'Microsoft Internet Explorer' || !!(navigator.userAgent.match(/Trident/) || navigator.userAgent.match(/rv:11/))) {
  document.write('<div id="outdated"><h6>Your browser is out-of-date!</h6><p>Update your browser to view this website correctly.<a id="btnUpdateBrowser" href="http://outdatedbrowser.com/" target="_blank">Update my browser now</a></p><p class="last"><a data-toggle="hidden" data-target="#outdated" href="#" id="btnCloseUpdateBrowser" title="Close">&times;</a></p></div>');
}

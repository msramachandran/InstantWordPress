function canFetchUrl(url) {
    debugger;
    if (url.indexOf('/wp-admin/') != -1 ||
        url.indexOf('/wp-login') != -1) {
        return false;
    }
}

jQuery(function() {
    InstantClick.on('canFetch', canFetchUrl);
    InstantClick.init();
});

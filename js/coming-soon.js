$(() => {
    console.log((window.location.hash));
    if (window.location.hash.indexOf('accommodation') !== -1) {
        $('.register-button h3').text('Accommodation Page');
    }
    if (window.location.hash.indexOf('web-team') !== -1) {
        $('.register-button h3').text('Web Team Page');
    }
    if (window.location.hash.indexOf('instructions') !== -1) {
        $('.register-button h3').text('Instructions Page');
    }
    if (window.location.hash.indexOf('download') !== -1) {
        $('.register-button h3').text('Downloads Page');
    }
});
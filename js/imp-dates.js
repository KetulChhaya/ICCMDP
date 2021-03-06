var slider = tns({
    container: '.date-list',
    "items": 5,
    "controls": true,
    "rewind": true,
    // "fixedWidth": true,
    "controlsText": ['<i class="fas fa-angle-left"></i>','<i class="fas fa-angle-right"></i>'],
    "autoplay": false,
    "slideBy": 0.6,
    "startIndex": 0,
    "mouseDrag": true,
    "loop": false,
    "responsive": {
        "360": { "items": 1 },
        "480": { "items": 1.5 },
        "820": { "items": 2 },
        "1000": { "items": 3 },
        "1200": { "items": 5 },
    },
    "nav": false,
    "navPosition": 'bottom',
    "swipeAngle": false,
    "speed": 400,
});
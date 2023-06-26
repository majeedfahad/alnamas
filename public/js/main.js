$(function () {
    const paragraphText = $('#username').text().replace(/\s/g, '');
    const firstLetter = paragraphText.charAt(0);
    $('.rounded-username').html(firstLetter);
    $('.rounded-username').css('background-color', getRandomDarkColor())

    function getRandomDarkColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        do {
            color = '#';
            for (let i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
        } while (colorBrightness(color) > 150);
        return color;
    }

    function colorBrightness(color) {
        const rgb = parseInt(color.substring(1), 16);
        const r = (rgb >> 16) & 0xff;
        const g = (rgb >> 8) & 0xff;
        const b = (rgb >> 0) & 0xff;
        return (r * 299 + g * 587 + b * 114) / 1000;
    }

})

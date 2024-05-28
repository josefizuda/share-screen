// JavaScript para compartilhamento no Instagram
document.addEventListener('DOMContentLoaded', function() {
    var shareButton = document.getElementById('share-screen-jwcode-button');
    var saveAsPng = document.getElementById('save-as-png');

    shareButton.addEventListener('click', function() {
        html2canvas(saveAsPng).then(function(canvas) {
            var imageUrl = canvas.toDataURL("image/png");
            var instagramUrl = 'https://www.instagram.com/stories/upload/';
            window.open(instagramUrl, '_blank');
        });
    });
});

function previewAvatar(event) {
    const file = event.target.files[0];
    const avatarPreview = document.getElementById('avatarPreview');
    const reader = new FileReader();

    reader.onload = function () {
        avatarPreview.src = reader.result;
        avatarPreview.style.display = 'block';
    };

    if (file) {
        reader.readAsDataURL(file);
    } else {
        avatarPreview.src = '#';
        avatarPreview.style.display = 'none';
    }
}
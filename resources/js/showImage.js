let temporaryImage = document.querySelector('#profile_photo_path');
let destinationImage = document.querySelector('#destinationImage');

temporaryImage.addEventListener('change', () => {

    if (temporaryImage.isDefaultNamespace.length == 0 || !temporaryImage.isDefaultNamespace) {
        destinationImage.src = "";
        return;
    } 
    
    destinationImage.src = URL.createObjectURL(temporaryImage.files[0]);

});


const UploadCover = document.querySelector('#formUploadFile'),
      coverText = UploadCover.querySelector('h4'),
      input = UploadCover.querySelector('input');
const UploadPhoto = document.querySelector('#formUploadPhoto'),
      photoText = UploadPhoto.querySelector('span'),
      inputPhoto = UploadPhoto.querySelector('input'),
      deleteBtn = document.querySelector('#deleteBtn');
let file; 
let filePhoto;
let error = document.querySelector('#error');
let avatar = document.querySelector('#avatar');

input.addEventListener('change', function () {
    file = this.files[0];
    UploadCover.classList.add('active');
    showFile();
});
inputPhoto.addEventListener('change', function () {
    filePhoto = this.files[0];
    UploadPhoto.classList.add('active');
    showPhoto();
});

UploadCover.addEventListener('dragover', (event) => {
    event.preventDefault(); 
    UploadCover.classList.add('active');
    coverText.textContent = 'Release to Upload File';
});
UploadPhoto.addEventListener('dragover', (event) => {
    event.preventDefault(); 
    photoText.innerHTML = 'Release to Upload File';
});


UploadCover.addEventListener('dragleave', () => {
    UploadCover.classList.remove('active');
    coverText.textContent = 'Drag & Drop to Upload File';
});
UploadPhoto.addEventListener('dragleave', () => {
    photoText.innerHTML = 'Upload new photo';
});

//If user drop File on UploadCover
UploadCover.addEventListener('drop', (event) => {
    event.preventDefault(); 
    file = event.dataTransfer.files[0];
    showFile(); 
});
UploadPhoto.addEventListener('drop', (event) => {
    event.preventDefault(); 
    filePhoto = event.dataTransfer.files[0];
    showPhoto(); 
});

function showFile() {
    let fileType = file.type; 
    let fileSize = file.size;
    let validExtensions = ['image/jpeg', 'image/jpg', 'image/png'];
    if (validExtensions.includes(fileType)) {
        let fileReader = new FileReader(); 
        let cover = document.querySelector('#cover');

        if (fileSize > 2000000) {
            swal("Please upload file less than 2MB. Thanks!!");
        } 
        else {
            fileReader.onload = (result) => {
                cover.src = result.target.result;
            };
            fileReader.readAsDataURL(file);
        }
    } else {
        UploadCover.classList.remove('active');
        coverText.textContent = 'Drag & Drop to Upload File';
        swal("This is not an Image File! \n select jpeg , jpg or png ⁦ಠ_ಠ");
    }
}
function showPhoto() {
    let fileType = filePhoto.type; 
    let fileSize = filePhoto.size;
    let validExtensions = ['image/jpeg', 'image/jpg', 'image/png'];
    if (validExtensions.includes(fileType)) {
        let fileReader = new FileReader(); 

        if (fileSize > 2000000) {
            swal("Please upload file less than 2MB. Thanks!!");
        } else {
            fileReader.onload = (result) => {
                avatar.src = result.target.result;
            };
            fileReader.readAsDataURL(filePhoto);
        }
    } else {
        photoText.innerHTML = 'Upload new photo';
        swal("This is not an Image File! \n select jpeg , jpg or png ⁦ಠ_ಠ");

    }
}

deleteBtn.addEventListener('click',function(){
    swal({
        title: "Are you sure \n you want to delete photo ?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                swal("Poof! Your file has been deleted!", {
                    icon: "success",
                    
                });
                avatar.src="image/09_Cover Image/imgslider.png"
            } 
            else {
                swal("Your file is safe!");
            }
        });
});
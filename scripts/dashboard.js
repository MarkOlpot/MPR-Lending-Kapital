const addbtn = document.getElementById('add-btn');
let editbtn = document.getElementById('edit-btn');
let deletebtn = document.getElementById('delete-btn');
let inputText = document.querySelectorAll('.input-text');
let confirmBtn = document.querySelector('.confirmBtn');
let collateralInput = document.getElementById('collateral');
let collateralPreview = document.getElementById('collateral-preview');
let radioBtn = document.querySelectorAll('.input-radio');
let idPhotoInput = document.getElementById('idPhoto');
let idPhotoPreview = document.getElementById('idPhotoPreview');
let insurancePhotoInput = document.getElementById('insurancePhoto');
let insurancePhotoPreview = document.getElementById('insurancePhotoPreview');

addbtn.addEventListener('click',function(){
    console.log('clicked add button');
    addbtn.innerText= addbtn.innerText === "Add" ? "Cancel" : "Add";
    inputText.forEach(input => input.disabled = input.disabled ? false : true)
    radioBtn.forEach(input => input.disabled = input.disabled ? false : true)
    confirmBtn.style.display = confirmBtn.style.display === "block" ? "none" : "block";
    console.log(addbtn.innerText);
    deletebtn.disabled = true;
    editbtn.disabled = true;
});

editbtn.addEventListener('click',function(){
    console.log('clicked');
    deletebtn.disabled = false;
});

idPhotoInput.addEventListener('change',function(){
    idPhotoPreview.innerHTML= '';
    const file = idPhotoInput.files[0];
    const reader = new FileReader();
    reader.onload = function(e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.style.maxWidth = '200px';
        img.style.margin = '10px';
        idPhotoPreview.appendChild(img);
    };
    reader.readAsDataURL(file);
});

insurancePhotoInput.addEventListener('change',function(){
    insurancePhotoPreview.innerHTML= '';
    const file = insurancePhotoInput.files[0];
    const reader = new FileReader();
    reader.onload = function(e) {
        const img = document.createElement('img');
        img.src = e.target.result;
        img.style.maxWidth = '200px';
        img.style.margin = '10px';
        insurancePhotoPreview.appendChild(img);
    };
    reader.readAsDataURL(file);
});

collateralInput.addEventListener('change', function() {
    collateralPreview.innerHTML = ''; // Clear previous previews
    const files = collateralInput.files;
    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        const reader = new FileReader();
        reader.onload = function(e) {
            const img = document.createElement('img');
            img.src = e.target.result;
            img.style.maxWidth = '200px';
            img.style.margin = '10px';
            collateralPreview.appendChild(img);
        };
        reader.readAsDataURL(file);
    }
});
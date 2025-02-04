document.addEventListener('DOMContentLoaded', function() {

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
let imgInput = document.querySelectorAll('.img-input');

const zooming = new Zooming();

addbtn.addEventListener('click',function(){
    console.log('clicked add button');
    addbtn.innerText= addbtn.innerText === "Add" ? "Cancel" : "Add";
    inputText.forEach(input => input.disabled = input.disabled ? false : true)
    radioBtn.forEach(input => input.disabled = input.disabled ? false : true)
    imgInput.forEach(input => input.disabled = input.disabled? false : true)
    inputText.forEach(input => input.value = "")
    radioBtn.forEach(input => input.checked = false)
    imgInput.forEach(input => input.value = "")
    collateralPreview.innerHTML = '';
    idPhotoPreview.innerHTML = '';
    insurancePhotoPreview.innerHTML = '';
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
        img.classList.add('zoomable');
        idPhotoPreview.appendChild(img);
        zooming.listen(img);
    };
    reader.readAsDataURL(file);
});
idPhotoPreview.addEventListener('click',function(){
   
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
        img.classList.add('zoomable');
        insurancePhotoPreview.appendChild(img);
        zooming.listen(img);
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
            img.classList.add('zoomable');
            collateralPreview.appendChild(img);
            zooming.listen(img);
        };
        reader.readAsDataURL(file);
    }
}, false);



// Javascript for the table
const tableAllBtn = document.getElementById('tblAllBtn');
let tableAddBtn = document.getElementById('addBtn');
const tablePaymentBtn = document.getElementById('tblPaymentBtn');
const tableLoanBtn = document.getElementById('tblLoanBtn');
const tableGroceryBtn = document.getElementById('tblGroceryBtn');


tableAllBtn.addEventListener('click', function() {
    tableAddBtn.style.display = 'none';
    tableAllBtn.classList.add('active');
    tableLoanBtn.classList.remove('active');
    tableGroceryBtn.classList.remove('active');
    tablePaymentBtn.classList.remove('active');

});
tablePaymentBtn.addEventListener('click', function() {
    tableAddBtn.style.display = 'block';
    tableAddBtn.innerHTML = 'Add New Payment';
    tablePaymentBtn.classList.add('active');
    tableLoanBtn.classList.remove('active');
    tableGroceryBtn.classList.remove('active');
    tableAllBtn.classList.remove('active');
});
tableLoanBtn.addEventListener('click', function() { 
    tableAddBtn.style.display = 'block';
    tableAddBtn.innerHTML = 'Add New Loan';
    tableLoanBtn.classList.add('active');
    tableGroceryBtn.classList.remove('active');
    tablePaymentBtn.classList.remove('active');
    tableAllBtn.classList.remove('active');

});
tableGroceryBtn.addEventListener('click', function() {
    tableAddBtn.style.display = 'block';
    tableAddBtn.innerHTML = 'Add New Grocery';
    tableGroceryBtn.classList.add('active');
    tableLoanBtn.classList.remove('active');
    tablePaymentBtn.classList.remove('active');
    tableAllBtn.classList.remove('active');
});

});



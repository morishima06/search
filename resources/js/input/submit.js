var selectForm =document.querySelector('.selectForm');
var selectors = document.querySelectorAll('.selector');

selectors.forEach((selector)=>{
    selector.addEventListener('change',function(){
        selectForm.submit()
    })
})



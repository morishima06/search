slide_nav1 = document.querySelector('.slide_nav1');

slide_contents1 = document.querySelector('.slide_contents1');

slide_nav1.onclick= ()=>{
    slide_contents1.classList.add('-translate-x-full')

}

return_nav = document.querySelector('.return_nav');
return_nav.onclick=()=>{
    slide_contents1.classList.remove('-translate-x-full')
}

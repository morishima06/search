hamburger = document.querySelector('.hamburger');
hamburger_contents = document.querySelector('.hamburger_contents');

hamburger.onclick=()=>{
    hamburger_contents.classList.add('-translate-x-full')
}

drop_button = document.querySelector('.drop_button');
drop_button.onclick=()=>{
    hamburger_contents.classList.remove('-translate-x-full')
}

const searchContent = document.querySelector(".search-content");
const searchContent_child =  document.getElementById("search-content-child")
const searchHeader= document.querySelector(".search-header");

searchHeader.addEventListener('click',()=>{
    let searchMaxHeight = searchContent.style.maxHeight;

    if (searchMaxHeight == "0px" || searchMaxHeight.length == 0) {
    searchContent.style.maxHeight = `${searchContent.scrollHeight+32}px`;
    searchContent_child.focus();

    } else {
    searchContent.style.maxHeight = `0px`;
    }
})

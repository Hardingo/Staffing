const navbarSubLists = document.getElementsByClassName("navbar-sublist");

console.log(navbarSubLists);
    
Array.from(navbarSubLists).forEach(element=> {
    element.parentElement.addEventListener("click", function(){
        let link = element.parentElement.firstElementChild;
        let linkChildren = Array.from(link.children);
        //console.log(linkChildren);
       // console.log(element.style.height);
        if(element.style.height === "" || element.style.height == 0 || element.style.height == "0px"){
            linkChildren[1].classList.add("down");
            link.classList.add("bg-test");
            element.style.height = "100px";
        }else{
            linkChildren[1].classList.remove("down");
            element.parentElement.firstElementChild.classList.remove("bg-test");
            element.style.height = "0";
        }
       
    });
});




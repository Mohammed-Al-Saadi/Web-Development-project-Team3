const scrollBtn = document.querySelector(".scroll-up");
console.log(scrollBtn);
scrollBtn.addEventListener('click',()=>{
    document.documentElement.scrollTop =0;
    document.body.scrollTop =0;
    
});

"use strict";

window.addEventListener("load", ()=>{
    var openMobileBtn = Ele("header .mobile-btn button"),
        closeMobileBtn = Ele(".mobile-link-container .close-mobile-link"),
        mainBodyContainer = Ele("main .body-contents");

    openMobileBtn.addEventListener("click", openMobileMenu);
    closeMobileBtn.addEventListener("click", closeMobileMenu);

    // mainBodyContainer.focus();

    window.addEventListener("resize", ()=>{
        closeMobileMenu();
    })
})

function openMobileMenu(){
    var mobileLinkContainer = Ele(".mobile-link-container"),
        mobileLink = Ele(".mobile-link-container .mobile-links");

    mobileLinkContainer.style.display = "block";

    setTimeout(()=>{
        mobileLinkContainer.style.opacity = "1";
        mobileLink.style.right = "0px";
    }, 100)
}

function closeMobileMenu(){
    var mobileLinkContainer = Ele(".mobile-link-container"),
        mobileLink = Ele(".mobile-link-container .mobile-links");

    mobileLink.style.right = "-350px";
    
    setTimeout(()=>{
        mobileLinkContainer.style.opacity = "0";

        setTimeout(()=>{
            mobileLinkContainer.style.display = "none";
        }, 500)
    }, 500)

}
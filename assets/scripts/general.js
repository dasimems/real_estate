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

function counter(details){
    var num = 0,
    startNum = 0,
    countNum = 10,
    duration = 20;

    if(details && typeof(details) === "object"){

        if(details.addNumber){
            countNum = details.addNumber;
        }

        if(details.duration){
            duration = details.duration;
        }

        if(details.element && details.number){
            
            num = details.number
            ;

            addNum()

            var startCount = setInterval(()=>{
                addNum();
            }, duration)

            function addNum(){

                details.element.innerText = startNum;

                if(startNum >= num){


                    clearInterval(startCount)
                }

                // console.log(startNum);

                if((startNum + countNum) > num){
                    
                    startNum = num;

                }else{

                    startNum = startNum + countNum;
                }

            }

        }
    }
}

// counter({
//     element: this,
//     number: 1500,
//     addNumber: 24
// })
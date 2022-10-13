"use strict"

window.addEventListener("load", ()=>{

    bannerAnimation()

})

function bannerAnimation(){
    var bannerParentContainer = Ele(".banner"),
        bannerHeaders = All(".banner .banner-content .banner-header"),
        bannerSubtitle = Ele(".banner .banner-content .banner-subtitle"),
        bannerForm = Ele(".banner .banner-content .property-search-form"),
        bannerStats = All(".banner .banner-content .banner-stats .stats"),
        bannerStatsCount = All(".banner .banner-stats .stats-count");

    

    bannerParentContainer.style.opacity = "1";

    setTimeout(()=>{

        bannerHeaders.forEach(element => {
            // console.dir(element);
    
            element.style.height = element.scrollHeight + "px";
            
        });

        setTimeout(()=>{

            bannerSubtitle.style.opacity = "1";

            setTimeout(()=>{
                bannerForm.style.width = "100%";

                bannerStats.forEach((element)=>{
                    // element.style.marginTop = "0px";
                    // element.style.opacity = "1";
                    element.style.height = (element.scrollHeight + 5) + "px";

                    bannerStatsCount.forEach(element =>{
                        counter({
                            element: element,
                            number: element.innerText,
                            addNumber: 24
                        })
                    })
                })

            }, 500)

        }, 1000)

    }, 500)

}
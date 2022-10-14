"use strict";
var props = {
    notificationOpened: false
}
window.addEventListener("load", ()=>{
    var notificationBtn = Ele("#open-notification-btn"),
        dropDownBtn = All("nav .dropdown-button");

        notificationBtn.addEventListener("click", notifMenu);

        dropDownBtn.forEach(element =>{
            element.addEventListener("click", ()=>{

                if(element.getAttribute("data-id")){
                    
                    openDropDown(element.getAttribute("data-id"))
                }
            })
        })

})

function notifMenu(e){

    e.preventDefault();

    if(props.notificationOpened){
        closeNotification();
    }else{
        openNotification();
    }

}

function closeNotification(){
    var notificationContainer = Ele(".main-body .main-content .notification-container");

    notificationContainer.style.right = "-320px";

    props.notificationOpened = false;
    
}

function openNotification(){
    var notificationContainer = Ele(".main-body .main-content .notification-container");

    notificationContainer.style.right = "5px";
    
    props.notificationOpened = true;
}

function openDropDown(id){
    // console.log(id);
    var dropDownContainers = All("nav .dropdown-content"),
        dropDownBtn = All("nav .dropdown-button");

    dropDownContainers.forEach(element => {

        if(element.getAttribute("data-id") === id){

            // console.dir(element);

            if(element.clientHeight !== 0){

                element.style.height = "0px";

                dropDownBtn.forEach(ele => {

                    if(ele.classList.contains("bordered-link")){
                        ele.classList.remove("bordered-link");
                    }

                })

            }else{
                element.style.height = element.scrollHeight + "px";

                dropDownBtn.forEach(ele => {

                    if(ele.getAttribute("data-id") === id){

                        if(!ele.classList.contains("bordered-link")){
                            ele.classList.add("bordered-link");
                        }

                    }else{

                        if(ele.classList.contains("bordered-link")){
                            ele.classList.remove("bordered-link");
                        }
                    }
                    

                })
                
            }

        }else{
            element.style.height = "0px";
        }
    })

    

}
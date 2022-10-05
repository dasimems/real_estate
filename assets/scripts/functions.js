"use strict";

function Ele(elementAttribute){

    try{

        return document.querySelector(elementAttribute);
        
    }catch{

        console.error( elementAttribute + " is an invalid element selector")
    }
}

function All(elementAttribute){

    try{

        return document.querySelectorAll(elementAttribute);

    }catch{

        console.error( elementAttribute + " is an invalid element selector")
        
    }
}
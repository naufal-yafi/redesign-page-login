
import Alert from './class/PopupAlert'

// Module initialization
const 
    popupAlert = new Alert()

// DOM
const 
    btn_closeAlert = document.querySelector('.pict.close-alert')

btn_closeAlert.addEventListener('click',()=>{
    popupAlert.hide()
})

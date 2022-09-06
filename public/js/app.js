
import Alert from './class/PopupAlert.js'
import Button from './class/ButtonTrigger.js'

// DOM
const 
    btn_closeAlert = document.querySelector('.pict.close-alert'),
    btnPimpinan = document.querySelector('.pim'),
    btnDosen = document.querySelector('.dos'),
    btnOrtu = document.querySelector('.ort'),
    btnMhs = document.querySelector('.mhs'),
    container_alert = document.querySelector('.alert')

// Module initialization
const 
    popupAlert = new Alert(container_alert),
    triggerButton = new Button(btnPimpinan,btnDosen,btnOrtu,btnMhs)

// Run
btn_closeAlert.addEventListener('click',()=>popupAlert.hide())

btnPimpinan.addEventListener('click',()=>triggerButton.automation(btnPimpinan))
btnDosen.addEventListener('click',()=>triggerButton.automation(btnDosen))
btnOrtu.addEventListener('click',()=>triggerButton.automation(btnOrtu))
btnMhs.addEventListener('click',()=>triggerButton.automation(btnMhs))
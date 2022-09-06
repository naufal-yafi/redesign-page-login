
import NotifAlert from './class/Alert.js'

// Module Inisiliate
const 
    notif = new NotifAlert()

// DOM
const 
    btn_closeAlert = document.querySelector('.pict.close-alert')

btn_closeAlert.addEventListener('click',()=>{
    notif.hide()
})

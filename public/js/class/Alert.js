
export default class NotifAlert {
    containerAlert = document.querySelector('.alert')

    unhide() {
        this['containerAlert'].style.transform = 'translateY(0px)'
    }
    
    hide() {
        this['containerAlert'].style.transform = 'translateY(-180px)'
    }
}
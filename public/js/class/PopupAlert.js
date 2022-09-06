
export default class Alert {
    constructor(containerAlert) {
        this['containerAlert'] = containerAlert
    }

    unhide() {
        this['containerAlert'].style.transform = 'translateY(0px)'
    }
    
    hide() {
        this['containerAlert'].style.transform = 'translateY(-180px)'
    }
}

export default class Button {
    constructor(btnPimpinan,btnDosen,btnOrtu,btnMhs) {
        this['btnPimpinan'] = btnPimpinan
        this['btnDosen'] = btnDosen
        this['btnOrtu'] = btnOrtu
        this['btnMhs'] = btnMhs
    }

    disable(obj) {
        obj.style.color = 'var(--label)'
        obj.style.background = 'var(--bg-label)'
    }
    
    enable(obj) {
        obj.style.color = 'var(--bg)'
        obj.style.background = 'var(--main)'
    }
    
    automation(obj) {
        const data = [
            this['btnPimpinan'],
            this['btnDosen'],
            this['btnOrtu'],
            this['btnMhs']
        ]

        for (let i = 0; i < data.length; i++) {
            if (obj != data[i]) {
                this.disable(data[i])
            } else {
                this.enable(data[i])
            }
        }
    }
}
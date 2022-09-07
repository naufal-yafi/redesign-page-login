
export default class Button {
    constructor(btnPimpinan,btnDosen,btnOrtu,btnMhs) {
        this['btnPimpinan'] = btnPimpinan
        this['btnDosen'] = btnDosen
        this['btnOrtu'] = btnOrtu
        this['btnMhs'] = btnMhs
    }

    disable(obj,lObj) {
        lObj.style.color = 'var(--label)'
        obj.style.color = 'var(--label)'
        obj.style.background = 'var(--bg-label)'
    }
    
    enable(obj,lObj) {
        lObj.style.color = 'var(--bg)' 
        obj.style.color = 'var(--bg)'
        obj.style.background = 'var(--main)'
    }
    
    automation(obj) {
        const container = [
            this['btnPimpinan'],
            this['btnDosen'],
            this['btnOrtu'],
            this['btnMhs']
        ]

        const label = [
            document.querySelector('label.lR.pim'),
            document.querySelector('label.lR.dos'),
            document.querySelector('label.lR.ort'),
            document.querySelector('label.lR.mhs')
        ]

        for (let i = 0; i < container.length; i++) {
            if (obj != container[i]) {
                this.disable(container[i],label[i])
            } else {
                this.enable(container[i],label[i])
            }
        }
    }
}
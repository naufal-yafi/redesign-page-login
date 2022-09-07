
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
        const data = [
            this['btnPimpinan'],
            this['btnDosen'],
            this['btnOrtu'],
            this['btnMhs']
        ]

        const lData = [
            document.querySelector('label.lR.pim'),
            document.querySelector('label.lR.dos'),
            document.querySelector('label.lR.ort'),
            document.querySelector('label.lR.mhs')
        ]

        for (let i = 0; i < data.length; i++) {
            if (obj != data[i]) {
                this.disable(data[i],lData[i])
            } else {
                this.enable(data[i],lData[i])
            }
        }
    }
}
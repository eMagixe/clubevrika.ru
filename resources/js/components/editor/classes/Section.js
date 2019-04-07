import Input from "./Input";

export default class Section {
    constructor(id, name, tag) {
        this.id = id;
        this.name = name;
        this.tag = tag;
        this.options = {
            textInputs: [],
            selectInputs: []
        };
    }

    addOption(name, label, type, values) {
        let input = new Input(name, label, type, values);
        if(input.type === 'text') this.options.textInputs.push(input);
        if(input.type === 'select') this.options.selectInputs.push(input);
        return this;
    }
}
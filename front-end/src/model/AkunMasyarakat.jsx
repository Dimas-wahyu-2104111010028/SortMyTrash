import mongoose from "mongoose";

const Masyarakat = mongoose.model('Masyarakat', {
    nama:{
        type: String,
        required: true,
    },
    password:{
        type: String,
        required: true,
    },
})

export default Masyarakat
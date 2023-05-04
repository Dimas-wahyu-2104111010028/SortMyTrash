import mongoose from "mongoose";

const Petugas = mongoose.model('Petugas', {
    nama:{
        type: String,
        required: true,
    },
    password:{
        type: String,
        required: true,
    },
    idPetugas:{
        type: String,
        required: true,
    },
})

export default Petugas
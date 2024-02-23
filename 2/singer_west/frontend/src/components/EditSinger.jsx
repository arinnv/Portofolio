import React, {useState, useEffect } from 'react';
import axios from "axios";
import {useNavigate, useParams} from "react-router-dom";

const EditSinger = () => {

    const [profil, setProfil] = useState("");
    const [nama, setNama] = useState("");
    const [lahir, setLahir] = useState("");
    const [genre, setGenre] = useState("");
    const [instrument, setInstrument] = useState("");
    const [tahun_aktif, setTahun_aktif] = useState("");
    const [artis_terkait, setArtis_terkait] = useState("");
    
    const navigate = useNavigate();
    const {id} = useParams();

    // jika terdapat perubahan pada id, maka akan memanggil fungsi ini
    useEffect(()=>{
        const getSingerById = async () =>{
            const response = await axios.get(`http://localhost:5000/singer/${id}`);
            setProfil(response.data.profil);
            setNama(response.data.nama);
            setLahir(response.data.lahir);
            setGenre(response.data.genre);
            setInstrument(response.data.instrument);
            setTahun_aktif(response.data.tahun_aktif);
            setArtis_terkait(response.data.artis_terkait);
        };
        getSingerById();
    },[id]);

    const updateSinger = async (e) =>{
        // agar tidak perlu reload
        e.preventDefault();
        await axios.patch(`http://localhost:5000/singer/${id}`, {
            profil: profil,
            nama: nama,
            lahir: lahir,
            genre: genre,
            instrument: instrument,
            tahun_aktif: tahun_aktif,
            artis_terkait: artis_terkait,
            // price: parseInt(price) 
        });
        // mendirect
        navigate("/");
    }

  return (
    <div className='max-w-lg mx-auto my-10 bg-whte p-8 rounded-xl chadow shadow-slate-300'>
        <h1 className='py-2 px-4 text-center font-bold font'>Edit List Singer West</h1>
        <form onSubmit={updateSinger} className='my-10'>
            <div className="flex flex-col">
                <div className="mb-5">
                    <label htmlFor="" className="font-bold text-slate-700">Profil</label>
                    <input type="text" className="w-full py-3 mt-1 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder='masukkan link gambar' value={profil} onChange={(e)=>setProfil(e.target.value)}
                    />
                </div>
                <div className="mb-5">
                    <label htmlFor="" className="font-bold text-slate-700">Nama Penyanyi</label>
                    <input type="text" className="w-full py-3 mt-1 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder='nama penyanyi' value={nama} onChange={(e)=>setNama(e.target.value)}
                    />
                </div>
                <div className="mb-5">
                    <label htmlFor="" className="font-bold text-slate-700">lahir</label>
                    <input type="text" className="w-full py-3 mt-1 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder='lahir'
                    value={lahir} onChange={(e)=>setLahir(e.target.value)}
                    />
                </div>
                <div className="mb-5">
                    <label htmlFor="" className="font-bold text-slate-700">Genre</label>
                    <input type="text" className="w-full py-3 mt-1 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder='genre' value={genre} onChange={(e)=>setGenre(e.target.value)}
                    />
                </div>
                <div className="mb-5">
                    <label htmlFor="" className="font-bold text-slate-700">Instrument</label>
                    <input type="text" className="w-full py-3 mt-1 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder='instrument' value={instrument} onChange={(e)=>setInstrument(e.target.value)}
                    />
                </div>
                <div className="mb-5">
                    <label htmlFor="" className="font-bold text-slate-700">Tahun Aktif</label>
                    <input type="text" className="w-full py-3 mt-1 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder='tahun aktif' value={tahun_aktif} onChange={(e)=>setTahun_aktif(e.target.value)}
                    />
                </div>
                <div className="mb-5">
                    <label htmlFor="" className="font-bold text-slate-700">Artis Terkait</label>
                    <input type="text" className="w-full py-3 mt-1 border border-slate-200 rounded-lg px-3 focus:outline-none focus:border-slate-500 hover:shadow" placeholder='artis terkait' value={artis_terkait} onChange={(e)=>setArtis_terkait(e.target.value)}
                    />
                </div>
                <button type='submit' className='w-full py-3 font-bold text-white bg-indigo-600 hover:bg-indigo-500 rounded-lg border-indigo-500 hover:shadow'>Update</button>
            </div>
            
        </form>
    </div>
  )
}

export default EditSinger
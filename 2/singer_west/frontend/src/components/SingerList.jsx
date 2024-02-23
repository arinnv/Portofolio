import React from 'react';
import { Link } from 'react-router-dom';
import axios from 'axios';
import useSWR, {useSWRConfig} from 'swr';

const SingerList = () => {

    const {mutate} = useSWRConfig();

    const fetcher = async () =>{
        const response = await axios.get('http://localhost:5000/singer');
        return response.data;
    };

    const {data} = useSWR("singer", fetcher);
    if (!data) return <h2>Loading...</h2>;

    // const deleteSinger = async (singerId) =>{
    //     await axios.delete(`http://localhost:5000/singer/${singerId}`);
    //     mutate('singer');
    // }

    const hapusSinger = async (id) => {
        try {
            let res = await fetch(
                `http://localhost:5000/singer/${id}`,
                {method: 'DELETE'}
            );
            let result = res.json();
            mutate('singer');
        } catch (error) {
            console.log(error);
        }
    }

    const gambar = async (profil) => {
        try {
            
        } catch (error) {
            
        }
    }
//<div class="flex flex-wrap justify-center">
//  <div class="w-6/12 sm:w-4/12 px-4">
//    <img src="https://www.creative-tim.com/learning-lab/tailwind-starter-kit/img/team-1-800x800.jpg" alt="..." class="shadow rounded max-w-full h-auto align-middle border-none" />
//  </div>
//</div>

    return (
        <div className='flex flex-col mt-5'>
            <h1 className='py-2 px-4 text-center font-bold font'>List Singer West</h1>
            <div className="w-full">
                <Link to="/add" className='bg-green-500 hover:bg-green-700 border border-sl-200 text-white font-bold py-2 px-4 rounded-lg'>Tambah</Link>
                <div className="relative shadow rounded-lg mt-3">
                    <table className='w-full text-sm text-left text-gray-500'>
                        <thead className='text-xs text-gray-700 uppercase bg-gray-100'>
                            <tr>
                                <th className='py-3 px-1 text-center'>No</th>
                                <th className='py-3 px-6 text-center'>Profil</th>
                                <th className='py-3 px-6 text-center'>Nama</th>
                                <th className='py-3 px-6 text-center'>Lahir</th>
                                <th className='py-3 px-6 text-center'>Genre</th>
                                <th className='py-3 px-6 text-center'>Instrument</th>
                                <th className='py-3 px-6 text-center'>Tahun Aktif</th>
                                <th className='py-3 px-6 text-center'>Artis Terkait</th>
                                <th className='py-3 px-1 text-center'>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {data.map((singer, index) =>(
                                <tr className='bg-white border-b' key={singer.id}>
                                    <td className='py-3 px-1 text-center'>{index+1}</td>
                                    <td className='py-3 px-6 font-medium text-gray-900 w-40 h-52'>

                                        <div class="flex flex-wrap justify-center">
                                            <div class="w-6/8 sm:w-6/8 px-0 ">
                                                <img src={singer.profil} alt="..." class="shadow rounded max-w-full h-auto align-middle border-none" />
                                            </div>
                                        </div>
                                        {/* {singer.profil} */}
                                    </td>
                                    <td className='py-3 px-6 font-medium text-gray-900'>{singer.nama}</td>
                                    <td className='py-3 px-6 font-medium text-gray-900 text-center'>{singer.lahir}</td>
                                    <td className='py-3 px-6 font-medium text-gray-900 text-center'>{singer.genre}</td>
                                    <td className='py-3 px-6 font-medium text-gray-900 text-center'>{singer.instrument}</td>
                                    <td className='py-3 px-6 font-medium text-gray-900 text-center'>{singer.tahun_aktif}</td>
                                    <td className='py-3 px-6 font-medium text-gray-900 text-center'>{singer.artis_terkait}</td>
                                    <td className='py-3 px-1 text-center'>
                                        <Link to={`/edit/${singer.id}`} className="font-medium bg-blue-400 hover:bg-blue-500 px-3 py-1 rounded text-white mr-1">
                                            Edit
                                        </Link>
                                        
                                        <button  className="font-medium bg-red-400 hover:bg-red-500 px-3 py-1 rounded text-white" onClick={() => hapusSinger(singer.id)}>
                                            Delete
                                        </button>
                                    </td>
                                </tr>
                            ))}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    )
}

export default SingerList


// <button  className="font-medium bg-red-400 hover:bg-red-500 px-3 py-1 rounded text-white" onClick={() => hapusSinger(singer.id)}>

// {/* <button to={() => deleteSinger(singer.id)} className="font-medium bg-red-400 hover:bg-red-500 px-3 py-1 rounded text-white" > */}
// to={() => hapusSinger(singer.id)}
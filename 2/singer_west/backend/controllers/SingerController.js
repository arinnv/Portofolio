import { PrismaClient } from "@prisma/client";

const prisma = new PrismaClient();


export const getSinger = async(req, res) => {

    const {
        // id,
        profil,
        nama,
        lahir,
        genre,
        instrument,
        tahun_aktif,
        artis_terkait
    } = req.query;

    // contains yg memeberi masukkan input yang sama
    const singer = await prisma.singer.findMany({
        where: {
            // id: {
            //     contains: id || undefined,
            // },
            nama: {
                contains: nama || undefined,
            },
            profil: profil || undefined,
            lahir: {
                contains: lahir || undefined,
            },
            genre: {
                contains: genre || undefined,
            },
            instrument: {
                contains: instrument || undefined,
            },
            tahun_aktif: {
                contains: tahun_aktif || undefined,
            },
            artis_terkait: {
                contains: artis_terkait || undefined,
            }
        }
        // id: Number(req.params.id)

        // orderBy: {
        //     [orderBy || "id"]: "asc",
        // },
    })

    res.json(singer);
};

// export const getSingerAll = async(req, res) => {
//     try {
//         const response = await prisma.singer.findMany();
//         res.status(200).json(response);
//     } catch (error) {
//         res.status(500).json({ msg: error.message });
//     }
// }

export const getSingerById = async(req, res) => {
    try {
        const response = await prisma.singer.findUnique({
            where: {
                id: Number(req.params.id)
            }
        });
        res.status(200).json(response);
    } catch (error) {
        res.status(404).json({ msg: error.message });
    }
}

export const createSinger = async(req, res) => {

    const { profil, nama, lahir, genre, instrument, tahun_aktif, artis_terkait } = req.body;

    try {
        const singer = await prisma.singer.create({
            data: {
                profil: profil,
                nama: nama,
                lahir: lahir,
                genre: genre,
                instrument: instrument,
                tahun_aktif: tahun_aktif,
                artis_terkait: artis_terkait
            }
        });
        res.status(201).json(singer);
    } catch (error) {
        res.status(400).json({ msg: error.message });
    }
}

export const updateSinger = async(req, res) => {
    const {
        profil,
        nama,
        lahir,
        genre,
        instrument,
        tahun_aktif,
        artis_terkait
    } = req.body;

    try {
        const singer = await prisma.singer.update({
            where: {
                id: Number(req.params.id)
            },
            data: {
                profil: profil,
                nama: nama,
                lahir: lahir,
                genre: genre,
                instrument: instrument,
                tahun_aktif: tahun_aktif,
                artis_terkait: artis_terkait
            }
        });
        res.status(200).json(singer);
    } catch (error) {
        res.status(400).json({ msg: error.message });
    }
}

export const deleteSinger = async(req, res) => {

    try {
        const singer = await prisma.singer.delete({
            where: {
                id: Number(req.params.id)
            }
        });
        res.status(200).json(singer);
    } catch (error) {
        res.status(400).json({ msg: error.message });
    }
}

export const deleteSingerOpt = async(req, res) => {

    const {
        // id,
        profil,
        nama,
        lahir,
        genre,
        instrument,
        tahun_aktif,
        artis_terkait
    } = req.query;

    // contains yg memeberi masukkan input yang sama
    const singer = await prisma.singer.deleteMany({
        where: {
            nama: {
                contains: nama || undefined,
            },
            profil: profil || undefined,
            lahir: {
                contains: lahir || undefined,
            },
            genre: {
                contains: genre || undefined,
            },
            instrument: {
                contains: instrument || undefined,
            },
            tahun_aktif: {
                contains: tahun_aktif || undefined,
            },
            artis_terkait: {
                contains: artis_terkait || undefined,
            }
        }
    })

    res.json(singer);
}
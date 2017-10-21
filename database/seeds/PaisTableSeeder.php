<?php

use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pais')->delete();
        
        \DB::table('pais')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombre' => 'Australia',
                'codigo_ref' => 'AU',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombre' => 'Austria',
                'codigo_ref' => 'AT',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombre' => 'Azerbaiyán',
                'codigo_ref' => 'AZ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombre' => 'Anguilla',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nombre' => 'Argentina',
                'codigo_ref' => 'AR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nombre' => 'Armenia',
                'codigo_ref' => 'AM',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nombre' => 'Bielorrusia',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nombre' => 'Belice',
                'codigo_ref' => 'BZ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'nombre' => 'Bélgica',
                'codigo_ref' => 'BE',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'nombre' => 'Bermudas',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'nombre' => 'Bulgaria',
                'codigo_ref' => 'BG',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'nombre' => 'Brasil',
                'codigo_ref' => 'BR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'nombre' => 'Reino Unido',
                'codigo_ref' => 'GB',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'nombre' => 'Hungría',
                'codigo_ref' => 'HU',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'nombre' => 'Vietnam',
                'codigo_ref' => 'VN',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'nombre' => 'Haiti',
                'codigo_ref' => 'HT',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'nombre' => 'Guadalupe',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'nombre' => 'Alemania',
                'codigo_ref' => 'DE',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'nombre' => 'Países Bajos, Holanda',
                'codigo_ref' => 'NL',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            19 => 
            array (
                'id' => 20,
                'nombre' => 'Grecia',
                'codigo_ref' => 'GR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            20 => 
            array (
                'id' => 21,
                'nombre' => 'Georgia',
                'codigo_ref' => 'GE',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            21 => 
            array (
                'id' => 22,
                'nombre' => 'Dinamarca',
                'codigo_ref' => 'DK',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            22 => 
            array (
                'id' => 23,
                'nombre' => 'Egipto',
                'codigo_ref' => 'EG',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            23 => 
            array (
                'id' => 24,
                'nombre' => 'Israel',
                'codigo_ref' => 'IL',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            24 => 
            array (
                'id' => 25,
                'nombre' => 'India',
                'codigo_ref' => 'IN',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            25 => 
            array (
                'id' => 26,
                'nombre' => 'Irán',
                'codigo_ref' => 'IR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            26 => 
            array (
                'id' => 27,
                'nombre' => 'Irlanda',
                'codigo_ref' => 'IE',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            27 => 
            array (
                'id' => 28,
                'nombre' => 'España',
                'codigo_ref' => 'ES',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            28 => 
            array (
                'id' => 29,
                'nombre' => 'Italia',
                'codigo_ref' => 'IT',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            29 => 
            array (
                'id' => 30,
                'nombre' => 'Kazajstán',
                'codigo_ref' => 'KZ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            30 => 
            array (
                'id' => 31,
                'nombre' => 'Camerún',
                'codigo_ref' => 'CM',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            31 => 
            array (
                'id' => 32,
                'nombre' => 'Canadá',
                'codigo_ref' => 'CA',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            32 => 
            array (
                'id' => 33,
                'nombre' => 'Chipre',
                'codigo_ref' => 'CY',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            33 => 
            array (
                'id' => 34,
                'nombre' => 'Kirguistán',
                'codigo_ref' => 'KG',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            34 => 
            array (
                'id' => 35,
                'nombre' => 'China',
                'codigo_ref' => 'CN',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            35 => 
            array (
                'id' => 36,
                'nombre' => 'Costa Rica',
                'codigo_ref' => 'CR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            36 => 
            array (
                'id' => 37,
                'nombre' => 'Kuwait',
                'codigo_ref' => 'KW',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            37 => 
            array (
                'id' => 38,
                'nombre' => 'Letonia',
                'codigo_ref' => 'LV',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            38 => 
            array (
                'id' => 39,
                'nombre' => 'Libia',
                'codigo_ref' => 'LY',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            39 => 
            array (
                'id' => 40,
                'nombre' => 'Lituania',
                'codigo_ref' => 'LT',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            40 => 
            array (
                'id' => 41,
                'nombre' => 'Luxemburgo',
                'codigo_ref' => 'LU',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            41 => 
            array (
                'id' => 42,
                'nombre' => 'México',
                'codigo_ref' => 'MX',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            42 => 
            array (
                'id' => 43,
                'nombre' => 'Moldavia',
                'codigo_ref' => 'MD',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            43 => 
            array (
                'id' => 44,
                'nombre' => 'Mónaco',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            44 => 
            array (
                'id' => 45,
                'nombre' => 'Nueva Zelanda',
                'codigo_ref' => 'NZ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            45 => 
            array (
                'id' => 46,
                'nombre' => 'Noruega',
                'codigo_ref' => 'NO',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            46 => 
            array (
                'id' => 47,
                'nombre' => 'Polonia',
                'codigo_ref' => 'PL',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            47 => 
            array (
                'id' => 48,
                'nombre' => 'Portugal',
                'codigo_ref' => 'PT',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            48 => 
            array (
                'id' => 49,
                'nombre' => 'Reunión',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            49 => 
            array (
                'id' => 50,
                'nombre' => 'Rusia',
                'codigo_ref' => 'RU',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            50 => 
            array (
                'id' => 51,
                'nombre' => 'El Salvador',
                'codigo_ref' => 'SV',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            51 => 
            array (
                'id' => 52,
                'nombre' => 'Eslovaquia',
                'codigo_ref' => 'SK',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            52 => 
            array (
                'id' => 53,
                'nombre' => 'Eslovenia',
                'codigo_ref' => 'SI',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            53 => 
            array (
                'id' => 54,
                'nombre' => 'Surinam',
                'codigo_ref' => 'SR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            54 => 
            array (
                'id' => 55,
                'nombre' => 'Estados Unidos',
                'codigo_ref' => 'US',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            55 => 
            array (
                'id' => 56,
                'nombre' => 'Tadjikistan',
                'codigo_ref' => 'TJ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            56 => 
            array (
                'id' => 57,
                'nombre' => 'Turkmenistan',
                'codigo_ref' => 'TM',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            57 => 
            array (
                'id' => 58,
                'nombre' => 'Islas Turcas y Caicos',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            58 => 
            array (
                'id' => 59,
                'nombre' => 'Turquía',
                'codigo_ref' => 'TR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            59 => 
            array (
                'id' => 60,
                'nombre' => 'Uganda',
                'codigo_ref' => 'UG',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            60 => 
            array (
                'id' => 61,
                'nombre' => 'Uzbekistán',
                'codigo_ref' => 'UZ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            61 => 
            array (
                'id' => 62,
                'nombre' => 'Ucrania',
                'codigo_ref' => 'UA',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            62 => 
            array (
                'id' => 63,
                'nombre' => 'Finlandia',
                'codigo_ref' => 'FI',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            63 => 
            array (
                'id' => 64,
                'nombre' => 'Francia',
                'codigo_ref' => 'FR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            64 => 
            array (
                'id' => 65,
                'nombre' => 'República Checa',
                'codigo_ref' => 'CZ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            65 => 
            array (
                'id' => 66,
                'nombre' => 'Suiza',
                'codigo_ref' => 'CH',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            66 => 
            array (
                'id' => 67,
                'nombre' => 'Suecia',
                'codigo_ref' => 'SE',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            67 => 
            array (
                'id' => 68,
                'nombre' => 'Estonia',
                'codigo_ref' => 'EE',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            68 => 
            array (
                'id' => 69,
                'nombre' => 'Corea del Sur',
                'codigo_ref' => 'KR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            69 => 
            array (
                'id' => 70,
                'nombre' => 'Japón',
                'codigo_ref' => 'JP',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            70 => 
            array (
                'id' => 71,
                'nombre' => 'Croacia',
                'codigo_ref' => 'HR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            71 => 
            array (
                'id' => 72,
                'nombre' => 'Rumanía',
                'codigo_ref' => 'RO',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            72 => 
            array (
                'id' => 73,
                'nombre' => 'Hong Kong',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            73 => 
            array (
                'id' => 74,
                'nombre' => 'Indonesia',
                'codigo_ref' => 'ID',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            74 => 
            array (
                'id' => 75,
                'nombre' => 'Jordania',
                'codigo_ref' => 'JO',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            75 => 
            array (
                'id' => 76,
                'nombre' => 'Malasia',
                'codigo_ref' => 'MY',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            76 => 
            array (
                'id' => 77,
                'nombre' => 'Singapur',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            77 => 
            array (
                'id' => 78,
                'nombre' => 'Taiwan',
                'codigo_ref' => 'TW',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            78 => 
            array (
                'id' => 79,
                'nombre' => 'Bosnia y Herzegovina',
                'codigo_ref' => 'BA',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            79 => 
            array (
                'id' => 80,
                'nombre' => 'Bahamas',
                'codigo_ref' => 'BS',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            80 => 
            array (
                'id' => 81,
                'nombre' => 'Chile',
                'codigo_ref' => 'CL',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            81 => 
            array (
                'id' => 82,
                'nombre' => 'Colombia',
                'codigo_ref' => 'CO',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            82 => 
            array (
                'id' => 83,
                'nombre' => 'Islandia',
                'codigo_ref' => 'IS',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            83 => 
            array (
                'id' => 84,
                'nombre' => 'Corea del Norte',
                'codigo_ref' => 'KP',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            84 => 
            array (
                'id' => 85,
                'nombre' => 'Macedonia',
                'codigo_ref' => 'MK',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            85 => 
            array (
                'id' => 86,
                'nombre' => 'Malta',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            86 => 
            array (
                'id' => 87,
                'nombre' => 'Pakistán',
                'codigo_ref' => 'PK',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            87 => 
            array (
                'id' => 88,
                'nombre' => 'Papúa-Nueva Guinea',
                'codigo_ref' => 'PG',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            88 => 
            array (
                'id' => 89,
                'nombre' => 'Perú',
                'codigo_ref' => 'PE',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            89 => 
            array (
                'id' => 90,
                'nombre' => 'Filipinas',
                'codigo_ref' => 'PH',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            90 => 
            array (
                'id' => 91,
                'nombre' => 'Arabia Saudita',
                'codigo_ref' => 'SA',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            91 => 
            array (
                'id' => 92,
                'nombre' => 'Tailandia',
                'codigo_ref' => 'TH',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            92 => 
            array (
                'id' => 93,
                'nombre' => 'Emiratos árabes Unidos',
                'codigo_ref' => 'AE',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            93 => 
            array (
                'id' => 94,
                'nombre' => 'Groenlandia',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            94 => 
            array (
                'id' => 95,
                'nombre' => 'Venezuela',
                'codigo_ref' => 'VE',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            95 => 
            array (
                'id' => 96,
                'nombre' => 'Zimbabwe',
                'codigo_ref' => 'ZW',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            96 => 
            array (
                'id' => 97,
                'nombre' => 'Kenia',
                'codigo_ref' => 'KE',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            97 => 
            array (
                'id' => 98,
                'nombre' => 'Argelia',
                'codigo_ref' => 'DZ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            98 => 
            array (
                'id' => 99,
                'nombre' => 'Líbano',
                'codigo_ref' => 'LB',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            99 => 
            array (
                'id' => 100,
                'nombre' => 'Botsuana',
                'codigo_ref' => 'BW',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            100 => 
            array (
                'id' => 101,
                'nombre' => 'Tanzania',
                'codigo_ref' => 'TZ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            101 => 
            array (
                'id' => 102,
                'nombre' => 'Namibia',
                'codigo_ref' => 'NA',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            102 => 
            array (
                'id' => 103,
                'nombre' => 'Ecuador',
                'codigo_ref' => 'EC',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            103 => 
            array (
                'id' => 104,
                'nombre' => 'Marruecos',
                'codigo_ref' => 'MA',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            104 => 
            array (
                'id' => 105,
                'nombre' => 'Ghana',
                'codigo_ref' => 'GH',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            105 => 
            array (
                'id' => 106,
                'nombre' => 'Siria',
                'codigo_ref' => 'SY',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            106 => 
            array (
                'id' => 107,
                'nombre' => 'Nepal',
                'codigo_ref' => 'NP',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            107 => 
            array (
                'id' => 108,
                'nombre' => 'Mauritania',
                'codigo_ref' => 'MR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            108 => 
            array (
                'id' => 109,
                'nombre' => 'Seychelles',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            109 => 
            array (
                'id' => 110,
                'nombre' => 'Paraguay',
                'codigo_ref' => 'PY',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            110 => 
            array (
                'id' => 111,
                'nombre' => 'Uruguay',
                'codigo_ref' => 'UY',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            111 => 
            array (
                'id' => 112,
            'nombre' => 'Congo (Brazzaville)',
                'codigo_ref' => 'CG',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            112 => 
            array (
                'id' => 113,
                'nombre' => 'Cuba',
                'codigo_ref' => 'CU',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            113 => 
            array (
                'id' => 114,
                'nombre' => 'Albania',
                'codigo_ref' => 'AL',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            114 => 
            array (
                'id' => 115,
                'nombre' => 'Nigeria',
                'codigo_ref' => 'NG',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            115 => 
            array (
                'id' => 116,
                'nombre' => 'Zambia',
                'codigo_ref' => 'ZM',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            116 => 
            array (
                'id' => 117,
                'nombre' => 'Mozambique',
                'codigo_ref' => 'MZ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            117 => 
            array (
                'id' => 119,
                'nombre' => 'Angola',
                'codigo_ref' => 'AO',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            118 => 
            array (
                'id' => 120,
                'nombre' => 'Sri Lanka',
                'codigo_ref' => 'LK',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            119 => 
            array (
                'id' => 121,
                'nombre' => 'Etiopía',
                'codigo_ref' => 'ET',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            120 => 
            array (
                'id' => 122,
                'nombre' => 'Túnez',
                'codigo_ref' => 'TN',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            121 => 
            array (
                'id' => 123,
                'nombre' => 'Bolivia',
                'codigo_ref' => 'BO',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            122 => 
            array (
                'id' => 124,
                'nombre' => 'Panamá',
                'codigo_ref' => 'PA',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            123 => 
            array (
                'id' => 125,
                'nombre' => 'Malawi',
                'codigo_ref' => 'MW',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            124 => 
            array (
                'id' => 126,
                'nombre' => 'Liechtenstein',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            125 => 
            array (
                'id' => 127,
                'nombre' => 'Bahrein',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            126 => 
            array (
                'id' => 128,
                'nombre' => 'Barbados',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            127 => 
            array (
                'id' => 130,
                'nombre' => 'Chad',
                'codigo_ref' => 'TD',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            128 => 
            array (
                'id' => 131,
                'nombre' => 'Man, Isla de',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            129 => 
            array (
                'id' => 132,
                'nombre' => 'Jamaica',
                'codigo_ref' => 'JM',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            130 => 
            array (
                'id' => 133,
                'nombre' => 'Malí',
                'codigo_ref' => 'ML',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            131 => 
            array (
                'id' => 134,
                'nombre' => 'Madagascar',
                'codigo_ref' => 'MG',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            132 => 
            array (
                'id' => 135,
                'nombre' => 'Senegal',
                'codigo_ref' => 'SN',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            133 => 
            array (
                'id' => 136,
                'nombre' => 'Togo',
                'codigo_ref' => 'TG',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            134 => 
            array (
                'id' => 137,
                'nombre' => 'Honduras',
                'codigo_ref' => 'HN',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            135 => 
            array (
                'id' => 138,
                'nombre' => 'República Dominicana',
                'codigo_ref' => 'DO',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            136 => 
            array (
                'id' => 139,
                'nombre' => 'Mongolia',
                'codigo_ref' => 'MN',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            137 => 
            array (
                'id' => 140,
                'nombre' => 'Irak',
                'codigo_ref' => 'IQ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            138 => 
            array (
                'id' => 141,
                'nombre' => 'Sudáfrica',
                'codigo_ref' => 'ZA',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            139 => 
            array (
                'id' => 142,
                'nombre' => 'Aruba',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            140 => 
            array (
                'id' => 143,
                'nombre' => 'Gibraltar',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            141 => 
            array (
                'id' => 144,
                'nombre' => 'Afganistán',
                'codigo_ref' => 'AF',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            142 => 
            array (
                'id' => 145,
                'nombre' => 'Andorra',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            143 => 
            array (
                'id' => 147,
                'nombre' => 'Antigua y Barbuda',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            144 => 
            array (
                'id' => 149,
                'nombre' => 'Bangladesh',
                'codigo_ref' => 'BD',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            145 => 
            array (
                'id' => 151,
                'nombre' => 'Benín',
                'codigo_ref' => 'BJ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            146 => 
            array (
                'id' => 152,
                'nombre' => 'Bután',
                'codigo_ref' => 'BT',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            147 => 
            array (
                'id' => 154,
                'nombre' => 'Islas Virgenes Británicas',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            148 => 
            array (
                'id' => 155,
                'nombre' => 'Brunéi',
                'codigo_ref' => 'BN',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            149 => 
            array (
                'id' => 156,
                'nombre' => 'Burkina Faso',
                'codigo_ref' => 'BF',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            150 => 
            array (
                'id' => 157,
                'nombre' => 'Burundi',
                'codigo_ref' => 'BI',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            151 => 
            array (
                'id' => 158,
                'nombre' => 'Camboya',
                'codigo_ref' => 'KH',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            152 => 
            array (
                'id' => 159,
                'nombre' => 'Cabo Verde',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            153 => 
            array (
                'id' => 164,
                'nombre' => 'Comores',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            154 => 
            array (
                'id' => 165,
            'nombre' => 'Congo (Kinshasa)',
                'codigo_ref' => 'CD',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            155 => 
            array (
                'id' => 166,
                'nombre' => 'Cook, Islas',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            156 => 
            array (
                'id' => 168,
                'nombre' => 'Costa de Marfil',
                'codigo_ref' => 'CI',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            157 => 
            array (
                'id' => 169,
                'nombre' => 'Djibouti, Yibuti',
                'codigo_ref' => 'DJ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            158 => 
            array (
                'id' => 171,
                'nombre' => 'Timor Oriental',
                'codigo_ref' => 'TL',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            159 => 
            array (
                'id' => 172,
                'nombre' => 'Guinea Ecuatorial',
                'codigo_ref' => 'GQ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            160 => 
            array (
                'id' => 173,
                'nombre' => 'Eritrea',
                'codigo_ref' => 'ER',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            161 => 
            array (
                'id' => 175,
                'nombre' => 'Feroe, Islas',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            162 => 
            array (
                'id' => 176,
                'nombre' => 'Fiyi',
                'codigo_ref' => 'FJ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            163 => 
            array (
                'id' => 178,
                'nombre' => 'Polinesia Francesa',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            164 => 
            array (
                'id' => 180,
                'nombre' => 'Gabón',
                'codigo_ref' => 'GA',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            165 => 
            array (
                'id' => 181,
                'nombre' => 'Gambia',
                'codigo_ref' => 'GM',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            166 => 
            array (
                'id' => 184,
                'nombre' => 'Granada',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            167 => 
            array (
                'id' => 185,
                'nombre' => 'Guatemala',
                'codigo_ref' => 'GT',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            168 => 
            array (
                'id' => 186,
                'nombre' => 'Guernsey',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            169 => 
            array (
                'id' => 187,
                'nombre' => 'Guinea',
                'codigo_ref' => 'GN',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            170 => 
            array (
                'id' => 188,
                'nombre' => 'Guinea-Bissau',
                'codigo_ref' => 'GW',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            171 => 
            array (
                'id' => 189,
                'nombre' => 'Guyana',
                'codigo_ref' => 'GY',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            172 => 
            array (
                'id' => 193,
                'nombre' => 'Jersey',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            173 => 
            array (
                'id' => 195,
                'nombre' => 'Kiribati',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            174 => 
            array (
                'id' => 196,
                'nombre' => 'Laos',
                'codigo_ref' => 'LA',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            175 => 
            array (
                'id' => 197,
                'nombre' => 'Lesotho',
                'codigo_ref' => 'LS',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            176 => 
            array (
                'id' => 198,
                'nombre' => 'Liberia',
                'codigo_ref' => 'LR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            177 => 
            array (
                'id' => 200,
                'nombre' => 'Maldivas',
                'codigo_ref' => 'FK',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            178 => 
            array (
                'id' => 201,
                'nombre' => 'Martinica',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            179 => 
            array (
                'id' => 202,
                'nombre' => 'Mauricio',
                'codigo_ref' => 'MR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            180 => 
            array (
                'id' => 205,
                'nombre' => 'Myanmar',
                'codigo_ref' => 'MM',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            181 => 
            array (
                'id' => 206,
                'nombre' => 'Nauru',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            182 => 
            array (
                'id' => 207,
                'nombre' => 'Antillas Holandesas',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            183 => 
            array (
                'id' => 208,
                'nombre' => 'Nueva Caledonia',
                'codigo_ref' => 'NC',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            184 => 
            array (
                'id' => 209,
                'nombre' => 'Nicaragua',
                'codigo_ref' => 'NI',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            185 => 
            array (
                'id' => 210,
                'nombre' => 'Níger',
                'codigo_ref' => 'NE',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            186 => 
            array (
                'id' => 212,
                'nombre' => 'Norfolk Island',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            187 => 
            array (
                'id' => 213,
                'nombre' => 'Omán',
                'codigo_ref' => 'OM',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            188 => 
            array (
                'id' => 215,
                'nombre' => 'Isla Pitcairn',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            189 => 
            array (
                'id' => 216,
                'nombre' => 'Qatar',
                'codigo_ref' => 'QA',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            190 => 
            array (
                'id' => 217,
                'nombre' => 'Ruanda',
                'codigo_ref' => 'RW',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            191 => 
            array (
                'id' => 218,
                'nombre' => 'Santa Elena',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            192 => 
            array (
                'id' => 219,
                'nombre' => 'San Cristobal y Nevis',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            193 => 
            array (
                'id' => 220,
                'nombre' => 'Santa Lucía',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            194 => 
            array (
                'id' => 221,
                'nombre' => 'San Pedro y Miquelón',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            195 => 
            array (
                'id' => 222,
                'nombre' => 'San Vincente y Granadinas',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            196 => 
            array (
                'id' => 223,
                'nombre' => 'Samoa',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            197 => 
            array (
                'id' => 224,
                'nombre' => 'San Marino',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            198 => 
            array (
                'id' => 225,
                'nombre' => 'San Tomé y Príncipe',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            199 => 
            array (
                'id' => 226,
                'nombre' => 'Serbia y Montenegro',
                'codigo_ref' => 'RS',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            200 => 
            array (
                'id' => 227,
                'nombre' => 'Sierra Leona',
                'codigo_ref' => 'SL',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            201 => 
            array (
                'id' => 228,
                'nombre' => 'Islas Salomón',
                'codigo_ref' => 'SB',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            202 => 
            array (
                'id' => 229,
                'nombre' => 'Somalia',
                'codigo_ref' => 'SO',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            203 => 
            array (
                'id' => 232,
                'nombre' => 'Sudán',
                'codigo_ref' => 'SD',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            204 => 
            array (
                'id' => 234,
                'nombre' => 'Swazilandia',
                'codigo_ref' => 'SZ',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            205 => 
            array (
                'id' => 235,
                'nombre' => 'Tokelau',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            206 => 
            array (
                'id' => 236,
                'nombre' => 'Tonga',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            207 => 
            array (
                'id' => 237,
                'nombre' => 'Trinidad y Tobago',
                'codigo_ref' => 'TT',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            208 => 
            array (
                'id' => 239,
                'nombre' => 'Tuvalu',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            209 => 
            array (
                'id' => 240,
                'nombre' => 'Vanuatu',
                'codigo_ref' => 'VU',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            210 => 
            array (
                'id' => 241,
                'nombre' => 'Wallis y Futuna',
                'codigo_ref' => NULL,
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            211 => 
            array (
                'id' => 242,
                'nombre' => 'Sáhara Occidental',
                'codigo_ref' => 'EH',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            212 => 
            array (
                'id' => 243,
                'nombre' => 'Yemen',
                'codigo_ref' => 'YE',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            213 => 
            array (
                'id' => 246,
                'nombre' => 'Puerto Rico',
                'codigo_ref' => 'PR',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            214 => 
            array (
                'id' => 247,
                'nombre' => 'Birmania',
                'codigo_ref' => '',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            215 => 
            array (
                'id' => 248,
                'nombre' => 'Islas Marshall',
                'codigo_ref' => '',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            216 => 
            array (
                'id' => 249,
                'nombre' => 'Kosovo',
                'codigo_ref' => 'XK',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            217 => 
            array (
                'id' => 250,
                'nombre' => 'Micronesia',
                'codigo_ref' => '',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            218 => 
            array (
                'id' => 251,
                'nombre' => 'Palaos',
                'codigo_ref' => '',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            219 => 
            array (
                'id' => 252,
                'nombre' => 'Palestina',
                'codigo_ref' => 'PS',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            220 => 
            array (
                'id' => 253,
                'nombre' => 'Suazilandia',
                'codigo_ref' => '',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
            221 => 
            array (
                'id' => 254,
                'nombre' => 'Vaticano',
                'codigo_ref' => '',
                'nativo' => 1,
                'created_at' => '1990-01-01 01:01:01',
                'updated_at' => '1990-01-01 01:01:01',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
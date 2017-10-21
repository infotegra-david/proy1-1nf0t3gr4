<?php

use Illuminate\Database\Seeder;

class DatosPersonalesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('datos_personales')->delete();
        
        \DB::table('datos_personales')->insert(array (
            0 => 
            array (
                'id' => 1,
                'nombres' => 'Soporte nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'soporte_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Soporte',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'nombres' => 'Director de programa nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'director_programa_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Director de programa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'nombres' => 'Coordinador Externo nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'coordinador_externo_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Coordinador Externo',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'nombres' => 'Coordinador Interno nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'coordinador_interno_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Coordinador Interno',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'nombres' => 'Profesor nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'profesor_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Profesor',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'nombres' => 'Validador1 nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'validador_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Validador',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'nombres' => 'Representante Legal nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'representante_legal_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Representante Legal',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'nombres' => 'Creador Iniciativa nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'creador_iniciativa_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Creador Iniciativa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 9,
                'nombres' => 'Aliado Iniciativa nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'aliado_iniciativa_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Aliado Iniciativa',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 10,
                'nombres' => 'Estudiante nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'estudiante_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Estudiante',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            10 => 
            array (
                'id' => 11,
                'nombres' => 'Particular nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'particular_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Particular',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            11 => 
            array (
                'id' => 12,
                'nombres' => 'copia oculta emails nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'copia_oculta_emails_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'copia oculta emails',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            12 => 
            array (
                'id' => 13,
                'nombres' => 'ORII nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'orii_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'ORII',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            13 => 
            array (
                'id' => 14,
                'nombres' => 'Vicerrectoría Académica nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'vrac_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Vicerrectoría Académica',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            14 => 
            array (
                'id' => 15,
                'nombres' => 'Oficina de Admisiones y Registro nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'oar_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Oficina de Admisiones y Registro',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            15 => 
            array (
                'id' => 16,
                'nombres' => 'Santo Tomas nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'usta_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Santo Tomas',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            16 => 
            array (
                'id' => 17,
                'nombres' => 'Javeriana nombre',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'ausjal_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'Javeriana',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            17 => 
            array (
                'id' => 18,
                'nombres' => 'validador1',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'validador1_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'validador1',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
            18 => 
            array (
                'id' => 19,
                'nombres' => 'validador2',
                'apellidos' => 'Apellido1 Apellido2',
                'ciudad_residencia_id' => 1,
                'direccion' => 'direccion 123',
                'email_personal' => 'validador1_personal@interactin.com',
                'telefono' => '7381245',
                'celular' => '321654987',
                'codigo_postal' => '1324567',
                'tipo_documento_id' => 10,
                'numero_documento' => '1032165498',
                'fecha_expedicion' => '1990-01-01',
                'fecha_vencimiento' => '1990-01-01',
                'lugar_expedicion_id' => 1,
                'nacionalidad_id' => 1,
                'nro_pasaporte' => '123456798',
                'porcentaje_aprobado' => 85,
                'promedio_acumulado' => 4.5,
                'codigo_institucion' => '12345',
                'cargo' => 'validador1',
                'created_at' => NULL,
                'updated_at' => NULL,
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}
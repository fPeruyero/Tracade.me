<?php

use Illuminate\Database\Seeder;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Creacion de las dos disciplinas principales
         */
        factory(\App\Disciplina::class)->create([
            'dis_nombre' => 'Pole Fitness',
            'dis_descripcion' => 'Discplina wlkwekwdekl'
        ]);
        factory(\App\Disciplina::class)->create([
            'dis_nombre' => 'Telas Aereas',
            'dis_descripcion' => 'Discplina wlkwekwdekl'
        ]);

        /**
         * Creacion de 6 aulas
         */
        factory(\App\Aula::class)->create([
            'aul_salon' => 'Aula 1'
        ]);

        factory(\App\Aula::class, 5)->create();

        /**
         * Creacion de grupos
         */
        factory(\App\Grupo::class, 5)->create();

        /**
         * Creacion de alumnos
         */

        for ($i = 1; $i < 11; $i++){
            factory(\App\Alumno::class)->create([
                'id' => $i,
                'created_at' => \Carbon\Carbon::createFromDate(null, rand(1,12), rand(1, 28))
            ]);
            factory(\App\DisciplinaAlumno::class)->create([
                'alu_id' => $i,
                'dis_id' => rand(1,2)
            ]);
        }

        /**
         * Habilidades
         */
        $poleId = \App\Disciplina::where('dis_nombre', 'Pole Fitness')->value('id');
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Allegra',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Boomerang',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Cocoon',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /////
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Inversion Basica',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Marley',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Media Mariposa',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Teddy',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Toothbrush',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $poleId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /**
         * Telas aereas
         */

        $TelasId = \App\Disciplina::where('dis_nombre', 'Telas aereas')->value('id');
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Bandera',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Catcher',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Curly Wurly',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /////
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Dislocado',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Estrella',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Monkey',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Split Balance',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        factory(\App\Habilidad::class)->create([
            'hab_nombre' => 'Sylph',
            'hab_imagen' => 'principal.jpg',
            'dis_id' => $TelasId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        /**
         * Evaluaciones
         */

        factory(\App\Evaluacion::class, 100)->create();
    }

    public function seedAlumno(){

    }
}

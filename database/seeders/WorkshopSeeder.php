<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkshopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('workshop')->insert([
            'name' => 'Narrativa',
            'description' => 'En cada sesión del taller de poesía se les da una pauta formal o temática a los participantes, a partir de las cuales estos escriben libremente, con la única condición-límite de seguir una técnica específica.'

        ]);

        DB::table('workshop')->insert([
            'name' => 'Radio',
            'description' => 'Se genera una mesa de diálogos sobre temas propuestos por los participantes, expresando a través de personajes ficcionados sus puntos de vista, son cápsulas de 15 a 20 minutos, el talleristas va genrerando la fluidez y va acompasando a los participantes en sus intervenciones.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'Panadería',
            'description' => 'Es una actividad que se realiza con frecuencia semanal, en donde se busca que los huéspedes aprendan a trabajar con la masa, sus propiedades y la manera en cómo los ingredientes en conjunto producen un resultado para el autoconsumo.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'Huerto urbano',
            'description' => 'Es una actividad que se lleva a cabo dos veces por semana, se utiliza un pequeño huerto en el interior de la comunidad en donde se han ido mejorando y aprendiendo sobre siembra, cosecha y cuidado de hortalizas para el auto consumo y para el cuidado de otro ser vivo.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'Yoga',
            'description' => 'Las técnicas de esta disciplina son diversas, sin embargo, en el caso de este taller se busca principalmente que los huéspedes desarrollen habilidades de respiración que en momentos críticos y de frustración resultan ser una herramienta muy útil para manejar sus emociones.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'Caligrafía',
            'description' => 'Se promueve la concentración y la actividad psicomotora fina haciendo uso de una estructura con bases geométricas de las letras que permite estimular el lado estructurado del cerebro y también el lado creativo, además de fomentar el desvanecimiento de pensamientos alternos.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'Alfarería',
            'description' => 'Se llevan los pasos de hidratación, amasado, elección de la pieza, proceso de creación, secado, quema y decorado final. Se da la libertad a los huéspedes de realizar la pieza que ellos deseen. La mayoría se vuelven regalos y una forma establecer un vínculo significativo.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'Stand up',
            'description' => 'Los participantes crean un pseudónimo o personalidad cómica, con el fin de construir un personaje que pueda manifestar sus pensamientos o recibir críticas. Estos personajes junto con la comedia son una vía para generar otra forma de estabilización en lo social.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'Papiroflexia',
            'description' => 'Se recorren distintas técnicas artísticas en las sesiones, fomentando la originalidad e innovación al crear las piezas. Esto refuerza tanto funciones cognitivas de la memoria, concentración y razonamiento, como capacidades psicomotrices, de coordinación y de precisión manual.'

        ]);


    }
}

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
            'description' => 'En cada sesión del taller de poesía se les da una pauta formal o temática a los participantes, a partir de las cuales éstos escriben libremente, con la única condición-límite de seguir una técnica específica.'

        ]);

        DB::table('workshop')->insert([
            'name' => 'Radio',
            'description' => 'Este taller se genera una mesa de diálogos
                                                sobre temas propuestos por los participantes, expresando a través de
                                                personajes ficticios sus puntos de vista, son pequeñas cápsulas de 15 a
                                                20 minutos, el tallerista va generando la fluidez y va acompasando a los
                                                participantes en sus intervenciones.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'PANADERÍA',
            'description' => 'Más que un taller es una actividad que se
                                                realiza con frecuencia semanal. En donde se busca que los huéspedes
                                                aprendan a trabajar con la masa, sus propiedades y la manera en cómo los
                                                ingredientes en conjunto producen un resultado para el autoconsumo. '

        ]);
        DB::table('workshop')->insert([
            'name' => 'HUERTO URBANO',
            'description' => 'El huerto urbano, es una actividad que se
                                                lleva a acabo dos veces por semana, entre varios. A lo largo de los
                                                últimos 4 años se implementó un pequeño huerto en el interior de la
                                                comunidad en donde se han ido mejorando y aprendiendo
                                                procesos de siembra, cosecha y cuidado de hortalizas para el
                                                autoconsumo, pero también para el cuidado de otro ser vivo.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'YOGA',
            'description' => 'El yoga es una disciplina que permite
                                                trabajar con las frecuencias cardíacas y de relajación muscular. Las
                                                técnicas son diversas, sin embargo, en el caso de este taller se busca
                                                principalmente que los huéspedes desarrollen habilidades de respiración
                                                que en momentos críticos y de frustración resultan ser una herramienta
                                                muy útil para manejar las emociones.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'CALIGRAFÍA',
            'description' => 'Al ser un taller en donde se promueve la
                                                actividad psicomotora fina y haciendo uso de una estructura con bases
                                                geométricas de las letras se permite estimular el lado estructurado del
                                                cerebro, pero también el lado creativo. La caligrafía es una actividad
                                                que promueve la concentración y fomenta el desvanecimiento de
                                                pensamientos alternos.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'BARRO',
            'description' => 'La alfarería conlleva varios procesos que
                                                no solamente se ven evidenciados de manera física, sino que para que
                                                sean posibles físicamente, se requiere llevar a cabo el mismo proceso
                                                de manera psíquica. Por lo que a partir de lo que se va realizando, se
                                                identifican las dificultades que presenta el psiquísmo. A partir de
                                                ello se trabaja sobre
                                                actividades específicas que benefician esos procesos. Este taller ha
                                                dado lugar a la creación de macetas, cajas, ceniceros, tazas, juegos,
                                                esculturas y más, frecuentemente con la intención de ser regalados y por
                                                consecuente convirtiéndose en una forma singular de establecer vínculos
                                                significativos.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'STAND UP',
            'description' => 'La comedia se convierte en una vía para generar otra forma de
                                                estabilización en lo social, a través de la creación de un pseudónimo o
                                                personalidad cómica es posible para los huéspedes manifestar sus
                                                pensamientos o recibir críticas de una mejor manera.'

        ]);
        DB::table('workshop')->insert([
            'name' => 'PAPIROFLEXIA',
            'description' => ' La papiroflexia, además de ser una manualidad con diferentes modalidades
                                                y líneas de trabajo, es considerada un arte. En el taller se recorren
                                                diferentes técnicas artísticas, con el fin de fomentar la originalidad e
                                                innovación en los huéspedes. Dentro de una dimensión terapéutica,
                                                podemos citar varios efectos, como el refuerzo de las funciones
                                                cognitivas relativas a la memoria y el razonamiento y desarrollo de
                                                cuestiones psicomotrices, pues se requiere tanto de destreza,
                                                coordinación y precisión manual, como de sostener la atención y
                                                concentración durante la elaboración de las figuras.'

        ]);


    }
}
